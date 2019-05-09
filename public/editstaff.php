<?php
	include('db/conn.php');
	
	$id=$_GET['id'];
	
	$staffid=$_POST['staff_person_id'];
	$staffnumber=$_POST['staff_person_number'];
	$stafffirst=$_POST['staff_first_name'];
	$staffmiddle=$_POST['staff_middle_name'];
	$stafflast=$_POST['staff_last_name'];
	$staffemail=$_POST['staff_email_address'];
	$staffsis=$_POST['staff_sis_username'];
	$stafflocid=$_POST['location_id'];

	mysqli_query($conn,"update staff set staff_person_id='$staffid', staff_person_number='$staffnumber', staff_first_name='$stafffirst', staff_middle_name='$staffmiddle', staff_last_name='$stafflast', staff_email_address='$staffsis', staff_sis_username='$staffnumber', location_id='$stafflocid' where id='$id'");
										 
	header('location:staff.php');

?>