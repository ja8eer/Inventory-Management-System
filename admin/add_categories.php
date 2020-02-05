 
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
            <div class="row">
              <div class="col-md-6 col-md-offset-3">
                <h3>Add New Categories</h3>
                <hr/>
                <form name="" method="post" action="cat_val.php?add">
                  <div class="form-group">
                    <label>Enter Categories Name</label>
                    <input type="text" name="cat_name" class="form-control1" placeholder="Categories Name">
                  </div>

                  <div class="form-group">
                    <label>Enter Categories Status</label>
					<select name="cat_status" class="form-control">
                    <option>Active</option>
					<option>InActive</option>
                  </div>


                  <div class="form-group">
                    <input type="submit" name="btn_add" class="btn btn-success btn-block" value="Add New Categories">
                  </div>


                </form>
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
