<?php
// Conexao
require_once 'db_connect.php'; // é como se o codigo do arquivo 'db_connect.php' estivesse escrito aqui!!!

// Sessiao
session_start();

//verificacao, para nao entrar sem logar. (passando o paramentro pela url)
if(!isset($_SESSION['logado'])):
    header('location: index.php');
endif;


//Dados
$id = $_SESSION['id_usuario']; 
$sql = " SELECT * FROM usuarios WHERE id = '$id' ";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);
?>

<html>
  <head>
      <title>Pagina Restrita</title>
      <meta charset="utf-8">
  </head>
  <body>

      <h1> ÓLA, <?php echo $dados['nome'];  ?> </h1>
      <a href = "logout.php"> Sair </a>
  </body>
  </html>
