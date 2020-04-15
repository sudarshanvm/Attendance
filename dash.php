<!DOCTYPE html>
<html>
<head>
	<title>Admin- ISE Attendance</title>

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
<body  style="background:#fff;">
	<div class="header">
		<div class="row">
			<div class="col-lg-6">
				<span class="logo">ISE Attendance Management</span>
			</div>


        <!-- verify admin login and display logout button -->
	<?php
		include_once 'connection.php';
		session_start();
		if (!(isset($_SESSION['username']))  || ($_SESSION['key']) != '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39') {
		    session_destroy();
		    header("location:index.php");
		} else {
		    $name     = $_SESSION['name'];
		    $username = $_SESSION['username'];
		    
		    include_once 'connection.php';
		    echo '<span class="pull-right top title1" ><span style="color:white"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <span class="log log1" style="color:lightyellow">' . $username . '&nbsp;&nbsp;|&nbsp;&nbsp;<a href="logout.php?q=account.php" style="color:lightyellow"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Logout</button></a></span>';
		}
	?>
		</div>	
	</div>


    </div>
</div>



<!-- 
Navigation bar -->

<nav class="navbar navbar-default title1">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="dash.php?q=0"><b>Dashboard</b></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php
				if (@$_GET['q'] == 0)
   					echo 'class="active"';
			?>>
		<a href="dash.php?q=0">Home<span class="sr-only">(current)</span></a></li>
       
        
        <li <?php
				if (@$_GET['q'] == 1)
    				echo 'class="active"';
			?>>
		<?php if($username=='admin') echo'<a href="dash.php?q=1">Add Teacher</a>';?></li>
    	
    	<li <?php
				if (@$_GET['q'] == 2)
  					echo 'class="active"';
			?>>
		<a href="dash.php?q=2">Add Student</a></li>
        
        <li <?php
				if (@$_GET['q'] == 3)
  					echo 'class="active"';
			?>>
		<a href="dash.php?q=3">Teachers' List</a></li>
       
        <li <?php
				if (@$_GET['q'] == 4)
  					echo 'class="active"';
			?>>
		<a href="dash.php?q=4">Students' List</a></li>

		<li <?php
				if (@$_GET['q'] == 5)
  					echo 'class="active"';
			?>>
		<a href="dash.php?q=5">View  Attendance</a></li>

		
		<!--  -->

		<li <?php
				if (@$_GET['q'] == 7)
  					echo 'class="active"';
			?>>
		<?php if($username!='admin') echo'<a href="dash.php?q=7">Take attendance</a>'; ?></li>

		<div class=".d-none">
			<li <?php
				if (@$_GET['q'] == 6)
  					echo 'class="active"';
			?>>
			<a  href="dash.php?q=6"></a></li>
		</div>
		



      </ul>

    </div>
  </div>
</nav>
<!-- Navigation Bar Completed -->



<div class="container">
	<div class="row">
		<div class="col-lg-12">




<!-- Home section -->
<?php 
	if(@$_GET['q']==0)
	{
		echo "<style type='text/css'>
 	
				.center 
				{
				  display: block;
				  margin-left: auto;
				  margin-right: auto;
				  width: 50%;
				}
			 </style>
			 <body style='background:#000;'>
 	
			 <div class='container' style='background: #fff'>
			  <div class='panel panel-default' style='background:#f2ffff;''>
			  	<h2 style='text-align:center;'><strong>About ISE Department</strong></h2>
			  	<br><br>
			  	<img src='images/bg.jpg' alt='ISE Dept image' class='center' style='height:20%; width:50%;' >
			    <div class='panel-body'>
			    	<br><br><br>
			    	<p>Department of Information Science and Engineering (ISE) at RVCE was established in the year 2000. The department offers Bachelor of Engineering (B.E.) programme through autonomous scheme and M.Tech. programmes in Software Engineering and Information Technology which has been granted autonomous status from the year 2016. The ISE UG and M. Tech. in Information Technology Programmes are accredited by NBA.</p>
					<p>The department also offers Ph. D. degree in various specializations of Information Science, Software Engineering and related areas.  The areas of specialization in the department include Wireless Sensor Networks, Big Data Analytics, Image Processing, Software Engineering and Natural Language Processing.</p>

			    </div>
			  </div>
			</div>
			";

	}

?> 
<!-- home section completed -->




