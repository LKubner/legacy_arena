<?php

require_once "../conexao.php";
$conexao = conectar();
$id_equipe = $_POST['id_equipe'] ;
$grupo = $_POST['grupo'] ?? '';
$partidas = $_POST['partidas'] ?? '';
$pontos = $_POST['pontos'] ?? 0;
$id_torneio = $_POST['id_torneio'] ?? 0;
$id_jogos = $_POST['id_jogos'] ?? 0;

if($id_jogos == 5){
$id_atleta = $_POST['id_atleta'];
$pontose1 = $_POST['pontose1'];
$pontose2 = $_POST['pontose2'];
$pontose3 = $_POST['pontose3'];
$pontose4 = $_POST['pontose4'];
$pontose5 = $_POST['pontose5'] ;
if (empty($_POST['pontose4'])) {
    $pontose4 = 0;
}
if (empty($_POST['pontose5'])) {
    $pontose5 = 0;
}
$categoria = $_POST['categoria'];
$pontosT = intval($pontos1) + intval($pontos2) + intval($pontos3) + intval($pontos4) + intval($pontos5);
}
if($id_jogos !== 5){
$vitoria = $_POST['vitoria'] ?? 0;
$derrota = $_POST['derrota'] ?? 0;
}
if($id_jogos == 1 || $id_jogos == 3){
$roundV = $_POST['roundV'] ?? 0;
$roundP = $_POST['roundP'] ?? 0;
$difround = $roundV - $roundP;
}

if($id_jogos == 2) {
$tempo_total = $_POST['tempo_total'] ?? 0;
$tempomedio = $tempototal / $partidas;
}

if($id_jogos == 4){
$kills = $_POST['kills'] ?? 0;
$numero_queda = $_POST['numero_queda'] ?? '';
$posicao_queda = $_POST['posicao_queda'] ?? '';
$grupo_final = $_POST['grupo_final'] ?? 0;
$pontos = $pontos + $kills;
}


$oi = true;
if ($oi == false) {
    // die("Faltando dados obrigatórios.");
} else

if($id_jogos == 1){
$sql = "UPDATE rankingcs SET
grupo='$grupo', 
partidas='$partidas',
pontos='$pontos',
vitoria='$vitoria',
derrota='$derrota',
rounds_vencidos='$rounds_vencidos',
rounds_perdidos='$rounds_perdidos',
dif_round='$difround',
id_torneio='$id_torneio',
id_jogos='$id_jogos'

WHERE id_equipe=$id_equipe";
executarSQL($conexao, $sql);
header('location:cadastrar-grupocs.php');
exit();
} else if ($id_jogos == 2 ){
    $sql = "UPDATE rankinglol SET
grupo='$grupo', 
partidas='$partidas',
pontos='$pontos',
vitoria='$vitoria',
derrota='$derrota',
tempo_total_vitorias='$tempo_total',
tempo_medio_vitorias='$tempomedio',
id_torneio='$id_torneio',
id_jogos='$id_jogos'

WHERE id_equipe=$id_equipe";
executarSQL($conexao, $sql);
header('location:cadastrar-grupocs.php');
exit();
} else if ($id_jogos == 3 ){
    $sql = "UPDATE rankingvalo SET
grupo='$grupo', 
partidas='$partidas',
pontos='$pontos',
vitoria='$vitoria',
derrota='$derrota',
rounds_vencidos='$rounds_vencidos',
rounds_perdidos='$rounds_perdidos',
dif_round='$difround',
id_torneio='$id_torneio',
id_jogos='$id_jogos'

WHERE id_equipe=$id_equipe";
executarSQL($conexao, $sql);
header('location:cadastrar-grupocs.php');
exit();
} else if ($id_jogos == 4 ){
    $sql = "UPDATE rankingff SET
grupo='$grupo', 
partidas='$partidas',
pontos='$pontos',
vitoria='$vitoria',
derrota='$derrota',
kills='$kills',
numero_queda='$numero_queda',
posicao_queda='$posicao_queda',
grupo_final='$grupo_final',
id_torneio='$id_torneio',
id_jogos='$id_jogos'

WHERE id_equipe=$id_equipe";
executarSQL($conexao, $sql);
header('location:cadastrar-grupocs.php');
exit();
} else if ($id_jogos == 5 ){
    if ($pontose4 == 0) {
        $pontose4 = 'null';  
    }
    if ($pontose5 == 0) {
        $pontose5 = 'null';  
    }
    $sql = "UPDATE rankingxadrez SET
    grupo='$grupo', 
    partidas='$partidas',
    pontose1='$pontose1',
    pontose2='$pontose2',
    pontose3='$pontose3',
    pontose4=$pontose4,
    pontose5=$pontose5,
    pontosT='$pontosT',
    categoria='$categoria',
    id_torneio='$id_torneio',
    id_jogos='$id_jogos'
    
    WHERE id_atleta=$id_atleta";
    executarSQL($conexao, $sql);
    header('location:cadastrar-grupocs.php');
    exit();
}
?>
