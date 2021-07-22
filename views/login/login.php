<?php
    include_once('../../config/conexao.php');

    $username = $_POST['username'];
    $senha = $_POST['senha'];

    //CONFERE SE O QUE FOI DIGITADO É IGUAL NO BANCO DE DADOS
    $sql = "SELECT * FROM cliente WHERE nome='$username' AND password='$senha'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            echo "Nome: ".$row['nome'];
        }
    } else {
        echo "0 results.";
    }

?>