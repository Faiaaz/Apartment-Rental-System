<?php

	 $DBhost = "localhost";
	 $DBuser = "root";
	 $DBpass = "root";
	 $DBname = "aprtmanagement";
	 
	 $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
    
     if ($DBcon->connect_errno) {
         die("ERROR : -> ".$DBcon->connect_error);
     }
