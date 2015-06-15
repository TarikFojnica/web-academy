<?php
error_reporting(E_ALL ^ E_DEPRECATED);

if(!mysql_connect("localhost","root","tarik3656422"))
{
	die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("logreg"))
{
	die('oops database selection problem ! --> '.mysql_error());
}

?>