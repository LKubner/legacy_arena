<?php
include_once "../conexao.php";
$conexao = conectar();

include_once "header.php";

$id_partida = $_GET['id_partida'] ?? null;

if (!$id_partida) {
    die("ID da partida não fornecido!");
}

$sql_partida = "SELECT * FROM partidas WHERE id_partida = $id_partida";
$sql_equipe = "SELECT * FROM equipe";
$resultado_equipe = executarSQL($conexao, $sql_equipe);

$resultado_partida = executarSQL($conexao, $sql_partida);

$partida = mysqli_fetch_assoc($resultado_partida);

if (!$partida) {
    die("partida não encontrada!");
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
    <title>Alterar partida</title>
</head>

<body>
    <main class="container"> <br>
        <h1 class="center-align">Alterar partida</h1>
        <div class="card-panel">
            <form action="alterarpartida.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id_partida" value="<?= ($partida['id_partida']) ?>">

                <label for="equipe">Equipe 1:</label>
                <select name="equipe" id="equipe" class="browser-default">
                    <?php
                    while ($retorno  = mysqli_fetch_assoc($resultado_equipe)) {
                        $selecionado = ($retorno['id_equipe'] == $partida['id_equipe']) ? 'selected' : '';
                        echo '<option value="' . $retorno['id_equipe'] . '" ' . $selecionado . '>' . ($retorno['nome']) . '</option>';
                    }
                    ?>

                </select>

                <label for="equipe2">Equipe 2:</label>
                <select name="equipe2" id="equipe2" class="browser-default">
                    <?php
                    mysqli_data_seek($resultado_equipe, 0);
                    while ($retorno  = mysqli_fetch_assoc($resultado_equipe)) {
                        $selecionado = ($retorno['id_equipe'] == $partida['id_equipe2']) ? 'selected' : '';
                        echo '<option value="' . $retorno['id_equipe'] . '" ' . $selecionado . '>' . ($retorno['nome']) . '</option>';
                    }
                    ?>

                </select>

                <br>

                <label>Resultado 1
                    <input type="number" name="resultado" value="<?= ($partida['resultado']) ?>" required>
                </label><br>

                <label>Resultado 2
                    <input type="number" name="resultado2" value="<?= ($partida['resultado2']) ?>" required>
                </label><br>

                <label>Data/Hora
                    <input type="datetime-local" name="data_hora" value="<?= ($partida['data_hora']) ?>" required>
                </label><br>

                <label> Ordem Partida
                    <input type="number" name="ordem_p" value="<?= ($partida['ordem_partidas']) ?>" required>
                </label><br>

                <label> Id_Fase
                    <input type="number" name="id_fase" value="<?= ($partida['id_fase']) ?>">
                </label><br>

                <label> Id_Torneio
                    <input type="number" name="id_torneio" value="<?= ($partida['id_torneio']) ?>" required>
                </label><br>


                <label>Jogo:
                    <select name="id_jogo" class="browser-default">
                        <?php
                        while ($jogo = mysqli_fetch_assoc($resultado_jogos)) {
                            $selected = ($jogo['id'] == $partida['id_jogo']) ? 'selected' : '';
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