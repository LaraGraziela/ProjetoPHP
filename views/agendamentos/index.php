<?php
    include_once('../../config/conexao.php');

    //FAZENDO A SELEÇÃO DOS DADOS
    $sql = "SELECT * FROM manicure"; 
    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result) > 0) { //SE HOUVER ALGUMA LINHA, FAÇA OS DE BAIXO
    //PRA CADA LINHA NO DB, IMPRIMA...
    while($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="col-sm-4">
        <div class="card" style="width:400px">
            <div class="card-body">
                <h5 class="card-title">DIARISTA: <?php echo $row['nomeManicure']; ?> </h5>
                <h5 class="card-text">CLIENTE: <?php echo $row['nomeCliente']; ?></h5>
                <p>Valor do Serviço: <?php echo $row['valor']; ?></p>
                <p>Horário: <?php echo $row['horario']; ?></p>
                <a href="#" class="btn btn-primary">Desmarcar</a>
            </div>
        </div>
    </div>
        <?php
        //IMPRIMIR OS DADOS COMO QUERO SEM REPETIR
    
    }
    } else {
    echo "0 results";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Agendamentos</title>
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
        <h1 class="text-center">AGENDAMENTOS</h1>
        <hr><br>
    </div>
    
</div>

</div>

</body>
</html>