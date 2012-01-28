<?php
/**
 * Written By: Derek
 * Date: 28/01/12
 * Time: 9:14 AM
 */

    include("./utils/DBManager.php");

    //get user id from update form
    $id=$_GET['id'];

    $statement = "SELECT first, last, phone, mobile, fax, email, web" +
                 "FROM users" +
                 "WHERE id = '$id' );";

    $atts = "";

    select($statement, $atts);