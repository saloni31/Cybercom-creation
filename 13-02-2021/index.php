<?php
include 'layouts/header.php';
?>

<div class="container bg-light mt-5">
	<div class="row">
		<div class="col-sm-4">
			<div class="card bg-secondary shadow h-100">
				<div class="card-body">
					<h2 class="text-center font-weight-bold"> 
						<a href = "customer.php" class="text-white">
							Customers
						</a>
					</h2>
				</div>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="card bg-secondary shadow h-100">
				<div class="card-body">
					<h2 class="text-center font-weight-bold"> 
						<a href = "category.php" class = "text-white">Category</a>
					</h2>
				</div>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="card bg-secondary shadow h-100">
				<div class="card-body">
					<h2 class="text-center font-weight-bold"> 
						<a href = "product.php" class="text-white">
							 Product 
						</a>
					</h2>
				</div>
			</div>
		</div>
	</div>
	
</div>

<?php
include 'layouts/footer.php';
?>