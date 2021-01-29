<?php
$handle = fopen("names.txt","r");
$file = fread($handle,filesize("names.txt"));

$fileArray = explode("\n", $file);
print_r($fileArray);

foreach ($fileArray as $data) {
	echo "<br>".$data."<br>";
}