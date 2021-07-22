<?php 
    $id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Editar</title>
</head>
<style>
.box{
    padding: 50px;
    box-shadow: 1px 1px 10px 1px #cccccc;
    border-radius: 5px;
    margin-top: 50px;
    margin-bottom: 50px;
}
.btn {
    color: white;
}
.btn:hover {
    color: #ca00ff;
}
h5 {
    color: #ff88ff;
}

</style>
<body>
<div class="container">
    <div class="row box">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 text-center">
            <form action="salvarEdicao.php" method="POST">
                <div class="form-group">
                <div class="text-left"><h5>Dados Pessoais:</h5></div><hr>
                <div class="text-left"><label for="nome">Nome:</label></div>
                <input type="text" class="form-control" name="nome" id="nome" aria-describedby="nomeHelpId" placeholder="Nome" required>
                <small id="nomeHelpId" class="form-text text-muted text-left">Digite o nome</small>
                </div>

                <div class="form-group">
                <div class="text-left"><label for="email">Email:</label></div>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="Email" required>
                <small id="emailHelpId" class="form-text text-muted text-left">Digite o email</small>
                </div>

                <div class="form-group">
                <div class="text-left"><div class="text-left"><label for="senha">Senha:</label></div>
                <input type="password" class="form-control" name="senha" id="senha" aria-describedby="senhaHelpId" placeholder="Senha" required>
                <small id="senhaHelpId" class="form-text text-muted text-left">Digite a nova senha</small>
                </div><br>
                
                <div class="text-left"><h5>Endereço:</h5></div><hr>
                <div class="form-group">
                <div class="text-left"><label for="rua">Rua:</label></div>
                <input type="text" class="form-control" name="rua" id="rua" aria-describedby="ruaHelpId" placeholder="Ex: Rua Touro" required>
                <small id="ruaHelpId" class="form-text text-muted text-left">Digite a rua</small>
                </div>

                <div class="form-group">
                <div class="text-left"><label for="numero">Número:</label></div>
                <input type="number" class="form-control" name="numero" id="numero" aria-describedby="numeroHelpId" placeholder="Ex: 15" required>
                <small id="numeroHelpId" class="form-text text-muted text-left">Digite o número do imóvel</small>
                </div>
                
                <div class="form-group">
                <div class="text-left"><label for="bairro">Bairro:</label></div>
                <input type="text" class="form-control" name="bairro" id="bairro" aria-describedby="bairroHelpId" placeholder="Ex: Floramar" required>
                <small id="bairroHelpId" class="form-text text-muted text-left">Digite o bairro</small>
                </div>

                <div class="form-group">
                <div class="text-left"><label for="cep">CEP:</label></div>
                <input type="number" class="form-control" name="cep" id="cep" aria-describedby="cepHelpId" placeholder="Ex: 31458752" required>
                <small id="cepHelpId" class="form-text text-muted text-left">Digite o CEP</small>
                </div><br>
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                <button style="background-color: #ff88ff;"class="btn" type="submit">SALVAR</button>
                

            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
    

    
</body>
</html>