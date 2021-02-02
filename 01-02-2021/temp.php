<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "practice";

$con = @mysqli_connect($server,$user,$password,$database) or die("Could not connect");
$table = "contact_us";
$keys = array("name","email","subject","message");
$values = array("saloni sindhi","saloni@gmail.com","sbdkesjuvk","ajvjsevjhwe");

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
	// $row = mysqli_fetch_assoc($res);
	$data = [];
	$i = 0;
	while($row = mysqli_fetch_assoc($res)){
		$data[$i] = $row;
		$i++;
	}
	return $data;
}

print_r(selectByValue("contact_us","id",1));
