<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Derek
 * Date: 28/01/12
 * Time: 12:17 AM
 * To change this template use File | Settings | File Templates.
 */

    $username="username";
    $password="password";
    $database="your_database";

    $first=$_POST['first'];
    $last=$_POST['last'];
    $phone=$_POST['phone'];
    $mobile=$_POST['mobile'];
    $fax=$_POST['fax'];
    $email=$_POST['email'];
    $web=$_POST['web'];

    mysql_connect(localhost,$username,$password);
    @mysql_select_db($database) or die( "Unable to select database");

    $query = "INSERT INTO contacts VALUES ('','$first','$last','$phone','$mobile','$fax','$email','$web')";
    mysql_query($query);

    mysql_close();

?>