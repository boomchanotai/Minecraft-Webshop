<?php

	include_once('include/header.php');
	include_once('sys/engine.php');
	
	unset($_SESSION['username']);
	unset($_SESSION['point']);
	unset($_SESSION['email']);
	unset($_SESSION['realname']);

	header("location: index.php");

?>