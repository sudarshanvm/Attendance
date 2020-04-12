<?php 

	include("header.php");
	include("connection.php");
	include("login_check.php");

 ?>


 <div class="panel panel-default">

 	<div class="panel panel-heading">
 		<h2 style="text-align:center">ISE Teachers List</h2>

 		<h2>
 		<a href="add_teacher.php" class="btn btn-success">Add Teacher</a>
 		<a href="dash.php" class="btn btn-info pull-right">Home</a>
 		</h2>	

 		<div class="panel panel-body">
 				<table class="table table-striped">
 					<tr>
 					<th>ID</th>
 					<th>Name</th>
 					<th>Email</th>
 					</tr>
 					
 					<?php 
 						//$result=mysqli_query($con,);
 						
	 						//$newDate = $_POST['Date']); 
	 						//$newDate='2020-04-11';
	 						//this query to be generalized
	 						//$sql= "select * from attendance where date='$newDate'";
							$sql="select * from teacher_login";
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
	 					 	
	 					 	<td> <?php echo $row['teacher_name'] ?> </td>
	 					 	
	 					 	<td> <?php echo $row['email'] ?> </td>
	 					 	
	 					 </tr
	 					
	 					 <?php 
	 					 		$count++;
	 					 	}
	 					 
	 					  ?>

					</table>
					
 		</div>
 	</div>
 </div>

