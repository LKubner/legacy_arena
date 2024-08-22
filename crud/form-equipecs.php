<?php
require_once "../conexao.php"

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Equipe</title>
</head>

<body>
<form action="equipecs.php" method="post" enctype="multipart/form-data">

        Foto da equipe, Selecione o arquivo: <input type="file" name="foto_time"> <br>
        Nome Equipe: <input type="text" name="equipe"> <br>
        Grupo:  <label for="grupo">Grupo: </label> 
        <select name="grupo" id="grupo">
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
        <option value="E">C</option>
        <option value="F">D</option>
</select>

        <input type="submit" value="Enviar">

</body>
</form>
</html>