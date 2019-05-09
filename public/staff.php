<!DOCTYPE html>
<html>
<head>
	<title>Apple School Manager CSV Manager | Staff</title>
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
				<span style="padding-left:5px"><a href="locations.php" class="btn btn-info"><span class="glyphicon glyphicon-dashboard"></span> Locations </a></span> 
		 		<span style="padding-left:5px"><a href="staff.php" class="btn btn-default"><span class="glyphicon glyphicon-user"></span> Staff</a></span>
		 		<span style="padding-left:5px"><a href="students.php" class="btn btn-primary"><span class="glyphicon glyphicon-education"></span> Students</a></span>
		 		<span style="padding-left:5px"><a href="classes.php" class="btn btn-success"><span class="glyphicon glyphicon-list-alt"></span> Classes</a></span>
		 		<span style="padding-left:5px"><a href="rosters.php" class="btn btn-warning"><span class="glyphicon glyphicon-list"></span> Rosters</a></span>
				<span style="padding-left:5px"><a href="courses.php" class="btn btn-danger"><span class="glyphicon glyphicon-calendar"></span> Courses</a></span>
				<div style="height:50px;"></div>
			</div>	
		<br>
		 <span class="pull-left"><a href="#addnewstaff" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a></span>
		 <span style="padding-left:5px" class="pull-right"><a href="#exportstaff" data-toggle="modal" class="btn btn-success"><span class="glyphicon glyphicon-share"></span>  Export</a></span>
		 <span class="pull-right"><a href="#importstaff" data-toggle="modal" class="btn btn-info"><span class="glyphicon glyphicon-share"></span>  Import</a></span>
		<div style="height:50px;"></div>
		<input class="form-control" id="myInput" type="text" placeholder="Search.."><br>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<th>Person ID</th>
				<th>Person Number</th>
				<th>First Name</th>
				<th>Middle Name</th>
				<th>Last Name</th>
				<th>Email Address</th>
				<th>SIS Username</th>
				<th>Location ID</th>
			</thead>
			<tbody id="myTable">
			<?php
				include('db/conn.php');
				
				$query=mysqli_query($conn,"select * from `staff`");
				while($row=mysqli_fetch_array($query)){
					?>
					<tr>	
						<td><?php echo $row['staff_person_id']; ?></td>
						<td><?php echo $row['staff_person_number']; ?></td>
						<td><?php echo $row['staff_first_name']; ?></td>
						<td><?php echo $row['staff_middle_name']; ?></td>
						<td><?php echo $row['staff_last_name']; ?></td>
						<td><?php echo $row['staff_email_address']; ?></td>
						<td><?php echo $row['staff_sis_username']; ?></td>
						<td><?php echo $row['location_id']; ?></td>
						<td>
							<a href="#editstaff<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
							<a href="#deletestaff<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
							<?php include('button.php'); ?>
						</td>
					</tr>
					<?php
				}
			
			?>
			</tbody>
		</table>
	</div>
	<?php include('add_modal.php'); ?>
</div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>