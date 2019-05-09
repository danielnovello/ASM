<!-- Delete Location-->
    <div class="modal fade" id="deleteloc<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$delloc=mysqli_query($conn,"select * from locations where id='".$row['id']."'");
					$drow=mysqli_fetch_array($delloc);
				?>
				<div class="container-fluid">
					<h5><center>Location ID: <strong><?php echo $drow['loc_id']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="deleteloc.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Delete Staff-->
    <div class="modal fade" id="deletestaff<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$delstaff=mysqli_query($conn,"select * from staff where id='".$row['id']."'");
					$drow=mysqli_fetch_array($delstaff);
				?>
				<div class="container-fluid">
					<h5><center>Person ID: <strong><?php echo $drow['staff_person_id']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="deletestaff.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Delete Students-->
    <div class="modal fade" id="deletestudents<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$delstu=mysqli_query($conn,"select * from students where id='".$row['id']."'");
					$drow=mysqli_fetch_array($delstu);
				?>
				<div class="container-fluid">
					<h5><center>Student ID: <strong><?php echo $drow['students_person_id']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="deletestudents.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Delete Classes-->
    <div class="modal fade" id="deleteclasses<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$delstu=mysqli_query($conn,"select * from classes where id='".$row['id']."'");
					$drow=mysqli_fetch_array($delstu);
				?>
				<div class="container-fluid">
					<h5><center>Class ID: <strong><?php echo $drow['classes_course_id']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="deleteclasses.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Delete Rosters-->
    <div class="modal fade" id="deleterosters<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$delros=mysqli_query($conn,"select * from rosters where id='".$row['id']."'");
					$drow=mysqli_fetch_array($delros);
				?>
				<div class="container-fluid">
					<h5><center>Roster ID: <strong><?php echo $drow['roster_id']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="deleterosters.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Delete Courses-->
    <div class="modal fade" id="deletecourses<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$delcou=mysqli_query($conn,"select * from courses where id='".$row['id']."'");
					$drow=mysqli_fetch_array($delcou);
				?>
				<div class="container-fluid">
					<h5><center>Course ID: <strong><?php echo $drow['course_id']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="deletecourses.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit Location -->
    <div class="modal fade" id="editloc<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$editloc=mysqli_query($conn,"select * from locations where id='".$row['id']."'");
					$erow=mysqli_fetch_array($editloc);
				?>
				<div class="container-fluid">
				<form method="POST" action="editloc.php?id=<?php echo $erow['id']; ?>">
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Location ID:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="loc_id" class="form-control" value="<?php echo $erow['loc_id']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Location Name:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="loc_name" class="form-control" value="<?php echo $erow['loc_name']; ?>">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit Staff-->
    <div class="modal fade" id="editstaff<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$editstaff=mysqli_query($conn,"select * from staff where id='".$row['id']."'");
					$erow=mysqli_fetch_array($editstaff);
				?>
				<div class="container-fluid">
								<form method="POST" action="editstaff.php?id=<?php echo $erow['id']; ?>">
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Person ID</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="staff_person_id" class="form-control" value="<?php echo $erow['staff_person_id']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Person Number</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="staff_person_number" class="form-control" value="<?php echo $erow['staff_person_number']; ?>">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">First Name</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="staff_first_name" class="form-control" value="<?php echo $erow['staff_first_name']; ?>">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Middle Name</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="staff_middle_name" class="form-control" value="<?php echo $erow['staff_middle_name']; ?>">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Last Name</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="staff_last_name" class="form-control" value="<?php echo $erow['staff_last_name']; ?>">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Email Address</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="staff_email_address" class="form-control" value="<?php echo $erow['staff_email_address']; ?>">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">SIS Username</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="staff_sis_username" class="form-control" value="<?php echo $erow['staff_sis_username']; ?>">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Location ID</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="location_id" class="form-control" value="<?php echo $erow['location_id']; ?>">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit Students-->
    <div class="modal fade" id="editstudents<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$editstud=mysqli_query($conn,"select * from students where id='".$row['id']."'");
					$erow=mysqli_fetch_array($editstud);
				?>
				<div class="container-fluid">
								<form method="POST" action="editstudents.php?id=<?php echo $erow['id']; ?>">
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Person ID</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="students_person_id" class="form-control" value="<?php echo $erow['students_person_id']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Person Number</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="students_person_number" class="form-control" value="<?php echo $erow['students_person_number']; ?>">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">First Name</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="students_first_name" class="form-control" value="<?php echo $erow['students_first_name']; ?>">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Middle Name</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="students_middle_name" class="form-control" value="<?php echo $erow['students_middle_name']; ?>">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Last Name</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="students_last_name" class="form-control" value="<?php echo $erow['students_last_name']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Grade Level</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="students_grade_level" class="form-control" value="<?php echo $erow['students_grade_level']; ?>">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Email Address</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="students_email_address" class="form-control" value="<?php echo $erow['students_email_address']; ?>">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">SIS Username</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="students_sis_username" class="form-control" value="<?php echo $erow['students_sis_username']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Password Policy</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="students_password_policy" class="form-control" value="<?php echo $erow['students_password_policy']; ?>">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Location ID</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="location_id" class="form-control" value="<?php echo $erow['location_id']; ?>">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit Classes-->
    <div class="modal fade" id="editclasses<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$editstaff=mysqli_query($conn,"select * from classes where id='".$row['id']."'");
					$erow=mysqli_fetch_array($editstaff);
				?>
				<div class="container-fluid">
								<form method="POST" action="editclasses.php?id=<?php echo $erow['id']; ?>">
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Class ID</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="classes_class_id" class="form-control" value="<?php echo $erow['classes_class_id']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Class Number</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="classes_class_number" class="form-control" value="<?php echo $erow['classes_class_number']; ?>">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Course ID</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="classes_course_id" class="form-control" value="<?php echo $erow['classes_course_id']; ?>">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Instructor ID</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="classes_instructor_id" class="form-control" value="<?php echo $erow['classes_instructor_id']; ?>">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Instructor ID 2</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="classes_instructor_id_2" class="form-control" value="<?php echo $erow['classes_instructor_id_2']; ?>">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Instructor ID 3</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="classes_instructor_id_3" class="form-control" value="<?php echo $erow['classes_instructor_id_3']; ?>">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Location ID</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="location_id" class="form-control" value="<?php echo $erow['location_id']; ?>">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit Rosters-->
    <div class="modal fade" id="editrosters<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$editros=mysqli_query($conn,"select * from rosters where id='".$row['id']."'");
					$erow=mysqli_fetch_array($editros);
				?>
				<div class="container-fluid">
								<form method="POST" action="editrosters.php?id=<?php echo $erow['id']; ?>">
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Roster ID</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="roster_id" class="form-control" value="<?php echo $erow['roster_id']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Class ID</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="classes_class_id" class="form-control" value="<?php echo $erow['classes_class_id']; ?>">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Student ID</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="student_id" class="form-control" value="<?php echo $erow['student_id']; ?>">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit Courses-->
    <div class="modal fade" id="editcourses<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$editcou=mysqli_query($conn,"select * from courses where id='".$row['id']."'");
					$erow=mysqli_fetch_array($editcou);
				?>
				<div class="container-fluid">
								<form method="POST" action="editcourses.php?id=<?php echo $erow['id']; ?>">
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Course ID</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="course_id" class="form-control" value="<?php echo $erow['course_id']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Course Number</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="course_number" class="form-control" value="<?php echo $erow['course_number']; ?>">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Course Name</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="course_name" class="form-control" value="<?php echo $erow['course_name']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Location ID</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="location_id" class="form-control" value="<?php echo $erow['location_id']; ?>">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Not a CSV Error-->
    <div class="modal fade" id="notacsv" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
				This is not a CSV 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->
