<?php
	session_start();
	if(isset($_SESSION['status'])){

?>
 <!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>

	<table border="1" align="center" width="100%">
 		<tr height="100px">
 			<td width="100px"><img src="images/logo.png"></td>
 			<td align="right">
 				Logged in as
 				<a href="#">
 				<?php  
 					$name=$_SESSION['username'];
 					echo $name;

 				?>
 					
 				</a>|
 				<a href="logout.php">Logout</a>
 			</td>
	 	</tr>
	 	<tr height="200px">
	 		<td>
	 			Account
	 			<ul>
	 				<li><a href="#">Dashboard</a></li>
	 				<li><a href="viewProfile.php">View Profile</a></li>
	 				<li><a href="editProfile.php">Edit Profile</a></li>
	 				<li><a href="profilePicture.php">Change Profile Picture</a></li>
	 				<li><a href="changePassword.php">Change Password</a></li>
	 				<li><a href="logout.php">Logout</a></li>
	 			</ul>
	 		</td>
	 		<td><h3>Welcome <?php  
 					$name=$_SESSION['username'];
 					echo $name;
 				?></h3></td>
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
	else
	{
		header('location:login.html');
	}
?>