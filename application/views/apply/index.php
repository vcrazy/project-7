<script>
	$(document).ready(function(){
		unis = <?php echo json_encode($unis); ?>,
		exams = <?php echo json_encode($exams); ?>;
	});
</script>

<div class="form_container">
    <form method="post" action="">
        <h1 class="purple">ЖЕЛАЯ ДА СЕ ЯВЯ НА ИЗПИТ В:</h1>
        <span class="form_span_info">Университет:</span>
		<select id="uni" class="form_select_apply">
            <option value="0">Моля, изберете университет</option>
            <?php foreach($unis as $uni_id => $uni_name): ?>
                <option value="<?php echo $uni_id; ?>"><?php echo $uni_name; ?></option>
            <?php endforeach; ?>
        </select>
        
        <div id="specialty_show" class="hidden">
            <h1 class="purple">НА СЛЕДНИТЕ ИЗПИТИ:</h1>
			<div class="specialty_holder">
				<span class="form_span_info specialty_text">Изпит:</span>
                    <?php foreach($exams as $uni_id => $uni_exams): ?>
                    <select class="hidden exam_change form_select_apply_short exams_for_<?php echo $uni_id; ?>">
                            <option value="0">Моля, изберете изпит</option>
                        <?php foreach($uni_exams as $exam_id => $exam_data): ?>
                            <option value="<?php echo $exam_id; ?>"><?php echo $exam_data['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?php endforeach; ?>
				<span class="specialty_text exam_info form_info_date"></span>
			</div>
		</div>
        <div class="clear"></div>
		<a href="#" id="apply-add" class="hidden">Добави поле за изпит</a>
		<div class="info_wishlist height100 margin_top_15 hidden">
			<div id="left_info_panel">
				<span class="info_span"></span>
			</div>
			<div id="right_info_panel">
				Уникален номер, ден и час на явяване за всеки от избраните изпити ще получите<br/>
				допълнително, след като учебното заведение публикува информация.
			</div>
		</div>

		<a id="send" href="/apply" class="hidden button_aplpy purple_background">ЗАПИШИ МЕ НА ИЗПИТ</a>
    </form>
</div>
