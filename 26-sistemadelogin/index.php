<?php
// Conexao
require_once 'db_connect.php'; // é como se o codigo do arquivo 'db_connect.php' estivesse escrito aqui!!!

// Sessiao
session_start();

// botao enviar
if(isset($_POST['btn-entrar'])):
   $erros = array();
   $login = mysqli_escape_string($connect, $_POST['login']); // esta funcao para filtrar os dados;
   $senha = mysqli_escape_string($connect, $_POST['senha']);

  if(empty($login) or empty($senha)):
  	 $erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
  else:
  	 $sql = " SELECT login FROM usuarios WHERE login = '$login' "; // se nao este vazio os campos ele verifica se os dados estao na bd;
    $resultado = mysqli_query($connect,$sql); // imprime o resultado desta consulta; 
     //Agora verificar se o login que o user digitou existe lá na Base de dados;

     if(mysqli_num_rows($resultado) > 0): 
        $senha = md5($senha); // criptografar a senha antes de inserir na consulta SQL.
        $sql = " SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha' ";
        $resultado = mysqli_query($connect,$sql);
        
           if(mysqli_num_rows($resultado) == 1): 
               $dados = mysqli_fetch_array($resultado); //converte em array o valor do resultado, depois será atribuido na variavel dados;
               mysqli_close($connect);
               $_SESSION['logado'] = true;
               $_SESSION['id_usuario'] = $dados['id'];
               header('location: home.php');
           else:
               $erros[] = "<li> Usuario e Senha nao conferem </li>";
           endif;
           
     else:
       $erros[] = "<li> Usuário nao existe </li>";
     endif;

  endif;

endif;
?>

<html>
   <head>
	    <title>Login</title>
      <meta charset="utf-8">
   </head>
 <body>

   <h1> LOGIN: </h1>

<?php

 if(!empty($erros)): // Aqui ele verifica se o array $erros. Se não esta vazio é porque tem erros e imprime;
 	foreach ($erros as $erro):
       echo $erro;
    endforeach;
 endif;
?>

<hr>

   <form action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="POST">
   Login: <input type="text" name="login"><br>
   Senha: <input type="password" name="senha"><br>
   <button type="submit" name="btn-entrar"> Entrar </button>
   </form>

 </body>
</html>