<!DOCTYPE html>
<html>
<head>
	<title>Apple School Manager CSV Manager | Rosters</title>
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
		<br>
		<H2><center>		
<?php
include('db/conn.php');
	
$target_dir = "import/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileName = strtolower(pathinfo($target_file,PATHINFO_BASENAME));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is a CSV - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not a CSV. Nothing has changed. Redirecting back to homepage...";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "This already exists.";
    $uploadOk = 1;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo " Sorry, your file is too large. Nothing has changed. Redirecting back to homepage...";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileName != "rosters.csv" ) {
	echo "<img src='img/cross.png' width='100'/>";
	echo "<br><br>";
    echo "Sorry, only rosters.csv is allowed.";
    $uploadOk = 0;
    header( "Refresh:5; url=rosters.php", true, 303);
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo " Sorry, your file was not uploaded. Nothing has changed. Redirecting back to homepage...";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	    echo "<img src='img/tick.jpg' width='100'/>";
	    echo "<br>";
        echo " The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded. Redirecting back to homepage...";
        if (empty($_POST["dumprosters"]) ) 
			{
				$fileName = "import/rosters.csv";          
				$file = fopen($fileName, "r");    
					fgets($file);
			while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
				$sqlInsertappend = "INSERT into rosters (roster_id, classes_class_id, student_id)
                   values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "')";       
				$resultappend = mysqli_query($conn, $sqlInsertappend);     
			if (! empty($resultappend)) {
                $type = "success";
                $message = "CSV Data Imported into the Database";
                //Cleanup
                $pathtofile="import/rosters.csv";  
            if(unlink($pathtofile));
            } else {
                $type = "error";
                $message = "Problem in Importing CSV Data";
            }
        }
	header( "Refresh:5; url=rosters.php", true, 303);  
			} else {
				$resulttrunc = mysqli_query($conn, "DELETE FROM `rosters`");
				$fileName = "import/rosters.csv";          
				$file = fopen($fileName, "r");    
					fgets($file);
			while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
            $sqlInsert = "INSERT into rosters (roster_id, classes_class_id, student_id)
                   values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "')";
            $result = mysqli_query($conn, $sqlInsert);     
            if (! empty($result)) {
                $type = "success";
                $message = "CSV Data Imported into the Database";
                //Cleanup
                $pathtofile="import/rosters.csv";  
                if(unlink($pathtofile));
            } else {
                $type = "error";
                $message = "Problem in Importing CSV Data";
            }
  		}
  	header( "Refresh:5; url=rosters.php", true, 303);
		}   
    		} else {
				echo "";
    	}
	}    
?>			
		</center></H2>
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