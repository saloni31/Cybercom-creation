<?php
require "connection.php";
$sql = "select distinct email,subject from contact_us";
$res = mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title> Distinct Data </title>
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
							Unique Emails from contacts 
						</h4>
					</td>
				</tr>
				<tr>
					<th> Sr. No. </th>
					<th> Email </th>
					<th> Subject </th>
				</tr>
			</thead>
			<tbody>
				<?php
					$i = 1;
					if(mysqli_num_rows($res) >= 1){
						while($data = mysqli_fetch_array($res)) {
							echo "<tr><td> $i </td>";
							echo "<td> ".$data['email']."</td>";
							echo "<td> ".$data['subject']."</td>";
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