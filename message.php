<?php

    require_once './src/utils/auth.php';

    is_auth();
	//UNCOMMENT OUT TO BOOT TO INDEX IF NOT AUTH
	$id = $_SESSION['id'];

    require_once './src/utils/db.php';
	require_once './src/views/message_view.php';

    include ('./src/header.php');

    $db = new DB();
	
    switch($action)
    {
    	/*case 'results':
    		viewMessage($pid, $db);
    		break;*/
        default:
            viewMessage($id, $db);
            break;

    }

    include('./src/footer.php');

?>