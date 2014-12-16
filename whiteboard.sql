-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 16 dec 2014 om 21:29
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
  `xpositie` int(11) NOT NULL,
  `ypositie` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Gegevens worden uitgevoerd voor tabel `whiteboard_items`
--

INSERT INTO `whiteboard_items` (`id`, `items_postit`, `items_image`, `items_video`, `items_extension`, `xpositie`, `ypositie`, `project_id`) VALUES
(9, '', 'check', '', 'png', 0, 0, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `whiteboard_projects`
--

CREATE TABLE `whiteboard_projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Gegevens worden uitgevoerd voor tabel `whiteboard_projects`
--

INSERT INTO `whiteboard_projects` (`id`, `user_id`, `title`) VALUES
(8, 1, 'blabla');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `whiteboard_users`
--

CREATE TABLE `whiteboard_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Gegevens worden uitgevoerd voor tabel `whiteboard_users`
--

INSERT INTO `whiteboard_users` (`id`, `username`, `email`, `password`, `lastname`, `firstname`) VALUES
(1, 'lara', 'laralu1@hotmail.com', '$2y$12$9E6QIkpRrXk4VQLoVyVcUevfCRx8JwRBx2tuUMrHabdsookRV6qv.', 'Lu', 'Lara');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
