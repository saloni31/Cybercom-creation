<?php
$data = [

	['category'=>1,'attribute'=>1,'option'=>1],
	['category'=>1,'attribute'=>1,'option'=>2],
	['category'=>1,'attribute'=>2,'option'=>3],
	['category'=>1,'attribute'=>2,'option'=>4],
	['category'=>2,'attribute'=>3,'option'=>5],
	['category'=>2,'attribute'=>3,'option'=>6],
	['category'=>2,'attribute'=>4,'option'=>7],
	['category'=>2,'attribute'=>4,'option'=>8]
];

// $data[1][2][3];
$final=[];
foreach ($data as $key => $value) {
	if(!array_key_exists($value["category"], $final) || !array_key_exists($value["attribute"], $final[$value['category']]) || !array_key_exists($value["option"], $final[$value['category']][$value['attribute']])){
		
		$final[$value['category']][$value['attribute']][$value['option']] = $value['option'];
	}
	
}

echo "<pre>";
print_r($final);