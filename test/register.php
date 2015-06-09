<?php 
session_start();

define('USERNAME', 'tarik');
define('PASSWORD', '123');

	if ( $_SERVER ['REQUEST_METHOD'] == 'POST') {
		$username = $_POST['username'];
		$password = $_POST['password'];


		if ( $username === USERNAME && $password === PASSWORD) {
			
			$_SESSION ['username'] = $username;
			header("Location: secret.php");
		}


		
	}	
?>
<h1>Register</h1>

	<form method="post" action="register.php" class="forms">

	    <label>
	        Username <span class="req"></span>
	        <input type="text" name="username" class="width-100"  />
	    </label>

	    <label>
	        Password <span class="req"></span>
	        <input type="text" name="password" class="width-100"  />
	    </label>

	     <input type="submit" class="btn btn-blue" value="Login" />
	</form>