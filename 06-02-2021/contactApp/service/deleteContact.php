<?php
require '../configuration/core.inc.php';

if(isset($_POST['id'])){
	$id = $_POST['id'];
	if($con->delete("contact_details","id",$id)){
		echo "Contact deleted successfully";
	}else{
		echo "Problem";
	}
}