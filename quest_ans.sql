-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2020 at 02:41 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(1, '2020-11-15 23:27:21', 'Ovo je test pitsnje', 'Evo i test odgovor! :)'),
(2, '2020-11-16 00:15:10', 'Neki test', 'Jej uspesno :)'),
(3, '2020-11-16 00:17:17', 'testic', 'jej'),
(5, '2020-11-24 13:36:59', 'aaa', 'bbb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quest_ans`
--
ALTER TABLE `quest_ans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quest_ans`
--
ALTER TABLE `quest_ans`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
