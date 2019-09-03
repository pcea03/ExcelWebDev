-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2019 at 08:52 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

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
  `evaDesc` varchar(255) NOT NULL,
  `totalq` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluate_tbl`
--

INSERT INTO `evaluate_tbl` (`evaID`, `evaTitle`, `evaDesc`, `totalq`, `image`) VALUES
(1, 'Instructor', 'Sir Jonathan', 3, 'instructor.png'),
(4, 'Training', 'Web Development', 3, 'house.png');

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
(2, 1, '2', 'Does s/he carry himself well?'),
(3, 1, '3', 'Does s/he have a clear and audible voice?'),
(4, 4, '1', 'Are the materials and equipment available before s/he starts the class?'),
(5, 4, '2', 'Are the printed learning materials clear, up-to-date, and well organized?'),
(6, 4, '3', 'Do you feel adequately prepared to complete the exercises based on the lecture?'),
(30, 1, '4', 'Does s/he attend class regularly'),
(31, 4, '4', 'Are you satisfied with the training?');

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
(7, 'Neil', 'Chanasdfdsafadsfsadf', 'nchan@gmail.com', 'student', '123', 'Dyan City'),
(9, 'Jan', 'Mateo', 'jmat@gmail.com', 'student', '123', 'Marikina City'),
(10, 'Neth', 'Santiago', 'neths@gmail.com', 'student', '123', 'Marikina City'),
(12, 'Versie ', 'Banning', 'vbann@gmail.com', 'student', '123', 'New york'),
(13, ' Elda ', 'Chamorro', 'echam@gmail.com', 'student', '123', 'London'),
(14, 'Shanelle', 'Endicott', 'sendi@gmail.com', 'student', '123', 'Paris'),
(15, 'Alejandra', 'Darrigo', 'adarr@gmail.com', 'student', '123', 'Davao'),
(16, 'Diedra', 'Maheu', 'dieha@gmail.com', 'student', '123', 'Marikina'),
(17, 'Lissa', 'Henninger', 'lhenn@gmail.com', 'student', '123', 'Pangasinan'),
(18, 'Keren', 'Stucker', 'kstuc@gmail.com', 'student', '123', 'Laguna'),
(19, 'Renetta', 'Connolly', 'recon@gmail.com', 'student', '123', 'Baguio'),
(20, 'Laquanda', 'Lea', 'lale@gmail.com', 'student', '123', 'Tarlac'),
(21, 'Samantha', 'Gourley', 'sagou@gmail.com', 'student', '123', 'Pasig'),
(22, 'Jarred', 'Takahashi', 'jatak@gmail.com', 'student', '123', 'Bolinao'),
(23, 'Saul', 'Voges', 'savo@gmail.com', 'student', '123', 'Pangasinan'),
(24, 'Patti', 'Wilborn', 'pawil@gmail.com', 'student', '123', 'Paraniaque'),
(25, 'Lynd', 'Frederickson', 'lynfre@gmail.com', 'student', '123', 'Zamboanga'),
(26, 'Vannesa', 'Josephs', 'vajo@gmail.com', 'student', '123', 'Mindanao'),
(27, 'Verdie', 'Seller', 'vese@gmail.com', 'student', '123', 'Subic'),
(28, 'Linnie', 'Winningham', 'liwin@gmail.com', 'student', '123', 'Marikina'),
(29, 'Cinthia', 'Cocco', 'cico@gmail.com', 'student', '123', 'Cubao'),
(30, 'Sally', 'Caddy', 'sacad@gmail.com', 'student', '123', 'Pasig'),
(31, 'Hae', 'Prideaux', 'hapri@gmail.com', 'student', '123', 'Iriga'),
(32, 'Delcie', 'Dones', 'dedon@gmail.com', 'student', '123', 'Apitong'),
(33, 'Cammie', 'Pfarr', 'Camp@gmail.com', 'student', '123', 'Montalban'),
(34, 'Deidre', 'Cilley', 'daci@gmail.com', 'student', '123', 'Cainta'),
(35, 'Cordi', 'Uhrig', 'couh@gmail.com', 'student', '123', 'katipunan'),
(36, 'Nilda', 'Mccaughey', 'nimcc@gmail.com', 'student', '123', 'Ligaya'),
(37, 'Pierre', 'Scheu', 'piech@gmail.com', 'student', '123', 'Roosevelt'),
(38, 'Parker', 'Thaxton', 'parth@gmail.com', 'student', '123', 'Paraluman'),
(39, 'Shayna', 'Haymaker', 'shahay@gmail.com', 'student', '123', 'San Mateo'),
(40, 'Ursula', 'Stever', 'urste@gmail.com', 'student', '123', 'Rizal'),
(41, 'Alaina', 'Hollier', 'alhol@gmail.com', 'student', '123', 'Riverbank'),
(42, 'Bruno', 'Pando', 'brupan@gmail.com', 'student', '123', 'Barangka'),
(43, 'Sharon', 'Arevalo', 'shaare@gmail.com', 'student', '123', 'Pasig');

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
(61, 9, 1, 1, 2),
(62, 9, 1, 2, 3),
(63, 9, 1, 3, 4),
(64, 7, 1, 1, 4),
(65, 7, 1, 2, 4),
(66, 7, 1, 3, 4);

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
  MODIFY `questID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `stdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `transactions_tbl`
--
ALTER TABLE `transactions_tbl`
  MODIFY `ansId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
