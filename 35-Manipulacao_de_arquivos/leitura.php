<?php

//Manipulacao de arquivos;
/*
!feof(); -> final do arquivo;
fgets(); -> pega o conteudo de cada linha do arquivo aberto;
filesize(); -> pega o tamanho do arquivo;
*/

$arquivo = 'arquivo.txt';
$conteudo = "conteudo de texte\r\n";
$tamanhoArquivo = filesize($arquivo);

$arquivoAberto = fopen($arquivo, 'r'); // a -> permissao de leitura;

while(!feof($arquivoAberto)):
    $linha = fgets($arquivoAberto, $tamanhoArquivo);
    echo $linha."<br>";
endwhile;

fclose($arquivoAberto);

?>