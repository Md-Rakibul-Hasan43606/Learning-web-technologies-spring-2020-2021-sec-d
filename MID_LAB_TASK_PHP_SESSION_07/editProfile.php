<?php
   session_start();
   if (isset($_SESSION['status'])) {
?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
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
	 				<li><a href="#">Edit Profile</a></li>
	 				<li><a href="profilePicture.php">Change Profile Picture</a></li>
	 				<li><a href="changePassword.php">Change Password</a></li>
	 				<li><a href="logout.php">Logout</a></li>
	 			</ul>
	 		</td>
	 		<td>
	 			<from method="post" action="profileCheck.php">
	 			<fieldset>
	 				<legend>PROFILE</legend>
	 					Name: <input type="text" name="name" value="">
	 					<hr>
	 					Email: <input type="email" name="email" value="">
	 					<hr>
	 					Gender:<input type="radio" name="gender" value="male">Male
				       <input type="radio" name="gender" value="female">Female
				      <input type="radio" name="gender" value="other">Other
				      <hr>
				      Date of Birth:<input type="date" name="dob" value="">
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

	}else{
		header('location:login.html');
	}

?>