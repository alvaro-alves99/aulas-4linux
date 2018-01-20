<?php 


	$i = 0;

	while ($i < 30){

		echo ($i % 2 === 0) ? "$i par<br>" : "";


		echo ($i % 2 !== 0) ? "$i impar<br>" : "";
	

		echo ($i % 5 == 0) ? "$i multiplo de 5<br>" : "";
		$i++;
	}

