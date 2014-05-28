-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Май 29 2014 г., 01:54
-- Версия сервера: 5.5.37-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `yii`
--

-- --------------------------------------------------------

--
-- Структура таблицы `inputs`
--

CREATE TABLE IF NOT EXISTS `inputs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `projectname` varchar(255) NOT NULL,
  `call` varchar(255) NOT NULL,
  `sll` varchar(255) NOT NULL,
  `sspn` varchar(255) NOT NULL,
  `z` varchar(255) NOT NULL,
  `results` varchar(255) NOT NULL,
  `step` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `inputs`
--

INSERT INTO `inputs` (`id`, `projectname`, `call`, `sll`, `sspn`, `z`, `results`, `step`) VALUES
(1, '', '0', '', '', '', '', ''),
(2, '', '0', '', '', '', '', ''),
(3, '', '0', '', '', '', '', ''),
(4, '', '', '', '', '', '', ''),
(5, '', 'adsa', '', '', '', '', ''),
(6, '', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
