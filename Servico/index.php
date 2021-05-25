<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manicure</title>
</head>
<body>
    <form action="dadosManicure.php" method="POST">
        <h2>MARCAR HORÁRIO</h2>
        <input type="text" name="nomeManicure" placeholder="Nome da manicure"><br><br>
        <input type="text" name="nomeCliente" placeholder="Nome do(a) cliente"><br><br>
        <input type="text" name="valor" placeholder="Valor do serviço"><br><br>
        <input type="time" name="horario" placeholder="Horário"><br><br>
        <button type="submit">Marcar</button>

    </form>
</body>
</html>


