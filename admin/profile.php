<?php include("inc/session.php"); ?> 
<!DOCTYPE HTML>
<html>
<head>
   <?php include("inc/head.php"); ?> 
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <?php include("inc/menu.php"); ?>
        <div id="page-wrapper">
        <div class="graphs">
     	<div class="col_3">
		<h2><u>My Profile</u></h2>
		<div class="row">
									<div class="col-md-4">
										<a href="" data-toggle="modal" data-target="#myModal">
											<?php
												if($user_profile == "")
												{
													echo '<img src="images/smile.png" class="img-responsive">';
												}
												else
												{
													echo '<img src="images/profiles/'.$user_profile.'" class="img-responsive" style="width:100%;">';
												}
											?>
											
										</a>

										<!-- Modal -->
										<div id="myModal" class="modal fade" role="dialog">
										  <div class="modal-dialog">

										    <!-- Modal content-->
										    <div class="modal-content">
										      <div class="modal-header">
										        <button type="button" class="close" data-dismiss="modal">&times;</button>
										        <h4 class="modal-title">Update Profile Picture</h4>
										      </div>
										      <div class="modal-body">
										        <form name="" method="post" action="change_pic.php" enctype="multipart/form-data">
										        	<div class="form-group">
										        		<label>Choose Picture</label>
										        		<input type="file" name="photo" class="form-control" accept="image/*">
										        	</div>
										      </div>
										      <div class="modal-footer">
										      	<button type="submit" name="change_pic" class="btn btn-primary">Update Profile</button>
										        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										    </form>
										        
										      </div>
										    </div>

										  </div>
										</div>
									</div>

									<div class="col-md-8">
										<?php
											if(isset($_GET['profile_updated']))
											{
												echo '<div class="alert alert-success">
														<a href="" class="close" data-dismiss="alert">&times;</a>
														<p>Profile Updated Successfully...!!!</p>
													</div>';
											}
										?>
										<form name="" method="post" action="">
											<div class="form-group">
												<label>Name</label>
												<input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $user_name; ?>">
											</div>

											<div class="form-group">
												<label>Email</label>
												<input type="email" name="email" class="form-control" placeholder="Email Address" value="<?php echo $user_email; ?>">
											</div>

											<div class="form-group">
												<label>Phone</label>
												<input type="number" name="phone" class="form-control" placeholder="Phone Number" value="<?php echo $user_phone; ?>">
											</div>
											
				

											<div class="form-group">
												<input type="submit" name="btn_update_profile" readonly="" class="btn btn-warning btn-block" value="Update Profile">
											</div>
										</form>

										<?php
											if(isset($_POST['btn_update_profile']))
											{
												$name = mysqli_real_escape_string($con, $_POST['name']);
												$email = mysqli_real_escape_string($con, $_POST['email']);
												$phone = mysqli_real_escape_string($con, $_POST['phone']);


												$sql = mysqli_query($con, "UPDATE `login` SET `name`='$name',`email`= '$email',`phone`= '$phone' WHERE id = '$user_id'") or die(mysqli_error($con));

												if($sql)
												{
													header("location:profile.php?profile_updated");
												}
											}


										?>

									</div>
								</div>
        	
      </div>
      
		<div class="clearfix"> </div>
	    </div>
		<?php include("inc/footer.php"); ?>
		</div>
       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <?php include("inc/bottom.php"); ?>
</body>
</html>