<?php 

	$endereco = "Rua Vergueiro";
	$quebraLinha = "<br>";
	$idade = 18;
	$float = (boolean)18.567;
	$verdadeiro = true;
	$comidasPreferidas = array('Lasanha', 'Kibe', 'Pastel');
	$null = null;

	$carro = "fusca";
	$$carro = "ferrari";
	define("CONSTANTE", 38);

	$pessoa = new $pessoa;


	var_dump($$carro);
	var_dump($endereco);
	var_dump($idade);
	var_dump($verdadeiro);
	var_dump($float);
	var_dump($comidasPreferidas);
	var_dump($null);
	var_dump(CONSTANTE);
	

 ?>