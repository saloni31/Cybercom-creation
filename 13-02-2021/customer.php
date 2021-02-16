<?php
include 'layouts/header.php';
include 'classes/Customer.php';

$customer = new Customer();
$customerData = $customer -> showCustomer();
?>

<div class="container mt-5">
	<div class="card shadow bg-light">
		<div class="card-body">
			<div class="row">
				<div class="col-sm-10">
					<h1 class="font-weight-bold"> Customer Details </h1>
				</div>

				<div class="col-sm-2">
					<a class="btn btn-primary" href="createCustomer.php"> Add Customers </a>
				</div>
				
			</div><br>
			<table class="table table-stripped table-hovered">
				<thead>
					<tr class="font-weight-bold">
						<th> Sr. No. </th>
						<th> First Name </th>
						<th> Last Name </th>
						<th> Email </th>
						<th> Mobile Number </th>
						<th> Status </th>
						<th> Action </th>
					</tr>
				</thead>
				<tbody>
					<?php
						$i = 1;
						foreach ($customerData as $key) {
							echo "<tr><td>".$i."</td>";
							echo "<td>".$key['firstName']."</td>";
							echo "<td>".$key['lastName']."</td>";
							echo "<td>".$key['email']."</td>";
							echo "<td>".$key['mobile']."</td>";
							echo "<td>".$key['status']."</td>";
							echo "<td> <a href='updateCustomer.php?id=".$key['customerId']."' class = 'btn btn-primary text-white mr-2'>Update</a>";
							echo "<a class = 'btn btn-primary text-white'> Delete </a></td></tr>";
							$i++;
						}
					?>
					<tr>
						<td>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php
include 'layouts/footer.php';
?>