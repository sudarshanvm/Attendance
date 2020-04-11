<?php 

	include("header.php");
	include("connection.php");


 ?>


 <div class="panel panel-default">

 	<div class="panel panel-heading">
 		<h2>
 			<a href="add.php" class="btn btn-success">Add Student</a>
 			<a href="index.php" class="btn btn-info pull-right">Go back</a>
 		</h2>



 		<div class="panel panel-body">
 				<table class="table table-striped">
 					<tr>
 					<th>ID</th>
 					<th>USN</th>
 					<th>Name</th>
 					<th>Attendance Status</th>
					</tr>
 					
 					<?php 
 						//$result=mysqli_query($con,);
 						$newDate = date("Y-m-d", strtotime($_POST[date])); 
 						
 						//this query to be generalized
 						$sql= "select * from attendance where date='2020-04-11'";
;
						$result=mysqli_query($con,$sql);
						if($res)
							echo "Success!";
						else
							echo"Error: could not display the results!" . mysqli_error($con);
 						$sn=0;
 						$count=0;
 						while($row=mysqli_fetch_array($result))
 						{

 							$sn++;

 					 ?>

 					 <tr>
 					 	<td> <?php echo $sn; ?> </td>
 					 	
 					 	<td> <?php echo $row['usn'] ?> </td>
 					 	
 					 	<td> <?php echo $row['name'] ?> </td>
 					 	
 					 	<td>
 					 		<input type="radio" name="attendance_status[<?php echo $count; ?>]" 
 					 		<?php if($row['status']=="present") echo "checked=checked"; ?> value="present">present
 					 		<input type="radio" name="attendance_status[<?php echo $count; ?>]" 
 					 		<?php if($row['status']=="absent") echo "checked=checked"; ?> value="absent">absent
 					 		
 					 	</td>

 					 </tr
 					
 					 <?php 
 					 		$count++;
 					 	}
 					  ?>

				</table>
				
 		</div>
 	</div>
 </div>