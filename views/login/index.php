<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
 .box {
    box-shadow: 1px 1px 10px 1px rgb(197, 197, 197);
    padding: 50px;
    margin-top: 30px;
    border-radius: 5px;
 }

 
</style>

<body>
    <div class="row container-fluid">
        
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <div class="box">
            <div class="inputs text-center">
                <h4>LOGIN</h4>
                <div class="row">
                
                    <form action="login.php" method="POST">
                        <label for="nome">Nome:</label><br>
                        <input type="text" name="username" class="form-control nome">
                        <label for="senha" >Senha:</label>
                        <input type="password" name="senha" class="form-control senha"><br><br>
                        <button type="submit" class="btn btn-success">Entrar</button>
                    </form>
                </div>
                
                </div>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
</body>
</html>