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
 			<!-- <form action="index.php" method="post">
 -->
 				<table class="table table-striped">
 					<tr>
 					<th>S.N.</th>
 					<th>Date</th>
 					<th>Attendance</th>
					</tr>
 					
 					<?php 
 						$result=mysqli_query($con,"select distinct(date) from attendance");
 						$sn=0;
 						
 						while($row=mysqli_fetch_array($result))
 						{

 							$sn++;

 					 ?>

 					 <tr>
 					 	<td> <?php echo $sn; ?> </td>
 					 	
 					 	<td> <?php echo $row['date'] ?> </td>
 					 	<td>
 					 		<form action="display_attendance.php" method="post">
 					 		<input type="hidden" value="<?php echo $row['date']; ?>" name="date">
 					 		<input type="submit" class="btn btn-primary" value="show attendance" >
 					 		</form>
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