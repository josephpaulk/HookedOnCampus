<?php


    /// This is the router logic we can move it out later
    $requestURI = explode('/', $_SERVER['REQUEST_URI']);
    $scriptName = explode('/', $_SERVER['SCRIPT_NAME']);
    
    for ($i = 0; $i < sizeof($scriptName); $i++) {
    	if ($requestURI[$i] == $scriptName[$i]) {
    		unset($requestURI[$i]);
    	}
    }
    
    $command = array_values($requestURI);
    
    include ('./src/header.php');
    
    switch($command[0]) {
        case '':
            print('homepage');
            break;
    	case 'signup' :
    		include ('./src/views/signup.php');
    		break;
        case 'profile' :
            include('./src/controllers/viewProfile.php');
            break;
    	default :
            echo $command[0];
    		print('404 Redirect');
    		break;
    }
    
    
    include ('./src/footer.php');

?>
