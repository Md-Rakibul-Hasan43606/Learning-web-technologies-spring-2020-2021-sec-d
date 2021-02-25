
<?php
   session_start();
   if (isset($_SESSION['status'])) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>change Password</title>
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
	 				<li><a href="profilePicture.php">Change Profile Picture</a></li>
	 				<li><a href="changePassword.html">Change Password</a></li>
	 				<li><a href="logout.php">Logout</a></li>
	 			</ul>
	 		</td>
	 		<td>
	 			<form method="post" action="cngPassCheck.php">
				<fieldset>
				<legend>CHANGE PASSWORD</legend>
				<table>
					<tr>
						<td>Current Password:</td>
						<td><input type="Password" name="currentPass" value=""></td>
					</tr>
					<tr>
						<td>New Password</td>
						<td><input type="Password" name="newPass" value=""></td>
					</tr>
					<tr>
						<td>Retype New Password:</td>
						<td><input type="Password" name="retypePass" value=""></td>
					</tr>
			    </table>
			<hr>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
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