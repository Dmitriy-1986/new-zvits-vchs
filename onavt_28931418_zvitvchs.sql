-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: sql205.hostronavt.ru
-- Время создания: Мар 26 2022 г., 10:15
-- Версия сервера: 10.3.27-MariaDB
-- Версия PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `onavt_28931418_zvitvchs`
--

-- --------------------------------------------------------

--
-- Структура таблицы `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `title_announcement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `txt_announcement` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_announcement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `announcement`
--

INSERT INTO `announcement` (`id`, `title_announcement`, `txt_announcement`, `date_announcement`) VALUES
(2, 'Шановні колеги!', 'Прошу Вас звернути особливу УВАГУ на правильність передачі інформації щодо нової статистичної звітності!      ', '2021-11-18 21:05');

-- --------------------------------------------------------

--
-- Структура таблицы `bat`
--

CREATE TABLE `bat` (
  `id` int(11) NOT NULL,
  `number_bat` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `zmina_bat` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `total_facts_bat` int(11) NOT NULL,
  `name_carrier_bat` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `provedeno_perevirok_bat` int(11) NOT NULL,
  `skladeno_protokoliv_bat` int(11) NOT NULL,
  `subyekty_yaki_vidmovylys_bat` int(11) NOT NULL,
  `provedeno_perevirok_zd_bat` int(11) NOT NULL,
  `skladeno_protokoliv_zd_bat` int(11) NOT NULL,
  `illegal_carriers_checked_bat` int(11) NOT NULL,
  `vidsutnist_litsenziyi_bat` int(11) NOT NULL,
  `vidsutnist_marshrutu_bat` int(11) NOT NULL,
  `vidsutnist_masky_bat` int(11) NOT NULL,
  `name_user_bat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_bat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `txt` text CHARACTER SET utf8 NOT NULL,
  `date` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `task`
--

INSERT INTO `task` (`id`, `title`, `txt`, `date`) VALUES
(3, 'Test #2', 'Test #2', '2021-12-12 23:59');

-- --------------------------------------------------------

--
-- Структура таблицы `tor`
--

CREATE TABLE `tor` (
  `id` int(11) NOT NULL,
  `name_user_tor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zmina_tor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_facts_tor` int(11) NOT NULL,
  `name_carrier_tor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provedeno_perevirok_tor` int(11) NOT NULL,
  `skladeno_protokoliv_tor` int(11) NOT NULL,
  `subyekty_yaki_vidmovylys_tor` int(11) NOT NULL,
  `provedeno_perevirok_zd_tor` int(11) NOT NULL,
  `skladeno_protokoliv_zd_tor` int(11) NOT NULL,
  `illegal_carriers_checked_tor` int(11) NOT NULL,
  `vidsutnist_litsenziyi_tor` int(11) NOT NULL,
  `vidsutnist_marshrutu_tor` int(11) NOT NULL,
  `vidsutnist_masky_tor` int(11) NOT NULL,
  `date_tor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tor`
--

INSERT INTO `tor` (`id`, `name_user_tor`, `zmina_tor`, `total_facts_tor`, `name_carrier_tor`, `provedeno_perevirok_tor`, `skladeno_protokoliv_tor`, `subyekty_yaki_vidmovylys_tor`, `provedeno_perevirok_zd_tor`, `skladeno_protokoliv_zd_tor`, `illegal_carriers_checked_tor`, `vidsutnist_litsenziyi_tor`, `vidsutnist_marshrutu_tor`, `vidsutnist_masky_tor`, `date_tor`) VALUES
(1, 'Test #1', 'Зміна', 0, 'Test #1', 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-11-18 00:35'),
(2, 'Test #2', 'Зміна', 0, 'Test #2', 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-12-13 00:01');

-- --------------------------------------------------------

--
-- Структура таблицы `vbdr`
--

CREATE TABLE `vbdr` (
  `id` int(11) NOT NULL,
  `name_user_vbdr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zmina_vbdr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_facts_vbdr` int(11) NOT NULL,
  `name_carrier_vbdr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provedeno_perevirok_vbdr` int(11) NOT NULL,
  `skladeno_protokoliv_vbdr` int(11) NOT NULL,
  `subyekty_yaki_vidmovylys_vbdr` int(11) NOT NULL,
  `provedeno_perevirok_zd_vbdr` int(11) NOT NULL,
  `skladeno_protokoliv_zd_vbdr` int(11) NOT NULL,
  `illegal_carriers_checked_vbdr` int(11) NOT NULL,
  `vidsutnist_litsenziyi_vbdr` int(11) NOT NULL,
  `vidsutnist_marshrutu_vbdr` int(11) NOT NULL,
  `vidsutnist_masky_vbdr` int(11) NOT NULL,
  `date_vbdr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `vbdr`
--

INSERT INTO `vbdr` (`id`, `name_user_vbdr`, `zmina_vbdr`, `total_facts_vbdr`, `name_carrier_vbdr`, `provedeno_perevirok_vbdr`, `skladeno_protokoliv_vbdr`, `subyekty_yaki_vidmovylys_vbdr`, `provedeno_perevirok_zd_vbdr`, `skladeno_protokoliv_zd_vbdr`, `illegal_carriers_checked_vbdr`, `vidsutnist_litsenziyi_vbdr`, `vidsutnist_marshrutu_vbdr`, `vidsutnist_masky_vbdr`, `date_vbdr`) VALUES
(1, 'Test#1', 'Зміна', 0, 'Test#1', 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-11-18 00:34'),
(2, 'Test #2', 'Зміна', 0, 'Test #2', 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-12-13 00:01');

-- --------------------------------------------------------

--
-- Структура таблицы `vmaz`
--

CREATE TABLE `vmaz` (
  `id` int(11) NOT NULL,
  `name_user_vmaz` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zmina_vmaz` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_facts_vmaz` int(11) NOT NULL,
  `name_carrier_vmaz` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provedeno_perevirok_vmaz` int(11) NOT NULL,
  `skladeno_protokoliv_vmaz` int(11) NOT NULL,
  `subyekty_yaki_vidmovylys_vmaz` int(11) NOT NULL,
  `provedeno_perevirok_zd_vmaz` int(11) NOT NULL,
  `skladeno_protokoliv_zd_vmaz` int(11) NOT NULL,
  `illegal_carriers_checked_vmaz` int(11) NOT NULL,
  `vidsutnist_litsenziyi_vmaz` int(11) NOT NULL,
  `vidsutnist_marshrutu_vmaz` int(11) NOT NULL,
  `vidsutnist_masky_vmaz` int(11) NOT NULL,
  `date_vmaz` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `vmaz`
--

INSERT INTO `vmaz` (`id`, `name_user_vmaz`, `zmina_vmaz`, `total_facts_vmaz`, `name_carrier_vmaz`, `provedeno_perevirok_vmaz`, `skladeno_protokoliv_vmaz`, `subyekty_yaki_vidmovylys_vmaz`, `provedeno_perevirok_zd_vmaz`, `skladeno_protokoliv_zd_vmaz`, `illegal_carriers_checked_vmaz`, `vidsutnist_litsenziyi_vmaz`, `vidsutnist_marshrutu_vmaz`, `vidsutnist_masky_vmaz`, `date_vmaz`) VALUES
(1, 'Test#1', 'Зміна', 0, 'Test#1', 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-11-18 00:34'),
(2, 'Test #2', 'Зміна', 0, 'Test #2', 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-12-13 00:01');

-- --------------------------------------------------------

--
-- Структура таблицы `vromdtp`
--

CREATE TABLE `vromdtp` (
  `id` int(11) NOT NULL,
  `name_user_vromdtp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zmina_vromdtp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_facts_vromdtp` int(11) NOT NULL,
  `name_carrier_vromdtp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provedeno_perevirok_vromdtp` int(11) NOT NULL,
  `skladeno_protokoliv_vromdtp` int(11) NOT NULL,
  `subyekty_yaki_vidmovylys_vromdtp` int(11) NOT NULL,
  `provedeno_perevirok_zd_vromdtp` int(11) NOT NULL,
  `skladeno_protokoliv_zd_vromdtp` int(11) NOT NULL,
  `illegal_carriers_checked_vromdtp` int(11) NOT NULL,
  `vidsutnist_litsenziyi_vromdtp` int(11) NOT NULL,
  `vidsutnist_marshrutu_vromdtp` int(11) NOT NULL,
  `vidsutnist_masky_vromdtp` int(11) NOT NULL,
  `date_vromdtp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `vromdtp`
--

INSERT INTO `vromdtp` (`id`, `name_user_vromdtp`, `zmina_vromdtp`, `total_facts_vromdtp`, `name_carrier_vromdtp`, `provedeno_perevirok_vromdtp`, `skladeno_protokoliv_vromdtp`, `subyekty_yaki_vidmovylys_vromdtp`, `provedeno_perevirok_zd_vromdtp`, `skladeno_protokoliv_zd_vromdtp`, `illegal_carriers_checked_vromdtp`, `vidsutnist_litsenziyi_vromdtp`, `vidsutnist_marshrutu_vromdtp`, `vidsutnist_masky_vromdtp`, `date_vromdtp`) VALUES
(1, 'Test #1', 'Зміна', 0, 'Test #1', 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-11-18 00:35'),
(2, 'Test #2', 'Зміна', 0, 'Test #2', 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-12-13 00:01');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `bat`
--
ALTER TABLE `bat`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tor`
--
ALTER TABLE `tor`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vbdr`
--
ALTER TABLE `vbdr`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vmaz`
--
ALTER TABLE `vmaz`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vromdtp`
--
ALTER TABLE `vromdtp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `bat`
--
ALTER TABLE `bat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `tor`
--
ALTER TABLE `tor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `vbdr`
--
ALTER TABLE `vbdr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `vmaz`
--
ALTER TABLE `vmaz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `vromdtp`
--
ALTER TABLE `vromdtp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
