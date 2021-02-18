<?php
	
	if(isset($_POST['submit']))
	{
		$gender = $_POST['gender'];

		if($gender == "")
		{
			echo "null submition";
		}
		else
		{
			echo "gender: ".$gender;
		}
	}
	else
	{
		echo "Invalid request";
	}


?>