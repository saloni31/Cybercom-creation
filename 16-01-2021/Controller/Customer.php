<?php
require './Model/Core/Adapter.php';
require	'./Controller/Core/Admin.php';
class Customer extends Admin
{
	protected $customers = [];

	public function setCustomers($customers)
	{
		$this -> customers = $customers;
		return $this;
	}

	public function getCustomers()
	{
		return $this -> customers;
	}

	public function gridAction()
	{
		$query = "select * from customer";
		$adapter = new Adapter();
		$customers = $adapter -> fetchAll($query);

		$this->setCustomers($customers);
		require_once "./View/customer/grid.php";
	}

	public function addAction()
	{
		require_once "./View/customer/add.php";
	}

	public function saveAction()
	{
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$mobile = $_POST['mobile'];
		$status = $_POST['profile'];
		$adapter = new Adapter();
		$query = "insert into customer (firstName,lastName,email,password,mobile,status) values ('{$firstName}','{$lastName}','{$email}','{$password}',{$mobile},'{$status}')";
		if($adapter -> insert($query)){
			$this -> redirect ('customer','grid');
		}
	}	

	public function editAction()
	{
		$customerId = $_GET['customerId'];
		$query = "select * from customer where customerId = {$customerId}";
		$adapter = new Adapter();
		$customer = $adapter -> fetchRow($query);
		$this -> setCustomers($customer);
		require_once './View/customer/edit.php';
	}

	public function updateAction()
	{
		$customerId = $_POST['customerId'];
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$status = $_POST['profile'];
		$adapter = new Adapter();
		$query = "update customer set firstName = '{$firstName}', lastName = '{$lastName}', email = '{$email}', mobile = {$mobile}, status = '{$status}' where customerId = {$customerId}";
		if($adapter -> update($query)){
			$this -> redirect ('customer','grid');
		}	
	}

	public function deleteAction()
	{
		$customerId = $_GET['customerId'];
		$adapter = new Adapter();
		$query = "delete from customer where customerId = {$customerId}";
		if($adapter -> delete($query)){
			$this -> redirect ('customer','grid');
		}
	}

}