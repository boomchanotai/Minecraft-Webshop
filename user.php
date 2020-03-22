<?php
	include_once('include/head.php');
  include_once('sys/config.php');

	$check = "SELECT * FROM authme WHERE realname='" . $_SESSION['username'] . "'";
	$result = $conn->query($check);
	$disdata = $result->fetch_assoc();
?>

<div style="background-color: #ffffff; border-radius: 20px; padding: 30px; margin: 5%;" class="shadow-sm">
	<h4 class="display-6"><?php echo $disdata['realname']; ?></h4>
	<div>Username : <?php echo $disdata['username']; ?></div>
	<div>Realname : <?php echo $disdata['realname']; ?></div>
	<div>Email : <?php echo $disdata['email']; ?></div>
	<div>Points : <?php echo $disdata['point']; ?></div>
</div>

<?php
include_once('include/footer.php');
?>