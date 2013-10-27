<?php
	/*
	 * $profile
	 * $exams
	 */
?>

<section>
    <div class="span3"></div> 
    <div id="user-table" class="bs-docs-grid span8">
    <h2>Профил</h2>
      <div class="row show-grid">
        <div class="span4 column-data profile-cell">
        	<h3>Име</h3>
        </div>
        <div class="span4 column-data profile-cell verticle-center">
        	<h3><?php echo $profile["name"]; ?></h3>
        </div>
      </div>
    <div class="row show-grid">
        <div class="span4 column-data profile-cell">
        	<h3>Бащино име</h3>
        </div>
        <div class="span4 column-data profile-cell verticle-center">
        	<h3><?php echo $profile["father_name"]; ?></h3>
        </div>
    </div>  
    <div class="row show-grid">
        <div class="span4 column-data profile-cell">
        	<h3>Фамилия</h3>
        </div>
        <div class="span4 column-data profile-cell verticle-center">
        	<h3><?php echo $profile["surname"]; ?></h3>
        </div>
    </div>
    <div class="row show-grid">
        <div class="span4 column-data profile-cell">
        	<h3>Диплома</h3>
        </div>
        <div class="span4 column-data profile-cell verticle-center">
        	<h3><?php echo $profile["ocenka_diploma"]; ?></h3>
        </div>
    </div>
    <div class="row show-grid">
        <div class="span4 column-data profile-cell">
        	<h3>Матура</h3>
        </div>
        <div class="span4 column-data profile-cell verticle-center">
        	<h3><?php echo $profile["ocenka_matura"]; ?></h3>
        </div>
    </div>
    <div class="span3"></div> 
</section>

<!--Examp scores-->
<section>
    <div class="span3"></div> 
    <div id="exam-table" class="bs-docs-grid span8">
	<?php foreach ($exams as $exam): ?>
		<div class="row show-grid">
			<div class="span4 column-data profile-cell">
				<h3><?php echo $exam["uni_subject_id"]; ?></h3>
			</div>
			<div class="span4 column-data profile-cell verticle-center">
				<h3><?php echo $exam["grade"]; ?></h3>
			</div>
		</div>
    </div>
    <div class="span3"></div> 
	<?php endforeach; ?>
</section>