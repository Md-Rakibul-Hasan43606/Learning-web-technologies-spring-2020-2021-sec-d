<?php

	If(isset($_POST['submit']))
	{
		$dob = $_POST['dob'];

		if ($dob == "")
		{
			echo "null submition";
		}
		else
		{
			echo "Date of birth: ".$dob;
		}
	}
	else{
		echo "Invalid request";
	}

?>