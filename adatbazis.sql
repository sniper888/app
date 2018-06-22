-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1:3306
-- Létrehozás ideje: 2018. Jún 22. 11:23
-- Kiszolgáló verziója: 5.7.21
-- PHP verzió: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `app`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cim` varchar(255) NOT NULL,
  `rovidleiras` varchar(255) NOT NULL,
  `leiras` text NOT NULL,
  `kep` varchar(255) NOT NULL,
  `datum` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `blog`
--

INSERT INTO `blog` (`id`, `cim`, `rovidleiras`, `leiras`, `kep`, `datum`) VALUES
(1, 'This is a standard post', 'Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor aenean massa.', '', 'dummies/blog1.jpg', '2013-09-17'),
(2, 'Kiscica farka tarka', 'Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor aenean massa.', 'gsdsds', 'dummies/blog2.jpg', '2013-09-17'),
(3, 'Amazing video post format', 'Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.', '', 'dummies/blog2.jpg', '2013-09-17'),
(4, 'Slider post format with flexslider', 'Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.', '', 'dummies/work1.jpg', '2013-09-17'),
(6, 'sdfsdf', 'sdfsdf', 'wewetw', 'abstergo_industries_wallpaper.jpg', '2018-01-01');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `felhasznalok`
--

DROP TABLE IF EXISTS `felhasznalok`;
CREATE TABLE IF NOT EXISTS `felhasznalok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `jelszo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `felhasznalok`
--

INSERT INTO `felhasznalok` (`id`, `email`, `jelszo`) VALUES
(1, 'admin@mail.com', '$2y$10$1mVsV3Q7RCn6pY7X4MCzlOjS7pyfsPJSmM2TqoZAJgrEeYgtuXCem');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
