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
			echo "gender: ".$gender."<br><br>";
		}
	}
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>Gender Input</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend>GENDER</legend>
			<input type="radio" name="gender" value="male">Male
			<input type="radio" name="gender" value="female">Female
			<input type="radio" name="gender" value="other">other
			<hr>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
</body>
</html>