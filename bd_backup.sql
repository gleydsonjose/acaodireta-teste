-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql_gst:3306
-- Tempo de geração: 02-Mar-2020 às 23:58
-- Versão do servidor: 8.0.18
-- versão do PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `acaodire_teste`
--
CREATE DATABASE IF NOT EXISTS `acaodire_teste` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `acaodire_teste`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastros`
--

CREATE TABLE `cadastros` (
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `cadastros`
--

INSERT INTO `cadastros` (`nome`, `email`, `telefone`) VALUES
('Gleydson', 'gleydsonjosedasilva@hotmail.com', '00000-0000'),
('Gleydson', 'gleydsonjosedasilva@hotmail.com', '00000-0000'),
('Gleydson', 'gleydsonjosedasilva@hotmail.com', '00000-0000'),
('Gleydson', 'gleydsonjosedasilva@hotmail.com', '00000-0000'),
('Gleydson', 'gleydsonjosedasilva@hotmail.com', '00000-0000'),
('Jose', 'gleydsonjosedasilva@hotmail.com', '00000-0000'),
('Jose', 'php@php.com', '88101515'),
('Jose', 'php@php.com', '88101515'),
('asd', 'asd@hotmail.com', 'asd'),
('asd', 'asd@hotmail.com', 'asd'),
('asd', '12312312@hotmail.com', 'asdasdas'),
('asd', '12312312@hotmail.com', 'asdasdas'),
('Empresa Ação direta', 'acaodireta@hotmail.com', '846541651'),
('Empresa Ação direta', 'acaodireta@hotmail.com', '846541651'),
('asdaxczxc', 'asd@hotmail.com', '456412'),
('asdaxczxc', 'asd@hotmail.com', '456412'),
('testando', 'teste@hotmail.com', '4d5a4sd5'),
('eae', 'eae@hotmail.com', '456ad4a65e'),
('rarar', 'rarar@hotmail.com', '849489');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
