<?php
header('Content-Type: application/json');
//Open our CSV file using the fopen function.
$fh = fopen("locations.csv", "r");
 
if ($fh) {
  while (($row = fgets($fh)) !== FALSE) {
    $csvData[] = trim($row);
  }
}
 

//Finally, encode our array into a JSON string format so that we can print it out.
//echo json_encode($csvData);
$myObj->status = "OK";
$myObj->language = "en";
$myObj->now = 1513482969783;
$myObj->timeoffset = 120000;
$myObj->refresh = 55256;
$myObj->switchOff = false;
$myObj->location = "13.026819,-85.178374";
$myObj->upgradeToVersion = "v201712070030";

$r =  rand(0, 10);
$myObj->location = $csvData[$r];

$myJSON = json_encode($myObj, JSON_PRETTY_PRINT);

echo $myJSON;
?>

