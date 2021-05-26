<?php
    include_once('../../config/conexao.php');

    $sql = "SELECT * FROM cliente";
    $result = mysqli_query($conn, $sql);

?>
        

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Clientes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
<div class="row">
    <div class="col-sm-12">
        
        <h1 class="text-center">Clientes</h1>
        <hr><br>
        <p>Clientes cadastrados:</p>   
                
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Rua</th>
                <th>Número</th>
                <th>Bairro</th>
                <th>CEP</th>
            </tr>
            </thead>
                    
            <?php if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)){
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nome']; ?></td>
                    <td><?php echo $row['rua']; ?></td>
                    <td><?php echo $row['numero']; ?></td>
                    <td><?php echo $row['bairro']; ?></td>
                    <td><?php echo $row['cep']; ?></td>
                </tr>
                                

            <?php
                }
                }else {
                    echo "0 results";
                }  
            ?>  
        </table>
    </div> 
</div>

</div>

</body>
</html>