<?php
	
  
  	$student=['id'=>1, 'name'=>'rakib', 'cgpa'=>3.33, 'email'=>'rakib@gmail.com'];

  	$cont = false;

	foreach ($student as $key => $value) {
		if($value == 'rakib'){
	  		$cont = true;
	  		break;
	  	}
	}
	if($cont == true)
	{
		echo "found\n";
	}
	else
	{
	  	echo "not found\n";
	}


	

?>