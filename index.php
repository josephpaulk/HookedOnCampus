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
$scriptName = explode('/', $_SERVER['SCRIPT_NAME']);

for ($i = 0; $i < sizeof($scriptName); $i++) {
	if ($requestURI[$i] == $scriptName[$i]) {
		unset($requestURI[$i]);
	}
}

$command = array_values($requestURI);
?>

<html>
    <head>
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="/src/css/reset.css" />
        <link rel="stylesheet" type="text/css" href="/src/css/main.css" />
        <!-- /CSS -->
        <title>HookedOnCampus</title>
    </head>
    <body>
        <?php
		include ("/src/header.php");

		switch($command[0]) {
			case 'login' :
				print('You want the login page');
				break;
			default :
				print('404 Redirect');
				break;
		}

		include ("/src/footer.php");
        ?>
    </body>
</html>