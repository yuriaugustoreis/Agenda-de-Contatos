<?php
    require_once "conexao.php";

?>
<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet"/>
    <!-- iniciando bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <!-- icone -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <title>Agenda de Contatos</title>
</head>
<body>
    <!-- Navbar superior -->
<nav class="navbar navbar-expand-sm bg-primary">
    <a class="navbar-brand m-2 text-white" href="index.php">Agenda de Contatos</a>

    <!-- Caixa de busca superior -->
<div class ="divBusca mx-auto form-inline">
    <form action="" class="form-inline">
        <input type="text" id="txtBusca" placeholder="Buscar..." class=""/>
        <button type="submit" id="btnBusca" class="btn btn-dark">Buscar</button>
    </form>
    </div>
</nav>

<!-- #Container/Grid -> Dividindo a tela menu/contatos -->
<div class="row">
    <div class="col-sm-3 border">
        <div class="container">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="btn btn-light" href="index.php">
                    <i class='far fa-calendar-alt' style='font-size:30px'></i>
                     Agenda
                </a>
            </li>
            <li class="nav-item">
                <a class="btn btn-light" href="contatos.php">
                <i class="fas fa-user-plus" style='font-size:27px'></i>
                    Novo Contato
                </a>
            </li>
            <li class="nav-item">
                <a class="btn btn-light" href="cadastro_telefone.php">
                <i class="far fa-address-book" style='font-size:28px'></i>
                    Cadastrar Telefone
                </a>
            </li>
            <li class="nav-item">
                <a class="btn btn-light" href="cadastro_endereco.php">
                <i class="fas fa-users" style='font-size:27px'></i>
                    Cadastrar Endereço
                </a>
            </li>
            <li class="nav-item">
                <a class="btn btn-light" href="index.php">
                <i class="far fa-comment-alt" style='font-size:30px'></i>
                    Sugestões
                </a>
            </li>
            <li class="nav-item">
                <a class="btn btn-light" href="index.php">
                <i class="far fa-comment-dots" style='font-size:30px'></i>
                    Mais
                </a>
            </li>
            <li class="nav-item">
                <a class="btn btn-light" href="index.php">
                <i class="fas fa-cog" style='font-size:30px'></i>
                    Configurações
                </a>
            </li>
        </ul>
        </div>
    </div>
<?php

//Recebendo e encaminhando informações, formulário encaminhado direto para BD
    echo'
        <div class="col-sm-9">
            <div class="container">
            <form action ="recebe_endereco.php" method ="POST">
            <br><label for="text">Escolha o usuario:</label>
            <br>
            ';
                //seleciona lista de contatos 
                $q = "SELECT * FROM contato ";
                //Mata programa se não fizer conexão
                $resultado = $conexao->query($q) or die(print_r($conexao->errorInfo()));
                if($resultado->rowCount()>0){
                    echo"<select  name='idContato'>";
                    foreach($resultado as $i => $t){
                        echo "<option value=' ". $t["id"]." ' > ". $t["nome"]."</option>";
                    }
                    echo"</select>";
                } 
            echo '

            <br><label for="text">Cep:</label>
            <br><input type="text" id="cep" name="cep" required>

            <br><label for="text">Bairro:</label>
            <br><input type="text" id="bairro" name="bairro" required>

            <br><label for="text">Rua:</label>
            <br><input type="text" id="rua" name="rua" required>

            <br><label for="text">Complemento:</label>
            <br><input type="text" id="complemento" name="complemento">

            <br><label for="text">Número:</label>
            <br><input type="number" id="numero" name="numero" required>

            <br><br><button type="submit" class="btn btn-primary">Salvar Contato</button>
            </div>
        </div>
    </div>';
?>
</body>
</html>