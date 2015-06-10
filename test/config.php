<?php
 //Information to connect to your MySQL Server AND DB 
 $host     = "localhost"; 
 $username = "root"; 
 $password = "tarik3656422"; 
 $db       = "web-academy"; 
 

 $con = mysqli_connect($host,$username,$password,$db) or die("Can not connect to Server.");
 echo "Connected to a database";