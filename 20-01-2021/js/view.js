var str="";
var objArray = JSON.parse(localStorage.getItem("data"));

for(x in objArray){
	
	str +="<tr><td>" + objArray[x]['name'] + "</td>";
	str += "<td>" + objArray[x]['email'] + "</td>";
	str += "<td>" + objArray[x]['birthDate'] + "</td></tr>";
	
}

document.getElementById("view").innerHTML = str;