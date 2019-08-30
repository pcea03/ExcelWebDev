-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2019 at 10:22 AM
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
  `evaName` varchar(255) NOT NULL,
  `evaDesc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluate_tbl`
--

INSERT INTO `evaluate_tbl` (`evaID`, `evaName`, `evaDesc`) VALUES
(1, 'Instructor', 'Sir Jonathan'),
(4, 'Training Center', 'Excel');

-- --------------------------------------------------------

--
-- Table structure for table `question_tbl`
--

CREATE TABLE `question_tbl` (
  `evalID` int(11) NOT NULL,
  `questno` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_tbl`
--

INSERT INTO `question_tbl` (`evalID`, `questno`, `question`) VALUES
(1, '1', 'Does s/he start his class on time?'),
(1, '2', 'is s/he well groomed and properly attired'),
(1, '3', 'does s/he have a clear and audible voice?');

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `stdid` int(11) NOT NULL,
  `stdFname` varchar(255) NOT NULL,
  `stdLname` varchar(255) NOT NULL,
  `stdEmail` varchar(255) NOT NULL,
  `stdPass` varchar(255) NOT NULL,
  `stdAdd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`stdid`, `stdFname`, `stdLname`, `stdEmail`, `stdPass`, `stdAdd`) VALUES
(1, 'Psalter Angelo', 'Cea', 'psaltercea@gmail.com', '123', 'Pasig City'),
(2, 'Neil', 'Chan', 'nchan@gmail.com', '1234', 'Paraniaque'),
(3, 'Jan Maurice', 'Mateo', 'jmmateo@gmail.com', '12345', 'Marikina'),
(4, 'Jomer', 'Carlo', 'jcarlo@gmail.com', '123456', 'Cainta');

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
(1, 1, 1, 1, 5),
(2, 1, 1, 2, 5),
(3, 1, 1, 3, 3),
(4, 2, 1, 1, 3),
(5, 2, 1, 2, 5),
(6, 2, 1, 3, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `evaluate_tbl`
--
ALTER TABLE `evaluate_tbl`
  ADD PRIMARY KEY (`evaID`);

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
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `stdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `transactions_tbl`
--
ALTER TABLE `transactions_tbl`
  MODIFY `ansId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
