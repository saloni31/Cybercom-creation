<?php
/*
create multi dimensional array for
*healthy
	salad
	vagetables
	pasta
*unhealthy
	pizza
	ice-cream
*/

$food = array("Healthy" =>
						array('Salad', 'vagetables','Pasta'),
			"Unhealthy" =>
						array('Pizza','Ice-cream'));

//access particular element of an array
echo $food['Healthy'][0];

// Print whole array
print_r($food);