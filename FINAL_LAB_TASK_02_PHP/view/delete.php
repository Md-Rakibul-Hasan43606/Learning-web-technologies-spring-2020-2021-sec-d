<?php
	require_once('../model/productModel.php');
	$id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
</head>
<body>
	<fieldset>
		<legend>DELETE PRODUCT</legend>
		Name :<?php 
				$row = getProductById($id);
				echo $row['name'];
			   ?><br>
		Buying Price :<?php 
			$row = getProductById($id);
			echo $row['buyingPrice'];
			?><br>
	    Selling Price :<?php 
				$row = getProductById($id);
				echo $row['sellingPrice'];
			   ?><br>
		Displayable :<?php 
				$row = getProductById($id);
				echo $row['display'];
			   ?><br>
		<hr>
		<button><a href="../controller/delete.php?id=<?php echo $id ?>>">Delete</a></button>
	</fieldset>
</body>
</html>