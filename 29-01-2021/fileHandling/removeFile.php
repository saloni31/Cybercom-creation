<?php
$file = "removeFile.txt";
if(@unlink($file)){
	echo "File ".$file." removed successfully";
}else{
	echo "Cannot remove file";
}

$array = array('red','green','blue');
echo current($array);
echo next($array);