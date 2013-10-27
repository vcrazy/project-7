<script>
	$(document).ready(function(){
		unis = <?php echo json_encode($unis); ?>,
		faculties = <?php echo json_encode($faculties); ?>;
		specialties = <?php echo json_encode($specialties); ?>;
	});
</script>

<div class="form_container">
    <form method="post" action="">
        <h1>ЖЕЛАЯ ДА КАНДИДАТСТВАМ ЗА:</h1>
        <span class="form_span_info">Университет:</span> <select id="uni" class="form_select">
            <option value="0">Моля, изберете университет</option>
            <?php foreach($unis as $uni_id => $uni_name): ?>
                <option value="<?php echo $uni_id; ?>"><?php echo $uni_name; ?></option>
            <?php endforeach; ?>
        </select><br/>
        <div id="faculty_show">
			<span class="form_span_info faculty_text hidden">Факултет:</span>
            <?php foreach($faculties as $uni_id => $faculties_data): ?>
                <select id="faculty_<?php echo $uni_id; ?>" class="hidden faculty_change form_select">
                        <option value="0">Моля, изберете факултет</option>
                    <?php foreach($faculties_data as $faculty_id => $faculty_name): ?>
                        <option value="<?php echo $faculty_id; ?>"><?php echo $faculty_name; ?></option>
                    <?php endforeach; ?>
                </select>
            <?php endforeach; ?>
        </div>
        
        <div id="specialty_show">
            <h1>ЗА СЛЕДНИТЕ СПЕЦИАЛНОСТИ:</h1>
            <div class="sub_title">/подредени във възходящ ред/</div>
			<div class="specialty_holder hidden">
				<span class="form_span_info specialty_text"><span class="spec_num">1</span> Специалност:</span>
				<?php foreach($specialties as $faculty_id => $specialty_data): ?>
				<select class="hidden specialty_change form_select specialties_for_<?php echo $faculty_id; ?>">
						<option value="0">Моля, изберете специалност</option>
					<?php foreach($specialty_data as $specialty_id => $specialty_data): ?>
						<option value="<?php echo $specialty_id; ?>"><?php echo $specialty_data['name']; ?></option>
					<?php endforeach; ?>
				</select>
				<?php endforeach; ?>
			</div>
        </div>
        
        <input type="button" id="save" value="Избери" class="hidden" />
        
        <input type="submit" id="send" value="Изпрати всички" class="hidden" />
        
        <div>
            <div class="info_wishlist">
                <div id="left_info_panel">
                    <span class="info_span"></span>
                </div>
                <div id="right_info_panel">
                    Вашият състезателен бал за избраните специалности на
                    Факултет по математика и информатика към Софийски университет "Св. Климент Охридски"
                    образуван на база на текущите данни:<br/><br/>
                    Най-висока оценка от положен изпит по <i>Математика 2</i> : <strong>5.19</strong><br/>
                    Оценка от матура по <i>Математика</i> : <strong>4.63</strong><br/>
                    Оценка от диплома по <i>Математика</i> : <strong>5.12</strong><br/><br/>
                    
                    Състезателния бал образуван по формулата (предвид най-висок бал):<br/>
                    3* Математика 2 + Математика(диплома)
                    2* Математика 1 + Математика(диплома) или
                    2* Математика(матура) + Математика(диплома)

                    Бал (24 максимален бал*)
                </div>

            </div>
        </div>
    </form>
</div>


<!--	<div id="specialty_info">
		
	</div>-->

	<div id="selected_specialties">
		
	</div>

</form>
