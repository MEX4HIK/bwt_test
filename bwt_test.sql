-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.6.22 - MySQL Community Server (GPL)
-- ОС Сервера:                   Win64
-- HeidiSQL Версия:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры базы данных users
CREATE DATABASE IF NOT EXISTS `users` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `users`;


-- Дамп структуры для таблица users.feedback
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `message` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Дамп данных таблицы users.feedback: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` (`id`, `name`, `email`, `message`) VALUES
	(1, 'Ð¡ÐµÑ€Ð³ÐµÐ¹', 'mexahik3333@gmail.com', 'sdklngjal adgh dhgajh sdgkashdgjkl adh'),
	(2, 'Ð¡ÐµÑ€Ð³ÐµÐ¹', 'sorpok3232@mail.ru', 'asgasgsdagsdg asdg asg asdg a'),
	(3, 'Ð’Ð°ÑÑ', 'mexahik3333@gma', 'Ð°Ñ‹Ð²Ñ„Ð° Ñ„Ð°Ñ„ '),
	(4, 'sadasd', 'mexahik3333@gmail.com', 'asfasf af sdf asfd '),
	(5, 'Petya', 'sorpok3232@mail.ru', 'All is fine');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;


-- Дамп структуры для таблица users.reg
CREATE TABLE IF NOT EXISTS `reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL DEFAULT '0',
  `login` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) DEFAULT NULL,
  `sex` varchar(50) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- Дамп данных таблицы users.reg: ~17 rows (приблизительно)
/*!40000 ALTER TABLE `reg` DISABLE KEYS */;
INSERT INTO `reg` (`id`, `name`, `last_name`, `password`, `login`, `email`, `sex`, `date`) VALUES
	(1, 'Sergey', 'Nikonenko', '111', 'mex', 'mexahik3333@gmail.com', NULL, NULL);
/*!40000 ALTER TABLE `reg` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
