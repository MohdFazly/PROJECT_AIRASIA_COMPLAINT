<?php
	if(!session_id())
	{
		session_start();
	}


	if(isset($_SESSION['fullname']) != session_id())
	{
		header('Location: login.php');
	}

?>