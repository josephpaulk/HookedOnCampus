<?php
// start the session
session_start();

$username = $_POST['email'];
$password = $_POST['password'];

$_SESSION['auth'] = true;
header( 'Location: /HookedOnCampus/profile.php?id=2' ) ;


?>

