<!DOCTYPE html>
<html>
<head>
	<title>Gender Input</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend>GENDER</legend>
			<input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male'){ echo "checked";}?>>Male
			<input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female'){ echo "checked";}?>>Female
			<input type="radio" name="gender" value="other" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'other'){ echo "checked";}?>>other
			<hr>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
</body>
</html>