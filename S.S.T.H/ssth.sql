-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09/02/2024 às 21:52
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ssth`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `postagem`
--

CREATE TABLE `postagem` (
  `idpost` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `titulo` mediumtext NOT NULL,
  `data` varchar(12) NOT NULL,
  `mensagem` varchar(6383) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `likes` int(11) DEFAULT NULL,
  `comentarios` int(11) DEFAULT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `postagem`
--

INSERT INTO `postagem` (`idpost`, `nome`, `titulo`, `data`, `mensagem`, `categoria`, `imagem`, `likes`, `comentarios`, `idusuario`) VALUES
(28, 'Eric', 'Teste01', '92/12/3123', 'Olá, seja muito bem vindo ao blog Strangers Stuffs That Happens, para os mais intimos: \"SSTH\", para os BRs:\"Coisas Estranhas Que Acontecem\". Aqui você poderá publicar relatos que você soube ou que já aconteceu com você e ver os dos demais usuarios. Espero que aproveite e se divirta bastante!!! Bjs S2', 'Cripitidio', 'Aleatorio.webp', NULL, NULL, 4),
(40, 'Eric Maia Cerqueira e Silva', 'teste3', '08/02/2024', 'teste3', 'Sobrenatural', 'Sobrenatural.jpg', NULL, NULL, 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `nome` varchar(60) NOT NULL,
  `email` varchar(110) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `email`, `senha`, `idusuario`) VALUES
('Eric', 'erica36silva@gmail.com', '321', 4);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `postagem`
--
ALTER TABLE `postagem`
  ADD PRIMARY KEY (`idpost`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `postagem`
--
ALTER TABLE `postagem`
  MODIFY `idpost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `postagem`
--
ALTER TABLE `postagem`
  ADD CONSTRAINT `postagem_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
