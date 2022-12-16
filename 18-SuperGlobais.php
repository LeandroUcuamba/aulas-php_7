<?php

/* As variaveis predefinidas são variaveis já criadas. Elas podem ser acessadas em qualquer escopo do programa (codigo) */

/*   
superglobais:

$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION

*/


$x =10;
$y =5;

function Calcular()
{
	echo $GLOBALS['x'] + $GLOBALS['y']; 
}

Calcular();

echo "<br><br><hr>";


echo $_SERVER['PHP_SELF']."<br>"; // mostra o caminho do arquivo em execução;
echo $_SERVER['SERVER_NAME']."<br>"; // mostra o nome do servidor onde o script esta em execução;
echo $_SERVER['SCRIPT_FILENAME']."<br>";
echo $_SERVER['DOCUMENT_ROOT']."<br>";
echo $_SERVER['SERVER_PORT']."<br>";
echo $_SERVER['REMOTE_ADDR']."<br>";