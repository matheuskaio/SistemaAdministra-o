-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 26-Abr-2019 às 16:22
-- Versão do servidor: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.0.33-5+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karate`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id` int(11) NOT NULL,
  `faixa` varchar(10) NOT NULL,
  `data_inicio` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `id_turma` int(11) NOT NULL,
  `id_mensalidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno_exame`
--

CREATE TABLE `aluno_exame` (
  `id` int(11) NOT NULL,
  `id_aluno` int(11) NOT NULL,
  `id_exame` int(11) NOT NULL,
  `faixa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dojo`
--

CREATE TABLE `dojo` (
  `id` int(11) NOT NULL,
  `nome` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `rua` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `numero` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `exame`
--

CREATE TABLE `exame` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `sala` int(11) NOT NULL,
  `valor` decimal(5,2) NOT NULL,
  `vagas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensalidade`
--

CREATE TABLE `mensalidade` (
  `id` int(11) NOT NULL,
  `desconto` int(11) NOT NULL,
  `data` int(11) NOT NULL,
  `valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mestre_exame`
--

CREATE TABLE `mestre_exame` (
  `id` int(11) NOT NULL,
  `id_mestre` int(11) NOT NULL,
  `id_exame` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `id` int(11) NOT NULL,
  `dias` varchar(10) NOT NULL,
  `id_mestre` int(11) NOT NULL,
  `vagas` int(11) NOT NULL,
  `nivel` varchar(10) NOT NULL,
  `horas_aula` time NOT NULL,
  `sala` int(11) NOT NULL,
  `id_dojo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `rg` varchar(11) NOT NULL,
  `cpf` char(14) NOT NULL,
  `tipo` set('G','A','M','S') NOT NULL,
  `email` varchar(50) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `id_endereco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_turma` (`id_turma`),
  ADD KEY `id_mensalidade` (`id_mensalidade`);

--
-- Indexes for table `aluno_exame`
--
ALTER TABLE `aluno_exame`
  ADD KEY `id_aluno` (`id_aluno`),
  ADD KEY `id_exame` (`id_exame`);

--
-- Indexes for table `dojo`
--
ALTER TABLE `dojo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exame`
--
ALTER TABLE `exame`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mensalidade`
--
ALTER TABLE `mensalidade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mestre_exame`
--
ALTER TABLE `mestre_exame`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_exame` (`id_exame`),
  ADD KEY `id_mestre` (`id_mestre`);

--
-- Indexes for table `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mestre` (`id_mestre`),
  ADD KEY `id_dojo` (`id_dojo`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_endereco` (`id_endereco`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exame`
--
ALTER TABLE `exame`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `aluno_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usuario` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `aluno_ibfk_2` FOREIGN KEY (`id_turma`) REFERENCES `turma` (`id`),
  ADD CONSTRAINT `aluno_ibfk_3` FOREIGN KEY (`id_mensalidade`) REFERENCES `mensalidade` (`id`);

--
-- Limitadores para a tabela `aluno_exame`
--
ALTER TABLE `aluno_exame`
  ADD CONSTRAINT `aluno_exame_ibfk_1` FOREIGN KEY (`id_aluno`) REFERENCES `aluno` (`id`),
  ADD CONSTRAINT `aluno_exame_ibfk_2` FOREIGN KEY (`id_exame`) REFERENCES `exame` (`id`);

--
-- Limitadores para a tabela `mestre_exame`
--
ALTER TABLE `mestre_exame`
  ADD CONSTRAINT `mestre_exame_ibfk_1` FOREIGN KEY (`id_exame`) REFERENCES `exame` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mestre_exame_ibfk_2` FOREIGN KEY (`id_mestre`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `turma`
--
ALTER TABLE `turma`
  ADD CONSTRAINT `turma_ibfk_1` FOREIGN KEY (`id_mestre`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `turma_ibfk_2` FOREIGN KEY (`id_dojo`) REFERENCES `dojo` (`id`);

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_endereco`) REFERENCES `endereco` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
