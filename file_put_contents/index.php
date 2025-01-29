<?php
//this is simple writing json file in php


$data = [
    'name' => 'John Doe',
    'email' => 'johndoe@example.com',
    'age' => 30
];

// Convert array to JSON
$jsonData = json_encode($data, JSON_PRETTY_PRINT);

// Define the file path
$file = 'data.json';

// Write JSON data to the file
if (file_put_contents($file, $jsonData)) {
    echo "JSON file created successfully!";
} else {
    echo "Error creating JSON file.";
}






?>