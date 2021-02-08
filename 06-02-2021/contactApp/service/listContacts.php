<?php
include_once 'configuration/core.inc.php';

if(isset($_GET['userId'])){
	$id = $_GET['userId'];
	$data = $con->selectByValue("contact_details","id",$id);
}

$result_per_page = 5;
$contactData=$con->selectAllData("contact_details");
$number_of_result = count($contactData);

$number_of_pages = ceil($number_of_result / $result_per_page);

if(!isset($_GET['page'])){
	$page = 1;
}else{
	$page = $_GET['page'];
}

$page_first_result = ($page - 1)*$result_per_page;

$data = $con->selectWithLimit("contact_details",$page_first_result,$result_per_page);

if($page>=2){   
    echo "<a href='index1.php?page=".($page-1)."'>  Prev </a>";   
}       
                   
for ($i=1; $i<=$total_pages; $i++) {   
    if ($i == $page) {   
        $pagLink .= "<a class = 'active' href='index1.php?page="  
                                                .$i."'>".$i." </a>";   
    }else{   
        $pagLink .= "<a href='index1.php?page=".$i."'>   
                                                ".$i." </a>";     
    }   
}      
  
if($page<$total_pages){   
    echo "<a href='index1.php?page=".($page+1)."'>  Next </a>";   
}  
?>