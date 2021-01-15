function calFibbonacci(){
	var no,prev,next,newNumber,msg;
	no=document.getElementById("no").value;
	prev=0;
	next=1;

	msg = prev + " " + next+" ";
	for (var i = 0; i < no; i++) {
		newNumber=prev+next;
		msg += newNumber + " ";
		prev=next;
		next=newNumber;
	}

	document.getElementById('fibbonacci').innerHTML = msg;
};