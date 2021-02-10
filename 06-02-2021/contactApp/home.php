<?php
include "layouts/header.php";
?>

<div class="container mt-5 pt-5">
	<div class="bg-light shadow p-1">
		<h3 class="ml-3 text-dark font-weight-bold">
		 Home 
		</h3>
	</div>

	<div class="mt-5"> 
		<h5>Welcome <b>
			<?php 
				if(isset($_SESSION['name'])) echo $_SESSION['name'];
			?>
		</b>to the Home page!</h5>
	</div>
</div>



<?php
include "layouts/footer.php";
?>
