<?php
include_once "../conexao.php";
$conexao = conectar();

include_once "header.php";

$id = $_GET['id'] ?? null;

if (!$id) {
    die("ID do ADM não fornecido!");
}


$sql_administrador = "SELECT * FROM administrador WHERE id = $id";
$resultado_administrador = executarSQL($conexao, $sql_administrador);
$atletas = mysqli_fetch_assoc($resultado_administrador);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../css/style.css" media="screen,projection" />
    <title>Alterar Administrador </title>
</head>
<body>
<main class="container"> <br>
    <h1 class="center-align">Alterar Administrador </h1>
    <div class="card-panel">
        <form action="alteraradministrador.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= ($atletas['id']) ?>">

            <br>
            
            <label>Nome
                <input type="text" name="nome" value="<?= ($atletas['nome']) ?>" required>
            </label><br>

            <label>Email
                <input type="email" name="email" value="<?= ($atletas['email']) ?>" required>
            </label><br>

          
            <input type="submit" value="Atualizar">
        </form>
    </div>
</main>
</body>
</html>
