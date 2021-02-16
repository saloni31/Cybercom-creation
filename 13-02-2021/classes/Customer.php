<?php
require 'Adapter.php';
class Customer{
	private $con = null;
	public function __construct()
	{
		$this->con = new Adapter();
	}

	public function addCustomer($array)
	{
		$values = '"'.$array['firstName'].'","'.$array['lastName'].'","'.$array['email'].'","'.$array['password'].'","'.$array['status'].'","'.$array['mobile'].'"';

		$query = "insert into customer (firstName,lastName,email,password,status,mobile) values (".$values.")";
		return $this->con->insert($query);
	}

	public function showCustomer()
	{
		$query = "select * from customer";
		return $this->con->fetchAll($query);
	}

	public function fetchCustomer($id)
	{
		$query = "select * from customer where customerId =".$id;
		return $this->con->fetchRow($query);
	}

	public function updateCustomer($array, $id)
	{
		$values = "firstName = '".$array['firstName']."', lastName = '".$array['lastName']."', email = '". $array['email']."', status = '".$array['status']."',mobile = '".$array['mobile']."'";

		$query = "Update customer set ".$values." where customerId = ".$id;
		return $this->con->update($query);
	}

}