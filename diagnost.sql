-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Янв 21 2023 г., 15:18
-- Версия сервера: 10.6.8-MariaDB
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `u13865_diagnost`
--

-- --------------------------------------------------------

--
-- Структура таблицы `desdiagnoz`
--

CREATE TABLE `desdiagnoz` (
  `id_ddiagn` int(11) NOT NULL,
  `znachfunct` int(11) NOT NULL,
  `diagn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `desdiagnoz`
--

INSERT INTO `desdiagnoz` (`id_ddiagn`, `znachfunct`, `diagn`) VALUES
(1, 1, 'У вас відсутні симптоми вірусного захворювання'),
(2, 2, 'Висока вірогідність простудного захворювання'),
(3, 3, 'Найбільш вірогідним є ОРВІ'),
(4, 4, 'Висока вірогідність Грипу'),
(5, 5, 'Висока вірогідність захворювання на Коронавірус');

-- --------------------------------------------------------

--
-- Структура таблицы `desiase`
--

CREATE TABLE `desiase` (
  `id_des` int(11) NOT NULL,
  `simptom` varchar(255) DEFAULT NULL,
  `ball` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `desiase`
--

INSERT INTO `desiase` (`id_des`, `simptom`, `ball`) VALUES
(1, 'Нежить', 1),
(2, 'Лихоманка', 4),
(3, 'Кашель', NULL),
(4, 'Сильні болі в тілі', 3),
(5, 'Головний біль', 4),
(6, 'Кон\'юктивіт', 3),
(7, 'Набухання лімфотичних вузлів ', 4),
(8, 'Слабкість у тілі', 3),
(9, 'Блювота', 2),
(10, 'Біль в горлі', 4),
(11, 'Втрата апетиту', 3),
(12, 'Чихання', 2),
(13, 'Висока температура', 3),
(14, 'Слабкий стілець', 3),
(15, 'Біль в животі', 3),
(16, 'Втрата нюху', 5),
(17, 'Втрата смаку', 4),
(18, 'Втрата орієнтації', 2),
(19, 'Біль у м\'язах та суглоба', 3),
(20, 'Біль у грудях', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `diagnost`
--

CREATE TABLE `diagnost` (
  `id_diagn` int(11) NOT NULL,
  `id_simptom` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `expert_rez`
--

CREATE TABLE `expert_rez` (
  `id_dise` int(11) NOT NULL,
  `namedisease` varchar(100) DEFAULT NULL,
  `min_gr` int(4) DEFAULT NULL,
  `max_gr` int(4) DEFAULT NULL,
  `id_exp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `exp_dani`
--

CREATE TABLE `exp_dani` (
  `id_dani` int(11) NOT NULL,
  `id_exp` int(11) DEFAULT NULL,
  `id_disease` int(11) DEFAULT NULL,
  `sympt1` int(1) DEFAULT NULL,
  `sympt2` int(1) DEFAULT NULL,
  `sympt3` int(1) DEFAULT NULL,
  `sympt4` int(1) DEFAULT NULL,
  `sympt5` int(1) DEFAULT NULL,
  `sympt6` int(1) DEFAULT NULL,
  `sympt7` int(1) DEFAULT NULL,
  `sympt8` int(1) DEFAULT NULL,
  `sympt9` int(1) DEFAULT NULL,
  `sympt10` int(1) DEFAULT NULL,
  `sympt11` int(1) DEFAULT NULL,
  `sympt12` int(1) DEFAULT NULL,
  `sympt13` int(1) DEFAULT NULL,
  `sympt14` int(1) DEFAULT NULL,
  `sympt15` int(1) DEFAULT NULL,
  `sympt16` int(1) DEFAULT NULL,
  `sympt17` int(1) DEFAULT NULL,
  `sympt18` int(1) DEFAULT NULL,
  `sympt19` int(1) DEFAULT NULL,
  `sympt20` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `exp_dani`
--

INSERT INTO `exp_dani` (`id_dani`, `id_exp`, `id_disease`, `sympt1`, `sympt2`, `sympt3`, `sympt4`, `sympt5`, `sympt6`, `sympt7`, `sympt8`, `sympt9`, `sympt10`, `sympt11`, `sympt12`, `sympt13`, `sympt14`, `sympt15`, `sympt16`, `sympt17`, `sympt18`, `sympt19`, `sympt20`) VALUES
(1, 1, 0, 2, 3, 4, 3, 4, 3, 5, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 2),
(2, 7, 7, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0),
(4, 54, 1, 1, 4, 4, 3, 3, 0, 3, 0, 2, 4, 0, 5, 0, 0, 3, 0, 2, 3, 3, 3),
(5, 54, 1, 3, 4, 5, 4, 3, 4, 0, 2, 5, 3, 4, 4, 2, 4, 1, 3, 4, 3, 4, 4),
(6, 54, 3, 3, 2, 4, 1, 2, 2, 4, 3, 2, 4, 4, 3, 4, 2, 2, 1, 1, 1, 2, 2),
(7, 54, 2, 4, 4, 4, 4, 5, 3, 4, 4, 3, 4, 4, 4, 5, 3, 3, 5, 5, 4, 4, 4),
(8, 54, 0, 4, 3, 4, 5, 4, 2, 2, 4, 4, 3, 3, 4, 5, 3, 2, 5, 5, 1, 3, 4),
(9, 59, 0, 3, 3, 4, 4, 5, 1, 5, 3, 4, 4, 3, 4, 5, 3, 4, 4, 4, 4, 4, 5),
(10, 59, 0, 3, 3, 4, 4, 5, 1, 5, 3, 4, 4, 3, 4, 5, 3, 4, 4, 4, 4, 4, 5),
(11, 59, 0, 2, 3, 4, 5, 4, 4, 4, 3, 4, 4, 4, 5, 4, 3, 4, 4, 3, 4, 3, 3),
(14, 59, 0, 5, 3, 4, 4, 3, 2, 4, 4, 4, 2, 2, 0, 1, 3, 3, 5, 5, 4, 3, 0),
(15, 59, 0, 5, 3, 4, 4, 3, 2, 4, 4, 4, 2, 2, 0, 1, 3, 3, 5, 5, 4, 3, 0),
(22, 54, 0, 2, 2, 4, 5, 5, 4, 4, 5, 5, 3, 3, 2, 5, 5, 5, 5, 5, 5, 5, 5),
(23, 54, 0, 2, 2, 4, 5, 5, 4, 4, 5, 5, 3, 3, 2, 5, 5, 5, 5, 5, 5, 5, 5),
(24, 54, 0, 2, 3, 4, 2, 4, 3, 4, 4, 3, 2, 3, 2, 5, 4, 2, 5, 5, 5, 2, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `exp_simptom_dise`
--

CREATE TABLE `exp_simptom_dise` (
  `id_simpt` int(11) NOT NULL,
  `title_simpt` varchar(255) DEFAULT NULL,
  `verylow` int(2) DEFAULT NULL,
  `low` int(2) DEFAULT NULL,
  `middle` int(2) DEFAULT NULL,
  `hi` int(2) DEFAULT NULL,
  `veryhi` int(2) DEFAULT NULL,
  `id_koef` int(11) DEFAULT NULL,
  `id_diagn` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `insystem`
--

CREATE TABLE `insystem` (
  `id_insystem` int(11) NOT NULL,
  `datein` datetime DEFAULT NULL,
  `dateout` datetime DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `koef`
--

CREATE TABLE `koef` (
  `id_koef` int(11) NOT NULL,
  `koef` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `koef`
--

INSERT INTO `koef` (`id_koef`, `koef`) VALUES
(1, 1.1),
(2, 1.2),
(3, 1.3),
(4, 1.4),
(5, 1.5),
(6, 1.6),
(7, 1.7),
(8, 1.8),
(9, 1.9),
(10, 2),
(11, 0.9),
(12, 0.8),
(13, 0.7),
(14, 0.6),
(15, 0.5),
(16, 0.4);

-- --------------------------------------------------------

--
-- Структура таблицы `patient_simptom_dise`
--

CREATE TABLE `patient_simptom_dise` (
  `id_simpt_pat` int(11) NOT NULL,
  `title_simpt` varchar(255) DEFAULT NULL,
  `verylow` int(2) DEFAULT NULL,
  `low` int(2) DEFAULT NULL,
  `middle` int(2) DEFAULT NULL,
  `hi` int(2) DEFAULT NULL,
  `veryhi` int(2) DEFAULT NULL,
  `id_patient` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `result_diabet`
--

CREATE TABLE `result_diabet` (
  `id_result_diabet` int(11) NOT NULL,
  `result` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `result_diabet`
--

INSERT INTO `result_diabet` (`id_result_diabet`, `result`) VALUES
(1, 'Низький: приблизно у одного зі 100 буде діабет'),
(2, 'Трохи підвищено: приблизно у одного з 25 буде діабет'),
(3, 'Помірний: приблизно у одного з шести буде діабет'),
(4, 'Високий: приблизно у одного з трьох буде діабет'),
(5, 'Дуже високий: приблизно у одного з двох буде діабет');

-- --------------------------------------------------------

--
-- Структура таблицы `result_stress`
--

CREATE TABLE `result_stress` (
  `id_result_stress` int(11) NOT NULL,
  `result` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `rezult_nicotin`
--

CREATE TABLE `rezult_nicotin` (
  `id_result_nicotin` int(11) NOT NULL,
  `result` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'Пацієнт'),
(2, 'Лікар'),
(3, 'Адміністратор');

-- --------------------------------------------------------

--
-- Структура таблицы `ser`
--

CREATE TABLE `ser` (
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `statistic`
--

CREATE TABLE `statistic` (
  `id_stat` int(11) NOT NULL,
  `datejoined` datetime DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `tabb`
--

CREATE TABLE `tabb` (
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `test_nicotin`
--

CREATE TABLE `test_nicotin` (
  `id_t4` int(11) NOT NULL,
  `quest` varchar(255) DEFAULT NULL,
  `ball` int(1) DEFAULT NULL,
  `id_result_nic` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `test_nicotin`
--

INSERT INTO `test_nicotin` (`id_t4`, `quest`, `ball`, `id_result_nic`) VALUES
(1, 'Коли після того як Ви прокинетеся Ви викурюєте першу сигарету?', NULL, NULL),
(2, 'Чи складно вам утриматися від куріння в місцях, де куріння заборонено?', NULL, NULL),
(3, 'Від якої цигарки Ви не можете легко відмовитись?', NULL, NULL),
(4, 'Скільки цигарок Ви викурюєте на день?', NULL, NULL),
(5, 'Ви курите частіше в перші години вранці, після того як прокинетеся, або протягом решти дня?', NULL, NULL),
(6, 'Чи курите Ви, якщо хворі та змушені перебувати в ліжку цілий день?', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `test_psiho`
--

CREATE TABLE `test_psiho` (
  `id_t1` int(11) NOT NULL,
  `quest_t1` varchar(255) DEFAULT NULL,
  `yes_t1` int(1) DEFAULT NULL,
  `no_t1` int(1) DEFAULT NULL,
  `lie_y_t1` int(1) DEFAULT NULL,
  `lie_n_t1` int(1) DEFAULT NULL,
  `neur_t1` int(1) DEFAULT NULL,
  `id_user_pr` int(11) DEFAULT NULL,
  `ball` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `test_psiho`
--

INSERT INTO `test_psiho` (`id_t1`, `quest_t1`, `yes_t1`, `no_t1`, `lie_y_t1`, `lie_n_t1`, `neur_t1`, `id_user_pr`, `ball`) VALUES
(1, 'Я працездатна людина', NULL, 1, NULL, NULL, NULL, NULL, NULL),
(2, 'Я завжди виконую свої обіцянки, не зважаючи на те, зручно мені це чи ні', NULL, NULL, 1, NULL, NULL, NULL, NULL),
(3, 'Зазвичай руки та ноги у мене теплі', NULL, 1, NULL, NULL, NULL, NULL, NULL),
(4, 'Іноді в мене болить голова', NULL, 1, NULL, NULL, NULL, NULL, NULL),
(5, 'Я впевнений у своїх силах', NULL, 1, NULL, NULL, NULL, NULL, NULL),
(6, 'Очікування мене нервує', 1, NULL, NULL, NULL, 1, NULL, NULL),
(7, 'Іноді мені здається, що я ні на що не придатний', 1, NULL, NULL, NULL, 1, NULL, NULL),
(8, 'Зазвичай почуваюся здоровою і цілком задоволеною життям людиною', NULL, 1, NULL, NULL, NULL, NULL, NULL),
(9, 'Мені важко зосередитись на повсякденній роботі', 1, NULL, NULL, NULL, 1, NULL, NULL),
(10, 'У дитинстві я завжди негайно та покірно виконував те, що мені доручали', NULL, NULL, 1, NULL, NULL, NULL, NULL),
(11, 'У мене бувають розлади шлунка 2-3 рази на місяць', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Я часто відчуваю внутрішню напругу та тривогу', 1, NULL, NULL, NULL, 1, NULL, NULL),
(13, 'Думаю, що я більш нервовий, ніж інші люди', 1, NULL, NULL, NULL, 1, NULL, NULL),
(14, 'Я сором\'язлива людина', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Іноді буває, що я говорю про речі, в яких не знаюся', NULL, NULL, NULL, 1, NULL, NULL, NULL),
(16, 'Я часто червонію, якщо хвилююся', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Я часто засмучуюсь через дрібниці', 1, NULL, NULL, NULL, 1, NULL, NULL),
(18, 'У мене бувають болі в серці, пов\'язані з хвилюванням', 1, NULL, NULL, NULL, 1, NULL, NULL),
(19, 'Похмура погода майже завжди погіршує мій настрій', 1, NULL, NULL, NULL, 1, NULL, NULL),
(20, 'Не всі люди, яких я знаю, мені подобаються', NULL, NULL, NULL, 1, NULL, NULL, NULL),
(21, 'Я не могу заснуть, если меня что-то тревожит', 1, NULL, NULL, NULL, 1, NULL, NULL),
(22, 'Зазвичай я спокійний, і мене важко вивести з себе', NULL, 1, NULL, NULL, NULL, NULL, NULL),
(23, 'У мене буваю нічні кошмари', 1, NULL, NULL, NULL, 1, NULL, NULL),
(24, 'Я схильний приймати все близько до серця', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'Якщо я нервуюсь, то сильно потію', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'У меня чуткий, беспокойный сон', 1, NULL, NULL, NULL, 1, NULL, NULL),
(27, 'В играх я предпочитаю скорее выигрывать, чем проигрывать', NULL, NULL, NULL, 1, NULL, NULL, NULL),
(28, 'Я более чувствителен, чем большинство других людей', 1, NULL, NULL, NULL, 1, NULL, NULL),
(29, 'У меня нет чувства отдыха после сна', 1, NULL, NULL, NULL, 1, NULL, NULL),
(30, 'Бывает, что нескромные шутки и остроты вызывают у меня смех', NULL, NULL, NULL, 1, NULL, NULL, NULL),
(31, 'Я постоянно озабочен своими служебными делами или финансами', NULL, NULL, NULL, NULL, 1, NULL, NULL),
(32, 'Я настороженно отношусь к некоторым людям, хотя знаю, что они не могут причинить мне вреда', 1, NULL, NULL, NULL, 1, NULL, NULL),
(33, 'Порой кажется, что мои проблемы неразрешимы. ', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'Я легко прихожу в замешательство', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'Я предпочитаю уклоняться от конфликтов и затруднительных положений', NULL, NULL, NULL, 1, NULL, NULL, NULL),
(36, 'У меня бывают приступы тошноты, не связанные с приемом пищи', 1, NULL, NULL, NULL, 1, NULL, NULL),
(37, 'Я быстро осваиваюсь в новой обстановке', NULL, 1, NULL, NULL, NULL, NULL, NULL),
(38, 'Временами я чувствую себя бесполезным и одиноким человеком', 1, NULL, NULL, NULL, 1, NULL, NULL),
(39, 'Иногда мне хочется выругаться', NULL, NULL, NULL, 1, NULL, NULL, NULL),
(40, 'Меня почти всегда тревожат возможные неудачи, если берусь за новое дело', 1, NULL, NULL, NULL, 1, NULL, NULL),
(41, 'У меня гораздо меньше страхов и опасений, чем у других людей', 1, NULL, NULL, NULL, 1, NULL, NULL),
(42, 'У меня гораздо меньше страхов и опасений, чем у других людей', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'Бывает, что я откладываю на завтра то, что можно сделать сегодня', NULL, 1, NULL, NULL, NULL, NULL, NULL),
(44, 'Моя работа требует повышенной сосредоточенности', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'Я очень чувствителен к переменам погоды', NULL, NULL, NULL, NULL, 1, NULL, NULL),
(46, 'Часто мелкие бытовые проблемы вызывают раздражение', 1, NULL, NULL, NULL, 1, NULL, NULL),
(47, 'Я легко знакомлюсь с новыми людьми', NULL, 1, NULL, NULL, NULL, NULL, NULL),
(48, 'Критические замечания меня легко ранят и обижают', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'Я постоянно беспокоюсь за здоровье и благополучие близких для меня людей', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'У меня хорошая память', NULL, 1, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `test_risk_diabet`
--

CREATE TABLE `test_risk_diabet` (
  `id_test3` int(11) NOT NULL,
  `age` int(1) DEFAULT NULL,
  `index_mass` int(1) DEFAULT NULL,
  `waist_circle` int(1) DEFAULT NULL,
  `active` int(1) DEFAULT NULL,
  `vegetables` int(1) DEFAULT NULL,
  `tablets` int(1) DEFAULT NULL,
  `glukoze` int(1) DEFAULT NULL,
  `famely` int(1) DEFAULT NULL,
  `id_result` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `test_stress`
--

CREATE TABLE `test_stress` (
  `id_t2` int(11) NOT NULL,
  `quest_t2` varchar(255) DEFAULT NULL,
  `answer_t2` int(1) DEFAULT 1,
  `id_result_stress` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `test_stress`
--

INSERT INTO `test_stress` (`id_t2`, `quest_t2`, `answer_t2`, `id_result_stress`) VALUES
(1, 'Мабуть, я людина нервова', NULL, NULL),
(2, 'Я дуже турбуюся про свою роботу', NULL, NULL),
(3, 'Я часто відчуваю нервову напругу', NULL, NULL),
(4, 'Моя повсякденна діяльність викликає велику напругу', NULL, NULL),
(5, 'Спілкуючись із людьми, я часто відчуваю нервову напругу', NULL, NULL),
(6, 'До кінця дня я зовсім виснажений фізично та психічно', NULL, NULL),
(7, 'У моїй сім\'ї часто виникають напружені стосунки', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `login` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `telephone` varchar(25) DEFAULT NULL,
  `passport` varchar(255) DEFAULT NULL,
  `personcode` varchar(255) DEFAULT NULL,
  `id_role` int(11) DEFAULT 1,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id_user`, `login`, `password`, `firstname`, `lastname`, `email`, `birthday`, `telephone`, `passport`, `personcode`, `id_role`, `avatar`) VALUES
(1, 'petro', 'petro', 'Петро', 'Проскурко', 'petropr@gmail.com', '2001-10-21', '+(380)67690909', 'СК 23542345', '2', 1, '3008.png'),
(2, 'ivanov', 'ivanov', 'Iван', 'Iваночко', 'ivanoch@gmailcom.', '2001-10-11', '+(380)63214654', 'UK 98769876', '1', 3, '3027.png'),
(3, 'goc', 'goc', 'Наталія', 'Гоц', 'goc@gmail.com', '1972-10-11', '+(380)-23-412-1334', 'КП 45123123', '3', 1, '3055.png'),
(4, 'gapon', 'gapon', 'Олег', 'Гапон', 'gapon@gmail.com', '2002-10-03', '9384632', 'MK 5345114', '1', 1, '3054.png'),
(5, 'chig', 'chig', 'Тарас', 'Чиж', 'chig@gmail.com', '2002-10-10', '+(380)-50-778-8658', 'ЕН 1234143', '1', 1, '3053.png'),
(14, 'chug', '9237768650b60d5e90bbf4453e5584e2', 'Ольга', 'Чугина', 'chug@gmail.com', '2021-10-01', '1546745', 'MT 2645533', '1', 1, '16350063553172.png'),
(23, 'pavich', '4ba007c15287680378813a9840bfd513', 'Марта', 'Павич', 'om@gmail.com', '2021-11-16', '1232123123', 'er 456789', '1', 1, '/home/u13865/public_html/diagnostview	emplateimg16362913933153.png'),
(50, 'ivanov', '4dfe6e220d16e7b633cfdd92bcc8050b', 'Ivan', 'Ivanov', 'iv@b.v', '2021-11-10', '333333333333', 'er 456789', '1', 1, '/home/u13865/public_html/diagnostview	emplateimg1636440756'),
(51, 'krutov', '8baefd904e276d546aa9914ba3cb2936', 'Евгений', 'Крутов', 'k@e.com', '2021-11-01', '444444444444444', 'МВ 215525', '1', 1, '/home/u13865/public_html/diagnostview	emplateimg1636467624'),
(52, 'kukich', 'fb4314133d5185eaa5a04d3426aa66b1', 'Артем', 'Кукич', 'kuk@k.w', '2021-11-16', '222222222222222', 'МВ 215525', '1', 1, '/home/u13865/public_html/diagnostview	emplateimg16364697003091.png'),
(54, 'expert', 'b9b83bad6bd2b4f7c40109304cf580e1', 'Олександр Миколайович', 'Кленів', 'Kl@gmail.com', '2021-11-16', '33333333333333', 'AB 23542354', '1', 2, '/home/u13865/public_html/diagnostview	emplateimg1636649483'),
(56, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', 'test', 'test@gmail.com', '2017-06-15', '+380-50-456-1112', 'er 234567', '1', 1, '/home/u13865/public_html/diagnostview	emplateimg16519235653087.png'),
(58, 'palan', '84381f9652a70c9bfc512944693e4113', 'Андрій', 'Паляниця', 'palan@gmail.com', '2000-05-12', '380673311225', 'TR 241556', '1', 1, '/home/u13865/public_html/diagnostview	emplateimg16533280013097.png'),
(59, 'hilco', 'a5fe555981d01e3a9ca0d29dbf54d1e0', 'Богдан', 'Хілько', 'hilco@gmail.com', '2005-02-02', '(+380)-44444444444', 'МВ 215525', '1', 2, '/home/u13865/public_html/diagnostview	emplateimg1654339629flag.GIF'),
(60, 'kochun', 'f2a21f78a5be1e16be5db7a0ede02541', 'Ігор', 'Кочун', 'kochun@gmail.com', '2004-05-11', '+(380)67-155-234-22', 'МВ 215525', '1', 1, '/home/u13865/public_html/diagnostview	emplateimg1655123114flag.GIF');

-- --------------------------------------------------------

--
-- Структура таблицы `user_diagnoz`
--

CREATE TABLE `user_diagnoz` (
  `id_ud` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_diagnoz` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `user_test1`
--

CREATE TABLE `user_test1` (
  `id_u_t1` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_t1` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `user_test2`
--

CREATE TABLE `user_test2` (
  `id_u_t2` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_t2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `user_test3`
--

CREATE TABLE `user_test3` (
  `id_u_t3` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_test3` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `user_test4`
--

CREATE TABLE `user_test4` (
  `id_u_t4` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_test4` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `usr_dani`
--

CREATE TABLE `usr_dani` (
  `id_dani` int(11) NOT NULL,
  `id_usr` int(11) DEFAULT NULL,
  `id_disease` int(11) DEFAULT NULL,
  `sympt1` int(1) DEFAULT NULL,
  `sympt2` int(1) DEFAULT NULL,
  `sympt3` int(1) DEFAULT NULL,
  `sympt4` int(1) DEFAULT NULL,
  `sympt5` int(1) DEFAULT NULL,
  `sympt6` int(1) DEFAULT NULL,
  `sympt7` int(1) DEFAULT NULL,
  `sympt8` int(1) DEFAULT NULL,
  `sympt9` int(1) DEFAULT NULL,
  `sympt10` int(1) DEFAULT NULL,
  `sympt11` int(1) DEFAULT NULL,
  `sympt12` int(1) DEFAULT NULL,
  `sympt13` int(1) DEFAULT NULL,
  `sympt14` int(1) DEFAULT NULL,
  `sympt15` int(1) DEFAULT NULL,
  `sympt16` int(1) DEFAULT NULL,
  `sympt17` int(1) DEFAULT NULL,
  `sympt18` int(1) DEFAULT NULL,
  `sympt19` int(1) DEFAULT NULL,
  `sympt20` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `usr_dani`
--

INSERT INTO `usr_dani` (`id_dani`, `id_usr`, `id_disease`, `sympt1`, `sympt2`, `sympt3`, `sympt4`, `sympt5`, `sympt6`, `sympt7`, `sympt8`, `sympt9`, `sympt10`, `sympt11`, `sympt12`, `sympt13`, `sympt14`, `sympt15`, `sympt16`, `sympt17`, `sympt18`, `sympt19`, `sympt20`) VALUES
(1, 56, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 56, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 56, 0, 4, 3, 4, 3, 5, 5, 4, 3, 4, 2, 4, 4, 5, 1, 4, 5, 4, 4, 5, 4),
(4, 56, 0, 1, 1, 5, 5, 5, 4, 5, 4, 5, 5, 5, 4, 3, 4, 5, 5, 5, 4, 4, 4),
(5, 56, 0, 4, 0, 3, 0, 3, 0, 0, 2, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 56, 0, 4, 0, 3, 0, 3, 0, 0, 2, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 56, 0, 4, 5, 4, 4, 5, 4, 3, 4, 4, 5, 5, 4, 4, 5, 4, 0, 0, 0, 0, 0),
(8, 56, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 56, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 56, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 56, 0, 4, 5, 3, 5, 4, 3, 5, 3, 4, 3, 3, 0, 2, 3, 3, 4, 4, 3, 3, 4),
(12, 56, 0, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 4, 4),
(13, 56, 0, 4, 4, 5, 5, 5, 4, 4, 3, 5, 4, 4, 5, 4, 3, 4, 5, 5, 5, 4, 5),
(14, 56, 5, 4, 4, 5, 5, 5, 4, 4, 3, 5, 4, 4, 5, 4, 3, 4, 5, 5, 5, 4, 5),
(15, 56, 5, 4, 5, 4, 5, 4, 5, 5, 5, 4, 5, 4, 5, 5, 5, 5, 4, 4, 4, 3, 5),
(16, 56, 1, 1, 3, 3, 3, 4, 2, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 56, 4, 5, 4, 3, 3, 5, 4, 5, 4, 4, 5, 5, 3, 4, 4, 4, 3, 4, 5, 4, 4),
(18, 59, 4, 4, 4, 3, 5, 4, 5, 4, 3, 3, 3, 4, 5, 5, 5, 3, 0, 0, 5, 5, 5),
(19, 60, 4, 4, 3, 2, 4, 4, 3, 4, 4, 2, 5, 4, 5, 5, 4, 4, 3, 4, 4, 4, 5),
(20, 60, 5, 5, 4, 4, 3, 5, 5, 3, 5, 5, 4, 5, 3, 5, 5, 5, 5, 5, 5, 4, 4),
(21, 58, 4, 4, 4, 4, 4, 4, 3, 3, 4, 2, 5, 5, 4, 5, 3, 2, 5, 5, 3, 4, 5),
(22, 58, 4, 4, 4, 4, 4, 4, 3, 3, 4, 2, 5, 5, 5, 5, 3, 2, 5, 5, 5, 4, 5),
(23, 58, 4, 4, 4, 4, 4, 4, 3, 5, 4, 3, 5, 5, 5, 5, 3, 2, 5, 5, 5, 4, 5),
(24, 58, 5, 4, 5, 5, 5, 5, 3, 5, 4, 3, 5, 5, 5, 5, 3, 2, 5, 5, 5, 4, 5);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `desdiagnoz`
--
ALTER TABLE `desdiagnoz`
  ADD PRIMARY KEY (`id_ddiagn`);

--
-- Индексы таблицы `desiase`
--
ALTER TABLE `desiase`
  ADD PRIMARY KEY (`id_des`);

--
-- Индексы таблицы `diagnost`
--
ALTER TABLE `diagnost`
  ADD PRIMARY KEY (`id_diagn`),
  ADD KEY `FK_diagnost_desiase_id_des` (`id_simptom`);

--
-- Индексы таблицы `expert_rez`
--
ALTER TABLE `expert_rez`
  ADD PRIMARY KEY (`id_dise`),
  ADD KEY `id_user` (`id_exp`);

--
-- Индексы таблицы `exp_dani`
--
ALTER TABLE `exp_dani`
  ADD PRIMARY KEY (`id_dani`);

--
-- Индексы таблицы `exp_simptom_dise`
--
ALTER TABLE `exp_simptom_dise`
  ADD PRIMARY KEY (`id_simpt`),
  ADD KEY `IDX_exp_simptom_dise_id_koef` (`id_koef`),
  ADD KEY `IDX_exp_simptom_dise_id_diagn` (`id_diagn`);

--
-- Индексы таблицы `insystem`
--
ALTER TABLE `insystem`
  ADD PRIMARY KEY (`id_insystem`),
  ADD KEY `FK_insystem_user_id_user` (`id_user`);

--
-- Индексы таблицы `koef`
--
ALTER TABLE `koef`
  ADD PRIMARY KEY (`id_koef`);

--
-- Индексы таблицы `patient_simptom_dise`
--
ALTER TABLE `patient_simptom_dise`
  ADD PRIMARY KEY (`id_simpt_pat`),
  ADD KEY `IDX_patient_simptom_dise_id_patient` (`id_patient`);

--
-- Индексы таблицы `result_diabet`
--
ALTER TABLE `result_diabet`
  ADD PRIMARY KEY (`id_result_diabet`);

--
-- Индексы таблицы `result_stress`
--
ALTER TABLE `result_stress`
  ADD PRIMARY KEY (`id_result_stress`);

--
-- Индексы таблицы `rezult_nicotin`
--
ALTER TABLE `rezult_nicotin`
  ADD PRIMARY KEY (`id_result_nicotin`);

--
-- Индексы таблицы `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Индексы таблицы `ser`
--
ALTER TABLE `ser`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `statistic`
--
ALTER TABLE `statistic`
  ADD PRIMARY KEY (`id_stat`),
  ADD KEY `FK_statistic_user_id_user` (`id_user`);

--
-- Индексы таблицы `tabb`
--
ALTER TABLE `tabb`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `test_nicotin`
--
ALTER TABLE `test_nicotin`
  ADD PRIMARY KEY (`id_t4`),
  ADD KEY `IDX_test_nicotin_id_result_nic` (`id_result_nic`);

--
-- Индексы таблицы `test_psiho`
--
ALTER TABLE `test_psiho`
  ADD PRIMARY KEY (`id_t1`);

--
-- Индексы таблицы `test_risk_diabet`
--
ALTER TABLE `test_risk_diabet`
  ADD PRIMARY KEY (`id_test3`),
  ADD KEY `FK_test_risk_diabet_result_diabet_id_result_diabet` (`id_result`);

--
-- Индексы таблицы `test_stress`
--
ALTER TABLE `test_stress`
  ADD PRIMARY KEY (`id_t2`),
  ADD KEY `FK_test_stress_table1_id_result_stress` (`id_result_stress`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `FK_user_role_id_role` (`id_role`);

--
-- Индексы таблицы `user_diagnoz`
--
ALTER TABLE `user_diagnoz`
  ADD PRIMARY KEY (`id_ud`),
  ADD KEY `FK_user_diagnoz_user_id_user` (`id_user`),
  ADD KEY `FK_user_diagnoz_diagnost_id_diagn` (`id_diagnoz`);

--
-- Индексы таблицы `user_test1`
--
ALTER TABLE `user_test1`
  ADD PRIMARY KEY (`id_u_t1`);

--
-- Индексы таблицы `user_test2`
--
ALTER TABLE `user_test2`
  ADD PRIMARY KEY (`id_u_t2`),
  ADD KEY `FK_user_test2_test_stress_id_t2` (`id_t2`);

--
-- Индексы таблицы `user_test3`
--
ALTER TABLE `user_test3`
  ADD PRIMARY KEY (`id_u_t3`),
  ADD KEY `FK_user_test3_test_risk_diabet_id_test3` (`id_test3`),
  ADD KEY `FK_user_test3_user_id_user` (`id_user`);

--
-- Индексы таблицы `user_test4`
--
ALTER TABLE `user_test4`
  ADD PRIMARY KEY (`id_u_t4`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_test4` (`id_test4`);

--
-- Индексы таблицы `usr_dani`
--
ALTER TABLE `usr_dani`
  ADD PRIMARY KEY (`id_dani`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `desdiagnoz`
--
ALTER TABLE `desdiagnoz`
  MODIFY `id_ddiagn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `diagnost`
--
ALTER TABLE `diagnost`
  MODIFY `id_diagn` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `expert_rez`
--
ALTER TABLE `expert_rez`
  MODIFY `id_dise` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `exp_dani`
--
ALTER TABLE `exp_dani`
  MODIFY `id_dani` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `exp_simptom_dise`
--
ALTER TABLE `exp_simptom_dise`
  MODIFY `id_simpt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `insystem`
--
ALTER TABLE `insystem`
  MODIFY `id_insystem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `koef`
--
ALTER TABLE `koef`
  MODIFY `id_koef` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `patient_simptom_dise`
--
ALTER TABLE `patient_simptom_dise`
  MODIFY `id_simpt_pat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `result_diabet`
--
ALTER TABLE `result_diabet`
  MODIFY `id_result_diabet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `result_stress`
--
ALTER TABLE `result_stress`
  MODIFY `id_result_stress` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `rezult_nicotin`
--
ALTER TABLE `rezult_nicotin`
  MODIFY `id_result_nicotin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `ser`
--
ALTER TABLE `ser`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `statistic`
--
ALTER TABLE `statistic`
  MODIFY `id_stat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `tabb`
--
ALTER TABLE `tabb`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `test_nicotin`
--
ALTER TABLE `test_nicotin`
  MODIFY `id_t4` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `test_psiho`
--
ALTER TABLE `test_psiho`
  MODIFY `id_t1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT для таблицы `test_risk_diabet`
--
ALTER TABLE `test_risk_diabet`
  MODIFY `id_test3` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `test_stress`
--
ALTER TABLE `test_stress`
  MODIFY `id_t2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT для таблицы `user_diagnoz`
--
ALTER TABLE `user_diagnoz`
  MODIFY `id_ud` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user_test1`
--
ALTER TABLE `user_test1`
  MODIFY `id_u_t1` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user_test2`
--
ALTER TABLE `user_test2`
  MODIFY `id_u_t2` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user_test3`
--
ALTER TABLE `user_test3`
  MODIFY `id_u_t3` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user_test4`
--
ALTER TABLE `user_test4`
  MODIFY `id_u_t4` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `usr_dani`
--
ALTER TABLE `usr_dani`
  MODIFY `id_dani` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `diagnost`
--
ALTER TABLE `diagnost`
  ADD CONSTRAINT `FK_diagnost_desiase_id_des` FOREIGN KEY (`id_simptom`) REFERENCES `desiase` (`id_des`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `expert_rez`
--
ALTER TABLE `expert_rez`
  ADD CONSTRAINT `expert_rez_ibfk_1` FOREIGN KEY (`id_exp`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `exp_simptom_dise`
--
ALTER TABLE `exp_simptom_dise`
  ADD CONSTRAINT `exp_simptom_dise_ibfk_1` FOREIGN KEY (`id_diagn`) REFERENCES `expert_rez` (`id_dise`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exp_simptom_dise_ibfk_2` FOREIGN KEY (`id_koef`) REFERENCES `koef` (`id_koef`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `insystem`
--
ALTER TABLE `insystem`
  ADD CONSTRAINT `FK_insystem_user_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `patient_simptom_dise`
--
ALTER TABLE `patient_simptom_dise`
  ADD CONSTRAINT `patient_simptom_dise_ibfk_1` FOREIGN KEY (`id_patient`) REFERENCES `user` (`id_user`);

--
-- Ограничения внешнего ключа таблицы `statistic`
--
ALTER TABLE `statistic`
  ADD CONSTRAINT `FK_statistic_user_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `test_nicotin`
--
ALTER TABLE `test_nicotin`
  ADD CONSTRAINT `test_nicotin_ibfk_1` FOREIGN KEY (`id_result_nic`) REFERENCES `rezult_nicotin` (`id_result_nicotin`);

--
-- Ограничения внешнего ключа таблицы `test_risk_diabet`
--
ALTER TABLE `test_risk_diabet`
  ADD CONSTRAINT `FK_test_risk_diabet_result_diabet_id_result_diabet` FOREIGN KEY (`id_result`) REFERENCES `result_diabet` (`id_result_diabet`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `test_stress`
--
ALTER TABLE `test_stress`
  ADD CONSTRAINT `FK_test_stress_table1_id_result_stress` FOREIGN KEY (`id_result_stress`) REFERENCES `result_stress` (`id_result_stress`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_user_role_id_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `user_diagnoz`
--
ALTER TABLE `user_diagnoz`
  ADD CONSTRAINT `FK_user_diagnoz_diagnost_id_diagn` FOREIGN KEY (`id_diagnoz`) REFERENCES `diagnost` (`id_diagn`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_user_diagnoz_user_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `user_test2`
--
ALTER TABLE `user_test2`
  ADD CONSTRAINT `FK_user_test2_test_stress_id_t2` FOREIGN KEY (`id_t2`) REFERENCES `test_stress` (`id_t2`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_user_test2_user_id_user` FOREIGN KEY (`id_u_t2`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
