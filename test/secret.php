<?php
session_start();

if ( !isset( $_SESSION ['username'])) {
	header ("Location: register.php");
}


?>

<h1> Hello <?php  echo $_SESSION ['username']; ?></h1>