/* Coding Challange 2 */

//Declaring required variables
var johnTeamScore, mikeTeamScore, johnTeamAverage, mikeTeamAverage, marryTeamScore, marryTeamAverage;

//Define variables
johnTeamScore = [116,94,123];
mikeTeamScore = [116,94,123];
marryTeamScore = [97,134,105];
johnTeamAverage = 0;
mikeTeamAverage = 0;
marryTeamAverage = 0;

//Calculate Average scores and store in appropriate variables
for (var i = 0; i < johnTeamScore.length; i++) {
	johnTeamAverage += johnTeamScore[i];
}

for (var i = 0; i < mikeTeamScore.length; i++) {
	mikeTeamAverage += mikeTeamScore[i];
}

for (var i = 0; i < marryTeamScore.length; i++) {
	marryTeamAverage += marryTeamScore[i];
}

//Find the winner of the Basket ball match and print the result

if(johnTeamAverage == mikeTeamAverage && mikeTeamAverage == marryTeamAverage){
	console.log("Match is draw between all teams");
}
else if(johnTeamAverage > mikeTeamAverage && johnTeamAverage > marryTeamAverage)
{
	console.log ("Winner of basket ball match is John's team with average score of " + johnTeamAverage);
	if(mikeTeamAverage == marryTeamAverage){
		console.log("Match is draw between Mike's team and Marry's team");
	}
}
else if(mikeTeamAverage > johnTeamAverage && mikeTeamAverage > marryTeamAverage){
	console.log("Winner of basket ball match is Mike's team with average score of " + mikeTeamAverage);
	if(johnTeamAverage == marryTeamAverage){
		console.log("Match is draw between John's team and Marry's team");
	}
}
else{
	console.log("Winner of basket ball match is Marry's team with average score of " + marryTeamAverage);
	if(mikeTeamAverage == johnTeamAverage){
		console.log("Match is draw between Mike's team and John's team");
	}
}

