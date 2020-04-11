<?php
	session_start();

	if (isset($_SESSION['username'])) {
	    session_destroy();
	}
	
	setcookie('username', '', time() - 3600);

	header("location:index.php");
?>