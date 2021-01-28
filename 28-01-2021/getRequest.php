<?php
	if(isset($_GET['submit'])){
		if(isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year'])){
			$day = $_GET['day'];
			$date = $_GET['date'];
			$year = $_GET['year'];
			if(!empty($day) && !empty($date) && !empty($year)){
				echo "It is $day $date $year";
			}else{
				echo "Please fill all fields.";
			}
		}
	}
?>

<form action="" method="get">
	Day: <input type="text" name="day"> <br><br>
	Date: <input type="text" name="date"> <br><br>
	Year: <input type="text" name="year"> <br><br>
	<input type="submit" name="submit" value="Submit"> 
</form>