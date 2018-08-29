<?php
	 	include_once "includes/header.php";
	 	include_once "connection.php";

?>


    <?php

if(!$_SESSION['user'])
{
	header ('location:login.php');
}

?>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <h2>Post advertisement for your flats here!</h2>

        <form name="post_ad" method="post" action="post_ad_save.php" enctype="multipart/form-data">
            <div class="left">

                <p>
                    <strong>Flat City</strong><br>
                    <select name="flat_city" class="form-control">
						<option value="dhaka">Dhaka</option>
						<option value="chittagong">Chittagong</option>
						<option value="barisal">Barisal</option>
					</select>
                </p>
                <p>
                    <strong>Flat Location</strong><br>
                    <input id="text5" type="text" name="flat_location" />
                </p>
                <p>
                    <strong>Desired Rent</strong><br>
                    <input id="text5" type="text" name="flat_rent" />
                </p>

                <p>
                    <strong>Flat Size (in square feet)</strong><br>
                    <input id="text5" type="number" name="flat_size" />
                </p>


            </div>

            <div class="right">
                <p>
                    <strong>Number of Rooms</strong><br>
                    <input id="text5" type="text" name="num_of_rooms" />
                </p>
                <div><strong>Upload Image 1</strong>
                    <input type="file" name="image1" id="image">
                </div>
                <div><strong>Upload Image 2</strong>
                    <input type="file" name="image2" id="image">
                </div>
                <div><strong>Upload Image 3</strong>
                    <input type="file" name="image3" id="image">
                </div>
                <p>
                    <strong>Additional Informations</strong><br>
                    <input id="text5" type="text" name="additional_info" />
                </p>
                <br>

                <p>
                    <button class="button submit">Submit</button>
                </p>

            </div>
        </form>




        </div>

        </body>

        </html>
