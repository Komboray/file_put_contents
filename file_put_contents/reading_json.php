<?php
$jsonData = file_get_contents('users.json');
$data = json_decode($jsonData, true);

print_r($data);
?>
