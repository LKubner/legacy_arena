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
    <label for="grupo">Grupo:</label>
    <select name="grupo" id="grupo">
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
        <option value="E">A</option>
        <option value="F">B</option>
        <option value="G">C</option>
    </select>
    <br><br>

    Partidas: <input type="text"> <br>
    Equipe: <input type="text"> <br>
    Vitórias: <input type="text"> <br>
    Derrotas: <input type="text"> <br>
    Dif.Rounds: <input type="text"> <br>
    Pontos: <input type="text"> <br>
    <input type="submit" value="Submit">

</body>

</html>