<?php
include 'layouts/header.php';
$conn = mysqli_connect("localhost","root","","blog");
$sql = "select * from blog_post join category on blog_post.category = category.categoryId where blog_post.userId=".$_SESSION['userId'];
$res = mysqli_query($conn,$sql);
?>

<div class="container mt-5 pt-5">
	<div class="bg-light shadow p-1">
		<h3 class="ml-3 text-dark font-weight-bold">
		 Blog Posts 
		</h3>
	</div>

	<?php
	if(!empty($_SESSION['message'])){
	?>
	<div class="mb-2 mt-2 bg-success text-center p-1">
		<span class="text-white font-weight-bold">
			<?php
			 echo $_SESSION['message'];
			 $_SESSION['message'] = "";
			 ?>
		</span>
	</div>
	<?php
		}
	?>
	<div class="mb-2 mt-2 text-center p-1 bg-success d-none" id="msgDiv">
		<span id="message" class="text-white font-weight-bold">
		</span>
	</div>

	<div class="mt-2 mb-3"> 
		<a class="btn btn-primary mt-2" href="createBlog.php">
			<h5 class="text-white">
				Create Blog 
			</h5>
		</a>
		<div class="mt-4">
			<table class="table table-hover table-stripped">
				<thead class="text-dark font-weight-bold">
					<tr>
						<td> Post ID </td>
						<td> Category Name </td>
						<td> Title </td>
						<td> Published date </td>
						<td> Actions </td>
					</tr>
				</thead>
				<tbody>
					<?php
						// $i=$page_first_result+1;
						while($row=mysqli_fetch_array($res)) {
					?>
					<tr>
						<td> <?php echo $row['blogId'] ?> </td>
						<td> <?php echo $row[12] ?> </td>
						<td> <?php echo $row[3] ?> </td>
						<td> <?php echo $row['publishDate'] ?> </td>
						<td class="text-white">
							<a class="btn btn-primary" 
							href="updateBlog.php?blogId=<?php echo $row['blogId'] ?>">
								<i class="fa fa-edit"></i>
							</a>
							<a class="btn btn-danger" onclick="deleteBlog(<?php echo $row['blogId'] ?>)">
								<i class="fa fa-trash"></i>
							</a>
						</td>
					</tr>
					<?php
						// $i++;
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