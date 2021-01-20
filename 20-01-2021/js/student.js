var studentArray;
studentArray = [];


if(localStorage.getItem("StudentData"))
{
	studentArray = JSON.parse(localStorage.getItem("StudentData"));
}

function getData(id){
	return document.getElementById(id).value;
}

function generateObject(){
	let studentObj = {};
	studentObj.Id = getData("id");
	studentObj.Name = getData("name");
	studentObj.RollNo = getData("rollNo");
	studentObj.Java = parseInt(getData("java"));
	studentObj.Python = parseInt(getData("python"));
	studentObj.Php = parseInt(getData("php"));
	studentObj.JS = parseInt(getData("js"));
	studentObj.ASP = parseInt(getData("asp"));
	studentObj.Percentage = calcPercentage([studentObj.Java,studentObj.Python,studentObj.Php,studentObj.JS,studentObj.ASP]);
	studentObj.Grade = calcGrade(studentObj.Percentage);
	return studentObj;
}

function calcPercentage(marksArray){
	return Math.round((marksArray.reduce((a,b) => a+b)*100)/180);
	// return Math.round(((studentObj.Java + studentObj.Python + studentObj.Php + studentObj.JS + studentObj.ASP)*100)/180);
}

function calcGrade(percentage){
	if(percentage >= 75)
		return "First Class with Distinction";
	else if(percentage < 75 && percentage >= 60)
		return "First Class";
	else if(percentage < 60 && percentage >= 45)
		return "Second Class";
	else
		return "Pass Class";
}

document.getElementById("studentForm").addEventListener("submit",(event) => {
	
	// event.preventDefault();
	studentArray.push(generateObject());
	localStorage.setItem("StudentData",JSON.stringify(studentArray));

});
