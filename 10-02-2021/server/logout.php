<?php
require_once "../configuration/core.inc.php";
if(isset($_SESSION['userId'])){
	session_destroy();
	header('Location: ../index.php');
}