<?php 

	$idade = 15;
	$temHabilitaco = false;

	if ($idade >= 18 && $temHabilitaco) {
		echo "Pode dirigir";
	}else if ($idade >= 18 && !$temHabilitaco){
		echo "Não pode dirigir, mas pode se habilitar";
	}else{
		echo "nao pode dirigir";
	}



 ?>