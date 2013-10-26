<form method="post" action="">
	<select id="uni">
		<option value="0">Моля, изберете университет</option>

	<?php foreach($unis as $uni_id => $uni_name): ?>

		<option value="<?php echo $uni_id; ?>"><?php echo $uni_name; ?></option>

	<?php endforeach; ?>

	</select>

	<?php foreach($exams as $uni_id => $uni_exams): ?>

		<select id="exams_<?php echo $uni_id; ?>" class="hidden uni_change">
				<option value="0">Моля, изберете изпит</option>
			<?php foreach($uni_exams as $exam_id => $exam_data): ?>
				<option value="<?php echo $exam_id; ?>"><?php echo $exam_data['name']; ?></option>
			<?php endforeach; ?>
		</select>

	<?php endforeach; ?>

	<input type="button" id="save" value="Избери" class="hidden" />

	<div id="selected_exams">
		
	</div>

	<input type="submit" id="send" value="Изпрати всички" class="hidden" />

</form>
