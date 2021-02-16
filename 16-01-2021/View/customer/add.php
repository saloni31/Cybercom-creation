<?php
include 'layouts/header.php';

?>

<div class="container mt-5">
	<div class="card shadow font-weight-bold">
		<div class="text-center mt-2">
			<h2> Customer Details </h2>
		</div>
		<hr>
		<form class="form ml-2 mr-2" method="post" action="<?php echo $this->getUrl('save') ?>">

			<div class="row">
				<div class="col-sm-6">
					<label for="firstName" class="form-label">	First Name
					</label>
					<input type="text" name="firstName" id="firstName" class="form-control">
				</div>

				<div class="col-sm-6">
					<label for="lastName" class="form-label">	Last Name
					</label>
					<input type="text" name="lastName" id="lastName" class="form-control">
				</div>
			</div>

			<div class="row mt-3">
				<div class="col-sm-6">
					<label for="email" class="form-label">
						Email
					</label>
					<input type="email" name="email" id="email" class="form-control">
				</div>

				<div class="col-sm-6">
					<label for="mobile" class="form-label">
						Mobile Number
					</label>
					<input type="text" name="mobile" id="mobile" class="form-control">
				</div>
			</div>

			<div class="row mt-3">
				<div class="col-sm-6">
					<label for="password" class="form-label">
						Password
					</label>
					<input type="password" name="password" id="password" class="form-control">
				</div>

				<div class="col-sm-6">
					<label for="confirmPassword" class="form-label">
						Confirm Password
					</label>
					<input type="password" name="confirmPassword" id="confirmPassword" class="form-control">
				</div>
			</div>

			<div class="row mt-3">
				<div class="col-sm-6">
					<label for="status" class="form-label">
						Status
					</label><br>
					<input type="radio" name="profile" 
					value="1">
					<label class="mr-2 ml-2"> Enable </label>
					<input type="radio" name="profile" value="0">
					<label class="ml-2">Disable</label>
				</div>
			</div>

			<div class="row mt-3 mb-3">
				<div class="col-sm-6">
					<input type="submit" name="save" Value = "Submit" class="form-control btn btn-primary">
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