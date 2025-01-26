<?php
require_once "../conexao.php";
$conexao = conectar();

$id = $_POST['id'];
$nome = $_POST['nome'] ?? '';
$nickname = $_POST['nick'] ?? '';
$email = $_POST['email'] ?? 0;
$categoria = $_POST['categoria'] ?? 0;



if (empty($id) || empty($nome) ||   empty ($email)) {
    die("Faltando dados obrigatórios.");
} else

$sql = "UPDATE atleta SET
nome='$nome', 
nickname='$nickname',
email='$email',
categoria='$categoria'

WHERE id=$id";
executarSQL($conexao, $sql);
 
header('location:cadastrar-atletas.php');
exit();
?>
