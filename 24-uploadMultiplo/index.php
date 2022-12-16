<html>
<body>

<?php
if(isset($_POST['enviar-formulario'])):
   $formatosPermitidos = array ("png","jpeg","jpg","gif"); //cria um array com as extensoes aceites no sistema;
   $quantidadeArquivos = count($_FILES['arquivo']['name']);
   $contador = 0;

   while($contador < $quantidadeArquivos):

         $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION); // pega a extensao de um arquivo;

         if(in_array($extensao ,$formatosPermitidos)):  // verifica se a extensao existe neste array " $formatosPermitidos ";
           $pasta = "arquivos/";
           $temporario = $_FILES['arquivo']['tmp_name'][$contador];
           $novoNome = uniqid().".$extensao";

           if(move_uploaded_file($temporario, $pasta.$novoNome)):
     	      echo "Upload feito com sucesso para $pasta.$novoNome<br>";
          else:
             echo "Erro ao enviar arquivo $temporario<br>";
          endif;
     
         else:
   	        echo "Extensao nao e permitida<br>";
         endif;

     $contador++;  
   endwhile;

endif;
?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="POST" enctype="multipart/form-data">
	<input type="file" name="arquivo[]" multiple><br>
	<input type="submit" name="enviar-formulario">
</form>

</body>
</html>