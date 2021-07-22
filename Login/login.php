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
    <title>LOGIN</title>
</head>

<style>
.box{
    padding: 50px;
    box-shadow: 1px 1px 10px 1px #cccccc;
    border-radius: 5px;
}
.col {
    padding-top: 50px;
}    
h3  {
    color: #ff88ff;
}

.btn {
    color:white;
}
.btn:hover{
    color:#ca00ff;
}
</style>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 text-center col">
                <div class="box">
                    <h3>LOGIN</h3><hr>                   
                    <form action="recebeDados.php" method="POST">
                        <div class="form-group">
                           <div class="text-left"> <label for="">Email:</label></div>
                            <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" required><br>
                          
                           <div class="text-left"> <label for="">Senha:</label></div>
                            <input type="password" class="form-control" name="senha" id="" required><br>
                            <button style="background-color: #ff88ff;"class="btn" type="submit">ENTRAR</button>
                        
                        </div>

                    </form>
                </div>    
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</body>
</html>