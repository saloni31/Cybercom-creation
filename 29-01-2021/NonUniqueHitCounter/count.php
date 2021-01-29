<?php

function counter()
{
	$filename = "counter.txt";
	$handle = fopen($filename, "r");
	$current = fread($handle, filesize($filename));
	$current++;
	fclose($handle);

	$handle = fopen($filename, "w");
	fwrite($handle,$current);
	fclose($handle);
	
}