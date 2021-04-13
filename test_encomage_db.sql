-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 12 2021 г., 13:43
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test_encomage_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `First Name` varchar(20) NOT NULL,
  `Last Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Create Data` date NOT NULL,
  `Update Data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`ID`, `First Name`, `Last Name`, `Email`, `Create Data`, `Update Data`) VALUES
(1, 'ilyinnn', 'sergeyvicha', 'ilyin-ilya@mail.ru', '2021-04-08', '2021-04-08'),
(2, 'grecova', 'sergeevna', 'olga@mail.ru', '2021-04-01', '2021-04-02'),
(3, 'cherevan', 'olegovich', 'cherevan@mail.ru', '2021-03-03', '2021-04-01'),
(4, 'cherevan215', 'olegovich', 'cherevan2@mail.ru', '2021-03-03', '2021-04-01'),
(5, 'test', 'test2', 'dasda@dasdas', '2021-04-01', '2021-04-02'),
(6, 'test2', 'test2', 'dasda@dasdas', '2021-04-01', '2021-04-02'),
(7, 'dasadas', 'dasdasd', 'dasdasd@dasdasdasd', '2021-04-01', '2021-04-02'),
(8, 'grisha', 'tyrinok', 'rter@dsfsd', '2021-04-03', '2021-04-04'),
(9, 'stepa', 'mihaylov', 'tyr@dasda', '2021-04-03', '2021-04-03'),
(10, 'misha', 'mihaylov', 'miha@mail.ru', '2021-04-12', '2021-04-12'),
(11, 'misha', 'kryg', 'mihakryg@mail.ru', '2021-04-12', '2021-04-12'),
(12, 'mishka', 'dasdas', 'dasdsa@dasda', '2021-04-12', '2021-04-12');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
