<?php

header('content-type: application/json');

include 'ChromePhp.php';

$data = explode("\n", file_get_contents('data.txt'));


echo json_encode($data);
ChromePhp::log($data[0]);




 
 