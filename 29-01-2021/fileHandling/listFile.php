<?php
$folder = "files";
if($handle = opendir($folder."/")){
	echo "Looking into $folder:<br>";
	while($file = readdir($handle)){
		if($file !== '.' && $file !== '..'){
			echo "<a href='".$folder."/".$file."'>".$file."</a><br>";
		}
	}
}