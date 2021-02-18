<?php
	
	if(isset($_POST['submit'])){
		$name = $_POST['myname'];

		if($name == ""){
			echo "null submition";
		}else{
			echo $name;
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Name</title>
</head>
<body>
	<form method="post" action="name.php">
		<fieldset>
			<legend>Name</legend>
			<input type="text" name="myname" value=""><br>
			<hr>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
</body>
</html>