<?php
session_start();
require_once "conexao.php";
$conexao = conectar();

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$hash = password_hash($senha,PASSWORD_ARGON2I);
//Tem que armazenar a senha de modo seguro depois
$sql = "INSERT INTO usuario (nome,email,senha,nivel) VALUES ('$nome','$email','$hash','1')";
$resultado = mysqli_query($conexao, $sql);
if ($resultado === false) {
        if(mysqli_errno($conexao) == 1062){
            echo "email já cadastrado no sistema! tente fazer o login ou faça a recuperação de senha.";
            die();
        } else {
    echo "Erro ao inserir o novo usuario!" .
        mysqli_errno($conexao) . ": " . mysqli_error($conexao);
}
}
header("Location: index.php");