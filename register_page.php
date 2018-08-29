

	 <?php
	 	include_once "includes/header.php";

	 ?>

	 	<form name="member_registration" method="post" action="save_member.php">
	 		<div class="left">

				<p>
					<strong>First Name</strong><br>
					<input id="text5" type="text" name="first_name"/>
				</p> 
				<p>
					<strong>Last Name</strong><br>
					<input id="text5" type="text" name="last_name"/>
				</p> 

				<p>
					<strong>Gender:</strong>
					<input type="radio" name="gender" value="Male" checked="checked"/>Male &nbsp;
					<input type="radio" name="gender" value="Female"/>Female &nbsp;
					<input type="radio" name="gender" value="Other" />Other &nbsp;
				</p>
				<p>
					<strong>username</strong><br>
					<input id="text5" type="text" name="username"/>
				</p> 
				<p>
					<strong>Password</strong><br>
					<input id="text5" type="password" name="password"/>
				</p> 
				<p>
					<strong>Confirm Password</strong><br>
					<input id="text5" type="password" name="cpasswd"/>
				</p> 
			</div>

			<div class="right">
				<p>
					<strong>City</strong><br>
					<select name="city">
						<option value="dhaka">Dhaka</option>
						<option value="chittagong">Chittagong</option>
						<option value="barisal">Barisal</option>
					</select> 
				</p> 
				<p>
					<strong>Location</strong><br>
					<input id="text5" type="text" name="location"/>
				</p> 		
				<p>
					<strong>Contact Number</strong><br>
					<input id="text5" type="number" name="contact_no"/>
				</p> 
				<br>

				<p>
					<button class="button submit">Sumbit</button>
				</p>
					 		
	 		</div>
	 	</form>

		 	

		</div> 
	</body>
</html>