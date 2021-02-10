<?php
include "layouts/header.php";
include "service/listContacts.php";
?>

<div class="container mt-5 pt-5">
	<div class="bg-light shadow p-1">
		<h3 class="ml-3 text-dark font-weight-bold">
		 Update Contact 
		</h3>
	</div>

	<div class="mt-5"> 
		<form class="form" method="post" action="service/updateContact.php"
		onsubmit="return validateForm('update')">
			<input type='hidden' name='id' value='<?php if(isset($id)) echo $id ?>'>
			<div class="row">
				<div class="col-sm-6">
					<label for="name" class="form-label">Name</label>
					<input type="text" name="name" class="form-control"
					placeholder="John Doe" id="name" value="<?php echo $data[0]['name'] ?>">
					<span id="nameErr" class="text-danger"></span>
				</div>

				<div class="col-sm-6">
					<label for="email" class="form-label">Email</label>
					<input type="email" name="email" class="form-control" id="email"
					placeholder="johndoe@example.com" value="<?php echo $data[0]['email'] ?>">
					<span id="emailErr" class="text-danger"></span>
				</div>
			</div>

			<div class="row mt-3">
				<div class="col-sm-6">
					<label for="phone" class="form-label">Phone</label>
					<input type="text" name="phone" class="form-control"
					placeholder="0123456789" id="phone" value="<?php echo $data[0]['phone'] ?>">
					<span id="phoneErr" class="text-danger"></span>
				</div>

				<div class="col-sm-6">
					<label for="title" class="form-label">Title</label>
					<input type="text" name="title" class="form-control"
					placeholder="Employee" id="title" value="<?php echo $data[0]['title'] ?>">
					<span id="titleErr" class="text-danger"></span>
				</div>
			</div>

			<div class="mt-4">
				<input type="submit" name="update" value="Update"
				class="btn btn-success form-control">
			</div>
		</form>
	</div>
</div>



<?php
include "layouts/footer.php";
?>
