-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04-Maio-2015 às 07:55
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tales`
--
CREATE DATABASE IF NOT EXISTS `tales` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `tales`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `backgrounds`
--

DROP TABLE IF EXISTS `backgrounds`;
CREATE TABLE IF NOT EXISTS `backgrounds` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `backgrounds`
--

INSERT INTO `backgrounds` (`id`, `titulo`, `imagem`) VALUES
(1, 'Principal', 'img/headerback.jpg'),
(2, 'Unidades', 'img/unidadeback.jpg'),
(3, 'Contato', 'img/contatoback.png'),
(4, 'Parceiros', 'img/parceriaback.jpg'),
(5, 'Cursos', 'img/footerback.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

DROP TABLE IF EXISTS `cursos`;
CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `curso_titulo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `curso_descricao` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `curso_inicio` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `curso_fim` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `curso_dias` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `curso_horario` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `curso_tipo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `usuario_id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `senha` varchar(15) NOT NULL,
  PRIMARY KEY (`usuario_id`)
) ;

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `post` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `arquivo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `post`, `arquivo`) VALUES
(1, 'huee', ' fffffff', ''),
(2, 'Tales', 'crazyyyyyyyyyyyyy ', ''),
(3, 'Tales', ' hue', 'img/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `texto_index`
--

DROP TABLE IF EXISTS `texto_index`;
CREATE TABLE IF NOT EXISTS `texto_index` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `texto_main` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text_two` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `texto_index`
--

INSERT INTO `texto_index` (`id`, `texto_main`, `text_two`) VALUES
(1, 'Conquiste Sua Vaga', 'Venha Para Tales e Conquiste Sua Vaga'),
(2, 'EndereÃ§o : ', 'Av. Rio das Pedras, 311 - Jardim Aricanduva, SÃ£o Paulo - SP'),
(3, 'Telefones: 11 2036-3610 / 11 2036-3610', 'E-mail: talesaricanduva@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
