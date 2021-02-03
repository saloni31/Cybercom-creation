<?php 
$server = "localhost";
$user = "root";
$password = "";
$database = "practice";

// create connection with database
$con = @mysqli_connect($server,$user,$password,$database) or die("Could not connect");

// function that converts the resultset into an array for select query
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

// function that adds an quotations in the values for any query
function addQuotesToElement($array){
	$value = [];
	for($i=0; $i<count($array); $i++){
			$value[$i] = "'$array[$i]'";
	}
	return $value;
}

// function that combines key and value pain with equals sign
function combineData($keys,$values){
	$data = [];
	for($i=0; $i<count($keys); $i++){
		$data[$i] = $keys[$i]." = '".$values[$i]."'";
	}
	return $data;
}

// function that insert data into database
function insert($table, $keys, $values)
{
	$key = implode(",", $keys);
	$value = addQuotesToElement($values);
	$sql = "insert into ".$table ."(".$key.") values (". implode(",", $value).")";
	$res=mysqli_query($GLOBALS['con'],$sql);
    $id=mysqli_insert_id($GLOBALS['con']);
    return $id;
}

// function that returns data of any particular key based on the condition
function selectByValue($table,$key,$value){
	$sql = "select * from ".$table." where ".$key."='".$value."'";
	$res = mysqli_query($GLOBALS['con'],$sql);
	$data = arrayConverter($res);
	return $data;
}

// function that returns all the data of a table
function selectAllData($table)
{
	$sql = "select * from ".$table;
	$res = mysqli_query($GLOBALS['con'],$sql);
	$data = arrayConverter($res);
	return $data;
}

// function that returns only specific data from table
function selectDataByKey($table,$selectKey,$key,$value)
{
	$selectKey = implode(", ", $selectKey);
	$sql = "Select ".$selectKey." from ".$table." where ".$key."= '".$value."'";
	$res = mysqli_query($GLOBALS['con'],$sql);
	$data = arrayConverter($res);
	return $data;
}

// function that returns all data from tha table based on multiple and conditions
function selectByMultipleAndValues($table,$keys,$values){
	$data = combineData($keys,$values);
	$sql = "select * from ".$table." where ".implode(' and ', $data);
	$res = mysqli_query($GLOBALS['con'],$sql);
	$data = arrayConverter($res);
	return $data;
}

// function that returns all data from the table based on multiple or conditions
function selectByMultipleOrValues($table,$keys,$values){
	$data = combineData($keys,$values);
	$sql = "select * from ".$table." where ".implode(' or ', $data);
	$res = mysqli_query($GLOBALS['con'],$sql);
	$data = arrayConverter($res);
	return $data;
}

// function that returns specific data from tha table based on multiple and conditions
function selectByMultipleKeyAndValue($table,$selectKey,$keys,$values){
	$data = combineData($keys,$values);
	$selectKey = implode(", ", $selectKey);
	$sql = "Select ".$selectKey." from ".$table." where ".implode(' and ', $data);
	$res = mysqli_query($GLOBALS['con'],$sql);
	$data = arrayConverter($res);
	return $data;
}

// function that delete data from the table
function delete($table,$key,$value){
	$sql = "delete from ".$table." where ".$key." = '".$value."'";
	$res = mysqli_query($GLOBALS['con'],$sql);
	return $res;
}

// function that update data from the database
function update($table,$keys,$values,$conditionKey,$conditionValue){
	$data = combineData($keys,$values);
	$sql = "Update ".$table." set ".implode(", ", $data)
			." Where ".$conditionKey ." = ".$conditionValue;
	$res = mysqli_query($GLOBALS['con'],$sql);
	return $res;
}

?>