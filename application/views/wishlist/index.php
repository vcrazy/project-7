<script>
	$(document).ready(function(){
		unis = <?php echo json_encode($unis); ?>,
		faculties = <?php echo json_encode($faculties); ?>;
		specialties = <?php echo json_encode($specialties); ?>;
	});
</script>

<form method="post" action="">
	<select id="uni">
		<option value="0">Моля, изберете университет</option>

	<?php foreach($unis as $uni_id => $uni_name): ?>

		<option value="<?php echo $uni_id; ?>"><?php echo $uni_name; ?></option>

	<?php endforeach; ?>

	</select>

	<?php foreach($faculties as $uni_id => $faculties_data): ?>

		<select id="faculty_<?php echo $uni_id; ?>" class="hidden faculty_change">
				<option value="0">Моля, изберете факултет</option>
			<?php foreach($faculties_data as $faculty_id => $faculty_name): ?>
				<option value="<?php echo $faculty_id; ?>"><?php echo $faculty_name; ?></option>
			<?php endforeach; ?>
		</select>

	<?php endforeach; ?>

	<?php foreach($specialties as $faculty_id => $specialty_data): ?>

		<select id="specialty_<?php echo $faculty_id; ?>" class="hidden specialty_change">
				<option value="0">Моля, изберете специалност</option>
			<?php foreach($specialty_data as $specialty_id => $specialty_data): ?>
				<option value="<?php echo $specialty_id; ?>"><?php echo $specialty_data['name']; ?></option>
			<?php endforeach; ?>
		</select>

	<?php endforeach; ?>

	<input type="button" id="save" value="Избери" class="hidden" />

	<div id="specialty_info">
		
	</div>

	<div id="selected_specialties">
		
	</div>

	<input type="submit" id="send" value="Изпрати всички" class="hidden" />

</form>
