<html>
<body>

<?php
if(isset($_POST['enviar-formulario'])):
   $formatosPermitidos = array ("png","jpeg","jpg","gif"); //cria um array com as extensoes aceites no sistema;
   $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION); // pega a extensao de um arquivo;

   if(in_array($extensao ,$formatosPermitidos)):  // verifica se a extensao existe neste array " $formatosPermitidos ";
     $pasta = "arquivos/";
     $temporario = $_FILES['arquivo']['tmp_name'];
     $novoNome = uniqid().".$extensao";

     if(move_uploaded_file($temporario, $pasta.$novoNome)):
     	$mensagem = "Upload feito com sucesso!";
     else:
      $mensagem = "Erro, no e possivel fazer o upload!";
     endif;
     
   else:
   	  $mensagem = "Formato invalido";
   endif;

 echo $mensagem;

endif;
?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="POST" enctype="multipart/form-data">
	<input type="file" name="arquivo"><br>
	<input type="submit" name="enviar-formulario">
</form>

</body>
</html>