<?php

    ini_set('display_errors', 1);
    ini_set('log_errors', 1);
    ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
    error_reporting(E_ALL);



    require_once '../utils/db.php';
    require_once '../utils/auth.php';
    
    
    $db = new DB();
    
    $username = $_POST['email'];
    $password = $_POST['password'];
    
    //TODO:Need to add password authentication
    $query = "SELECT id, firstname FROM user WHERE email = '$username';";
    
    $res = $db->db_query($query);
    $row = $db->db_fetch($res);
    
    if(!isset($_SESSION))
    {
        session_start();
    }
    
    $_SESSION['auth'] = true;
    $_SESSION['id'] = $row['id'];
    $_SESSION['firstname'] = $row['firstname'];
    
    
    
    header( 'Location: ../../profile.php?id='.$_SESSION['id'] );

?>

