<?php

    ini_set('display_errors', 1);
    ini_set('log_errors', 1);
    ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
    error_reporting(E_ALL);
    
if(!isset($_GET['id']))
    header('Location: index.php'); 
    
require_once './src/utils/auth.php';

is_auth();



require_once './src/views/profile_view.php';
require_once './src/views/questionaire_view.php';
//require_once './src/views/message_view.php';
require_once './src/utils/db.php';

include ('./src/header.php');


$pid = $_GET['id'];
if(isset($_GET['action']))
	$action = $_GET['action'];
else {
	$action="";
}

$db = new DB();
switch($action)
{
    case 'edit':
        editProfile($pid, $db);
        break;
    case 'ques':
		viewProfile($pid, $db);
        questionaire_form($pid, $db);
        break;
	case 'mesg':
		viewMessage($pid, $db);
		break;
    default:
        viewProfile($pid, $db);
        break;
        
}
    
include ('./src/footer.php');


?>