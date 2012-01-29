<?php
require_once './src/views/search_view.php';

include ('./src/header.php');

$action = $_GET['action'];

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


?>