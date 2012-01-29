<?php
function viewProfile($id, $db)
{
?>
<div id="viewProfile" class="coverflow">
	<img src="img/gorillaz-plasticbeach.jpg" data-artist="Gorillaz" data-album="Plastic Beach"/>
	<img src="img/kingsofleon-comearoundsunshine.jpg" data-artist="Kings Of Leon" data-album="Come Around Sunshine"/>
	<img src="img/kidrock-bornfree.jpg" data-artist="Kid Rock" data-album="Born Free"/>
	<img src="img/recovery-recovery.jpg" data-artist="Eminem" data-album="Recovery"/>
	<img src="img/lilwayne-iamnotahumanbeing.jpg" data-artist="Lil Wayne" data-album="I Am Not A Human Being"/>
	<img src="img/taylorswift-speaknow.jpg" data-artist="Taylor Swift" data-album="Speak Now"/>
	<img src="img/thebandperry-thebandperry.jpg" data-artist="The Band Perry" data-album="The Band Perry"/>
	<img src="img/maroon5-handsallover.jpg" data-artist="Maroon 5" data-album="Hands All Over"/>
	<img src="img/mychemicalromance-dangerdays.jpg" data-artist="My Chemical Romance" data-album="Danger Days"/>
	<img src="img/ironmaiden-thefinalfrontier.jpg" data-artist="Iron Maiden" data-album="The Final Frontier"/>
	<img src="img/order of the black - black label society.jpg" data-artist="Order Of The Black" data-album="Black Label Society"/>
	<img src="img/usher-raymondvraymond.jpg" data-artist="Usher" data-album="Raymond V Raymond"/>
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