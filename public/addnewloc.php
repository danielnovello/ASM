<?php
	include('db/conn.php');
	
	$locid=$_POST['loc_id'];
	$locname=$_POST['loc_name'];
	
	mysqli_query($conn,"insert into locations (loc_id, loc_name) values ('$locid', '$locname')");
	header('location:locations.php');

?>