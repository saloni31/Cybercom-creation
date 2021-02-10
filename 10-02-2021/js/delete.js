const deleteCategory = (id) => {
	if(confirm("Are you sure want to delete this contact?") === true){
		$.ajax({
			url : "server/category.php",
			type : "POST",
			data : {'id':id},
			success : (response) => {
				alert("Category Deleted successfully.");
				window.location.reload(true);
			}
		});
	}
}

const deleteBlog = (id) => {
	if(confirm("Are you sure want to delete this contact?") === true){
		$.ajax({
			url : "server/blog.php",
			type : "POST",
			data : {'id':id},
			success : (response) => {
				alert("Blog Deleted successfully.");
				window.location.reload(true);
			}
		});
	}
}