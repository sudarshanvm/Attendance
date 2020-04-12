
<!-- Used by both admin and the ISE teachers to view attendance by selecting a particular date -->

<?php 
	include("connection.php");
?>


 <div class="panel panel-default">

 	<div class="panel panel-heading" style="background:#f2ffff">
 		<h2 align="center">View Past Attendance</h2>


 		<div class="panel panel-body">
 			<!-- <form action="index.php" method="post">
 -->
 			<form action="dash.php?q=6" method="POST">
 				<div class="form-group">
 					 <label for="query">Enter a MySQL-query: </label>
 					<input type="text"  value="SELECT * FROM attendance WHERE date= '2020-04-11' and subject like 'Database%'" id="query" name="query" class="form-control" required>


 				</div>
    			<div class="form-group">
 					<input type="submit" name="submit" value="submit" class="btn btn-primary" required>
 				</div>
			</form>

 				<table class="table table-striped">
 					<tr>
 					<th>S.N.</th>
 					<th>Date</th>
 					<!-- <th>Attendance</th>
					 -->
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
 					 	<!-- <td>
 					 		<form action="display_attendance.php" method="post">
 					 		<input type="hidden" value="<?php //echo $row['date']; ?>" name="date">
 					 		<input type="submit" class="btn btn-primary" value="show attendance" >
 					 		</form>
 					 	</td>
 -->
 					 </tr
 					
 					 <?php 
 					 		$count++;
 					 	}
 					  ?>

			</table>
 		</div>
 	</div>
 </div>
</table>
</div>
</div>
</div>
<!--  -->



