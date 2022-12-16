<?php


for ($i=0; $i <= 10 ; $i++):
	echo "5 * $i = ".($i*5)."<br>";
endfor;

echo "<br>";
echo "<hr>";

$cores = array("Azul","Castanho","Cinza");

foreach ($cores as $valor ):
    echo $valor."<br>";
endforeach;

echo "<br>";
echo "<hr>";

$cores = array("Azul","Castanho","Cinza");

foreach ($cores as $indice => $valor ):
    echo $indice."-".$valor."<br>";
endforeach;