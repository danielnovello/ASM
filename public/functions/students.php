<?php

require 'db.php';
require '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Csv;

$spreadsheet = new Spreadsheet();

// FETCH AND OUTPUT
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="students.csv"');
$stmt = $pdo->prepare("SELECT * FROM `students`");
$stmt->execute();
echo '"person_id"' , "," , '"person_number"' , "," , '"first_name"' , "," , '"middle_name"' , "," , '"last_name"' , "," , '"grade_level"' , "," , '"email_address"' , "," , '"sis_username"' , "," , '"password_policy"', "," , '"location_id"' . PHP_EOL;
while ($row = $stmt->fetch(PDO::FETCH_NAMED)) {
    echo '"' . $row['students_person_id'] . '"' . "," . '"' . $row['students_person_number'] . '"' . "," . '"' . $row['students_first_name'] . '"' . "," . '"' . $row['students_middle_name'] . '"' . "," . '"' . $row['students_last_name'] . '"' . "," . '"' . $row['students_grade_level'] . '"' . "," . '"' . $row['students_email_address'] . '"' . "," . '"' . $row['students_sis_username'] . '"' . "," . '"' . $row['students_password_policy'] . '"' . "," . '"' . $row['location_id'] . '"' . PHP_EOL;
}
?>