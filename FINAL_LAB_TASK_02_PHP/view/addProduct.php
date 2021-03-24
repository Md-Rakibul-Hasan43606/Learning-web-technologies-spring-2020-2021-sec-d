<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
</head>
<body>
	<form method="POST" action="../controller/add.php">
		<fieldset>
			<legend>ADD PRODUCT</legend>
			<label>Name</label><br>
			<input type="text" name="name" value="" required=""><br>
			<label>Buying Price</label><br>
			<input type="text" name="buy" value="" required=""><br>
			<label>Selling Price</label><br>
			<input type="text" name="sell" value="" required="">
			<hr>
			<input type="checkbox" name="display" value="yes">Display
			<hr>
			<input type="submit" name="submit" value="save">
		</fieldset>
	</form>
</body>
</html>