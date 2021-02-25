<?php

	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$gender=$_POST['gender'];
		$dob=$_POST['dob'];


		if($name == "" || $email == "" || $gender=="" || $dob =="")
		{
			echo "Null Submission";
		}
		else
		{
			
		}
	}
	else{
		echo "Invalid request";
	}

?>