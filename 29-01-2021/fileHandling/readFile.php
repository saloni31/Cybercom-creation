<?php
// it is one way to read file
$handle = fopen("names.txt", "r");
$fin = fread($handle,filesize("names.txt"));
echo $fin;

// another way to read file
echo "<br><br>";
$file = file("names.txt");
$f_count = count($file);
$count = 1;
foreach ($file as $name) {
	echo $name;
	if($count < $f_count){
		echo ", ";
	}
	$count++;
}
