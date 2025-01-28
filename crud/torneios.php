<?php


require_once "../conexao.php";
$conexao = conectar();

// Capturar os dados do formulário
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$data_inicio = $_POST['data_inicio'];
$data_fim = $_POST['data_fim'];
$atual = ($_POST['atual']);

$resultado3 = true;
if ($resultado3 == true) { 
    
    if ($resultado3 != false) {

        // Inserir os dados na tabela torneios
        $sql = "INSERT INTO torneios (nome, descricao, data_inicio,data_fim, atual) VALUES ('$nome','$descricao','$data_inicio','$data_fim','$atual')";
     

        // Executar a consulta 
        $resultado = executarSQL($conexao, $sql);

        if ($resultado != false) {
            // Redirecionar após sucesso
            header("Location: cadastrar-torneios.php");
            exit(); 
        } else {
            echo "Erro ao registrar o torneio no banco de dados.";
        }
    }
} else {
    echo "Erro ao registrar os dados na tabela torneio.";
}

// Fechar a conexão
mysqli_close($conexao);
?>