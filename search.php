<?php

    //require_once './src/utils/auth.php';

    //is_auth();

    require_once './src/utils/db.php';

    include ('./src/header.php');
    require_once './src/views/search_view.php';

    $pid = $_GET['id'];
    if(isset($_GET['action']))
    	$action = $_GET['action'];
    else {
    	$action="";
    }

    $db = new DB();
    switch($action)
    {
    	/*case 'results':
    		viewMessage($pid, $db);
    		break;*/
        default:
            search_form();
            break;

    }

    include('./src/footer.php');

?>