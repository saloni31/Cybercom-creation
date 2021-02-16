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
					<label for="productSku" class="form-label">	SKU
					</label>
					<input type="text" name="productSku" id="productSku" class="form-control">
				</div>

				<div class="col-sm-6">
					<label for="productName" class="form-label">Product Name
					</label>
					<input type="text" name="productName" id="productName" class="form-control">
				</div>
			</div>

			<div class="row mt-3">
				<div class="col-sm-6">
					<label for="price" class="form-label">
						Price
					</label>
					<input type="text" name="price" id="price" class="form-control">
				</div>

				<div class="col-sm-6">
					<label for="discount" class="form-label">
						Discount
					</label>
					<input type="text" name="discount" id="discount" class="form-control">
				</div>
			</div>

			<div class="row mt-3">
				<div class="col-sm-6">
					<label for="quantity" class="form-label">
						Quantity
					</label>
					<input type="text" name="quantity" id="quantity" class="form-control">
				</div>

				<div class="col-sm-6">
					<label for="description" class="form-label">
						Description
					</label>
					<input type="text" name="description" id="description" class="form-control">
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