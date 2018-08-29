<?php

	function usernameExist(){
		global $username;
		global $con;

		$sql = mysqli_query($con,"SELECT username FROM members");
		if(mysqli_num_rows($sql)>=1){
			return true;
		}
	}


?>