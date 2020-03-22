<?php
	include_once('engine.php');
	include_once('buycommand.php');

	$pointerror = new pointerror();
	$success = new success();

	if (isset($_POST['Oak_Wood_Shop2'])) {

		if ($_SESSION['point'] < $price['Oak_Wood_Shop2'] ) {
			$pointerror->errormsg2();
		} else {
			
			$_SESSION['point'] = $_SESSION['point'] - $price['Oak_Wood_Shop2'];
			$update = "UPDATE authme SET point='" . $_SESSION['point'] . "' WHERE username='" . $_SESSION['username'] . "'";
			$updated = $conn->query($update);
			$rcon2->connect();
			$rcon2->sendCommand("give " . $_SESSION['username'] . " minecraft:log 64");
			$success->buysuccess2();
		}
		
	} elseif (isset($_POST['Gold_Block_Shop2'])) {
		if ($_SESSION['point'] < $price['Gold_Block_Shop2'] ) {
			$pointerror->errormsg2();
		} else {

			$_SESSION['point'] = $_SESSION['point'] - $price['Gold_Block_Shop2'];
			$update = "UPDATE authme SET point='" . $_SESSION['point'] . "' WHERE username='" . $_SESSION['username'] . "'";
			$updated = $conn->query($update);
			$rcon2->connect();
			$rcon2->sendCommand("give " . $_SESSION['username'] . " minecraft:gold_block 64");
			$success->buysuccess2();
		}
	} elseif (isset($_POST['Diamond_Shop2'])) {
		if ($_SESSION['point'] < $price['Diamond_Shop2'] ) {
			$pointerror->errormsg2();
		} else {

			$_SESSION['point'] = $_SESSION['point'] - $price['Diamond_Shop2'];
			$update = "UPDATE authme SET point='" . $_SESSION['point'] . "' WHERE username='" . $_SESSION['username'] . "'";
			$updated = $conn->query($update);
			$rcon2->connect();

			$rcon2->sendCommand("give " . $_SESSION['username'] . " minecraft:diamond 64");
			$success->buysuccess2();
		}
	} elseif (isset($_POST['Emerald_Shop2'])) {
		if ($_SESSION['point'] < $price['Emerald_Shop2'] ) {
			$pointerror->errormsg2();
		} else {

			$_SESSION['point'] = $_SESSION['point'] - $price['Emerald_Shop2'];
			$update = "UPDATE authme SET point='" . $_SESSION['point'] . "' WHERE username='" . $_SESSION['username'] . "'";
			$updated = $conn->query($update);
			$rcon2->connect();

			$rcon2->sendCommand("give " . $_SESSION['username'] . " minecraft:emerald 64");
			$success->buysuccess2();
		}
	} elseif (isset($_POST['Coal_Shop2'])) {
		if ($_SESSION['point'] < $price['Coal_Shop2'] ) {
			$pointerror->errormsg2();
		} else {

			$_SESSION['point'] = $_SESSION['point'] - $price['Coal_Shop2'];
			$update = "UPDATE authme SET point='" . $_SESSION['point'] . "' WHERE username='" . $_SESSION['username'] . "'";
			$updated = $conn->query($update);
			$rcon2->connect();

			$rcon2->sendCommand("give " . $_SESSION['username'] . " minecraft:coal 64");
			$success->buysuccess2();
		}
	} elseif (isset($_POST['Diamond_Sword_Shop2'])) {
		if ($_SESSION['point'] < $price['Diamond_Sword_Shop2'] ) {
			$pointerror->errormsg2();
		} else {

			$_SESSION['point'] = $_SESSION['point'] - $price['Diamond_Sword_Shop2'];
			$update = "UPDATE authme SET point='" . $_SESSION['point'] . "' WHERE username='" . $_SESSION['username'] . "'";
			$updated = $conn->query($update);
			$rcon2->connect();

			$rcon2->sendCommand("give " . $_SESSION['username'] . " minecraft:diamond_sword 1");
			$success->buysuccess2();
		}
	} elseif (isset($_POST['Diamond_Shovel_Shop2'])) {
		if ($_SESSION['point'] < $price['Diamond_Shovel_Shop2'] ) {
			$pointerror->errormsg2();
		} else {

			$_SESSION['point'] = $_SESSION['point'] - $price['Diamond_Shovel_Shop2'];
			$update = "UPDATE authme SET point='" . $_SESSION['point'] . "' WHERE username='" . $_SESSION['username'] . "'";
			$updated = $conn->query($update);
			$rcon2->connect();

			$rcon2->sendCommand("give " . $_SESSION['username'] . " minecraft:diamond_shovel 1");
			$success->buysuccess2();
		}
	} elseif (isset($_POST['Diamond_Pickaxe_Shop2'])) {
		if ($_SESSION['point'] < $price['Diamond_Pickaxe_Shop2'] ) {
			$pointerror->errormsg2();
		} else {

			$_SESSION['point'] = $_SESSION['point'] - $price['Diamond_Pickaxe_Shop2'];
			$update = "UPDATE authme SET point='" . $_SESSION['point'] . "' WHERE username='" . $_SESSION['username'] . "'";
			$updated = $conn->query($update);
			$rcon2->connect();

			$rcon2->sendCommand("give " . $_SESSION['username'] . " minecraft:diamond_pickaxe 1");
			$success->buysuccess2();
		}
	} elseif (isset($_POST['Diamond_Axe_Shop2'])) {
		if ($_SESSION['point'] < $price['Diamond_Axe_Shop2'] ) {
			$pointerror->errormsg2();
		} else {

			$_SESSION['point'] = $_SESSION['point'] - $price['Diamond_Axe_Shop2'];
			$update = "UPDATE authme SET point='" . $_SESSION['point'] . "' WHERE username='" . $_SESSION['username'] . "'";
			$updated = $conn->query($update);
			$rcon2->connect();

			$rcon2->sendCommand("give " . $_SESSION['username'] . " minecraft:diamond_axe 1");
			$success->buysuccess2();
		}
	} else {
		$pointerror->wtferror();
	}
?>