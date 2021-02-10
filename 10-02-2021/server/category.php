<?php
include_once '../configuration/core.inc.php';
include_once 'errors.php';


if(isset($_POST['create'])){
	if(validateCategory()){
		$keys = ['title','content','url','metaTitle','category'];
		$data = getPostData($keys);
		$keys[4]="parentCategoryId";
		array_push($keys, 'image');
		$name = time()."_".$_FILES['image']['name'];
		$tmp_name = $_FILES['image']['tmp_name'];
		$folder = "../images/categories/".$name;
		array_push($data,$folder);
		echo $keys[2]."=".$data[2];
			if(count($con->selectByValue("category",$keys[2],$data[2])) > 1){
				$_SESSION['urlErr'] = "URL already exist.";
				header("Location: ../createCategory.php");
			}else{
				if($con->insert("category",$keys,$data) && move_uploaded_file($tmp_name, $folder)){
					header("Location: ../categories.php");
				}else{
					echo "Problem";
				}
			}
			
		}else{
			header("Location: ../createCategory.php");
		}
		
}

if(isset($_POST['update'])){
	if(validateCategory()){
		$keys = ['title','content','url','metaTitle','category'];
		$data = getPostData($keys);
		$keys[4]="parentCategoryId";
		array_push($keys, 'image');
		$name = time()."_".$_FILES['image']['name'];
		$tmp_name = $_FILES['image']['tmp_name'];
		$folder = "../images/categories/".$name;
		array_push($data,$folder);
		$id = $_POST['id'];
		if($con->update("category",$keys,$data,"categoryId",$id) && move_uploaded_file($tmp_name, $folder)){
			header("Location: ../categories.php");
		}
	}else{
		header("Location: ../updateCategory.php");
	}
}

if(isset($_POST['id'])){
	if($con->delete("category","categoryId",$_POST['id'])){
		echo "Success";
	}
}
?>