<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Project 7</title>
		<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="/css/styles.css" rel="stylesheet" type="text/css" />
		<script src="/js/jquery.min.js" type="text/javascript"></script>
		<script src="/js/json3.min.js" type="text/javascript"></script>
		<?php if(file_exists(FCPATH . 'js/' . $controller . '.js')): ?>
			<script src="/js/<?php echo $controller; ?>.js" type="text/javascript"></script>
		<?php endif; ?>
		<script src="/js/bootstrap.min.js" type="text/javascript"></script>
	</head>
	<body>
