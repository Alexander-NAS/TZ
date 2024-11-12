-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: MySQL-8.0
-- Время создания: Ноя 12 2024 г., 17:19
-- Версия сервера: 8.0.35
-- Версия PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `some_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `hashpassword` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `hashpassword`) VALUES
(1, 'QQQ', 'Q@mail.ru', '12345678', '$2y$10$uGBbRG8YUsxJK3VCPCUbH.YjH8p.5TGZfcn8mhAcmgm8bZTrfSsoC'),
(2, 'Test Пароля', 'testUser@email.ru', 'wwww4444', '$2y$10$bTqlcOOp5zDavu0lToU3ieeIv.l776w69KccHHD97aaxFT7QYijXG'),
(3, 'Кодировка', 'testUser1@email.ru', 'qqqqeeee', '$2y$10$u8V/GJG2NnIIvoPg1wWSJueEzKmqAR03hlhRLkDENipjtsasHAIrS'),
(4, 'Без Дубликатов Логинов', 'WWW@mail.ru', 'r3r3r3r3', '$2y$10$tknPntVJAXn7UPeT60piMO0pJbXmjXpxsUcUbMASY9V2I5dU.bS/y'),
(5, 'test', 'D@mail.ru', '11111111', '$2y$10$F1YHbQjnXoI.tU58sAFdp.GViC.eWc6xEBzBovlNaC6g5bI6rLWxS'),
(6, 't1', 'test@email.ru', '87654321', '$2y$10$PHRKU2j/CTmg6p3ehFDklewVTKrgErSRNe0C7fC/tFS.YdRfMlDmG');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
