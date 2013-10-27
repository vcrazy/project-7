<script>
	$(document).ready(function(){
		unis = <?php echo json_encode($unis); ?>,
		exams = <?php echo json_encode($exams); ?>;
	});
</script>

<div class="form_container">
    <form method="post" action="">
        <h1>ЖЕЛАЯ ДА СЕ ЯВЯ НА ИЗПИТ В:</h1>
        <span class="form_span_info">Университет:</span>
		<select id="uni">
            <option value="0">Моля, изберете университет</option>
            <?php foreach($unis as $uni_id => $uni_name): ?>
                <option value="<?php echo $uni_id; ?>"><?php echo $uni_name; ?></option>
            <?php endforeach; ?>
        </select>
        
        <div id="specialty_show" class="hidden">
            <h1>НА СЛЕДНИТЕ ИЗПИТИ:</h1>
			<div class="specialty_holder">
				<span class="form_span_info specialty_text">Изпит:</span>
				<?php foreach($exams as $uni_id => $uni_exams): ?>
				<select id="exams_<?php echo $uni_id; ?>" class="hidden exam_change">
						<option value="0">Моля, изберете изпит</option>
					<?php foreach($uni_exams as $exam_id => $exam_data): ?>
						<option value="<?php echo $exam_id; ?>"><?php echo $exam_data['name']; ?></option>
					<?php endforeach; ?>
				</select>
				<?php endforeach; ?>
				<span class="specialty_text exam_info"></span>
			</div>
        </div>
    </form>
</div>

<input type="button" id="save" value="Избери" class="hidden" />

<input type="submit" id="send" value="Изпрати всички" class="hidden" />
