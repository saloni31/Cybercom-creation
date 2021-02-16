<?php
require_once './Controller/Core/Admin.php';
require_once './Model/Core/Adapter.php';

class Category extends Admin
{
	protected $categories = [];

	public function setCategories($categories)
	{
		$this -> categories = $categories;
		return $this;
	}

	public function getCategories()
	{
		return $this -> categories;
	}

	public function gridAction()
	{
		$query = "select * from category";
		$adapter = new Adapter();
		$categories = $adapter -> fetchAll($query);
		$this -> setCategories($categories);
		require_once './View/category/grid.php';
	}

	public function addAction()
	{
		require_once './View/category/add.php';
	}

	public function saveAction()
	{
		$categoryName = $_POST['categoryName'];
		$description = $_POST['description'];
		$status = $_POST['profile'];

		$adapter = new Adapter();
		$query = "insert into category (categoryName,description,status) values ('{$categoryName}','{$description}','{$status}')";
		if($adapter -> insert($query)){
			$this -> redirect ('grid');
		}
	}

	public function editAction()
	{
		$categoryId = $_GET['categoryId'];
		$query = "select * from category where categoryId = {$categoryId}";
		$adapter = new Adapter();
		$categories = $adapter -> fetchRow($query);
		$this -> setCategories($categories);
		require_once './View/category/edit.php';
	}

	public function updateAction()
	{
		$categoryName = $_POST['categoryName'];
		$description = $_POST['description'];
		$status = $_POST['profile'];
		$categoryId = $_POST['categoryId'];

		$query = "update category set categoryName = '{$categoryName}', description = '{$description}', status = {$status} where categoryId = {$categoryId}";
		echo $query;
		$adapter = new Adapter();
		if($adapter -> update($query)){
			$this -> redirect ('grid',null,null,true);
		}
	}

	public function deleteAction()
	{
		$categoryId = $_GET['categoryId'];
		$adapter = new Adapter();
		$query = "delete from category where categoryId = {$categoryId}";
		if($adapter -> delete($query)){
			$this -> redirect ('grid',null,null,true);
		}
	}
}