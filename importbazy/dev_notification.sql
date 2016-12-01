-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 01 Gru 2016, 16:48
-- Wersja serwera: 5.5.53-0ubuntu0.14.04.1
-- Wersja PHP: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `dev_notification`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `blockip`
--

CREATE TABLE IF NOT EXISTS `blockip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(2048) NOT NULL,
  `host` varchar(2048) NOT NULL,
  `description` varchar(2048) NOT NULL,
  `data` varchar(2048) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=156 ;

--
-- Zrzut danych tabeli `blockip`
--

INSERT INTO `blockip` (`id`, `ip`, `host`, `description`, `data`) VALUES
(16, '195.205.28.6', '195.205.28.6', 'hah', '2015-05-23 11:40:52'),
(19, '95.215.233.4', 'cr-rl4.e-siemianowice.pl', 'aa', '2015-05-23 11:51:05'),
(20, '83.29.181.93', 'buj93.neoplus.adsl.tpnet.pl', 'xdd', '2015-05-23 11:53:36'),
(21, '80.52.160.211', 'gvg211.internetdsl.tpnet.pl', 'xd', '2015-05-23 11:55:48'),
(22, '192.168.0.1', 'host', 'opois', '2016-11-12'),
(155, '123.125.55.3', '123.125.55.3', 'dwdw', '2016-11-28 18:48:33');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_admin`
--

CREATE TABLE IF NOT EXISTS `user_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `wydzial` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Zrzut danych tabeli `user_admin`
--

INSERT INTO `user_admin` (`id`, `username`, `password`, `wydzial`) VALUES
(2, 'Benny Whittaker', '12', NULL),
(3, 'Cherro', '123', 'Admin'),
(5, 'Sokół', '123', 'Los Santos Police Department'),
(6, 'Test', '098f6bcd4621d373cade4e832627b4f6', ''),
(7, 'test123', 'cc03e747a6afbbcbf8be7668acfebee5', ''),
(10, 'TestAlan', 'ec8b63c05f999a15a8c8567002a560a8', ''),
(12, 'dwd', '0ed3b2d31e94aed73be91c6b7ca626ef', ''),
(17, 'Cherro', '73f879f20975da82d5ffdcc645daf4aa', 'Admin'),
(21, 'Sokołek', '098f6bcd4621d373cade4e832627b4f6', 'Los Santos Police Department'),
(22, 'rcsdkrolowiepalomino', '98c493fdfc3dab8185a445e32bb58e8c', 'RCSD'),
(23, 'iksu', '6225a4ca3331afbedfe583179f49e619', 'Admin');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wpisy`
--

