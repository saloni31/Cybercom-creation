<?php
include_once "layouts/header.php";
if(isset($_SESSION['userId'])){
	$data = $con->selectByValue("user","id",$_SESSION['userId']);
}
?>

<div class="container mt-5">
		<div class="card border-0 bg-light shadow w-75">
			<?php
			if(isset($_SESSION['updateSuccess'])){
			?>
			<div class="bg-success">
				<span class="text-center font-weight-bold ml-2">
					<?php
						echo $_SESSION['updateSuccess'];
						unset($_SESSION['updateSuccess']);
					
					?>
				</span>
			</div>
		<?php } ?>
			<div class="card-body">
				<h1 class="text-center"> Profile </h1>
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
								<?php 
								if($data[0]['prefix'] === "Mr."){
								?>
									<option value="Mr." selected>Mr.</option>
									<option value="Mrs.">Mrs.</option>
									<option value="Ms.">Ms.</option>
								<?php
								}
								?>
								<?php 
								if($data[0]['prefix'] === "Mrs."){
								?>
									<option value="Mr.">Mr.</option>
									<option value="Mrs." selected>Mrs.</option>
									<option value="Ms.">Ms.</option>
								<?php
								}
								?>
								<?php 
								if($data[0]['prefix'] === "Ms."){
								?>
									<option value="Mr." >Mr.</option>
									<option value="Mrs.">Mrs.</option>
									<option value="Ms." selected>Ms.</option>
								<?php
								}
								?>
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
							<input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name" value="<?php echo $data[0]['firstName'] ?>">
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
							<input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name" value="<?php echo $data[0]['lastName'] ?>">
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
							<input type="email" class="form-control" name="email" id="email" placeholder="somethig@something.com" value="<?php echo $data[0]['email'] ?>">
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
							<input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile number" value="<?php echo $data[0]['mobile'] ?>">
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
							<label for="information" class="form-label"> 	Information
							</label>
						</div>
						<div class="col-sm-9">
							<textarea class="form-control" name="information" id="information">
								<?php echo trim($data[0]['information']) ?>
							</textarea>
							<span class="text-danger" id="informationErr">
								<?php
									if(isset($_SESSION['informationErr'])){
									echo $_SESSION['informationErr'];
									unset($_SESSION['informationErr']);
								}
								?>
							</span>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-12">
							<input type="submit" name="update" id="register" class="form-control btn btn-primary">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

<?php
include_once "layouts/footer.php";
?>