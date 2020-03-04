<?php
	include("connection.php");
	if(isset($_GET['add'])){
		$warehouse_name=mysqli_real_escape_string($con,$_POST['warehouse_name']);
		$warehouse_address=mysqli_real_escape_string($con,$_POST['warehouse_address']);
		$warehouse_email=mysqli_real_escape_string($con,$_POST['warehouse_email']);
		$warehouse_phone=mysqli_real_escape_string($con,$_POST['warehouse_phone']);
		
		$sql=mysqli_query($con,"INSERT INTO `warehouse`(`warehouse_name`, `warehouse_address`, `warehouse_email`, `warehouse_phone`) VALUES ('$warehouse_name', '$warehouse_address', '$warehouse_email', '$warehouse_phone')")or die(mysqli_error($con));
		if($sql){
			header("location:manage_warehouse.php?ins_success&&data=Category");
		}
	}
	else if(isset($_GET['update'])){
		$warehouse_id = $_GET['warehouse_id'];
		$warehouse_name=mysqli_real_escape_string($con,$_POST['warehouse_name']);
		$warehouse_address=mysqli_real_escape_string($con,$_POST['warehouse_address']);
		$warehouse_email=mysqli_real_escape_string($con,$_POST['warehouse_email']);
		$warehouse_phone=mysqli_real_escape_string($con,$_POST['warehouse_phone']);
		
		$sql=mysqli_query($con,"UPDATE `warehouse` SET `warehouse_name`='$warehouse_name',`warehouse_address`='$warehouse_address',
		`warehouse_email`='$warehouse_email',`warehouse_phone`='$warehouse_phone' WHERE `warehouse_id`='$warehouse_id'")or die(mysqli_error($con));
		
		if($sql){
			header("location:supervisor.php?upd_success&&data=warehouse");
		}	
		
	
	}
	else if(isset($_GET['delete'])){
		$cat_id=$_GET['warehouse_id'];
		$sql=mysqli_query($con,"DELETE FROM `warehouse` WHERE warehouse_id='$cat_id'")or die(mysqli_error($con));
		
		if($sql){
			header("location:manage_warehouse.php?del_success&&data=warehouse");
		}
	
	}
?>