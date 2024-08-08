<?php
    require_once "conexao.php";




    ?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Grupos CS</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <a href="grupocs.php">Novo Grupo</a>
    <table border="1">
        <tr>
            <th>Grupo A</th>
            <th>Partidas</th>
            <th>Vitórias</th>
            <th>Derrotas</th>
            <th>Dif. Round</th>
            <th>Pontos</th>
        </tr>
        <?php foreach ($grupos as $grupo): ?>
            <tr>
                <td><?php echo ($grupo['nome_grupo']); ?></td>
                <td><?php echo ($grupo['nome_equipe']); ?></td>
                <td><?php echo ($grupo['vitorias']); ?></td>
                <td><?php echo ($grupo['derrotas']); ?></td>
                <td><?php echo ($grupo['empates']); ?></td>
                <td><?php echo ($grupo['pontos']); ?></td>
                <td>
                    <a href="updategrupocs.php?id_grupo=<?php echo ($grupo['id_grupo']); ?>">Editar</a>
                    <a href="deletegrupocs.php?id_grupo=<?php echo ($grupo['id_grupo']); ?>">Deletar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>