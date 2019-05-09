<?php
	include('db/conn.php');
	$idstaff=$_GET['id'];
	mysqli_query($conn,"delete from staff where id='$idstaff'");
	header('location:staff.php');

?>