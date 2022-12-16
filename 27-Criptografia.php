<?php

echo "outro tipo de criptografia o base64 -> criptogra e descriptografa";
$senha = "123456";

$novasenha = base64_encode($senha);
echo "base64".$novasenha."<br>";
echo "sua senha é". base64_decode($novasenha);

echo "<hr>";
echo "outro tipo de criptografia o MD5-> ele só criptografa";
echo "Na bd o usuario já deve inserir criptografado, e quando passar um dado para comparar deve antes criptografar para comparar";
echo "<br>";

echo "MD5:". md5($senha)."<br>";
echo "<hr>";
echo "funciona igual ao MD5";
echo "SHA1:". sha1($senha)."<br>";

