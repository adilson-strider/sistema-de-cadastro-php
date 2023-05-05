<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        body {
            background-color: #f2f2f2;
        }
        .login {
            width: 100%;
            height: 90vh;
            align-items: center;
            justify-content: center;
            display: flex;
        }
    </style>
</head>
<body>
    <div class="login">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h3>Área administrativa</h3>
                        
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="post">
                        <div>
                            <div class="mb-3">
                                <label for="">Usuário</label>
                                <input type="text" name="usuario" class="form-control">
                            </div>
                        </div>
                        <div>
                            <div class="mb-3">
                                <label for="">Senha</label>
                                <input type="password" name="senha" class="form-control">
                            </div>
                        </div>
                        <div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Login</button>
                                <h6>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <footer class="bg-dark text-light">
       <div class="text-center" style="background-color: #333; padding: 20px" >
         &copy 2023 Copyright: By Adilson
        </div>
    </footer>  
</body>
</html>