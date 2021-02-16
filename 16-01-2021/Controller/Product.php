<?php
require_once './Controller/Core/Admin.php';
require_once './Model/Core/Adapter.php';

class Product extends Admin
{
	protected $products = [];

	public function setProducts($products)
	{
		$this -> products = $products;
		return $this;
	}

	public function getProducts()
	{
		return $this -> products;
	}

	public function gridAction()
	{
		$query = "select * from product";
		$adapter = new Adapter();
		$products = $adapter -> fetchAll($query);
		$this -> setProducts($products);
		require_once './View/product/grid.php';
	}

	public function addAction()
	{
		require_once './View/product/add.php';
	}

	public function saveAction()
	{
		$sku = $_POST['productSku'];
		$productName = $_POST['productName'];
		$price = $_POST['price'];
		$discount = $_POST['discount'];
		$quantity = $_POST['quantity'];
		$description = $_POST['description'];
		$status = $_POST['profile'];

		$adapter = new Adapter();
		$query = "insert into product (sku,name,price,discount,quantity,description,status) values ('{$sku}','{$productName}','{$price}','{$discount}',{$quantity},'{$description}','{$status}')";
		if($adapter -> insert($query)){
			$this -> redirect ('grid');
		}
	}

	public function editAction()
	{
		$productId = $_GET['productId'];
		$query = "select * from product where productId = {$productId}";
		$adapter = new Adapter();
		$product = $adapter -> fetchRow($query);
		$this -> setProducts($product);
		require_once './View/product/edit.php';
	}

	public function updateAction()
	{
		$sku = $_POST['productSku'];
		$productName = $_POST['productName'];
		$price = $_POST['price'];
		$discount = $_POST['discount'];
		$quantity = $_POST['quantity'];
		$description = $_POST['description'];
		$status = $_POST['profile'];
		$productId = $_POST['productId'];

		$query = "update product set sku = '{$sku}', name = '{$productName}', price = {$price}, discount = {$discount}, quantity = {$quantity}, description = '{$description}', status = {$status} where productId = {$productId}";

		$adapter = new Adapter();
		if($adapter -> update($query)){
			$this -> redirect ('customer','grid');
		}
	}

	public function deleteAction()
	{
		$productId = $_GET['productId'];
		$adapter = new Adapter();
		$query = "delete from product where productId = {$productId}";
		if($adapter -> delete($query)){
			$this -> redirect ('grid');
		}
	}
}
?>