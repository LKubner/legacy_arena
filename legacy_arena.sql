-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 22-Ago-2024 às 20:26
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
  PRIMARY KEY (`id_equipe`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `equipe`
--

INSERT INTO `equipe` (`id_equipe`, `nome`, `foto_time`) VALUES
(22, 'dragoes', 'baroes.png'),
(23, 'limbo', NULL),
(24, 'capivara', NULL),
(25, 'ratoes', NULL),
(26, 'phoenix', NULL),
(27, 'tubaroes', NULL),
(28, 'galinha pintadinha', NULL),
(32, 'Legacy', '66c48d0e5f97c.jfif'),
(34, 'Furia', '66c76411f3379.png'),
(35, 'plplplpl', '66c7861126ac3.png'),
(36, 'vfdffgwefggfrghrefr', '66c7918b4e9af.png'),
(37, 'Os Martins', '66c791f780cad.jfif'),
(38, 'Os Lazaros', '66c79277b1e03.png'),
(39, 'NIP', '66c7932fbde2e.jfif'),
(40, 'Navi', '66c79344c8648.jfif'),
(41, '9z', '66c7935b1beeb.png'),
(42, 'G2', '66c793810f676.jfif');

-- --------------------------------------------------------

--
-- Estrutura da tabela `rankingcs`
--

DROP TABLE IF EXISTS `rankingcs`;
CREATE TABLE IF NOT EXISTS `rankingcs` (
  `grupo` char(7) NOT NULL,
  `id_equipe` int NOT NULL AUTO_INCREMENT,
  `partidas` int NOT NULL,
  `pontos` int NOT NULL,
  `vitoria` int NOT NULL,
  `derrota` int NOT NULL,
  `rounds_vencidos` int NOT NULL,
  `rounds_perdidos` int NOT NULL,
  `dif_round` int NOT NULL,
  `confronto_direito` int NOT NULL,
  `wo` varchar(255) NOT NULL,
  PRIMARY KEY (`id_equipe`),
  KEY `fk_id_equip` (`id_equipe`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `rankingcs`
--

INSERT INTO `rankingcs` (`grupo`, `id_equipe`, `partidas`, `pontos`, `vitoria`, `derrota`, `rounds_vencidos`, `rounds_perdidos`, `dif_round`, `confronto_direito`, `wo`) VALUES
('A', 32, 1, 1, 1, 1, 0, 0, 1, 0, ''),
('A', 34, 1, 1, 1, 1, 0, 0, 1, 0, ''),
('A', 37, 1, 1, 1, 1, 0, 0, 1, 0, ''),
('A', 38, 1, 1, 1, 1, 0, 0, 1, 0, ''),
('B', 39, 1, 1, 1, 1, 0, 0, 1, 0, ''),
('B', 40, 1, 1, 1, 1, 0, 0, 1, 0, ''),
('B', 41, 1, 1, 1, 1, 0, 0, 1, 0, ''),
('B', 42, 1, 1, 1, 1, 0, 0, 1, 0, '');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `rankingcs`
--
ALTER TABLE `rankingcs`
  ADD CONSTRAINT `fk_id_equipe` FOREIGN KEY (`id_equipe`) REFERENCES `equipe` (`id_equipe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
