<?php
$food = array("Healthy" =>
						array('Salad', 'vagetables','Pasta'),
			"Unhealthy" =>
						array('Pizza','Ice-cream'));
foreach ($food as $element => $inner_array) {
	foreach ($inner_array as $item) {
		echo "$element => $item <br>";
	}
}