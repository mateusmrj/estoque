-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06-Out-2015 às 20:18
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `estoque`
--
-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(520) NOT NULL,
  `descricao` text NOT NULL,
  `preco` varchar(20) NOT NULL,
  `qtde` varchar(520) NOT NULL,
  `imagem` varchar(220) NOT NULL,
  `modified` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `preco`, `qtde`, `imagem`, `modified`, `created`) VALUES
(1, 'Cozinha Cinza', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan nibh sed accumsan tincidunt. In id lacinia leo. Nulla risus libero, vestibulum sit amet erat nec, tincidunt porttitor ex. Donec at egestas ligula, vel tincidunt turpis. Ut gravida ac mauris id egestas. Vestibulum odio mi, porta eu nisi non, egestas fermentum nunc.</p>', '1800,00', 100, 'cozinha1.jpg', '2018-03-04 12:07:44', '2015-03-26 21:18:03'),
(2, 'Cozinha Cinza', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan nibh sed accumsan tincidunt. In id lacinia leo. Nulla risus libero, vestibulum sit amet erat nec, tincidunt porttitor ex. Donec at egestas ligula, vel tincidunt turpis. Ut gravida ac mauris id egestas. Vestibulum odio mi, porta eu nisi non, egestas fermentum nunc.</p>', '1600,00', 100, 'cozinha2.jpg', '2018-03-04 12:07:44', '2015-03-26 21:18:03');
-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nivel_acesso_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `login`, `senha`, `nivel_acesso_id`, `created`, `modified`) VALUES
(1, 'Mateus', 'admin@MM.com.br', 'admin', '123', 1, '2018-03-09 00:00:00', NULL),
(2, 'teste', 'testey@MM.com.br', 'teste', '123', 2, NULL, '2018-03-09 13:20:53');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
