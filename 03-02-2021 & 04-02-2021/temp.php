<!-- select pet_name, name from people left join pet on people.people_id = pet.people_id -->

<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "practice";

// create connection with database
$con = @mysqli_connect($server,$user,$password,$database) or die("Could not connect");

function leftJoin($table1,$table2,$resultkeys,$key){
	$sql = "select ".implode(", ", $resultkeys)." from ".$table1." left join ".
			$table2." on ".$table1.".".$key." = ".$table2.".".$key;
	echo $sql."<br>";
	if(@$res = mysqli_query($GLOBALS['con'],$sql)){
		$data = [];
		$i = 0;
		while($row = mysqli_fetch_array($res)){
			$data[$i] = $row;
			$i++;
		}
		return $data;
	}else{
		echo "Problem.";
	}
}

print_r(leftJoin("people","pet",['pet_name','name'],'people_id'));

?>
