<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet"/>
    <title>Agenda</title>
    <!-- iniciando bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <!-- icone -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<form action ="index.php" method="POST"> 
<body class="main-bg">
        <div class="login-container text-c animated flipInX">
                <div>
                    <h1 class="logo-badge text-whitesmoke"><span class="fa fa-user-circle"></span></h1>
                </div>
                    <h3 class="text-whitesmoke"></h3>
                    <p class="text-whitesmoke">Acessar Agenda</p>
                <div class="container-content">
                    <form class="margin-t">
                        <div class="form-group">
                        <br>
                            <input type="text" class="form-control" name ="usuario" placeholder="Usuário" required="">
                            <br>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name ="senha" placeholder="*****" required="">
                            <br>
                        </div>
                        <button type="submit" class="form-button button-l margin-b">Entrar</button>
        
                        <a class="text-darkyellow" href="#"><small>Esqueceu sua senha?</small></a>
                        <br>
                        <a class="text-darkyellow" href="#"><small>Fazer Cadastro</small></a>
                    </form>
                    <p class="margin-t text-whitesmoke"><small> Yuri Augusto do Reis  &copy; 2021</small> </p>
                </div>
            </div>
</body>
</form>
</body>
</html>



