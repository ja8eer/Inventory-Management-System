<?php
	include("connection.php");
	if(isset($_GET['add'])){
		$question=mysqli_real_escape_string($con,$_POST['question']);
		$answer=mysqli_real_escape_string($con,$_POST['answer']);
		
		$sql=mysqli_query($con,"INSERT INTO `faq`(`faq_question`, `faq_answer`) VALUES ('$question','$answer')")or die(mysqli_error($con));
		
		if($sql){
			header("location:manage_categories.php?ins_success&&data=Category");
		}
	}
	else if(isset($_GET['update'])){
	
	}
	else if(isset($_GET['delete'])){
	
	}
?>