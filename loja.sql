-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Jun-2021 às 23:45
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `entregavirtual`
--

CREATE TABLE `entregavirtual` (
  `id` int(11) NOT NULL,
  `tipoPessoa` varchar(20) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `sobrenome` varchar(70) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `cpfCnpj` varchar(20) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `nascimento` date NOT NULL,
  `cep` varchar(20) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(100) NOT NULL,
  `referencia` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `entregavirtual`
--

INSERT INTO `entregavirtual` (`id`, `tipoPessoa`, `nome`, `sobrenome`, `sexo`, `cpfCnpj`, `telefone`, `celular`, `nascimento`, `cep`, `rua`, `numero`, `complemento`, `referencia`, `bairro`, `cidade`, `estado`) VALUES
(9, 'Jurídica', 'LTDA', 'Empresa', 'Prefiro não declarar', '002128784', '00215120', '123456', '1980-01-01', '21212121', 'Ene de Navio', 0, '-', '-', 'Centro', 'Cidade', 'RS'),
(10, 'Física', 'Ciclano', 'de Fulanos', 'Masculino', '232549841', '498414', '51984119', '1998-06-03', '321654', 'Rua', 54, 'Apto 08', '-', 'Bairro', 'Viamão', 'RS');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `entregavirtual`
--
ALTER TABLE `entregavirtual`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `entregavirtual`
--
ALTER TABLE `entregavirtual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
