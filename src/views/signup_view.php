
<?php
function signup_form()
    {
        
?>
<div id="signup">
        <div id="signup-left">
        </div>
        <div id="signup-right">
            <form action="./src/controllers/signup_controller.php?action=add" method="post">
            <label for="email">Email</label><br/>
            <input type="text" value="@ualberta.ca Email" name="email"><br/><br/>
            <label for="firstname">First Name</label><br/>
            <input type="text" value="First Name" name="firstname"><br/><br/>
            <label for="faculty">Faculty</label><br/>
            <select name="faculty">
            	<option value="1">Science</option>
            	<option value="2">Arts</option>
                <option value="3">Engineering</option>
            </select><br/><br/>
            <label for="password">Password</label><br/>
            <input type="text" value="Password" name="password"><br/><br/>
            <input type="Submit" value="Sign On">
        </form>
        </div>
    </div>
    
    <?php
}


?>