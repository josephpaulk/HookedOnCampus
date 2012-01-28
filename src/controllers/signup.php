<?php
/**
 * Written By: Derek
 * Date: 28/01/12
 * Time: 3:41 PM
 */

    include('./src/utils/DBManager.php');

    open();

    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $faculty = $_POST['faculty'];
    $password = $_POST['password'];

    mysql_connect(localhost,$username,$password);
    @mysql_select_db($database) or die( "Unable to select database");

    $query = "INSERT INTO contacts VALUES ('','$firstname','$email','$password','$faculty')";
    mysql_query($query);

    mysql_close();


?>