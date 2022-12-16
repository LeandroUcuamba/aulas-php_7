<?php

//Manipulacao de arquivos;
/*
fopen(); -> abri o arquivo;
fclose(); -> fecha o arquivo;
fwrite(); -> escreve no arquivo;
!feof();
fgets();
filesize();
*/

$arquivo = 'arquivo.txt';
$conteudo = "conteudo de texte\r\n";

$arquivoAberto = fopen($arquivo, 'a'); // a -> permissao de escrita;
fwrite($arquivoAberto, $conteudo); // para escrever;
fclose($arquivoAberto);

?>