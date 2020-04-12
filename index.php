<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <link rel="icon" href="favicon.ico" type="image/icon" sizes="16x16">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> ISE Attendance </title>
   
  <?php 
      include("header.php");
      include("connection.php");

   ?>
   
  </head>

<body >


  <!-- header -->
  <!-- header start -->
    <div class="header">
        <div class="row">
          
        
          <div class="col-md-50 col-md-offset-2">
        
        <!-- modalform -->
          <a href="#" class="btn btn-primary logb pull-right"  data-toggle="modal" data-target="#login"> <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1" ><b> Admin Login </b> </span></a>

          <a href="#" class="btn btn-primary logb pull-right"  data-toggle="modal" data-target="#myModal"> <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1" align:right><b> Teacher Login </b> </span></a>

          </div>

          <div class="col-md-2 col-md-offset-4">
        <!-- modal code -->
          <div class="modal fade" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content title1">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                  </button>
                  <h4 class="modal-title title1"><span style="color:darkblue;font-size:12px;font-weight: bold">Login to your Account</span>
                  </h4>
                </div>
                <div class="modal-body">
                  <form class="form-horizontal" action="login.php" method="POST">
                    <fieldset>
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="username"></label>  
                        <div class="col-md-6">
                          <input id="username" name="username" placeholder="email id" class="form-control input-md" type="username">

                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="password"></label>
                        <div class="col-md-6">
                          <input id="password" name="password" placeholder="Password" class="form-control input-md" type="password">

                        </div>
                      </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Log in</button>
                    </fieldset>
                  </form>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>

   
<!-- mid form start -->
  <!-- <div class="bg1"></div>
 --><!-- mid form end -->
      <p class="rvcelogo">
       <img src="images/logo.jpeg" align="center">
      </p>

<?php 
    include("footer.php");
 ?>

</body>

</html>