<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Derek
 * Date: 28/01/12
 * Time: 12:25 AM
 * To change this template use File | Settings | File Templates.
 */

    /// This is the router logic we can move it out later
    $requestURI = explode('/', $_SERVER['REQUEST_URI']);
    $scriptName = explode('/',$_SERVER['SCRIPT_NAME']);
 
    for($i= 0;$i < sizeof($scriptName);$i++)
    {
          if ($requestURI[$i] == $scriptName[$i])
           {
               unset($requestURI[$i]);
           }
     }
     
    $command = array_values($requestURI);
?>

<html>
    <h1>Hooked On Campus</h1>
    <?php 
   
        
        switch($command[0])
        {
            case 'login':
                print('You want the login page');
                break;
             default:
                print('404 Redirect');
                 break;
        }
    ?>
</html>