<?php
	include("connection.php");
	if(isset($_GET['add'])){
		$passswd=mysqli_real_escape_string($con,$_POST['sup_password']);
		$cpasswd=mysqli_real_escape_string($con,$_POST['sup_cpassword']);
			$sup_name=mysqli_real_escape_string($con,$_POST['sup_name']);
			$sup_email=mysqli_real_escape_string($con,$_POST['sup_email']);
			$sup_phone=mysqli_real_escape_string($con,$_POST['sup_phone']);
			$sup_photo=mysqli_real_escape_string($con,$_POST['sup_photo']);
			$sup_pan=mysqli_real_escape_string($con,$_POST['sup_pan']);
			$sup_aadhar=mysqli_real_escape_string($con,$_POST['sup_aadhar']);
			$warehouse_id=mysqli_real_escape_string($con,$_POST['warehouse_id']);
		
			$sql=mysqli_query($con,"INSERT INTO `manager`(`manager_name`, `warehouse_id`, `manager_email`, `manager_phone`, `manager_photo`, `manager_pan`, `manager_aadhar`) VALUES ('$sup_name', '$warehouse_id', '$sup_email','$sup_phone','$sup_photo','$sup_pan','$sup_aadhar')")or die(mysqli_error($con));
			
			$last_id=mysqli_insert_id($con);
			$sql=mysqli_query($con,"INSERT INTO `login`(`name`, `email`, `phone`, `user_role`, `login_id`, `password`,`profile_pic`)
			VALUES ('$sup_name','$sup_email','$sup_phone','supervisor','$last_id','$sup_password','$sup_photo')
			")or die(mysqli_error($con));
			if($sql){
				header("location:supervisor.php?ins_success&&data=Category");
			}
	}
		
			else if(isset($_GET['update'])){
				$manager_id = $_GET['manager_id'];
				$sup_name=mysqli_real_escape_string($con,$_POST['sup_name']);
				$sup_email=mysqli_real_escape_string($con,$_POST['sup_email']);
				$sup_phone=mysqli_real_escape_string($con,$_POST['sup_phone']);
				$sup_photo=mysqli_real_escape_string($con,$_POST['sup_photo']);
				$sup_pan=mysqli_real_escape_string($con,$_POST['sup_pan']);
				$sup_aadhar=mysqli_real_escape_string($con,$_POST['sup_aadhar']);
		
				
				$sql=mysqli_query($con,"UPDATE `manager` SET `manager_name`='$sup_name',`manager_email`='$sup_email'
				,`manager_phone`='$sup_phone',`manager_photo`='$sup_photo',`manager_pan`='$sup_pan',`manager_aadhar`='$sup_aadhar',
				 WHERE `manager_id`='$manager_id'")or die(mysqli_error($con));
				 
				 $sql=mysqli_query($con,"UPDATE `login` SET `name`='$sup_name',`email`='$sup_email',`phone`='$sup_phone',`profile_pic`='$sup_photo' WHERE `login_id`='$manager_id'")or die(mysqli_error($con));
		
		if($sql){
			header("location:supervisor.php?upd_success&&data=manager");
		}	
	
			}
			else if(isset($_GET['delete'])){
				echo $manager_id=$_GET['manager_id'];
				$sql=mysqli_query($con,"DELETE FROM `manager` WHERE manager_id='$manager_id'")or die(mysqli_error($con));
				
				$sql=mysqli_query($con,"DELETE FROM `login` WHERE manager_id='$manager_id'")or die(mysqli_error($con));
		
				if($sql){
					header("location:supervisor.php?del_success&&data=manager");
	
				}
			}
		
	
?>