<?php
require_once "../conexao.php";
$conexao = conectar();

$id = $_POST['id'] ?? '';
$nome = $_POST['nome'] ?? '';
$descricao = $_POST['descricao'] ?? '';
$data_inicio = $_POST['data_inicio'] ?? 0;
$data_fim = $_POST['data_fim'] ?? 0;

$data_inicio = date('Y-m-d', strtotime($data_inicio));
$data_fim = date('Y-m-d', strtotime($data_fim));

if (empty($id) || empty($nome) ||   empty ($descricao)) {
    die("Faltando dados obrigatórios.");
} else

$sql = "UPDATE torneios SET
id='$id',
nome='$nome', 
descricao='$descricao',
data_inicio='$data_inicio',
data_fim='$data_fim'

WHERE id=$id";
executarSQL($conexao, $sql);
 
header('location:cadastrar-torneios.php');
exit();
?>
