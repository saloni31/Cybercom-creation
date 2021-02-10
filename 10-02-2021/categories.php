<?php
include 'layouts/header.php';
$data = $con->selectAllData("category");
?>

<div class="container mt-5 pt-5">
	<div class="bg-light shadow p-1">
		<h3 class="ml-3 text-dark font-weight-bold">
		 Blog Categories 
		</h3>
	</div>

	<div class="mb-2 mt-2 text-center p-1 bg-success d-none" id="msgDiv">
		<span id="message" class="text-white font-weight-bold">
		</span>
	</div>

	<div class="mt-2 mb-3"> 
		<a class="btn btn-primary mt-2" href="createCategory.php">
			<h5 class="text-white">
				Add Category 
			</h5>
		</a>
		<div class="mt-4">
			<table class="table table-hover table-stripped">
				<thead class="text-dark font-weight-bold">
					<tr>
						<td> Category ID </td>
						<td> Category Image </td>
						<td> Category Name </td>
						<td> Created date </td>
						<td> Actions </td>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach ($data as $row) {
					?>
					<tr>
						<td> <?php echo $row['categoryId'] ?> </td>
						<td> <img src="<?php echo substr($row['image'],3) ?>" height="100" width="100"> </td>
						<td> <?php echo $row['title'] ?> </td>
						<td> <?php echo $row['created_at'] ?> </td>
						<td class="text-white">
							<a class="btn btn-primary" 
							href="updateCategory.php?categoryId=<?php echo $row['categoryId'] ?>">
								<i class="fa fa-edit"></i>
							</a>
							<a class="btn btn-danger" onclick="deleteCategory(<?php echo $row['categoryId'] ?>)">
								<i class="fa fa-trash"></i>
							</a>
						</td>
					</tr>
					<?php
						}
					?>
				</tbody>
				<tfoot>
					<!-- <tr>
						<td colspan="7"> -->
							<?php

								// for($page = 1;$page <= $number_of_pages;$page++){
								// 	echo '<a href = "contacts.php?page=' . $page . '">' . $page . ' </a>';
								// }
								
							?>
						<!-- </td>
					</tr> -->
				</tfoot>
			</table>
		</div>
	</div>
</div>

<?php
include 'layouts/footer.php';
?>