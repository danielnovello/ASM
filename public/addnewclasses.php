<?php
	
	include('db/conn.php');
	
	$classesclassid=$_POST['classes_class_id'];
	$classesclassnumber=$_POST['classes_class_number'];
	$classescourseid=$_POST['classes_course_id'];
	$classesinstructorid=$_POST['classes_instructor_id'];
	$classesinstructorid2=$_POST['classes_instructor_id_2'];
	$classesinstructorid3=$_POST['classes_instructor_id_3'];
	$classeslocid=$_POST['location_id'];
	
	$sql = "insert into classes (classes_class_id, classes_class_number, classes_course_id, classes_instructor_id, classes_instructor_id_2, classes_instructor_id_3, location_id) values ('$classesclassid', '$classesclassnumber', '$classescourseid', '$classesinstructorid', '$classesinstructorid2', '$classesinstructorid3', '$classeslocid')";
	
	
	if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error($conn));
  }
  echo "Success!";
	
	header('location:classes.php');

?>
