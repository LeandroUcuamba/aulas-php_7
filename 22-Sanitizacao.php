<html>
<head>
	<title>  </title>
</head>

<body>

  <?php
    /* Sanitização -> sao usados para limpar as variaveis;
    
     Funcoes (filter_input - filter_var)
     FILTER_SANITIZE_SPECIAL_CHARS
     FILTER_SANITIZE_INT
     FILTER_SANITIZE_EMAIL
     FILTER_SANITIZE_URL
    */
  ?>


  <?php
    
  if(isset($_POST['enviar-formulario']))
        // Array de erros
        $erros = array();

        // Sanitização
      $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
      echo $nome."<br>";

      $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
      echo $idade."<br>";

      //usando validacao com filter_var;
      if(!filter_var($idade, FILTER_VALIDATE_INT)):
        $erros[]="idade precisa ser um inteiro";
      endif;

      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
      echo $email."<br>";

      $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
      echo $url."<br>";


      // Exibindo mensagens
      if(!empty($erros)):
        foreach ($erros as $erro):
          echo "<li> $erro </li>";
        endforeach;
      else:
          echo "Parabens os dados estao correctos";
      endif;

  ?>
	 


	 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> 
   Nome: <input type="text" name="nome"><br>
	 Idade: <input type="text" name="idade"><br>
	 Email: <input type="text" name="email"><br>
	 URL:  <input type="text" name="url"><br>
	 <button type="submit" name="enviar-formulario"> Enviar </button>
	 </form>

</body>
</html>