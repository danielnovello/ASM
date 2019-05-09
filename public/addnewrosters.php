<?php
	
	include('db/conn.php');
	
	$rosterid=$_POST['roster_id'];
	$classesclassid=$_POST['classes_class_id'];
	$studentid=$_POST['student_id'];
	
	$sql = "insert into rosters (roster_id, classes_class_id, student_id) values ('$rosterid', '$classesclassid', '$studentid')";
	
	
	if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error($conn));
  }
  echo "Success!";
	
	header('location:rosters.php');

?>
