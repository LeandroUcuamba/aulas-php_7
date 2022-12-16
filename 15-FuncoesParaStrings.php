<?php

//Funções para strings
/*
strtoupper -> transforma as letras em maiusculas;
strtolower -> transforma as letras em minusculas;
substr -> retorna as letras fora do intervalos passado;
str_pad -> aumenta mais posicoes ocupadas por uma string;
str_repeat -> repeti a palvra passada ao parametro até um numero de vezes que tambem passada no parametro;
strlen -> conta quantas strings tem uma palavra. (os espaços vazios contam com string).
str_replace ->
strpos ->
*/

$nome = "leandro dos santos";
$novoNome = strtoupper($nome);
echo $novoNome;

echo "<br>";
echo "<hr>";

$nome = "LEANDRO";
$novoNome = strtolower($nome);
echo $novoNome;

echo "<br>";
echo "<hr>";

$hello = "ola mundo";
echo substr($hello, 4);

echo "<br>";
echo "<hr>";

$objecto = "mouse";
$novoObjecto = str_pad($objecto, 7, "*");
echo $novoObjecto;
echo "<br>";
echo "<br>";
$ttt = str_pad($objecto, 9, "*", STR_PAD_LEFT); // para add na esquerda;
echo $ttt;
echo "<br>";
echo "<br>";
$novoObjecto2 = str_pad($objecto, 9, "*", STR_PAD_BOTH);
echo $novoObjecto2;

echo "<br>";
echo "<hr>";

$string = str_repeat("leo ", 5);
echo $string;

echo "<br>";
echo "<hr>";

$prog = "php e bom";
echo strlen($prog);