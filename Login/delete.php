<?php
    var_dump($_GET);
    include_once('../config/conexao.php');

    $id = $_GET['id'];

    $sql = "DELETE FROM cliente WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
    echo "Excluído com sucesso!";
    } else {
    echo "Erro ao excluir, tente novamente boy :) " . mysqli_error($conn);
    }

?>