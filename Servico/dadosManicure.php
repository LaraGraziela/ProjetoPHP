<?php 
    $nomeManicure = $_POST['nomeManicure'];
    $nomeCliente = $_POST['nomeCliente'];
    $valor = $_POST['valor'];
    $horario = $_POST['horario'];

    $serverName = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'listadecasamento';

    $conn = mysqli_connect($serverName, $username, $password, $dbname);

    if(!$conn) {
        die('Conexão falhou!'.mysqli_connect_error());
    }

    $sql = "INSERT INTO manicure (nomeManicure, nomeCliente, valor, horario) VALUES ('$nomeManicure', '$nomeCliente', '$valor', '$horario')";

    if (mysqli_query($conn,$sql)){
        echo 'Criado com sucesso!';
    }else{
        echo 'Erro'.$sql.'<br>'.mysql_error($conn);
    }

    mysqli_close($conn);
?>