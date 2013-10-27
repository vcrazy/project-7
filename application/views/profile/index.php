<?php
	/*
	 * $profile
	 * $exams
	 */
?>
<div id="top-bar"></div>

<div class="form_container">
    <h1 class="blue">Профилни данни:</h1>
    <span class="form_span_profile_left">Име / Презиме / Фамилия:</span>
    <div class="form_span_profile_right">
        <div class="half_border">
            <strong><?php echo $profile["name"]; ?> <?php echo $profile["father_name"]; ?> <?php echo $profile["surname"]; ?></strong>
        </div>
    </div>
    <div class="clear"></div>
    <br/>
     <span class="form_span_profile_left">Диплома:</span>
    <div class="form_span_profile_right">
        <div class="half_border">
            <?php echo $profile["ocenka_diploma"]; ?>
        </div>
    </div>
     <div class="clear"></div>
    <br/>
     <span class="form_span_profile_left">Матура:</span>
    <div class="form_span_profile_right">
        <div class="half_border">
           <?php echo $profile["ocenka_matura"]; ?>
        </div>
    </div>
</div>

<!--<section id="user-section-info">
    <div class="span4"></div> 
    <div id="user-tabel" class="bs-docs-grid span8">
    <div class="row show-grid">
        <div class="span2"></div>
        <div class="span2 table-label">
            <h2>Профилни данни:</h2>
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
        	<h4>Матура:</h4>
        </div>
        <div class="span3 column-data profile-cell verticle-center data-cell">
        	<h4><?php echo $profile["ocenka_matura"]; ?></h4>
        </div>
    </div>
    <div class="span4"></div> 
</section>-->

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