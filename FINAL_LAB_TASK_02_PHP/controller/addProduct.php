<?php
	
	require_once('../model/productModel.php');

	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$buy = $_POST['buy'];
		$sell = $_POST['sell'];
		$display = $_POST['display'];

		$product = [
						'name'    => $name,
						'buy'     => $buy,
						'sell'    => $sell,
						'display' =>$display
		 		   ];

		$status =  insertProduct($product);
		if($status){
			echo "Add product successfully";
		}else{
			echo "not add product";
		}
	}



?>