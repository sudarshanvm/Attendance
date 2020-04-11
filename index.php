<?php 

	include("header.php");
	include("connection.php");

 ?>


 <div class="panel panel-default">
 	<div class="panel panel-heading">
 		<h2>
 			<a href="add.php" class="btn btn-success">Add Student</a>
 			<a href="#view.php" class="btn btn-info pull-right">View All Students</a>
 		</h2>

 		<div class="panel panel-body">
 			<form action="index.php">
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
 						while($row=mysqli_fetch_array($result))
 						{

 							$sn++;
 						
 					 ?>

 					 <tr>
 					 	<td> <?php echo $sn; ?> </td>
 					 	<td> <?php echo $row['usn'] ?> </td>
 					 	<td> <?php echo $row['name'] ?> </td>
 					 	<td>
 					 		<input type="radio" name="status" value="present">Present
 					 		<input type="radio" name="status" value="absent">Absent

 					 	</td>
 					 </tr
 					
 					 <?php 
 					 	}
 					  ?>

 				</table>



 			</form>



 		</div>

 	</div>



 </div>