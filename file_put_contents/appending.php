<?php
//this is appending to an existing file
$file = 'users.json';

// Read existing JSON file
$existingData = file_exists($file) ? json_decode(file_get_contents($file), true) : [];

// Add new entry
$existingData[] = ['id' => 3, 'name' => 'Charlie', 'email' => 'charlie@example.com'];

// Save back to the file
file_put_contents($file, json_encode($existingData, JSON_PRETTY_PRINT));

echo "Data appended successfully!";
?>
