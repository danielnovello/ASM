<?php

require 'db.php';
require '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Csv;

$spreadsheet = new Spreadsheet();

// FETCH AND OUTPUT
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="locations.csv"');
$stmt = $pdo->prepare("SELECT * FROM `locations`");
$stmt->execute();
echo '"location_id"' , "," , '"location_name"' . PHP_EOL;
while ($row = $stmt->fetch(PDO::FETCH_NAMED)) {
    echo '"' . $row['loc_id'] . '"' . "," . '"' . $row['loc_name'] . '"' . PHP_EOL;
}
?>