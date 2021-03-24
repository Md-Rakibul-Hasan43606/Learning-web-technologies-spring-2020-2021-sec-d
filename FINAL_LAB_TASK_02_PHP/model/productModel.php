<?php

	require_once('db.php');

	function insertProduct($product)
	{
		$conn = getConnection();
		$sql = "insert into products values('','{$product['name']}','{$product['buy']}','{$product['sell']}','{$product['display']}')";
		if (mysqli_query($conn, $sql)) {
			return true;
		}else{
			return false;
		}
	}

	function getAllProduct()
	{
		$conn = getConnection();
		$sql = "select * from products where display='yes'";
		$result = mysqli_query($conn, $sql);
		$product = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($product, $row);
		}
		return $product;
	}

	function deleteProduct($id){
		$conn = getConnection();
		$sql = "delete from products where id='{$id}'";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function updateProduct($product, $id){
		$conn = getConnection();
		$sql = "update products set name='{$product['name']}', buyingPrice='{$product['buy']}', sellingPrice='{$product['sell']}',display='{$product['display']}' where id='{$id}'";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getProductById($id){
		$conn = getConnection();
		$sql = "select * from products where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

?>