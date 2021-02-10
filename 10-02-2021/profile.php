<?php
include_once "layouts/header.php";
?>

<div class="container mt-5">
		<div class="card border-0 bg-light shadow w-75">
			<div class="card-body">
				<h1 class="text-center"> Registration </h1>
				<hr>
				<form class="form" method="post" onsubmit="return validateUserData()" action="server/user.php">
					<div class="row mt-3">
						<div class="col-sm-3">
							<label for="prefix" class="form-label"> 	Prefix
							</label>
						</div>
						<div class="col-sm-9">
							<select name="prefix" id="prefix" class="form-control">
								<option value=" ">Select</option>
								<option value="Mr.">Mr.</option>
								<option value="Mrs.">Mrs.</option>
								<option value="Ms.">Ms.</option>
							</select>
							<span class="text-danger" id="prefixErr">
								<?php
									if(isset($_SESSION['prefixErr'])){
									echo $_SESSION['prefixErr'];
									unset($_SESSION['prefixErr']);
								}
								?>
							</span>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-3">
							<label for="firstName" class="form-label"> 	First Name
							</label>
						</div>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name" >
							<span class="text-danger" id="firstNameErr">
								<?php
									if(isset($_SESSION['firstNameErr'])){
									echo $_SESSION['firstNameErr'];
									unset($_SESSION['firstNameErr']);
								}
								?>
							</span>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-3">
							<label for="lastName" class="form-label"> 	Last Name
							</label>
						</div>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name" >
							<span class="text-danger" id="lastNameErr">
								<?php
									if(isset($_SESSION['lastNameErr'])){
									echo $_SESSION['lastNameErr'];
									unset($_SESSION['lastNameErr']);
								}
								?>
							</span>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-3">
							<label for="email" class="form-label"> 	Email
							</label>
						</div>
						<div class="col-sm-9">
							<input type="email" class="form-control" name="email" id="email" placeholder="somethig@something.com" >
							<span class="text-danger" id="emailErr">
								<?php
									if(isset($_SESSION['emailErr'])){
									echo $_SESSION['emailErr'];
									unset($_SESSION['emailErr']);
								}
								?>
							</span>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-3">
							<label for="mobile" class="form-label"> 	Mobile number
							</label>
						</div>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile number" >
							<span class="text-danger" id="mobileErr">
								<?php
									if(isset($_SESSION['mobileErr'])){
									echo $_SESSION['mobileErr'];
									unset($_SESSION['mobileErr']);
								}
								?>
							</span>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-3">
							<label for="password" class="form-label"> 	Password
							</label>
						</div>
						<div class="col-sm-9">
							<input type="password" class="form-control" name="password" id="password" placeholder="Password">
							<span class="text-danger" id="passwordErr">
								<?php
									if(isset($_SESSION['passwordErr'])){
									echo $_SESSION['passwordErr'];
									unset($_SESSION['passwordErr']);
								}
								?>
							</span>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-3">
							<label for="confirmPassword" class="form-label"> 	Confirm Password
							</label>
						</div>
						<div class="col-sm-9">
							<input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password">
							<span class="text-danger" id="confirmPasswordErr">
								<?php
									if(isset($_SESSION['confirmPasswordErr'])){
									echo $_SESSION['confirmPasswordErr'];
									unset($_SESSION['confirmPasswordErr']);
								}
								?>
							</span>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-3">
							<label for="information" class="form-label"> 	Information
							</label>
						</div>
						<div class="col-sm-9">
							<textarea class="form-control" name="information" id="information"></textarea>
							<span class="text-danger" id="informationErr"></span>
							<?php
									if(isset($_SESSION['informationErr'])){
									echo $_SESSION['informationErr'];
									unset($_SESSION['informationErr']);
								}
								?>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-3"></div>
						<div class="col-sm-9">
							<input type="checkbox" id="conditions" class="form-check-input" name="conditions" required>
							<label for="conditions" class="form-check-label"> 
								Hereby, I accept Terms & conditions 
							</label><br>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-12">
							<input type="submit" name="register" id="register" class="form-control btn btn-primary">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

<?php
include_once "layouts/footer.php";
?>