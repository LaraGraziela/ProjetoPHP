<?php
    var_dump($_POST);
    include_once('../config/conexao.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $id = $_POST['id'];
    
    
    $sql = "UPDATE cliente SET 
    
    nome='$nome', email='$email', password='$senha', rua='$rua', numero='$numero', bairro='$bairro', cep='$cep'
    
    WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
    echo "Alterações salvas!";
    } else {
    echo "Erro ao salvar, tente novamente boy :) " . mysqli_error($conn);
    }

?>