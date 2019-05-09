<?php

require 'db.php';
require '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Csv;

$spreadsheet = new Spreadsheet();


	$rosterid=$_POST['roster_id'];
	$classesclassid=$_POST['classes_class_id'];
	$studentid=$_POST['student_id'];

// FETCH AND OUTPUT
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="rosters.csv"');
$stmt = $pdo->prepare("SELECT * FROM `rosters`");
$stmt->execute();
echo '"roster_id"' , "," , '"class_id"' , "," , '"student_id"' . PHP_EOL;
while ($row = $stmt->fetch(PDO::FETCH_NAMED)) {
    echo '"' . $row['roster_id'] . '"' . "," . '"' . $row['classes_class_id'] . '"' . "," . '"' . $row['student_id'] . '"' . PHP_EOL;
}
?>