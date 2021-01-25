<?php
$i = 1;
switch ($i) {
	case 1:
		echo "One <br>";
		break;

	case 2:
	    echo "Two <br>";
	    break;

	case 3:
		echo "Three <br>";
		break;
	
	default:
		echo "Number Not found";
		break;
}

$day = "Monday";
switch ($day) {
	case 'Saturday':
	case 'Sunday':
		echo "It's weekend";
		break;
	
	default:
		echo "Not a weekend";
		break;
}