$(document).ready(function(){

	var specs = [];

	$('#uni').change(function(e){
		var uni_id = $(e.target).val() * 1;

		$('.faculty_change:not(.hidden)').addClass('hidden');
		$('.specialty_change:not(.hidden)').addClass('hidden');
		$('#faculty_' + uni_id).removeClass('hidden');

		$('.faculty_text').toggleClass('hidden', !uni_id);

		$('#save').addClass('hidden');
//		$('#specialty_info').text('');

		$('#faculty_' + uni_id + ' option:first').attr('selected', true);
	});

	$('.faculty_change').change(function(e){
		var faculty_id = $(e.target).val() * 1;

		$('.specialty_change:not(.hidden)').addClass('hidden');
//		$('.specialties_for_' + faculty_id).toggleClass('hidden', !faculty_id);
		$('#save').addClass('hidden');
//		$('#specialty_info').text('');

		$('.specialties_for_' + faculty_id).removeClass('hidden');
		$('.specialties_for_' + faculty_id + ' option:first').attr('selected', true);

		$('.specialty_holder[data-faculty=' + faculty_id + ']').toggleClass('hidden', faculty_id);
	});

	var specialty_change = function(e){
		var faculty_id,
			specialty_id = $(e.target).val();

		for(var faculty_id_ in specialties){
			var specialty_keys = $.map(specialties[faculty_id_], function(v, i){return i;});
			if($.inArray(specialty_id, specialty_keys) > -1){
				faculty_id = faculty_id_;
				break;
			}
		}

		specialty_id *= 1;

		$('#save').toggleClass('hidden', !specialty_id);

		$($(e.target).closest('.specialty_holder')).clone().appendTo('#all_spec');

//		if(specialty_id){
//			$('#specialty_info').text(specialties[faculty_id][specialty_id].info);
//		}else{
//			$('#specialty_info').text('');
//		}
	};

	$('.specialty_change').bind('change', specialty_change);

	$('#save').click(function(){
		var uni_id = $('#uni').val(),
			uni_name = $('#uni option[value=' + uni_id + ']').text(),
			faculty_id = $('#faculty_' + uni_id).val(),
			faculty_name = $('#faculty_' + uni_id + ' option[value=' + faculty_id + ']').text(),
			specialty_id = $('#specialty_' + faculty_id).val(),
			specialty_name = $('#specialty_' + faculty_id + ' option[value=' + specialty_id + ']').text();

		$('#selected_specialties').append('<div>' + uni_name + ': ' + faculty_name + ', ' + specialty_name + '</div>');

		specs.push({
			uni_id: uni_id,
			faculty_id: faculty_id,
			specialty_id: specialty_id
		});

		$('#specialty_' + faculty_id).find('option[value=' + specialty_id + ']').remove();

		if($('#specialty_' + faculty_id + ' option').length <= 1){
			$('#specialty_' + faculty_id).remove();
			$('#faculty_' + uni_id).find('option[value=' + faculty_id + ']').remove();

			if($('#faculty_' + uni_id + ' option').length <= 1){

				$('#faculty_' + uni_id).remove();
				$('#uni').find('option[value=' + uni_id + ']').remove();

				if($('#uni option').length <= 1){
					$('#uni').remove();
				}
			}
		}

		$('#save').addClass('hidden');
		$('#send').removeClass('hidden');
//		$('#specialty_info').text('');
	});

	$('#send').click(function(e){
		$(e.target).closest('form').append('<input type="hidden" name="data" />');
		$(e.target).closest('form').find('input[type=hidden]').val(JSON.stringify(specs));

		return true;
	});

});
