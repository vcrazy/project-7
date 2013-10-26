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
CREATE DATABASE IF NOT EXISTS `t3stovet_project7_1` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `t3stovet_project7_1`;

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
('ef73cf9272effa9576f6344736f77896', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36', 1382784846, ''),
('3a7a14be3cba874f4ed9d26b5a208ae2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36', 1382796189, ''),
('a7f8a46abcc68d97dc58112de4458b80', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36', 1382811664, ''),
('fd3223ee1cd69abc15fc8a979b95f85f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36', 1382818936, '');

-- --------------------------------------------------------

--
-- Структура на таблица `faculties`
--

CREATE TABLE IF NOT EXISTS `faculties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uni_id` int(11) NOT NULL,
  `name` varchar(320) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Схема на данните от таблица `faculties`
--

INSERT INTO `faculties` (`id`, `uni_id`, `name`) VALUES
(1, 1, 'Факултет математика и информатика'),
(2, 1, 'Философски факултет'),
(3, 2, ' Професионално направление Социология, антропология и науки за културата'),
(4, 2, ' Професионално направление Политически науки'),
(5, 2, ' Професионално направление Обществени комуникации и информационни науки'),
(6, 2, 'Професионално направление Право'),
(7, 2, ' Професионално направление Администрация и управление'),
(8, 2, 'Професионално направление Икономика'),
(15, 1, 'Физически факултет'),
(16, 1, 'Факултет по химия и фармация'),
(17, 1, 'Факултет по журналистика и масова комуникация'),
(18, 1, 'Стопански факултет'),
(19, 1, 'Медицински факултет'),
(20, 3, 'Факултет по Архитектура, Строителство и Геодезия');

-- --------------------------------------------------------

--
-- Структура на таблица `specialties`
--

CREATE TABLE IF NOT EXISTS `specialties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `faculty_id` int(11) NOT NULL,
  `name` varchar(320) COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=35 ;

--
-- Схема на данните от таблица `specialties`
--

INSERT INTO `specialties` (`id`, `faculty_id`, `name`, `info`) VALUES
(1, 1, 'Информационни системи', 'Студентите завършили образователно-квалификационна степен бакалавър по информационни системи могат да продължат обучението си в магистърска степен по всички специалности на факултета или успешно да се реализират като: специалисти по проектиране, разработка и внедряване на информационни системи; специалисти, поддържащи софтуера на изградени системи; специалисти, разработващи съвременни системи за управление на бази от данни, системи за вземане на решения, електронна търговия и др.; администратори на бази от данни; специалисти по маркетинг и мениджмънт на софтуерни и информационни продукти.'),
(2, 1, 'Компютърни науки', 'Студентите успешно завършили образователно-квалификационна степен бакалавър по компютърни науки могат да продължат обучението си в магистърска степен по всички специалности на факултета. Могат да работят като: университетски преподаватели; софтуерни специалисти в научни институти и всички видове организации и фирми, които използват модерни компютърни и информационни технологии; програмисти в софтуерни компании, правителствени организации, в телекомуникационни, инженерни, финансови, застрахователни фирми и научни институти.'),
(3, 1, 'Математика', 'Студентите завършили образователно-квалификационна степен бакалавър по математика могат да продължат обучението си в магистърска степен по всички специалности на факултета или успешно да се реализират навсякъде, където математиката се използва като инструмент за решаване на практически задачи. Основните области за работа са банки, застрахователни компании, в промишлеността, търговията, в държавната администрация, в научни институти и университети.'),
(4, 2, 'Европеистика', 'Специалност "Европеистика" е българският аналог на специалността European Studies, която през последните 30 години се утвърждава като една от най-престижните и перспективните в редица висши учебни заведения от цял свят. Създадената през учебната 1999/2000 г. интердисциплинарна специалност подготвя висококвалифицирани специалисти в областта на европейската интеграция в широк общообразователен и практически аспект.​'),
(5, 3, 'Социология', ' Основната цел на обучението в специалност "Социология" е да осигури на студентите бакалаври: първо, фундаментална теоретическа и методологическа подготовка за изследване на съвременните общества, техните социално-икономически трансформации в условията на глобализация и сложните взаимодействия между различните обществени сфери - икономика, политика, правна система, публична администрация,  граждански организации и движения и др.; второ, знания и умения за методите и техниките за осъществяване на емпирични изследвания в различни обществени сфери (социални, икономически, политически, маркетингови, рекламни, демоскопски проучвания и сондажи на общественото мнение).'),
(6, 4, 'Политология', 'Обучението е съобразено с учебните планове на водещи университети в Европа и света. Катедрата по политология в УНСС - първата в България, приета за член на Европейския консорциум за политически изследвания (Есекс, Великобритания), е определена от списание "European Journal of Political Research" (август 1999 г.) като една от "най-значимите катедри по политология в България и Югоизточна Европа". Само в УНСС студентите по политология получават солидна подготовка по основни икономически дисциплини, което ги прави уникални специалисти.'),
(7, 4, 'Международни отношения', 'Учебният план на специалността отразява 30-годишната традиция на преподаването и изследванията в УНСС в тази област и отчита опита на водещите университети в чужбина. Студентите получават задълбочена подготовка по история и теория на международните отношения и външната политика, методи и техники на анализ, външната политика на България и на основни участници в международното общуване, национална и международна сигурност, многостранна дипломация, преговори.'),
(8, 4, 'Европеистика', 'Специалността е ориентирана към подготовка на необходимите спе­циалисти на европейските приоритети във външните отношения на стра­ната. Структурирана в професионално направление "Политически науки", тя се отличава с конкурентните предимства и традиции на УНСС във висшето образование. В курса на следване студентите получават задълбочени теоретични и приложни знания и умения за адаптиране към процесите на европейския континент и използването им за просперитета на България.'),
(9, 5, 'Медии и журналистика', 'В бакалавърска степен на специалността студентите получават теоретични познания и частични практически умения в областта на общата теория на журналистиката, социалните и политическите науки, културологията и хуманитаристиката, медийните технологии и информатиката.'),
(10, 5, 'Медия икономика', 'Обучението по "Медия икономика" има за цел да разкрие специфичното приложение на икономическите закони и теории към медийните индустрии и фирми, като анализира как икономическите, финансови и регулаторни влияния формират динамиката на медийните пазари. Освен като икономически структури специалността разглежда медиите като сложна универсална икономико-политическа, социална и културна система.'),
(11, 6, 'Право', 'Обучението е 11 семестъра и завършва с полагането на три държавни изпита: по гражданскоправни, наказателноправни и публичноправни науки в съответствие с Наредбата за единните държавни изисквания за придобиване на висше образование по специалност "Право".\r\nЗавършилите получават диплома за образователна и квалификационна степен "магистър" и придобиват юридическа правоспособност след тримесечен стаж и полагане на държавен практико-теоретичен изпит.'),
(12, 7, 'Бизнес администрация', 'В тази специалност се подготвят висококвалифицирани специалисти по управление на местни и държавни структури и различни видове стопански бизнес. Специален акцент се поставя върху: моделирането и прогнозирането в управлението, бюджетното управление на предприятието, евристичните методи в управлението, управлението на разходите, управленските решения и риск, финансовите пазари и инструменти, управлението на качеството, деловите игри в управлението, бизнес комуникациите и др. '),
(13, 7, 'Публична администрация', 'Образователната цел на специалност "Публична администрация" е в съответствие със съвременните тенденции в развитието на образованието и социално-икономическата практика и е съобразена с квалификационните изисквания, заложени в програмите на водещи европейски университети. Характерно за обучението е много голямата интердисциплинарност, изразяваща се в изучаване на дисциплини по направленията: икономика, управление, политология, социология, психология, право, европейска интеграция и др.'),
(14, 8, 'Макроикономика', '  В специалност „Макроикономика“ се обучават и формират специалисти с висока степен на квалификация в областта на теоретичната и приложната микроикономика и макроикономика. Подготовката на студентите осигурява професионални знания и умения за целенасочена изследователска работа за функционирането на икономическите системи и за разработване и осъществяване на оптимални стопански решения на всички равнища в икономиката. '),
(15, 8, 'Икономика на човешките ресурси', 'Обучението е съобразено с практиката на водещи европейски университети, които предлагат подготовка в тази област, и включва придобиването на знания и умения за задълбочено разбиране на многобройните аспекти на труда: заетост и пазар на труда, индустриални отношения, управление на човешките ресурси, организационно поведение, социално осигуряване и др. Образователната цел е подготовката на висококвалифицирани специалисти с възможности за успешна кариера в публичната администрация и бизнеса.'),
(18, 15, 'Ядрена техника и ядрена енергетика', 'В тази специалност студентите придобиват фундаментални и приложни знания едновременно по ядрена техника и ядрена енергетика. Завършилите специалността получават квалификация "инженер - физик по ядрена техника и енергетика". Работят като специалисти по реакторен анализ (пресмятане на схеми за презареждане и неутронно физични характеристики на реактора).'),
(19, 15, 'Астрофизика, метеорология и геофизика', 'Завършващите специалността АСТРОФИЗИКА, МЕТЕОРОЛОГИЯ И ГЕОФИЗИКА са подготвени като теоретици и експериментатори в областта на астрономията, астрофизиката, метеорологията, океанографията и геофизиката. Те са пълноценно подготвени в своята професия, със солидна и широкопрофилна професионална подготовка, владеещи стопанските, организационните и социалните механизми в своята сфера на действие, способни сами да усъвършенствуват знанията и уменията си и постоянно да повишават своята квалификация.'),
(20, 15, 'Физика', 'В специалност ФИЗИКА изборните курсове са в областта на вълновата физика и нейното приложение, кондензираното състояние на материята, атомната физика, атомното ядро и елементарните частици, теоретичната и математична физика, лазерната физика, оптика, спектроскопия, фотонни технологии, физична електроника и други области.'),
(21, 15, 'Фотоника и лазерна физика', 'Специалистите, придобили степента “бакалавър” по специалност “Фотоника и лазерна физика”, ще бъдат подготвени да извършват научно-изследователска и приложна дейност във всички основни области на фотониката. Ще познават и прилагат на практика основните теоретични, изчислителни и експериментални методи и подходи в областта. Ще могат да използват специализиран софтуер за моделиране, инженерно проектиране, регистриране и обработка на данни в областта на фотониката.'),
(22, 16, 'Химия', 'Основна специалност на Химически факултет на Софийски Университет е специалност “Химия”. Приемът в специалността се осъществява след успешно положен кандидат-студентски изпит. Курсът на обучение е четиригодишен (за редовно обучение) или петгодишен (за задочно обучение) с придобиване на образователно-квалификационна степен “бакалавър” и възможност за продължаване на обучението в магистърски програми за придобиване на образователно-квалификационна степен “магистър”.'),
(23, 16, 'Компютърна химия', 'Спе­ци­ал­но­ст­та е на­со­че­на към ба­зисна­та подго­товка на студенти­те в об­ла­ст­та на хи­ми­я­та и свър­за­ни­те с нея ас­пекти на ко­мпютърни­те на­уки. Спе­ци­алисти­те с квали­фи­ка­ци­он­на ха­ракте­ристи­ка „ба­ка­лавър по компютърна хи­мия“ ще бъ­дат подготве­ни да извъ­ршват изсле­до­ва­те­лс­ка, техно­ло­гично-внед­ри­те­лс­ка, анали­тична и произ­во­дстве­на дейност глав­но в хи­ми­я­та, фарма­цевти­ка­та, би­отехно­ло­ги­ите, на­но­техно­ло­ги­ите, информатиката и еколо­ги­я­та.'),
(24, 16, 'Ядрена химия', 'Целта на тази образователно-квалификационната степен е подготовката на квалифицирани специалисти химици със задълбочени специфични познания и умения в областта на радиоактивността и ядрената химия, способни да се реализират професионално в страната и в чужбина и да продължат образованието си.'),
(25, 16, 'Химия и информатика', 'В специал­ност­та се подго­твят учите­ли по хи­мия и ин­форма­ти­ка (и двете ка­то първа специал­ност). Срокът на об­учение е 4-го­ди­шен за ре­довно об­учение. Придо­би­ва се об­ра­зо­ва­телно-квалификационната степен „ба­ка­лавър - учител по хи­мия и информа­ти­ка“. Спе­циал­ност­та е съоб­ра­зе­на с но­ви­те изис­квания на об­учение в сред­но­то учили­ще и необхо­ди­мост­та от ви­со­ко квали­фи­ци­ра­ни кадри в област­та на ин­форма­ти­ка­та. '),
(26, 17, 'Журналистика', 'При бакалавърската степен обучението се провежда по учебна програма, в която учебните дисциплини са групирани в три модула – задължителни, избираеми (с лятна практика по избрания медиапрофил) и факултативни дисциплини. Студентите се обучават в три медийни профила - печат и агенционна журналистика, радио и телевизия - като специализацията става по избор след завършен втори семестър, и три тематични профила - икономическа и вътрешнополитическа журналистика, международна журналистика и културна журналистика - за четвърти семестър, изборът се извършва след завършен трети семестър. '),
(27, 17, 'Връзки с обществеността', 'Специалността Връзки с обществеността предлага обучение в една нова за нашата страна професия – пъблик рилейшънс, която се ползва с престиж в съвременния свят. Тя използва и развива богатството от социални, социалнопсихологически и други знания, необходими за оптималното поддържане на взаимно разбиране както между членовете на една организация или колектив (институт, фирма, правителствена служба, армейско или полицейско поделение, фондация, бизнес организация, учебно заведение), така и между обществени формации и публиката, с която те имат взаимоотношения. '),
(28, 17, 'Книгоиздаване', 'Студентите, завършващи образователно-квалификационната степен „бакалавър" в специалността “Книгоиздаване”, получават базисни знания в областта на социалните науки, филологиите, медиите и масовата комуникация, а също така задълбочени познания и умения в областта на книгоиздаването, на цялостния редакционен и комуникативен процес.'),
(29, 18, 'Икономика', 'Специалност Икономика подготвя кадри със солидна фундаментална подготовка за нуждите на стопанската практика, публичната администрация и третия сектор.\r\n\r\nЗавършилите с квалификация бакалавър по икономика могат успешно да работят в бизнес-организации, държавни институции, организации с нестопанска цел, да преподават в средните училища и др. Те могат да продължат образованието си в магистърски програми.'),
(30, 18, 'Стопанско управление\r\n', 'Завършилите квалификация бакалавър по стопанско управление могат успешно да работят в бизнес-организации, държавни институции на местно равнище, в държавната администрация, в организации с нестопанска цел, да преподават в средните училища и др. Те могат да продължат образованието си в магистърски програми.'),
(31, 19, 'Медицина', ''),
(32, 19, 'Медицина - английски език', 'The program aims at offering theoretical knowledge and practical skills through highly qualified teaching combined with opportunity to exercise it in practice in the most modern preclinical and clinical medical complexes in Bulgaria.\r\n\r\nThe training course in Medicine is conducted on the basis of a curriculum which is made according to the Unified state requirements for the master’s degree in the specialty ‘Doctor of Medicine’’ and the qualification of a General Practitioner.'),
(33, 20, 'Архитектура', 'Образованието по “Архитектура”, провеждано в Архитектурния факултет на УАСГ, отговаря на световните и европейски стандарти в тези области, между които Хартата на архитектурното образование на Международния съюз на архитектите и ЮНЕСКО и Директиви 2005/36/ЕС и 85/384/ЕЕС на Европейския парламент и Европейската Комисия за взаимно признаване на дипломи, свидетелства и други документи в областта на архитектурата. '),
(34, 20, 'Строителство на сгради и съоръжения', 'пециалността Строителство на сгради и съоръжения (с предишно наименование Промишлено и гражданско строителство) е престижна и широкопрофилна, като подготвя абсолвентите си за богат спектър от дейности в областта на строителството. Завършилите строителни инженери получават дипломи за висше образование на образователно-квалификационна степен “магистър” и могат да се реализират професионално в строителни фирми, проектно-конструкторски бюра, фирми за производство на строителни изделия, инвестиционни звена, в публичната администрация и в научно-изследо¬вателски звена. ');

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
-- Схема на данните от таблица `students_exams`
--

INSERT INTO `students_exams` (`id`, `student_id`, `uni_subject_id`, `grade`) VALUES
(1, 1, 1, 0),
(2, 1, 3, 0);

-- --------------------------------------------------------

--
-- Структура на таблица `student_wishlist`
--

CREATE TABLE IF NOT EXISTS `student_wishlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `specialty_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `egn` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `father_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mob_number` char(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ocenka_diploma` decimal(3,2) NOT NULL,
  `ocenka_matura` decimal(3,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `egn` (`egn`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `egn`, `name`, `father_name`, `surname`, `mob_number`, `ocenka_diploma`, `ocenka_matura`) VALUES
(1, '9005039206', 'Гергана ', 'Станилова', 'Петрова', '0877877899', '4.50', '5.10'),
(2, '9205049503', 'Ивайло', 'Димитров', 'Хаджиколев', '0899929206', '5.00', '5.20'),
(3, '9106059205', 'Станимир', 'Георгиев', 'Кралев', '0876879234', '4.85', '5.22'),
(4, '9309207873', 'Георги', 'Филипов', 'Николов', '0882336645', '3.99', '4.05'),
(5, '9007135434', 'Никола', 'Петров', 'Стефанов', '0897345212', '4.75', '4.50'),
(6, '9202263477', 'Яна', 'Петрова', 'Янева', '0899067543', '5.15', '5.50'),
(7, '9297980506', 'Иван', 'Фотев', 'Стоянов', '0886763424', '5.33', '3.00'),
(8, '9305052094', 'Стоянка', 'Петева', 'Кирчева', '0886423562', '6.00', '6.00'),
(9, '9106022874', 'Иванела', 'Великова', 'Георгиева', '0893654789', '3.95', '5.00'),
(11, '9103040304', 'Петьо ', 'Петков', 'Колев', '0893457463', '5.95', '5.50'),
(12, '9004049302', 'Калоян', 'Николаев', 'Ганев', '0883398923', '5.25', '5.40'),
(13, '8904058765', 'Юлиана', 'Добромирова', 'Миленова', '0883567465', '4.90', '4.90'),
(14, '9404058767', 'Джани', 'Кирилова', 'Герджикова', '0886677667', '5.10', '5.25'),
(15, '9203144356', 'Ивелина', 'Димитрова', 'Димитрова', '0885276344', '5.40', '4.50'),
(16, '9009102087', 'Валери', 'Петров', 'Миланов', '0883267634', '4.75', '4.50'),
(17, '8910208765', 'Калина', 'Крумова', 'Ганева', '0885432467', '5.50', '5.40'),
(18, '8909254959', 'Ани', 'Цолова', 'Цолова', '0895554344', '4.60', '4.50'),
(19, '9812234433', 'Велико', 'Георгиев', 'Георгиев', '0883667799', '5.10', '5.25'),
(20, '8809092096', 'Росица', 'Радева', 'Венелинова', '0889288228', '5.10', '5.80'),
(21, '8807072987', 'Катя', 'Иванова', 'Лалова', '0889887766', '5.25', '4.00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
