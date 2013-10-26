<?php foreach($unis as $uni_id => $uni_name): ?>

	Uni: <?php echo $uni_name; ?> <br /><br />

	<?php foreach($exams[$uni_id] as $exam_id => $exam_data): ?>

		Exam: <?php echo $exam_data['name']; ?> <br />
		Exam info: <?php echo $exam_data['info']; ?> <br /><br />

	<?php endforeach; ?>

	<hr />

<?php endforeach; ?>
