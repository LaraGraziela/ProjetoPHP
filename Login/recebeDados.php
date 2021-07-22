<?php
    include_once('../config/conexao.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM cliente WHERE email='$email' AND password='$senha'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "Email: ".$row['email']."<br> EMAIL ENCONTRADO! <br><br>";
            
            //INICIANDO SESSÃO
            session_start();

            //GUARDANDO VALORES EM VARIÁVEL SESSION
            $_SESSION['dadosDoUsuario'] = $row;

            header('location: admin.php');
        }

    }else {
        echo "Perfil não encontrado.";
    }
?>