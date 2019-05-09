<?php
	include('db/conn.php');
	
	$id=$_GET['id'];
	
	$studentsid=$_POST['students_person_id'];
	$studentsnumber=$_POST['students_person_number'];
	$studentsfirst=$_POST['students_first_name'];
	$studentsmiddle=$_POST['students_middle_name'];
	$studentslast=$_POST['students_last_name'];
	$studentsgrade=$_POST['students_grade_level'];
	$studentsemail=$_POST['students_email_address'];
	$studentssis=$_POST['students_sis_username'];
	$studentspassword=$_POST['students_password_policy'];
	$studentslocid=$_POST['location_id'];
	
	mysqli_query($conn,"update students set students_person_id='$studentsid', students_person_number='$studentsnumber', students_first_name='$studentsfirst', students_middle_name='$studentsmiddle', students_last_name='$studentslast', students_grade_level='$studentsgrade', students_email_address='$studentsemail', students_sis_username='$studentssis', students_password_policy='$studentspassword', location_id='$studentslocid'  where id='$id'");
	header('location:students.php');

?>