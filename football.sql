--
-- База данных: `football`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_country` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cities`
--

INSERT INTO `cities` (`id`, `name`, `id_country`) VALUES
(1, 'London', 2),
(2, 'Dnipro', 1),
(3, 'Barcelona', 3),
(4, 'Kyiv', 1),
(5, 'Manchester', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `clubs`
--

CREATE TABLE `clubs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_city` int(11) NOT NULL,
  `id_league` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `id_president` int(11) NOT NULL,
  `id_stadium` int(11) NOT NULL,
  `revenue` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `clubs`
--

INSERT INTO `clubs` (`id`, `name`, `id_city`, `id_league`, `year`, `id_president`, `id_stadium`, `revenue`) VALUES
(1, 'Dnipro', 2, 1, 1918, 1, 1, '1000000'),
(2, 'Manchester United', 5, 2, 1901, 5, 5, '300000000'),
(7, 'Chelsea', 1, 2, 1927, 6, 5, '30000000'),
(8, 'Chelsea', 1, 2, 1927, 1, 1, '437920'),
(9, 'Chelsea', 1, 2, 1927, 1, 1, '437920'),
(10, 'Arsenal', 1, 2, 1927, 5, 7, '30000000'),
(11, 'Arsenal', 1, 2, 1927, 5, 7, '30000000'),
(12, 'Arsenal', 1, 2, 1927, 5, 7, '30000000'),
(13, 'Arsenal', 1, 2, 1927, 5, 7, '30000000'),
(14, 'Camp Nou', 2, 3, 1927, 3, 1, '437920'),
(15, 'Camp Nou', 2, 3, 1927, 3, 1, '437920'),
(16, 'Europa League Trophy', 3, 3, 1927, 5, 5, '437920'),
(17, 'Europa League Trophy', 3, 3, 1927, 5, 5, '437920'),
(18, 'Europa League Trophy', 3, 3, 1927, 5, 5, '437920'),
(19, 'Europa League Trophy', 3, 3, 1927, 5, 5, '437920'),
(20, 'Dunamo', 4, 1, 1993, 1, 1, '500000');

-- --------------------------------------------------------

--
-- Структура таблицы `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `countries`
--

INSERT INTO `countries` (`id`, `name`) VALUES
(1, 'Ukraine'),
(2, 'England'),
(3, 'Spain'),
(4, 'France'),
(5, 'Portugal');

-- --------------------------------------------------------

--
-- Структура таблицы `leagues`
--

CREATE TABLE `leagues` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_country` int(11) NOT NULL,
  `top_place` int(11) NOT NULL,
  `id_president` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `leagues`
--

INSERT INTO `leagues` (`id`, `name`, `id_country`, `top_place`, `id_president`) VALUES
(1, 'Ukranian Premier League', 1, 10, 2),
(2, 'Premier League', 2, 1, 3),
(3, 'La Liga', 3, 2, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `persone`
--

CREATE TABLE `persone` (
  `id` int(11) NOT NULL,
  `name` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `persone`
--

INSERT INTO `persone` (`id`, `name`) VALUES
(1, 'Igor Kolomoyskyi'),
(2, 'Volodymyr Heninson'),
(3, 'Marco Silva'),
(4, 'Javier Tebasa'),
(5, 'Avram Glazer'),
(6, 'Roman Abramovich');

-- --------------------------------------------------------

--
-- Структура таблицы `stadiums`
--

CREATE TABLE `stadiums` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `capacity` int(11) NOT NULL,
  `id_city` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `stadiums`
--

INSERT INTO `stadiums` (`id`, `name`, `year`, `capacity`, `id_city`) VALUES
(1, 'Dnipro-Arena', 2008, 31003, 2),
(5, 'Stamford Bridge', 1901, 41490, 1),
(7, 'Camp Nou', 1927, 70050, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `trophy`
--

CREATE TABLE `trophy` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `trophy`
--

INSERT INTO `trophy` (`id`, `name`, `year`) VALUES
(1, 'Europa League Trophy', 1972),
(2, 'Champions League Trophy', 1956);

-- --------------------------------------------------------

--
-- Структура таблицы `victory`
--

CREATE TABLE `victory` (
  `id` int(11) NOT NULL,
  `id_club` int(11) NOT NULL,
  `id_trophy` int(11) NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `victory`
--

INSERT INTO `victory` (`id`, `id_club`, `id_trophy`, `year`) VALUES
(1, 1, 2, 1972),
(3, 1, 1, 1999),
(4, 7, 1, 1995);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `leagues`
--
ALTER TABLE `leagues`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `persone`
--
ALTER TABLE `persone`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `stadiums`
--
ALTER TABLE `stadiums`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `trophy`
--
ALTER TABLE `trophy`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `victory`
--
ALTER TABLE `victory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `clubs`
--
ALTER TABLE `clubs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT для таблицы `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `leagues`
--
ALTER TABLE `leagues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `persone`
--
ALTER TABLE `persone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `stadiums`
--
ALTER TABLE `stadiums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `trophy`
--
ALTER TABLE `trophy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `victory`
--
ALTER TABLE `victory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
