<?php
//conexao
include_once 'php_action/db_connect.php';
//header
  include_once 'includes/header.php';
//select
if(isset($_GET['id'])): //se houver id na url -> por isso $_GET[];
    $id = mysqli_escape_string($connect, $_GET['id']); //pega e atribui  id da url;
    $sql = "SELECT * FROM clientes WHERE id = '$id' "; //seleciona os campos pelo id da url;
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado); //transforma os dados em array;

endif;
?>

<div class="row">
   <div class="col s12 m6 push-m3">
       <h3 class="light"> Editar Cliente </h3>
       <?php //a pagina será processado no arquivo update.php; ?>
       <form action="php_action/update.php" method="POST">
           <?php //Cria um input invisivel, e atribui o id; ?>
           <input type="hidden" name="id" value="<?php echo $dados['id']; ?>" >
           <div class="input-field col s12">
               <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
               <label for="nome">Nome</label>
           </div>

           <div class="input-field col s12">
               <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome']; ?>">
               <label for="sobrenome">Sobrenome</label>
           </div>

           <div class="input-field col s12">
               <input type="text" name="email" id="email" value="<?php echo $dados['email']; ?>">
               <label for="email">Email</label>
           </div>
           
           <div class="input-field col s12">
               <input type="number" name="idade" id="idade" value="<?php echo $dados['idade']; ?>">
               <label for="idade">Idade</label>
           </div>

           <button type="submit" name="btn-editar" class="btn"> Actualizar </button>
           <a href="index.php" class="btn green"> Lista de clientes </a>
       </form>

   </div>
</div>

<?php
  include_once 'includes/footer.php';
?>