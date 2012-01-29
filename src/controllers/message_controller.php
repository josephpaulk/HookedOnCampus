<?php

ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);



require_once '../utils/db.php';

$recv = $_POST['recv'];
$send = $_POST['send'];
$mess = $_POST['mess'];

$db = new DB();
$db->sanitize($mess);

$query = 'insert into message values (\''.$recv.'\',\''.$send.'\',\''.$mess.'\')';

echo $query;


?>