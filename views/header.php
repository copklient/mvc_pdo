<html>
<head>
	<title></title>
	<link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css">
	<script type="text/javascript" src="<?php echo URL; ?>public/js/jquery-2.2.0.min.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>
</head>
<body>
<?php @Session::init(); ?>
	<br>header
	<a href="<?php echo URL; ?>index">Index</a>
	<a href="<?php echo URL; ?>help">Help</a>

	<?php 
		if(Session::get('loggedIn') == true):

		
	 ?>
	 	<a href="<?php echo URL; ?>dashboard/Logout">Logout</a>
	<?php else: ?>
	<a href="<?php echo URL; ?>login">Login</a>
<?php endif; ?>