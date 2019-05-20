<!DOCTYPE html>
<html>
<head>
	<title>Apple School Manager CSV Manager</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  	<link href="css/style.css" rel="stylesheet">	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div style="height:50px;"></div>
		<div class="well" style="margin:auto; padding:auto; width:100%;">
				<span style="font-size:25px; color:Grey"><center><strong>Apple School Manager CSV Manager</strong></center></span><br>
			<div style="text-align:center">
				<span ><a href="index.php" class="btn btn-danger"><span class="glyphicon"></span> Home </a></span> 
		 		<span style="padding-left:5px" ><a href="locations.php" class="btn btn-info"><span class="glyphicon glyphicon-dashboard"></span> Locations </a></span> 
		 		<span style="padding-left:5px"><a href="staff.php" class="btn btn-default"><span class="glyphicon glyphicon-user"></span> Staff</a></span>
		 		<span style="padding-left:5px"><a href="students.php" class="btn btn-primary"><span class="glyphicon glyphicon-education"></span> Students</a></span>
		 		<span style="padding-left:5px"><a href="classes.php" class="btn btn-success"><span class="glyphicon glyphicon-list-alt"></span> Classes</a></span>
		 		<span style="padding-left:5px"><a href="rosters.php" class="btn btn-warning"><span class="glyphicon glyphicon-list"></span> Rosters</a></span>
				<span style="padding-left:5px"><a href="courses.php" class="btn btn-danger"><span class="glyphicon glyphicon-calendar"></span> Courses</a></span>
				<div style="height:50px;"></div>
			</div>
		<br>
		<div style="height:50px;"></div>
		<span style="font-size:15px; color:Grey"><center><strong>Staff by location</strong></span>
		<br>		
<?php
//	include('db/conn.php');
//	$sql = mysqli_query($conn, "SELECT * FROM `staff` GROUP BY `id`");
//		while($row = mysqli_fetch_array($sql)) {
//			{
//				$array[$row['location_id']][] = array('staff_person_id' => $row['staff_person_id'], 'staff_person_number' => $row['staff_person_number']);
//			}
//		print_r($array); 
//	}
//?>



<?php
	include('db/conn.php');
		$query="SELECT staff_person_id, staff_person_number, staff_first_name, staff_middle_name, staff_last_name, staff_email_address, staff_sis_username, location_id FROM staff WHERE location_id = 'SAMPLE-LOC-1'";
		$result = mysqli_query($conn, $query); // First parameter is just return of "mysqli_connect()" function
			echo "<br>";
			echo "<table class='table table-striped table-bordered table-hover'>";
			echo "<thead>";
				echo "<th>Person ID</th>";
				echo "<th>Person Number</th>";
				echo "<th>First Name</th>";
				echo "<th>Middle Name</th>";
				echo "<th>Last Name</th>";
				echo "<th>Email Address</th>";
				echo "<th>SIS Username</th>";
				echo "<th>Location ID</th>";
			echo "</thead>";
			while ($row = mysqli_fetch_assoc($result)) {
		foreach ($row as $field => $value) { 
        	echo "<td>" . $value . "</td>"; 
    	}
			echo "</tr>";
	}
			echo "</table>";
?>	
<?php
	include('db/conn.php');
		$query="SELECT staff_person_id, staff_person_number, staff_first_name, staff_middle_name, staff_last_name, staff_email_address, staff_sis_username, location_id FROM staff WHERE location_id = 'SAMPLE-LOC-2'";
		$result = mysqli_query($conn, $query);
			echo "<br>";
			echo "<table class='table table-striped table-bordered table-hover'>";
			echo "<thead>";
				echo "<th>Person ID</th>";
				echo "<th>Person Number</th>";
				echo "<th>First Name</th>";
				echo "<th>Middle Name</th>";
				echo "<th>Last Name</th>";
				echo "<th>Email Address</th>";
				echo "<th>SIS Username</th>";
				echo "<th>Location ID</th>";
			echo "</thead>";
			while ($row = mysqli_fetch_assoc($result)) {
		foreach ($row as $field => $value) { 
        	echo "<td>" . $value . "</td>"; 
    	}
			echo "</tr>";
	}
			echo "</table>";
?>	
<?php
	include('db/conn.php');
		$query="SELECT staff_person_id, staff_person_number, staff_first_name, staff_middle_name, staff_last_name, staff_email_address, staff_sis_username, location_id FROM staff WHERE location_id = 'SAMPLE-LOC-3'";
		$result = mysqli_query($conn, $query);
			echo "<br>";
			echo "<table class='table table-striped table-bordered table-hover'>";
			echo "<thead>";
				echo "<th>Person ID</th>";
				echo "<th>Person Number</th>";
				echo "<th>First Name</th>";
				echo "<th>Middle Name</th>";
				echo "<th>Last Name</th>";
				echo "<th>Email Address</th>";
				echo "<th>SIS Username</th>";
				echo "<th>Location ID</th>";
			echo "</thead>";
			while ($row = mysqli_fetch_assoc($result)) { 
		foreach ($row as $field => $value) {
        	echo "<td>" . $value . "</td>"; 
    	}
			echo "</tr>";
	}
			echo "</table>";
?>			
</center>
</div>
</body>
</html>