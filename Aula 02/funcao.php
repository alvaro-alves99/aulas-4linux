<?php

echo "<pre>";

function ola(){
	return "Olá Função<br>";
}

function soma(){
	return 2 + 3;
}

function soma2($a, $b){
	$soma = $a + $b;
	return $soma;
}


echo soma(1, 2);
echo "<br>";
$num1 = 3;
$num2 = 5;
