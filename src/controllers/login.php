<?php
// start the session

require_once '../utils/DBManager.php';

$db = new DB();

session_start();

$username = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT id FROM user WHERE email = '$username';";

$res = $db->db_query($query);

$row = $db->db_fetch($res);

$id = $row['id'];

$_SESSION['auth'] = true;
$_SESSION['id'] = $id;

header( 'Location: /HookedOnCampus/profile.php?id='.$_SESSION['id'] );

?>

