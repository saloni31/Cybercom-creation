<?php
// program will search the names which will be entered by user
require "connection.php";
if(isset($_POST['search'])){
	if(isset($_POST['search_name']) && !empty($_POST['search_name'])){
		$search_name = 
		mysqli_real_escape_string($con,$_POST['search_name']);

		$sql = "select * from names where name like '%".$search_name."%'";
		$res = mysqli_query($con, $sql);
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Like Conditions </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<form action = "searchData.php" method="post" class="mt-2">
		Name : <input type="text" name="search_name">
		<input type="submit" name="search" value="Search">
	</form>

	<div class="container mt-5">
		<table class="table table-bordered shadow bg-light">
			<thead>
				<tr>
					<td colspan="5">
						<h4 class="text-center">
							Names 
						</h4>
					</td>
				</tr>
				<tr>
					<th> Sr. No. </th>
					<th> Name </th>
				</tr>
			</thead>
			<tbody>
				<?php
					$i = 1;
					if(mysqli_num_rows($res) >= 1){
						while($data = mysqli_fetch_array($res)) {
							echo "<tr><td> $i </td>";
							echo "<td> ".$data['name']."</td>";
							$i++;
						}
					}else{
						echo "<tr><td colspan='2' class='text-center font-weight-bold'>
							No Data Found.</td></tr>";
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>
