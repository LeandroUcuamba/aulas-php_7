<?php
/* Um COOKIE é um arquivo criado pelo servidor no computador do 
usuário para armazenar algumas informações.

EX: se eu entro num site duma loja hoje que faz venda varias coisas e 
pesquiso por um tennis, amanha quando eu voltar a entrar no site ele vai me 
exibir tennis ( com mais destaque ). */
?>

<?php

   //COOKIE

   setcookie('user','joão da silva',time()+3600);
   setcookie('email','leandroUcuamba@gmail.com',time()-3600);
   setcookie('ultima_pesquisa','tennis adidas',time()+3600);

   // var_dump($_COOKIE);
   echo $_COOKIE['ultima_pesquisa'];

?>
