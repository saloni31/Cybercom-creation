<?php
include_once "layouts/header.php";
?>

	<div class="container mt-5">
		<div class="card bg-light shadow border-0 w-75">
			<div class="card-body">
				<div class="text-center">
					<h1> Update Category </h1>
				</div>
				<form class="form" enctype="multipart/form-data" onsubmit="return validateCategory()">
					<div class="row mt-3">
						<div class="col-sm-3">
							<label for="title" class="form-label">
								Title 
							</label>
						</div>
						<div class="col-sm-9">
							<input type="text" name="title" id="title" class="form-control">
							<span id="titleErr" class="text-danger"></span>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-sm-3">
							<label for="content" class="form-label">
								Content 
							</label>
						</div>
						<div class="col-sm-9">
							<textarea name="content" id="content" class="form-control"></textarea>
							<span id="contentErr" class="text-danger"></span>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-3">
							<label for="url" class="form-label">
								URL 
							</label>
						</div>
						<div class="col-sm-9">
							<input type="text" name="url" id="url" class="form-control">
							<span id="urlErr" class="text-danger"></span>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-3">
							<label for="metaTitle" class="form-label">
								Meta Title 
							</label>
						</div>
						<div class="col-sm-9">
							<input type="text" name="metaTitle" id="metaTitle" class="form-control">
							<span id="metaTitleErr" class="text-danger"></span>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-3">
							<label for="category" class="form-label">
								Parent Category
							</label>
						</div>
						<div class="col-sm-9">
							<select name="category" id="category" class="form-control">
								<option value=" ">Select</option>
								<option value="Education">Education</option>
							</select>
							<span id="categoryErr" class="text-danger"></span>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-3">
							<label for="image" class="form-label">
								Image
							</label>
						</div>
						<div class="col-sm-9">
							<input type="file" name="image" id="image" class="form-control">
							<span id="imageErr" class="text-danger"></span>
						</div>
					</div>

					<div class="row mt-3">
						<input type="submit" name="create" value="Submit" class="form-control btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>
<?php
include_once "layouts/header.php";
?>