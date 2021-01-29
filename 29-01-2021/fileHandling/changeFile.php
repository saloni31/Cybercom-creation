<?php
$file_or = "image.jpg";

$filename = rand(1000,9999).md5($file_or).rand(1000,9999);
echo $filename;