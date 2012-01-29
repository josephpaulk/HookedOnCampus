<?php
function viewProfile($id, $db)
{
?>
<div id="viewProfile">
	
</div>
<?php        
}


function editProfile($id, $db)
{
    $query = "select * from user u , userattributes ua where u.id='".$id."' and u.id = ua.user_id;";
   
    
    $res = $db->db_query($query);
    
    $entry = $db->db_fetch($res);
    
    
    $facultyDrop = createDropdown('faculty', array('1'=>'Science', '2'=>'Arts', '3'=>'Engineering'), $entry['faculty']);
    
    
    echo "<form action='./src/controllers/profile_controller.php?action=upd' method='POST'>";
    echo "<center>";
    echo "<table>";
    echo '<tr><td>First Name:</td><td><input type="text" name="firstname" value="'.$entry['firstname'].'"/></td></tr>';
    echo '<tr><td>Faculty: </td>'.$facultyDrop.'</tr>';
    echo '<tr><td>Height: </td>'.createDropdown('height', array('1'=>'Short (<5\' 4")', '2' => 'Normal (5\'4" - 5\'9")', '3' => 'Tall (> 5\' 10")'), $entry['height']).'</tr>';                                  
    echo '<tr><td>Gender: </td>'.createDropdown('gender',array('M'=>'Male','F'=>'Female'), $entry['gender']).'</tr>';
    echo '<tr><td>Orientation: </td>'.createDropdown('orientation', array('S' => 'Straight', 'B' => 'Bi-Sexual', 'G' => 'Gay'), $entry['orientation']).'</tr>';     
    echo '<tr><td><input type="submit" value="Save" name="save"/></td><td><input type="button" value="Cancel" name="cancel"/></td></tr>';
    echo "</table>";
    echo '<input type="hidden" value="'.$id.'" name="pid">';
    echo '</form>';                                                                                  
    echo "</center>";
    echo "</form>";
    
}

function createDropdown($name,$values, $selected)
{
    $res = '<td><select name="'.$name.'">';    
    foreach($values as $key => $value)
    {
        if($key == $selected)
            $res = $res.'<option value="'.$key.'" selected>'.$value.'</option>';
        else
            $res = $res.'<option value="'.$key.'">'.$value.'</option>'; 
    }
    $res = $res.'</select></td>';
    return $res;
}


?>