-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Време на генериране: 
-- Версия на сървъра: 5.6.11
-- Версия на PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- БД: `t3stovet_project7_1`
--

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--
DROP TABLE IF EXISTS users;

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `egn` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `father_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mob_number` char(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ocenka_diploma` decimal(3,2) NOT NULL,
  `ocenka_matura_BEL` decimal(3,2) NOT NULL,
  `ocenka_matura_izborna` decimal(3,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `egn` (`egn`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `egn`, `name`, `father_name`, `surname`, `mob_number`, `ocenka_diploma`, `ocenka_matura_BEL`, `ocenka_matura_izborna`) VALUES
(1, '9005039206', 'Димитър', 'Станилов', 'Петров', '0877877899', '4.50', '5.10', '4.40'),
(2, '9205049503', 'Ивайло', 'Димитров', 'Хаджиколев', '0899929206', '5.00', '5.20', '5.50'),
(3, '9106059205', 'Станимир', 'Георгиев', 'Кралев', '0876879234', '4.85', '5.22', '4.75'),
(4, '9309207873', 'Георги', 'Филипов', 'Николов', '0882336645', '3.99', '4.05', '3.00'),
(5, '9007135434', 'Никола', 'Петров', 'Стефанов', '0897345212', '4.75', '4.50', '5.00'),
(6, '9202263477', 'Яна', 'Петрова', 'Янева', '0899067543', '5.15', '5.50', '5.25'),
(7, '9297980506', 'Иван', 'Фотев', 'Стоянов', '0886763424', '5.33', '3.00', '6.00'),
(8, '9305052094', 'Стоянка', 'Петева', 'Кирчева', '0886423562', '6.00', '6.00', '5.70'),
(9, '9106022874', 'Иванела', 'Великова', 'Георгиева', '0893654789', '3.95', '5.00', '5.20'),
(11, '9103040304', 'Петьо ', 'Петков', 'Колев', '0893457463', '5.95', '5.50', '4.60'),
(12, '9004049302', 'Калоян', 'Николаев', 'Ганев', '0883398923', '5.25', '5.40', '5.00'),
(13, '8904058765', 'Юлиана', 'Добромирова', 'Миленова', '0883567465', '4.90', '4.90', '5.00'),
(14, '9404058767', 'Фани', 'Кирилова', 'Герджикова', '0886677667', '5.10', '5.25', '5.00'),
(15, '9203144356', 'Ивелина', 'Димитрова', 'Димитрова', '0885276344', '5.40', '4.50', '4.00'),
(16, '9009102087', 'Валери', 'Петров', 'Миланов', '0883267634', '4.75', '4.50', '4.40'),
(17, '8910208765', 'Калина', 'Крумова', 'Ганева', '0885432467', '5.50', '5.40', '5.20'),
(18, '8909254959', 'Ани', 'Цолова', 'Цолова', '0895554344', '4.60', '4.50', '5.70'),
(19, '9812234433', 'Велико', 'Георгиев', 'Георгиев', '0883667799', '5.10', '5.25', '5.40'),
(20, '8809092096', 'Росица', 'Радева', 'Венелинова', '0889288228', '5.10', '5.80', '5.20'),
(21, '8807072987', 'Катя', 'Иванова', 'Лалова', '0889887766', '5.25', '4.00', '4.30');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
