-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 23, 2019 at 10:20 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `widget`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`) VALUES
(1, 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu mi ligula. Fusce vehicula ipsum eget porta sodales. Aenean congue sit amet urna ac scelerisque. In rhoncus efficitur metus a eleifend. Sed a massa malesuada, tincidunt mi ut, auctor tortor. Nam molestie ipsum diam, at iaculis sapien viverra ac. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam lectus ex, dignissim at libero condimentum, consectetur imperdiet sem. Mauris efficitur diam sit amet sapien sodales tincidunt. Cras massa dui, vulputate scelerisque euismod quis, porttitor quis nunc. Aliquam consectetur elit ac lorem sodales ornare. Donec a lacinia lectus. '),
(2, 'Nunc sollicitudin maximus turpis eu fringilla', 'Nunc sollicitudin maximus turpis eu fringilla. Nunc lacinia tortor sit amet volutpat gravida. Ut interdum velit sit amet placerat tempor. Cras dictum turpis tellus, id posuere turpis dignissim id. Phasellus ac diam at diam tempor lacinia id sit amet nulla. Donec felis nulla, lacinia quis porttitor et, egestas sit amet lectus. Aenean pellentesque ligula vitae lorem suscipit convallis. Nullam non nisl vulputate, tincidunt diam quis, egestas mi. Quisque cursus sagittis risus, id tincidunt lacus facilisis eget. Praesent pharetra fringilla faucibus. Maecenas auctor est vel ex feugiat, ac porta odio tincidunt. Sed mattis felis a odio feugiat ullamcorper. Vestibulum ac tincidunt mi, quis porta metus. Donec vitae libero dui. '),
(3, 'Quisque et nisl at sapien ullamcorper auctor feugiat quis felis', 'Quisque et nisl at sapien ullamcorper auctor feugiat quis felis. Pellentesque tempus varius ipsum, sed fringilla mauris blandit quis. Nam non libero tortor. Sed elit diam, convallis sed tellus in, viverra lobortis erat. Aenean lobortis, quam ut tincidunt ultrices, nulla dolor volutpat est, vitae pretium metus dui quis massa. Proin ut tempor lorem. Nunc massa purus, commodo vitae scelerisque at, gravida laoreet dui. Fusce ut ante at erat aliquet eleifend eu sit amet tortor. Aenean mollis pulvinar massa, eget feugiat orci dictum et. Ut et maximus turpis, sit amet ultricies orci. Vestibulum finibus nulla sit amet odio auctor, sed aliquet ante viverra. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec interdum libero ut tellus gravida, at faucibus tellus bibendum. Maecenas quis elementum tellus. ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
