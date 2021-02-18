<!DOCTYPE html>
<html>
<head>
	<title>Name</title>
</head>
<body>
	<form method="post" action="name.php">
		<fieldset>
			<legend>Name</legend>
			<input type="text" name="myname" value="<?php if(isset($_POST['myname'])){echo $_POST['myname'];} ?> "><br>
			<hr>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
</body>
</html>