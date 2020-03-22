<?php
	include_once('include/head.php');
?>
	<form class="form-signin text-center py-5 container" action="sys/action" method="post">
	  <img class="mb-4" src="img/icon.png" width="72" height="72">
	  <h1 class="h3 mb-3 font-weight-normal">Register</h1>
	  
	  <input type="hidden" name="action" value="register">

	  <label for="inputEmail" class="sr-only">Email</label>
	  <input name="Email" type="text" id="Email" class="form-control" placeholder="Email" required="" autofocus="">
	  <br>
	  <label for="inputUsername" class="sr-only">Username</label>
	  <input name="Username" type="text" id="Username" class="form-control" placeholder="Username" required="" autofocus="">
	  <br>
	  <label for="inputPassword" class="sr-only">Password</label>
	  <input name="Password" type="password" id="Password" class="form-control" placeholder="Password" required="">
	  <br>
	  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
	</form>

<?php
include_once('include/footer.php');
?>