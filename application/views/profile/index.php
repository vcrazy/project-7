<?php
	/*
	 * $profile
	 * $exams
	 */
?>
<div id="top-bar"></div>
<!--User info-->
<section>
    <div class="span3"></div> 
    <div id="user-tabel" class="bs-docs-grid span8">
    <h2 class="table-label">Профил:</h2>
      <div class="row show-grid">
        <div class="span3 column-data profile-cell">
        	<h4>Име / Презиме / Фамилия:</h4>
        </div>
        <div class="span5 column-data profile-cell verticle-center data-cell">
        	<h5><strong><?php echo $profile["name"]; ?> <?php echo $profile["father_name"]; ?> <?php echo $profile["surname"]; ?></strong></h5>
        </div>
      </div>
    <div class="row show-grid">
        <div class="span3 column-data profile-cell">
        	<h4>Диплома:</h4>
        </div>
        <div class="span4 offset1 column-data profile-cell verticle-center data-cell">
        	<h4><?php echo $profile["ocenka_diploma"]; ?></h4>
        </div>
    </div>
    <div class="row show-grid">
        <div class="span3 column-data profile-cell">
        	<h4>Матура:</h4>
        </div>
        <div class="span4 offset1 column-data profile-cell verticle-center data-cell">
        	<h4><?php echo $profile["ocenka_matura"]; ?></h4>
        </div>
    </div>
    <div class="span3"></div> 
</section>

<!--Examp scores-->
<section>
    <div class="span3"></div> 
    <div id="exam-table" class="bs-docs-grid span8">
    <h2 class="table-label">Изпити:</h2>
	<?php foreach ($exams as $exam): ?>
		<div class="row show-grid">
			<div class="span4 column-data exam-cell">
				<h4><?php echo $exam["uni_subject_id"]; ?></h4>
			</div>
			<div class="span4 column-data exam-cell verticle-center data-cell">
				<h4><?php echo $exam["grade"]; ?></h4>
			</div>
		</div>
    </div>
    <div class="span3"></div> 
	<?php endforeach; ?>
</section>