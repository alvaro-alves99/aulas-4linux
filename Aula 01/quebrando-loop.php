<?php 

		$i = 0;

	/*while ($i < 30){

		echo ($i % 2 === 0) ? "$i par<br>" : "";


		echo ($i % 2 !== 0) ? "$i impar<br>" : "";
	

		echo ($i % 5 == 0) ? "$i multiplo de 5<br>" : "";

		echo ($i % 3 === 0) ? continue; : "";
		$i++;
	}*/


	for($i = 1; $i <= 50; $i++){

		if($i % 3 === 0){
			continue;
		}

		if ($i == 36){
			break;
		}

		if($i % 2 === 0){
			echo "$i par <br>";
		}

		
		if($i % 2 !== 0){
			echo "$i impar <br>";
		}

		if($i % 5 === 0){
			echo "$i multiplo de 5 <br>";
		}

		$i++;
	}



 ?>