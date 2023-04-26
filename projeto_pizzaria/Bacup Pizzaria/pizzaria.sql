-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Nov-2022 às 14:18
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pizzaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bebidas`
--

CREATE TABLE `bebidas` (
  `id_bebidas` int(11) NOT NULL,
  `bebida` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor_bebida` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `bebidas`
--

INSERT INTO `bebidas` (`id_bebidas`, `bebida`, `valor_bebida`, `data`) VALUES
(153, 'Caipira de Ypioca', '21,90', '2022-11-18 12:06:04'),
(800, 'Combo Jack Daniels + 6 Red Bull', '359,90', '2022-11-17 09:46:49');

-- --------------------------------------------------------

--
-- Estrutura da tabela `bordas`
--

CREATE TABLE `bordas` (
  `id_bordas` int(11) NOT NULL,
  `borda` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor_borda` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `calzone`
--

CREATE TABLE `calzone` (
  `id_calzone` int(11) NOT NULL,
  `calzone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor_calzone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `complementos`
--

CREATE TABLE `complementos` (
  `id_complementos` int(11) NOT NULL,
  `complemento` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor_complemento` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `lasanha`
--

CREATE TABLE `lasanha` (
  `id_lasanha` int(11) NOT NULL,
  `lasanha` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor_lasanha` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nhoque`
--

CREATE TABLE `nhoque` (
  `id_nhoque` int(11) NOT NULL,
  `nhoque` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor_nhoque` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pizzas`
--

CREATE TABLE `pizzas` (
  `id_pizza` int(11) NOT NULL,
  `pizza` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tamanho` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor_pizza` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `pizzas`
--

INSERT INTO `pizzas` (`id_pizza`, `pizza`, `tamanho`, `valor_pizza`, `data`) VALUES
(101, 'Alho e óleo', 'Média', '49,90', '2022-11-25 09:42:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `porcoes`
--

CREATE TABLE `porcoes` (
  `id_porcao` int(11) NOT NULL,
  `porcao` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor_porcao` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `salada`
--

CREATE TABLE `salada` (
  `id_salada` int(11) NOT NULL,
  `salada` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor_salada` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sanduiche`
--

CREATE TABLE `sanduiche` (
  `id_sanduiche` int(11) NOT NULL,
  `sanduiche` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor_sanduiche` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobremesa`
--

CREATE TABLE `sobremesa` (
  `id_sobremesa` int(11) NOT NULL,
  `sobremesa` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor_sobremesa` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `talharim_e_rondeli`
--

CREATE TABLE `talharim_e_rondeli` (
  `id_talharim` int(11) NOT NULL,
  `talharim_rondeli` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor_talharim` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `bebidas`
--
ALTER TABLE `bebidas`
  ADD PRIMARY KEY (`id_bebidas`);

--
-- Índices para tabela `bordas`
--
ALTER TABLE `bordas`
  ADD PRIMARY KEY (`id_bordas`);

--
-- Índices para tabela `calzone`
--
ALTER TABLE `calzone`
  ADD PRIMARY KEY (`id_calzone`);

--
-- Índices para tabela `complementos`
--
ALTER TABLE `complementos`
  ADD PRIMARY KEY (`id_complementos`);

--
-- Índices para tabela `lasanha`
--
ALTER TABLE `lasanha`
  ADD PRIMARY KEY (`id_lasanha`);

--
-- Índices para tabela `nhoque`
--
ALTER TABLE `nhoque`
  ADD PRIMARY KEY (`id_nhoque`);

--
-- Índices para tabela `pizzas`
--
ALTER TABLE `pizzas`
  ADD PRIMARY KEY (`id_pizza`);

--
-- Índices para tabela `porcoes`
--
ALTER TABLE `porcoes`
  ADD PRIMARY KEY (`id_porcao`);

--
-- Índices para tabela `salada`
--
ALTER TABLE `salada`
  ADD PRIMARY KEY (`id_salada`);

--
-- Índices para tabela `sanduiche`
--
ALTER TABLE `sanduiche`
  ADD PRIMARY KEY (`id_sanduiche`);

--
-- Índices para tabela `sobremesa`
--
ALTER TABLE `sobremesa`
  ADD PRIMARY KEY (`id_sobremesa`);

--
-- Índices para tabela `talharim_e_rondeli`
--
ALTER TABLE `talharim_e_rondeli`
  ADD PRIMARY KEY (`id_talharim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
