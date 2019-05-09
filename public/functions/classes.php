<?php

require 'db.php';
require '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Csv;

$spreadsheet = new Spreadsheet();


	$classesclassid=$_POST['classes_class_id'];
	$classesclassnumber=$_POST['classes_class_number'];
	$classescourseid=$_POST['classes_course_id'];
	$classesinstructorid=$_POST['classes_instructor_id'];
	$classesinstructorid2=$_POST['classes_instructor_id_2'];
	$classesinstructorid3=$_POST['classes_instructor_id_3'];
	$classeslocid=$_POST['location_id'];
	

// FETCH AND OUTPUT
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="classes.csv"');
$stmt = $pdo->prepare("SELECT * FROM `classes`");
$stmt->execute();
echo '"class_id"' , "," , '"class_number"' , "," , '"course_id"' , "," , '"instructor_id"' , "," , '"instructor_id_2"' , "," , '"instructor_id_3"' , "," , '"location_id"' . PHP_EOL;
while ($row = $stmt->fetch(PDO::FETCH_NAMED)) {
    echo '"' . $row['classes_class_id'] . '"' . "," . '"' . $row['classes_class_number'] . '"' . "," . '"' . $row['classes_course_id'] . '"' . "," . '"' . $row['classes_instructor_id'] . '"' . "," . '"' . $row['classes_instructor_id_2'] . '"' . "," . '"' . $row['classes_instructor_id_3'] . '"' . "," . '"' . $row['location_id'] . '"' . PHP_EOL;
}
?>