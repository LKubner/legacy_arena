<?php
require_once "../conexao.php";
$conexao = conectar();
$sql = "SELECT id, nome FROM jogos";
$resultado = executarSQL($conexao, $sql);
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

        <label for="jogo">Jogo da Equipe:</label> 
        <select name="jogo" id="jogo">
            <?php
            while($retorno = mysqli_fetch_assoc($resultado)){
                echo '<option value="' . $retorno["id"] . '">' . $retorno["nome"] . '</option>';
            };
            ?>

        </select> 
            <br> <input type="submit"> Enviar </input>
</body>
</form>
</html>