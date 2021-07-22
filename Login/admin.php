<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
  <h2>Meus Dados</h2>
  <p>Dados cadastrados:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Endereço</th>
        <th>Opções</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo$_SESSION['dadosDoUsuario']['id']; ?></td>
        <td><?php echo$_SESSION['dadosDoUsuario']['nome']; ?></td>
        <td><?php echo$_SESSION['dadosDoUsuario']['email']; ?></td>
        <td><?php echo "{$_SESSION['dadosDoUsuario']['rua']}, n° {$_SESSION['dadosDoUsuario']['numero']}, {$_SESSION['dadosDoUsuario']['bairro']}, {$_SESSION['dadosDoUsuario']['cep']}";?></td>
        <td><a href="editar.php?id=<?php echo$_SESSION['dadosDoUsuario']['id']; ?>" class="btn btn-warning">Editar</a>
        <a href="delete.php?id=<?php echo$_SESSION['dadosDoUsuario']['id']; ?>" class="btn btn-danger">Deletar</a></td>
      </tr>
    </tbody>
  </table>
</div>
</body>
</html>