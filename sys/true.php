<?php
	include_once('engine.php');
	include_once('config.php');
	include_once('buycommand.php');
	
	$se = new pointerror();
	$sa = new success();
	switch ($_POST['truemoney']) {
		case $truemoney['50']:
			$true = 50;
			$_SESSION['point'] = $_SESSION['point'] + $true;
			$update = "UPDATE user SET point='" . $_SESSION['point'] . "' WHERE username='" . $_SESSION['username'] . "'";
			$updated = $conn->query($update);
			$sa->trueinput($true,$_SESSION['point'],$_SESSION['username']);
			break;
		case $truemoney['90']:
			$true = 90;
			$_SESSION['point'] = $_SESSION['point'] + $true;
			$update = "UPDATE user SET point='" . $_SESSION['point'] . "' WHERE username='" . $_SESSION['username'] . "'";
			$updated = $conn->query($update);
			$sa->trueinput($true,$_SESSION['point'],$_SESSION['username']);
			break;
		case $truemoney['150']:
			$true = 150;
			$_SESSION['point'] = $_SESSION['point'] + $true;
			$update = "UPDATE user SET point='" . $_SESSION['point'] . "' WHERE username='" . $_SESSION['username'] . "'";
			$updated = $conn->query($update);
			$sa->trueinput($true,$_SESSION['point'],$_SESSION['username']);
			break;
		case $truemoney['300']:
			$true = 300;
			$_SESSION['point'] = $_SESSION['point'] + $true;
			$update = "UPDATE user SET point='" . $_SESSION['point'] . "' WHERE username='" . $_SESSION['username'] . "'";
			$updated = $conn->query($update);
			$sa->trueinput($true,$_SESSION['point'],$_SESSION['username']);
			break;
		case $truemoney['500']:
			$true = 500;
			$_SESSION['point'] = $_SESSION['point'] + $true;
			$update = "UPDATE user SET point='" . $_SESSION['point'] . "' WHERE username='" . $_SESSION['username'] . "'";
			$updated = $conn->query($update);
			$sa->trueinput($true,$_SESSION['point'],$_SESSION['username']);
			break;
		case $truemoney['1000']:
			$true = 1000;
			$_SESSION['point'] = $_SESSION['point'] + $true;
			$update = "UPDATE user SET point='" . $_SESSION['point'] . "' WHERE username='" . $_SESSION['username'] . "'";
			$updated = $conn->query($update);
			$sa->trueinput($true,$_SESSION['point'],$_SESSION['username']);
			break;
		default:
			$se->trueerror();
			break;
	}
?>