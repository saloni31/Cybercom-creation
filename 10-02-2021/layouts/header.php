<?php
include_once "configuration/core.inc.php";
if(empty($_SESSION['userId'])){
	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blogs</title>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="js/validation.js"></script>
</head>
<body>
	<div class="mt-2">
		<div class="row">
			<div class="col-sm-8"></div>
			<div class="col-sm-4 ">
				<a class="btn btn-primary font-weight-bold" href="home.php"> 
					Home 
				</a>
				<a class="btn btn-primary font-weight-bold" href="categories.php">
				 	Manage Category 
				</a>
				<a class="btn btn-primary font-weight-bold" href="profile.php"> 
					My Profile 
				</a>
				<a class="btn btn-primary font-weight-bold text-white" href="server/logout.php">
					 Logout 
				</a>
			</div>
		</div>
	</div>