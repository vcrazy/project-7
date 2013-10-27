<section id="ranking">

<div class="span3"></div> 
<div class="bs-docs-grid span8">
<h2>Предложения за специалности</h2>
	<div id="table-column-info" class="row show-grid">
	<div class="span6 column-info">Специалност, Университет, Факултет</div>
	<div class="span2 column-info">Класация</div>
	</div>
<?php foreach($suggestions as $application): ?>
<div class="row show-grid">
	<div class="span6 column-data bh">
		<h4><?php echo $application['s_name']; ?></h4>
		<p><?php echo $application['u_name']; ?></p> 
		<p><?php echo $application['f_name']; ?></p>
	</div>
	<div class="span2 column-data bh">
		<p>място: ---</p>
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
