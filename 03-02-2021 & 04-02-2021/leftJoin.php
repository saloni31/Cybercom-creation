<?php
// program will perform left join query on pet and people tables.
// In this query result will be all the data of the people table 
// will return and from the pet table if condition are match
// only that data will be returned
require 'connection.php';

$sql = "select people.name,pet.pet_name from people
		left join pet on people.people_id = pet.people_id";
$res = mysqli_query($con,$sql)
?>

<!DOCTYPE html>
<html>
<head>
	<title> Left Join</title>
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
						<h4 class="text-center">People and Pet</h4>
					</td>
				</tr>
				<tr>
					<th> Sr. No. </th>
					<th> Name </th>
					<th> Pet </th>
				</tr>
			</thead>
			<tbody>
				<?php
					$i = 1;
					while($data = mysqli_fetch_array($res)) {
						echo "<tr><td> $i </td>";
						echo "<td> ".$data['name']."</td>";
						echo "<td>". $data['pet_name']."</td>";
						$i++;
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>