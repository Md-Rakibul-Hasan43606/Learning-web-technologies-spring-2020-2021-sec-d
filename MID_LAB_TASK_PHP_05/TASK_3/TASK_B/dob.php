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
			echo "Date of birth: ".$dob."<br/><br/>";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Date of birth</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend>DATE OF BIRTH</legend>
			<input type="date"  name="dob" value="">
			<hr>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
</body>
</html>