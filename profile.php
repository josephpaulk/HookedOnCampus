<?php
require_once './src/views/profile_view.php';

include ('./src/header.php');

    
$pid = $_GET['id'];
$action = $_GET['action'];

switch($action)
{
    case 'edit':
        editProfile($pid, $db);
        break;
    default:
        viewProfile($pid, $db);
        break;
        
}
    
include ('./src/footer.php');


?>