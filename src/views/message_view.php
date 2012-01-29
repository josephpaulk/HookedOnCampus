<?php

require_once './src/utils/db.php';

function viewMessage($pid, $db)
{
?>

<script>
	$(function() {
		$(".dialog-modal").dialog({
			modal : true
		});
	});

</script>
<?php
	$db = new DB();
	$id = $_SESSION['id'];
	$query = 'SELECT * FROM message WHERE receiver_id = '.$id;
    

	//$query = 'SELECT * FROM message WHERE receiver_id = ;'; //change to dynamic line
	$res = $db->db_query($query);
	$results = $db->db_fetch($res);
	while($results != 0){
	?>

	<!--<div id="messages" class="dialog-modal">-->
	<div>
		<?php
	
		
		$msg_id = $results['id'];
		$rec_id = $results['receiver_id'];
		$send_id = $results['sender_id'];
		$msg = $results['message'];
		$timestamp = $results['sent'];
		
		$query2 = 'SELECT firstname FROM user WHERE id = '.$send_id;
		$res2 = $db->db_query($query2);
		$results2 = $db->db_fetch($res);
		$sendname = $results2['firstname'];
		
		$query2 = 'SELECT firstname FROM user WHERE id = '.$rec_id;
		$res2 = $db->db_query($query2);
		$results2 = $db->db_fetch($res);
		$recname = $results2['firstname'];
		?>
		<div class="message">
			<p>From: 
			<?php echo $sendname;
			?>
			</p>
			<p>To: 
			<?php echo $recname;
			?>
			</p>
			<p>Message:</p><p> 
			<?php echo $msg;
			?></p>
			<p>Time: 
			<?php echo $timestamp;
			?></p><br /><br />
		</div>
	</div>


	<?php
	$results = $db->db_fetch($res);
	}
}


function sendMessage($src, $dest)
{
    echo "<form action='./src/controllers/message_controller.php' method='POST'>";
    echo "<input type='textarea' name='mess' />";
    echo "<input type='hidden' name='recv' value='".$dest."' />";
    echo "<input type='hidden' name='send' value='".$src."' />";
    echo "<input type='submit' value='Send' />";
    echo "</form>";
}
?>