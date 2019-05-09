<?php
include('db/conn.php');
	
$target_dir = "import/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileName = strtolower(pathinfo($target_file,PATHINFO_FILENAME));
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
if($imageFileName != "courses" ) {
    echo " Sorry, only courses.csv is allowed. Nothing has changed. Redirecting back to homepage...";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo " Sorry, your file was not uploaded. Nothing has changed. Redirecting back to homepage...";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo " The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo " Sorry, there was an error uploading your file. Nothing has changed. Redirecting back to homepage...";
    }
}
?>


<?php
include('db/conn.php');	

if (empty($_POST["dumpcourses"]) ) 
  {
	$fileName = "import/courses.csv";          
        $file = fopen($fileName, "r");    
        fgets($file);
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
            $sqlInsert = "INSERT into courses (course_id, course_number, course_name, location_id)
                   values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','" . $column[3] . "')";
            $result = mysqli_query($conn, $sqlInsert);     
            if (! empty($result)) {
                $type = "success";
                $message = "CSV Data Imported into the Database";
                //Cleanup
                $pathtofile="import/courses.csv";  
                if(unlink($pathtofile));
            } else {
                $type = "error";
                $message = "Problem in Importing CSV Data";
            }
        }
	header( "Refresh:5; url=courses.php", true, 303);
} else {
	$resulttrunc = mysqli_query($conn, "DELETE FROM `courses`");   
	$fileName = "import/courses.csv";          
        $file = fopen($fileName, "r");    
        fgets($file);
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
            $sqlInsert = "INSERT into courses (course_id, course_number, course_name, location_id)
                   values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','" . $column[3] . "')";
            $result = mysqli_query($conn, $sqlInsert);     
            if (! empty($result)) {
                $type = "success";
                $message = "CSV Data Imported into the Database";
                //Cleanup
                $pathtofile="import/courses.csv";  
                if(unlink($pathtofile));
            } else {
                $type = "error";
                $message = "Problem in Importing CSV Data";
            }
        }
	header( "Refresh:5; url=courses.php", true, 303);
}    
?>
 