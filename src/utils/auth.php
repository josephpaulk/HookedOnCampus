<?php



function is_auth()
{
    if(!isset($_SESSION))
        session_start();
	
    if( !$_SESSION['auth'] || !isset($_SESSION['auth']))
    {
        header("Location: index.php");
    }
    
}

function check_auth()
{
    if (!isset($_SESSION['auth']) || !$_SESSION['auth'] || !isset($_SESSION))
    {
      return false;
    }
    return true;
}

function authorize_user($id)
{
    
}


function checkError()
{
	if (isset($_SESSION['error']))
	{
		$err = $_SESSION['error'];
		echo "<div class='ui-widget' style='width: 300px; '>
				<div class='ui-state-error ui-corner-all' style='padding: 0 .7em;'> 
					<p><span class='ui-icon ui-icon-alert' style='float: left; margin-right: .3em;'></span> 
					<strong>Alert:</strong> $err </p>
				</div>
		</div>";
		unset($_SESSION['error']);
	}
	
}

?>