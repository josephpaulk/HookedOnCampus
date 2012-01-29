<?php
/**
 * Written By: Derek
 * Date: 28/01/12
 * Time: 9:15 PM
 */

   ini_set('display_errors', 1);
   ini_set('log_errors', 1);
   ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
   error_reporting(E_ALL);

   require_once '../utils/db.php';

   $db = new DB();


?>