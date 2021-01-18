var scores,roundScore,activePlayer,score,total;

scores = [];
roundScore=0;
activePlayer=1;

document.getElementById("game").addEventListener('click',function(){
	document.getElementById('dice').src="images/dice-1.png";
	$('#active-1').removeClass('d-none');
	$('#active-2').addClass('d-none');
	$("#winner-1").removeClass("d-none");
	$("#winner-2").removeClass("d-none");
});

document.getElementById("roll-dice").addEventListener('click',rollDown);

document.getElementById("hold").addEventListener('click',rollUp);

function rollDown(){
	var dice = Math.floor(Math.random() * 6) + 1;
	document.getElementById('dice').src="images/dice-"+dice+".png";
	document.querySelector('#current-score-' + activePlayer).textContent = 0;
	scores.push(dice);
	if(scores.length > 1 && scores[scores.length - 1] === 1){
		document.querySelector('#current-score-' + activePlayer).textContent = 0;
		rollUp();
		scores=[];
	}
	else{
		document.querySelector('#current-score-' + activePlayer).textContent = scores.reduce((first,current) => first + current);
	}
	
}

	function rollUp(){
	score = parseInt(document.getElementById("final-score-"+activePlayer).textContent);
	total = score + parseInt(document.getElementById("current-score-"+activePlayer).textContent);
	if(total >= 100){
		$("#winner-"+activePlayer).removeClass("d-none");
		document.getElementById("roll-dice").removeEventListener("click",rollDown);
		$("#active-1").addClass("d-none");
		$("#active-2").addClass("d-none");
		document.getElementById("current-score-1").textContent = 0;
		document.getElementById("current-score-2").textContent = 0;
	}else{
	document.getElementById("final-score-"+activePlayer).textContent=total;
	scores=[];
	if(activePlayer === 1){
		$('#active-2').removeClass('d-none');
		$('#active-1').addClass('d-none');
		activePlayer = 2;
	}
	else{
		$('#active-1').removeClass('d-none');
		$('#active-2').addClass('d-none');
		activePlayer = 1;
	}
	}	
	
}

	
