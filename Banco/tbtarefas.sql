-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Mar-2022 às 22:49
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
-- Estrutura da tabela `tbtarefas`
--

CREATE TABLE `tbtarefas` (
  `idTarefa` int(11) NOT NULL,
  `tituloTarefa` varchar(255) NOT NULL,
  `descricaoTarefa` text NOT NULL,
  `dataConclusaoTarefa` date NOT NULL,
  `horaConclusaoTarefa` time NOT NULL,
  `dataLembreteTarefa` date NOT NULL,
  `horaLembreteTarefa` time NOT NULL,
  `recorrenciaTarefa` int(11) NOT NULL DEFAULT 0,
  `statusTarefa` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbtarefas`
--

INSERT INTO `tbtarefas` (`idTarefa`, `tituloTarefa`, `descricaoTarefa`, `dataConclusaoTarefa`, `horaConclusaoTarefa`, `dataLembreteTarefa`, `horaLembreteTarefa`, `recorrenciaTarefa`, `statusTarefa`) VALUES
(1, 'Escovar os dentes', 'Escovar os dentes todos os dias', '2022-03-20', '14:48:16', '2022-03-19', '16:48:16', 0, 0),
(2, 'Estudar React', 'estudar todos os dias', '2022-03-31', '05:00:00', '0000-00-00', '00:00:00', 0, 0),
(3, 'Estudar ', 'estudar todos os dias', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 0, 0),
(4, 'trabalhar', 'trabalhar de segunda a sabado', '2022-04-28', '14:54:58', '2022-03-31', '16:54:58', 0, 0),
(5, 'Tomar remedio', 'todos os dias', '2022-04-28', '14:54:58', '2022-03-31', '16:54:58', 0, 1),
(6, 'Tomar vitaminas', 'todos os dias', '2022-04-30', '14:54:58', '2022-03-31', '16:54:58', 0, 0),
(7, 'dormir cedo', 'dormir cedo todos os dias', '2022-04-30', '14:54:58', '2022-03-31', '16:54:58', 0, 0),
(10, 'Testes', 'asdasdasdas', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 0, 0),
(11, 'Testes123', 'asdasdasdas', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 0, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbtarefas`
--
ALTER TABLE `tbtarefas`
  ADD PRIMARY KEY (`idTarefa`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbtarefas`
--
ALTER TABLE `tbtarefas`
  MODIFY `idTarefa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
