<?php
	include_once"includes/header.php";
	include_once"connection.php";

	//image prepare
    



// data process
	$bidder_username=$_SESSION['username'];
	$apartment_ID=$_GET['id'];




	$sqlbid= "INSERT INTO reserved_flats
	(flat_id,bidder_username)
		VALUES('".$apartment_ID."',
			'".$bidder_username."'
			);
	";
?>

<?php 
	if (mysqli_query($con,$sqlbid)) 
	{

?>

		<div style="width: 70%; margin: 0 auto;">
			<div><img src="images/success.png" alt="Success Icon" style="float: left;width: 25%;"/></div>
			<div><h1 style="float: right; font-size: 1.5em;">Your reseervation has been posted!</h1></div>
		</div>

		<?php
	}
	else {
		echo "Error: " . $sqlbid . "<br>" . mysqli_error($con);
	}

	mysqli_close($con);
	?>



		 </div> 
	</body>
</html>