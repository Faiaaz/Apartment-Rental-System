<?php
	include_once"includes/header.php";
	include_once"connection.php";

	//echo $_SESSION['username'];
	$uname=$_SESSION['username'];
	$user=mysqli_query($con,"SELECT * from members where username='$uname'");
	$row = mysqli_fetch_array($user,MYSQLI_BOTH);
?>

<table class="table">
	<tr>
		<th>Name</th>
		<th>City</th>
		<th>Location</th>
		<th>Contact</th>
		<th>Gender</th>
		<th>Join Date</th>
	</tr>
	<tr>
		<td><?php echo $row['first_name'].' '.$row['last_name'] ?></td>
		<td><?php echo $row['city']?></td>
		<td><?php echo $row['location'] ?></td>
		<td><?php echo $row['contact_no'] ?></td>
		<td><?php echo $row['gender'] ?></td>
		<td><?php echo $row['join_date'] ?></td>
		
		<!-- <td><a href="editprofile.php">Edit</a></td> -->
	</tr>
</table>


		</div> 
	</body>
</html>	




