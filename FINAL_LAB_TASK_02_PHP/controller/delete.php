<?php

	require_once('../model/productModel.php');
	$id = $_GET['id'];

	$status = deleteProduct($id);

    if ($status) {
    	echo "delete product successfully";
    }else{
    	echo "product are not delete";
    }

?>