<?php
	include('db/conn.php');
	$idstudents=$_GET['id'];
	mysqli_query($conn,"delete from students where id='$idstudents'");
	header('location:students.php');

?>