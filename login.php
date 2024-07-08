?>

<?php
$email = $_POST['email'];
session_start();
$_SESSION['email'] = $email;
$senha = $_POST['senha'];
require_once "conexao.php";
$conexao = conectar();
$sql = "SELECT * FROM usuario WHERE email='$email'";
$resultado = mysqli_query($conexao, $sql);
if ($resultado === false) {
    echo "Erro ao buscar usuário!" .
        mysqli_errno($conexao) . ":" . mysqli_error($conexao);
    die();
}
$nome = mysqli_fetch_assoc($resultado);
$hash = $nome['senha'];
if (password_verify($senha, $hash)) {

    if (empty($nome)) {
        echo "Conta não existe no sistema! Por favor, primeiro realize o cadastro no sistema.";
        die();
    }
    if ($nome['nivel'] == 2) {
        header("Location: index.php");
        $_SESSION['nivel'] = 2;
    }
    if ($nome['nivel'] == 1) {
        header("Location: indexadm.php");
        $_SESSION['nivel'] = 1;
    }
} else {
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
