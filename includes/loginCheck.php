<?php
	
	if(!isset($_SESSION['userID']) && $_SESSION['userID'] == '')
	{
		header('location:login.php');
	}
	
?>