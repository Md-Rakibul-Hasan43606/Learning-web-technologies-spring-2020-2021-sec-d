<?php
	
	session_start();

	if(isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "" || $password == "")
		{
			echo "Null submittion";
		}
		else
		{
			$user=$_SESSION['user'];
			if($username == $user['username'] && $password == $user['password'])
			{
				$_SESSION['username'] = $username;
				$_SESSION['status'] = true;

				header('location: dashboard.php');
			}
			else
			{
				echo "Invalid user";
			}
		}
	}
	else
	{
		echo "Invalid request";
	}


?>