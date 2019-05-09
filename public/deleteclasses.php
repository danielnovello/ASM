<?php
	include('db/conn.php');
	$idclasses=$_GET['id'];
	mysqli_query($conn,"delete from classes where id='$idclasses'");
	header('location:classes.php');

?>