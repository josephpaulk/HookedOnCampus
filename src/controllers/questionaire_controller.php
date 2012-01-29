<?php
/**
 * Written By: Derek
 * Date: 28/01/12
 * Time: 9:23 PM
 */

   ini_set('display_errors', 1);
   ini_set('log_errors', 1);
   ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
   error_reporting(E_ALL);

   require_once '../utils/db.php';

    $db = new DB();
    $id = $_SESSION['id'];

    $drinking = $_POST['drinking'];
    $smoking = $_POST['smoking'];
    $eating = $_POST['eating'];
    $out = $_POST['out'];
    $gaming = $_POST['gaming'];

    $db->sanitize($drinking);
    $db->sanitize($smoking);
    $db->sanitize($eating);
    $db->sanitize($out);
    $db->sanitize($gaming);

    $query = "INSERT INTO questions (user_id,drinking, smoking, eating, out, gaming) " .
             "VALUES('$id','$drinking','$smoking','$eating','$out','$gaming')";

    $db->db_query($query);

    $redir = 'Location:../../profile.php?id='.$id;
    header($redir);

?>