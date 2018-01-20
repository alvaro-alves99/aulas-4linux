<?php

echo "<pre>";

function imparOuPar($numero){

	if($numero % 2 == 0){
		return "O número é par";
	}

	if($numero % 2 == !0){
		return "O número é ímpar";
	}

	if($numero == 0){
		return "O número 0 é neutro";
	}
};

function retornaNumeroMaior($a, $b){
	if($a > $b){
		return $a;
	}
	if($a == $b){
		return "os números são iguais";
	}

	else{
		return $b;
	}
};

$pessoa = [
	"Nome" => "Álvaro",
	"Idade" => 18,
	"temHabilitacao" => false,
];

function confereIdade($fulano){
	if($fulano['Idade'] >= 18){
		return "Essa pessoa é maior de idade";
	}else{
		return "Essa pessoa não é maior de idade";
	}
};

function podeDirigir($fulano){
	if($fulano['temHabilitacao'] && $fulano['Idade'] >= 18){
		return "Pode dirigir!";
	}else{
		return "Não pode dirigir!";
	}
};


function soma ($a = 0, $b = 0){//parametro opcional
	return $a + $b;

}

echo soma("oi como esta vc", 9.8);

