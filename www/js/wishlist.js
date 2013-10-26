$(document).ready(function(){

	var unis = [];

	$('#uni').change(function(e){
		var uni_id = $(e.target).val();

		$('.uni_change:not(.hidden)').addClass('hidden');
		$('#exams_' + uni_id).removeClass('hidden');
		$('#save').addClass('hidden');
		$('#exam_info').text('');
	});

	$('.uni_change').change(function(e){
		var uni_id = $('#uni').val(),
			exam_id = $(e.target).val() * 1;

		$('#save').toggleClass('hidden', !exam_id);

		if(exam_id){
			$('#exam_info').text(exams[uni_id][exam_id].info);
		}else{
			$('#exam_info').text('');
		}
	});

	$('#save').click(function(){
		var uni_id = $('#uni').val(),
			uni_name = $('#uni option[value=' + uni_id + ']').text(),
			exam_id = $('#exams_' + uni_id).val(),
			exam_name = $('#exams_' + uni_id + ' option[value=' + exam_id + ']').text();

		$('#selected_exams').append('<div>' + uni_name + ': ' + exam_name + '</div>');

		unis.push({
			uni_id: uni_id,
			exam_id: exam_id
		});

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
	});

	$('#send').click(function(e){
		$(e.target).closest('form').append('<input type="hidden" name="data" />');
		$(e.target).closest('form').find('input[type=hidden]').val(JSON.stringify(unis));

		return true;
	});

});
