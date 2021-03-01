<?php
	
	if(isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "" || $password == "")
		{
			echo "Null submission";
		}
		else
		{
			$data = file_get_contents('user.json');
			$data= json_decode($data, true);

			foreach ($data as $user)
			{
				$name = 	$user["username"];  
				$pass =     $user['password'];
				
				if($username == $name && $password == $pass)
				{
					$flag = true;
				}

			}

			if($flag == true)
			{
				echo "login successfully";
			}else{
				echo "Invalid user";
			}

		}
	}
	else
	{
		echo "Invalid request";
	}


?>