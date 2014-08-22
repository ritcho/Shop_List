<?php

include 'php/ChromePhp.php';

ChromePhp::log('save loading');

// open the file and append 'a'
$f = fopen('data.txt', 'a');

// Lookin for new lines
fwrite($f, "\n");

ChromePhp::log($_POST['ss']);

// write contents of 'content' to the file
fwrite($f, $_POST['ss']);

// close the file
fclose($f); 

// return the sucess comment
echo 'comment has been saved';
