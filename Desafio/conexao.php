<?php

$sgbd ="mysql";
$host ="localhost";
$usuario ="root";
$senha ="pwdpwd";
$bd ="agenda_contato";

$conexao = new PDO("$sgbd:host=$host;dbname=$bd", $usuario, $senha);

?>