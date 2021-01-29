<?php
$file = "renameFile.txt";
$rand = rand(1000,9999);

if(@rename($file, $rand.".txt")){
	echo "File ".$file." renamed to ".$rand.".txt.";
}else{
	echo "File not found";
}