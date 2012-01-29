<?php
require_once './src/views/profile_view.php';

include ('./src/header.php');

    
$pid = $_GET['id'];
$action = $_GET['action'];

switch($action)
{
    case 'edit':
        profile_edit($id, $db);
        break;
    default:
        profile_view($id, $db);
        break;
        
}
    
include ('./src/footer.php');


?>