  
<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
</head>
<body>
	<fieldset>
		<legend>DISPLAY</legend>
		<table border="1">
		<tr>
			<td>NAME</td>
			<td>PROFIT</td>
		</tr>
		<?php 
		require_once('../model/productModel.php');
			$product = getAllProduct();
			foreach ($product as $value) { echo "<tr>"; ?>
				<td><?php echo $value['name']; ?></td>
				<td><?php 
					  $buy =  $value['buyingPrice'];
					  $sell = $value['sellingPrice'];
					  $profit = $sell - $buy;
					  echo $profit; 

					 ?></td>
				<td>
					<a href="edit.php?id=<?php echo $value['id']; ?>">EDIT</a> |
					<a href="delete.php?id=<?php echo $value['id']; ?>">DELETE</a>
				</td>
			
				<?php echo "</tr>"; } ?>
		</table>
	</fieldset>
</body>
</html>