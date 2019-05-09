<?php
	
	include('db/conn.php');
	
	$courseid=$_POST['course_id'];
	$coursenumber=$_POST['course_number'];
	$coursename=$_POST['course_name'];
	$courselocid=$_POST['location_id'];
		
	$sql = "insert into courses (course_id, course_number, course_name, location_id) values ('$courseid', '$coursenumber', '$coursename', '$courselocid')";
	
	
	if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error($conn));
  }
  echo "Success!";
	
	header('location:courses.php');

?>
