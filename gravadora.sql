-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12-Jul-2015 às 07:06
-- Versão do servidor: 5.5.28
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gravadora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cantor`
--

CREATE TABLE IF NOT EXISTS `cantor` (
`id` int(100) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cantor`
--

INSERT INTO `cantor` (`id`, `nome`) VALUES
(1, 'Raul'),
(3, 'fagner'),
(4, 'elba'),
(5, 'zÃ© ramalho'),
(6, 'SOAD'),
(7, 'teste'),
(8, 'renato russo'),
(20, 'cazuza');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cd`
--

CREATE TABLE IF NOT EXISTS `cd` (
`codigo` int(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `data_lancamento` varchar(100) NOT NULL,
  `codigo_cantor` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cd`
--

INSERT INTO `cd` (`codigo`, `titulo`, `data_lancamento`, `codigo_cantor`) VALUES
(1, 'SÃ³ as maes sÃ£o felizes', '20/12/1988', 2),
(3, 'teste', 'teste', 3),
(4, 'acustico', '20/12/1988', 1),
(5, 'acustico', '20/12/1999', 3),
(6, 'SOAD', '20/12/1999', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`codigo` int(244) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`codigo`, `nome`, `login`, `senha`) VALUES
(1, 'Doug', 'doug', '123'),
(2, 'fellipe', 'fellipe', '202cb962ac59075b964b07152d234b70'),
(3, 'lucas', 'lucas', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'nicolas', 'nicolas', '123'),
(5, 'rui', 'rui', '123'),
(6, 'n', '', ''),
(7, 'feas', '', '123'),
(8, 'fellipe', 'fellipe91', 'teste'),
(9, 'tt', 'aa', '123'),
(10, 'fagner', 'fagner', '123'),
(11, 'samyra', 'samyra', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cantor`
--
ALTER TABLE `cantor`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cd`
--
ALTER TABLE `cd`
 ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cantor`
--
ALTER TABLE `cantor`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `cd`
--
ALTER TABLE `cd`
MODIFY `codigo` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
MODIFY `codigo` int(244) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
