<?php
require '../configuration/core.inc.php';
if(isset($_POST['update'])){
	$keys = ['name','email','phone','title'];
	$data = getPostData(['id','name','email','phone','title']);
	$id = $data[0];
	array_shift($data);
	if($con->update("contact_details",$keys,$data,"id",$id)){
		$_SESSION['message'] = "Contact Updated successfully.";
		header("Location: ../contacts.php");
	}
}
