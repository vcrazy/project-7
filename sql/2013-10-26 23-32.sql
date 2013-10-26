CREATE TABLE IF NOT EXISTS `standing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bal` decimal(4,2) NOT NULL,
  `specialty_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `standing`
--

INSERT INTO `standing` (`id`, `bal`, `specialty_id`, `user_id`) VALUES
(3, 20.99, 1, 1),
(4, 21.00, 1, 2),
(5, 22.00, 1, 3),
(6, 23.50, 1, 4);
