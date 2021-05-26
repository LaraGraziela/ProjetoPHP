<?php 
    include_once('../config/conexao.php');

    $nomeManicure = $_POST['nomeManicure'];
    $nomeCliente = $_POST['nomeCliente'];
    $valor = $_POST['valor'];
    $horario = $_POST['horario'];

    $sql = "INSERT INTO manicure (nomeManicure, nomeCliente, valor, horario) VALUES ('$nomeManicure', '$nomeCliente', '$valor', '$horario')";

    if (mysqli_query($conn,$sql)){
        echo 'Criado com sucesso!';
    }else{
        echo 'Erro'.$sql.'<br>'.mysqli_error($conn);
    }

    mysqli_close($conn);
?>