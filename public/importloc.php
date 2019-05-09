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
if($imageFileName != "locations.csv" ) {
    echo "Sorry, only locations.csv is allowed.";
    $uploadOk = 0;
    header( "Refresh:5; url=locations.php", true, 303);
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo " Sorry, your file was not uploaded. Nothing has changed. Redirecting back to homepage...";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo " The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        if (empty($_POST["dumplocations"]) ) 
			{
				$fileName = "import/locations.csv";          
				$file = fopen($fileName, "r");    
					fgets($file);
			while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
				$sqlInsertappend = "INSERT into locations (loc_id,loc_name) values ('" . $column[0] . "','" . $column[1] . "')";       
				$resultappend = mysqli_query($conn, $sqlInsertappend);     
			if (! empty($resultappend)) {
                $type = "success";
                $message = "CSV Data Imported into the Database";
                //Cleanup
                $pathtofile="import/locations.csv";  
            if(unlink($pathtofile));
            } else {
                $type = "error";
                $message = "Problem in Importing CSV Data";
            }
        }
	header( "Refresh:5; url=locations.php", true, 303);  
			} else {
				$resulttrunc = mysqli_query($conn, "DELETE FROM `locations`");
				$fileName = "import/locations.csv";          
				$file = fopen($fileName, "r");    
					fgets($file);
			while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
            $sqlInsert = "INSERT into locations (loc_id,loc_name)
                   values ('" . $column[0] . "','" . $column[1] . "')";
            $result = mysqli_query($conn, $sqlInsert);     
            if (! empty($result)) {
                $type = "success";
                $message = "CSV Data Imported into the Database";
                //Cleanup
                $pathtofile="import/locations.csv";  
                if(unlink($pathtofile));
            } else {
                $type = "error";
                $message = "Problem in Importing CSV Data";
            }
  		}
  	header( "Refresh:5; url=locations.php", true, 303);
		}   
    		} else {
				echo "";
    	}
	}    
?>
 