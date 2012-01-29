<?php
   ini_set('display_errors', 1);
   ini_set('log_errors', 1);
   ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
   error_reporting(E_ALL);
   
   require_once('../utils/db.php');
   
    if(isset($_GET['action']))
        $action = $_GET['action'];
    $db = new DB();
    switch($action)
    {
        case 'upd':
            updateProfile($_POST['pid'], $db);
    }

function updateProfile($id, $db)
{
    $query1 = 'update user set firstname="'.$_POST['firstname'].'", faculty_id="'.$_POST['faculty'].' where id="'.$id.'";';
    $db->db_query($query1);
    
    $query2 = 'update userattributes set gender="'.$_POST['gender'].'" where user_id="'.$_POST['pid'].'";';
    $db->db_query($query2);
    
    header('Location:../../profile.php?id='.$id);
}

?>

