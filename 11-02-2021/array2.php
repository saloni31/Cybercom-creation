<?php
$data = [

	['category'=>1,'categoryname'=>'c1','attribute'=>1,'attributename'=>'a1','option'=>1,'optionname'=>'o1'],
	['category'=>1,'categoryname'=>'c1','attribute'=>1,'attributename'=>'a1','option'=>2,'optionname'=>'o2'],
	['category'=>1,'categoryname'=>'c1','attribute'=>2,'attributename'=>'a2','option'=>3,'optionname'=>'o3'],
	['category'=>1,'categoryname'=>'c1','attribute'=>2,'attributename'=>'a2','option'=>4,'optionname'=>'o4'],
	['category'=>2,'categoryname'=>'c2','attribute'=>3,'attributename'=>'a3','option'=>5,'optionname'=>'o5'],
	['category'=>2,'categoryname'=>'c2','attribute'=>3,'attributename'=>'a3','option'=>6,'optionname'=>'o6'],
	['category'=>2,'categoryname'=>'c2','attribute'=>4,'attributename'=>'a4','option'=>7,'optionname'=>'o7'],
	['category'=>2,'categoryname'=>'c2','attribute'=>4,'attributename'=>'a4','option'=>8,'optionname'=>'o8']

];

$final = [];
foreach ($data as $key => $value) {
	$final['category'][$value['category']]['name']=$value['categoryname'];
	$final['category'][$value['category']]['attribute'][$value['attribute']]['name']=$value['attributename'];
	$final['category'][$value['category']]['attribute'][$value['attribute']]
	['option'][$value['option']]=[];
	$final['category'][$value['category']]['attribute'][$value['attribute']]
	['option'][$value['option']]['name']=$value['optionname'];
}

echo "<pre>";
print_r($final);