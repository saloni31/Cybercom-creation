const deleteContact = (id) => {
	if(confirm("Are you sure want to delete this contact?") === true){
		$.ajax({
			url : "service/deleteContact.php",
			type : "POST",
			data : {'id':id},
			success : (response) => {
				$("#msgDiv").removeClass("d-none");
				$("#message").html(response);
			}
		});
	}
}