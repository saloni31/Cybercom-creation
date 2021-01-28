<?php
echo "current time is: ".time()."<br>";
$current_date = date("D M Y @ h:i:s");
echo "current date and time is: ".$current_date;
echo "<br>".date("dS M Y @ h:i:s");

$time_modified = date("D M Y @ h:i:s",time() - 60);
echo "<br> Modified date and time is: ".$time_modified;

echo "<br> New modified date and time is: ".date('dS M Y @ h:i:s a',strtotime("+1 week"));