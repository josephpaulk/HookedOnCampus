<?php
/**
 * Written By: Derek
 * Date: 28/01/12
 * Time: 9:20 PM
 */

    function questionaire_form($id, $db)
    {

        $category[0] = 'drinking';
        $category[1] = 'smoking';
        $category[2] = 'eating';
        $category[3] = 'out';
        $category[4] = 'gaming';

        $questions = array( $category[0] => 'How much do you drink?',
                            $category[1] => 'How much do you smoke?',
                            $category[2] => 'How much do you eat?',
                            $category[3] => 'How much do you go out?',
                            $category[4] => 'How much do you play video games?'
                            );



?>
<script>
	$(function() {
		$(".dialog-modal").dialog({
			modal : true
		});
	});

</script>
<div id="questionaire" class="dialog-modal">
	<form action="./src/controllers/questionaire_controller.php?id=$id;action=ques" method="post">
		<?php foreach($category as $cat) {
		?>
		<label for="<?php  echo $cat;?>"><?php   echo $questions[$cat];?></label>
		<br/>
		<select name="<?php  echo $cat;?>">
			<option value="0"><?php   echo $questions[$cat];?></option>
			<option value="5">Very Often</option>
			<option value="4">Often</option>
			<option value="3">Sometimes</option>
			<option value="2">Rarely</option>
			<option value="1">Never</option>
		</select>
		<?php }?>
		<input type="Submit" value="Submit">
	</form>
</div>
<?php
}
?>