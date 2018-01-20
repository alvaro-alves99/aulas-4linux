<?php 

$i = 1;

	echo "ÍMPARES<br><br>";

	while($i <= 10){

		echo "O valor é: $i";
		echo "<hr>";
		$i++;

		if($i % 2 == 0){
			$i++;
		}


	}

	$j = 1;

	echo "<hr>";
	echo "<hr>";
	echo "<hr>";

	echo "PARES<br><br>";

	while($j <= 10){

		if($j % 2 == 0){	
		echo "O valor é: $j";
		echo "<hr>";
		

		}

		$j++;
	}

	echo "<hr>";
	echo "<hr>";
	echo "<hr>";

	echo "MULTIPLOS DE 5<br><br>";

	$g = 1;

	while($g <= 10){

		if ($g % 5 == 0){
		echo "O valor é: $g";
		echo "<hr>";
		}

		$g++;
	}



 ?>