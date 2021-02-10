<?php
namespace contactApp;
class Connection{
	const mysql_host = "localhost";
	const mysql_user = "root";
	const mysql_pass = "";
	private $con;

	public function __construct($database)
	{
		if($this->connect(self::mysql_host,self::mysql_user,
			self::mysql_pass)){
			mysqli_select_db($this->con,$database);
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
		while($row = mysqli_fetch_assoc($res)){
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

	// function that escape real quotes
	public function escapeQuotes($value)
	{
		return mysqli_real_escape_string($this->con,$value);
	}

	// function that combines key and value pain with equals sign
	public function combineData($keys,$values){
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
		echo $sql;
		$res=mysqli_query($this->con,$sql);
	    $id=mysqli_insert_id($this->con);
	    return $id;
	}

	// function that update data from the database
	public function update($table,$keys,$values,$conditionKey,$conditionValue){
		$data = $this->combineData($keys,$values);
		$sql = "Update ".$table." set ".implode(", ", $data)
				." Where ".$conditionKey ." = ".$conditionValue;
		echo $sql;
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

	// Select all the data with Limit
	public function selectWithLimit($table,$page_first_result,$result_per_page){
		$sql = "select * from ".$table." Limit ".$page_first_result.",".$result_per_page;
		if($res = @mysqli_query($this->con,$sql)){
			$data = $this->arrayConverter($res);
			return $data;
		}else{
			echo "Problem.";
		}
	}
}
