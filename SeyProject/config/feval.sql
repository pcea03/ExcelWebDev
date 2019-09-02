-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2019 at 10:39 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feval`
--

-- --------------------------------------------------------

--
-- Table structure for table `evaluate_tbl`
--

CREATE TABLE `evaluate_tbl` (
  `evaID` int(11) NOT NULL,
  `evaTitle` varchar(255) NOT NULL,
  `evaDesc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluate_tbl`
--

INSERT INTO `evaluate_tbl` (`evaID`, `evaTitle`, `evaDesc`) VALUES
(1, 'Instructor', 'Sir Jonathan'),
(4, 'Training', 'Web Development');

-- --------------------------------------------------------

--
-- Table structure for table `question_tbl`
--

CREATE TABLE `question_tbl` (
  `questID` int(11) NOT NULL,
  `evalID` int(11) NOT NULL,
  `questno` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_tbl`
--

INSERT INTO `question_tbl` (`questID`, `evalID`, `questno`, `question`) VALUES
(1, 1, '1', 'Does s/he start his class on time?'),
(2, 1, '2', 'is s/he well groomed and properly attired'),
(3, 1, '3', 'does s/he have a clear and audible voice?'),
(4, 4, '1', 'Are the materials and equipment available before s/he starts the class?'),
(5, 4, '2', 'Are the printed learning materials clear, up-to-date, and well organized?'),
(6, 4, '3', 'Do you feel adequately prepared to complete the exercises based on the lecture?');

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `stdid` int(11) NOT NULL,
  `stdFname` varchar(255) NOT NULL,
  `stdLname` varchar(255) NOT NULL,
  `stdEmail` varchar(255) NOT NULL,
  `userLvl` varchar(255) NOT NULL,
  `stdPass` varchar(255) NOT NULL,
  `stdAdd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`stdid`, `stdFname`, `stdLname`, `stdEmail`, `userLvl`, `stdPass`, `stdAdd`) VALUES
(1, 'Psalter Angelo', 'Cea', 'psaltercea@gmail.com', 'admin', '123', 'Pasig City'),
(7, 'Neil', 'Chan', 'nchan@gmail.com', 'student', '123', 'Dyan City');

-- --------------------------------------------------------

--
-- Table structure for table `transactions_tbl`
--

CREATE TABLE `transactions_tbl` (
  `ansId` int(11) NOT NULL,
  `stdId` int(11) NOT NULL,
  `evaId` int(11) NOT NULL,
  `questNo` int(11) NOT NULL,
  `answer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions_tbl`
--

INSERT INTO `transactions_tbl` (`ansId`, `stdId`, `evaId`, `questNo`, `answer`) VALUES
(46, 7, 1, 1, 3),
(47, 7, 1, 2, 4),
(48, 7, 1, 3, 5),
(49, 7, 4, 1, 1),
(50, 7, 4, 2, 2),
(51, 7, 4, 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `evaluate_tbl`
--
ALTER TABLE `evaluate_tbl`
  ADD PRIMARY KEY (`evaID`);

--
-- Indexes for table `question_tbl`
--
ALTER TABLE `question_tbl`
  ADD PRIMARY KEY (`questID`);

--
-- Indexes for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD PRIMARY KEY (`stdid`);

--
-- Indexes for table `transactions_tbl`
--
ALTER TABLE `transactions_tbl`
  ADD PRIMARY KEY (`ansId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `evaluate_tbl`
--
ALTER TABLE `evaluate_tbl`
  MODIFY `evaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `question_tbl`
--
ALTER TABLE `question_tbl`
  MODIFY `questID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `stdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transactions_tbl`
--
ALTER TABLE `transactions_tbl`
  MODIFY `ansId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
