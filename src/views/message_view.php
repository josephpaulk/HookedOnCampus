<?php

require_once '/src/controllers/message_controller.php';

function viewMessage($id, $db)
{
?>

<script>
	$(function() {
		$(".dialog-modal").dialog({
			modal : true
		});
	});

</script>
<div id="messages" class="dialog-modal">
	<?php
	while ($results)
	{
		echo '<h1>'.$results['user_id'].'</h1>';
		$results = $db->$db_fetch($res);
	}
	?>
	<div class="message">
		<p>Sender</p>
		<p>Receiver</p>
		<p>Message</p>
		<p>Time</p>
	</div>
</div>


<?php
}
?>