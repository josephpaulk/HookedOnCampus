<?php
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