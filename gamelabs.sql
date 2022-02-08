-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 08/02/2022 às 02:50
-- Versão do servidor: 5.7.31
-- Versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gamelabs`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `alugador`
--

DROP TABLE IF EXISTS `alugador`;
CREATE TABLE IF NOT EXISTS `alugador` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `especificacoes` text NOT NULL,
  `valorHR` varchar(255) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `alugador`
--

INSERT INTO `alugador` (`codigo`, `nome`, `ip`, `especificacoes`, `valorHR`) VALUES
(21, 'Maquina1', '192.168.002.000', 'pc bom', '22'),
(25, 'Maquina3', '131231238', 'qqbvobqvoi', '80'),
(26, 'sevgf', 'fqfq', 'qfqfqf', '2132123'),
(27, 'oqknwinej', '1232132104', 'knfkfnqknfknq', '21'),
(23, 'Maquina2', '1444444', 'tobias', '14'),
(24, 'Super Maquina', '192.168.002.000', '22', '20');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(25) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=139 DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`codigo`, `nome`, `email`, `senha`) VALUES
(137, 'aaa', 'aaa@aa', 'AA'),
(136, 'tijolinho', 'iqnfhihqwf@19283-28o', '1234'),
(134, 'Thiago', 'thiago@thiago', '1234'),
(135, 'admin', 'blacksmithstyle963@gmail.com', 'admin'),
(133, 'Daniel', 'daniel.miranda2503@gmail.com', 'daniel10'),
(138, 'guilherme', 'pintinho@pintinho.com', 'pintinho');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
