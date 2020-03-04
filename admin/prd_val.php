<?php
	include("connection.php");
	if(isset($_GET['add'])){
			$product_title=mysqli_real_escape_string($con,$_POST['product_title']);
			$product_desc=mysqli_real_escape_string($con,$_POST['product_desc']);
			$product_image=mysqli_real_escape_string($con,$_POST['product_image']);
			$product_price=mysqli_real_escape_string($con,$_POST['product_price']);
			$product_qty=mysqli_real_escape_string($con,$_POST['product_qty']);
			$product_status=mysqli_real_escape_string($con,$_POST['product_status']);
			
		
			$sql=mysqli_query($con,"INSERT INTO `products`(`product_title`,  `product_desc`, `product_image`, `product_price`, `product_qty`,`product_status`) 
			VALUES ('$product_title','$product_desc','$product_image','$product_price','$product_qty','$product_status')")or die(mysqli_error($con));
			
			
			if($sql){
				header("location:manage_products.php?ins_success&&data=Category");
			}
	}
		
			else if(isset($_GET['update'])){
				$product_id = $_GET['product_id'];
				$product_title=mysqli_real_escape_string($con,$_POST['product_title']);
				$product_desc=mysqli_real_escape_string($con,$_POST['product_desc']);
				$product_image=mysqli_real_escape_string($con,$_POST['product_image']);
				$product_price=mysqli_real_escape_string($con,$_POST['product_price']);
				$product_qty=mysqli_real_escape_string($con,$_POST['product_qty']);
				$product_status=mysqli_real_escape_string($con,$_POST['product_status']);
		
				
				$sql=mysqli_query($con,"UPDATE `products` SET `product_title`='$product_title',`product_desc`='$product_desc'
				,`product_image`='$product_image',`product_price`='$product_price',`product_qty`='$product_qty',`product_status`='$product_status',
				 WHERE `product_id`='$product_id'")or die(mysqli_error($con));
				
				if($sql){
					header("location:manage_products.php?upd_success&&data=manager");
				}	
	
			}
			else if(isset($_GET['delete'])){
				$product_id=$_GET['product_id'];
				$sql=mysqli_query($con,"DELETE FROM `products` WHERE product_id='$product_id'")or die(mysqli_error($con));
				
			
				if($sql){
					header("location:manage_products.php?del_success&&data=manager");
	
				}
			}
		
		
	
?>