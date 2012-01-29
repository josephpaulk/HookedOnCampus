<div id="login">

    <?php
    echo $_SESSION['auth'];
    if(!$_SESSION['auth'])
    {?>
        <form action="./src/controllers/login.php" method="post">
            <input type="text" value="@ualberta.ca" name="email">
            <input type="text" value="Password" name="password">
            <input type="Submit" value="Sign In">
        </form>
    <?php
    }
    else
    {

        echo 'Hello, ' . $_SESSION['firstname'];
        ?> <form action="./src/controllers/logout.php" method="post">
            <input type="submit" value"Log Out">
        </form>

    <?php } ?>

</div>
