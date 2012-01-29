<?php
function viewProfile($id, $db)
{
?>

<div id='name'>
    
</div>
<?php        
}


function editProfile($id, $db)
{
    $query = "select * from user u , userattributes ua where u.id='".$id."' and u.id = ua.user_id;";
    
    echo $query;
    
    //$res = $db->debug_query($query);
        
    
    echo "<form action='./src/controllers/profile_controller.php?action=upd' method='POST'>";
    echo "<center>";
    echo "<table>";
    echo '<tr><td>First Name:</td><td><input type="text" name="name" /></td></tr>';
    echo '<tr><td>Faculty: </td><td><select name="faculty">
                                    <option value="1">Science</option>
                                    <option value="2">Art</option>
                                    <option value="3">Engineering</option>
                                    </select></td></tr>';
    echo '<tr><td>Height: </td><td><select name="height">
                                    <option value="1">Short (<5\'4") </option>
                                    <option value="2">Normal (5\'4" - 5\'9")</option>
                                    <option value="3">Tall (> 5\'10")</option>
                                    </select></td></tr>';   
                                    
    echo '<tr><td>Gender: </td><td><select name="gender">
                                   <option value="f">Male</option>
                                   <option value="m">Female</option>
                                   </select></td></tr>';
    echo '<tr><td>Orientation: </td><td><select name="orientation">
                                        <option value="s">Straight</option>
                                        <option value="b">Bi-Sexual</option>
                                        <option value="g">Gay</option>
                                        </select></td></tr>';     
    echo '<tr><td><input type="submit" value="Save" name="save"/></td><td><input type="submit" value="Cancel" name="cancel"/>';
    echo '</form>';                                                                                  
    echo "</table>";
    echo "</center>";
    echo "</form>";
    
}

?>