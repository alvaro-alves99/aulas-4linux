<?php 

	echo "<pre>";

	class objeto{}

	$boolean = true;
	$int = 10;
	$float = 22.3;
	$string = "4linux";
	$array = ["a", 2, 5.6];
	$objeto = new Objeto;
	$recurso = fopen("ola-mundo.php", "r");
	$null = null;

	var_dump($boolean);
	echo "<hr>";
	var_dump($int);
	echo "<hr>";
	var_dump($float);
	echo "<hr>";
	var_dump($string);
	echo "<hr>";
	var_dump($array);
	echo "<hr>";
	var_dump($objeto);
	echo "<hr>";
	var_dump($recurso);
	echo "<hr>";
	var_dump($null);


 ?>