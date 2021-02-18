<?php
	
	if(isset($_POST['submit'])){
		$degree = $_POST['degree'];

		if($degree == ""){
			echo "null submition";
		}else{
			echo "Dgree: ".$degree."<br/><br/>";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Degree Input</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend>DEGREE</legend>
			<input type="checkbox" name="degree" value="SSC">SSC 
			<input type="checkbox" name="degree" value="HSC">HSC 
			<input type="checkbox" name="degree" value="BSc">BSc 
			<input type="checkbox" name="degree" value="MSc">MSc 
			<hr>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
</body>
</html>