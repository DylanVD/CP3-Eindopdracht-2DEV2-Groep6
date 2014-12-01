-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 01 dec 2014 om 17:04
-- Serverversie: 5.5.33
-- PHP-versie: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `whiteboard`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `whiteboard_items`
--

CREATE TABLE `whiteboard_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `items_postit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `items_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `items_video` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `items_extension` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `whiteboard_projects`
--

CREATE TABLE `whiteboard_projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `projects_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `whiteboard_users`
--

CREATE TABLE `whiteboard_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `users_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `users_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
