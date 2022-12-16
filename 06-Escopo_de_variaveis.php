<?php

$nome = "Leandro";

function exibirNome(){
	global $nome;
    echo $nome;
}


exibirNome();

echo "<br>";
echo "<hr>";


$a = 1;
$b = 4;
$c = 7;

function somar(){

   echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];

}

somar();