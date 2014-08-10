<?php

include 'ChromePhp.php';
// open the file and append 'a'
$f = fopen('data.txt', 'a');

// Lookin for new lines
fwrite($f, "\n");

// write contents of 'content' to the file
fwrite($f, $_POST['content']);

// close the file
fclose($f); 

// return the sucess comment
echo 'comment has been saved';


