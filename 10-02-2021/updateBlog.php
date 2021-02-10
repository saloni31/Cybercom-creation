<?php
include_once "layouts/header.php";
if(isset($_GET['blogId'])){
	$data = $con->selectByValue("blog_post","blogId",$_GET['blogId']);
}
?>

<div class="container mt-5">
		<div class="card bg-light shadow border-0 w-75">
			<div class="card-body">
				<div class="text-center mb-2">
					<h1> Update Blog Post </h1>
				</div>
				<hr>
				<form class="form" enctype="multipart/form-data" onsubmit="return validateBlog()" method="post" action="server/blog.php">
					<input type="hidden" name="id" value="<?php echo $data[0]['blogId']?>">
					<div class="row mt-3">
						<div class="col-sm-3">
							<label for="title" class="form-label">
								Title 
							</label>
						</div>
						<div class="col-sm-9">
							<input type="text" name="title" id="title" class="form-control" value="<?php echo $data[0]['title'] ?>">
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
							<textarea name="content" id="content" class="form-control">
								<?php echo $data[0]['content'] ?>
							</textarea>
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
							<input type="text" name="url" id="url" class="form-control" value="<?php echo $data[0]['url'] ?>">
							<span id="urlErr" class="text-danger"></span>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-3">
							<label for="publishDate" class="form-label">
								Published at
							</label>
						</div>
						<div class="col-sm-9">
							<input type="date" name="publishDate" id="publishDate" class="form-control" value="<?php echo date('d-m-Y',$data[0]['publishDate']) ?>">
							<span id="publishDateErr" class="text-danger"></span>
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
								$categoryData = $con->selectAllData("category");
								foreach ($categoryData as $category) {
									if($category['categoryId'] === $data[0]['category']){
										echo "<option value='".$category['categoryId']."' selected>".$category['title']."</option>";
									}else{
										echo "<option value='".$category['categoryId']."'>".$category['title']."</option>";
									}
									
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
							<span id="imageErr" class="text-danger"></span>
						</div>
					</div>

					<div class="row mt-3">
						<input type="submit" name="update" value="Submit" class="form-control btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>

<?php
include_once "layouts/header.php";
?>