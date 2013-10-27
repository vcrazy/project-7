<script>
	$(document).ready(function(){
		unis = <?php echo json_encode($unis); ?>,
		exams = <?php echo json_encode($exams); ?>;
	});
</script>

<div class="form_container">
    <form method="post" action="">
        <h1 class="purple">ЖЕЛАЯ ДА СЕ ЯВЯ НА ИЗПИТ В:</h1>
        <span class="form_span_info">Университет:</span>  <select id="uni" class="form_select_apply">
            <option value="0">Моля, изберете университет</option>
            <?php foreach($unis as $uni_id => $uni_name): ?>
                <option value="<?php echo $uni_id; ?>"><?php echo $uni_name; ?></option>
            <?php endforeach; ?>
        </select>
        
        <div id="specialty_show" class="hidden" >
            <h1 class="purple">НА СЛЕДНИТЕ ИЗПИТИ:</h1>
            <?php foreach($exams as $uni_id => $uni_exams): ?>
            <select id="exams_<?php echo $uni_id; ?>" class="hidden uni_change form_select_apply" >
                    <option value="0">Моля, изберете изпит</option>
                <?php foreach($uni_exams as $exam_id => $exam_data): ?>
                    <option value="<?php echo $exam_id; ?>"><?php echo $exam_data['name']; ?></option>
                <?php endforeach; ?>
            </select> <span id="exam_info"> Дата: 25.05.2013</span>
            <?php endforeach; ?>
        </div>
        
        <div>
            <div class="info_wishlist height100 hidden">
                <div id="left_info_panel">
                    <span class="info_span"></span>
                </div>
                <div id="right_info_panel">
                    Уникален номер, ден и час на явяване за всеки от избраните изпити ще получите<br/>
                    допълнително, след като учебното заведение публикува информация
                </div>
            </div>
			<a id="send" href="/apply" class="hidden button_aplpy">КАНДИДАТСТВАЙ</a>
        </div>
    </form>
</div>

	<input type="button" id="save" value="Избери" class="hidden" />

	<div id="exam_info">
		
	</div>

	<div id="selected_exams">
		
	</div>

	<input type="submit" id="send" value="Изпрати всички" class="hidden" />
