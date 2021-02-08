<?php
include_once "layouts/header.php";
include_once 'configuration/core.inc.php';
?>

<div class="container mt-5 pt-5">
	<div class="bg-light shadow p-3">
		<h3 class="ml-3 text-dark font-weight-bold">
		 Create Contact 
		</h3>

	</div>

	<?php
	if(!empty($_SESSION['message'])){
	?>
	<div class="mb-2 mt-2 bg-success text-center p-1">
		<span id="message" class="text-white font-weight-bold">
			<?php
			 echo $_SESSION['message'];
			 $_SESSION['message'] = "";
			 ?>
		</span>
	</div>
	<?php
		}
	?>

	<div class="mt-5"> 
		<form class="form" action="service/createContact.php" method="post"
		onsubmit="return validateForm()">
			<div class="row">
				<div class="col-sm-6">
					<label for="name" class="form-label">Name</label>
					<input type="text" name="name" class="form-control"
					placeholder="John Doe" id="name">
					<span id="nameErr" class="text-danger">
						<?php
						 if(isset($_SESSION['nameErr'])){
						  echo $_SESSION['nameErr'];
						  unset($_SESSION['nameErr']);
						  }
						?>
					</span>
				</div>

				<div class="col-sm-6">
					<label for="email" class="form-label">Email</label>
					<input type="email" name="email" class="form-control" id="email"
					placeholder="johndoe@example.com">
					<span id="emailErr" class="text-danger">
						<?php 
						if(isset($_SESSION['emailErr'])){
						 echo $_SESSION['emailErr'] ;
						 unset($_SESSION['emailErr']);
						}
						?>
					</span>
				</div>
			</div>

			<div class="row mt-3">
				<div class="col-sm-6">
					<label for="phone" class="form-label">Phone</label>
					<input type="text" name="phone" class="form-control"
					placeholder="0123456789" id="phone">
					<span id="phoneErr" class="text-danger">
						<?php 
						if(isset($_SESSION['phoneErr'])){
							echo $_SESSION['phoneErr'];
						 	unset($_SESSION['phoneErr']);
						} 
						?>
					</span>
				</div>

				<div class="col-sm-6">
					<label for="title" class="form-label">Title</label>
					<input type="text" name="title" class="form-control"
					placeholder="Employee" id="title">
					<span id="titleErr" class="text-danger">
						<?php
						 if(isset($_SESSION['titleErr'])){
							echo $_SESSION['titleErr'] ;
							unset($_SESSION['titleErr']);
						}
						?>
					</span>
				</div>
			</div>

			<div class="mt-4">
				<input type="submit" name="create" value="Create"
				class="btn btn-success form-control">
			</div>
		</form>
	</div>
</div>



<?php
include "layouts/footer.php";
?>
