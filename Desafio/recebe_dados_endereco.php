<?php
    
    require_once "conexao.php";

//Atribuindo POST nas variáveis vindo do NAME (Formulário)

$id = $_POST["idContato"];
$cep = $_POST["cep"];
$bairro = $_POST["bairro"];
$rua = $_POST["rua"];
$complemento = $_POST["complemento"];
$numero = $_POST["numero"];


$q = "INSERT INTO endereco VALUES (NULL,'$id', '$cep', '$bairro', '$rua', '$complemento', '$numero')";

//Mata programa se não fizer conexão
$conexao->query($q) or die(print_r($conexao->errorInfo())); 

header('Location: index.php');