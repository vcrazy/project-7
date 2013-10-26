-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Време на генериране: 
-- Версия на сървъра: 5.5.27
-- Версия на PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- БД: `t3stovet_project7`
--

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
-- Ссхема на данните от таблица `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('1832b214d70c0deb58060ef631e4ee97', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36', 1382791399, ''),
('3ba901fa0eee57464478a48e1ef1c23f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36', 1382799041, 'a:1:{i:0;a:8:{s:2:"id";s:1:"1";s:3:"egn";s:9:"901206110";s:4:"name";s:6:"Adrian";s:11:"father_name";s:8:"Nikolaev";s:7:"surname";s:8:"Kateliev";s:10:"mob_number";s:10:"0883417249";s:14:"ocenka_diploma";s:4:"3.23";s:13:"ocenka_matura";s:1:"6";}}');

-- --------------------------------------------------------

--
-- Структура на таблица `students_exams`
--

CREATE TABLE IF NOT EXISTS `students_exams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `uni_subject_id` int(11) NOT NULL,
  `grade` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Ссхема на данните от таблица `students_exams`
--

INSERT INTO `students_exams` (`id`, `student_id`, `uni_subject_id`, `grade`) VALUES
(1, 1, 1, 0),
(2, 1, 3, 0);

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
-- Ссхема на данните от таблица `subjects`
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
-- Ссхема на данните от таблица `universities`
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
-- Ссхема на данните от таблица `university_subject`
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
  `ocenka_diploma` double NOT NULL,
  `ocenka_matura` double NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `egn` (`egn`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Ссхема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `egn`, `name`, `father_name`, `surname`, `mob_number`, `ocenka_diploma`, `ocenka_matura`) VALUES
(1, 901206110, 'Adrian', 'Nikolaev', 'Kateliev', '0883417249', 3.23, 6);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
