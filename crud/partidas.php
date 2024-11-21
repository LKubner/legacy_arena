<?php
require_once "../conexao.php";
$conexao = conectar();

// Capturar os dados do formulário
$equipe1 = $_POST['equipe1'];
$equipe2 = $_POST['equipe2'];
$resultado1 = $_POST['resultado1'];
$resultado2 = $_POST['resultado2'];
$fase = $_POST['fase'];
$datapartida = $_POST['data'];

echo "Equipe 1 ID: " . $equipe1 . "<br>";
echo "Equipe 2 ID: " . $equipe2 . "<br>";


$nomeArquivo = uniqid();

$resultado3 = true;
if ($resultado3 == true) { 
    
    if ($resultado3 != false) {

        // Inserir os dados na tabela partidas
        $sql = "INSERT INTO partidas (id_equipe, id_equipe2, resultado, resultado2,data_hora,) VALUES ('$equipe1','$equipe2','$resultado1','$resultado2','$datapartida')";
        // arrumar o sql de cima!!!!!

        // Executar a consulta 
        $resultado = executarSQL($conexao, $sql);

        if ($resultado != false) {
            // Redirecionar após sucesso
            header("Location: ../playoffscs.php");
            exit(); 
        } else {
            echo "Erro ao registrar a partida no banco de dados.";
        }
    }
} else {
    echo "Erro ao registrar os dados na tabela equipe.";
}

// Fechar a conexão
mysqli_close($conexao);
?>