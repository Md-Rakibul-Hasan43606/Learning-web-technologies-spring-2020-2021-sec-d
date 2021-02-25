<?php
	session_start();
	if(isset($_SESSION['status'])){
?>


<!DOCTYPE html>
<html>
<head>
	<title>Change Profile Picture</title>
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
	 				<li><a href="viewProfile.php">View Profile</a></li>
	 				<li><a href="editProfile.php">Edit Profile</a></li>
	 				<li><a href="#">Change Profile Picture</a></li>
	 				<li><a href="changePassword.php">Change Password</a></li>
	 				<li><a href="logout.html">Logout</a></li>
	 			</ul>
	 		</td>
	 		<td>
	 			<from>
	 			<fieldset>
	 				<legend>PROFILE</legend>
	 				<table>
	 					<tr>
	 						<td><img src="images/user.png" width="100px" height="100px"></td>
	 					</tr>
	 					<tr>
	 						<td>
	 							<input type="file" name="img">
	 						</td>
	 					</tr>
	 				</table>
	 				<hr>
	 				<input type="submit" name="submit" value="submit">
	 			</fieldset>
	 		</from>
	 		</td>
	 	</tr>
		<tr height="50px">
			<td colspan="3" align="center">
				copyright@2017
			</td>
		</tr>
	</table>
</body>
</html>

<?php
	}
	else{
		header('location: login.html');
	}
?>