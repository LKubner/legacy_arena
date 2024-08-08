-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 08-Ago-2024 às 18:25
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
  `id_equipe` int NOT NULL,
  `nome` int NOT NULL,
  PRIMARY KEY (`id_equipe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `empate` int NOT NULL,
  `rounds_vencidos` int NOT NULL,
  `rounds_perdidos` int NOT NULL,
  `confronto_direito` int NOT NULL,
  `wo` varchar(255) NOT NULL,
  PRIMARY KEY (`grupo`),
  KEY `fk_id_equipe` (`id_equipe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `rankingcs`
--
ALTER TABLE `rankingcs`
  ADD CONSTRAINT `fk_id_equipe` FOREIGN KEY (`id_equipe`) REFERENCES `equipe` (`id_equipe`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
