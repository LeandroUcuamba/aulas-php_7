<?php
// Sessoes servem para armazenar informaçoes que poderam ser utilizadas em varias paginas;

session_start(); // a pagina que aceder estas sessoes deve iniciar com " session_start() ";
// A sessao so fecha quando o navegador for fechado;

$_SESSION['cor'] = "carro";
$_SESSION['carro'] = "veloster";

echo $_SESSION['cor']."<br>".$_SESSION['carro']."<br>".session_id();