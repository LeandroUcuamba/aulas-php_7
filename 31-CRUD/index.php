<?php
//conexao
include_once 'php_action/db_connect.php';
//Header
include_once 'includes/header.php';
//mensagem
include_once 'includes/mensagem.php';
?>

<div class="row">
   <div class="col s12 m6 push-m3">
       <h3 class="light"> Cliente </h3>
       <table class="striped">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Sobrenome:</th>
                    <th>Email:</th>
                    <th>Idade:</th>
                </tr>
            </thead>

            <tbody>
                <?php
                //Fazer listagem dos dados;
                $sql = "SELECT * FROM clientes"; //comando select;
                $resultado = mysqli_query($connect, $sql); //conexao e querySQL;
                while($dados = mysqli_fetch_array($resultado)): //inicio do ciclo;
                ?>
                <tr>
                    <td><?php echo $dados['nome']; ?></td>
                    <td><?php echo $dados['sobrenome']; ?></td>
                    <td><?php echo $dados['email']; ?></td>
                    <td><?php echo $dados['idade']; ?></td>
                    <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                    <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>
                

                    <?php //Este e um arquivo css, do materialize -> msm para cancelar ou deletar ?>
                    <!-- Modal Struture -->
                     <div id="modal<?php echo $dados['id']; ?>" class="modal">
                      <div class="modal-content">
                         <h4>Opa! </h4>
                         <p>Tem certeza que deseja excluir este cliente? </p>
                      </div>
                      <div class="modal-footer">

                          <form action="php_action/delete.php" method="POST">
                              <input type="hidden" name="id" value="<?php echo $dados['id']; ?>" >
                              <button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>
                              <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat"> Cancelar </a>
                          </form>
                      </div>
                     </div>
                
                </tr>
                <?php endwhile; //fim do ciclo;?>

            </tbody>
       </table>
       <br>
       <a href="adicionar.php" class="btn"> Adicionar Cliente </a>
   </div>
</div>

<?php
  include_once 'includes/footer.php';
?>