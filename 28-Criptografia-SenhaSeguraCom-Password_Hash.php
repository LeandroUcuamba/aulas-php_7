<?php

$senha = "123456";

$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);
echo $senhaSegura;

echo "<hr>";
echo "como autenticar a senha"."<br><br>";

$senha1 = "123456"; //supondo que é a senha o que usuario passou no campo;
$senha_db = '$2y$10$73IkcvyC9kxclVYYW/B08O6z9ehcxrBIwQpUh4bqoJHY.m7AFpU8u'; // a senha salva na BD.

if(password_verify($senha1,$senha_db)):
    echo "senha válida";
else:
    echo "senha inválida";
endif;