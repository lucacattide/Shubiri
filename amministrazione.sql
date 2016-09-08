-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generato il: Set 07, 2016 alle 10:34
-- Versione del server: 5.5.38-0ubuntu0.14.04.1
-- Versione PHP: 5.5.9-1ubuntu4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `amministrazione`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(255) NOT NULL AUTO_INCREMENT,
  `admin_user` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_accesso` int(255) NOT NULL DEFAULT '0',
  `admin_data_creazione` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=9 ;

--
-- Dump dei dati per la tabella `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_user`, `admin_password`, `admin_accesso`, `admin_data_creazione`) VALUES
(1, 'admin', 'laboratorio2016', 1, '2016-08-22 13:17:31'),
(7, 'admin3', 'laboratorio3', 3, '2016-08-31 08:09:58'),
(8, 'admin4', 'lab4', 2, '2016-09-06 09:52:29');

-- --------------------------------------------------------

--
-- Struttura della tabella `articolo`
--

CREATE TABLE IF NOT EXISTS `articolo` (
  `articolo_id` int(255) NOT NULL AUTO_INCREMENT,
  `articolo_pagina_id` int(255) NOT NULL,
  `articolo_titolo` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `articolo_sottotitolo` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `articolo_testo` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `articolo_url` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `articolo_img_id` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `articolo_gallery_id` int(255) NOT NULL,
  `articolo_data_creazione` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `articolo_data_modifica` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `articolo_lingua` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `articolo_ordinamento` int(255) NOT NULL,
  `articolo_categoria_id` int(255) NOT NULL,
  `articolo_visibile` int(255) NOT NULL,
  PRIMARY KEY (`articolo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin2 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `categoria_id` int(255) NOT NULL AUTO_INCREMENT,
  `categoria_nome` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `categoria_url` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `categoria_articolo_id` int(255) NOT NULL,
  `categoria_immagine_id` int(255) NOT NULL,
  `categoria_gallery_id` int(255) NOT NULL,
  `categoria_data_creazione` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `categoria_data_modific` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`categoria_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin2 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `cliente_id` int(255) NOT NULL AUTO_INCREMENT,
  `cliente_nome` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cliente_cognome` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cliente_ragione_sociale` text NOT NULL,
  `cliente_indirizzo` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cliente_cap` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cilente_citta` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cliente_provincia` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cliente_stato` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cliente_email` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cliente_telefono` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cliente_fax` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cliente_partita_iva` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cliente_codice_fiscale` int(11) NOT NULL,
  `cliente_tipologia` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cliente_data_creazione` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cliente_data_modifica` datetime NOT NULL,
  `cliente_user` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cliente_password` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cliente_note` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`cliente_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin2 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `gallery_id` int(255) NOT NULL AUTO_INCREMENT,
  `gallery_articolo_id` int(255) NOT NULL,
  `gallery_data_creazione` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gallery_data_ficamodi` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`gallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin2 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `immagine`
--

CREATE TABLE IF NOT EXISTS `immagine` (
  `immagine_id` int(255) NOT NULL AUTO_INCREMENT,
  `immagine_label` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `immagine_data_creazione` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `immagine_data_modifica` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `immagine_articolo_id` int(255) NOT NULL,
  PRIMARY KEY (`immagine_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin2 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `lingua`
--

CREATE TABLE IF NOT EXISTS `lingua` (
  `lingua_id` int(255) NOT NULL AUTO_INCREMENT,
  `lingua_label` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `lingua_short` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`lingua_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin2 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `pagina`
--

CREATE TABLE IF NOT EXISTS `pagina` (
  `pagina_id` int(255) NOT NULL AUTO_INCREMENT,
  `pagina_url` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `pagina_riferimento` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `pagina_meta_title` text NOT NULL,
  `pagina_meta_description` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `pagina_meta_tag` text NOT NULL,
  `pagina_immagine_id` int(255) NOT NULL,
  `pagina_gallery_id` int(255) NOT NULL,
  `pagina_lingua` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `pagina_data_creazione` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pagina_data_modifica` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `pagina_dipendenza_id` int(255) NOT NULL,
  `pagina_ordinamento` int(255) NOT NULL,
  `pagina_categoria_id` int(255) NOT NULL,
  PRIMARY KEY (`pagina_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=16 ;

--
-- Dump dei dati per la tabella `pagina`
--

INSERT INTO `pagina` (`pagina_id`, `pagina_url`, `pagina_riferimento`, `pagina_meta_title`, `pagina_meta_description`, `pagina_meta_tag`, `pagina_immagine_id`, `pagina_gallery_id`, `pagina_lingua`, `pagina_data_creazione`, `pagina_data_modifica`, `pagina_dipendenza_id`, `pagina_ordinamento`, `pagina_categoria_id`) VALUES
(1, 'home', 'home.php', 'Blac Desir | Wedding & event production', 'Blanc Desir ?¨ il brand italiano specializzato nell''organizzazione dei matrimoni e degli eventi luxury.\r\nCon noi i vostri sogni diventano realt? .', 'Wedding, event ,production, organizzazione matrimonio, matrimonio ', 0, 0, '', '2016-09-05 07:06:40', '2016-09-05 07:06:40', 0, 0, 0),
(2, 'services', 'services.php', '', '', '', 0, 0, '', '2016-09-05 07:37:56', '2016-09-05 07:37:56', 0, 0, 0),
(13, 'press', 'press.php', 'Press area', '', 'press,about us,ufficio stampa', 0, 0, '', '2016-09-05 16:45:19', '2016-09-05 16:45:19', 0, 0, 0),
(14, 'contatti', 'contatti.php', 'Contatti', 'Via Balicco nÂ° 61 23900, Lecco (LC);\r\nVia Vincenzo Monti nÂ° 8 20123, Milano (MI);\r\nVia San Camillo nÂ° 20 55042, Forte Dei Marmi (LU) ;', 'contatti,Via Balicco nÂ° 61 23900,Lecco (LC);,info@blancdesir.eu', 0, 0, '', '2016-09-05 16:47:04', '2016-09-06 07:23:02', 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
