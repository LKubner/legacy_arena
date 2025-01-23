<?php
require_once "../conexao.php";
$conexao = conectar();

$nome = $_POST['nome'] ?? '';
$foto_time = $_FILES['foto_time']['name'] ?? ''; 
$id_equipe = $_POST['id_equipe'] ?? 0;
$id_jogo = $_POST['id_jogo'] ?? 0;



if (empty($id_equipe) || empty($nome) || empty($id_jogo)) {
    die("Faltando dados obrigatórios.");
}


if ($_FILES['foto_time']['error'] === UPLOAD_ERR_OK) {
    $foto_time = $_FILES['foto_time']['name'];
    $diretorio = '../imagens/'; 
    move_uploaded_file($_FILES['foto_time']['tmp_name'], $diretorio . $foto_time);
}


if (empty($foto_time)) {

    $sql = "UPDATE equipe SET
            nome='$nome',
            id_jogo='$id_jogo'
            WHERE id_equipe=$id_equipe";
} else {
 
    $sql = "UPDATE equipe SET
            nome='$nome',
            foto_time='$foto_time', 
            id_jogo='$id_jogo'
            WHERE id_equipe=$id_equipe";

      
}
executarSQL($conexao, $sql);

header('location:../indexadm.php');
exit();
?>
