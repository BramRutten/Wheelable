-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 18 mei 2014 om 15:29
-- Serverversie: 5.6.16
-- PHP-versie: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `wheelable`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_pointers`
--

CREATE TABLE IF NOT EXISTS `tbl_pointers` (
  `pointer_id` int(250) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `user_id` int(250) NOT NULL,
  `type` set('good','bad','toilet') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_request`
--

CREATE TABLE IF NOT EXISTS `tbl_request` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `event` int(11) NOT NULL,
  `pointer_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_start` int(11) NOT NULL,
  `time_end` int(11) NOT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `type` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `image` text NOT NULL,
  `longitude` float NOT NULL,
  `latitude` float NOT NULL,
  `range` int(11) NOT NULL,
  `hash` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `name`, `type`, `email`, `password`, `age`, `sex`, `image`, `longitude`, `latitude`, `range`, `hash`) VALUES
(16, 'Bram', '0', 'rutten_bram@hotmail.com', '3bbe3ace361712f50c4230a118126d2b13d9bcff', 0, 0, '', 0, 0, 0, '0'),
(18, 'Yannick', '1', 'coolboy@sexy.beast', 'db0629a49c27a971d185ff58bf3b6b5f2b40a925', 0, 0, '', 0, 0, 0, '360d63502843e41c52528e2fbb7d0c3249d26904'),
(19, 'Franky', '0', 'franky@sexy.beast', 'db0629a49c27a971d185ff58bf3b6b5f2b40a925', 0, 0, '', 0, 0, 0, '11fcc426ff44f814e0f13abdc101dcd2c7f4f82e');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
