<?php
include_once "../conexao.php";
$conexao = conectar();
$foto_time = $_GET['foto_time'] ?? '';  // Corrigido para não ser 0
include_once "header.php";
$sql = "SELECT id, nome FROM jogos";
$resultado_jogos = executarSQL($conexao, $sql);
$id_equipe = $_GET['id_equipe'];
$nome = $_GET['nome'];

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../css/style.css" media="screen,projection" />
    <title>Alterar Arquivo</title>
</head>

<body>
<main class="container"> <br>
    <h1 class="center-align"> Alterar Equipe </h1>
<div class="card-panel">

    <form action="alterarequipe.php" method="post" enctype="multipart/form-data">
        Alterando o arquivo: <?= $foto_time ?>:<br>
        <!-- Passa foto_time como hidden -->
        <input type="hidden" name="foto_time" value="<?= $foto_time ?>">
        <label>Nome da Equipe  
            <input type="text" name="nome" value="<?= $nome ?>">  <!-- Pré-preenche o nome -->
        </label>
        <input type="file" name="foto_time"><br>
        <label for="equipe1">Equipe 1:</label>
        <select name="id_jogo" id="equipe1" class="browser-default">
            <?php
                while ($equipe = mysqli_fetch_assoc($resultado_jogos)) {
                    // Associa corretamente o id ao value da option
                    echo '<option value="' . $equipe["id"] . '">' . $equipe["nome"] . '</option>';
                }
            ?>
        </select>
        <label>  
            <input type="hidden" name="id_equipe" value="<?= $id_equipe ?>"> 
        </label><br>
        <input type="submit" value="Enviar">
    </form>
</div> 
</body>
</main>
</html>
