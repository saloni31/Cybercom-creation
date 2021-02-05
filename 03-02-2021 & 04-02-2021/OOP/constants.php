<?php
// Program that finds area of the circle
class Circle 
{
	const pi = 3.141;
	public function area($radius)
	{
		return "Area of the circle is: ".
		self::pi * $radius * $radius;
	}

}

echo Circle::pi;
$circle = new Circle;
echo "<br>".$circle->area(100);