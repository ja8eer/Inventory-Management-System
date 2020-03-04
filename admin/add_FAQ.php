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
                <h3>FAQ</h3>
                <hr/>
                <form name="" method="post" action="faq_val.php?add">
                  <div class="form-group">
                    <label>Question</label>
                    <textarea rows="4" name="question" class="form-control1" placeholder="Ask Question" required ></textarea>
                  </div>

                  <div class="form-group">
                    <label>Answer</label>
					<textarea rows="10" name="answer" class="form-control1" placeholder="Answer" required ></textarea>
                  </div>

                  

                  <div class="form-group">
                    <input type="submit" name="btn_add" class="btn btn-success btn-block" value="Add New Retailer">
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
