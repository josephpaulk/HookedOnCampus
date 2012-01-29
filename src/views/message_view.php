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
	//$query = 'SELECT * FROM messages WHERE received_id = '.$id;

	$query = 'SELECT * FROM message WHERE receiver_id = 2;'; //change to dynamic line
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
		?>
		<div class="message">
			<p>Sender: 
			<?php echo $send_id;
			?>
			</p>
			<p>Receiver: 
			<?php echo $rec_id;
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

?>