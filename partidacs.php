<?php
include_once "header.php";
include_once "conexao.php";
$conexao = conectar();
// Simulando dados das partidas (
   $partidas = [
      [
          'time_casa' => 'Imperial',
          'gols_casa' => 2,
          'time_fora' => 'Furia',
          'gols_fora' => 1,
          'data' => '10/10/2024',
          'horario' => '16:00',
          'fase' => 'Fase de Grupos'
      ],
      [
         'time_casa' => 'Pain',
         'gols_casa' => 2,
         'time_fora' => 'Wildcard',
         'gols_fora' => 0,
         'data' => '10/10/2024',
         'horario' => '18:30',
         'fase' => 'Fase de Grupos'
     ],
     [
      'time_casa' => '9z',
      'gols_casa' => 2,
      'time_fora' => 'Dusty Roots',
      'gols_fora' => 0,
      'data' => '10/10/2024',
      'horario' => '18:30',
      'fase' => 'Fase de Grupos'
  ],
  [
   'time_casa' => 'Navi',
   'gols_casa' => 1,
   'time_fora' => 'G2',
   'gols_fora' => 2,
   'data' => '10/10/2024',
   'horario' => '20:30',
   'fase' => 'Fase de Grupos'
],
      // Adicionar mais partidas aqui
  ];
// Consultas ao banco de dados

?>








?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Partidas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <div id="main-content"> 
    <div class="tabela-partidas">
        <h1>Tabela de Partidas - Counter Strike</h1>
        <table>
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Horario</th>
                    <th>Time A </th>
                    <th>Placar</th>
                    <th>Time B</th>
                    <th> Fase </th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($partidas as $partida): ?>
<tr>
    <td><?php echo $partida['data']; ?></td>
    <td><?php echo $partida['horario']; ?></td>
    <td><?php echo $partida['time_casa']; ?></td>
    <td><?php echo $partida['gols_casa'] . " - " . $partida['gols_fora']; ?></td>
    <td><?php echo $partida['time_fora']; ?></td>
    <td> <?php echo $partida['fase'] ?> </td>
</tr>
<?php endforeach; ?>
            </tbody>
        </table>
    </div>
    </div>
    <script src="script.js"></script>
</body>
</html>