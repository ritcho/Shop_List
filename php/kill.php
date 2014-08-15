<?php

include 'ChromePhp.php';
//ChromePhp::log('killphp loading');

$lines = file('data.txt', FILE_IGNORE_NEW_LINES);
$remove = $_POST['ff'];

//ChromePhp::log($remove);
ChromePhp::log($lines);	

foreach($lines as $key => $line){
  if(stristr($line, $remove)){ unset($lines[$key]);
  ChromePhp::log($lines);
}
}

$data = implode(array_values($lines), "\n");

//ChromePhp::log($data);
ChromePhp::log("you deleted it");

$file = fopen('data.txt', 'w');
fwrite($file, $data);
fclose($file);

echo 'yah deleted yo'; 




