<?php
	include_once('include/head.php');
	include_once('sys/engine.php');
	include_once('sys/config.php');
	include_once('sys/buycommand.php');
?>

	
<div class="container py-5">
	<div align="center">
		<img width="50%" src="img/truemoney.png">
	</div>
	<form action="sys/true" method="post" class="py-4">
		<input name="truemoney" type="text" class="form-control" placeholder="Enter Truemoney" required="" autofocus="">
		<br>
		<button class="btn btn-primary btn-block" type="submit">Topup</button>
	</form>
	
</div>
	


<?php
include_once('include/footer.php');
?>