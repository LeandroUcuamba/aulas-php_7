<?php

/*
number_format -> formata como sera a saída de um valor;
round -> arredonda um valor flutuante por excesso ou defeito;
ceil -> ele só arredonda para cima;
floor -> ele só arredonda sempre para baixo;
rand -> gera numeros aleatorios no intervalos de numeros passados no parametro;
*/

$num = 1234.56;

$preco = number_format($num,2,",",".");
echo "O valor do produto e $preco";

echo "<br>";
echo "<hr>";

echo round(3.4);

echo "<br>";
echo "<hr>";

echo ceil(3.4); // saida: 4

echo "<br>";
echo "<hr>";

echo floor(3.6); // saida: 3

echo "<br>";
echo "<hr>";

echo rand(3,27); // gera numeros aleatorios entre 3 - 27;
