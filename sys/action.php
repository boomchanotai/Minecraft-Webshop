<?php
include_once('action.php');
include_once('engine.php');
include_once('buycommand.php');
include_once('SHA256.php');

$runcmd = new success();
$error = new pointerror();
$SHA256 = new Sha256();


if ($_POST) {
	if ($_POST['action'] == "register") {
		$Username = strtolower($_POST['Username']);
		$Realname = $_POST['Username'];
		$Password = $SHA256->hash($_POST['Password']);
		$Email = $_POST['Email'];
		
		$uch = "SELECT * FROM authme WHERE username='$Username'";
		$reuch = $conn->query($uch);
		
		if($reuch->num_rows > 0){
			$error->regerror();
		} else {
			$sql = "INSERT INTO authme (username, realname, password, email) VALUES ('$Username','$Realname','$Password','$Email')";

		if ($conn->query($sql) === TRUE) {
            $_SESSION['username'] = $Realname;
            $_SESSION['point'] = 0;
            $_SESSION['email'] = $Email;
	        $runcmd->regsuccess();
			exit();
		} else {
		    $error->wtferror();
		}
		}
		
		

	} elseif ($_POST['action'] == "login") {

        $Username = strtolower($_POST['Username']);
		$Password = $_POST['Password'];

        $login = "SELECT * FROM authme WHERE username='$Username'";
        $result = $conn->query($login);

        if ($result->num_rows == 1) {

			$checkpass = "SELECT * FROM authme WHERE username='$Username'";
        	$resultpass = $conn->query($checkpass);
        	$disdata = $resultpass->fetch_assoc();

        	if ($SHA256->isValidPassword($Password, $disdata['password'])) {
        		$_SESSION['username'] = $disdata['username'];
        		$_SESSION['realname'] = $disdata['realname'];
        		$_SESSION['point'] = $disdata['point'];
        		$_SESSION['email'] = $disdata['email'];

        		$runcmd->loginsuccess();
        		
        	} else {
        		$error->loginerror();
        	}

        } else {
        	$error->loginerror();
        }

	} else {
	$error->wtferror();
}
} else {
	$error->wtferror();
}


?>