-- phpMyAdmin SQL Dump
-- version 3.3.7
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июл 10 2017 г., 16:47
-- Версия сервера: 5.5.38
-- Версия PHP: 5.4.45-0+deb7u1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `www_kair`
--

-- --------------------------------------------------------

--
-- Структура таблицы `andry_key`
--

CREATE TABLE IF NOT EXISTS `andry_key` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) NOT NULL,
  `activate` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Дамп данных таблицы `andry_key`
--

INSERT INTO `andry_key` (`id`, `key`, `activate`) VALUES
(1, '12345678', 1),
(2, 'qwerty', 1),
(3, 'asdfgh', 1),
(4, 'asdfgh123', 0),
(5, 'asdfgh123', 0),
(6, 'asdfgh123', 0),
(7, 'asdfgh123', 0),
(8, 'asdfgh123', 1),
(9, 'asdfgh123', 1),
(10, 'asdfgh123', 1),
(11, 'asdfgh123', 1),
(12, '13572468', 1),
(13, '13572468', 1),
(14, '13572468', 1),
(15, '13572468', 0),
(16, '13572468', 0);
