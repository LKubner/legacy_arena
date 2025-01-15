<?php
$email = $_POST['email'];
session_start();
$_SESSION['email'] = $email;
$senha = $_POST['senha'];
require_once "conexao.php";
$conexao = conectar();
$sql = "SELECT * FROM administrador WHERE email='$email'";
$resultado = mysqli_query($conexao, $sql);
if ($resultado === false) {
    echo "Erro ao buscar usuário!" .
        mysqli_errno($conexao) . ":" . mysqli_error($conexao);
    die();
}
$nome = mysqli_fetch_assoc($resultado);
if (empty($hash)) {
    echo "Conta não existe no sistema! Por favor, contate algum administrador.";
    die();
}
$hash = $nome['senha'];
if (empty($nome)) {
    echo "Conta não existe no sistema! Por favor, contate algum administrador.";
    die();
}
if (password_verify($senha, $hash)) {
    header('location:indexadm.php');
    echo "Login bem sucedido!!";
    exit();
} 
 else {
    echo "Senha invalida! Tente novamente";
} 
?>

<?php
/*
$email = $_POST['email'];
$senha = $_POST['senha'];

require_once "conexao.php";
$conexao = conectar();

$sql = "SELECT * FROM usuario WHERE email='$email'";
$resultado = mysqli_query($conexao, $sql);
if ($resultado === false){
    echo "Erro ao buscar usuário!" . 
    mysqli_errno($conexao) . ":" . mysqli_error($conexao);
    die();
}
$usuario = mysqli_fetch_assoc($resultado);
if($usuario == null) {
    echo "Email não existe no sistema! Por favor, primeiro realize o cadastro no sistema.";
    die();
}
if ($senha == $usuario['senha']) {
    header("Location: principal.php");
} else {
    echo "Senha invalida! Tente novamente";
}
*/
