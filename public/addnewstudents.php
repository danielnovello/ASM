<?php
	
	include('db/conn.php');
	
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

	$sql = "insert into students (students_person_id, students_person_number, students_first_name, students_middle_name, students_last_name, students_grade_level, students_email_address, students_sis_username, students_password_policy, location_id) values ('$studentsid', '$studentsnumber', '$studentsfirst', '$studentsmiddle', '$studentslast', '$studentsgrade', '$studentsemail', '$studentssis', '$studentspassword', '$studentslocid')";
	
//	mysqli_query($conn,"insert into students (students_person_id, students_person_number, students_first_name, students_middle_name, students_last_name, students_grade_level, students_email_address, students_sis_username, students_password_policy, location_id) values ('$studentsid', '$studentsnumber', '$studentsfirst', '$studentsmiddle', '$studentslast', '$studentsgrade', '$studentsemail', '$studentssis', '$studentspassword', '$studentslocid')");
	
	if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error($conn));
  }
  echo "Success!";
	
	header('location:students.php');

?>
