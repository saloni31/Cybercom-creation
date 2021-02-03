<?php
require "connection.php";
$data = selectAllData("contact_us");
?>

<!DOCTYPE html>
<html>
<head>
	<title> List Contacts </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/userForm.js"></script>
</head>
<body>
	<div class="container mt-5">
		<table class="table table-bordered shadow bg-light">
			<thead>
				<tr>
					<td colspan="5">
						<h4 class="text-center">Contact Us List</h4>
					</td>
				</tr>
				<tr>
					<th> Sr. No. </th>
					<th> Name </th>
					<th> Email </th>
					<th> Subject </th>
					<th> Message </th>
				</tr>
			</thead>
			<tbody>
				<?php
					$i = 1;
					foreach ($data as $contact) {
						echo "<tr><td> $i </td>";
						echo "<td> ".$contact['name']."</td>";
						echo "<td>". $contact['email']."</td>";
						echo "<td>". $contact['subject']."</td>";
						echo "<td>". $contact['message']."</td>";
						$i++;
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>