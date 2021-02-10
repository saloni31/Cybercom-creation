<?php
require "../configuration/core.inc.php";
require "errors.php";

if(isset($_POST['submit'])){
	if(validateData()){
		$keys = ['name','password','address','gender','age'];
		$file = $_FILES['file']['name'];
		$game = implode(",",$_POST['game']);
		$data = getPostData($keys);
		$data[count($data)] = $file;
		$data[count($data)] = $game;
		array_push($keys, 'file','game');
		if($con->insert("user_form1",$keys,$data)){
	 		$_SESSION['success'] = "You are registered successfully.";
	 	}
	}	
	header('Location: ../index.php');
}	