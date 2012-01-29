<?php
/**
 * Written By: Derek
 * Date: 28/01/12
 * Time: 3:41 PM
 */
    ini_set('display_errors', 1); 
    ini_set('log_errors', 1); 
    ini_set('error_log', dirname(__FILE__) . '/error_log.txt'); 
    error_reporting(E_ALL); 

    require_once '../utils/db.php';

    $db = new DB();
    

    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $faculty = $_POST['faculty'];
    $password = $_POST['password'];
    
    $db->sanitize($firstname);
    $db->sanitize($email);
    $db->sanitize($faculty);
    $db->sanitize($password);
    
    $query = "INSERT INTO user (firstname, email,password, faculty_id) VALUES ('$firstname','$email','$password','$faculty');";
    
    $db->db_query($query);
    
    $query = "SELECT id FROM user WHERE email = '$email'";
    
    $res = $db->db_query($query);
    
    $entry = $db->db_fetch($res);
    
    
    
    header("Location: ../../profile.php?id=$entry['id'];action=view");
?>