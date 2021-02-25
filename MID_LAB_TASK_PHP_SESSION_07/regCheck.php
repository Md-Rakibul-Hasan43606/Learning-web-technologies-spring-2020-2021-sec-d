<?php
	
	session_start();

	if (isset($_POST['submit'])) {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$conPassword=$_POST['confirmPassword'];
		$gender=$_POST['gender'];
		$day=$_POST['day'];
		$month=$_POST['mn'];
		$year=$_POST['yr'];

		if($name == "" || $email == "" || $username == ""||$password == "" ||$conPassword == "" || $day == "" ||$month =="" || $year == "")
		{
			echo "Null submition..please try again later";
		}
		else if ($password != $conPassword){
			echo "password & confirm password mismatch...";
		}
		else
			{
				$user=[
						'name'  =>$name,
						'email' =>$email,
						'username'=>$username,
						'password'=>$password,
						'conPassword' =>$conPassword,
						'gender' =>$gender,
						'day'=>$day,
						'month'=>$month,
						'year' =>$year
					  ];

				$_SESSION['user']=$user;

				header('location: login.html');
			}

	}else{
		echo "Invalid request";
	}


?>