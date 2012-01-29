
<?php
function signup_form()
    {
        
?>
<div id="signup">
        <div id="signup-left">
            <h1>Get Hooked</h1>
        </div>
        <div id="signup-right">
            <form action="./src/controllers/signup_controller.php?action=add" method="post">
            <input type="text" value="@ualberta.ca Email" name="email">
            <input type="text" value="First Name" name="firstname">
            <select name="faculty">
                <?php //foreach(SELECT)?>
            	<option value="1">Science</option>
            	<option value="2">Arts</option>
                <option value="3">Engineering</option>
            </select>
            <input type="text" value="Password" name="password">
            <input type="Submit" value="Sign On">
        </form>
        </div>
    </div>
    
    <?php
}


?>