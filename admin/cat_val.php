<?php
	include("connection.php");
	if(isset($_GET['add'])){
		$cat_name=mysqli_real_escape_string($con,$_POST['cat_name']);
		$cat_status=mysqli_real_escape_string($con,$_POST['cat_status']);
		
		$sql=mysqli_query($con,"INSERT INTO `categories`(`cat_name`, `cat_status`) VALUES ('$cat_name','$cat_status')")or die(mysqli_error($con));
		
		if($sql){
			header("location:manage_categories.php?ins_success&&data=Category");
		}
	}
	else if(isset($_GET['update'])){
	
	}
	else if(isset($_GET['delete'])){
	
	}
?>