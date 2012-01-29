<?php

session_start();

    if(!isset($_SESSION['auth']))
        $_SESSION['auth'] = false;
?>

<html>
	<head>
		<!-- jQuery -->
		<script type="text/javascript" src="http://localhost:8888/HookedOnCampus/src/js/jQuery1.7.1.js"></script>
		<script type="text/javascript" src="http://localhost:8888/HookedOnCampus/src/js/jQuery-UI/js/jquery-ui-1.8.17.custom.min.js"></script>
		<!-- CSS -->
		<link rel='stylesheet' type='text/css' href='http://localhost:8888/HookedOnCampus/src/css/reset.css'>
		<link rel='stylesheet' type='text/css' href='http://localhost:8888/HookedOnCampus/src/css/main.css'>
		<!-- GOOGLE API -->
		<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Glegoo' rel='stylesheet' type='text/css'>
		
		
		<link rel="stylesheet" type="text/css" href="http://localhost:8888/HookedOnCampus/src/js/cc/css/style.css" />
		<link rel="stylesheet" type="text/css" href="http://localhost:8888/HookedOnCampus/src/js/cc/css/jquery.jscrollpane.css" media="all" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Coustard:900' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css' />
	</head>
	<body>
		<div id="header">
			<a href="http://www.hookedoncampus.com" alt=""><h1>HookedOnCampus</h1></a>
			<?php
			include ("views/login.php");
			?>
		</div>
