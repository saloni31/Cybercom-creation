<?php
if(isset($_POST['name'])){
	$name = $_POST['name'];
}

if(!empty($name)){
	if($con = @mysqli_connect("localhost","root","","practice")){
		$sql = "insert into names (name) values ('".$name."')";
		if(mysqli_query($con,$sql)){
			echo "Record inserted successfully";
		}else{
			echo "Problem in inserting data";
		}
	}
}
?>