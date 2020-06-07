-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Abr-2020 às 07:00
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ehp`
--
DROP DATABASE IF EXISTS `ehp`;
CREATE DATABASE IF NOT EXISTS `ehp` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ehp`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `tipo_pessoa` varchar(50) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `endereco_numero` varchar(20) NOT NULL,
  `complemento` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `telefone_celular1` varchar(20) NOT NULL,
  `telefone_fixo` varchar(20) NOT NULL,
  `telefone_celular2` varchar(20) NOT NULL,
  `cnpj` varchar(50) NOT NULL,
  `rg` varchar(50) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `ie` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `servico_contratado` varchar(50) NOT NULL,
  `contato_empresa` tinyint(1) NOT NULL,
  `observacoes` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `tipo_pessoa`, `nome`, `endereco`, `endereco_numero`, `complemento`, `bairro`, `cidade`, `cep`, `telefone_celular1`, `telefone_fixo`, `telefone_celular2`, `cnpj`, `rg`, `cpf`, `ie`, `email`, `servico_contratado`, `contato_empresa`, `observacoes`) VALUES
(1, 'fisica', 'Egeverton marcelino de oliveira', 'RUA JABORANDi', '365', 'teste', 'pavuna', 'FORTALEZA', '60.865-270', '(55) 85988-7572', '', '', '00.254.574/5213-24', '5645643132145', '635.434.504', '53435121', 'stowpass@gmail.com', '', 0, 'sdgdsgdsvgsdv'),
(2, 'juridica', 'Ton Marcelino', 'RUA JABORANDi', '365', 'teste', 'pavuna', 'FORTALEZA', '60.865-270', '(85) 98875-7271', '', '', '00.254.574/5213-24', '5645643132145', '635.434.504', '53435121', 'stowpass@gmail.com', '', 0, 'sdgdsgdsvgsdv'),
(3, 'fisica', 'VOXCONECT', 'RUA JABORANDi, 825', '', 'rua das casas', 'Jangurussu', 'FORTALEZA', '60.865-270', '(55) 85988-7572', '(55) 5222-2112', '(32) 13215-6651', '23.132.156/6113-05', '556564541321', '030.656.511', '65165+4105656', '5655@mail.com', '', 0, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `motivo` varchar(50) DEFAULT NULL,
  `observacoes` longtext DEFAULT NULL,
  `garantia_material` varchar(5) DEFAULT NULL,
  `garantia_servico` varchar(5) DEFAULT NULL,
  `prazo_conclusao` varchar(5) DEFAULT NULL,
  `validade_proposta` varchar(5) DEFAULT NULL,
  `numero_de_parcelas` int(5) DEFAULT NULL,
  `valor_cada_parcela` varchar(20) DEFAULT NULL,
  `valor_por_extenso` varchar(300) DEFAULT NULL,
  `forma_de_pagamento` longtext DEFAULT NULL,
  `total_parcial` decimal(10,2) DEFAULT NULL,
  `desconto` decimal(10,2) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `vendedor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id`, `id_cliente`, `data`, `motivo`, `observacoes`, `garantia_material`, `garantia_servico`, `prazo_conclusao`, `validade_proposta`, `numero_de_parcelas`, `valor_cada_parcela`, `valor_por_extenso`, `forma_de_pagamento`, `total_parcial`, `desconto`, `total`, `vendedor`) VALUES
(1, 3, NULL, 'amanda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10043.42', NULL, NULL, NULL),
(2, 1, NULL, 'amanda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6876.10', NULL, NULL, NULL),
(3, 2, NULL, 'amanda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10015.70', NULL, NULL, NULL),
(4, 2, NULL, 'amanda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5340.95', NULL, NULL, NULL),
(5, 2, NULL, 'amanda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7389.47', NULL, NULL, NULL),
(6, 3, NULL, 'amanda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10043.42', NULL, NULL, NULL),
(7, 3, NULL, '21211', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2684.00', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sub_pedidos`
--

DROP TABLE IF EXISTS `sub_pedidos`;
CREATE TABLE `sub_pedidos` (
  `id` int(11) NOT NULL,
  `id_pedido` int(11) DEFAULT NULL,
  `quantidade` double DEFAULT NULL,
  `descricao` varchar(300) DEFAULT NULL,
  `valor_unitario` decimal(10,2) DEFAULT NULL,
  `valor_total` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `sub_pedidos`
--

INSERT INTO `sub_pedidos` (`id`, `id_pedido`, `quantidade`, `descricao`, `valor_unitario`, `valor_total`) VALUES
(1, 1, 235, '545454', '21.31', '5007.85'),
(2, 1, 235, '545454', '21.31', '5007.85'),
(3, 1, 11, '545454DADAD', '2.52', '27.72'),
(4, 2, 235, '', '21.31', '5007.85'),
(5, 2, 12, '', '21.00', '252.00'),
(6, 2, 50, '', '32.33', '1616.25'),
(7, 3, 235, '545454', '21.31', '5007.85'),
(8, 3, 235, '545454', '21.31', '5007.85'),
(9, 4, 235, '545454', '21.31', '5007.85'),
(10, 4, 12, '545454', '10.00', '120.00'),
(11, 4, 10, 'hid', '21.31', '213.10'),
(12, 5, 235, '545454', '21.31', '5007.85'),
(13, 5, 235, '2', '10.00', '2350.00'),
(14, 5, 12.5, '545454DADAD', '2.53', '31.62'),
(15, 6, 235, '545454', '21.31', '5007.85'),
(16, 6, 235, '545454', '21.31', '5007.85'),
(17, 6, 11, 'hid', '2.52', '27.72'),
(18, 7, 122, '', '22.00', '2684.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `status`) VALUES
(1, 'ton', 'stowpass@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(3, 'Kelly Santos', 'kelly@mail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(4, 'ton marcelino', 'stowpass@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(5, 'ton', 'stowpass@d.com', '81dc9bdb52d04dc20036dbd8313ed055', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Índices para tabela `sub_pedidos`
--
ALTER TABLE `sub_pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pedido` (`id_pedido`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `sub_pedidos`
--
ALTER TABLE `sub_pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `sub_pedidos`
--
ALTER TABLE `sub_pedidos`
  ADD CONSTRAINT `sub_pedidos_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
