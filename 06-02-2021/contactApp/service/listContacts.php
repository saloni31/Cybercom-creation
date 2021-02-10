<?php
include_once 'configuration/core.inc.php';

if(isset($_GET['userId'])){
	$id = $_GET['userId'];
	$data = $con->selectByValue("contact_details","id",$id);
}

$result_per_page = 5;
$contactData=$con->selectAllData("contact_details");
$number_of_result = count($contactData);

$number_of_pages = ceil($number_of_result / $result_per_page);

if(!isset($_GET['page'])){
	$page = 1;
}else{
	$page = $_GET['page'];
}

$page_first_result = ($page - 1)*$result_per_page;

$data = $con->selectWithLimit("contact_details",$page_first_result,$result_per_page);
 
?>