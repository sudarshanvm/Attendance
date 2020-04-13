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
          <a href="#" class="btn btn-primary logb pull-right"  data-toggle="modal" data-target="#login"> <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1" ><b> Login </b> </span></a>

          <!-- <a href="#" class="btn btn-primary logb pull-right"  data-toggle="modal" data-target="#myModal"> <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1" align:right><b> Teacher Login </b> </span></a> -->

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
                  <form class="form-horizontal" action="login.php?q=index.php" method="POST">
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



<!-- For  login functionality -->
<div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:darkblue;font-size:12px;font-weight: bold">Login to Your Account</span></h4>
      </div>
      <div class="modal-body title1">
        <div class="row">
          <div class="col-md-3">
          </div>
        <div class="col-md-6">
            <form role="form" method="post" action="admin.php?q=index.php">
            <div class="form-group">
                  <input type="text" name="uname" maxlength="20"  placeholder="Username" class="form-control"/> 
            </div>
            <div class="form-group">
                    <input type="password" name="password" maxlength="30" placeholder="Password" class="form-control"/>
            </div>
            <div class="form-group" align="center">
                    <input type="submit" name="login" value="Login" class="btn btn-primary" />
            </div>
            </form>
        </div>
       <div class="col-md-3">
       </div>
       </div>
      </div>
    </div>
  </div>
</div>




   
<!-- mid form start -->
  <!-- <div class="bg1"></div>
 --><!-- mid form end -->
      <!-- <h2 align="center">Project: <strong>Attendance Management System For ISE, RVCE</strong></h2> -->
      <div class="panel panel-heading" style="background:#ffffff">
      <h2 align="center"><strong>Attendance Management System For ISE</strong></h2>

      <div class="panel panel-body" >
        <p><b>Team members:</b></p>
        <table class="table table-striped" align="center">
          <tr>
          <th>Name</th>
          <th>USN</th>
          </tr>

          <tr>
            <td>SUDARSHAN</td><td>1RV17IS049</td>
          </tr>
          <tr>
            <td>SHREYAS S</td><td>1RV17IS042</td>
          </tr>
          <tr>
            <td>ROHITH S YADAV</td><td>1RV17IS033</td>
          </tr>
          <tr>
            <td>ABHA ANAND</td><td>1RV17IS001</td>
          </tr>
        </table>
          


<?php 
    include("footer.php");
 ?>

</body>

</html>