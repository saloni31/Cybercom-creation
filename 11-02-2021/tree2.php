<?php
require "array2.php";

$data = [];
echo "<pre>";

function reverse($final)
{
	$temp=[];
	global $data;
	foreach ($final as $key => $value) {
		if($key == 'category'){
			foreach ($value as $key1 => $value1) {
				$temp['category'] = $key1;
				$temp['categoryname']=$value1['name'];
				foreach ($value1['attribute'] as $key => $value) {
					$temp['attribute'] = $key;
					$temp['attributename'] = $value['name'];
					foreach ($value['option'] as $key => $value) {
						$temp['option'] = $key;
						$temp['optionname'] = $value['name'];
						$data[] = $temp;
					}
					
				}
				
			}
		}
		
	}

}

reverse($final);
print_r($data);