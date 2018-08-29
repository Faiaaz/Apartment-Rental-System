<?php
	 	include_once "includes/header.php";
	 	require_once "connection.php";

?>


    <?php

if(!$_SESSION['user'])
{
	header ('location:login.php');
}
$owner_username=$_SESSION['username'];


?>

        <?php

 
    // deleting sql query
    // check if the 'id' variable is set in URL
     if (isset($_GET['id']))
     {
     // get id value
     $id = $_GET['id'];
     
     // delete the entry
     $result =  mysqli_query($con,"DELETE FROM flat_details WHERE id='$id'")
     or die("The Flat does not exist ... \n"); 
     echo " <center>Done <a href=myads.php>Click Here to Go back</a></center>";
	 error_reporting(0);
      
     }
     else
     // do nothing         
?>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
            <table style="border-collapse: collapse;width: 100%">
                <tr>

                    <th>Apartment Size</th>
                    <th>No. Of Rooms</th>
                    <th>Rent</th>
                    <th>Location</th>
                    <th>City</th>
                    <th>Availability</th>
                    <th>Owners Name</th>
                    <th>Image</th>
                </tr>
                <?php    
			$fahim = mysqli_query($con,"SELECT * FROM flat_details where username = '$owner_username'");

			while($result = $fahim->fetch_assoc()): ?>


                <tr>


                    <td>
                        <?php  if(isset($result['flat_size'])){echo $result['flat_size'];}  ?>
                    </td>
                    <td>
                        <?php  if(isset($result['num_of_rooms'])){echo $result['num_of_rooms'];}  ?>
                    </td>
                    <td>
                        <?php  if(isset($result['desire_rent'])){echo $result['desire_rent'];}  ?>
                    </td>
                    <td>
                        <?php  if(isset($result['flat_location'])){echo $result['flat_location'];}  ?>
                    </td>

                    <td>
                        <?php  if(isset($result['flat_city'])){echo $result['flat_city'];}  ?>
                    </td>
                    <td>
                        <?php  if(isset($result['additional_info'])){echo $result['additional_info'];}  ?>
                    </td>
                    <td>
                        <?php  if(isset($result['username'])){echo $result['username'];}  ?>
                    </td>
                </tr>
                <tr>
                     <td><a href="apartment_images/<?php echo $result['image1'];    ?>" target="_blank"><img style="width:300px; height:auto;" class="img-thumbnail" src="apartment_images/<?php echo $result['image1'];    ?>" alt="Flat Image"></a></td>
                <td><a href="apartment_images/<?php echo $result['image2'];    ?>" target="_blank"><img style="width:300px; height:auto;" class="img-thumbnail" src="apartment_images/<?php echo $result['image2'];    ?>" alt="Flat Image"></a></td>
                <td><a href="apartment_images/<?php echo $result['image3'];    ?>" target="_blank"><img style="width:300px; height:auto;" class="img-thumbnail" src="apartment_images/<?php echo $result['image3'];    ?>" alt="Flat Image"></a></td>




                </tr>
                <?php echo '<td><a href="myads.php?id=' . $result['id'] . '"><button class="btn btn-danger">Delete Ad</button></a></td>';?>



                </tr>

                <?php endwhile; ?>

                <style>
                    table {
                        border-collapse: collapse;
                        width: 100%;
                    }

                    th,
                    td {
                        padding: 8px;
                        text-align: left;
                        border-bottom: 1px solid #ddd;
                    }

                    tr:hover {
                        background-color: #f5f5f5
                    }

                </style>
            </table>




            </div>

            </body>

            </html>
