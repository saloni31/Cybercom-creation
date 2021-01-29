<?php
$filename = "names.txt";

if(file_exists($filename)){
	echo "File already exists";
}else{
	$handle=fopen($filename, 'w');
	echo "New file created";
}