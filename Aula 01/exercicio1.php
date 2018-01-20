<?php 

	$frequencia = 10;
	$nota = 9;


	/*if($nota >= 7 && $frequencia >= 8){
		echo "ALUNO APROVADO";
	}

	else if($nota > 5 && $nota <=7 && $frequencia >=8){

		echo "ALUNO DE RECUPERACAO";
	}

	else{
		echo "ALUNO REPROVADO";
	}*/

	switch(true){
		case($nota >= 7 && $frequencia >= 8):
			echo "ALUNO APROVADO";
			break;
			

		case($nota > 5 && $nota <= 7 && $frequencia >= 8):
			echo "ALUNO DE RECUPERACAO";
			break;
			

		default:
			echo "ALUNO REPROVADO";
			break;
			
	}






 ?>