<!DOCTYPE html>
<html>
<head>
	<title>Email input</title>
</head>
<body>
	<form action="#" method="post">
		<fieldset>
			<legend>EMAIL</legend>
			<input type="Email" name="myEmail" value="
				<?php if(isset($_POST['myEmail'])){echo $_POST['myEmail'];} ?>
			"><br>
			<hr>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
</body>
</html>