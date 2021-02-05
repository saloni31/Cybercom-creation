<?php
if(isset($_GET['search_text'])){
	$search_text = $_GET['search_text'];
}

if(!empty($search_text)){
	if($con = @mysqli_connect("localhost","root","","practice")){
		$sql = "select name from names where name like '%".
		mysqli_real_escape_string($con,$search_text)."%'";
		$res = mysqli_query($con,$sql);

		while($row = mysqli_fetch_array($res)){
			echo $row['name']."<br>";
		}
	}
}
?>