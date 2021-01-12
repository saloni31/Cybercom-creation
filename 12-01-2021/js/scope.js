var a ="Hello!";
first()

function first(){
	var b="Hii!!";
	second();
	function second()
	{
		var c="Hey!!!";
		console.log(a+b+c);
		third();
	}
}

function third(){
	var d="Saloni";
	console.log(a+b+c+d);
}

