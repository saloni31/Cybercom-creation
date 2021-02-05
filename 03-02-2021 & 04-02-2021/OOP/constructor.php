<?php
class Example
{
	// one way to create constructor
	public function __construct()
	{
		echo "This is a function Constructor 1";
	}

	// Another way of creating constructor
	public function Example()
	{
		echo "This is a function constructor.";
	}
}

$obj = new Example;