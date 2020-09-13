-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Сен 13 2020 г., 21:47
-- Версия сервера: 5.6.39-83.1
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sedushkin_php2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE IF NOT EXISTS `basket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `good_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `amount` smallint(6) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `name` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `src` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `src_small` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `src`, `src_small`) VALUES
(1, 'Первая картинка', '../public/gallery/1.jpg', '../public/gallery/small/1.jpg'),
(2, 'Вторая картинка', '../public/gallery/2.jpg', '../public/gallery/small/2.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `ext_category` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '10',
  `name` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `text` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_big_src` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_small_src` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `ext_category`, `status`, `name`, `price`, `text`, `img_big_src`, `img_small_src`) VALUES
(1, 1, 10, 'product 1', 1010, 'This is a product', '../public/img/products/img.1', '../public/img/products/small/img.1'),
(2, 1, 10, 'product 2', 1010, 'This is a product 2', '../public/img/products/img.1', '../public/img/products/small/img.1'),
(3, 1, 10, 'product 3', 1010, 'This is a product 3', '../public/img/products/img.1', '../public/img/products/small/img.1'),
(4, 1, 10, 'product 4', 1010, 'This is a product 4', '../public/img/products/img.1', '../public/img/products/small/img.1'),
(5, 1, 10, 'product 5', 1010, 'This is a product 5', '../public/img/products/img.1', '../public/img/products/small/img.1'),
(6, 1, 10, 'product 6', 1010, 'This is a product 6', '../public/img/products/img.1', '../public/img/products/small/img.1'),
(7, 1, 10, 'product 7', 1010, 'This is a product 7', '../public/img/products/img.1', '../public/img/products/small/img.1'),
(8, 1, 10, 'product 8', 1010, 'This is a product 8', '../public/img/products/img.1', '../public/img/products/small/img.1'),
(9, 1, 10, 'product 9', 1010, 'This is a product 9', '../public/img/products/img.1', '../public/img/products/small/img.1'),
(10, 1, 10, 'product 10', 1010, 'This is a product 10', '../public/img/products/img.1', '../public/img/products/small/img.1'),
(11, 1, 10, 'product 11', 1010, 'This is a product 11', '../public/img/products/img.1', '../public/img/products/small/img.1'),
(12, 1, 10, 'product 12', 1010, 'This is a product 12', '../public/img/products/img.1', '../public/img/products/small/img.1'),
(13, 1, 10, 'product 13', 1010, 'This is a product 13', '../public/img/products/img.1', '../public/img/products/small/img.1'),
(14, 1, 10, 'product 14', 1010, 'This is a product 14', '../public/img/products/img.1', '../public/img/products/small/img.1'),
(15, 1, 10, 'product 15', 1010, 'This is a product 15', '../public/img/products/img.1', '../public/img/products/small/img.1'),
(16, 1, 10, 'product 16', 1010, 'This is a product 16', '../public/img/products/img.1', '../public/img/products/small/img.1'),
(17, 1, 10, 'product 17', 1010, 'This is a product 17', '../public/img/products/img.1', '../public/img/products/small/img.1'),
(18, 1, 10, 'product 18', 1010, 'This is a product 18', '../public/img/products/img.1', '../public/img/products/small/img.1'),
(19, 1, 10, 'product 19', 1010, 'This is a product 19', '../public/img/products/img.1', '../public/img/products/small/img.1'),
(20, 1, 10, 'product 20', 1010, 'This is a product 20', '../public/img/products/img.1', '../public/img/products/small/img.1'),
(21, 1, 10, 'product 21', 1010, 'This is a product 21', '../public/img/products/img.1', '../public/img/products/small/img.1'),
(22, 1, 10, 'product 22', 1010, 'This is a product 22', '../public/img/products/img.1', '../public/img/products/small/img.1'),
(23, 1, 10, 'product 23', 1010, 'This is a product 23', '../public/img/products/img.1', '../public/img/products/small/img.1'),
(24, 1, 10, 'product 24', 1010, 'This is a product 24', '../public/img/products/img.1', '../public/img/products/small/img.1'),
(25, 1, 10, 'product 25', 1010, 'This is a product 25', '../public/img/products/img.1', '../public/img/products/small/img.1'),
(26, 1, 10, 'product 26', 1010, 'This is a product 26', '../public/img/products/img.1', '../public/img/products/small/img.1');

-- --------------------------------------------------------

--
-- Структура таблицы `product_category`
--

CREATE TABLE IF NOT EXISTS `product_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_subcategory` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product_category`
--

INSERT INTO `product_category` (`id`, `name`, `is_subcategory`) VALUES
(1, 'Products Category 1', 0),
(2, 'Products Category 2 is subcategory 1', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_group` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e-mail` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_action` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `user_group`, `name`, `e-mail`, `login`, `password`, `last_action`) VALUES
(1, '1', 'bigAdmin', 'info@misite.ru', 'admin', 'b0baee9d279d34fa1dfd71aadb908c3f', '2020-09-03 04:00:00'),
(2, '3', 'Покупатель 1', 'info2@misite.ru', '', '', '0000-00-00 00:00:00'),
(3, '', 'номер 1 ', '1@mail.ru', '1@mail.ru', 'b0baee9d279d34fa1dfd71aadb908c3f', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `user_groups`
--

CREATE TABLE IF NOT EXISTS `user_groups` (
  `user_group_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user_groups`
--

INSERT INTO `user_groups` (`user_group_id`, `name`) VALUES
(1, 'Администратор'),
(2, 'Менеджер'),
(3, 'Покупатель'),
(4, 'Консультант');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
