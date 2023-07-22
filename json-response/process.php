<?php
// Get the JSON data from the request
$jsonData = file_get_contents('php://input');

// Decode the JSON data into a PHP associative array
$data = json_decode($jsonData, true);

// Now you can work with the data as needed
// For example, you can access individual values like $data['key1'], $data['key2'], etc.

// Do your PHP processing here

// Return a response (optional)
// For example, if you want to send back a JSON response:
$response = [
    "message" => "Data received successfully",
    "data" => $data
];
echo json_encode($response);
?>
