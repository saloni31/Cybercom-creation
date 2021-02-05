<?php 
$server = "localhost";
$user = "root";
$password = "";
$database = "practice";

$con = @mysqli_connect($server,$user,$password,$database) or die("Could not connect");

function arrayConverter($res)
{
	$data = [];
	$i = 0;
	while($row = mysqli_fetch_array($res)){
		$data[$i] = $row;
		$i++;
	}
	return $data;
}

// function that combines key and value pain with equals sign
function combineData($keys,$values){
	$data = [];
	for($i=0; $i<count($keys); $i++){
		$data[$i] = $keys[$i]." = '".$values[$i]."'";
	}
	return $data;
}

function insert($table, $keys, $values)
{
	$key = implode(",", $keys);
	$value = [];
	for($i=0; $i<count($values); $i++){
		if(gettype($values[$i]) == 'string'){
			$value[$i] = "'$values[$i]'";
		}
		$value[$i] = "'$values[$i]'";
	}
	$sql = "insert into ".$table ."(".$key.") values (". implode(",", $value).")";
	$res=mysqli_query($GLOBALS['con'],$sql);
    $id=mysqli_insert_id($GLOBALS['con']);
    return $id;
}

function selectByValue($table,$key,$value){
	$sql = "select * from ".$table." where ".$key."='".$value."'";
	echo $sql;
	$res = mysqli_query($GLOBALS['con'],$sql);
	$data = arrayConverter($res);
	return $data;
}

function selectAllData($table)
{
	$sql = "select * from ".$table;
	$res = mysqli_query($GLOBALS['con'],$sql);
	$data = arrayConverter($res);
	return $data;
}

// function that returns all data from tha table based on multiple and conditions
function selectByMultipleAndValues($table,$keys,$values){
	$data = combineData($keys,$values);
	$sql = "select * from ".$table." where ".implode(' and ', $data);
	if(@$res = mysqli_query($GLOBALS['con'],$sql)){
		$data = arrayConverter($res);
		return $data;
	}else{
		echo "Problem.";
	}
}
?>