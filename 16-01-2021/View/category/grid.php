<?php
require_once './layouts/header.php';
$categories = $this -> getCategories();
?>
<div class="container mt-5">
	<div class="card shadow bg-light">
		<div class="card-body">
			<div class="row">
				<div class="col-sm-10">
					<h1 class="font-weight-bold"> Category Details </h1>
				</div>

				<div class="col-sm-2">
					<a class="btn btn-primary" href="<?php echo $this -> getUrl('add',null,null) ?>"> Add Categories </a>
				</div>
				
			</div><br>
			<table class="table table-stripped table-hovered">
				<thead>
					<tr class="font-weight-bold">
						<th> Sr. No. </th>
						<th> Category Name </th>
						<th> Description </th>
						<th> Status </th>
						<th> Action </th>
					</tr>
				</thead>
				<tbody>
					<?php
						$i = 1;
						foreach ($categories as $key) {
							echo "<tr><td>".$i."</td>";
							echo "<td>".$key['categoryName']."</td>";
							echo "<td>".$key['description']."</td>";
							echo "<td>".$key['status']."</td>";
							echo "<td> <a href='{$this->getUrl('edit',Null,['categoryId' => $key["categoryId"]],true)}' class = 'btn btn-primary text-white mr-2'>Update</a>";
							echo "<a <a href='{$this->getUrl('delete',Null,['categoryId' => $key["categoryId"]],true)}' class = 'btn btn-primary text-white'> Delete </a></td></tr>";
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