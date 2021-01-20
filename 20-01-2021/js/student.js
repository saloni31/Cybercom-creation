// Declaration of Student array
var studentArray;
studentArray = [];

// check whether studentData is there in localstorage
if(localStorage.getItem("StudentData"))
{
	studentArray = JSON.parse(localStorage.getItem("StudentData"));
}

// function to get data based on id
function getData(id){
	return document.getElementById(id).value;
}

// function will generate the object
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

// function calculates student percentage
function calcPercentage(marksArray){
	return Math.round((marksArray.reduce((a,b) => a+b)*100)/180);
}

// function calculates the grade based on the percentage
function calcGrade(percentage){
	return (percentage >= 75) ? "First Class with Distinction" : (percentage < 75 && percentage >= 60) ? "First Class" : (percentage < 60 && percentage >= 45) ? "Second Class" : "Pass Class";
}

// on form submit event object will be stored into the single array and then in local storage
document.getElementById("studentForm").addEventListener("submit",() => {
	
	if(studentArray === []){
		studentArray=[generateObject()];
	}
	else{
		studentArray.push(generateObject());
	}
	localStorage.setItem("StudentData",JSON.stringify(studentArray));

});
