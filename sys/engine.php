<?php
session_start();
include_once('config.php');
include_once('Rcon.php');

use Thedudeguy\Rcon;
$timeout = 3;

$conn = new mysqli($config['db_host'], $config['db_user'], $config['db_pass'], $config['db_db']);
$rcon = new Rcon($config['rcon_ip'], $config['rcon_port'], $config['rcon_pass'], $timeout);
$rcon2 = new Rcon($config['rcon_ip2'], $config['rcon_port2'], $config['rcon_pass2'], $timeout);
//$rconcon = $rcon->connect();

/*if ($rcon2->connect())
{
  $rcon2->sendCommand("say Rcon Connect!");
}
/*
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	$rcon->sendCommand("say DB Connect!");
*/
	
?>