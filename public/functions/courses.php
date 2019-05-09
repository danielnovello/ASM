<?php

require 'db.php';
require '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Csv;

$spreadsheet = new Spreadsheet();


	$courseid=$_POST['course_id'];
	$coursenumber=$_POST['course_number'];
	$coursename=$_POST['course_name'];
	$courselocid=$_POST['location_id'];
	
// FETCH AND OUTPUT
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="courses.csv"');
$stmt = $pdo->prepare("SELECT * FROM `courses`");
$stmt->execute();
echo '"course_id"' , "," , '"course_number"' , "," , '"course_name"' , "," , '"location_id"' . PHP_EOL;
while ($row = $stmt->fetch(PDO::FETCH_NAMED)) {
    echo '"' . $row['course_id'] . '"' . "," . '"' . $row['course_number'] . '"' . "," . '"' . $row['course_name'] . '"' . "," . '"' . $row['location_id'] . '"' . PHP_EOL;
}
?>