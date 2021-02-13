-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2021 at 03:46 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qa_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `permission_login`
--

CREATE TABLE `permission_login` (
  `id` int(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permission_login`
--

INSERT INTO `permission_login` (`id`, `password`) VALUES
(1, '9b7d722b58370498cd39104b2d971978'),
(2, '3b77923bc05401fce448035af88c809c');

-- --------------------------------------------------------

--
-- Table structure for table `quest_ans`
--

CREATE TABLE `quest_ans` (
  `id` int(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quest_ans`
--

INSERT INTO `quest_ans` (`id`, `date`, `question`, `answer`) VALUES
(1, '2020-11-26 22:38:54', 'Ovo je test pitanje', 'Evo i test odgovor! :)'),
(18, '2020-11-26 22:40:10', 'Непосредно регулисање саобраћаја на путевима врше:', 'униформисани полицијски службеници'),
(19, '2020-11-26 22:41:24', 'Контролу над возачима и возилима у саобраћају на путевима ради примене прописа о безбедности саобраћаја врше:', '1. униформисани полицијски службеници\r\n2. полицијски службеници у грађанском оделу'),
(20, '2020-11-26 22:42:01', 'Непосредно регулисање саобраћаја у зони школе могу вршити:', '1. униформисани полицијски службеници \r\n2. школске саобраћајне патроле и саобраћајне патроле грађана'),
(21, '2020-11-26 22:42:56', 'На делу пута на коме се изводе радови непосредно регулисање саобраћаја могу вршити:', '1. радници извођача радова, односно управљача пута\r\n2. униформисани полицијски службеници'),
(22, '2020-11-26 22:43:59', 'Сваки учесник у саобраћају дужан је да се понаша:', '1. тако да предузме све потребне мере ради избегавања или отклањања опасних ситуација насталих понашањем других учесника у саобраћају, ако себе или другог тиме не доводи у опасност\r\n2. на начин којим неће ометати, угрозити или повредити друге учеснике'),
(23, '2020-11-26 22:44:23', 'Свако физичко лице власник, односно корисник возила:', 'дужан је да обезбеди да његова возила у саобраћају на путевима буду технички исправна'),
(24, '2020-11-26 22:45:06', 'У циљу безбедног учешћа деце у саобраћају породица има одговорност за:', 'стицање знања, вештина и навика деце, неопходних за безбедно учешће у саобраћају'),
(25, '2020-11-26 22:45:59', 'У циљу безбедног учешћа деце у саобраћају породица има одговорност за:', 'унапређивање и учвршћивање позитивних ставова и понашања деце, значајних за безбедно учешће у саобраћају'),
(26, '2020-12-04 16:13:21', 'Test1', 'Da jfjfsn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `permission_login`
--
ALTER TABLE `permission_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quest_ans`
--
ALTER TABLE `quest_ans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `permission_login`
--
ALTER TABLE `permission_login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quest_ans`
--
ALTER TABLE `quest_ans`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
