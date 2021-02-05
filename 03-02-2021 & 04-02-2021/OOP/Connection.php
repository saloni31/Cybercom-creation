<?php

class Connection{
	private $mysql_host;
	private $mysql_user;
	private $mysql_pass;
	private $con;

	public function __construct($database)
	{
		$this->mysql_host = "localhost";
		$this->mysql_user = "root";
		$this->mysql_pass = "";

		if($this->connect($this->mysql_host,$this->mysql_user,
			$this->mysql_pass)){
			mysqli_select_db($this->con,$database);
			echo "Connected..";
		}
	}

	public function connect($host,$user,$pass)
	{
		if($this->con = @mysqli_connect($host,$user,$pass)){
			return true;
		}else{
			return false;
		}
	}

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
	public function insert($table,$keys,$values)
	{
		$key = implode(",", $keys);
		$value = $this->addQuotesToElement($values);
		$sql = "insert into ".$table ."(".$key.") values (". implode(",", $value).")";
		$res=mysqli_query($this->con,$sql);
	    $id=mysqli_insert_id($this->con);
	    return $id;
	}

	// function that update data from the database
	public function update($table,$keys,$values,$conditionKey,$conditionValue){
		$data = $this->combineData($keys,$values);
		$sql = "Update ".$table." set ".implode(", ", $data)
				." Where ".$conditionKey ." = ".$conditionValue;
		$res = mysqli_query($this->con,$sql);
		return $res;
	}

	// function that delete data from the table
	public function delete($table,$key,$value){
		$sql = "delete from ".$table." where ".$key." = '".$value."'";
		$res = mysqli_query($this->con,$sql);
		return $res;
	}

	// function that returns all the data of a table
	public function selectAllData($table)
	{
		$sql = "select * from ".$table;
		if($res = @mysqli_query($this->con,$sql)){
			$data = $this->arrayConverter($res);
			return $data;
		}else{
			echo "Problem.";
		}	
	}

	// function that returns data of any particular key based on the condition
	public function selectByValue($table,$key,$value){
		$sql = "select * from ".$table." where ".$key."='".$value."'";
		if($res = @mysqli_query($this->con,$sql)){
			$data = $this->arrayConverter($res);
			return $data;
		}else{
			echo "Problem.";
		}
	}

	// function that returns only specific data from table
	public function selectDataByKey($table,$selectKey,$key,$value)
	{
		$selectKey = implode(", ", $selectKey);
		$sql = "Select ".$selectKey." from ".$table." where ".$key."= '".$value."'";
		if($res = @mysqli_query($this->con,$sql)){
			$data = $this->arrayConverter($res);
			return $data;
		}else{
			echo "Problem.";
		}
	}

	// function that returns all data from tha table based on multiple and conditions
	public function selectByMultipleAndValues($table,$keys,$values){
		$data = $this->combineData($keys,$values);
		$sql = "select * from ".$table." where ".implode(' and ', $data);
		if(@$res = mysqli_query($this->con,$sql)){
			$data = $this->arrayConverter($res);
			return $data;
		}else{
			echo "Problem.";
		}
	}

	// function that returns all data from the table based on multiple or conditions
	public function selectByMultipleOrValues($table,$keys,$values){
		$data = $this->combineData($keys,$values);
		$sql = "select * from ".$table." where ".implode(' or ', $data);
		if(@$res = mysqli_query($this->con,$sql)){
			$data = $this->arrayConverter($res);
			return $data;
		}else{
			echo "Problem.";
		}
	}

	// function that returns specific data from tha table based on multiple and conditions
	public function selectByMultipleKeyAndValue($table,$selectKey,$keys,$values){
		$data = $this->combineData($keys,$values);
		$selectKey = implode(", ", $selectKey);
		$sql = "Select ".$selectKey." from ".$table." where ".implode(' and ', $data);
		if(@$res = mysqli_query($this->con,$sql)){
			$data = $this->arrayConverter($res);
			return $data;
		}else{
			echo "Problem.";
		}
	}

	// function that performs left join on the tables
	public function leftJoin($table1,$table2,$resultkeys,$key){
		$sql = "select ".implode(", ", $resultkeys).
				" from ".$table1." left join ".$table2." on "
				.$table1.".".$key." = ".$table2.".".$key;
		if(@$res = mysqli_query($this->con,$sql)){
			$data = $this->arrayConverter($res);
			return $data;
		}else{
			echo "Problem.";
		}
	}

	// function that performs left join on the tables
	public function rightJoin($table1,$table2,$resultkeys,$key){
		$sql = "select ".implode(", ", $resultkeys)." from "
				.$table1." right join ".$table2." on ".
				$table1.".".$key." = ".$table2.".".$key;

		if(@$res = mysqli_query($this->con,$sql)){
			$data = $this->arrayConverter($res);
			return $data;
		}else{
			echo "Problem.";
		}
	}

	// function that perform join operation which gives resultset where condition is satisfied
	public function joinData($table1,$table2,$resultkeys,$key){
		$sql = "select ".implode(", ", $resultkeys)." from "
				.$table1." join ".$table2." on ".
				$table1.".".$key." = ".$table2.".".$key;

		if(@$res = mysqli_query($this->con,$sql)){
			$data = $this->arrayConverter($res);
			return $data;
		}else{
			echo "Problem.";
		}
	}
}

$obj = new Connection("practice");
// echo $obj->delete("names",'id',22);
echo "<pre>";
$data = $obj->leftJoin("people","pet",['name','pet_name'],"people_id");
if(count($data) == 0 || $data == []){
	echo "No data available";
}else{
	print_r($data);
}