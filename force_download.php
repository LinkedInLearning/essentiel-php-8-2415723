<?php

$file = './files/data.csv';
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary"); 
header("Content-disposition: attachment; filename=\"" . basename($file) . "\""); 
readfile($file); 

?>