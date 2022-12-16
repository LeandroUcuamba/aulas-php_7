<?php

function exibirNome ($nome){

	echo "o seu nome e $nome";
}

exibirNome("Leandro");

echo "<br>";
echo "<hr>";

function calcularMedia ($nome, $n1, $n2, $n3){

    $media = ($n1+$n2+$n3)/3;
	
	if($media >=7 ):
		echo "$nome foi aprovado com a media $media";
	else:
		echo "$nome foi reprovado com a media $media";
	endif;

}

calcularMedia("Leandro",10,7,6);
