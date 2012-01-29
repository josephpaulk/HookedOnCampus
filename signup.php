<?php

    //login stuff
        session_start();

        if(!isset($_SESSION['auth']))
            $_SESSION['auth'] = false;

    require_once './src/views/signup_view.php';
    
    include('./src/header.php');
    
    signup_form();
   
    include('./src/footer.php');

?>