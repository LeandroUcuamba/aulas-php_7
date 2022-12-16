<html>
<body>

<?php
if(isset($_POST['enviar-formulario'])):
   $formatosPermitidos = array ("png","jpeg","jpg","gif"); //cria um array com as extensoes aceites no sistema;
   $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION); // pega a extensao de um arquivo;

   if(in_array($extensao ,$formatosPermitidos)):  // verifica se a extensao existe neste array " $formatosPermitidos ";
     echo "Existe";
   else:
   	 echo "Nao Existe";
   endif;

endif;
?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="POST" enctype="multipart/form-data">
	<input type="file" name="arquivo"><br>
	<input type="submit" name="enviar-formulario">
</form>

</body>
</html>