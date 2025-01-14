-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 14-Jan-2025 às 03:29
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `legacy_arena`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atleta`
--

DROP TABLE IF EXISTS `atleta`;
CREATE TABLE IF NOT EXISTS `atleta` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `id_equipe` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `atleta`
--

INSERT INTO `atleta` (`id`, `nome`, `nickname`, `email`, `categoria`, `id_equipe`) VALUES
(1, 'Luciano', 'luksreidelas', 'luciano@gmail.com', 'Masculino', 32);

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipe`
--

DROP TABLE IF EXISTS `equipe`;
CREATE TABLE IF NOT EXISTS `equipe` (
  `id_equipe` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `foto_time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_jogo` int NOT NULL,
  PRIMARY KEY (`id_equipe`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `equipe`
--

INSERT INTO `equipe` (`id_equipe`, `nome`, `foto_time`, `id_jogo`) VALUES
(22, 'dragoes', 'baroes.png', 0),
(24, 'capivara', NULL, 0),
(25, 'ratoes', NULL, 0),
(26, 'phoenix', NULL, 0),
(27, 'tubaroes', NULL, 0),
(28, 'galinha pintadinha', NULL, 0),
(32, 'Legacy', '66c48d0e5f97c.jfif', 0),
(34, 'Furia', '66c76411f3379.png', 0),
(35, 'plplplpl', '66c7861126ac3.png', 0),
(36, 'vfdffgwefggfrghrefr', '66c7918b4e9af.png', 0),
(37, 'YNG Sharks', '66c791f780cad.jfif', 0),
(38, 'Imperial', '66c79277b1e03.png', 0),
(39, 'NIP', '66c7932fbde2e.jfif', 0),
(40, 'Navi', '66c79344c8648.jfif', 0),
(41, '9z', '66c7935b1beeb.png', 0),
(42, 'G2', '66c793810f676.jfif', 0),
(43, 'Atlético Mineiro', 'atleticomineiro.jpg', 0),
(44, 'Internacional', 'internacional.jpg', 0),
(45, 'Grêmio', 'gremio.jpg', 0),
(46, 'Botafogo', 'botafogo.jpg', 0),
(47, 'Fluminense', 'fluminense.jpg', 0),
(48, 'Cruzeiro', 'cruzeiro.jpg', 0),
(49, 'Atlético Mineiro', 'atleticomineiro.jpg', 0),
(50, 'Internacional', 'internacional.jpg', 0),
(51, 'Grêmio', 'gremio.jpg', 0),
(52, 'Botafogo', 'botafogo.jpg', 0),
(53, 'Fluminense', 'fluminense.jpg', 0),
(54, 'Cruzeiro', 'cruzeiro.jpg', 0),
(57, 'fortnite', '673f8b4fb04b5.jpg', 0),
(58, 'T1', 't1.png', 2),
(59, 'Fnatic', 'fnatic.png', 2),
(60, 'Cloud9', 'cloud9.png', 2),
(61, 'G2 Esports', 'g2_esports.png', 2),
(62, 'EDward Gaming', 'edg.png', 2),
(63, 'Gen.G', 'geng.png', 2),
(64, 'DRX', 'drx.png', 2),
(65, 'Royal Never Give Up', 'rng.png', 2),
(66, 'Team Liquid', 'teamliquid.png', 2),
(67, 'Evil Geniuses', 'evilgeniuses.png', 2),
(68, 'MAD Lions', 'madlions.png', 2),
(69, '100 Thieves', '100thieves.png', 2),
(70, 'KT Rolster', 'ktrolster.png', 2),
(71, 'Sentinels', 'sentinels.png', 3),
(72, 'LOUD', 'loud.png', 3),
(73, 'Natus Vincere (Na\'Vi)', '66c79344c8648.jfif', 3),
(74, 'Team Liquid', 'teamliquid.png', 3),
(75, 'G2 Esports', 'g2_esports.png', 3),
(76, 'Fnatic', 'fnatic.png', 3),
(77, 'Cloud9', 'cloud9.png', 3),
(78, 'FURIA', 'furia.png', 3),
(79, 'DRX', 'drx.png', 3),
(80, 'KRU Esports', 'kru_esports.png', 3),
(81, 'XSET', 'xset.png', 3),
(82, '100 Thieves', '100thieves.png', 3),
(83, 'Red Canids', '677aec8adf226.png', 1),
(89, 'LOUD', 'loud_ff.png', 4),
(90, 'FURIA', 'furia_ff.png', 4),
(91, 'INTZ', 'intz_ff.png', 4),
(92, 'Team Liquid', 'teamliquid_ff.png', 4),
(93, 'Black Dragons', 'blackdragons_ff.png', 4),
(94, 'Red Canids', 'redcanids_ff.png', 4),
(95, 'Cage', 'cage_ff.png', 4),
(96, 'VTI4', 'vti4_ff.png', 4),
(97, 'God Like', 'godlike_ff.png', 4),
(98, 'XTeam', 'xteam_ff.png', 4),
(99, 'Fluxo', 'fluxo_ff.png', 4),
(100, 'PaiN Gaming', 'paingaming_ff.png', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fases`
--

DROP TABLE IF EXISTS `fases`;
CREATE TABLE IF NOT EXISTS `fases` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `ordem` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `fases`
--

INSERT INTO `fases` (`id`, `nome`, `ordem`) VALUES
(1, 'Oitavas de finais', 1),
(2, 'Quartas de finais', 2),
(3, 'Semifinais', 3),
(4, 'Disputa de terceiro lugar', 4),
(5, 'Final', 5),
(7, 'Fase de Grupos', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogos`
--

DROP TABLE IF EXISTS `jogos`;
CREATE TABLE IF NOT EXISTS `jogos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `imagem` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `jogos`
--

INSERT INTO `jogos` (`id`, `nome`, `imagem`) VALUES
(1, 'Counter-Strike', 'cs2.png'),
(2, 'League of Legends', 'lol.png'),
(3, 'Valorant', 'valorant.png'),
(4, 'Free Fire', 'free.png'),
(5, 'Xadrez Arena', 'xadrezar.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `partidas`
--

DROP TABLE IF EXISTS `partidas`;
CREATE TABLE IF NOT EXISTS `partidas` (
  `id_partida` int NOT NULL AUTO_INCREMENT,
  `id_equipe` int NOT NULL,
  `id_equipe2` int NOT NULL,
  `resultado` int NOT NULL,
  `resultado2` int NOT NULL,
  `data_hora` datetime NOT NULL,
  `ordem_partidas` int NOT NULL,
  `id_fase` int DEFAULT NULL,
  `id_torneio` int NOT NULL,
  `id_jogo` int NOT NULL,
  PRIMARY KEY (`id_partida`),
  KEY `fk_id_equipe3` (`id_equipe2`),
  KEY `fk_id_equipe1` (`id_equipe`) USING BTREE,
  KEY `fk_id_fase` (`id_fase`),
  KEY `fk_id_torneio` (`id_torneio`),
  KEY `fk_id_jogo_plol` (`id_jogo`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `partidas`
--

INSERT INTO `partidas` (`id_partida`, `id_equipe`, `id_equipe2`, `resultado`, `resultado2`, `data_hora`, `ordem_partidas`, `id_fase`, `id_torneio`, `id_jogo`) VALUES
(1, 24, 26, 2, 1, '2024-10-01 17:38:52', 0, NULL, 1, 1),
(21, 43, 44, 3, 1, '2024-10-01 16:00:00', 0, 3, 1, 1),
(22, 45, 46, 0, 0, '2024-10-02 18:00:00', 0, 2, 1, 1),
(23, 47, 48, 2, 1, '2024-10-03 20:00:00', 0, NULL, 1, 1),
(24, 43, 45, 1, 1, '2024-10-04 15:00:00', 0, NULL, 1, 1),
(25, 44, 47, 4, 2, '2024-10-05 19:00:00', 0, NULL, 1, 1),
(26, 49, 50, 1, 2, '2024-10-06 17:00:00', 0, NULL, 1, 1),
(27, 51, 52, 1, 0, '2024-10-07 19:00:00', 0, NULL, 1, 1),
(28, 49, 53, 3, 2, '2024-10-08 15:00:00', 0, 3, 1, 1),
(29, 54, 43, 1, 3, '2024-10-09 18:00:00', 5, 2, 1, 1),
(30, 46, 51, 2, 2, '2024-10-10 20:00:00', 3, NULL, 1, 1),
(31, 43, 44, 3, 1, '2024-10-01 16:00:00', 3, 3, 1, 1),
(32, 45, 46, 0, 0, '2024-10-02 18:00:00', 2, 2, 1, 1),
(33, 47, 48, 2, 1, '2024-10-03 20:00:00', 2, NULL, 1, 1),
(34, 43, 45, 1, 1, '2024-10-04 15:00:00', 2, NULL, 1, 1),
(35, 44, 47, 4, 2, '2024-10-05 19:00:00', 1, NULL, 1, 1),
(36, 49, 50, 1, 2, '2024-10-06 17:00:00', 1, NULL, 1, 1),
(37, 51, 52, 1, 0, '2024-10-07 19:00:00', 1, NULL, 1, 1),
(38, 49, 53, 3, 2, '2024-10-08 15:00:00', 1, 3, 1, 1),
(39, 54, 43, 1, 3, '2024-10-09 18:00:00', 1, 2, 1, 1),
(40, 46, 51, 2, 2, '2024-10-10 20:00:00', 1, NULL, 1, 1),
(49, 26, 27, 1, 2, '0000-00-00 00:00:00', 1, 1, 1, 1),
(50, 39, 40, 1, 2, '0000-00-00 00:00:00', 1, 1, 1, 1),
(51, 34, 32, 2, 0, '2024-10-06 17:30:00', 2, NULL, 1, 1),
(52, 58, 59, 2, 1, '2024-10-01 14:00:00', 2, NULL, 1, 2),
(53, 60, 61, 3, 2, '2024-10-02 15:30:00', 1, NULL, 1, 2),
(54, 62, 63, 2, 3, '2024-10-03 16:45:00', 1, NULL, 1, 2),
(55, 64, 65, 1, 3, '2024-10-04 17:20:00', 1, NULL, 1, 2),
(56, 66, 67, 2, 1, '2024-10-05 18:10:00', 1, NULL, 1, 2),
(57, 68, 69, 3, 1, '2024-10-06 19:00:00', 1, NULL, 1, 2),
(58, 70, 58, 2, 2, '2024-10-07 20:30:00', 1, NULL, 1, 2),
(59, 59, 60, 1, 2, '2024-10-08 21:00:00', 1, NULL, 1, 2),
(60, 61, 62, 3, 0, '2024-10-09 22:00:00', 1, NULL, 1, 2),
(61, 63, 64, 2, 2, '2024-10-10 23:00:00', 2, NULL, 1, 2),
(62, 71, 72, 2, 1, '2024-01-06 15:00:00', 0, NULL, 1, 3),
(63, 73, 74, 3, 2, '2024-01-06 17:00:00', 0, NULL, 1, 3),
(64, 75, 76, 2, 3, '2024-01-07 18:00:00', 0, NULL, 1, 3),
(65, 77, 78, 1, 2, '2024-01-07 20:00:00', 0, NULL, 1, 3),
(66, 79, 80, 2, 1, '2024-01-08 16:00:00', 0, NULL, 1, 3),
(67, 81, 82, 3, 2, '2024-01-08 18:00:00', 0, NULL, 1, 3),
(68, 71, 75, 1, 2, '2024-01-09 14:00:00', 0, NULL, 1, 3),
(69, 72, 76, 2, 3, '2024-01-09 16:00:00', 0, NULL, 1, 3),
(70, 73, 77, 2, 1, '2024-01-10 17:00:00', 0, NULL, 1, 3),
(71, 74, 78, 3, 2, '2024-01-10 19:00:00', 0, NULL, 1, 3),
(74, 39, 39, 1, 0, '2025-01-05 00:00:00', 0, NULL, 1, 1),
(76, 22, 25, 1, 0, '2025-01-05 00:00:00', 0, NULL, 1, 1),
(77, 50, 62, 1, 0, '2025-01-05 00:00:00', 0, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `rankingcs`
--

DROP TABLE IF EXISTS `rankingcs`;
CREATE TABLE IF NOT EXISTS `rankingcs` (
  `grupo` char(7) NOT NULL,
  `id_equipe` int NOT NULL,
  `partidas` int NOT NULL,
  `pontos` int NOT NULL,
  `vitoria` int NOT NULL,
  `derrota` int NOT NULL,
  `rounds_vencidos` int NOT NULL,
  `rounds_perdidos` int NOT NULL,
  `dif_round` int NOT NULL,
  `confronto_direito` int NOT NULL,
  `wo` varchar(255) NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `id_torneio` int NOT NULL,
  `id_jogos` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_equipe` (`id_equipe`),
  KEY `fk_id_torneio2` (`id_torneio`),
  KEY `fk_id_jogos` (`id_jogos`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `rankingcs`
--

INSERT INTO `rankingcs` (`grupo`, `id_equipe`, `partidas`, `pontos`, `vitoria`, `derrota`, `rounds_vencidos`, `rounds_perdidos`, `dif_round`, `confronto_direito`, `wo`, `id`, `id_torneio`, `id_jogos`) VALUES
('A', 32, 1, 1, 1, 1, 0, 0, 1, 0, '', 1, 1, 1),
('A', 34, 1, 1, 1, 1, 0, 0, 1, 0, '', 2, 1, 1),
('A', 37, 1, 1, 1, 1, 0, 0, 1, 0, '', 3, 1, 1),
('A', 38, 1, 1, 1, 1, 0, 0, 1, 0, '', 4, 1, 1),
('B', 39, 1, 1, 1, 1, 0, 0, 1, 0, '', 5, 1, 1),
('B', 40, 1, 1, 1, 1, 0, 0, 1, 0, '', 6, 1, 1),
('B', 41, 1, 1, 1, 1, 0, 0, 1, 0, '', 7, 1, 1),
('B', 42, 1, 1, 1, 1, 0, 0, 1, 0, '', 8, 1, 1),
('E', 25, 5, 9, 4, 1, 0, 0, 13, 0, '', 11, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `rankingff`
--

DROP TABLE IF EXISTS `rankingff`;
CREATE TABLE IF NOT EXISTS `rankingff` (
  `grupo` char(7) NOT NULL,
  `id_equipe` int NOT NULL,
  `partidas` int NOT NULL,
  `pontos` int NOT NULL,
  `vitoria` int NOT NULL,
  `derrota` int NOT NULL,
  `kills` int NOT NULL,
  `numero_queda` int NOT NULL,
  `posicao_queda` int NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `id_torneio` int NOT NULL,
  `id_jogos` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_equipeff` (`id_equipe`),
  KEY `fk_id_torneioff` (`id_torneio`),
  KEY `fk_id_jogosff` (`id_jogos`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `rankingff`
--

INSERT INTO `rankingff` (`grupo`, `id_equipe`, `partidas`, `pontos`, `vitoria`, `derrota`, `kills`, `numero_queda`, `posicao_queda`, `id`, `id_torneio`, `id_jogos`) VALUES
('A', 89, 5, 10, 2, 3, 20, 1, 2, 3, 1, 4),
('A', 90, 5, 12, 3, 2, 25, 0, 0, 4, 1, 4),
('A', 91, 5, 9, 2, 3, 18, 0, 0, 5, 1, 4),
('A', 92, 5, 8, 1, 4, 15, 0, 0, 6, 1, 4),
('A', 93, 5, 11, 3, 2, 22, 0, 0, 7, 1, 4),
('A', 94, 5, 7, 1, 4, 14, 0, 0, 8, 1, 4),
('B', 95, 5, 10, 2, 3, 21, 0, 0, 9, 1, 4),
('B', 96, 5, 14, 4, 1, 30, 0, 0, 10, 1, 4),
('B', 97, 5, 9, 2, 3, 18, 0, 0, 11, 1, 4),
('B', 98, 5, 8, 1, 4, 16, 0, 0, 12, 1, 4),
('B', 99, 5, 13, 4, 1, 28, 0, 0, 13, 1, 4),
('B', 100, 5, 10, 2, 3, 20, 0, 0, 14, 1, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `rankinglol`
--

DROP TABLE IF EXISTS `rankinglol`;
CREATE TABLE IF NOT EXISTS `rankinglol` (
  `grupo` char(8) NOT NULL,
  `id_equipe` int NOT NULL,
  `partidas` int NOT NULL,
  `pontos` int NOT NULL,
  `vitoria` int NOT NULL,
  `derrota` int NOT NULL,
  `wo` varchar(255) NOT NULL,
  `confronto_direto` int NOT NULL,
  `tempo_total_vitorias` float NOT NULL,
  `tempo_medio_vitorias` float NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `id_torneio` int NOT NULL,
  `id_jogos` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_equipe_lol` (`id_equipe`),
  KEY `fk_id_torneiolol` (`id_torneio`),
  KEY `fk_id_jogo_lol` (`id_jogos`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `rankinglol`
--

INSERT INTO `rankinglol` (`grupo`, `id_equipe`, `partidas`, `pontos`, `vitoria`, `derrota`, `wo`, `confronto_direto`, `tempo_total_vitorias`, `tempo_medio_vitorias`, `id`, `id_torneio`, `id_jogos`) VALUES
('A', 58, 10, 30, 10, 0, 'N/A', 0, 300.5, 30.05, 12, 1, 2),
('A', 59, 9, 27, 9, 0, 'N/A', 1, 280.3, 31.14, 13, 1, 2),
('A', 60, 8, 24, 8, 0, 'N/A', 2, 270.2, 33.78, 14, 1, 2),
('B', 61, 7, 21, 7, 0, 'N/A', 0, 240, 34.29, 15, 1, 2),
('B', 62, 6, 18, 6, 1, 'N/A', 3, 200.7, 33.45, 16, 1, 2),
('B', 63, 5, 15, 5, 2, 'N/A', 1, 180.6, 36.12, 17, 1, 2),
('C', 64, 4, 12, 4, 3, 'N/A', 2, 160.3, 40.08, 18, 1, 2),
('C', 65, 3, 9, 3, 4, 'N/A', 1, 140.1, 46.7, 19, 1, 2),
('C', 66, 2, 6, 2, 5, 'N/A', 0, 120, 60, 20, 1, 2),
('D', 67, 1, 3, 1, 6, 'N/A', 1, 100.5, 100.5, 21, 1, 2),
('D', 68, 0, 0, 0, 7, 'N/A', 0, 0, 0, 22, 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `rankingvalo`
--

DROP TABLE IF EXISTS `rankingvalo`;
CREATE TABLE IF NOT EXISTS `rankingvalo` (
  `grupo` char(7) NOT NULL,
  `id_equipe` int NOT NULL,
  `partidas` int NOT NULL,
  `pontos` int NOT NULL,
  `vitoria` int NOT NULL,
  `derrota` int NOT NULL,
  `rounds_vencidos` int NOT NULL,
  `rounds_perdidos` int NOT NULL,
  `dif_round` int NOT NULL,
  `confronto_direto` int NOT NULL,
  `wo` varchar(255) NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `id_torneio` int NOT NULL,
  `id_jogos` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_equipevalo` (`id_equipe`),
  KEY `fk_id_torneiovalo` (`id_torneio`),
  KEY `fk_id_jogo_valo` (`id_jogos`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `rankingvalo`
--

INSERT INTO `rankingvalo` (`grupo`, `id_equipe`, `partidas`, `pontos`, `vitoria`, `derrota`, `rounds_vencidos`, `rounds_perdidos`, `dif_round`, `confronto_direto`, `wo`, `id`, `id_torneio`, `id_jogos`) VALUES
('A', 71, 5, 15, 3, 2, 50, 30, 20, 1, 'Não', 25, 1, 3),
('A', 72, 5, 12, 2, 3, 40, 35, 5, 0, 'Não', 26, 1, 3),
('A', 73, 5, 18, 4, 1, 60, 25, 35, 3, 'Sim', 27, 1, 3),
('A', 74, 5, 9, 1, 4, 30, 50, -20, 0, 'Sim', 28, 1, 3),
('B', 75, 5, 12, 3, 2, 45, 28, 17, 2, 'Não', 29, 1, 3),
('B', 76, 5, 15, 3, 2, 52, 30, 22, 1, 'Não', 30, 1, 3),
('B', 77, 5, 10, 2, 3, 39, 36, 3, 1, 'Não', 31, 1, 3),
('B', 78, 5, 13, 3, 2, 50, 28, 22, 2, 'Sim', 32, 1, 3),
('C', 79, 5, 14, 3, 2, 48, 32, 16, 1, 'Não', 33, 1, 3),
('C', 80, 5, 11, 2, 3, 40, 35, 5, 0, 'Não', 34, 1, 3),
('C', 81, 5, 9, 1, 4, 38, 42, -4, 0, 'Sim', 35, 1, 3),
('C', 82, 5, 16, 4, 1, 55, 30, 25, 3, 'Não', 36, 1, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `rankingxadrez`
--

DROP TABLE IF EXISTS `rankingxadrez`;
CREATE TABLE IF NOT EXISTS `rankingxadrez` (
  `grupo` char(7) NOT NULL,
  `id_atleta` int NOT NULL,
  `partidas` int NOT NULL,
  `pontose1` int NOT NULL,
  `pontose2` int NOT NULL,
  `pontose3` int NOT NULL,
  `pontose4` int NOT NULL,
  `pontose5` int NOT NULL,
  `pontosT` int NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `id_torneio` int NOT NULL,
  `id_jogos` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_torneiochess` (`id_torneio`) USING BTREE,
  KEY `fk_id_jogoschess` (`id_jogos`),
  KEY `fk_id_atletachess` (`id_atleta`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `rankingxadrez`
--

INSERT INTO `rankingxadrez` (`grupo`, `id_atleta`, `partidas`, `pontose1`, `pontose2`, `pontose3`, `pontose4`, `pontose5`, `pontosT`, `categoria`, `id`, `id_torneio`, `id_jogos`) VALUES
('A', 1, 5, 2, 1, 3, 0, 0, 6, '', 1, 1, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `torneios`
--

DROP TABLE IF EXISTS `torneios`;
CREATE TABLE IF NOT EXISTS `torneios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_fim` date DEFAULT NULL,
  `atual` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `torneios`
--

INSERT INTO `torneios` (`id`, `nome`, `data_inicio`, `data_fim`, `atual`) VALUES
(1, 'Ejif 2024', '2024-11-01', NULL, 1);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `partidas`
--
ALTER TABLE `partidas`
  ADD CONSTRAINT `fk_id_equipe1` FOREIGN KEY (`id_equipe`) REFERENCES `equipe` (`id_equipe`),
  ADD CONSTRAINT `fk_id_equipe2` FOREIGN KEY (`id_equipe`) REFERENCES `equipe` (`id_equipe`),
  ADD CONSTRAINT `fk_id_equipe3` FOREIGN KEY (`id_equipe2`) REFERENCES `equipe` (`id_equipe`),
  ADD CONSTRAINT `fk_id_fase` FOREIGN KEY (`id_fase`) REFERENCES `fases` (`id`),
  ADD CONSTRAINT `fk_id_jogo_plol` FOREIGN KEY (`id_jogo`) REFERENCES `jogos` (`id`),
  ADD CONSTRAINT `fk_id_torneio` FOREIGN KEY (`id_torneio`) REFERENCES `torneios` (`id`);

--
-- Limitadores para a tabela `rankingcs`
--
ALTER TABLE `rankingcs`
  ADD CONSTRAINT `fk_id_equipe` FOREIGN KEY (`id_equipe`) REFERENCES `equipe` (`id_equipe`),
  ADD CONSTRAINT `fk_id_jogos` FOREIGN KEY (`id_jogos`) REFERENCES `jogos` (`id`),
  ADD CONSTRAINT `fk_id_torneio2` FOREIGN KEY (`id_torneio`) REFERENCES `torneios` (`id`);

--
-- Limitadores para a tabela `rankingff`
--
ALTER TABLE `rankingff`
  ADD CONSTRAINT `fk_id_equipeff` FOREIGN KEY (`id_equipe`) REFERENCES `equipe` (`id_equipe`),
  ADD CONSTRAINT `fk_id_jogosff` FOREIGN KEY (`id_jogos`) REFERENCES `jogos` (`id`),
  ADD CONSTRAINT `fk_id_torneioff` FOREIGN KEY (`id_torneio`) REFERENCES `torneios` (`id`);

--
-- Limitadores para a tabela `rankinglol`
--
ALTER TABLE `rankinglol`
  ADD CONSTRAINT `fk_id_equipe_lol` FOREIGN KEY (`id_equipe`) REFERENCES `equipe` (`id_equipe`),
  ADD CONSTRAINT `fk_id_jogo_lol` FOREIGN KEY (`id_jogos`) REFERENCES `jogos` (`id`),
  ADD CONSTRAINT `fk_id_torneiolol` FOREIGN KEY (`id_torneio`) REFERENCES `torneios` (`id`);

--
-- Limitadores para a tabela `rankingvalo`
--
ALTER TABLE `rankingvalo`
  ADD CONSTRAINT `fk_id_equipevalo` FOREIGN KEY (`id_equipe`) REFERENCES `equipe` (`id_equipe`),
  ADD CONSTRAINT `fk_id_jogo_valo` FOREIGN KEY (`id_jogos`) REFERENCES `jogos` (`id`),
  ADD CONSTRAINT `fk_id_torneiovalo` FOREIGN KEY (`id_torneio`) REFERENCES `torneios` (`id`);

--
-- Limitadores para a tabela `rankingxadrez`
--
ALTER TABLE `rankingxadrez`
  ADD CONSTRAINT `fk_id_atletaff` FOREIGN KEY (`id_atleta`) REFERENCES `atleta` (`id`),
  ADD CONSTRAINT `fk_id_equipechess` FOREIGN KEY (`id_torneio`) REFERENCES `torneios` (`id`),
  ADD CONSTRAINT `fk_id_jogoschess` FOREIGN KEY (`id_jogos`) REFERENCES `jogos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
