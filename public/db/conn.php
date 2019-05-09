<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","root","asm");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>