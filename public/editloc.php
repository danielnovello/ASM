<?php
	include('db/conn.php');
	
	$id=$_GET['id'];
	
	$locid=$_POST['loc_id'];
	$locname=$_POST['loc_name'];
	
	mysqli_query($conn,"update locations set loc_id='$locid', loc_name='$locname' where id='$id'");
	header('location:locations.php');

?>