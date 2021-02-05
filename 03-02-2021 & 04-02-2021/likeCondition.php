<?php
// Program will perform all different kinds of like conditions
require 'connection.php';
$sql = "select * from names where name like '%Garratte'";
$res = mysqli_query($con, $sql);

$sql = "select * from names where name like '%G%'";
$res1 = mysqli_query($con, $sql);

$sql = "select * from names where name not like '%G%'";
$res2 = mysqli_query($con, $sql);
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
	<div class="container mt-5">
		<table class="table table-bordered shadow bg-light">
			<thead>
				<tr>
					<td colspan="5">
						<h4 class="text-center">
							Names with Garratte surname
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
					while($data = mysqli_fetch_array($res)) {
						echo "<tr><td> $i </td>";
						echo "<td> ".$data['name']."</td>";
						$i++;
					}
				?>
			</tbody>
		</table>
	</div>
	<div class="container mt-3">
		<table class="table table-bordered shadow bg-light">
			<thead>
				<tr>
					<td colspan="5">
						<h4 class="text-center">
							Names contains 'G'
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
					while($data = mysqli_fetch_array($res1)) {
						echo "<tr><td> $i </td>";
						echo "<td> ".$data['name']."</td>";
						$i++;
					}
				?>
			</tbody>
		</table>
	</div>
	<div class="container mt-3">
		<table class="table table-bordered shadow bg-light">
			<thead>
				<tr>
					<td colspan="5">
						<h4 class="text-center">
							Names doesn't contains 'G'
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
					while($data = mysqli_fetch_array($res2)) {
						echo "<tr><td> $i </td>";
						echo "<td> ".$data['name']."</td>";
						$i++;
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>