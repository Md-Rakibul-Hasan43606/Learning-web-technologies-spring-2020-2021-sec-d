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
			echo "Email: ".$email."<br/><br/>";
		}
	}
	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Email input</title>
</head>
<body>
	<form action="#" method="post">
		<fieldset>
			<legend>EMAIL</legend>
			<input type="Email" name="myEmail" value="">
			<hr>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
</body>
</html>