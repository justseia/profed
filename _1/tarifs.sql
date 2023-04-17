-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: db
-- Время создания: Апр 12 2023 г., 09:50
-- Версия сервера: 8.0.32
-- Версия PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `profed`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tarifs`
--

CREATE TABLE `tarifs` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tarifs`
--

INSERT INTO `tarifs` (`id`, `name`, `cost`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Тариф 1', '10 000 тенге', '[{\"data\": [\"Обзор профессий\", \"Как выбрать своё русло?\", \"Жизнь после обучения\"], \"title\": [\"Вводный курс\", \"1 ознакомительное видео\", \"Отсутствует проверка домашних работ\"]}]', '2023-04-12 15:20:31', '2023-04-12 15:20:31');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tarifs`
--
ALTER TABLE `tarifs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tarifs`
--
ALTER TABLE `tarifs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
