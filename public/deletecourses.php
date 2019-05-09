<?php
	include('db/conn.php');
	$idcourses=$_GET['id'];
	mysqli_query($conn,"delete from courses where id='$idcourses'");
	header('location:courses.php');

?>