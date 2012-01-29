<?php
function search_results($res, $db)
{

    //fetch first result
	$row = $db->db_fetch($res); ?>

    <div id="results">
    	</div>

        //if first result not null and row is not null, loop through all results
		<?php while($row)
		{
            $id = $row['id'];

            $query = "select * from user u , userattributes ua where u.id='" . $id . "' and u.id = ua.user_id;";
                                                                //" and ua.faculty_id = f.id";

            $res = $db->query($query);
            $result = $db->db_fetch($res);

            ?><div class="search-result">
                <img src="" alt="">
                <h1><?php echo $result['firstname'] . ' from Fine Arts'; ?></h1>
                <p>
                    <?php echo $result['birthdate']; ?> years old
                </p>
                <br>
                <p>
                    Hi, I'm Judy.  I like finishing Mortal Kombat with one hand.
                </p>
                <br>
                <form>
                    <input type="button" value="View Profile"
                        onclick="window.location.href='http://www.hookedoncampus.com/profile.php?id=<?php echo $id; ?>'">
                </form>
                <form>
                    <input type="button"
                           value="Message!">
                </form>
            </div>';

			 <?php $row = $db->db_fetch($res);
		}

}

function search_form()
{
    ?>
    <form action="./src/controllers/search_controller.php" method="post">
        Search for a(n):
        <select name="bodytype">
            <?php    //foreach(SELECT)?>
            <option value="0">----</option>
            <option value="1">Thin</option>
            <option value="2">Athletic</option>
            <option value="3">Average</option>
            <option value="4">Above Average</option>
            <option value="5">Big/Tall/BBW</option>
        </select>
        ,
        <select name="ethnicity">
            <?php    //foreach(SELECT)?>
            <option value="0">----</option>
            <option value="1">African American</option>
            <option value="2">Asian</option>
            <option value="3">Caucasian</option>
            <option value="4">Hispanic</option>
            <option value="5">Middle Eastern</option>
            <option value="6">Native American</option>
            <option value="7">Other</option>
        </select>
        in the faculty of
        <select name="faculty">
            <?php    //foreach(SELECT)?>
            <option value="0">----</option>
            <option value="1">Science</option>
            <option value="2">Arts</option>
        </select>
        with
        <select name="hair">
            <?php    //foreach(SELECT)?>
            <option value="0">----</option>
            <option value="1">Blonde</option>
            <option value="2">Brown</option>
            <option value="3">Red</option>
            <option value="4">Black</option>
            <option value="5">Grey</option>
            <option value="6">Bald</option>
            <option value="7">Mixed</option>
        </select>
        hair and a
        <select name="height">
            <?php //foreach(SELECT)?>
            <option value="0">----</option>
            <option value="1">Short</option>
            <option value="2">Normal</option>
            <option value="3">Tall</option>
        </select>
        height.
        <input type="Submit" value="Search">
    </form>

<?php
}
?>