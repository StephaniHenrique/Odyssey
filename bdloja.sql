-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Jul-2020 às 20:19
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdloja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcliente`
--

CREATE TABLE `tbcliente` (
  `idcliente` int(11) NOT NULL,
  `nomecliente` varchar(70) NOT NULL,
  `rgcliente` varchar(15) NOT NULL,
  `cpfcliente` varchar(14) NOT NULL,
  `emailcliente` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbcliente`
--

INSERT INTO `tbcliente` (`idcliente`, `nomecliente`, `rgcliente`, `cpfcliente`, `emailcliente`) VALUES
(3, 'Clodoaldo', '345678', '111.111.111-11', 'clodoaldo@gmail.com'),
(4, 'Matheus', '1234', '222.222.222-22', 'matheus@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbitemvenda`
--

CREATE TABLE `tbitemvenda` (
  `iditemvenda` int(11) NOT NULL,
  `idvenda` int(11) NOT NULL,
  `idproduto` int(11) NOT NULL,
  `qtdeitemvenda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbproduto`
--

CREATE TABLE `tbproduto` (
  `idproduto` int(11) NOT NULL,
  `descproduto` varchar(70) NOT NULL,
  `valorproduto` double NOT NULL,
  `qtdeproduto` int(11) NOT NULL,
  `fotoproduto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbproduto`
--

INSERT INTO `tbproduto` (`idproduto`, `descproduto`, `valorproduto`, `qtdeproduto`, `fotoproduto`) VALUES
(6, 'sapato de salto alto', 120, 100, 'images/produto/6.jpg'),
(7, 'Tenis de jeans', 130, 80, 'images/produto/7.jpg'),
(8, 'sapato rosa', 80, 50, 'images/produto/8.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbvenda`
--

CREATE TABLE `tbvenda` (
  `idvenda` int(11) NOT NULL,
  `datavenda` date NOT NULL,
  `valortotalvenda` double NOT NULL,
  `idcliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Índices para tabela `tbitemvenda`
--
ALTER TABLE `tbitemvenda`
  ADD PRIMARY KEY (`iditemvenda`),
  ADD KEY `idvenda` (`idvenda`),
  ADD KEY `idproduto` (`idproduto`);

--
-- Índices para tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD PRIMARY KEY (`idproduto`);

--
-- Índices para tabela `tbvenda`
--
ALTER TABLE `tbvenda`
  ADD PRIMARY KEY (`idvenda`),
  ADD KEY `idcliente` (`idcliente`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tbitemvenda`
--
ALTER TABLE `tbitemvenda`
  MODIFY `iditemvenda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tbvenda`
--
ALTER TABLE `tbvenda`
  MODIFY `idvenda` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbitemvenda`
--
ALTER TABLE `tbitemvenda`
  ADD CONSTRAINT `tbitemvenda_ibfk_1` FOREIGN KEY (`idvenda`) REFERENCES `tbvenda` (`idvenda`),
  ADD CONSTRAINT `tbitemvenda_ibfk_2` FOREIGN KEY (`idproduto`) REFERENCES `tbproduto` (`idproduto`);

--
-- Limitadores para a tabela `tbvenda`
--
ALTER TABLE `tbvenda`
  ADD CONSTRAINT `tbvenda_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `tbcliente` (`idcliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
