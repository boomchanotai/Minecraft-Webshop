<?php
  include_once('sys/engine.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>MCSHOP - SPSM</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/MyStyle.css">
	<link rel="shortcut icon" href="img/icon.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">SPSM Minecraft Server</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a class="nav-link" href="index">Home</a></li>
        <?php if (isset($_SESSION['realname'])) { ?>
          <li class="nav-item"><a class="nav-link" href="shop1">Shop1</a></li>
          <li class="nav-item"><a class="nav-link" href="shop2">Shop2</a></li>
          <li class="nav-item"><a class="nav-link" href="topup">Topup</a></li>
        <?php } else { ?>
        <?php } ?>
      
      </ul>

      <?php if (isset($_SESSION['realname'])) { ?>
      <ul class="navbar-nav pull-right">
        <li class="nav-item"><a class="nav-link" href="user"><?php echo $_SESSION['realname']; ?></a></li>
        <li class="nav-item"><a class="nav-link" href="#"><?php echo $_SESSION['point']; ?></a></li>
        <li class="nav-item"><a class="nav-link" href="logout">Logout</a></li>
      </ul>
      <?php } else { ?>
      <ul class="navbar-nav pull-right">
      	<li class="nav-item"><a class="nav-link" href="register">Register</a></li>
        <li class="nav-item"><a class="nav-link" href="login">Login</a></li>
      </ul>
      <?php } ?>

    </div>
  	</nav>
  </div><br><br>