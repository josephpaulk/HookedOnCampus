<?php
function viewProfile($id, $db)
{
?>
<div id="profile">
	<h1>Becky</h1>

	
	<div class="container">
		<div class="header"></div>
		<div id="ca-container" class="ca-container">
			<div class="ca-wrapper">
				<div class="ca-item ca-item-1">
					<div class="ca-item-main">
						<div class="ca-icon">
							<img src="http://www.grook.net/sites/default/files/images/kettaneh/student.jpg" alt="">
						</div>
					</div>
				</div>
				<div class="ca-item ca-item-2">
					<div class="ca-item-main">
						<div class="ca-icon">
							<img src="http://blog.internationalstudent.com/wp-content/uploads/2011/01/student-books.jpg" alt="">
						</div>
					</div>
				</div>
				<div class="ca-item ca-item-3">
					<div class="ca-item-main">
						<div class="ca-icon">
							<img src="https://hwdsb.elearningontario.ca/images/eLO_Student.jpg" alt="">
						</div>
					</div>
				</div>
				<div class="ca-item ca-item-4">
					<div class="ca-item-main">
						<div class="ca-icon">
							<img src="https://hwdsb.elearningontario.ca/images/eLO_Student.jpg" alt="">
						</div>
					</div>
				</div>
				<div class="ca-item ca-item-5">
					<div class="ca-item-main">
						<div class="ca-icon">
							<img src="https://hwdsb.elearningontario.ca/images/eLO_Student.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<p>21, Engineering</p><br>
	<p>"I'm Becky.  Something something dogs, something something ice cream."</p><br>
	<form>
		<input type="Submit" value="Message">
	</form>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript" src="http://localhost:8888/HookedOnCampus/src/js/cc/js/jquery.easing.1.3.js"></script>
<!-- the jScrollPane script -->
<script type="text/javascript" src="http://localhost:8888/HookedOnCampus/src/js/cc/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="http://localhost:8888/HookedOnCampus/src/js/cc/js/jquery.contentcarousel.js"></script>
<script type="text/javascript">
	$('#ca-container').contentcarousel();
</script>
<?php
}
?>

<?php
function editProfile($id, $db) {

	//$query = "select * from user u , userattributes ua where u.id='".$id."' and u.id = ua.user_id;";
	//
	//echo $query;
	//
	////$res = $db->debug_query($query);
	//
	//echo "
	//<form action='./src/controllers/profile_controller.php?action=upd' method='POST'>
	//";
	//echo "
	//<center>
	//";
	//echo "
	//<table>
	//";
	//echo '
	//<tr>
	//<td>First Name:</td><td>
	//<input type="text" name="name" />
	//</td>
	//</tr>
	//';
	//echo '
	//<tr>
	//<td>Faculty: </td><td>
	//<select name="faculty">
	//<option value="1">Science</option>
	//<option value="2">Art</option>
	//<option value="3">Engineering</option>
	//</select></td>
	//</tr>
	//';
	//echo '
	//<tr>
	//<td>Height: </td><td>
	//<select name="height">
	//<option value="1">Short (<5\'4") </option>
	//<option value="2">Normal (5\'4" - 5\'9")</option>
	//<option value="3">Tall (> 5\'10")</option>
	//</select></td>
	//</tr>
	//';
	//
	//echo '
	//<tr>
	//<td>Gender: </td><td>
	//<select name="gender">
	//<option value="f">Male</option>
	//<option value="m">Female</option>
	//</select></td>
	//</tr>
	//';
	//echo '
	//<tr>
	//<td>Orientation: </td><td>
	//<select name="orientation">
	//<option value="s">Straight</option>
	//<option value="b">Bi-Sexual</option>
	//<option value="g">Gay</option>
	//</select></td>
	//</tr>
	//';
	//echo '
	//<tr>
	//<td>
	//<input type="submit" value="Save" name="save"/>
	//</td><td>
	//<input type="submit" value="Cancel" name="cancel"/>
	//';
	//echo '
	//</form>
	//';
	//echo "</table>";
	//echo "</center>";
	//echo "</form>";
	//
	//}

	$query = "select * from user u , userattributes ua where u.id='" . $id . "' and u.id = ua.user_id;";

	$res = $db -> db_query($query);

	$entry = $db -> db_fetch($res);

	$facultyDrop = createDropdown('faculty', array('1' => 'Science', '2' => 'Arts', '3' => 'Engineering'), $entry['faculty']);

	echo "<form action='./src/controllers/profile_controller.php?action=upd' method='POST'>";
	echo "<center>";
	echo "<table>";
	echo '<tr><td>First Name:</td><td><input type="text" name="firstname" value="' . $entry['firstname'] . '"/></td></tr>';
	echo '<tr><td>Faculty: </td>' . $facultyDrop . '</tr>';
	echo '<tr><td>Height: </td>' . createDropdown('height', array('1' => 'Short (<5\' 4")', '2' => 'Normal (5\'4" - 5\'9")', '3' => 'Tall (> 5\' 10")'), $entry['height']) . '</tr>';
	echo '<tr><td>Gender: </td>' . createDropdown('gender', array('M' => 'Male', 'F' => 'Female'), $entry['gender']) . '</tr>';
	echo '<tr><td>Orientation: </td>' . createDropdown('orientation', array('S' => 'Straight', 'B' => 'Bi-Sexual', 'G' => 'Gay'), $entry['orientation']) . '</tr>';
	echo '<tr><td><input type="submit" value="Save" name="save"/></td><td><input type="button" value="Cancel" name="cancel"/></td></tr>';
	echo "</table>";
	echo '<input type="hidden" value="' . $id . '" name="pid">';
	echo '</form>';
	echo "</center>";
	echo "</form>";

}

function createDropdown($name, $values, $selected) {
	$res = '<td><select name="' . $name . '">';
	foreach ($values as $key => $value) {
		if ($key == $selected)
			$res = $res . '<option value="' . $key . '" selected>' . $value . '</option>';
		else
			$res = $res . '<option value="' . $key . '">' . $value . '</option>';
	}
	$res = $res . '</select></td>';
	return $res;
}
?>