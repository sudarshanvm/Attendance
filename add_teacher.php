<?php 

	include("header.php");
	include("connection.php");

	// if form is submitted
	if(isset($_POST['submit']))
	{

		$password=md5($_POST[password]);
		$sql="insert into teacher_login(teacher_name,gender,email,password) values ('$_POST[t_name]','$_POST[gender]','$_POST[email]','$password')";
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

	
 ?>

 <div class="panel panel-default">
 	
 	<?php if($flag) { ?>
 	<div class="alert alert-success">
 		<strong>Data insertion successful!</strong>	
 	</div>
 	<?php } ?>
 	
 	<div class="panel-heading">
 		<h2>
 		<a href="add_teacher.php" class="btn btn-success">Add Teacher</a>
 		<a href="dash.php" class="btn btn-info pull-right">Home</a>
 		</h2>	

 	</div>

 	<div class="panel-body">
 		<form action="add_teacher.php" method="post">
 			<div class="form-group">
 				<label for="t_name">Teacher Name</label>
 				<input type="text" name="t_name" id="t_name" class="form-control" required>
 			</div>
 			<div class="form-group">
 				<label for="gender">Gender</label>
 				<input type="text" name="gender" id="gender" class="form-control" required>
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



 </div>