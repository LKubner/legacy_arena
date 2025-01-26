<?php
require_once "../conexao.php";
$conexao = conectar();

// Capturar os dados do formulário
$nome = $_POST['nome'];
$nick = $_POST['nick'];
$email = $_POST['email'];
$categoria = $_POST['categoria'];

$resultado3 = true;
if ($resultado3 == true) { 
    
    if ($resultado3 != false) {

        $sql = "INSERT INTO atleta (nome, nickname, email,categoria ) VALUES ('$nome','$nick','$email','$categoria')";
     

        // Executar a consulta 
        $resultado = executarSQL($conexao, $sql);

        if ($resultado != false) {
            // Redirecionar após sucesso
            header("Location: cadastrar-atletas.php");
            exit(); 
        } else {
            echo "Erro ao registrar o atleta no banco de dados.";
        }
    }
} else {
    echo "Erro ao registrar os dados na tabela atleta.";
}

// Fechar a conexão
mysqli_close($conexao);
?>