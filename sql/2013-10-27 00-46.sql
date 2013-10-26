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
-- Структура на таблица `students_exams`
--

CREATE TABLE IF NOT EXISTS `students_exams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `uni_subject_id` int(11) NOT NULL,
  `grade` decimal(3,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Схема на данните от таблица `students_exams`
--

INSERT INTO `students_exams` (`id`, `student_id`, `uni_subject_id`, `grade`) VALUES
(1, 1, 1, '4.20'),
(2, 1, 3, '5.00'),
(3, 2, 2, '3.75'),
(4, 3, 4, '5.25'),
(5, 5, 5, '4.75'),
(6, 6, 7, '5.90'),
(7, 7, 6, '6.00'),
(8, 8, 8, '5.75'),
(9, 9, 9, '6.00'),
(10, 11, 10, '4.90'),
(11, 12, 11, '5.50'),
(12, 13, 1, '4.50'),
(13, 13, 3, '5.00'),
(14, 14, 2, '3.00'),
(15, 15, 4, '5.25'),
(16, 16, 5, '5.00'),
(17, 16, 6, '4.50'),
(18, 17, 7, '5.40'),
(19, 17, 8, '4.20'),
(20, 18, 9, '5.90'),
(21, 19, 10, '5.10'),
(22, 19, 11, '5.00'),
(23, 20, 6, '4.40'),
(24, 21, 8, '5.50');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
