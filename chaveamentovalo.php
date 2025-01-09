<?php
require_once "conexao.php";
$conexao = conectar();


// Consultas ao banco de dados
$sql = "SELECT * FROM rankingvalo";
$resultado = mysqli_query($conexao, $sql);
if ($resultado) {
    $grupos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
}



//pegar as informações que mando via GET
$idjogo = $_GET['id'];

if ($idjogo){
$sql2 = "SELECT val.*, eq.nome, eq.foto_time
FROM rankingvalo val
INNER JOIN equipe eq ON val.id_equipe = eq.id_equipe
WHERE val.id_jogos = 3
ORDER BY val.grupo;";
}
$resultado1 = mysqli_query($conexao, $sql2);

$teste = mysqli_fetch_assoc($resultado1);
if ($teste != null) {
    $grupo = $teste['grupo'];
    mysqli_data_seek($resultado1, 0);
} else {
    $grupo = '';
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Grupos e Play-offs CS</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="main-content"> 
    <div class="tabela-container">
        <h1>Grupos Valorant</h1>
        <?php
        $grp = '';
        $primeira = true;
        while ($dados = mysqli_fetch_assoc($resultado1)) {
            if ($grp != $dados['grupo']) {
                $grp = $dados['grupo'];

                if (!$primeira) {
                    echo "</tbody></table><br>";
                }
                $primeira = false;
        ?>
                <table border="1">
                     <table class="tabela-partidas">
                    <thead>
                        <tr>
                            <th>Grupo <?= $dados['grupo']; ?></th>
                            <th>Nome</th>
                            <th>Partidas</th>
                            <th>Vitórias</th>
                            <th>Derrotas</th>
                            <th>Dif. Round</th>
                            <th>Pontos</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php
            }

            $foto_time = 'imagens/' . (isset($dados['foto_time']) ? $dados['foto_time'] : 'default.png');
            if (!file_exists($foto_time)) {
                $foto_time = 'imagens/default.png'; // Caminho para uma imagem padrão se a imagem não for encontrada
            }
            ?>
            <tr>
                <td><img src="<?= $foto_time; ?>" alt="foto do time" style="width:32px;height:28px;"></td>
                <td><?= $dados['nome']; ?></td>
                <td><?= $dados['partidas']; ?></td>
                <td><?= $dados['vitoria']; ?></td>
                <td><?= $dados['derrota']; ?></td>
                <td><?= $dados['dif_round']; ?></td>
                <td><?= $dados['pontos']; ?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
        </table>
        <a href="playoffscs.php">Acessar Play-Offs</a>
</div>
</body>
</html>