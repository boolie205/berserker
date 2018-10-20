<?php
	session_start();

	if(preg_match("/^([a-z]+)$/", key($_GET)) && is_file("pages/".key($_GET).".php")) {	
		include("pages/".key($_GET).".php");
	} else {
		header("Location: ?home");
	}
	
	include("layout/index.php");
?>