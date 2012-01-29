<?php



ini_set('display_errors', 1); 
ini_set('log_errors', 1); 
ini_set('error_log', dirname(__FILE__) . '/error_log.txt'); 
error_reporting(E_ALL);

require_once './src/utils/auth.php';
require_once './src/views/signup_view.php';

if(check_auth())
{
    $redir = 'Location: profile.php?id='.$_SESSION['id'];
    //echo $redir;
    header($redir);
}



include ('./src/header.php');
    
signup_form();  
    
include ('./src/footer.php');

?>