CREATE TABLE IF NOT EXISTS `wpisy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(2048) NOT NULL,
  `phone` varchar(2048) NOT NULL,
  `age` varchar(2048) NOT NULL,
  `eye` varchar(2048) NOT NULL,
  `hair` varchar(2048) NOT NULL,
  `adres` varchar(2048) NOT NULL,
  `job` varchar(2048) NOT NULL,
  `description` varchar(2048) NOT NULL,
  `global` varchar(2048) NOT NULL,
  `data` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `wydzial` varchar(255) NOT NULL,
  `edit` varchar(255) NOT NULL,
  `ip` varchar(2048) NOT NULL,
  `host` varchar(2048) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Zrzut danych tabeli `wpisy`
--

INSERT INTO `wpisy` (`id`, `name`, `phone`, `age`, `eye`, `hair`, `adres`, `job`, `description`, `global`, `data`, `status`, `wydzial`, `edit`, `ip`, `host`) VALUES
(25, 'Anes Beneventi', '1009072', '36', 'Piwne', 'Brunet', 'Los Santos, Vinewood 34', 'Chairman', 'Bijo mnie', 'http://devgaming.pl/user/3844-achmenek/', '2015-05-23 02:05:32', '<font color=#000>ARCHIWUM</font>', 'Federal Bureau Against Criminal Motorized Activity', '[Benny Whittaker]', '', ''),
(26, 'Stefan Achmen', '99799797', '12', 'nie wiem', 'nie wiem', 'nie wiem', 'ogladam south park', 'ogladalem south park i mi achmen napisal na ksype to dodaje', 'ok super konto', '2015-05-23 02:06:16', '<font color=#000>ARCHIWUM</font>', 'blachary', '[Benny Whittaker]', '', ''),
(27, 'dasdsa', 'asdasds', 'adasdas', 'dasdas', 'dasd', 'asdas', 'asdas', 'dasdas', 'asdasd', '2015-05-23 02:10:27', '<font color=#FFBF00><b>W TRAKCIE REALIZACJI</b></font>', 'suki</font>', 'Arthur Clark', '', ''),
(28, 'asdas', 'asdas', 'asdas', 'asdas', 'asdas', 'asdas', 'asdas', 'asdas', 'asdas', '2015-05-23 10:35:31', '<font color=#000><b>OCZEKUJE</b></font>', 'suki</font>', '', '', ''),
(29, 'Achmen', 'Achmen', 'Achmen', 'Achmen', 'Achmen', 'Achmen', 'Achmen', 'Achmen', 'Achmen', '2015-05-23 10:50:03', '<font color=#04B404><b>ROZPATRZONY POZYTYWNIE</b></font>', 'Brak', '[Benny Whittaker]', '', ''),
(30, 'dasdsa', 'dasdsa', 'dasdsa', 'dasdsa', 'dasdsa', 'dasdsa', 'dasdsa', 'dasdsa', 'dasdsa', '2015-05-23 10:57:38', '<font color=#000>OCZEKUJE</font>', 'Brak', '', '178.235.123.214', '178235123214.skarzysko.vectranet.pl'),
(31, 'Billy Ziomutek', '65812147', '29', 'BrÄ…z', 'Blond', 'Los Santos, East Beach, Saints BLVD. 24/5.', 'Sprzedawca heroiny, szef kartelu narkotykowego', 'Bo szedÅ‚em sobie do domu, spotkaÅ‚em takiego pana i wrÃ³ciÅ‚em tam gdzie wczeÅ›niej byÅ‚em.', 'http://devgaming.pl/user/21147-cllassic/', '2015-05-23 11:36:56', '<font color=#000>OCZEKUJE</font>', 'Brak', '', '195.205.28.6', '195.205.28.6'),
(32, 'MaciuÅ› Wiercipjenta', '666 666 69', '97', 'fjolet', 'czerfone', 'Dla przykÅ‚adu: Los Santos Ganton 18', 'klukin dzwon', 'Bo oni mnie bili', 'achmen.pl', '2015-05-23 11:37:41', '<font color=#000>OCZEKUJE</font>', 'Brak', '', '95.215.233.4', 'cr-rl4.e-siemianowice.pl'),
(33, 'Å‚adne', 'fajny', 'akurat', 'Å‚adne', 'Å‚adne', 'fajny', 'fajna', ':(', ':(', '2015-05-23 11:39:49', '<font color=#000><b>OCZEKUJE</b></font>', 'Federal Bureau of Investigation', '[Benny Whittaker]', '109.241.181.116', '109241181116.ostroleka.vectranet.pl'),
(34, 'Leigh Ethridge', '112-015', '50', 'niebieski', 'blond', 'Los Santos, Market 12', 'Pig Pen, Dziwkacz', 'Åšwiadek zabÃ³jstwa, F/2223/21223', 'http://devgaming.pl/user/351-barto/', '2015-05-23 11:45:03', '<font color=#000>OCZEKUJE</font>', 'Brak', '', '5.173.215.66', 'user-5-173-215-66.play-internet.pl'),
(35, 'testowytestowytestowy', 'testowytestowytestowy', 'testowytestowytestowy', 'testowytestowy', 'testowytestowy', 'testowytestowytestowy', 'testowytestowy', 'testowytestowytestowytestowytestowytestowytestowytestowytestowytestowytestowytestowytestowytestowytestowytestowytestowytestowytestowytestowy', 'testowy', '2015-05-23 11:51:26', '<font color=#000>OCZEKUJE</font>', 'Brak', '', '83.29.181.93', 'buj93.neoplus.adsl.tpnet.pl'),
(36, 'Jeffrey McDowell', '056-124-43', '27', 'niebieskie', 'czarny', 'Los Santos, Hotel Centrum', 'Barman, Fresh and Tasty', 'asdasdasfsdgsdfhsgjsgjsgsgj', 'asdasdasd', '2015-05-23 11:52:50', '<font color=#000>ARCHIWUM</font>', 'Brak', '[Benny Whittaker]', '80.52.160.211', 'gvg211.internetdsl.tpnet.pl'),
(37, 'Donald Trump', '666', '14', 'BiaÅ‚y', 'BiaÅ‚y', 'Czarnobyl', 'GÃ³wnojazd w firmie Darku', 'EEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE', 'dwdwdwdwd', '2016-11-24 19:00:40', '<font color=#000>OCZEKUJE</font>', 'Brak', '', '::1', 'DESKTOP-KLVE637'),
(38, 'Dupa Dupa', '123666', '12', 'Niebieskie', 'Czarne', 'Los Santos GÃ³wno Street', 'dddd', 'dwdwdwdwdwdwdwdwdwdwd', 'chuj cie to obchodzi frajerze', '2016-11-26 11:07:26', '<font color=#000>OCZEKUJE</font>', '', '', '::1', 'DESKTOP-KLVE637'),
(39, 'Spejson', '13131', '131', '1', '1', '1', '2047', '1', '1', '2016-11-26 11:09:30', '<font color=#000>OCZEKUJE</font>', '', '', '::1', 'DESKTOP-KLVE637'),
(40, 'Dupa Dupa 2', 'd', 'd', 'd', 'd', 'd', '2047', 'd', 'd', '2016-11-26 11:10:49', '<font color=#000>OCZEKUJE</font>', '', '', '::1', 'DESKTOP-KLVE637'),
(41, 'Donald Trump 22', 'w', 'w', 'w', 'w', 'w', '2047', 'w', 'w', '2016-11-26 11:12:15', '<font color=#000>OCZEKUJE</font>', '', '', '::1', 'DESKTOP-KLVE637'),
(43, 'Al', 'Alan', 'Alan', 'Alan', 'Alan', 'Alan', '2044', 'Alan', 'ddwdwd', '2016-11-26 11:16:52', '<font color=#000>OCZEKUJE</font>', 'Red Country Sherrif''s Department', '', '::1', 'DESKTOP-KLVE637'),
(44, 'wdw', 'wdwd', 'dwdw', 'dwdw', 'dwdw', 'dwdw', '2041', 'dwdwdwd', 'dwdwd', '2016-11-26 11:49:17', '<font color=#000>OCZEKUJE</font>', 'Federal Bureau of Investigation', '', '::1', 'DESKTOP-KLVE637'),
(45, 'dwdwd', 'dwdwd', 'dwdwd', 'dwdwd', 'dwdwd', 'dwdwd', '2043', 'dwdwd', 'dwdwd', '2016-11-26 11:50:08', '<font color=#000>OCZEKUJE</font>', 'Los Santos Police Department', '', '::1', 'DESKTOP-KLVE637'),
(46, 'wdwdw', 'Å‚', 'Å‚', 'Å‚', 'Å‚', 'Å‚', '2041', 'Å‚Å‚Å‚Ä…Ä…Ä…Ä…', 'wdwdwd', '2016-11-26 11:51:56', '<font color=#000>OCZEKUJE</font>', 'RCSD', '', '::1', 'DESKTOP-KLVE637'),
(47, 'TESTOWY TEST', 'TESTOWY TEST', 'TESTOWY TEST', 'TESTOWY TEST', 'TESTOWY TEST', 'TESTOWY TEST', 'TESTOWY TEST', 'TESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TEST', 'TESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TESTTESTOWY TEST', '2016-11-27 12:13:06', '<font color=#000>OCZEKUJE</font>', 'Red County Sherrif''s Department', '', '93.105.181.194', '093105181194.dynamic-ww-04.vectranet.pl'),
(48, 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', '2016-11-27 12:14:57', '<font color=#DF013A><b>ROZPATRZONY NEGATYWNIE</b></font>', 'Los Santos Police Department</font>', '[rcsdkrolowiepalomino]', '195.93.162.217', '195.93.162.217'),
(49, 'Bil huwer', '2137', '41', 'czarny', 'siwy', 'pd hq', 'cia special agent', 'pomocy', 'heh', '2016-11-28 18:29:15', '<font color=#000>OCZEKUJE</font>', 'Federal Bureau of Investigation', '', '87.105.138.23', 'dynamic-87-105-138-23.ssp.dialog.net.pl');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
