-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Mai 04, 2015 as 10:00 AM
-- Versão do Servidor: 5.5.8
-- Versão do PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `tales`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `backgrounds`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `curso_titulo`, `curso_descricao`, `curso_inicio`, `curso_fim`, `curso_dias`, `curso_horario`, `curso_tipo`) VALUES
(12, 'Mariazinha', ' maria eh linda tesuda da cor do pecado', 'dia', 'noite', 'Todos', '6.6', 'Vestibular');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `post` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `arquivo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `post`, `arquivo`) VALUES
(16, 'hue', '', 'img/PHP_13.pdf'),
(17, 'Kratinho', '~~~~~l', 'img/logo.fw.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `texto_index`
--

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
