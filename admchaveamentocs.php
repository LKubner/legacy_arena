<?php
require_once "conexao.php";
$conexao = conectar();
$sql = "SELECT * FROM rankingcs";
$resultado = mysqli_query($conexao, $sql);
if ($resultado) {
    $grupos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
}

$sql2 = "SELECT * from rankingcs cs  inner join equipe eq on cs.id_equipe = eq.id_equipe";
$resultado1 = mysqli_query($conexao, $sql2);

?>






<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Grupos CS</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <a href="crud/grupocs.php">Novo Grupo</a>
    <table border="1">
        <tr>
            <th>Grupo A</th>
            <th>Partidas</th>
            <th>Vitórias</th>
            <th>Derrotas</th>
            <th>Dif. Round</th>
            <th>Pontos</th>
        </tr>

        <tbody>

            <?php

            while ($dados = mysqli_fetch_assoc($resultado1)) {

                echo "<tr>";
                echo "<td>" . $dados['grupo'] ."</td>";
                echo "<td>" . $dados['nome'] ."</td>";
                echo "</tr>";

            }

            ?>

        </tbody>

    </table>
</body>

</html>