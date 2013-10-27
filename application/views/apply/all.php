<section id="ranking">

<div class="span3"></div> 
<div class="bs-docs-grid span8">
<h2>Заявени изпити</h2>
	<div id="table-column-info" class="row show-grid">
	<div class="span3 column-info green">Университет</div>
	<div class="span2 column-info green">Изпит</div>
	<div class="span1 column-info green center">Дата</div>
	<div class="span1 column-info green center">Статус</div>
	<div class="span1 column-info green center">Оценка</div>
	</div>
<?php foreach($applications as $application): ?>
<?php
	$status = $application['grade'] ? (int)((int)$application['grade'] > 2) : 2;
	$status_word = $status == 0 ? 'not-accepted' : ($status == 1 ? 'accepted' : 'waiting');
?>
<div class="row show-grid">
	<div class="span3 column-data height70 <?php echo $status_word; ?>">
		<?php echo $application['u_name'];?>
	</div>
	<div class="span2 column-data height70 <?php echo $status_word; ?>">
		<?php echo $application['s_name'];?>
	</div>
	<div class="span1 column-data height70 <?php echo $status_word; ?> center">
		<?php echo date("d.m.Y", strtotime($application['dateof'])); ?>
	</div>

	<div class="span1 column-data <?php echo $status_word; ?> center image">
		<img src="/img/no.gif" class="status_<?php echo (int)$application['grade'] ? (int)((int)$application['grade'] > 2) : 2; ?>" />
	</div>
	<div class="span1 column-data <?php echo $status_word; ?> center grade">
		<?php echo (int)$application['grade'] ? $application['grade'] : '---'; ?>
	</div>
</div>
<?php endforeach; ?>
</div>  
<div class="span3"></div>

<div class="clear"></div>
<a id="request_button" href="/apply">
	Заявка за изпит
</a>

</section>
