-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Mar-2022 às 22:50
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbsisagendador`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbeventos`
--

CREATE TABLE `tbeventos` (
  `idEvento` int(11) NOT NULL,
  `tituloEvento` varchar(255) NOT NULL,
  `descricaoEvento` text DEFAULT NULL,
  `dataInicioEvento` date DEFAULT NULL,
  `horaInicioEvento` time DEFAULT NULL,
  `dataFimEvento` date DEFAULT NULL,
  `horaFimEvento` time DEFAULT NULL,
  `statusEvento` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbeventos`
--

INSERT INTO `tbeventos` (`idEvento`, `tituloEvento`, `descricaoEvento`, `dataInicioEvento`, `horaInicioEvento`, `dataFimEvento`, `horaFimEvento`, `statusEvento`) VALUES
(1, 'Apresentação teste', 'Apresentação do trabalho', '2022-03-03', '00:00:00', '2022-03-24', '00:00:00', 0),
(2, 'Apresentação do trabalho', 'Apresentação do trabalho de web1', '2022-03-18', '21:07:00', '0000-00-00', '00:00:00', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbeventos`
--
ALTER TABLE `tbeventos`
  ADD PRIMARY KEY (`idEvento`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbeventos`
--
ALTER TABLE `tbeventos`
  MODIFY `idEvento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
