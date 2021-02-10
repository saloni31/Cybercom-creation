<?php
require_once "../configuration/core.inc.php";
if(isset($_SESSION['name'])){
	echo "Hii";
	session_destroy();
	header('Location: ../index.php');
}