-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 21-Set-2013 às 13:39
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `blogdopoder`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(48) NOT NULL,
  `perfil` varchar(10) NOT NULL,
  `status` char(1) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuario`, `nome`, `email`, `senha`, `perfil`, `status`) VALUES
(1, 'ANTONIO EVERTON LIMA ROLIM', 'antevertonlima@gmail.com', '98353ac2d5ed63bbc6e9a73ba4e2b19f', 'admin', 'a'),
(2, 'ANTONIO ROLIM', 'oshima.gdm@gmail.com', '98353ac2d5ed63bbc6e9a73ba4e2b19f', 'comum', 'a'),
(4, 'Oshima', 'oshima@gmail.com', '98353ac2d5ed63bbc6e9a73ba4e2b19f', 'comum', 'a'),
(5, 'Oshima1', '1111111@gmail.com', 'bbb8aae57c104cda40c93843ad5e6db8', 'comum', 'a');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
