<?php
require_once "../conexao.php"

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form action="grupocs.php" method="post" enctype="multipart/form-data">


        <label for="grupo">Grupo:</label>
        <select name="grupo" id="grupo">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
            <option value="F">F</option>
            <option value="G">G</option>
        </select>
        <br><br>

        Foto da equipe, Selecione o arquivo: <input type="file" name="foto_time"> <br>
        Partidas: <input type="text" name="partidas"> <br>
        Equipe: <input type="text" name="equipe"> <br>
        Vitórias: <input type="text" name="vitorias"><br>
        Derrotas: <input type="text" name="derrotas"> <br>
        Dif.Rounds: <input type="text" name="difround"> <br>
        Pontos: <input type="text" name="pontos"> <br>
        <input type="submit" value="Enviar">

</body>
</form>
</html>