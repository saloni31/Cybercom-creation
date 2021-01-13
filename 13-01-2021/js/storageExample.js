/********************************
Local Storage and Session Storage
*********************************/


// check whether local storage and session storage is enable or not
if((typeof localStorage === undefined) && (typeof sessionStorage === undefined)){
	alert("Please allow access to local storage and session storage");
}
else{
	document.getElementById("myBtn").addEventListener("click", function(){
		var count=1;
		if(localStorage.getItem('counter') !== null){ // check whether counter variable is sored in localstorage or not
			localStorage.setItem('counter', parseInt(localStorage.getItem('counter'))+1);
		}else{
			localStorage.setItem('counter', count);		// store counter variable in local storage
		}
	

		if(sessionStorage.getItem('counter') !== null){ // check whether counter variable is sored in sessionStorage or not
			sessionStorage.setItem('counter', parseInt(sessionStorage.getItem('counter'))+1);
		}
		else{
			sessionStorage.setItem('counter', count);	// store counter variable in session storage
		}
	
		// Pronts the storage data on window
		document.getElementById('local').innerHTML="Value for the counter is: "+localStorage.getItem('counter');
		document.getElementById('session').innerHTML="Value for the counter is: "+sessionStorage.getItem('counter');
	});


		document.getElementById('destroy').addEventListener('click',function(){
		// clear both the storage
		localStorage.clear();
		sessionStorage.clear();
		document.getElementById('destroyMsg').innerHTML="Local storage is now clear";
	});
}
