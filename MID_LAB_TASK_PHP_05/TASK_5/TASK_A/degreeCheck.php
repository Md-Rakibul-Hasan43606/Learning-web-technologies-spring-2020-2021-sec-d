<?php
	
	if(isset($_POST['submit'])){
		$degree = $_POST['degree'];

		if($degree == ""){
			echo "null submition";
		}else{
			echo "Dgree: ".$degree;
		}
	}else{
		echo "Invalid request";
	}


 

?>