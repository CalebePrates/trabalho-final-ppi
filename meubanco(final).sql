-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/11/2023 às 03:37
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `meubanco`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedido_torneio`
--

CREATE TABLE `pedido_torneio` (
  `torneio_nome` varchar(255) NOT NULL,
  `users_user` varchar(255) NOT NULL,
  `aceito` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `torneio`
--

CREATE TABLE `torneio` (
  `nome` varchar(255) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `torneio`
--

INSERT INTO `torneio` (`nome`, `data`) VALUES
('Torneio de Exemplo', '2023-12-10');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `user` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `aceito` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`user`, `nome`, `rating`, `senha`, `aceito`) VALUES
('admin', 'ADM', 1800, 'adm1234', 1),
('grm1003', 'Gabriel', 1800, 'pokemon123', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `pedido_torneio`
--
ALTER TABLE `pedido_torneio`
  ADD PRIMARY KEY (`torneio_nome`,`users_user`),
  ADD KEY `users_user` (`users_user`);

--
-- Índices de tabela `torneio`
--
ALTER TABLE `torneio`
  ADD PRIMARY KEY (`nome`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user`);

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `pedido_torneio`
--
ALTER TABLE `pedido_torneio`
  ADD CONSTRAINT `pedido_torneio_ibfk_1` FOREIGN KEY (`torneio_nome`) REFERENCES `torneio` (`nome`),
  ADD CONSTRAINT `pedido_torneio_ibfk_2` FOREIGN KEY (`users_user`) REFERENCES `users` (`user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
