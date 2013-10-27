<?php
	/*
	 * $profile
	 * $exams
	 */
?>
<div id="top-bar"></div>
<!--User info-->
<section id="user-section-info">
    <div class="span4"></div> 
    <div id="user-tabel" class="bs-docs-grid span8">
    <div class="row show-grid">
        <div class="span2"></div>
        <div class="span2 table-label">
            <h2>Профил:</h2>
        </div>
        <div class="span8"></div>
    </div>
      <div class="row show-grid">
        <div class="span3 column-data profile-cell">
        	<h4>Име / Презиме / Фамилия:</h4>
        </div>
        <div class="span3 column-data profile-cell verticle-center data-cell">
        	<h5><strong><?php echo $profile["name"]; ?> <?php echo $profile["father_name"]; ?> <?php echo $profile["surname"]; ?></strong></h5>
        </div>
      </div>
    <div class="row show-grid">
        <div class="span3 column-data profile-cell">
        	<h4>Диплома:</h4>
        </div>
        <div class="span3 column-data profile-cell verticle-center data-cell">
        	<h4><?php echo $profile["ocenka_diploma"]; ?></h4>
        </div>
    </div>
    <div class="row show-grid">
        <div class="span3 column-data profile-cell">
        	<h4>Матура "БЕЛ" (задължителна):</h4>
        </div>
        <div class="span3 column-data profile-cell verticle-center data-cell">
        	<h4><?php echo $profile["ocenka_matura_BEL"]; ?></h4>
        </div>
    </div>
		<div class="row show-grid">
        <div class="span3 column-data profile-cell">
        	<h4>Матура "Математика" (изборна):</h4>
        </div>
        <div class="span3 column-data profile-cell verticle-center data-cell">
        	<h4><?php echo $profile["ocenka_matura_izborna"]; ?></h4>
        </div>
    </div>
    <div class="span4"></div> 
</section>

<!--Examp scores-->
<!--
<section>
    <div class="span3"></div> 
    <div id="exam-table" class="bs-docs-grid span8">
    <div class="row show-grid">
        <div class="span1"></div>
        <div class="span2 table-label">
            <h2>Изпити:</h2>
        </div>
        <div class="span8"></div>
    </div>
	<?php foreach ($exams as $exam): ?>
		<div class="row show-grid">
             <div class="span1"></div>
			<div class="span3 column-data exam-cell">
				<h4><?php echo $exam["name"]; ?></h4>
			</div>
			<div class="span1 column-data exam-cell verticle-center data-cell">
				<h4><?php echo $exam["grade"]; ?></h4>
			</div>
		</div>
    </div>
    <div class="span3"></div> 
	<?php endforeach; ?>
</section> -->