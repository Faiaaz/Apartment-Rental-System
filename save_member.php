<?php
	include_once "includes/header.php";

	include_once "connection.php";

	$sql= "INSERT INTO members
	(username,first_name, last_name,password,contact_no,city,location,gender,join_date)
		VALUES (
			'".$_POST['username']."',
			'".$_POST['first_name']."',
			'".$_POST['last_name']."',
			'".$_POST['password']."',
			'".$_POST['contact_no']."',
			'".$_POST['city']."',
			'".$_POST['location']."',
			'".$_POST['gender']."',
			'".date('Y-m-d')."'
			);
	";

	if (mysqli_query($con,$sql)) 
	{

		?>

		<div style="width: 70%; margin: 0 auto;">
			<div><img src="images/success.png" alt="Success Icon" style="float: left;width: 25%; height:auto;width:100px;"/></div>
			<div><h1 style="float: right; font-size: 1.5em;"> Member Added Successfully!</h1></div>
		</div>

		<?php
	}
	else {
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}

	mysqli_close($con);
	?>