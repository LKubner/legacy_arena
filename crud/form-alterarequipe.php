<?php
include_once "../conexao.php";
$conexao = conectar();

include_once "header.php";

$id_equipe = $_GET['id_equipe'] ?? null;

if (!$id_equipe) {
    die("ID da equipe não fornecido!");
}

$sql_equipe = "SELECT * FROM equipe WHERE id_equipe = $id_equipe";

$resultado_equipe = executarSQL($conexao, $sql_equipe);

$equipe = mysqli_fetch_assoc($resultado_equipe);

if (!$equipe) {
    die("Equipe não encontrada!");
}

// Consulta para buscar todos os jogos
$sql_jogos = "SELECT id, nome FROM jogos";
$resultado_jogos = executarSQL($conexao, $sql_jogos);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../css/style.css" media="screen,projection" />
    <title>Alterar Equipe</title>
</head>
<body>
<main class="container"> <br>
    <h1 class="center-align">Alterar Equipe</h1>
    <div class="card-panel">
        <form action="alterarequipe.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_equipe" value="<?= ($equipe['id_equipe']) ?>">

            <label>Nome da Equipe:
                <input type="text" name="nome" value="<?= ($equipe['nome']) ?>" required>
            </label><br>


          <br>
            <label>Nova Foto:
                <input type="file" name="foto_time">
            </label><br>
            <br>
            <label>Jogo:
                <select name="id_jogo" class="browser-default">
                    <?php
                    while ($jogo = mysqli_fetch_assoc($resultado_jogos)) {
                        $selected = ($jogo['id'] == $equipe['id_jogo']) ? 'selected' : '';
                        echo '<option value="' . $jogo['id'] . '" ' . $selected . '>' . ($jogo['nome']) . '</option>';
                    }
                    ?>
                </select>
            </label><br>

            <input type="submit" value="Atualizar">
        </form>
    </div>
</main>
</body>
</html>
