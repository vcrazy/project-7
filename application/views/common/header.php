<?php include('head.php'); ?>

<?php if($logged): ?>
<div id="profile_info_top">
	<div class="one">
		<div style="float: right;" class="two">
			<a href="/profile" style="color: #670666;">
				<img src="/img/bubble-avatar.png" alt="" style="background-image: url('<?php echo $avatar; ?>');" />
			</a>
		</div>
		<div style="float: right; padding-right: 12px; padding-top: 12px;" class="two">
			<a href="/profile" style="color: #670666;">Профил</a>:<br />
			<?php echo $user_names; ?>
		</div>
	</div>
</div>
<?php endif?>

<article id="wrapper">
<header>
 <div id="site-logo">
    <a href="/">
     <img src="/img/applied-logo.jpg" alt="Applied Logo"/>
    </a>
 </div>
</header>
    <?php if($controller != 'home'): ?>
    <div id="navigation">
        <div id="right-arrow" >
             <a href="/wishlist/all" id='apply-arrow'>&nbsp;</a>
        </div>
        <div id="left-arrow" >
             <a href="/apply/all" id='exam-arrow'>&nbsp;</a>
        </div>
    </div>

<?php endif?>
