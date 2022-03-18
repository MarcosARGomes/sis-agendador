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
-- Estrutura da tabela `tbfotos`
--

CREATE TABLE `tbfotos` (
  `idFoto` int(11) NOT NULL,
  `nomeFotoContato` varchar(255) DEFAULT NULL,
  `idContato_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbfotos`
--

INSERT INTO `tbfotos` (`idFoto`, `nomeFotoContato`, `idContato_fk`) VALUES
(1, 'Martin-Schoeller-Brad-Pitt-2.jpg', 3),
(7, 'images.jpg', 16),
(9, 'images7.jpg', 11),
(10, 'images7.jpg', 13),
(29, '139938.jpg', 28),
(30, '139938.jpg', 29),
(47, 'images3.jpg', 14),
(48, 'images3.jpg', 33);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbfotos`
--
ALTER TABLE `tbfotos`
  ADD PRIMARY KEY (`idFoto`),
  ADD KEY `idContato_fk` (`idContato_fk`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbfotos`
--
ALTER TABLE `tbfotos`
  MODIFY `idFoto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbfotos`
--
ALTER TABLE `tbfotos`
  ADD CONSTRAINT `tbfotos_ibfk_1` FOREIGN KEY (`idContato_fk`) REFERENCES `tbcontatos` (`idContato`),
  ADD CONSTRAINT `tbfotos_ibfk_2` FOREIGN KEY (`idContato_fk`) REFERENCES `tbcontatos` (`idContato`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbfotos_ibfk_3` FOREIGN KEY (`idContato_fk`) REFERENCES `tbcontatos` (`idContato`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbfotos_ibfk_4` FOREIGN KEY (`idContato_fk`) REFERENCES `tbcontatos` (`idContato`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbfotos_ibfk_5` FOREIGN KEY (`idContato_fk`) REFERENCES `tbcontatos` (`idContato`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbfotos_ibfk_6` FOREIGN KEY (`idContato_fk`) REFERENCES `tbcontatos` (`idContato`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
