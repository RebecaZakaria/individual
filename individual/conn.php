<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
 $conn = mysqli_connect($servername, $username, $password);
 // Check connection
 if ($conn) {
     echo"Connection successfully: ";
 }
     else{
die("connection fail".mysqli_connect_error());
     }


?> 

