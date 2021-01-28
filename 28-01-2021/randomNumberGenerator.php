<?php
	if(isset($_POST['roll'])){
		$rand = rand(1,6);
		echo "You rolled ".$rand;
		echo "<br>Max limit is: ".getrandmax();
	}
?>
<br><br>
<form action="" method="post">
	<input type="submit" name="roll" value="Roll dice">
</form>