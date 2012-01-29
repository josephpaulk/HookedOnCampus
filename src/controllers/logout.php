<?php
/**
 * Written By: Derek
 * Date: 28/01/12
 * Time: 12:35 PM
 */

    unset($_SESSION['auth']);
    unset($_SESSION['id']);
    unset($_SESSION['firstname']);
    session_destroy();

    header('Location: ../../index.php');

?>