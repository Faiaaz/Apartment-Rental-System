<?php
	 	include_once "includes/header.php";
	 	include_once "connection.php";

	$apt_id=$_GET['id'];

	$sqldetails=mysqli_query($con,"SELECT * 
		FROM available_flats f 
		join members m on m.member_id =f.owner_id 
		join flat_details d on d.flat_id=f.flat_id 
		where f.flat_id=$apt_id");
	/*print_r($sqldetails);*/
	$aptdetails = mysqli_fetch_array($sqldetails,MYSQLI_BOTH);


?>


	<div  ><strong> </strong>
		<div >

			<img style="height: auto;width: 60%;" src="apartment_images/<?php echo $aptdetails['image']?>">

		</div>
		
		<div >
			<table class="tblclss"; style="border-collapse: collapse;width: 100%">
				<tr>
					<th style="background-color:#95a5a6; padding: 5px 10px">Owner</th><br>
					<th style="background-color:#95a5a6; padding: 5px 10px">Name</th><br>
					<th style="background-color:#95a5a6; padding: 5px 10px">Rent</th<br>
					<th style="background-color:#95a5a6; padding: 5px 10px">City</th><br>
					<td style="background-color:#95a5a6; padding: 5px 10px">Location</td><br>
					<td style="background-color:#95a5a6; padding: 5px 10px">Rooms</td><br>
					<td style="background-color:#95a5a6; padding: 5px 10px">Additional Info.</td><br>
				</tr>
				<tr>
					<th ><?php echo $aptdetails['first_name']; ?></th><br>
					<th ><?php echo $aptdetails['last_name']; ?></th><br>
					<th ><?php echo $aptdetails['flat_rent']; ?></th<br>
					<th ><?php echo $aptdetails['flat_city']; ?></th><br>
					<td ><?php echo $aptdetails['flat_location']; ?></td><br>
					<td ><?php echo $aptdetails['num_of_rooms']; ?></td><br>
					<td ><?php echo $aptdetails['additional_info']; ?></td><br>
				</tr>
				<style>
					table {
					    border-collapse: collapse;
					    width: 100%;
					}

					th, td {
					    padding: 8px;
					    text-align: left;
					    border-bottom: 1px solid #ddd;
					}

					tr:hover{background-color:#f5f5f5}
				</style>
			</table>
		</div>
		
	</div>

	 </div> 

	</body>
</html>