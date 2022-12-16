<html>
<head>
	<title>  </title>
</head>

<body>

  <?php
    /* Validações -> serve para definir o tipo de dados a ser passado pelo usuario num campo. Eles retoram um valor ( true ou false);
    
     Funções (filter_input  -  filter_var)
     FILTER_VALIDATE_INT
     FILTER_VALIDATE_EMAIL
     FILTER_VALIDATE_FLOAT
     FILTER_VALIDATE_IP
     FILTER_VALIDATE_URL
    */
  ?>

<?php
    
  if(isset($_POST['enviar-formulario'])): //se clicar no botao;
        $erros = array();
        $idade = $_POST['idade']; // pega o dados passado no campo pelo usuario;
        echo $idade;
  endif; 
  echo "<br><hr>";

  ?> 


  <?php
    
  if(isset($_POST['enviar-formulario']))
        // Array de erros
        $erros = array();
        
        // Validações
        if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
           $erros[] = "idade precisa ser um inteiro";
        endif;


        // Exibindo mensagem
        if(!empty($erros)):
          foreach ($erros as $erro):
            echo "<li> $erro </li>";
          endforeach;
        else:
           echo "Parabens os dados estao correctos";
        endif;

  ?>
	 


	 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> 
	 Idade: <input type="text" name="idade"><br>
	 Email: <input type="text" name="email"><br>
	 Peso:  <input type="text" name="peso"><br>
	 IP:  <input type="text" name="ip"><br>
	 URL:  <input type="text" name="url"><br>
	 <button type="submit" name="enviar-formulario"> Enviar </button>
	 </form>

</body>
</html>