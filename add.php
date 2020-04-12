<?php 

	include("header.php");
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

	
 ?>







 <div class="panel panel-default">
 	
 	<?php if($flag) { ?>
 	<div class="alert alert-success">
 		<strong>Data insertion successful!</strong>	
 	</div>
 	<?php } ?>
 	
 	<div class="panel-heading">
 		<h2>
 		<a href="add.php" class="btn btn-success">Add Student</a>
 		<a href="index1.php" class="btn btn-info pull-right">Go back</a>
 		</h2>	

 	</div>

 	<div class="panel-body">
 		<form action="add.php" method="post">
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
 </div>