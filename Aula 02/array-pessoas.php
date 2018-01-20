<?php


	$pessoas = [

			[

				"Nome" => "José",
				"Sobrenome" => "Santos",
				"Idade" => 48,
				"Peso" => 70,


			],

			[

				"Nome" => "Ricardo",
				"Sobrenome" => "Queiroz",
				"Idade" => 22,
				"Peso" => 90,


			],


			[

				"Nome" => "Francisco",
				"Sobrenome" => "Teixeira",
				"Idade" => 12,
				"Peso" => 50,


			],

			[

				"Nome" => "Enzo",
				"Sobrenome" => "Alves",
				"Idade" => 9,
				"Peso" => 30,


			],

	];


	echo "<pre>";

	print_r($pessoas);

	foreach($pessoas as $pessoa){

		if($pessoa['Idade'] >= 18){
			echo "$pessoa[Nome] $pessoa[Sobrenome]";
			echo "<hr>";
		}

		if($pessoa['Peso'] >= 80){
			echo "<h3>Pessoas gordas</h3>";
			echo "$pessoa[Nome] é muito gordo";
			echo "<hr>";
		}

		foreach($pessoa as $key => $value){
			if($key == "Nome"){
				echo $value;
				echo "<br>";
			}
		}
	}

