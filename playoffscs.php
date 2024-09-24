<?php
include_once "conexao.php";
$conexao = conectar();
require_once "header.php";

// Consultas ao banco de dados
$sql = "SELECT * FROM rankingcs";
$resultado = mysqli_query($conexao, $sql);
if ($resultado) {
    $grupos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
}

$sql2 = "SELECT cs.*, eq.nome, eq.foto_time FROM rankingcs cs INNER JOIN equipe eq ON cs.id_equipe = eq.id_equipe ORDER BY cs.grupo";
$resultado1 = mysqli_query($conexao, $sql2);
















?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play-Offs</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="main-content">
<h1 class="titulo">Play-Offs Counter Strike 2</h1>
<main id="tournament">
	<ul class="round round-1">
		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner">Lousville <span>79</span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom ">NC A&T <span>48</span></li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner">Colo St <span>84</span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom ">Missouri <span>72</span></li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top ">Oklahoma St <span>55</span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom winner">Oregon <span>68</span></li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner">Saint Louis <span>64</span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom ">New Mexico St <span>44</span></li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner">Memphis <span>54</span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom ">St Mary's <span>52</span></li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner">Mich St <span>65</span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom ">Valparaiso <span>54</span></li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner">Creighton <span>67</span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom ">Cincinnati <span>63</span></li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner">Duke <span>73</span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom ">Albany <span>61</span></li>

		<li class="spacer">&nbsp;</li>
	</ul>
	<ul class="round round-2">
		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner">Lousville <span>82</span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom ">Colo St <span>56</span></li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner">Oregon <span>74</span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom ">Saint Louis <span>57</span></li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top ">Memphis <span>48</span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom winner">Mich St <span>70</span></li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top ">Creighton <span>50</span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom winner">Duke <span>66</span></li>

		<li class="spacer">&nbsp;</li>
	</ul>
	<ul class="round round-3">
		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner">Lousville <span>77</span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom ">Oregon <span>69</span></li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top ">Mich St <span>61</span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom winner">Duke <span>71</span></li>

		<li class="spacer">&nbsp;</li>
	</ul>
	<ul class="round round-4">
		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner">Lousville <span>85</span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom ">Duke <span>63</span></li>
		
		<li class="spacer">&nbsp;</li>
	</ul>
</div>		
</main>
</body>
</html>