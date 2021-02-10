<?php
include_once "configuration/core.inc.php";
if(empty($_SESSION['name'])){
	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Home </title>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="top-bar fixed-top">
		<div class="row">
			<div class="col-sm-8 pl-5 pt-2">
				<h5 class="text-white font-weight-bold">
					Website Title 
				</h5>
			</div>
			<div class="col-sm-4 pt-2 pl-5">
				<a class="text-white" href="index.php">
					<i class="fa fa-home mr-1"></i>Home
				</a>

				<a class="text-white ml-5" href="contacts.php">
					<i class="fa fa-address-book mr-1"></i>Contacts
				</a>

				<a class="text-white ml-5" href="service/logout.php">
					<i class="fa fa-sign-out mr-1"></i>Logout
				</a>
			</div>
		</div>
	</div>

	