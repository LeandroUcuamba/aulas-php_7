<?php

$carros = array("Hilux","Camaro","Hummer");
$motos = array("Ktm","Onda","yamaha");

$veiculos = array_merge($carros,$motos); // junta os elementos dos dois array;
print_r($veiculos);

echo "<br>";
echo "<hr>";

array_pop($carros); // elimina a ultima posicao do array;
print_r($carros); 

echo "<br>";
echo "<hr>";

array_shift($carros); // elimina a primeira posicao do array;
print_r($carros); 

echo "<br>";
echo "<hr>";

$frutas = array("Uva","Pera","Banana");
print_r($frutas);
array_unshift($frutas, "Maca","Manga");
echo "<br>";
print_r($frutas);