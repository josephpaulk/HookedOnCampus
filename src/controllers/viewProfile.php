<?php
/**
 * Written By: Derek
 * Date: 28/01/12
 * Time: 9:14 AM
 */

    include("./utils/DBManager.php");

    $query = 'SELECT firstname, department, gender, haircolor';
    $cols = "";

    select($query, $cols);
    
 ?>