<?php

ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

require_once '../utils/db.php';

$db = new DB();
$id = $_SESSION['id'];

$query = 'SELECT * FROM messages WHERE id = ' + $id;
$res = $db->db_query($query);
$results = $db->db_fetch($res);

?>