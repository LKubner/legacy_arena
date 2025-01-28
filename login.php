<?php
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

require_once "conexao.php";
$conexao = conectar();

$sql = "SELECT * FROM administrador WHERE email='$email'";
$resultado = mysqli_query($conexao, $sql);

if ($resultado === false) {
    echo "Erro ao buscar usuário! " . mysqli_errno($conexao) . ":" . mysqli_error($conexao);
    die();
}

$nome = mysqli_fetch_assoc($resultado);

if (empty($nome)) {
    echo "Conta não existe no sistema! Por favor, contate algum administrador.";
    die();
}

$hash = $nome['senha'];

if (password_verify($senha, $hash)) {
    // Verifica se a senha está correta
    $_SESSION['email'] = $email;
    $_SESSION['admin_logged_in'] = true;
    header('location:indexadm.php');
    exit();
} else {
    echo "Senha inválida! Tente novamente";
}
?>
