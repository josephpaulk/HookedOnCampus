<?php
// start the session

session_start();

echo getcwd().'<br>';

echo 'including';
//include '../utils/DBManager.php';

echo 'included';
$username = $_POST['email'];
$password = $_POST['password'];

echo 'executing select';

$user_info = select("select * from user");
echo 'printing results';
print_r($user_info);

echo $user_info['email'];


$_SESSION['auth'] = true;
//header( 'Location: /HookedOnCampus/profile.php?id=2' ) ;



 function open()
    {

        $user="cq7753_test";
        $password="gamejam";
        $database="cq7753_hooked";

        mysql_connect('http://www.hookedoncampus.com:2082',$user,$password);
        @mysql_select_db($database) or die( "Unable to select database");

    }
    
    function select($statement)
    {
        open();
        $result = mysql_num_rows($statement);
        mysql_close();
        return $result;
    }

?>

