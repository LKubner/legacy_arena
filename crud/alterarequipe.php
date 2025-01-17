<?php
$foto_time = $_GET['foto_time'] ?? 0;
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Arquivo</title>
</head>

<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Alterando o arquivo <?= $foto_time ?>:<br>
        <input type="hidden" name="nome_arquivo" value="<?= $foto_time ?>">
        <input type="file" name="arquivo"><br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>