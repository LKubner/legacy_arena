<?php
require_once "../conexao.php";
$conexao = conectar();

$id = $_POST['id'];
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? 0;



if (empty($id) || empty($nome) ||   empty ($email)) {
    die("Faltando dados obrigatórios.");
} else

$sql = "UPDATE administrador SET
nome='$nome', 
email='$email'

WHERE id=$id";

executarSQL($conexao, $sql);
 
header('location:cadastrar-administrador.php');
exit();
?>
