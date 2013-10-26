<section id="ranking">

<div class="span3"></div> 
<div class="bs-docs-grid span8">
<h2>Заявени изпити</h2>
	<div id="table-column-info" class="row show-grid">
	<div class="span3 column-info">Университет</div>
	<div class="span2 column-info">Изпит</div>
	<div class="span1 column-info">Дата</div>
	<div class="span1 column-info">Статус</div>
	<div class="span1 column-info">Оценка</div>
	</div>
<?php foreach($applications as $application): ?>
<div class="row show-grid">
	<div class="span3 column-data done accepted">
		<?php echo $application['u_name'];?>
	</div>
	<div class="span2 column-data done accepted">
		<?php echo $application['s_name'];?>
	</div>
	<div class="span1 column-data done accepted">
		<?php echo date("d.m.Y", strtotime($application['dateof'])); ?>
	</div>
	<div class="span1 column-data done accepted">
		<img src="/img/no.gif" class="status_<?php echo $application['grade'] ? ((int)$application['grade'] > 2) : 2; ?>" />
	</div>
	<div class="span1 column-data done accepted">
		<b><?php echo $application['grade']; ?></b>
	</div>
</div>
<?php endforeach; ?>
</div>  
<div class="span3"></div> 
<div class="clear"></div>

<div id="request_button">
	Заявка за изпит
</div>

</section>
