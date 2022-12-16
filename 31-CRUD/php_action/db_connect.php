<?php

//conexao com banco de dados;

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "crud";

$connect = mysqli_connect($servername,$username,$password,$db_name);
// O mysqli -> tem suporte para "php procedural e php orientado a objecto". Ele é a evolucao do "mysqlQuery que já esta obsuleto";
//$mysqli_set_charset($connect, "utf-8"); // codificacao utf8;

if(mysqli_connect_error()): //esta funcao verifica se exite erro na conexao e mostra o erro;
	echo "falha na conexao".mysqli_connect_error();
endif;