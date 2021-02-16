<?php
include 'layouts/header.php';
include 'classes/Customer.php';

$customer = new Customer();
if(isset($_GET['id'])){
	$customerData = $customer->fetchCustomer($_GET['id']);
}

if(isset($_POST['submit'])){
	$id = $_POST['customerId'];
	$customerArray = ["firstName" => $_POST['firstName'],
			"lastName" => $_POST['lastName'],
			"email" => $_POST['email'],
			"mobile" => $_POST['mobile'],
			"status" => $_POST['profile']];
	if($customer -> updateCustomer($customerArray,$id)){
		header("Location: customer.php");
	}
}
?>

<div class="container mt-5">
	<div class="card shadow font-weight-bold">
		<div class="text-center mt-2">
			<h2> Update Customer Details </h2>
		</div>
		<hr>
		<form class="form ml-2 mr-2" method="post">
			<input type="hidden" name="customerId" value="<?php echo $customerData['customerId'] ?>">
			<div class="row">
				<div class="col-sm-6">
					<label for="firstName" class="form-label">	First Name
					</label>
					<input type="text" name="firstName" id="firstName" class="form-control" value="<?php echo $customerData['firstName'] ?>">
				</div>

				<div class="col-sm-6">
					<label for="lastName" class="form-label">	Last Name
					</label>
					<input type="text" name="lastName" id="lastName" class="form-control" value="<?php echo $customerData['lastName'] ?>">
				</div>
			</div>

			<div class="row mt-3">
				<div class="col-sm-6">
					<label for="email" class="form-label">
						Email
					</label>
					<input type="email" name="email" id="email" class="form-control" value="<?php echo $customerData['email'] ?>">
				</div>

				<div class="col-sm-6">
					<label for="mobile" class="form-label">
						Mobile Number
					</label>
					<input type="text" name="mobile" id="mobile" class="form-control" value="<?php echo $customerData['mobile'] ?>">
				</div>
			</div>

			<div class="row mt-3">
				<div class="col-sm-6">
					<label for="status" class="form-label">
						Status
					</label><br>
					<?php
						if($customerData['status'] == 1){
							echo '<input type="radio" name="profile" value="1" checked>';
							echo '<span class="mr-2 ml-2"> Enable </span>';
							echo '<input type="radio" name="profile" value="0">';
							echo '<span class="ml-2">Disable</span>';
						}else{
							echo '<input type="radio" name="profile" value="1">';
							echo '<span class="mr-2 ml-2"> Enable </span>';
							echo '<input type="radio" name="profile" value="0" checked>';
							echo '<span class="ml-2">Disable</span>';
						}
					?>
				</div>
			</div>

			<div class="row mt-3 mb-3">
				<div class="col-sm-6">
					<input type="submit" name="submit" value="Update" class="form-control btn btn-primary">
				</div>
				<div class="col-sm-6">
					<input type="reset" name="reset" class="form-control btn btn-primary">
				</div>
			</div>
		</form>
	</div>
</div>

<?php
include 'layouts/footer.php';
?>