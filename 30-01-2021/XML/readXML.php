<?php
$xml = simplexml_load_file("example.xml");
echo $xml->producer[2]->name." is ".$xml->producer[1]->age." yrs.";

foreach ($xml->producer as $producer) {
	echo $producer->name." is ".$producer->age." yrs.<br>";
	foreach ($producer->show as $show) {
		echo "Produces show name ".$show->showname." on date ".$show->showDate."<br>";
	}
	echo "<br>";
}