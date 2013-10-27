$(document).ready(function(){

	var unis = [];

	$('#uni').change(function(e){
		var uni_id = $(e.target).val();

		$('.uni_change:not(.hidden)').addClass('hidden');
		$('.exams_for_' + uni_id).removeClass('hidden');
//		$('#save').addClass('hidden');
		$('#exam_info').text('');

		$('#specialty_show').removeClass('hidden');

		$('#exams_' + uni_id + ' option:first').attr('selected', true);

		$('#apply-add').removeClass('hidden');
	});

	var exam_change = function(e){
		var uni_id = $('#uni').val(),
			exam_id = $(e.target).val() * 1;

//		$('#save').toggleClass('hidden', !exam_id);

		$(e.target).closest('.specialty_holder').find('.exam_info').text(exams[uni_id][exam_id].info);

		$('#send, .info_wishlist').removeClass('hidden');
	};

	$('.exam_change').bind('change', exam_change);

//	$('#save').click(function(){
	$('#send').click(function(e){
		var uni_id = $('#uni').val(),
			exam_elements = $('.exams_for_' + uni_id);

		$.each(exam_elements, function(a, x){
			if($(x).val()){
				unis.push({
					uni_id: uni_id,
					exam_id: $(x).val()
				});
			}
		});

//		$('#exams_' + uni_id).find('option[value=' + exam_id + ']').remove();

		if($('#exams_' + uni_id + ' option').length <= 1){

			$('#exams_' + uni_id).remove();
			$('#uni').find('option[value=' + uni_id + ']').remove();

			if($('#uni option').length <= 1){
				$('#uni').remove();
			}
		}

//		$('#save').addClass('hidden');
//		$('#send, #apply-add').removeClass('hidden');
//		$('#exam_info').text('');
//	});
//
//	$('#send').click(function(e){
		$(e.target).closest('form').append('<input type="hidden" name="data" />');
		$(e.target).closest('form').find('input[type=hidden]').val(JSON.stringify(unis));

		$(e.target).closest('form').submit();

		return false;
	});

	$('#apply-add').click(function(e){
		$($(e.target).closest('form').find('select:visible:nth(1)').closest('.specialty_holder')).clone().appendTo('#specialty_show');
		$('.specialty_holder:last').bind('change', exam_change);

		$('.exam_info:last').text('');

		return false;
	});
});
