<?php
function search_form()
    {
        
?>
            <form action="./src/controllers/search_controller.php?action=add" method="post">
			Search for a(n): 
            <select name="bodytype">
                <?php //foreach(SELECT)?>
            	<option value="0">----</option>
            	<option value="1">Thin</option>
                <option value="2">Athletic</option>
				<option value="3">Average</option>
            	<option value="4">Above Average</option>
                <option value="5">Big/Tall/BBW</option>
            </select>
			, 
			<select name="ethnicity">
                <?php //foreach(SELECT)?>
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
                <?php //foreach(SELECT)?>
            	<option value="0">----</option>
            	<option value="1">Science</option>
                <option value="2">Arts</option>
            </select>
			with 
			<select name="hair">
                <?php //foreach(SELECT)?>
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