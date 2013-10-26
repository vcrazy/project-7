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

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `egn` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `father_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mob_number` char(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ocenka_diploma` decimal(3,2) NOT NULL,
  `ocenka_matura` decimal(3,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `egn` (`egn`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `egn`, `name`, `father_name`, `surname`, `mob_number`, `ocenka_diploma`, `ocenka_matura`) VALUES
(1, '9005039206', 'Гергана ', 'Станилова', 'Петрова', '0877877899', '4.50', '5.10'),
(2, '9205049503', 'Ивайло', 'Димитров', 'Хаджиколев', '0899929206', '5.00', '5.20'),
(3, '9106059205', 'Станимир', 'Георгиев', 'Кралев', '0876879234', '4.85', '5.22'),
(4, '9309207873', 'Георги', 'Филипов', 'Николов', '0882336645', '3.99', '4.05'),
(5, 'Никола', 'Никола', 'Петров', 'Стефанов', '0897345212', '4.75', '4.50'),
(6, '9202263477', 'Яна', 'Петрова', 'Янева', '0899067543', '5.15', '5.50');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
