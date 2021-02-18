<?php
	
	if(isset($_POST['submit']))
	{
		$email = $_POST['myEmail'];

		if($email == "")
		{
			echo "null submition";
		}
		else
		{
			echo "Email: ".$email;
		}
	}
	else
	{
		echo "Invalid request";
	}


?>