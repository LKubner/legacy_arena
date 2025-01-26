<?php

include_once "conexao.php";
include_once "header.php";
$conexao = conectar();
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editais eJif</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="../js.js"></script>
</head>

<body>

<div id="main-content"> >
        <?php


        if (isset($_GET['id_edicao']) && $_GET['id_edicao'] !== NULL && $_GET['id_edicao'] !== '' )  {
            $sql = "SELECT * FROM edital  where id_torneios = " . $_GET['id_edicao'];
        } else {

            $sql = "SELECT * FROM edital";

        }

        $resultado = executarSQL($conexao, $sql);
        ?>
     <h1 class="titulo">Editais</h1>
<br> <br> <br> <br> <br> <br> <br>
<div class="edital-lista">
    <?php while ($edital = mysqli_fetch_assoc($resultado)) { ?>
        <div class="edital-item">
            <a href="./imagens/<?= $edital['arquivo'] ?>" target="_blank" class="edital-link">
                <img class="edital-icone" src="imagens/icon-pdf.png" alt="Baixar PDF">
                <span class="edital-titulo"><?= $edital['nome'] ?></span>
            </a>
        </div>
        <hr class="edital-separator"> 
    <?php } ?>
</div>
</body>

</html>