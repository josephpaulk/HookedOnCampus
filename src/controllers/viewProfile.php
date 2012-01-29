<?php
/**
 * Written By: Derek
 * Date: 28/01/12
 * Time: 9:14 AM
 */

    include("./utils/DBManager.php");

    $query = 'SELECT firstname, department' +
             'FROM user u, faculty f' +
             'WHERE u.faculty_id = f.id;';
    $cols = array('firstname','department');

    $results = select($query, $cols);

    include('.src/views/viewProfile.php');
    
 ?>