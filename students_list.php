
<!-- This file is used by both teachers and the admin to view the list of all the students of ISE -->
<?php 

	include("connection.php");

 ?>


 <div class="panel panel-default">

 	<div class="panel panel-heading">
 		<h2 style="text-align:center">ISE Students List</h2>

 		<div class="panel panel-body">
 				<table class="table table-striped">
 					<tr>
 					<th>ID</th>
 					<th>USN</th>
 					<th>Name</th>
 					</tr>
 					
 					<?php 
 						
							$sql="select * from student";
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
	 					 	
	 					 </tr
	 					
	 					 <?php 
	 					 		$count++;
	 					 	}
	 					 
	 					  ?>

				</table>					
 		</div>
 	</div>
 </div>

