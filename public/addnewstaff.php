<?php
	include('db/conn.php');
	
	$staffid=$_POST['staff_person_id'];
	$staffnumber=$_POST['staff_person_number'];
	$stafffirst=$_POST['staff_first_name'];
	$staffmiddle=$_POST['staff_middle_name'];
	$stafflast=$_POST['staff_last_name'];
	$staffemail=$_POST['staff_email_address'];
	$staffsis=$_POST['staff_sis_username'];
	$stafflocid=$_POST['location_id'];
	
	mysqli_query($conn,"insert into staff (staff_person_id, staff_person_number, staff_first_name, staff_middle_name, staff_last_name, staff_email_address, staff_sis_username, location_id) values ('$staffid', '$staffnumber', '$stafffirst', '$staffmiddle', '$stafflast', '$staffemail', '$staffsis', '$stafflocid')");
	header('location:staff.php');

?>