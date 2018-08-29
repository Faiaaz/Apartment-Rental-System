<?php
	include_once"includes/header.php";
	include_once"connection.php";

	$apt_id=$_POST['id'];
	

	 $apt_city    =$_POST['flat_city'];
	 $apt_location=$_POST['flat_location'];
	 $rent        =$_POST['flat_rent'];
	 $available   =$_POST['available'];
	 $apt_size    =$_POST['flat_size'];
	 $apt_no_of_rooms    =$_POST['num_of_rooms'];
	 $apt_additional_info=$_POST['additional_info'];

	 $apartment=mysqli_query($con,"UPDATE available_flats  
	 	set flat_city='$apt_city', 
	 	flat_location='$apt_location',
	 	flat_rent    ='$rent', 
	 	availabile   ='$available' 
	 	where flat_id='$apt_id'");

	 $apartment_details=mysqli_query($con,"UPDATE flat_details 
	 	set  flat_city='$apt_city', 
	 	flat_location='$apt_location',
	 	flat_size  ='$apt_size',
	 	num_of_rooms   ='$apt_no_of_rooms', 
	 	additional_info='$apt_additional_info' 
	 	where flat_id  ='$apt_id' ");
		
?>

		<div style="width: 70%; margin: 0 auto;">
			<div><img src="images/success.png" alt="Success Icon" style="float: left;width: 25%;"/></div>
			<div><h1 style="float: right; font-size: 1.5em;"> Post Edited Successfully!</h1></div>
		</div>


		</div> 
	</body>
</html>	