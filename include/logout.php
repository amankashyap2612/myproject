<?php
	session_start();
	
	session_destroy();
	header("Location:bottle.php");
?>