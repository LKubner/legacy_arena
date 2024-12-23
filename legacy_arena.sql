-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 12-Dez-2024 às 20:01
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
-- Estrutura da tabela `equipe`
--

DROP TABLE IF EXISTS `equipe`;
CREATE TABLE IF NOT EXISTS `equipe` (
  `id_equipe` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `foto_time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_jogo` int NOT NULL,
  PRIMARY KEY (`id_equipe`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(57, 'fortnite', '673f8b4fb04b5.jpg', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fases`
--

DROP TABLE IF EXISTS `fases`;
CREATE TABLE IF NOT EXISTS `fases` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `ordem` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `fases`
--

INSERT INTO `fases` (`id`, `nome`, `ordem`) VALUES
(1, 'Oitavas de finais', 1),
(2, 'Quartas de finais', 2),
(3, 'Semifinais', 3),
(4, 'Disputa de terceiro lugar', 4),
(5, 'Final', 5);

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
  `id_fase` int DEFAULT NULL,
  `id_torneio` int NOT NULL,
  `id_jogo` int NOT NULL,
  PRIMARY KEY (`id_partida`),
  KEY `fk_id_equipe3` (`id_equipe2`),
  KEY `fk_id_equipe1` (`id_equipe`) USING BTREE,
  KEY `fk_id_fase` (`id_fase`),
  KEY `fk_id_torneio` (`id_torneio`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `partidas`
--

INSERT INTO `partidas` (`id_partida`, `id_equipe`, `id_equipe2`, `resultado`, `resultado2`, `data_hora`, `id_fase`, `id_torneio`, `id_jogo`) VALUES
(1, 24, 26, 2, 1, '2024-10-01 17:38:52', NULL, 1, 0),
(21, 43, 44, 3, 1, '2024-10-01 16:00:00', 3, 1, 0),
(22, 45, 46, 0, 0, '2024-10-02 18:00:00', 2, 1, 0),
(23, 47, 48, 2, 1, '2024-10-03 20:00:00', NULL, 1, 0),
(24, 43, 45, 1, 1, '2024-10-04 15:00:00', NULL, 1, 0),
(25, 44, 47, 4, 2, '2024-10-05 19:00:00', NULL, 1, 0),
(26, 49, 50, 1, 2, '2024-10-06 17:00:00', NULL, 1, 0),
(27, 51, 52, 1, 0, '2024-10-07 19:00:00', NULL, 1, 0),
(28, 49, 53, 3, 2, '2024-10-08 15:00:00', 3, 1, 0),
(29, 54, 43, 1, 3, '2024-10-09 18:00:00', 2, 1, 0),
(30, 46, 51, 2, 2, '2024-10-10 20:00:00', NULL, 1, 0),
(31, 43, 44, 3, 1, '2024-10-01 16:00:00', 3, 1, 0),
(32, 45, 46, 0, 0, '2024-10-02 18:00:00', 2, 1, 0),
(33, 47, 48, 2, 1, '2024-10-03 20:00:00', NULL, 1, 0),
(34, 43, 45, 1, 1, '2024-10-04 15:00:00', NULL, 1, 0),
(35, 44, 47, 4, 2, '2024-10-05 19:00:00', NULL, 1, 0),
(36, 49, 50, 1, 2, '2024-10-06 17:00:00', NULL, 1, 0),
(37, 51, 52, 1, 0, '2024-10-07 19:00:00', NULL, 1, 0),
(38, 49, 53, 3, 2, '2024-10-08 15:00:00', 3, 1, 0),
(39, 54, 43, 1, 3, '2024-10-09 18:00:00', 2, 1, 0),
(40, 46, 51, 2, 2, '2024-10-10 20:00:00', NULL, 1, 0),
(49, 26, 27, 1, 2, '0000-00-00 00:00:00', 1, 1, 0),
(50, 39, 40, 1, 2, '0000-00-00 00:00:00', 1, 1, 0),
(51, 34, 32, 2, 0, '2024-10-06 17:30:00', NULL, 1, 0);

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
(1, 'CS 2024', '2024-11-01', NULL, 1);

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
  ADD CONSTRAINT `fk_id_torneio` FOREIGN KEY (`id_torneio`) REFERENCES `torneios` (`id`);

--
-- Limitadores para a tabela `rankingcs`
--
ALTER TABLE `rankingcs`
  ADD CONSTRAINT `fk_id_equipe` FOREIGN KEY (`id_equipe`) REFERENCES `equipe` (`id_equipe`),
  ADD CONSTRAINT `fk_id_jogos` FOREIGN KEY (`id_jogos`) REFERENCES `jogos` (`id`),
  ADD CONSTRAINT `fk_id_torneio2` FOREIGN KEY (`id_torneio`) REFERENCES `torneios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
