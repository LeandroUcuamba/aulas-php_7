<?php

// Arrays associativos

$pessoa = array("nome"=>"Leandro","idade"=>22,"altura"=>1.92);
echo $pessoa["nome"];
echo "<br>";
echo "<hr>";
echo $pessoa["cidade"] = "Luanda"; // insirindo mais um elemento no vector;
echo "<br>";
print_r($pessoa);

echo "<br>";
echo "<hr>";

foreach ($pessoa as $indice => $value) {
	   echo $indice.":".$value."<br>";
}

echo "<br>";
echo "<hr>";

// ARRAY MULTIDIMENSIONAIS;

$times = array(
	"cariocas"=> array("vasco","flamengo","botafogo"),
	"angolanos"=> array("petro","kabuscorp","1_deAgosto"),
	"Espanha"=> array("Real","vila_real","Barcelona")
     );	

echo $times["cariocas"][0];
echo "<br>";
echo "<hr>";
print_r($times);
