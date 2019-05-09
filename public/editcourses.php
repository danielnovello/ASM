<?php
	include('db/conn.php');
	
	$id=$_GET['id'];
	
	$courseid=$_POST['course_id'];
	$coursenumber=$_POST['course_number'];
	$coursename=$_POST['course_name'];
	$courselocid=$_POST['location_id'];
	
	mysqli_query($conn,"update courses set course_id='$courseid', course_number='$coursenumber', course_name='$coursename', location_id='$courselocid' where id='$id'");
	header('location:courses.php');

?>