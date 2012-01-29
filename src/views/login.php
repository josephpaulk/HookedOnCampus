<div id="login">

<?php 
    require_once './src/utils/auth.php';
    if(!check_auth())
    {
?>
        
        <form action="./src/controllers/login.php" method="post">
            <input type="text" value="@ualberta.ca" name="email">
            <input type="text" value="Password" name="password">
            <input type="Submit" value="Sign In">
        </form>
<?php
    }
    else
    {
        echo "Hello, ".$_SESSION['firstname']."<br/>";
        echo '<a href="./src/controllers/logout.php">Logout</a>';
    }   
    
?>
</div>
