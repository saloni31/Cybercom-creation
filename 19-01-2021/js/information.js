document.getElementById("submit").addEventListener("click",() => {
	
	let dob= document.getElementById('day').value + "-" + document.getElementById('month').value + "-" + document.getElementById('year').value;
	let str="<tr><td> First Name </td> <td>"+ document.getElementById('firstName').value + "</td></tr>";
	str += "<tr><td> Last Name </td> <td>"+ document.getElementById('lastName').value + "</td></tr>";
	str += "<tr><td> Date of birth </td> <td>"+ dob + "</td></tr>";
	str += "<tr><td> Gender </td> <td>"+ document.getElementById('gender').value + "</td></tr>";
	str += "<tr><td> Email </td> <td>"+ document.getElementById('email').value + "</td></tr>";
	str += "<tr><td> Password </td> <td>"+ document.getElementById('password').value + "</td></tr>";
	str += "<tr><td> Security Question </td> <td>"+ document.getElementById('question').value + "</td></tr>";
	str += "<tr><td> Security Answer </td> <td>"+ document.getElementById('answer').value + "</td></tr>";
	str += "<tr><td> Address </td> <td>"+ document.getElementById('address').value + "</td></tr>";
	str += "<tr><td> City </td> <td>"+ document.getElementById('city').value + "</td></tr>";
	str += "<tr><td> State </td> <td>"+ document.getElementById('state').value + "</td></tr>";
	str += "<tr><td> Zip Code </td> <td>"+ document.getElementById('zip').value + "</td></tr>";
	str += "<tr><td> Phone number </td> <td>"+ document.getElementById('phone').value + "</td></tr>";
	$("#tbl").removeClass("d-none");
	document.getElementById("info").innerHTML = str;
});