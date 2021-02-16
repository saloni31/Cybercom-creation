<?php
require_once './layouts/header.php';
$products = $this -> getproducts();
?>
<div class="container mt-5">
	<div class="card shadow bg-light">
		<div class="card-body">
			<div class="row">
				<div class="col-sm-10">
					<h1 class="font-weight-bold"> Product Details </h1>
				</div>

				<div class="col-sm-2">
					<a class="btn btn-primary" href="<?php echo $this -> getUrl('add') ?>"> Add Products </a>
				</div>
				
			</div><br>
			<table class="table table-stripped table-hovered">
				<thead>
					<tr class="font-weight-bold">
						<th> Sr. No. </th>
						<th> SKU </th>
						<th> Product Name </th>
						<th> Price </th>
						<th> Discount </th>
						<th> Quantity </th>
						<th> Description </th>
						<th> Status </th>
						<th> Action </th>
					</tr>
				</thead>
				<tbody>
					<?php
						$i = 1;
						foreach ($products as $key) {
							echo "<tr><td>".$i."</td>";
							echo "<td>".$key['sku']."</td>";
							echo "<td>".$key['name']."</td>";
							echo "<td>".$key['price']."</td>";
							echo "<td>".$key['discount']."</td>";
							echo "<td>".$key['quantity']."</td>";
							echo "<td>".$key['description']."</td>";
							echo "<td>".$key['status']."</td>";
							echo "<td> <a href='{$this->getUrl('edit',Null,['productId' => $key["productId"]])}' class = 'btn btn-primary text-white mr-2'>Update</a>";
							echo "<a <a href='{$this->getUrl('delete',Null,['productId' => $key["productId"]])}' class = 'btn btn-primary text-white'> Delete </a></td></tr>";
							$i++;
						}
					?>
					<tr>
						<td>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php
require_once './layouts/footer.php';
?> 