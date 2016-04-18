-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 11 2016 г., 10:11
-- Версия сервера: 5.5.38-log
-- Версия PHP: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `mybase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `eMail` varchar(30) NOT NULL,
  `adress` varchar(50) NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `clientBuscet`
--

CREATE TABLE IF NOT EXISTS `clientBuscet` (
  `id_buscet` int(10) NOT NULL AUTO_INCREMENT,
  `kol` int(10) NOT NULL,
  `sum` int(10) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  PRIMARY KEY (`id_buscet`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id_order` int(10) NOT NULL AUTO_INCREMENT,
  `jsonIdProduct` text NOT NULL,
  `dateOrder` date NOT NULL,
  `payMethod` varchar(10) NOT NULL,
  `schet` int(10) NOT NULL,
  `id_client` int(11) NOT NULL,
  PRIMARY KEY (`id_order`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
  `id_pic` int(10) NOT NULL AUTO_INCREMENT,
  `picture` text NOT NULL,
  `id_product` int(11) NOT NULL,
  PRIMARY KEY (`id_pic`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id_product` int(10) NOT NULL AUTO_INCREMENT,
  `naimProduct` varchar(40) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `imagePath` text NOT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id_product`, `naimProduct`, `description`, `price`, `imagePath`) VALUES
(1, 'Медведь', 'Равным образом сложившаяся структура организации в значительной степени обуславливает создание форм развития. Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий требуют от нас анализа позиций', 100028, ''),
(2, 'Слон', 'занимаемых участниками в отношении поставленных задач. Таким образом реализация намеченных плановых заданий представляет собой интересный эксперимент проверки системы обучения кадров,', 100000, ''),
(3, 'Заяц', 'Товарищи! укрепление и развитие структуры обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствует насущным потребностям. Задача организации, в особенности же дальнейшее развитие различных форм деятельности ', 222222, ''),
(4, 'Заяц2', 'Таким образом рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании соответствующий условий активизации. Таким образом постоянный количественный рост и сфера нашей активности', 6666666, '');

-- --------------------------------------------------------

--
-- Структура таблицы `productCategory`
--

CREATE TABLE IF NOT EXISTS `productCategory` (
  `id_category` int(10) NOT NULL AUTO_INCREMENT,
  `category` varchar(20) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `productCategory`
--

INSERT INTO `productCategory` (`id_category`, `category`) VALUES
(1, 'Мальчикам'),
(3, 'Девочкам'),
(4, 'Малышам');

-- --------------------------------------------------------

--
-- Структура таблицы `productsCategory`
--

CREATE TABLE IF NOT EXISTS `productsCategory` (
  `id_cat` int(10) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `id_category` int(10) NOT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
