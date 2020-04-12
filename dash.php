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





<!-- header  -->
<body >
    <!-- header start -->
    <div class="header">
        <div class="row">
       		<div class="col-lg-6">
        		<span class="logo">ISE Attendance Management</span>
        	</div>
        
<?php 

	include("connection.php");

	//include_once 'databaseCon.php';
	session_start();
	if (!(isset($_SESSION['username']))  || ($_SESSION['key']) != '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39') 
	{
	     session_destroy();
	     header("location:index.php");
	} 
	else 
	{
	     $name     = $_SESSION['name'];
	     $username = $_SESSION['username'];
	    
	     echo '<span class="pull-right top title1" ><span style="color:white"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <span class="log log1" style="color:lightyellow">' . $name . '&nbsp;&nbsp;|&nbsp;&nbsp;<a href="logout.php?q=account.php" style="color:lightyellow"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Logout</button></a></span>';
	 }

 ?>


    </div>
</div>


<!-- Admin Dashboard -->
 <div class="panel panel-default" >
 		
 	<div class="panel-heading" >
 		<h2 style="text-align:center;">Dashboard</h2>
 		<h2>
 		<a href="add_teacher.php" class="btn btn-primary">Add Teacher</a>
 		<a href="add.php" class="btn btn-primary">Add Student</a>
 		<a href="teachers_list.php" class="btn btn-primary">Display Teachers List</a>
 		<a href="students_list.php" class="btn btn-primary">Display Students List</a>
 		<a href="view.php" class="btn btn-primary">View Students Attendance</a>
 		<a href="dash.php" class="btn btn-info pull-right">Home</a>
 		</h2>	

 	</div>
 </div>

 <style type="text/css">
 	
	.center 
	{
	  display: block;
	  margin-left: auto;
	  margin-right: auto;
	  width: 50%;
	}

 </style>

 <body style="background:#f2f2f2;">
 	
 <div class="container" style="background: #f2f2f2;">
  <div class="panel panel-default">
  	<h2 style="text-align:center;"><strong>About ISE Department</strong></h2>
  	<br><br>
  	<img src="images/bg.jpg" alt="ISE Dept" class="center" style="height:20%; width:50%;" >
    <div class="panel-body">
    	<br><br><br>
    	<p>Department of Information Science and Engineering (ISE) at RVCE was established in the year 2000. The department offers Bachelor of Engineering (B.E.) programme through autonomous scheme and M.Tech. programmes in Software Engineering and Information Technology which has been granted autonomous status from the year 2016. The ISE UG and M. Tech. in Information Technology Programmes are accredited by NBA.</p>
		<p>The department also offers Ph. D. degree in various specializations of Information Science, Software Engineering and related areas.  The areas of specialization in the department include Wireless Sensor Networks, Big Data Analytics, Image Processing, Software Engineering and Natural Language Processing.</p>

    </div>
  </div>
</div>

	
 </body>