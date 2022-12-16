<?php

$carro = array("BMW","HILUX","TOYOTA");
print_r($carro); // metodo usado para apresentar na tela todos os dados de um array no caso " $carro ";

echo "<br>"; // quebra de linha;
echo "<hr>"; // linha divisoria;

echo $carro[1]; // imprimir o dado de uma informação do array,sem o indices;

echo "<br>";
echo "<hr>";

$mota = array(); 
$mota[] = "yamaha";
$mota[] = "Honda";
$mota[5] = "KTM";

print_r($mota);

echo "<br>";
echo "<hr>";

echo $mota[5];

echo "<br>";
echo "<hr>";

/*
$clientes = ["Leandro", "Tiago", "Rodrigo"];
print_r($clientes);

// isto funciona em versoes mais recentes;
*/ 

echo count($mota); // conta quantos elementos tem o vector;

echo "<br>";
echo "<hr>";


foreach ($mota as $value) { // para cada valor do array $mota será atribuido a variavel $value; (isto a cada ciclo).
	echo $value."<br>";
}