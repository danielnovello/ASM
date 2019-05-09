<?php

require 'db.php';
require '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Csv;

$spreadsheet = new Spreadsheet();

// FETCH AND OUTPUT
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="staff.csv"');
$stmt = $pdo->prepare("SELECT * FROM `staff`");
$stmt->execute();
echo '"person_id"' , "," , '"person_number"' , "," , '"first_name"' , "," , '"middle_name"' , "," , '"last_name"' , "," , '"email_address"' , "," , '"sis_username"' , "," , '"location_id"' . PHP_EOL;
while ($row = $stmt->fetch(PDO::FETCH_NAMED)) {
    echo '"' . $row['staff_person_id'] . '"' . "," . '"' . $row['staff_person_number'] . '"' . "," . '"' . $row['staff_first_name'] . '"' . "," . '"' . $row['staff_middle_name'] . '"' . "," . '"' . $row['staff_last_name'] . '"' . "," . '"' . $row['staff_email_address'] . '"' . "," . '"' . $row['staff_sis_username'] . '"' . "," . '"' . $row['location_id'] . '"' . PHP_EOL;
}
?>