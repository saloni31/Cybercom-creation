<?php
include_once '../configuration/core.inc.php';
include_once 'errors.php';

if(isset($_POST['create'])){
	if(validateBlog()){
		$key = ['title','content','url','publishDate','category'];
		$data = getPostData($key);
		array_push($key, 'image','userId');
		$name = time()."_".$_FILES['image']['name'];
		$tmp_name = $_FILES['image']['tmp_name'];
		$folder = "../images/blogs/".$name;
		array_push($data,$folder,$_SESSION['userId']);
		if($con->insert("blog_post",$key,$data) && move_uploaded_file($tmp_name, $folder)){
			header("Location: ../home.php");
		}
	}
}

if(isset($_POST['update'])){
	if(validateBlog()){
		$key = ['title','content','url','publishDate','category'];
		$data = getPostData($key);
		array_push($key, 'image','userId');
		$name = time()."_".$_FILES['image']['name'];
		$tmp_name = $_FILES['image']['tmp_name'];
		$folder = "../images/blogs/".$name;
		$id=$_POST['id'];
		array_push($data,$folder,$_SESSION['userId']);
		if($con->update("blog_post",$key,$data,"blogId",$id) && move_uploaded_file($tmp_name, $folder)){
			header("Location: ../home.php");
		}
	}
}

if(isset($_POST['id'])){
	if($con->delete("blog_post","blogId",$_POST['id'])){
		echo "Success";
	}
}
?>