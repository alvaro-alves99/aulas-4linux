<?php 

	$idade = 15;
	$temHabilitaco = false;

	switch(true) {
		case ($idade > 18 && $idade <= 25);
			echo "Jovem";
			break;

		case ($idade > 13 && $idade <= 18){
			echo "Adolescente";
			break;
		}

	}



 ?>