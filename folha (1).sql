-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Out-2022 às 22:20
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `folha`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contrato`
--

CREATE TABLE `contrato` (
  `cod` int(11) NOT NULL,
  `tipo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `codFuncioncionario` int(11) NOT NULL,
  `codEmpresa` int(11) NOT NULL,
  `dataInicio` date NOT NULL,
  `dataFim` date DEFAULT NULL,
  `cargo` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `cbo` int(11) NOT NULL,
  `salario` float NOT NULL,
  `jornada` int(11) NOT NULL,
  `experiencia` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `diasExperiencia` int(11) NOT NULL,
  `valeTransporte` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `periculosidade` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `insalubridade` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `escala` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `contrato`
--

INSERT INTO `contrato` (`cod`, `tipo`, `codFuncioncionario`, `codEmpresa`, `dataInicio`, `dataFim`, `cargo`, `cbo`, `salario`, `jornada`, `experiencia`, `diasExperiencia`, `valeTransporte`, `periculosidade`, `insalubridade`, `escala`) VALUES
(1, 'Indeterminado', 1, 1, '2022-10-03', '2022-10-29', 'profersso', 222, 1000, 220, 'sim', 45, 'sim', 'sim', 'sim', 2),
(2, 'Indeterminado', 1, 1, '2022-10-03', '2022-10-29', 'profersso', 222, 1000, 220, 'sim', 45, 'sim', 'sim', 'sim', 2),
(3, 'Indeterminado', 1, 1, '2022-10-03', '0000-00-00', 'profersso', 222, 1000, 220, 'sim', 45, 'sim', 'sim', 'sim', 2),
(4, 'Indeterminado', 1, 1, '2022-10-03', '0000-00-00', 'profersso', 222, 1000, 220, 'sim', 45, 'sim', 'sim', 'sim', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `dependente`
--

CREATE TABLE `dependente` (
  `cod` int(11) NOT NULL,
  `nome` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `nascimento` date NOT NULL,
  `sexo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `codfuncionario` int(11) NOT NULL,
  `salariofamilia` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `irrf` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `dependente`
--

INSERT INTO `dependente` (`cod`, `nome`, `nascimento`, `sexo`, `codfuncionario`, `salariofamilia`, `irrf`) VALUES
(1, 'wesley felix trindade', '2022-10-07', 'masculino', 1, 'sim', 'sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `cod` int(11) NOT NULL,
  `razao` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `CNPJ` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Inscricao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rua` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `responsavel` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`cod`, `razao`, `nome`, `CNPJ`, `Inscricao`, `rua`, `numero`, `bairro`, `estado`, `telefone`, `email`, `responsavel`) VALUES
(3, 'Senasc', 'Senac escola', '0127725617819', '65464839030', 'rua conselheiro', 23, 'vila matias', 'sp', '(13) 9399-30039', '', ''),
(2, 'Informatica Nacional', 'Nacional', '43563636636', '646464646464646', 'rua 7 de setembro', 34, 'ITARARE', 'sp', '31985647113', 'rogergabriel2350@gmail.com', 'santos'),
(4, 'rooroo', 'ffff', '55555', '645465465', 'fffff', 45, 'frfr', 'frf', '31985647113', 'rogergabriel2350@gmail.com', 'santos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `cod` int(11) NOT NULL,
  `nome` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `identidade` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CTPS` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `serie` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `CNH` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `rua` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pais` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estadoCivil` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `escolaridade` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `registro` int(11) NOT NULL,
  `certidao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `certificado` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `filhos` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dependentes` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`cod`, `nome`, `cpf`, `identidade`, `sexo`, `CTPS`, `serie`, `titulo`, `CNH`, `rua`, `numero`, `bairro`, `cidade`, `estado`, `pais`, `telefone`, `estadoCivil`, `escolaridade`, `registro`, `certidao`, `certificado`, `filhos`, `email`, `status`, `dependentes`) VALUES
(1, 'wesley felix trindade', '386.319.868-95', '55555', 'masculino', '3333', '333', '43223432', '43223', 'nhjhjkhkj', 6, 'ITARARE', 'SÃƒO VICENTE', 'bbb', 'RepÃºblica Dominicana', '31985647113', 'casado', 'Fundamental', 333, '333', '333', 2, 'felixtrindadewesley@gmail.com', 'Ativo', 2),
(2, 'wesley felix trindade', '386.319.868-95', '55555', 'masculino', '3333', '333', '43223432', '43223', 'nhjhjkhkj', 6, 'ITARARE', 'SÃƒO VICENTE', 'bbb', 'RepÃºblica Dominicana', '31985647113', 'casado', 'Fundamental', 333, '333', '333', 2, 'felixtrindadewesley@gmail.com', 'Ativo', 2),
(3, 'wesley felix trindade', '386.319.868-95', '55555', 'masculino', '3333', '333', '43223432', '43223', 'nhjhjkhkj', 6, 'ITARARE', 'SÃƒO VICENTE', 'bbb', 'RepÃºblica Dominicana', '31985647113', 'casado', 'Fundamental', 333, '333', '333', 2, 'felixtrindadewesley@gmail.com', 'Ativo', 2),
(4, 'wesley felix trindade', '386.319.868-95', '55555', 'masculino', '3333', '333', '43223432', '43223', 'nhjhjkhkj', 6, 'ITARARE', 'SÃƒO VICENTE', 'bbb', 'RepÃºblica Dominicana', '31985647113', 'casado', 'Fundamental', 333, '333', '333', 2, 'felixtrindadewesley@gmail.com', 'Ativo', 2),
(5, 'wesley felix trindade', '386.319.868-95', '55555', 'masculino', '3333', '333', '43223432', '43223', 'nhjhjkhkj', 6, 'ITARARE', 'SÃƒO VICENTE', 'bbb', 'RepÃºblica Dominicana', '31985647113', 'casado', 'Fundamental', 333, '333', '333', 2, 'felixtrindadewesley@gmail.com', 'Ativo', 2),
(6, 'wesley felix trindade', '386.319.868-95', '55555', 'masculino', '3333', '333', '43223432', '43223', 'nhjhjkhkj', 6, 'ITARARE', 'SÃƒO VICENTE', 'bbb', 'RepÃºblica Dominicana', '31985647113', 'casado', 'Fundamental', 333, '333', '333', 2, 'felixtrindadewesley@gmail.com', 'Ativo', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `cod` int(11) NOT NULL,
  `Nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `perfil` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`cod`, `Nome`, `usuario`, `senha`, `status`, `perfil`) VALUES
(1, 'roger', 'roger', '1234', 'ativo', 1),
(2, 'gabriel', 'santos', '4321', 'ativo', 1),
(8, 'julio', 'antonio', '43434', 'Ativo', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `dependente`
--
ALTER TABLE `dependente`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contrato`
--
ALTER TABLE `contrato`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dependente`
--
ALTER TABLE `dependente`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
