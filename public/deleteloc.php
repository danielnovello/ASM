<?php
	include('db/conn.php');
	$idloc=$_GET['id'];
	mysqli_query($conn,"delete from locations where id='$idloc'");
	header('location:locations.php');

?>