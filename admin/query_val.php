<?php
	include("inc/session.php");
	include("connection.php");
	if(isset($_GET['add'])){
		
			$title=mysqli_real_escape_string($con,$_POST['title']);
			$message=mysqli_real_escape_string($con,$_POST['message']);
			$date=date('Y-m-d H:i:s');
			
		
			$sql=mysqli_query($con,"INSERT INTO `queries`(`title`, `message`, `query_date`, `user_id`) 
			VALUES ('$title','$messgae','$date','$login_id')")or die(mysqli_error($con));
			
			
			if($sql){
				header("location:ask_query.php?ins_success&&data=Category");
			}
	}
		
			else if(isset($_GET['update'])){
				$manager_id = $_GET['manager_id'];
				$sup_name=mysqli_real_escape_string($con,$_POST['sup_name']);
				$sup_email=mysqli_real_escape_string($con,$_POST['sup_email']);
				$title=mysqli_real_escape_string($con,$_POST['title']);
				$message=mysqli_real_escape_string($con,$_POST['message']);
				$sup_pan=mysqli_real_escape_string($con,$_POST['sup_pan']);
				$sup_aadhar=mysqli_real_escape_string($con,$_POST['sup_aadhar']);
		
				
				$sql=mysqli_query($con,"UPDATE `manager` SET `manager_name`='$sup_name',`manager_email`='$sup_email'
				,`manager_phone`='$title',`manager_photo`='$message',`manager_pan`='$sup_pan',`manager_aadhar`='$sup_aadhar',
				 WHERE `manager_id`='$manager_id'")or die(mysqli_error($con));
				 
				 $sql=mysqli_query($con,"UPDATE `login` SET `name`='$sup_name',`email`='$sup_email',`phone`='$title',`profile_pic`='$message' WHERE `login_id`='$manager_id'")or die(mysqli_error($con));
		
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