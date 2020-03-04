a<!DOCTYPE HTML>
<html>
<head>
	<?php include("inc/head.php"); ?>
</head>
<body id="login">
  <div class="login-logo">
    <a href="index.html"><!--img src="images/logo.png" alt=""/--></a>
  </div>
  <h2 class="form-heading">recovery password</h2>
  <div class="app-cam">
	  <form method="post" action="">
		<input type="text" name="email" class="text" value="E-mail address" required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}">
		<div class="submit" ><input type="submit" name="btn_login" onclick="myFunction()" value="Submit"></div>
		
		
	</form>
	<?php
	include("connection.php");
	if(isset($_POST['btn_login'])){
		$email=mysqli_real_escape_string($con,$_POST['email']);
		
		$sql=mysqli_query($con,"SELECT * FROM  login WHERE email='$email'")or(mysqli_error($con));
		$row=mysqli_fetch_array($sql);
		
		if($row)
		{
				       
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

	}
	?>
  </div>
   <?php include("inc/footer.php"); ?>
</body>
</html>
