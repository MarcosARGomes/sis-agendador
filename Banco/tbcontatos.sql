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
-- Estrutura da tabela `tbcontatos`
--

CREATE TABLE `tbcontatos` (
  `idContato` int(11) NOT NULL,
  `nomeContato` varchar(200) NOT NULL,
  `emailContato` varchar(100) DEFAULT NULL,
  `telefoneContato` varchar(100) NOT NULL,
  `enderecoContato` varchar(200) DEFAULT NULL,
  `sexoContato` char(1) NOT NULL,
  `dataNasciContato` date DEFAULT NULL,
  `flagFavoritoContato` tinyint(1) NOT NULL,
  `nomeFotoContatooff` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbcontatos`
--

INSERT INTO `tbcontatos` (`idContato`, `nomeContato`, `emailContato`, `telefoneContato`, `enderecoContato`, `sexoContato`, `dataNasciContato`, `flagFavoritoContato`, `nomeFotoContatooff`) VALUES
(1, 'Marcos', 'marcosandrebahia@gmail.com', '(65) 99248-6820', '', 'M', '1996-07-27', 1, 'Martin-Schoeller-Brad-Pitt-2.jpg'),
(2, 'Giovanna', 'gio@gmail.com', '(65) 99248-6820', 'teste teste', 'F', '1999-11-04', 0, NULL),
(3, 'Pedro', 'Pedro@gmail.com', '+5565992486820', '', 'M', '2015-06-08', 0, NULL),
(5, 'Acton Mcgee teste ', 'fringilla@outlook.ca', '(614) 343-2381', 'Baracaldo', 'M', '2021-04-15', 0, NULL),
(6, 'Xandra Hester', 'erat.sed@hotmail.net', '1-465-813-5594', 'Koszalin', 'F', '2021-10-13', 1, NULL),
(7, 'Blossom Burke', 'eleifend@yahoo.ca', '1-362-672-3980', 'Uppingham. Cottesmore', 'F', '2021-12-27', 1, NULL),
(8, 'Hillary Poole', 'nec.imperdiet.nec@hotmail.com', '(600) 845-7637', 'Chungju', 'M', '2022-04-27', 0, NULL),
(9, 'Marsden Sanders', 'lobortis@aol.net', '1-544-513-2891', 'Montes Claros', 'M', '2021-04-21', 1, NULL),
(10, 'Ayanna Conway', 'odio@icloud.couk', '(714) 705-6769', 'Tromsø', 'M', '2022-02-22', 1, NULL),
(11, 'Aimee Bailey', 'enim.nisl.elementum@yahoo.com', '(764) 864-4832', 'Mostazal', 'F', '2022-04-02', 1, NULL),
(12, 'Alana Drake', 'vulputate.eu@icloud.org', '(513) 453-4245', 'Aubagne', 'F', '2021-12-11', 0, NULL),
(13, 'Aiko Watson', 'nullam@outlook.ca', '(621) 688-6541', 'Los Patios', 'M', '2022-06-30', 1, NULL),
(14, 'Lev Stewart', 'ut.molestie.in@hotmail.org', '1-587-688-7514', 'Edmundston', 'F', '2022-06-09', 1, NULL),
(15, 'Whoopi Callahan', 'proin@aol.com', '1-876-245-7424', 'Ikot Ekpene', 'M', '2022-03-03', 0, NULL),
(16, 'Adara Rojas teste', 'tortor@aol.ca', '1-963-139-0862', 'Cheltenham', 'M', '2023-01-05', 1, NULL),
(18, 'Sylvester Mitchell', 'nec.leo@hotmail.com', '1-634-730-4541', 'Ibagué', 'F', '2021-10-11', 1, NULL),
(19, 'Raphael Salinas', 'ornare.tortor@icloud.net', '1-294-785-5660', 'Quemchi', 'F', '2022-01-29', 1, NULL),
(21, 'Meghan Melton', 'vel.faucibus@hotmail.net', '(668) 782-6219', 'Grimbergen', 'M', '2022-08-01', 1, NULL),
(22, 'Julian Avila', 'nunc.ac.sem@aol.org', '1-131-201-4723', 'Hofors', 'F', '2021-06-26', 0, NULL),
(23, 'Michael Hinton', 'neque.nullam.ut@yahoo.com', '1-787-442-2531', 'Kendari', 'M', '2023-02-01', 0, NULL),
(24, 'Pandora Phelps', 'nulla.magna@yahoo.net', '1-563-363-0248', 'Blenheim', 'M', '2021-07-31', 0, NULL),
(25, 'Jermaine Mckee', 'pede@aol.edu', '1-479-371-7955', 'Koppervik', 'M', '2021-05-12', 0, NULL),
(28, 'Leonard Ramsey', 'parturient.montes@google.net', '1-408-525-5330', 'Valenzuela', 'M', '2022-11-05', 0, NULL),
(29, 'Montana Allen', 'nulla.vulputate.dui@protonmail.ca', '1-916-295-5192', 'Makassar', 'F', '2022-11-08', 1, NULL),
(30, 'Teegan Camacho', 'quam@outlook.org', '(667) 678-7261', 'Innsbruck', 'F', '2022-06-19', 1, NULL),
(31, 'Porter Mayer', 'massa.lobortis@google.com', '1-676-234-7544', 'Mosciano Sant\'Angelo', 'M', '2022-04-27', 0, NULL),
(33, 'Sandra Good', 'imperdiet.ornare@hotmail.edu', '(243) 412-5360', 'Benoni', 'F', '2022-01-19', 1, NULL),
(34, 'Daphne Rodriguez', 'tortor.nunc@outlook.edu', '1-777-974-6185', 'Palma de Mallorca', 'M', '2021-12-03', 1, NULL),
(35, 'MArcos', 'gasdasd@gmail.com', '65992486820', 'Rua Campo Novo (C Vetoratto)', 'S', '2022-03-18', 0, NULL),
(36, 'marcos', 'asdasdas@gmail.com', '6454', '', 'M', '2022-03-17', 0, NULL),
(46, 'marcos', 'teste@gmail.com', '312', '', '', '0000-00-00', 0, NULL),
(47, 'ma', 'teste@gmail.com', '312', '', '', '0000-00-00', 0, NULL),
(50, 'sa', 'teste@gmail.com', '4342', '', '', '0000-00-00', 0, NULL),
(75, 'MARCOS ANDRE RIBEIRO GOMES', 'marcosandrebahia@gmail.com', '+5565992486820', 'rua g', '', '0000-00-00', 0, NULL),
(83, 'asd', 'teste@gmail.com', '', '', '', '0000-00-00', 0, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbcontatos`
--
ALTER TABLE `tbcontatos`
  ADD PRIMARY KEY (`idContato`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcontatos`
--
ALTER TABLE `tbcontatos`
  MODIFY `idContato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
