<?php
	include('db/conn.php');
	
	$id=$_GET['id'];
	
	$classesclassid=$_POST['classes_class_id'];
	$classesclassnumber=$_POST['classes_class_number'];
	$classescourseid=$_POST['classes_course_id'];
	$classesinstructorid=$_POST['classes_instructor_id'];
	$classesinstructorid2=$_POST['classes_instructor_id_2'];
	$classesinstructorid3=$_POST['classes_instructor_id_3'];
	$classeslocid=$_POST['location_id'];
	
	mysqli_query($conn,"update classes set classes_class_id='$classesclassid', classes_class_number='$classesclassnumber', classes_course_id='$classescourseid', classes_instructor_id='$classesinstructorid', classes_instructor_id_2='$classesinstructorid2', classes_instructor_id_3='$classesinstructorid3', location_id='$classeslocid' where id='$id'");
	header('location:classes.php');

?>