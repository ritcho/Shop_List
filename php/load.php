<?php

header('content-type: application/json');

include 'php/ChromePhp.php';

// get all data on new lines
$data = explode("\n", file_get_contents('data.txt'));

//sending back json
echo json_encode($data);
ChromePhp::log($data[0]);




 
 