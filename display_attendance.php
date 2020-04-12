
<!-- This file is used by both the teachers and the admin to view the attendance of the students datewise -->
<?php 
	include("connection.php");


?>


 
<!-- Display students' attendance -->
 <div class="panel panel-default">

 	<div class="panel panel-heading" style="background:#f2ffff">
 		<h2 align="center">Attendance</h2>

 		<div class="panel panel-body" >
 				<table class="table table-striped">
 					<tr>
 					<th>ID</th>
 					<th>USN</th>
 					<th>Name</th>
 					<th>Attendance Status</th>
					</tr>
 					
 					<?php 
 						
 						if(isset($_POST['submit']))
 						{
	 						//$d = $_POST[dt]);

	 						//$newDate='2020-04-11';
	 						//this query to be generalized
	 						//$sql= "select * from attendance where ";
							$sql=$_POST['query'];
							//$sql=$sql . "and subject like " . $_POST['subject'] . "%";
							$result=mysqli_query($con,$sql) or die('error!');
							if($result)
								echo "";
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
	 					 }
	 					  ?>

				</table>
 		</div>
 	</div>
 </div>
<!-- students' attendance Displayed -->

