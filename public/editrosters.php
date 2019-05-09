<?php
	include('db/conn.php');
	
	$id=$_GET['id'];
	
	$rosterid=$_POST['roster_id'];
	$classesclassid=$_POST['classes_class_id'];
	$studentid=$_POST['student_id'];
	
	mysqli_query($conn,"update rosters set roster_id='$rosterid', classes_class_id='$classesclassid', student_id='$studentid' where id='$id'");
	header('location:rosters.php');

?>