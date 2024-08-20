<?php
require_once "../conexao.php";
$conexao = conectar();

$equipe = $_POST['equipe'];


//UPLOAD DA IMAGEM AGORA!!
$pastaDestino = "../imagens/";

// verificar se o tamanho do arquivo é maior que 2 MB
if ($_FILES['foto_time']['size'] > 2000000) {  
    echo "O tamanho do arquivo é maior que o limite permitido. Limite máximo: 2 MB.";
    die();
}

// verificar se o arquivo é uma imagem
$extensao = strtolower(pathinfo($_FILES['foto_time']['name'], PATHINFO_EXTENSION));

if (
    $extensao != "png" && $extensao != "jpg" &&
    $extensao != "jpeg" && $extensao != "gif" &&
    $extensao != "jfif" && $extensao != "svg"
) {
    echo "O arquivo não é uma imagem! Apenas selecione arquivos com extensão png, jpg, jpeg, gif, jfif ou svg.";
    die();
}

// verificar se é uma imagem de fato
if (getimagesize($_FILES['foto_time']['tmp_name']) === false) {
    echo "Problemas ao enviar a imagem. Tente novamente.";
    die();
}

$nomeArquivo = uniqid();

// se deu tudo certo até aqui, faz o upload
$fezUpload = move_uploaded_file(
    $_FILES['foto_time']['tmp_name'], __DIR__ . '/' . $pastaDestino . $nomeArquivo . "." . $extensao
);

if ($fezUpload == true) {
    // Insere os dados na tabela equipe 
    $sql2 = "INSERT INTO equipe(nome,foto_time) VALUES ('$equipe','$nomeArquivo.$extensao')";
    $resultado2 = executarSQL($conexao, $sql2);

        if ($resultado2 != false) {
            // se for uma alteração de arquivo
            if (isset($_POST['foto_time'])) {
                $apagou = unlink(__DIR__ . '/' . $pastaDestino . $_POST['foto_time']);
                if ($apagou == true) {
                    $sql4 = "DELETE FROM equipe WHERE foto_time='" . $_POST['foto_time'] . "'";
                    $resultado4 = executarSQL($conexao, $sql4);
                    if ($resultado4 == false) {
                        echo "Erro ao apagar o arquivo do banco de dados.";
                        die();
                    }
                } else {
                    echo "Erro ao apagar o arquivo antigo.";
                    die();
                }
            }
            header("Location: ../admchaveamentocs.php");
        } else {
            echo "Erro ao registrar o arquivo no banco de dados.";
        }
    } else {
        echo "Erro ao registrar os dados na tabela equipe.";
    }
?>