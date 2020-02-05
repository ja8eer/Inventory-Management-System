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
                <h3>Add New Warehouse</h3>
                <hr/>
                <form name="" method="post" action="war_val.php?add">
                  <div class="form-group">
                    <label>warehouse name</label>
                    <input type="text" name="warehouse_name" class="form-control1" placeholder="warehouse Name">
                  </div>

                  <div class="form-group">
                    <label>Enter warehouse Email</label>
                    <input type="email" name="warehouse_email" class="form-control1" placeholder="warehouse Email">
                  </div>

                  <div class="form-group">
                    <label>Enter warehouse Phone</label>
                    <input type="number" name="warehouse_phone" class="form-control1" placeholder="warehouse Phone">
                  </div>

                  <div class="form-group">
                    <label>Enter warehouse Address</label>
                    <textarea rows="4" name="warehouse_address" class="form-control1" placeholder="warehouse Address"></textarea>
                  </div>




                  <div class="form-group">
                    <input type="submit" name="btn_add" class="btn btn-success btn-block" value="Add New warehouse">
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
