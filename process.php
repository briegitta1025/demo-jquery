<?php
// Retrieve data from POST request
$numericData = $_POST['numericData'];
$textData = $_POST['textData'];

// Create an array with the specified number of elements
$dataArray = array();
for ($i = 0; $i < $numericData; $i++) {
  $dataArray[] = $textData . ' ' . $i;
}

// Return the array as a JSON response
header('Content-Type: application/json');
echo json_encode($dataArray);
?>