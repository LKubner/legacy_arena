<?php
require_once "../conexao.php";
$conexao = conectar();

// Consulta para pegar todas as equipes
$sql = "SELECT id_equipe, nome FROM equipe";
$resultado_equipes = executarSQL($conexao, $sql);
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
        Fase da Partida: <input type="text" name="fases"><br>
        Data da Partida: <input type="datetime" name="data"><br>
        Edição da Partida: 
        <br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</form>
</html>


SELECT p.id_partida, 
       (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe) AS nome_equipe1,
       (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe) AS foto_time1,
        p.resultado1

       (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS nome_equipe2,
       (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS foto_time2, 
       p.resultado2 
FROM partidas p;



resolvido abaixo

SELECT p.id_partida, (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe) AS nome_equipe1, (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe) AS foto_time1, p.resultado, (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS nome_equipe2, (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS foto_time2, p.resultado2 FROM partidas p;








Código para a pessoa poder diferenciar de qual edição é a tabela de partidas ( preciso fazer o select no formulario e depois fazer uma tela para selecionar a ediçao do torneio)
SELECT p.id_partida, (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe) AS nome_equipe1, (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe) AS foto_time1, p.resultado, (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS nome_equipe2, (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS foto_time2, p.resultado2, p.data_hora, (SELECT f.nome FROM fases f WHERE f.id = p.id_fase) AS fase FROM partidas p where p.id_torneio = 1
