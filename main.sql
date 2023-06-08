-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 08 2023 г., 22:18
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `main`
--

-- --------------------------------------------------------

--
-- Структура таблицы `fucture`
--

CREATE TABLE `fucture` (
  `id` int NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_reg` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `img`
--

CREATE TABLE `img` (
  `id` int NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `path` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `cost` int NOT NULL,
  `post` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `img`
--

INSERT INTO `img` (`id`, `name`, `path`, `description`, `cost`, `post`) VALUES
(1, 'Юничелу', 'fvcus01j93mpmmh8i8oyf7bnsnbo5ooo.jpg', 'Обувная фирма «Юничел» - сегодня это: - самое крупное предприятие в России по выпуску кожаной обуви. Выпуск мужской, женской и детской обуви в 2010 году ', 100000000, 'Челябинск'),
(2, 'Краснооктяборьский завод', '45-2021118-5306-be7f3d.dh718.jpg', '«Красный Октябрь» — металлургический завод в городе Волгоград, производитель металлопроката специальных марок стали в России. Владеет около 30 процентов российского рынка нержавеющих сталей. Наименование юридического лица — акционерное общество «Корпорация „Красный октябрь“» (сокращённо — АО «Корпорация „Красный октябрь“»)', 10000000, 'Волгоград'),
(3, 'Бийская льняная компания ', 'загружено.jfif', 'Бийская Льняная Компания образована в 1910 году и начала свою работу под названием ткацко-прядильная фабрика торгового дома братьев Бородиных. Производили в то время льняную мешкотару, сумки, вещевые мешки, палатки. В 1945 году начали выпускать льняной пожарный рукав, был расширен ассортимент технических тканей. В результате распада Советского Союза, прекратились поставки хлопка из Средней Азии и льна из Европейской части, предприятие могло остаться без сырья. Чтобы сохранить производство и рабочие места, предприятие было вынуждено возродить льноводство на Алтае.', 10124124, 'Москва');

-- --------------------------------------------------------

--
-- Структура таблицы `journal`
--

CREATE TABLE `journal` (
  `day` date DEFAULT NULL,
  `id_parametrs` int DEFAULT NULL,
  `id_fucture` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `parametrs`
--

CREATE TABLE `parametrs` (
  `id` int NOT NULL,
  `param` int DEFAULT NULL,
  `id_fucture` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `postavshik`
--

CREATE TABLE `postavshik` (
  `id` int NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `id_tovara` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `postavshik`
--

INSERT INTO `postavshik` (`id`, `name`, `id_tovara`) VALUES
(1, 'Челябинск', 1),
(2, 'Волгоград', 2),
(3, 'Москва', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `regions`
--

CREATE TABLE `regions` (
  `id` int NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `fullName` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `desc` text COLLATE utf8mb4_general_ci NOT NULL,
  `refer` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `blood` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `factor` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--



--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `fucture`
--
ALTER TABLE `fucture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_reg` (`id_reg`);

--
-- Индексы таблицы `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `journal`
--
ALTER TABLE `journal`
  ADD KEY `id_parametrs` (`id_parametrs`),
  ADD KEY `id_fucture` (`id_fucture`);

--
-- Индексы таблицы `parametrs`
--
ALTER TABLE `parametrs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_fucture` (`id_fucture`);

--
-- Индексы таблицы `postavshik`
--
ALTER TABLE `postavshik`
  ADD KEY `id_tovara` (`id_tovara`);

--
-- Индексы таблицы `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `img`
--
ALTER TABLE `img`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `fucture`
--
ALTER TABLE `fucture`
  ADD CONSTRAINT `fucture_ibfk_1` FOREIGN KEY (`id_reg`) REFERENCES `regions` (`id`);

--
-- Ограничения внешнего ключа таблицы `journal`
--
ALTER TABLE `journal`
  ADD CONSTRAINT `journal_ibfk_1` FOREIGN KEY (`id_parametrs`) REFERENCES `parametrs` (`id`),
  ADD CONSTRAINT `journal_ibfk_2` FOREIGN KEY (`id_fucture`) REFERENCES `fucture` (`id`);

--
-- Ограничения внешнего ключа таблицы `parametrs`
--
ALTER TABLE `parametrs`
  ADD CONSTRAINT `parametrs_ibfk_1` FOREIGN KEY (`id_fucture`) REFERENCES `fucture` (`id`);

--
-- Ограничения внешнего ключа таблицы `postavshik`
--
ALTER TABLE `postavshik`
  ADD CONSTRAINT `postavshik_ibfk_1` FOREIGN KEY (`id_tovara`) REFERENCES `img` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
