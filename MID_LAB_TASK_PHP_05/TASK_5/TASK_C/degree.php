<!DOCTYPE html>
<html>
<head>
	<title>Degree Input</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend>DEGREE</legend>
			<input type="checkbox" name="degree" value="SSC" <?php if(isset($_POST['degree']) && $_POST['degree'] == 'SSC'){ echo "checked";}?>>SSC 
			<input type="checkbox" name="degree" value="HSC" <?php if(isset($_POST['degree']) && $_POST['degree'] == 'HSC'){ echo "checked";}?>>HSC 
			<input type="checkbox" name="degree" value="BSc" <?php if(isset($_POST['degree']) && $_POST['degree'] == 'BSc'){ echo "checked";}?>>BSc 
			<input type="checkbox" name="degree" value="MSc" <?php if(isset($_POST['degree']) && $_POST['degree'] == 'MSc'){ echo "checked";}?>>MSc 
			<hr>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
</body>
</html>