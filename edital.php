<?php

include_once "conexao.php";
include_once "header.php";
$conexao = conectar();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editais eJif</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="../js.js"></script>
</head>

<body>

    <div class="main-content-2" style="margin-left: 50px;">
        <?php


        if (isset($_GET['id_torneios'])) {
            $sql = "SELECT * FROM edital  where id_torneios = " . $_GET['id_torneios'];
        } else {

            $sql = "SELECT * FROM edital";

        }

        $resultado = executarSQL($conexao, $sql);
        ?>
        <h1> Editais </h1>

        <div class="row">
            <?php while ($edital = mysqli_fetch_assoc($resultado)) {  ?>

                
                    <div class="col s6 m1">
                        <div class="card">
                            <div class="card-image">
                            <a href="./imagens/<?= $edital['arquivo'] ?>" target="_blank" >
                                <img class="activator" src="imagens/icon-pdf.png"  style="height: auto; width: 150px;">
                            </a>
                              
                            </div>
                           
                        </div>
                    </div>
             


            <?php } ?>
        </div>
    </div>
</body>

</html>