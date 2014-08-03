<?php

// open the file and append 'a'
$f = fopen('data.txt', 'a');

// write contents of 'content' to the file
fwrite($f, $_POST['content']."\n");

// close the file
fclose($f); 

// return the sucess comment
echo 'comment has been saved';


