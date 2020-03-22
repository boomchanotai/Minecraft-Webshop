<?php
	include_once('engine.php');
	include_once('buycommand.php');

	$pointerror = new pointerror();
	$success = new success();

	if (isset($_POST['Oak_Wood_Shop1'])) {

		if ($_SESSION['point'] < $price['Oak_Wood_Shop1'] ) {
			$pointerror->errormsg();
		} else {
			
			$_SESSION['point'] = $_SESSION['point'] - $price['Oak_Wood_Shop1'];
			$update = "UPDATE authme SET point='" . $_SESSION['point'] . "' WHERE username='" . $_SESSION['username'] . "'";
			$updated = $conn->query($update);
			$rcon->connect();
			$rcon->sendCommand("give " . $_SESSION['username'] . " minecraft:log 64");
			$success->buysuccess();
		}
		
	} elseif (isset($_POST['Gold_Block_Shop1'])) {
		if ($_SESSION['point'] < $price['Gold_Block_Shop1'] ) {
			$pointerror->errormsg();
		} else {

			$_SESSION['point'] = $_SESSION['point'] - $price['Gold_Block_Shop1'];
			$update = "UPDATE authme SET point='" . $_SESSION['point'] . "' WHERE username='" . $_SESSION['username'] . "'";
			$updated = $conn->query($update);
			$rcon->connect();
			$rcon->sendCommand("give " . $_SESSION['username'] . " minecraft:gold_block 64");
			$success->buysuccess();
		}
	} elseif (isset($_POST['Diamond_Shop1'])) {
		if ($_SESSION['point'] < $price['Diamond_Shop1'] ) {
			$pointerror->errormsg();
		} else {

			$_SESSION['point'] = $_SESSION['point'] - $price['Diamond_Shop1'];
			$update = "UPDATE authme SET point='" . $_SESSION['point'] . "' WHERE username='" . $_SESSION['username'] . "'";
			$updated = $conn->query($update);
			$rcon->connect();

			$rcon->sendCommand("give " . $_SESSION['username'] . " minecraft:diamond 64");
			$success->buysuccess();
		}
	} elseif (isset($_POST['Emerald_Shop1'])) {
		if ($_SESSION['point'] < $price['Emerald_Shop1'] ) {
			$pointerror->errormsg();
		} else {

			$_SESSION['point'] = $_SESSION['point'] - $price['Emerald_Shop1'];
			$update = "UPDATE authme SET point='" . $_SESSION['point'] . "' WHERE username='" . $_SESSION['username'] . "'";
			$updated = $conn->query($update);
			$rcon->connect();

			$rcon->sendCommand("give " . $_SESSION['username'] . " minecraft:emerald 64");
			$success->buysuccess();
		}
	} elseif (isset($_POST['Coal_Shop1'])) {
		if ($_SESSION['point'] < $price['Coal_Shop1'] ) {
			$pointerror->errormsg();
		} else {

			$_SESSION['point'] = $_SESSION['point'] - $price['Coal_Shop1'];
			$update = "UPDATE authme SET point='" . $_SESSION['point'] . "' WHERE username='" . $_SESSION['username'] . "'";
			$updated = $conn->query($update);
			$rcon->connect();

			$rcon->sendCommand("give " . $_SESSION['username'] . " minecraft:coal 64");
			$success->buysuccess();
		}
	} elseif (isset($_POST['Diamond_Sword_Shop1'])) {
		if ($_SESSION['point'] < $price['Diamond_Sword_Shop1'] ) {
			$pointerror->errormsg();
		} else {

			$_SESSION['point'] = $_SESSION['point'] - $price['Diamond_Sword_Shop1'];
			$update = "UPDATE authme SET point='" . $_SESSION['point'] . "' WHERE username='" . $_SESSION['username'] . "'";
			$updated = $conn->query($update);
			$rcon->connect();

			$rcon->sendCommand("give " . $_SESSION['username'] . " minecraft:diamond_sword 1");
			$success->buysuccess();
		}
	} elseif (isset($_POST['Diamond_Shovel_Shop1'])) {
		if ($_SESSION['point'] < $price['Diamond_Shovel_Shop1'] ) {
			$pointerror->errormsg();
		} else {

			$_SESSION['point'] = $_SESSION['point'] - $price['Diamond_Shovel_Shop1'];
			$update = "UPDATE authme SET point='" . $_SESSION['point'] . "' WHERE username='" . $_SESSION['username'] . "'";
			$updated = $conn->query($update);
			$rcon->connect();

			$rcon->sendCommand("give " . $_SESSION['username'] . " minecraft:diamond_shovel 1");
			$success->buysuccess();
		}
	} elseif (isset($_POST['Diamond_Pickaxe_Shop1'])) {
		if ($_SESSION['point'] < $price['Diamond_Pickaxe_Shop1'] ) {
			$pointerror->errormsg();
		} else {

			$_SESSION['point'] = $_SESSION['point'] - $price['Diamond_Pickaxe_Shop1'];
			$update = "UPDATE authme SET point='" . $_SESSION['point'] . "' WHERE username='" . $_SESSION['username'] . "'";
			$updated = $conn->query($update);
			$rcon->connect();

			$rcon->sendCommand("give " . $_SESSION['username'] . " minecraft:diamond_pickaxe 1");
			$success->buysuccess();
		}
	} elseif (isset($_POST['Diamond_Axe_Shop1'])) {
		if ($_SESSION['point'] < $price['Diamond_Axe_Shop1'] ) {
			$pointerror->errormsg();
		} else {

			$_SESSION['point'] = $_SESSION['point'] - $price['Diamond_Axe_Shop1'];
			$update = "UPDATE authme SET point='" . $_SESSION['point'] . "' WHERE username='" . $_SESSION['username'] . "'";
			$updated = $conn->query($update);
			$rcon->connect();

			$rcon->sendCommand("give " . $_SESSION['username'] . " minecraft:diamond_axe 1");
			$success->buysuccess();
		}
	} else {
		$pointerror->wtferror();
	}
?>