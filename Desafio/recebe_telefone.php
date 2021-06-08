<?php

require_once "conexao.php";
session_start();

//Atribuindo POST nas variáveis vindo do NAME (Formulário)

$id = $_POST["idContato"];
$numero = $_POST["telefone"];


$q = "INSERT INTO telefone VALUES (NULL, '$numero', '$id')";

//Mata programa se não fizer conexão
$conexao->query($q) or die(print_r($conexao->errorInfo())); 

header('Location: index.php');

?>