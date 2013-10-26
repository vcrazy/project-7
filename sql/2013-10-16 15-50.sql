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
-- БД: `t3stovet_project7`
--
CREATE DATABASE IF NOT EXISTS `t3stovet_project7` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `t3stovet_project7`;

-- --------------------------------------------------------

--
-- Структура на таблица `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Схема на данните от таблица `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('1832b214d70c0deb58060ef631e4ee97', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36', 1382791399, ''),
('ef73cf9272effa9576f6344736f77896', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36', 1382784846, '');

-- --------------------------------------------------------

--
-- Структура на таблица `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(320) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Схема на данните от таблица `subjects`
--

INSERT INTO `subjects` (`id`, `name`) VALUES
(1, 'Математика 1'),
(2, 'Български език'),
(3, 'Математика 2'),
(4, 'Биология');

-- --------------------------------------------------------

--
-- Структура на таблица `universities`
--

CREATE TABLE IF NOT EXISTS `universities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(320) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Схема на данните от таблица `universities`
--

INSERT INTO `universities` (`id`, `name`) VALUES
(1, 'Софийски университет "Св. Климент Охридски"'),
(2, 'Университет за национално и световно стопанство'),
(3, 'Университет по архитектура, строителство и геодезия');

-- --------------------------------------------------------

--
-- Структура на таблица `university_subject`
--

CREATE TABLE IF NOT EXISTS `university_subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uni_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `dateof` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Схема на данните от таблица `university_subject`
--

INSERT INTO `university_subject` (`id`, `uni_id`, `subject_id`, `dateof`) VALUES
(1, 1, 1, '2013-10-16 04:00:00'),
(2, 1, 3, '2013-10-18 05:00:00'),
(3, 2, 1, '2013-11-06 06:00:00');

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `egn` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `father_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mob_number` char(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ocenka_diploma` int(11) NOT NULL,
  `ocenka_matura` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `egn` (`egn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
