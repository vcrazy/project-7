<section id="ranking">

<div class="span3"></div> 
<div class="bs-docs-grid span8">
<h2>Кандидатстване</h2>
	<div id="table-column-info" class="row show-grid">
	<div class="span4 column-info">Кандидатура | (Специалност, Университет, Факултет)</div>
	<div class="span1 column-info center">Бал</div>
	<div class="span1 column-info center">Статус</div>
	<div class="span2 column-info">Класация</div>
	</div>
<?php foreach($applications as $application): ?>
<?php

	$status = $application['bal'] ? ($application['position'] < $application['total'] ? 1 : 0) : 2;
	$status_word = $status == 0 ? 'not-accepted' : ($status == 1 ? 'accepted' : 'waiting');
?>
<div class="row show-grid">
	<div class="span4 column-data bh <?php echo $status_word; ?>">
		<h4><?php echo $application['s_name']; ?></h4>
		<p><?php echo $application['u_name']; ?></p> 
		<p><?php echo $application['f_name']; ?></p>
	</div>
	<div class="span1 column-data bh <?php echo $status_word; ?> center grade">
		<?php echo $application['bal'] ?: '---'; ?>
	</div>
	<div class="span1 column-data bh <?php echo $status_word; ?> center image">
		<img src="/img/no.gif" class="status_<?php echo $status; ?>" />

	</div>
	<div class="span2 column-data bh <?php echo $status_word; ?> position">
		<p><strong>място: <?php echo $application['bal'] ? $application['position'] : '---'; ?></strong></p>
		<p>от общо <?php echo $application['total']; ?></p>
	</div>
</div>
<?php endforeach; ?>
<div class="span3"></div> 

<div class="clear"></div>
<a id="request_button" class="green" href="/wishlist">
	Кандидатстване
</a>

</section>
