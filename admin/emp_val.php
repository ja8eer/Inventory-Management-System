
<?php
	include("inc/session.php");
	include("connection.php");
	if(isset($_GET['add'])){
			$passswd=mysqli_real_escape_string($con,$_POST['emp_password']);
			$cpasswd=mysqli_real_escape_string($con,$_POST['emp_cpassword']);
			$emp_name=mysqli_real_escape_string($con,$_POST['emp_name']);
			$emp_email=mysqli_real_escape_string($con,$_POST['emp_email']);
			$emp_phone=mysqli_real_escape_string($con,$_POST['emp_phone']);
			$emp_photo=mysqli_real_escape_string($con,$_POST['emp_photo']);
			$emp_pan=mysqli_real_escape_string($con,$_POST['emp_pan']);
			$emp_aadhar=mysqli_real_escape_string($con,$_POST['emp_aadhar']);
			
		
			$sql=mysqli_query($con,"INSERT INTO `employee`(`emp_name`,`emp_email`, `emp_phone`, `emp_photo`, `emp_pan`, `emp_aadhar`,`manager_id`) VALUES 
			('$emp_name','$emp_email','$emp_phone','$emp_photo','$emp_pan','$emp_aadhar','$login_id')")or die(mysqli_error($con));
			
			$last_id=mysqli_insert_id($con);
			$sql=mysqli_query($con,"INSERT INTO `login`(`name`, `email`, `phone`, `user_role`, `login_id`, `password`,`profile_pic`)
			VALUES ('$emp_name','$emp_email','$emp_phone','employee','$last_id','$passswd','$emp_photo')
			")or die(mysqli_error($con));
			//if($sql){
			//	header("location:add_employee.php?ins_success&&data=Category");
			//}
	}
		
			else if(isset($_GET['update'])){
				$emp_id = $_GET['emp_id'];
				$emp_name=mysqli_real_escape_string($con,$_POST['emp_name']);
				$emp_email=mysqli_real_escape_string($con,$_POST['emp_email']);
				$emp_phone=mysqli_real_escape_string($con,$_POST['emp_phone']);
				$emp_photo=mysqli_real_escape_string($con,$_POST['emp_photo']);
				$emp_pan=mysqli_real_escape_string($con,$_POST['emp_pan']);
				$emp_aadhar=mysqli_real_escape_string($con,$_POST['emp_aadhar']);
		
				
				$sql=mysqli_query($con,"UPDATE `employee` SET `emp_name`='$emp_name',`emp_email`='$emp_email'
				,`emp_phone`='$emp_phone',`emp_photo`='$emp_photo',`emp_pan`='$emp_pan',`emp_aadhar`='$emp_aadhar'
				 WHERE `emp_id`='$emp_id'")or die(mysqli_error($con));
				 
				 $sql=mysqli_query($con,"UPDATE `login` SET `name`='$emp_name',`email`='$emp_email',`phone`='$emp_phone',`profile_pic`='$emp_photo' WHERE `login_id`='$emp_id'")or die(mysqli_error($con));
		
		if($sql){
			header("location:add_employee.php?upd_success&&data=employee");
		}	
	
			}
			else if(isset($_GET['delete'])){
				echo $emp_id=$_GET['emp_id'];
				$sql=mysqli_query($con,"DELETE FROM `employee` WHERE `emp_id`='$emp_id'")or die(mysqli_error($con));
				
				$sql=mysqli_query($con,"DELETE FROM `login` WHERE `emp_id`='$emp_id'")or die(mysqli_error($con));
		
				if($sql){
					header("location:add_employee.php?del_success&&data=employee");
	
				}
			}
		
	
?>