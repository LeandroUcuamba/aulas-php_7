<?php
// sessao
session_start();
//conexao;
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])): //se ciclar no botão cadastrar;
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);

    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE clientes SET nome= '$nome', sobrenome= '$sobrenome', email='$email', idade='$idade' WHERE id='$id' ";

    if(mysqli_query($connect, $sql)): // Se o comando executar com sucesso na BD.
        $_SESSION['mensagem'] = "Actualizado com sucesso";
        header('Location: ../index.php'); // ?php -> volta no indice e passar na url sucesso.
    else:
        $_SESSION['mensagem'] = "Erro ao actualizar";
        header('Location: ../index.php'); 
    endif;

endif;