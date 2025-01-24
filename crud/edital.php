<?php
$pastaDestino = "C:/wamp64/www/legacy_arena/imagens/";
$id_torneios = $_POST['id_torneios'];
$nome = $_POST['nome'];
// verificar se o tamanho do arquivo é maior que 20 MB
if ($_FILES['arquivo']['size'] > 20000000) {  // 20 MB
    echo "O tamanho do arquivo é maior que o limite permitido. Limite máximo: 20 MB.";
    die();
}

// verificar se o arquivo é uma imagem
$extensao = strtolower(pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION));

if (
    $extensao != "png" && $extensao != "jpg" &&
    $extensao != "jpeg" && $extensao != "gif" &&
    $extensao != "jfif" && $extensao != "svg" &&
    $extensao != "pdf"
) { // condição de guarda 👮
    echo "O arquivo não é uma imagem! Apenas selecione arquivos 
    com extensão png, jpg, jpeg, gif, jfif, svg ou pdf.";
    die();
}


$nomeArquivo = uniqid();

// se deu tudo certo até aqui, faz o upload
$fezUpload = move_uploaded_file(
    $_FILES['arquivo']['tmp_name'],
    $pastaDestino . $nomeArquivo . "." . $extensao
);
if ($fezUpload == true) {
    $conexao = mysqli_connect("localhost", "root", "", "legacy_arena");
    $sql = "INSERT INTO edital (arquivo, id_torneios, nome) VALUES ('$nomeArquivo.$extensao','$id_torneios','$nome')";
    $resultado = mysqli_query($conexao, $sql);
    if ($resultado != false) {
        // se for uma alteração de arquivo
        if (isset($_POST['arquivo'])) {
            $apagou = unlink(__DIR__ . $pastaDestino . $_POST['arquivo']);
            if ($apagou == true) {
                $sql = "DELETE FROM edital WHERE arquivo='" 
                        . $_POST['arquivo'] . "'";
                $resultado2 = mysqli_query($conexao, $sql);
                if ($resultado2 == false) {
                    echo "Erro ao apagar o arquivo do banco de dados.";
                    die();
                }
            } else {
                echo "Erro ao apagar o arquivo antigo.";
                die();
            }
        }
        header("Location:cadastrar-edital.php");
    } else {
        echo "Erro ao registrar o arquivo no banco de dados.";
    }
} else {
    echo "Erro ao mover arquivo.";
}
