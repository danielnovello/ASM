<!-- Add New Locations-->
    <div class="modal fade" id="addnewloc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnewloc.php">
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Location ID</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="loc_id">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Location Name</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="loc_name">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>

<!-- Add New Staff-->
    <div class="modal fade" id="addnewstaff" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnewstaff.php">
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Person ID</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="staff_person_id">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Person Number</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="staff_person_number">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">First Name</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="staff_first_name">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Middle Name</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="staff_middle_name">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Last Name</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="staff_last_name">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Email Address</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="staff_email_address">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">SIS Username</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="staff_sis_username">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Location ID</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="location_id">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>

<!-- Add New Students-->
    <div class="modal fade" id="addnewstudents" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnewstudents.php">
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Person ID</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="students_person_id">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Person Number</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="students_person_number">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">First Name</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="students_first_name">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Middle Name</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="students_middle_name">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Last Name</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="students_last_name">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Grade Level</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="students_grade_level">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Email Address</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="students_email_address">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">SIS Username</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="students_sis_username">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Password Policy</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="students_password_policy">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Location ID</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="location_id">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>	

<!-- Add New Classes-->
    <div class="modal fade" id="addnewclasses" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnewclasses.php">				
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Class ID</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="classes_class_id">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Class Number</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="classes_class_number">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Course ID</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="classes_course_id">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Instructor ID</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="classes_instructor_id">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Instructor ID 2</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="classes_instructor_id_2">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Instructor ID 3</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="classes_instructor_id_3">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Location ID</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="location_id">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>  

<!-- Add New Rosters-->
    <div class="modal fade" id="addnewrosters" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnewrosters.php">				
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Roster ID</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="roster_id">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Class ID</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="classes_class_id">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Student ID</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="student_id">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div> 

<!-- Add New Courses-->
    <div class="modal fade" id="addnewcourses" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
                </div>
                <div class="modal-body">					
				<div class="container-fluid">
				<form method="POST" action="addnewcourses.php">				
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Course ID</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="course_id">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Course Number</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="course_number">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Course Name</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="course_name">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Location ID</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="location_id">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>         
    
<!-- Export Locations  -->
    <div class="modal fade" id="exportlocations" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Export</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="functions/locations.php?id=<?php echo $row['']; ?>">
					Location Data will be exported to CSV<br>
					This file can be imported in Apple School Manager with SFTP             
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-share"></span> Export</button>
                </div>
				</form>
            </div>
        </div>
    </div>    

<!-- Export Staff  -->
    <div class="modal fade" id="exportstaff" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Export</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="functions/staff.php?id=<?php echo $row['']; ?>">
					Staff Data will be exported to CSV<br>
					This file can be imported in Apple School Manager with SFTP              
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-share"></span> Export</button>
                </div>
				</form>
            </div>
        </div>
    </div>    

<!-- Export Students  -->
    <div class="modal fade" id="exportstudents" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Export</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="functions/students.php?id=<?php echo $row['']; ?>">
					Students Data will be exported to CSV<br>
					This file can be imported in Apple School Manager with SFTP              
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-share"></span> Export</button>
                </div>
				</form>
            </div>
        </div>
    </div>
    
 <!-- Export Classes  -->
    <div class="modal fade" id="exportclasses" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Export</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="functions/classes.php?id=<?php echo $row['']; ?>">
					Class Data will be exported to CSV<br>
					This file can be imported in Apple School Manager with SFTP              
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-share"></span> Export</button>
                </div>
				</form>
            </div>
        </div>
    </div> 
    
 <!-- Export Rosters  -->
    <div class="modal fade" id="exportrosters" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Export</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="functions/rosters.php?id=<?php echo $row['']; ?>">
					Roster Data will be exported to CSV<br>
					This file can be imported in Apple School Manager with SFTP              
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-share"></span> Export</button>
                </div>
				</form>
            </div>
        </div>
    </div>         

<!-- Export Courses  -->
    <div class="modal fade" id="exportcourses" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Export</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="functions/courses.php?id=<?php echo $row['']; ?>">
					Courses Data will be exported to CSV<br>
					This file can be imported in Apple School Manager with SFTP              
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-share"></span> Export</button>
                </div>
				</form>
            </div>
        </div>
    </div>   
    
<!-- Import Locations-->
    <div class="modal fade" id="importloc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Import</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="importloc.php" enctype="multipart/form-data">
					<div class="row">
						<div class="col-lg-6">
						Please select the file named: <b>locations.csv</b><br>
						This will overwrite any locations you currently have!<br><br>
						<input type="checkbox" name="dumplocations" value="good"> Remove all data from Locations before upload?<br><br>
							<input type="file" name="fileToUpload" id="fileToUpload">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>

<!-- Import Staff-->
    <div class="modal fade" id="importstaff" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Import</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="importstaff.php" enctype="multipart/form-data">
					<div class="row">
						<div class="col-lg-6">
						Please select the file named: <b>staff.csv</b><br>
						This will overwrite any staff you currently have!<br><br>
						<input type="checkbox" name="dumpstaff" value="good"> Remove all data from Staff before upload?<br><br>
							<input type="file" name="fileToUpload" id="fileToUpload">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div> 
    
 <!-- Import Students-->
    <div class="modal fade" id="importstudents" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Import</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="importstudents.php" enctype="multipart/form-data">
					<div class="row">
						<div class="col-lg-6">
						Please select the file named: <b>students.csv</b><br>
						This will overwrite any students you currently have!<br><br>
						<input type="checkbox" name="dumpstudents" value="good"> Remove all data from Students before upload?<br><br>
							<input type="file" name="fileToUpload" id="fileToUpload">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>    

 <!-- Import Classes-->
    <div class="modal fade" id="importclasses" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Import</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="importclasses.php" enctype="multipart/form-data">
					<div class="row">
						<div class="col-lg-6">
						Please chosoe the file named: <b>classes.csv</b><br>
						This will overwrite any classes you currently have!<br><br>
						<input type="checkbox" name="dumpclasses" value="good"> Remove all data from Classes before upload?<br><br>
							<input type="file" name="fileToUpload" id="fileToUpload">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div> 

 <!-- Import Rosters-->
    <div class="modal fade" id="importrosters" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Import</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="importrosters.php" enctype="multipart/form-data">
					<div class="row">
						<div class="col-lg-6">
						Please select the file named: <b>rosters.csv</b><br>
						This will overwrite any rosters you currently have!<br><br>
						<input type="checkbox" name="dumprosters" value="good"> Remove all data from Rosters before upload?<br><br>
							<input type="file" name="fileToUpload" id="fileToUpload">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div> 
    
<!-- Import Courses-->
    <div class="modal fade" id="importcourses" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Import</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="importcourses.php" enctype="multipart/form-data">
					<div class="row">
						<div class="col-lg-6">
						Please select the file named: <b>courses.csv</b><br>
						This will overwrite any courses you currently have!<br><br>
						<input type="checkbox" name="dumpcourses" value="good"> Remove all data from Courses before upload?<br><br>
							<input type="file" name="fileToUpload" id="fileToUpload">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>                                   	    	