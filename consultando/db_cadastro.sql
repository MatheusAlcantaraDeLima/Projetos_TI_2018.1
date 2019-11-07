-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Nov-2019 às 21:24
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `id_contato`
--

CREATE TABLE `id_contato` (
  `id_contato` int(11) NOT NULL,
  `telefone` int(9) NOT NULL,
  `email` varchar(30) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_medico` int(11) DEFAULT NULL,
  `id_US` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_consulta`
--

CREATE TABLE `tb_consulta` (
  `id_consulta` int(11) NOT NULL,
  `prontuario` int(6) NOT NULL,
  `nome_especialidade` varchar(50) NOT NULL,
  `medico` varchar(50) NOT NULL,
  `diaEHora` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_consulta`
--

INSERT INTO `tb_consulta` (`id_consulta`, `prontuario`, `nome_especialidade`, `medico`, `diaEHora`) VALUES
(2, 123456, 'Gastroenterologia', 'Mariana Rios', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_especialidade`
--

CREATE TABLE `tb_especialidade` (
  `id_especialidade` int(11) NOT NULL,
  `nome_especialidade` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_especialidade`
--

INSERT INTO `tb_especialidade` (`id_especialidade`, `nome_especialidade`) VALUES
(1, 'clínica médica'),
(2, 'cardiologia'),
(3, 'Endocrinologia'),
(4, 'Geriatria'),
(5, 'Gastroenterologia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_medico`
--

CREATE TABLE `tb_medico` (
  `id_medico` int(11) NOT NULL,
  `nome_medico` varchar(30) NOT NULL,
  `id_especialidade1` int(11) NOT NULL,
  `id_us1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_medico`
--

INSERT INTO `tb_medico` (`id_medico`, `nome_medico`, `id_especialidade1`, `id_us1`) VALUES
(1, 'Paulo Alves', 1, 1),
(2, 'Eneida Sousa', 1, 1),
(3, 'Alessandra Pinheiro', 2, 2),
(4, 'Celso Furtado', 2, 2),
(5, 'Sonia Regina', 2, 2),
(6, 'Murilo Filho', 3, 3),
(7, 'Antonio castro', 3, 3),
(8, 'Manoel Ribeiro', 4, 4),
(9, 'José Filho', 4, 4),
(10, 'Mariana Rios', 5, 5),
(11, 'Mariano José', 5, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_us`
--

CREATE TABLE `tb_us` (
  `id_us` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `localidade` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_us`
--

INSERT INTO `tb_us` (`id_us`, `nome`, `localidade`) VALUES
(1, 'Ubs Centro', 'centro'),
(2, 'Ubs Fonseca', 'Fonseca'),
(3, 'Ubs Ilha', 'Ilha'),
(4, 'PrCas', 'Jansen de mello'),
(5, 'Ubs Ponta Dareia', 'Ponta dareia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `unidade` varchar(30) NOT NULL,
  `prontuario` int(6) NOT NULL,
  `senha` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id_usuario`, `nome`, `unidade`, `prontuario`, `senha`) VALUES
(12, 'Joao Jorge', 'Ubs Centro', 123456, 'joao123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `id_contato`
--
ALTER TABLE `id_contato`
  ADD PRIMARY KEY (`id_contato`);

--
-- Indexes for table `tb_consulta`
--
ALTER TABLE `tb_consulta`
  ADD PRIMARY KEY (`id_consulta`);

--
-- Indexes for table `tb_especialidade`
--
ALTER TABLE `tb_especialidade`
  ADD PRIMARY KEY (`id_especialidade`);

--
-- Indexes for table `tb_medico`
--
ALTER TABLE `tb_medico`
  ADD PRIMARY KEY (`id_medico`),
  ADD KEY `fk_id_especialidade` (`id_especialidade1`),
  ADD KEY `fk_id_us` (`id_us1`);

--
-- Indexes for table `tb_us`
--
ALTER TABLE `tb_us`
  ADD PRIMARY KEY (`id_us`);

--
-- Indexes for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `id_contato`
--
ALTER TABLE `id_contato`
  MODIFY `id_contato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_consulta`
--
ALTER TABLE `tb_consulta`
  MODIFY `id_consulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_especialidade`
--
ALTER TABLE `tb_especialidade`
  MODIFY `id_especialidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_medico`
--
ALTER TABLE `tb_medico`
  MODIFY `id_medico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_us`
--
ALTER TABLE `tb_us`
  MODIFY `id_us` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_medico`
--
ALTER TABLE `tb_medico`
  ADD CONSTRAINT `fk_id_especialidade` FOREIGN KEY (`id_especialidade1`) REFERENCES `tb_especialidade` (`id_especialidade`),
  ADD CONSTRAINT `fk_id_us` FOREIGN KEY (`id_us1`) REFERENCES `tb_us` (`id_us`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
