<?php
session_start();
include(realpath(dirname(__DIR__)."/lib/Connection.php"));
use contactApp\Connection;

$con = new contactApp\Connection('contact');
function getPostData($array){
	$data = [];
	global $con;
	foreach($array as $key){
		array_push($data,$con->escapeQuotes($_POST[$key]));
	}
	return $data;
}