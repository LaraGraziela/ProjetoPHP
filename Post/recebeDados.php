<?php
    $nome = $_POST['nome'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];

    //CRIANDO CONEXÃO COM O BANCO DE DADOS
    $serverName = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'listadecasamento';

    //FUNÇÃO QUE CONECTA NO BANCO
    $conn = mysqli_connect($serverName, $username, $password, $dbname);

    if (!$conn) {
        die('Conexão falhou!'.mysqli_connect_error());
    }

    //CADASTRAR OS DADOS NOS CAMPOS RESPECTIVOS
    $sql = "INSERT INTO cliente (nome, rua, numero, bairro, cep) VALUES ('$nome', '$rua', '$numero', '$bairro', '$cep')";
    
    if(mysqli_query($conn,$sql)){
        echo 'Criado com sucesso!';
    }else{
        echo 'Erro'.$sql.'<br>'.mysql_error($conn);
    }

    mysql_close($conn);
?>