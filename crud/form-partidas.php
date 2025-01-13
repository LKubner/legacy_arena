<?php
require_once "../conexao.php";
$conexao = conectar();

// Consulta para pegar todas as equipes
$sql = "SELECT id_equipe, nome FROM equipe";
$resultado_equipes = executarSQL($conexao, $sql);
$sql2 = "SELECT id, nome FROM fases";
$resultado_fases = executarSQL($conexao,$sql2);
$sql3 = "SELECT id, nome FROM torneios";
$resultado_torneios = executarSQL($conexao, $sql3);
$sql4 = "SELECT id, nome FROM jogos";
$resultado_jogos = executarSQL($conexao, $sql4);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Partida</title>
</head>

<body>
    <form action="partidas.php" method="post" enctype="multipart/form-data">
        <label for="equipe1">Equipe 1:</label>
        <select name="equipe1" id="equipe1">
            <?php
            // Preencher o select de Equipe 1
            while ($equipe = mysqli_fetch_assoc($resultado_equipes)) {
                echo '<option value="' . $equipe["id_equipe"] . '">' . $equipe["nome"] . '</option>';
            }
            ?>
        </select>
        <br><br>

        <?php
        // Resetar o resultado para pegar as equipes novamente
        $resultado_equipes = executarSQL($conexao, $sql);
        ?>
        
        <label for="equipe2">Equipe 2:</label>
        <select name="equipe2" id="equipe2">
            <?php
            // Preencher o select de Equipe 2
            while ($equipe = mysqli_fetch_assoc($resultado_equipes)) {
                echo '<option value="' . $equipe["id_equipe"] . '">' . $equipe["nome"] . '</option>';
            }
            ?>
        </select>

        <br><br>
        Resultado time 1: <input type="text" name="resultado1"><br>
        Resultado time 2: <input type="text" name="resultado2"><br>
        Data da Partida: <input type="datetime" name="data"><br>
        <label for="fase">Fase da Partida: </label>
<select name="fase" id="fase">
    <option value="">Fase de Grupos </option> 
    <?php
    while ($fase = mysqli_fetch_assoc($resultado_fases)) {
        echo '<option value="' . $fase["id"] . '">' . $fase["nome"] . '</option>';
    }
    ?>
</select>
        
        <br> <label for="torneios"> Torneio: </label>
        <select name="torneios" id="torneios">
            <?php
            while ($torneios = mysqli_fetch_assoc($resultado_torneios)) {
                echo '<option value="' . $torneios["id"] . '">' . $torneios["nome"] . '</option>';
            }
            ?>
        </select>

        <br> <label for="jogos"> Jogo: </label>
        <select name="jogos" id="jogos">
            <?php
            while ($jogos = mysqli_fetch_assoc($resultado_jogos)) {
                echo '<option value="' . $jogos["id"] . '">' . $jogos["nome"] . '</option>';
            }
            ?>
        </select>

        <br>

        <br>

        <input type="submit" value="Enviar">
    </form>
</body>
</form>
</html>


