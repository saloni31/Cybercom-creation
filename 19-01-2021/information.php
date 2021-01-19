<?php
	if(isset($_POST['submit'])){
?>
	
<!DOCTYPE html>
<html>
<head>
	<title> Information </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container mt-5">
		<table border="1" class="table table-bordered table-hover">
			<thead class="bg-light text-center">
				<tr>
					<th colspan="2"><h1> Information </h1></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td> First Name: </td>
					<td> <?php echo $_POST['firstName'] ?></td>
				</tr>

				<tr>
					<td> Last Name: </td>
					<td> <?php echo $_POST['lastName'] ?></td>
				</tr>

				<tr>
					<td> Date of birth: </td>
					<td> <?php echo $_POST['day']."-".$_POST['month']."-".$_POST['year'] ?></td>
				</tr>

				<tr>
					<td> Gender: </td>
					<td> <?php echo $_POST['gender'] ?></td>
				</tr>

				<tr>
					<td> Email: </td>
					<td> <?php echo $_POST['email'] ?></td>
				</tr>

				<tr>
					<td> Password: </td>
					<td> <?php echo $_POST['password'] ?></td>
				</tr>

				<tr>
					<td> Security Question: </td>
					<td> <?php echo $_POST['question'] ?></td>
				</tr>

				<tr>
					<td> Security Answer: </td>
					<td> <?php echo $_POST['answer'] ?></td>
				</tr>

				<tr>
					<td> Address: </td>
					<td> <?php echo $_POST['address'] ?></td>
				</tr>

				<tr>
					<td> City: </td>
					<td> <?php echo $_POST['city'] ?></td>
				</tr>

				<tr>
					<td> State: </td>
					<td> <?php echo $_POST['state'] ?></td>
				</tr>

				<tr>
					<td> Zip Code: </td>
					<td> <?php echo $_POST['zip'] ?></td>
				</tr>

				<tr>
					<td> Phone Number: </td>
					<td> <?php echo $_POST['phone'] ?></td>
				</tr>

			</tbody>
		</table>
	</div>
</body>
</html>
<?php } ?>