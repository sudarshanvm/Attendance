<!DOCTYPE html>
<html>

<head>
	<title>ISE Attendance</title>
	
</head>


<body>

</body>
</html>


<?php 

	include("connection.php");
	
	$flag=0;
	if(isset($_POST['submit']))
	{
		
		//attendance update feature to be added
		
			foreach($_POST['attendance_status'] as $id=>$attendance_status)
			{

				$student_name=$_POST['names'][$id];
				$student_usn=$_POST['usns'][$id];
				$current_date=date("Y-m-d");
				// $subject=mysqli_query($con,"select subject from teacher_login where email='padmashreet@rvce.edu.in'");
				$subject="Database Management Systems";
				$sql="insert into attendance(name,usn,status,subject,date) values ('$student_name','$student_usn','$attendance_status','$subject','$current_date')";

				$res=mysqli_query($con,$sql);
				if($res)
					$flag=1;
				else
					echo"Error: could not add to the database." . mysqli_error($con);
			}
	}

	


 ?>



<body>
 <div class="panel panel-default">

 	<!-- displays if query executed successfully or not -->
 	<?php if($flag) { ?>
 	<div class="alert alert-success">
 		<strong>Attendance submitted successfully!</strong>	
 	</div>
 	<?php } ?>

 	<?php if($update) { ?>
 	<div class="alert alert-success">
 		<strong>Attendance updated successfully!</strong>	
 	</div>
 	<?php } ?>

 	<div class="panel panel-heading">
 		<h2>
 			<a href="dash.php?q=2" class="btn btn-success">Add Student</a>
 			<a href="dash.php?q=5" class="btn btn-info pull-right">View past attendance</a>
 		</h2>


 		<!-- display the current date -->
 		<h3><div class="text-center">Date: <?php echo date("d/m/Y"); ?></div></h3>	


 		<div class="panel panel-body">
 			<p style="color:red" class="pull-right"><strong>By default all are marked present, select the students who are absent and submit.</strong></p>
 			<form action="index1.php" method="post">

 				<table class="table table-striped">
 					<tr>
 					<th>ID</th>
 					<th>USN</th>
 					<th>Name</th>
 					<th>Attendance Status</th>
					</tr>
 					
 					<?php 
 						$result=mysqli_query($con,"select * from student");
 						$sn=0;
 						$count=0;
 						while($row=mysqli_fetch_array($result))
 						{

 							$sn++;

 					 ?>

 					 <tr>
 					 	<td> <?php echo $sn; ?> </td>
 					 	
 					 	<td> <?php echo $row['usn'] ?> </td>
 					 	<input type="hidden" name="usns[]" value="<?php echo $row['usn'] ?>">

 					 	<td> <?php echo $row['name'] ?> </td>
 					 	<input type="hidden" name="names[]" value="<?php echo $row['name'] ?>">
 					 	
 					 	<td>
 					 		<input type="radio" name="attendance_status[<?php echo $count; ?>]" 
 					 		<?php if(isset($_POST['attendance_status'][$count])&&$_POST['attendance_status'][$count]=="present") echo "checked=checked";
 					 		?> value="present" checked="checked" required>Present
 					 		<input type="radio" name="attendance_status[<?php echo $count; ?>]" 
 					 		<?php if(isset($_POST['attendance_status'][$count])&&$_POST['attendance_status'][$count]=="absent") echo "checked=checked";
 					 		?> value="absent" required>Absent
 					 	</td>

 					 </tr
 					
 					 <?php 
 					 		$count++;
 					 	}
 					  ?>

				</table>
				<br>
				<br>
				<input type="submit" name="submit" value="submit" class="btn btn-primary pull-right">
 			</form>
 		</div>
 	</div>


 </div>

 </body>

 