<?php
include_once "../conexao.php";
$conexao = conectar();

include_once "header.php";

$id = $_GET['id'] ?? null;

if (!$id) {
    die("ID do Torneio não fornecido!");
}


$sql_torneios = "SELECT * FROM torneios WHERE id = $id";
$resultado_torneios = executarSQL($conexao, $sql_torneios);
$torneios = mysqli_fetch_assoc($resultado_torneios);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../css/style.css" media="screen,projection" />
    <title>Alterar Torneios</title>
</head>
<body>
<main class="container"> <br>
    <h1 class="center-align">Alterar Torneios</h1>
    <div class="card-panel">
        <form action="alterartorneios.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= ($torneios['id']) ?>">

            <br>
            
            <label>Nome
                <input type="text" name="nome" value="<?= ($torneios['nome']) ?>" required>
            </label><br>

            <label>Descrição
                <input type="text" name="descricao" value="<?= ($torneios['descricao']) ?>" required>
            </label><br>

            <label>Data Inicio
                <input type="date" name="data_inicio" value="<?= ($torneios['data_inicio']) ?>" required>
            </label><br>

            <label> Data Fim
                <input type="date" name="data_fim" value="<?= ($torneios['data_fim']) ?>" required>
            </label><br>

          

            <input type="submit" value="Atualizar">
        </form>
    </div>
</main>
</body>
</html>
