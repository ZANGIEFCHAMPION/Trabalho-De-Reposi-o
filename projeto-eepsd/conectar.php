<?php
// CONFIGURAÇÃO DO BANCO — ALTERE AQUI PARA SEU BANCO MYSQL
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "eepd";

$con = new mysqli($host, $usuario, $senha, $banco);

if($con->connect_error){
    die("Erro ao conectar: " . $con->connect_error);
}
?>
