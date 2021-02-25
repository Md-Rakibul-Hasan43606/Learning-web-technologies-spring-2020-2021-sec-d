<?php
   session_start();
   if (isset($_SESSION['status'])) {
?>


<!DOCTYPE html>
<html>
<head>
	<title>View Profile</title>
</head>
<body>

	<table border="1" align="center" width="100%">
 		<tr height="100px">
 			<td width="400px"><img src="images/logo.png"></td>
 			<td align="right">
 				Logged in as
 				<a href="#"><?php $name=$_SESSION['user']; echo $name['username']; ?></a>|
 				<a href="logout.php">Logout</a>
 			</td>
	 	</tr>
	 	<tr height="300px">
	 		<td>
	 			Account
	 			<ul>
	 				<li><a href="dashboard.php">Dashboard</a></li>
	 				<li><a href="#">View Profile</a></li>
	 				<li><a href="editProfile.php">Edit Profile</a></li>
	 				<li><a href="profilePicture.php">Change Profile Picture</a></li>
	 				<li><a href="changePassword.php">Change Password</a></li>
	 				<li><a href="logout.php">Logout</a></li>
	 			</ul>
	 		</td>
	 		<td>
	 			<from>
	 			<fieldset>
	 				<legend>PROFILE</legend>
	 
	 				<table border="1" >
	 					<tr height="40px">
	 						<td>Name</td>
	 						<td>:<?php $user=$_SESSION['user']; echo $user['username']; ?></td>
	 						
	 					</tr>
	 					<tr height="30px">
	 						<td width="120px" >Email</td>
	 						<td width="180px">:<?php $user=$_SESSION['user']; echo $user['email']; ?></td>
	 						<td rowspan="2" align="right" width="100px"><img src="images/user.png" width="100px"><a href="profilePicture.html">change</a></td>
	 					</tr>
	 					<tr height="40px">
	 						<td>Gender</td>
	 						<td>:<?php $user=$_SESSION['user']; echo $user['gender']; ?></td>
	 						
	 					</tr>
	 					<tr height="40px">
	 						<td>Date of birth</td>
	 						<td><?php 
	 						$user=$_SESSION['user']; 

	 						echo $user['day']."/";
	 						echo $user['month']."/";
	 						echo $user['year']; 

	 						?></td>
	 					</tr>

	 					<!-- <tr  height="100px">
	 						<td colspan="2" align="right" width="500px"><img src="images/user.png" width="100px" height="100px">
	 						</td>
	 					</tr> -->
	 					<!-- <tr>
	 						<td colspan="2" align="right"><a href="profilePicture.html">change</a></td>
	 					</tr> -->
	 				</table>
	 				<hr>
	 				<a href="editProfile.html">Edit Profile</a>
	 			</fieldset>
	 		</from>
	 		</td>
	 	</tr>
		<tr height="60px">
			<td colspan="3" align="center">
				copyright@2017
			</td>
		</tr>
	</table>
</body>
</html>

<?php

	}else{
		header('location:login.html');
	}

?>