<?php
include_once "layouts/header.php";
$data = $con->selectAllData("category");
?>

<div class="container mt-5">
		<div class="card bg-light shadow border-0 w-75">
			<div class="card-body">
				<div class="text-center mb-2">
					<h1> Add New Blog Post </h1>
				</div>
				<hr>
				<form class="form" enctype="multipart/form-data" onsubmit="return validateBlog()" method="post" action="server/blog.php">
					<div class="row mt-3">
						<div class="col-sm-3">
							<label for="title" class="form-label">
								Title 
							</label>
						</div>
						<div class="col-sm-9">
							<input type="text" name="title" id="title" class="form-control">
							<span id="titleErr" class="text-danger">
								<?php
								if(isset($_SESSION['titleErr'])){
									echo $_SESSION['titleErr'];
									unset($_SESSION['titleErr']);
								}
								?>
							</span>
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
							<span id="contentErr" class="text-danger">
								<?php
								if(isset($_SESSION['contentErr'])){
									echo $_SESSION['contentErr'];
									unset($_SESSION['contentErr']);
								}
								?>
							</span>
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
							<span id="urlErr" class="text-danger">
								<?php
								if(isset($_SESSION['urlErr'])){
									echo $_SESSION['urlErr'];
									unset($_SESSION['urlErr']);
								}
								?>
							</span>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-3">
							<label for="publishDate" class="form-label">
								Published at
							</label>
						</div>
						<div class="col-sm-9">
							<input type="date" name="publishDate" id="publishDate" class="form-control">
							<span id="publishDateErr" class="text-danger">
								<?php
								if(isset($_SESSION['publishDateErr'])){
									echo $_SESSION['publishDateErr'];
									unset($_SESSION['publishDateErr']);
								}
								?>
							</span>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-3">
							<label for="category" class="form-label">
								 Category
							</label>
						</div>
						<div class="col-sm-9">
							<select name="category" id="category" class="form-control" multiple size="3">
								<?php
								foreach ($data as $category) {
									echo "<option value='".$category['categoryId']."'>".$category['title']."</option>";
								}
								?>
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
							<span id="imageErr" class="text-danger">
								<?php
								if(isset($_SESSION['imageErr'])){
									echo $_SESSION['imageErr'];
									unset($_SESSION['imageErr']);
								}
								?>
							</span>
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