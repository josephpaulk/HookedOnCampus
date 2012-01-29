<?php

session_start();

$_SESSION['auth'] = false;
?>

<html>
	<head>
		<!-- CSS -->
		<link rel='stylesheet' type='text/css' href='http://localhost:8888/HookedOnCampus/src/css/reset.css'>
		<link rel='stylesheet' type='text/css' href='http://localhost:8888/HookedOnCampus/src/css/login.css'>
		<link rel='stylesheet' type='text/css' href='http://localhost:8888/HookedOnCampus/src/css/header.css'>
		<link rel='stylesheet' type='text/css' href='http://localhost:8888/HookedOnCampus/src/css/signup.css'>
		<link rel='stylesheet' type='text/css' href='http://localhost:8888/HookedOnCampus/src/css/profile.css'>
		<link rel='stylesheet' type='text/css' href='http://localhost:8888/HookedOnCampus/src/css/search.css'>
		<!-- GOOGLE API -->
		<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Glegoo' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div id="header">
			<a href="http://www.hookedoncampus.com" alt=""><h1>HookedOnCampus</h1></a>
			<?php
			include ("views/login.php");
			?>
		</div>
