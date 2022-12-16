<?php

$numero = 7 ;

if ($numero == 10):
	echo " E igual a 10";
elseif ($numero <= 9):
	echo " numero e menor ou igual a 9";
else:
	echo " E diferente de 10";
endif;


echo "<br>";
echo "<hr>";

$media = 7;

echo ($media >=7)? "Aprovado!":"Reprovado!";