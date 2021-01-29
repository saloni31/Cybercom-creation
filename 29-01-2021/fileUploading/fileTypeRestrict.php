<?php
if(isset($_POST['submit'])){
	$name = $_FILES['file']['name'];
	$tmp_name = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$type = $_FILES['file']['type'];
	$max_size = 2097152;
	$file_extension = strtolower(substr($name, strpos($name,".")+1));

	if(isset($name)){
		if(!empty($name)){
			$location = "uploads/".$name;

			if(($file_extension === "jpeg" || $file_extension === "jpg") && $type === "image/jpeg" && $file_size <= $max_size){
				if(move_uploaded_file($tmp_name, $location)){
					echo "Uploaded.";
				}else{
					echo "Problem uploading file.";
				}
			}else{
				echo "File size must be 2 mb or less and format is jpg/jpeg";
			}

			
		}else{
			echo "Please select file";
		}
	}
}
?>

<form action="fileTypeRestrict.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file"><br><br>
	<input type="submit" name="submit" value="Submit">
</form>