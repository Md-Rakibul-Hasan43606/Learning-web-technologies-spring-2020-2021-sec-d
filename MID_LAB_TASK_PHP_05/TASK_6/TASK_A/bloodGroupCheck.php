<?php

	if(isset($_POST['submit']))
	{
		$bloodGropu = $_POST['blood'];
		
		if($bloodGropu == ""){
			echo "null submission";
		}
		else{
			echo "Blood group: ".$bloodGropu;
		}
	}else{
		echo "Invalid request";
	}

?>