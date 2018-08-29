<?php
	 	include_once "includes/header.php";
	 	include_once "connection.php";
error_reporting(0);
?>


<?php

if(!$_SESSION['user'])
{
	header ('location:login.php');
    error_reporting(0);
}

?>
	<div align="center">
        <h1><strong> Welcome, </strong> <strong> <?php echo $_SESSION['username']?></strong><strong> !</strong></h1>
	</div>

	<!-- <div>
		<div align="center">
			<form method="POST" action="post_ad.php">
				<div class="centerdiv" style="width: 25%; margin: 0 auto;float: left;">
					<button class="button submit" >Post Ad</button>
				</div>
			</form>
			<form method="POST" action="available_flats.php">
				<div class="centerdiv" style="width: 25%; margin: 0 auto;float: right;" >
					<button class="button submit">Find Flats</button>
				</div>
			</form>
	</div> -->
	

	<div>
		<div>
			
			<?php
			include_once"slideshow_container.php";
			?>
		</div>
	</div>

		

		
		 	

	 </div> 

	</body>
</html>