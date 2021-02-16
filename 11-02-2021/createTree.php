<?php
require "treeToArray.php";
require "connection.php";

function getElement($array){
	echo " <br>In function.";
	echo "<pre>";
	// print_r($array);
	foreach ($array as $key => $value) {
	// 	// print_r($key);
	// 	if(array_key_exists("child",$value)) {
	// 		echo "<pre>";
	// 		print_r($value['child']);
	// 		// print_r($value);
	// 		echo is_array($value['child']);
	// 		getElement($value['child']);
	// 	}else  {
	// 		// echo "different <pre>";
	// 		// print_r($value);
	// 	}

		if(is_array($value)){
			echo "<br>".$key."<pre>";
			if($key == "lawyer" || $key == "doctor" || $key == "politician" || $key == 'farmer'){
				
				echo "Id =>".$value['id'];
				echo ", PId =>".$value['parent_id'];
				echo ", name =>".$value['name'];
				echo ", age => ".$value['age'];
			}
			
			// if(array_key_exists("child", $value)){
				getElement($value);
				print_r($value);
				// foreach ($value as $key1 => $value1) {
				// 	print_r($key1);
					
				// }
			// }
			
		}

	}

	
}

getElement($family);