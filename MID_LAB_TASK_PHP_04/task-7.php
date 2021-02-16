<?php
	
    
	$x=3;
	for ($i=1; $i <=$x ; ++$i) { 
		for ($j=1; $j <=$i ; ++$j) { 
			echo '*';
		}
		echo "\n";
	}
	echo "\n";
	
	$x=3;
	for ($i=$x; $i >=1 ; --$i) { 
		for ($j=1; $j <=$i ; ++$j) { 
			echo $j;
		}
		echo "\n";
	}


?>