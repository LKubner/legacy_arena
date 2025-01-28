<?php
include_once "../conexao.php";
$conexao = conectar();

include_once "header.php";

$id_equipe = $_GET['id_equipe'] ?? null;
$id_atleta = $_GET['id_atleta'] ?? null;

// Verificar se ambos estão ausentes
if (!$id_equipe && !$id_atleta) {
    die("ID da equipe ou ID do atleta não fornecido!");
}

// Inicializa as variáveis de consulta
$sql_xadrez = $sql_cs = $sql_lol = $sql_ff = $sql_valo = null;

// Definir a consulta dependendo de qual ID foi fornecido
if ($id_atleta) {
    // Se foi fornecido o ID do atleta
    $sql_xadrez = "SELECT * FROM rankingxadrez WHERE id_atleta = $id_atleta";
    $resultado_xadrez = executarSQL($conexao, $sql_xadrez);
    $grupos = mysqli_fetch_assoc($resultado_xadrez);
} elseif ($id_equipe) {
    // Se foi fornecido o ID da equipe
    $sql_cs = "SELECT * FROM rankingcs WHERE id_equipe = $id_equipe";
    $sql_lol = "SELECT * FROM rankinglol WHERE id_equipe = $id_equipe";
    $sql_ff = "SELECT * FROM rankingff WHERE id_equipe = $id_equipe";
    $sql_valo = "SELECT * FROM rankingvalo WHERE id_equipe = $id_equipe";

    // Executa as consultas para as equipes
    $resultado_cs = executarSQL($conexao, $sql_cs);
    $resultado_lol = executarSQL($conexao, $sql_lol);
    $resultado_ff = executarSQL($conexao, $sql_ff);
    $resultado_valo = executarSQL($conexao, $sql_valo);

    // Verifica se algum dos resultados retornou dados
    $grupos = mysqli_fetch_assoc($resultado_cs) ?? mysqli_fetch_assoc($resultado_lol) ?? mysqli_fetch_assoc($resultado_ff) ?? mysqli_fetch_assoc($resultado_valo);
}

// Verifica se foi encontrado algum grupo
if (!$grupos) {
    die("Grupo não encontrado!");
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../css/style.css" media="screen,projection" />
    <title>Alterar Grupo</title>
</head>

<body>
    <main class="container"> <br>
        <h1 class="center-align">Alterar Grupo</h1>
        <div class="card-panel">
            <form action="alterargrupo.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id_equipe" value="<?= ($grupos['id_equipe']) ?>">
                <input type="hidden" name="id_atleta" value="<?= ($grupos['id_atleta']) ?>">
                <br>

                <label>Grupo
                    <input type="text" name="grupo" value="<?= ($grupos['grupo']) ?>" required>
                </label><br>

                <label>Partidas
                    <input type="text" name="partidas" value="<?= ($grupos['partidas']) ?>" required>
                </label><br>
<?php  if($grupos['id_jogos'] == 5)  {?>
                <label>Pontos Etapa 1
                    <input type="text" name="pontose1" value="<?= ($grupos['pontose1']) ?>" required>
                </label><br>
                <label>Pontos Etapa 2
                    <input type="text" name="pontose2" value="<?= ($grupos['pontose2']) ?>" required>
                </label><br>
                <label>Pontos Etapa 3
                    <input type="text" name="pontose3" value="<?= ($grupos['pontose3']) ?>" required>
                </label><br>
                <label>Pontos Etapa 4
                    <input type="text" name="pontose4" value="<?= ($grupos['pontose4']) ?>" >
                </label><br>
                <label>Pontos Etapa 5
                    <input type="text" name="pontose5" value="<?= ($grupos['pontose5']) ?>" >
                </label><br>
                <label>Categoria
                    <input type="text" name="categoria" value="<?= ($grupos['categoria']) ?>" required>
                </label><br>
<?php } ?>


                <?php if($grupos['id_jogos'] == 1 || $grupos['id_jogos'] == 2 ||  $grupos['id_jogos'] == 3 || $grupos['id_jogos'] == 4 ) { ?>
                <label>Pontos
                    <input type="number" name="pontos" value="<?= ($grupos['pontos']) ?>" required>
                </label><br>
<?php }  else { ?>
 
    <?php } ?>

    <?php if($grupos['id_jogos'] == 1 || $grupos['id_jogos'] == 2 ||  $grupos['id_jogos'] == 3 || $grupos['id_jogos'] == 4 ) { ?>
                <label>Vitorias
                    <input type="number" name="vitoria" value="<?= ($grupos['vitoria']) ?>" required>
                </label><br>
<?php } ?>

<?php if($grupos['id_jogos'] == 1 || $grupos['id_jogos'] == 2 ||  $grupos['id_jogos'] == 3 || $grupos['id_jogos'] == 4 ) { ?>
                <label>Derrota
                    <input type="number" name="derrota" value="<?= ($grupos['derrota']) ?>" required>
                </label><br>
<?php } ?>
                <?php if($grupos['id_jogos'] == 1 || $grupos['id_jogos'] == 3) { ?>
                    <label>Rounds Vencidos
                    <input type="number" name="roundV" value="<?= ($grupos['rounds_vencidos']) ?>" required>
                </label><br>
                <label>Rounds Perdidos
                    <input type="number" name="roundP" value="<?= ($grupos['rounds_perdidos']) ?>" required>
                </label><br>
<?php } else if($grupos['id_jogos'] == 2 ) { ?>
    <label>Tempo Total vitórias
                    <input type="number" name="tempo_total" value="<?= ($grupos['tempo_total_vitorias']) ?>" required>
                </label><br>
    <?php } else if($grupos['id_jogos'] == 4) { ?>
        <label>Kills
                    <input type="number" name="kills" value="<?= ($grupos['kills']) ?>" required>
                </label><br>
                <label>Numero Queda
                    <input type="text" name="numero_queda" value="<?= ($grupos['numero_queda']) ?>" required>
                </label><br>
                <label>Posição Queda
                    <input type="text" name="posicao_queda" value="<?= ($grupos['posicao_queda']) ?>" required>
                </label><br>
            <label>Grupo Final
                    <input type="number" name="grupo_final" value="<?= ($grupos['grupo_final']) ?>" required>
                </label><br>
<?php } ?>
                <label>Id_Torneio
                    <input type="number" name="id_torneio" value="<?= ($grupos['id_torneio']) ?>" required>
                </label><br>
                <label>Id_Jogo
                    <input type="number" name="id_jogos" value="<?= ($grupos['id_jogos']) ?>" required>
                </label><br>

                <input type="submit" value="Atualizar">
            </form>
        </div>
    </main>
</body>

</html>
