<?php
class Adapter{
	private $config = [
						'host' => 'localhost',
						'user' => 'root',
						'password' => '',
						'database' => 'questecom'];
	private $connect = null;
	public function connection()
	{
		$connect = new mysqli($this->config['host'],$this->config['user'],$this->config['password'],$this->config['database']);
		$this -> setConnection($connect);
	}

	public function isConnected()
	{
		if(!$this -> getConnection()){
			return false;
		}
		return true;
	}

	public function setConnection(mysqli $connect)
	{
		$this -> connect = $connect;
		return $this;
	}

	public function getConnection()
	{
		return $this -> connect;
	}

	public function insert($query)		
	{
		if(!$this -> isConnected()){
			$this -> connection();
		}
		echo $query;
		$res = $this -> getConnection() -> query ($query);
		return $this -> getConnection() -> insert_id;
	}

	public function update($query)
	{
		echo $query;
		if(!$this->isConnected()){
			$this->connection();
		}

		$res = $this -> getConnection() -> query ($query);
		return $res;
	}

	public function delete($query)
	{
		if(!$this -> isConnected()){
			$this -> connection();
		}
		$res = $this -> getConnection() ->query ($query);
		return $res;
	}

	public function fetchRow($query)
	{
		if(!$this -> isConnected()){
			$this -> connection();
		}
		$res = $this -> getConnection() -> query ($query);
		return $res -> fetch_assoc();
	}

	public function fetchAll($query)
	{
		if(!$this -> isConnected()){
			$this -> connection();
		}
		$res = $this -> getConnection() -> query ($query);
		// print_r(get_class_methods($res));
		return $res -> fetch_all(MYSQLI_ASSOC);
	}
}

// echo "<pre>";
// $db = new Adapter();
// $query = "insert into user(name, email, password, phone) values 
// 		('saloni sindhi', 'saloni@gmail.com','Saloni@31',0123456789)";
// $res = $db->insert($query);
// echo $res;

// $query = "update user set email = 'sindhisaloni@gmail.com' where userId=1";
// echo $db->update($query);

// $query = "delete from user where userId = 2";
// echo $db -> delete ($query);

// $query = "select * from user where userId = 1";
// print_r($db -> fetchRow($query));

// $query = "select * from user";
// print_r($db -> fetchAll($query));