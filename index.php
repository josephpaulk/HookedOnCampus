<?php



    ini_set('display_errors', 1); 
    ini_set('log_errors', 1); 
    ini_set('error_log', dirname(__FILE__) . '/error_log.txt'); 
    error_reporting(E_ALL);

    //login stuff
    session_start();

    if(!isset($_SESSION['auth']))
        $_SESSION['auth'] = false;


    include ('./src/header.php');
    
  
    
    include ('./src/footer.php');

?>
