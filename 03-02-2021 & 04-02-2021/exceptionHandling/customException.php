<?php
$mysql_server = "localhost";
$mysql_user = "root";
$mysql_pass = "123";
$db = "practice";

class ServerException extends Exception {
	public function displayError(){
		return "<b>Error thrown on line ".$this->getLine().
		" in file ".$this->getFile()."</b><br>".$this->getMessage();
	}
}
class DatabaseException extends Exception {
	public function displayError(){
		return "<b>Error thrown on line ".$this->getLine().
		" in file ".$this->getFile()."</b><br>".$this->getMessage();
	}
}

try{
	$con = mysqli_connect($mysql_server,$mysql_user,$mysql_pass);
	if(!@$con){
		throw new ServerException("Could not connect to the server");
	}else if(!@mysqli_select_db($con,$db)){
		throw new DatabaseException("Could not select database");
	}
}catch(ServerException $ex){
	echo $ex->displayError();
}catch(DatabaseException $ex){
	echo $ex->displayError();
}