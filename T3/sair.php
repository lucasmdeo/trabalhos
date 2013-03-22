<?php
	session_start();
	session_destroy();
	session_start();
	$_SESSION['p'] = 1;
	
	$loc= $_GET['pg'];
	header("location: $loc");
?>