<?php
	include_once"includes/header.php";
	include_once"connection.php";

	//image prepare
    if(isset($_FILES['image1']))
    {
        $errors =array();
        $file_name=time().$_FILES['image1']['name'];
        $file_size=$_FILES['image1']['size'];
        $file_tmp= $_FILES['image1']['tmp_name'];
        $file_type = $_FILES['image1']['type'];
        $file_end=explode('.',$_FILES['image1']['name']);
        $file_ext= strtolower(end($file_end));

        $formates =array('jpeg','jpg','png');

        if (in_array($file_ext, $formates)==false)
        {
            $errors[]="please choose jpg or png files";

        }

        if($file_size>2097152){
            $errors[]="file is too large, file should be below 2 mb";
        }

        if(empty($errors)==true){
            move_uploaded_file($file_tmp,"apartment_images/".$file_name);
            $_POST['image1']=$file_name;
        }else {print_r($errors);
        }
    }
//image prepare
    if(isset($_FILES['image2']))
    {
        $errors =array();
        $file_name=time().$_FILES['image2']['name'];
        $file_size=$_FILES['image2']['size'];
        $file_tmp= $_FILES['image2']['tmp_name'];
        $file_type = $_FILES['image2']['type'];
        $file_end=explode('.',$_FILES['image2']['name']);
        $file_ext= strtolower(end($file_end));

        $formates =array('jpeg','jpg','png');

        if (in_array($file_ext, $formates)==false)
        {
            $errors[]="please choose jpg or png files";

        }

        if($file_size>2097152){
            $errors[]="file is too large, file should be below 2 mb";
        }

        if(empty($errors)==true){
            move_uploaded_file($file_tmp,"apartment_images/".$file_name);
            $_POST['image2']=$file_name;
        }else {print_r($errors);
        }
        
    }	//image prepare
    if(isset($_FILES['image3']))
    {
        $errors =array();
        $file_name=time().$_FILES['image3']['name'];
        $file_size=$_FILES['image3']['size'];
        $file_tmp= $_FILES['image3']['tmp_name'];
        $file_type = $_FILES['image3']['type'];
        $file_end=explode('.',$_FILES['image3']['name']);
        $file_ext= strtolower(end($file_end));

        $formates =array('jpeg','jpg','png');

        if (in_array($file_ext, $formates)==false)
        {
            $errors[]="please choose jpg or png files";

        }

        if($file_size>2097152){
            $errors[]="file is too large, file should be below 2 mb";
        }

        if(empty($errors)==true){
            move_uploaded_file($file_tmp,"apartment_images/".$file_name);
            $_POST['image3']=$file_name;
        }else {print_r($errors);
        }
    }





// data process

	$owner_username=$_SESSION['username'];



	$row1=mysqli_query($con,"SELECT member_id from members where username='$owner_username'");
	$ownr_id = mysqli_fetch_assoc($row1);
	$owner_id=$ownr_id['member_id'];


	$sqlf= "INSERT INTO available_flats
	(owner_id,owner_username,flat_city,flat_location,flat_rent)
		VALUES('".$owner_id."',
			'".$owner_username."',
			'".$_POST['flat_city']."',
			'".$_POST['flat_location']."',
			'".$_POST['flat_rent']."'
			);
	";
?>

    <?php if(mysqli_query($con,$sqlf)){
?>
    <!-- <div class="alert alert-success alert-dismissable" style="text-align:center;">
    	<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    	<strong>Successful!</strong>
    </div> -->
    <?php
	}
	else{
		echo"Error: " .$sqlf . "<br />" .mysqli_error($con);
	}
	?>


        <?php
	$owner_username=$_SESSION['username'];
	$sqld= "INSERT INTO flat_details
	(username,flat_city,flat_location,desire_rent,flat_size,num_of_rooms,additional_info,image1,image2,image3)
		VALUES ('$owner_username',
			'".$_POST['flat_city']."',
			'".$_POST['flat_location']."',
			'".$_POST['flat_rent']."',
			'".$_POST['flat_size']."',
			'".$_POST['num_of_rooms']."',
			'".$_POST['additional_info']."',
			'".$_POST['image1']."',
            '".$_POST['image2']."',
            '".$_POST['image3']."'
			);
	";

	if (mysqli_query($con,$sqld)) 
	{

?>

            <div style="width: 70%; margin: 0 auto;">
                <div><img src="images/success.png" alt="Success Icon" style="float: left;width: 25%;" /></div>
                <div>
                    <h1 style="float: right; font-size: 1.5em;">Your Ad Posted Successfully!</h1>
                </div>
            </div>

            <?php
	}
	else {
		echo "Error: " . $sqld . "<br>" . mysqli_error($con);
	}

	mysqli_close($con);
	?>



                </div>
                </body>

                </html>
