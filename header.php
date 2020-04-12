<!DOCTYPE html>
<html>
<head>
	<title>ISE Attendance</title>

	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

	<link rel="stylesheet" href="css/main.css">
 	<link  rel="stylesheet" href="css/font.css">
 	<script src="js/jquery.js" type="text/javascript"></script>
	<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 	<link  rel="stylesheet" href="css/bootstrap-theme.min.css"/> 
  	<script src="js/bootstrap.min.js"  type="text/javascript"></script>
  	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>


</head>

<div class="container"></div>
<!-- <h2><div class="well text-center">ISE Attendance</div></h2>
 -->


<body>
<body >
    <!-- header start -->
    <div class="header">
        <div class="row">
       		<div class="col-lg-6">
        		<span class="logo">ISE Attendance Management</span>
        	</div>
        
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



</body>
</html>