<!-- Add Teacher -->
<?php  
	if(@$_GET['q']==1)
	{
		include("connection.php");
		
		// if form is submitted
		if(isset($_POST['submit']))
		{

			$password=md5($_POST[password]);
			$sql="insert into teacher_login(teacher_name,gender,subject,email,password) values ('$_POST[t_name]','$_POST[gender]','$_POST[subject]','$_POST[email]','$password')";
			$res=mysqli_query($con,$sql);
			if($res)
			{
				$flag=1;	
			}
			else
			{
				echo"Error: could not add teacher to the database." . mysqli_error($con);
			}
	  	}


	echo '<div class="panel panel-default">
 	
 	<?php if($flag) { ?>
 	<div class="alert alert-success">
 		<strong>Data insertion successful!</strong>	
 	</div>
 	<?php } ?>
 	
 	<div class="panel-heading">
 		<h2>
 		<a href="dash.php?q=1" class="btn btn-success">Add Teacher</a>
 		<a href="dash.php?q=0" class="btn btn-info pull-right">Home</a>
 		</h2>	

 	</div>

 	<div class="panel-body">
 		<form action="dash.php?q=1" method="post">
 			<div class="form-group">
 				<label for="t_name">Teacher Name</label>
 				<input type="text" name="t_name" id="t_name" class="form-control" required>
 			</div>
 			<div class="form-group">
 				<label for="gender">Gender</label>
 				<input type="text" name="gender" id="gender" class="form-control" required>
 			</div>
 			<div class="form-group">
 				<label for="subject">Subject</label>
 				<input type="text" name="subject" id="subject" class="form-control" required>
 			</div>
 			<div class="form-group">
 				<label for="Email">Email</label>
 				<input type="email" name="email" id="email" class="form-control" required>
 			</div>
 			<div class="form-group">
 				<label for="passwprd">Password</label>
 				<input type="password" name="password" id="password" class="form-control" required>
 			</div>
 			<div class="form-group">
 				<input type="submit" name="submit" value="submit" class="btn btn-primary" required>
 			</div>
 		</form>
 	</div>
 </div>';
 	}
?>
<!-- Add teacher completed -->



<!-- Add student -->
<?php  
	
	if(@$_GET['q']==2)
	{

		include("connection.php");

		// if form is submitted
		if(isset($_POST['submit']))
		{

			$sql="insert into student(name,usn) values ('$_POST[name]','$_POST[usn]')";
			$res=mysqli_query($con,$sql);
			if($res)
			{
				$flag=1;	
			}
			else
			{
				echo"Error: could not add student to the database." . mysqli_error($con);
			}
	  	}

	  	echo '<div class="panel panel-default">
 	
			<?php if($flag) { ?>
		 	<div class="alert alert-success">
		 		<strong>Data insertion successful!</strong>	
		 	</div>
		 	<?php } ?>
		 	
		 	<div class="panel-heading">
		 		<h2>
		 		<a href="dash.php?q=2" class="btn btn-success">Add Student</a>
		 		</h2>	

		 	</div>

		 	<div class="panel-body">
		 		<form action="dash.php?q=2" method="post">
		 			<div class="form-group">
		 				<label for="name">Student Name</label>
		 				<input type="text" name="name" id="name" class="form-control" required>
		 			</div>
		 			<div class="form-group">
		 				<label for="name">USN</label>
		 				<input type="text" name="usn" id="usn" class="form-control" required>
		 			</div>
		 			<div class="form-group">
		 				<input type="submit" name="submit" value="submit" class="btn btn-primary" required>
		 			</div>
		 		</form>
		 	</div>
		 </div>';
	}
?>
<!-- Add Student completed -->




<!-- View ISE Teachers List -->
<?php 	
	if(@$_GET['q']==3)
	{
		include("teachers_list.php");						
	}
?>



<!-- View ISE Students List -->
<?php 

	if(@$_GET['q']==4)
	{
			include("students_list.php");
	}

?>



<!-- View Students Attendance(select a date) -->
<?php  
	if(@$_GET['q']==5)
	{
		include("view.php");
	}
?>


<!-- display attendance -->
<?php  
	if(@$_GET['q']==6)
	{
		
		echo '<div class="panel-heading">
		 		<h2>
		 		<a href="dash.php?q=5" class="btn btn-success">Enter a different date</a>
		 		<a href="dash.php?q=0" class="btn btn-info pull-right">Home</a>
		 		</h2>	
		 	</div>';

		include("display_attendance.php");
		



	}
?>

<!-- display attendance -->
<?php  
	if(@$_GET['q']==7)
	{
		
		include("connection.php");
	
		include("index1.php");

	}
?>
 
	
 </body>