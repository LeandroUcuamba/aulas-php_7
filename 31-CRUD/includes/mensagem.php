<?php
//sessao
session_start(); // inicia a sessao;
if(isset($_SESSION['mensagem'])): //se sessao['mensagem'] ser executada;?>

<?php//funcao javascript para apresentar na tela msm quando a tela carregar ?>
<script>
     window.onload = function() {
          M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'});
     };
</script>

<?php
endif;
session_unset(); //limpa a sessao, ou seja limpa a mensagem da 'sessao';

?>