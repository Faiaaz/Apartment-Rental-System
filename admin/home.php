<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();


?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>

    <body>

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                  
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li ><a href=""></a></li>
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp; <?php echo $userRow['username']; ?></a></li>
                        <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container" style="margin-top:60px;">
           <center> <h1>Members Details</h1></center><br><br>
            <?php
                        $query2 = $DBcon->query("SELECT * FROM members");
                        
                        ?>
                            <table class="table table-hover">
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Contact No</th>
                                    <th>City</th>
                                    <th>Location</th>
                                    
                                    <th>Gender</th>
                                    <th>Join Date</th>
                                </tr>
                                <?php
                        while($row = $query2->fetch_array()){   
                        echo '<tr><td>' . $row['first_name'] .' </td><td>'. $row['last_name'] .' </td><td>'. $row['contact_no'] .' </td><td>'. $row['city'] .' </td><td>'. $row['location'] .' </td><td>'. $row['gender'] .' </td><td>'. $row['last_name'] .' </td><td>';  
                        }

                        echo "</table>"; 

                        
                        ?>
        </div>

    </body>

    </html>
