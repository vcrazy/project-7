$(document).ready(function(){

	var unis = [];

	$('#uni').change(function(e){
		var uni_id = $(e.target).val();

		$('.uni_change:not(.hidden)').addClass('hidden');
		$('#exams_' + uni_id).removeClass('hidden');
		$('#save').addClass('hidden');
		$('#exam_info').text('');

		$('#specialty_show').removeClass('hidden');

		$('#exams_' + uni_id + ' option:first').attr('selected', true);
	});

	var exam_change = function(e){
		var uni_id = $('#uni').val(),
			exam_id = $(e.target).val() * 1;

		$('#save').toggleClass('hidden', !exam_id);

		$(e.target).closest('.specialty_holder').find('.exam_info').text(exams[uni_id][exam_id].info);

		$($(e.target).closest('.specialty_holder')).clone().appendTo('#specialty_show');
		$('.specialty_holder:last').bind('change', exam_change);

		$('.exam_info:last').text('');
	};

	$('.exam_change').bind('change', exam_change);

//	$('#save').click(function(){
	$('#send').click(function(e){
		var uni_id = $('#uni').val(),
			uni_name = $('#uni option[value=' + uni_id + ']').text(),
			exam_elements = $('.exam_change:not(:last)'),
			exam_ids= [];

		$('#selected_exams').append('<div>' + uni_name + ': ' + exam_name + '</div>');

		$.each(exam_elements, function(a, x){
			unis.push({
				uni_id: uni_id,
				exam_id: $(x).val()
			});
		});
		console.log(unis);return false;

		$('#exams_' + uni_id).find('option[value=' + exam_id + ']').remove();

		if($('#exams_' + uni_id + ' option').length <= 1){

			$('#exams_' + uni_id).remove();
			$('#uni').find('option[value=' + uni_id + ']').remove();

			if($('#uni option').length <= 1){
				$('#uni').remove();
			}
		}

		$('#save').addClass('hidden');
		$('#send').removeClass('hidden');
		$('#exam_info').text('');
//	});
//
//	$('#send').click(function(e){
		$(e.target).closest('form').append('<input type="hidden" name="data" />');
		$(e.target).closest('form').find('input[type=hidden]').val(JSON.stringify(unis));

		return true;
	});

});
