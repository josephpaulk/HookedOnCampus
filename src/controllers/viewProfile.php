<?php
/**
 * Written By: Derek
 * Date: 28/01/12
 * Time: 9:14 AM
 */

    /*include("./utils/DBManager.php");

    //get user id from update form
    $id=$_GET['id'];

    //put update columns in this array
    $atts = array("first","last","phone", "mobile","fax","email","web");


    $statement = "SELECT ";

    $count = sizeof($atts);
    $i = 0;

    while($i < $count - 1)
    {
        $statement . $attribute . ", ";
    }

    $i++;

    $statement . $atts[$i];

    $statement . "FROM users" +
                 "WHERE id = '$id' );";

    $results = select($statement, $atts);*/

    include("./src/views/profile.php");
    
 ?>