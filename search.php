<?php

//login stuff
    session_start();

    if(!isset($_SESSION['auth']))
        $_SESSION['auth'] = false;


    require_once './src/views/search_view.php';
    
    include('./src/header.php');
    
    search_form();
   
    include('./src/footer.php');
	
/* OLD CODE
require_once './src/views/search_view.php';
require_once './src/utils/db.php';

include ('./src/header.php');

$action = $_GET['action'];

$db = new DB();
$pid = "";

switch($action)
{
    case 'edit':
        editSearch($pid, $db);
        break;
    default:
        viewSearch($pid, $db);
        break;

}

include ('./src/footer.php');

*/
?>