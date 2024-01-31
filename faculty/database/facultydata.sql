-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2024 at 12:18 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facultydata`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_test`
--

CREATE TABLE `add_test` (
  `id` int(11) NOT NULL,
  `Subject` varchar(250) NOT NULL,
  `Question1` varchar(250) NOT NULL,
  `Question2` varchar(250) NOT NULL,
  `Question3` varchar(250) NOT NULL,
  `Question4` varchar(250) NOT NULL,
  `Question5` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_test`
--

INSERT INTO `add_test` (`id`, `Subject`, `Question1`, `Question2`, `Question3`, `Question4`, `Question5`) VALUES
(1, 'Chemistry', 'what is h2o?', 'hcl?', 'what is chemistry?', 'im looking good', 'define solid state'),
(2, 'English', 'Question1', 'Question2', 'Question3', 'Question4', 'Question5'),
(3, 'Commerce', 'Question1', 'Question2', 'Question3', 'Question4', 'Question5'),
(4, 'Business Administration', 'Question1', 'Question2', 'Question3', 'Question4', 'Question5'),
(5, 'Computer Apllication', 'Question1', 'Question2', 'Question3', 'Question4', 'Question5');

-- --------------------------------------------------------

--
-- Table structure for table `adlogin`
--

CREATE TABLE `adlogin` (
  `adminname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adlogin`
--

INSERT INTO `adlogin` (`adminname`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `Staff_Name` varchar(100) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Result` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`Staff_Name`, `Subject`, `Result`) VALUES
('Prakash', 'Chemistry', 'pass'),
('Habzar', 'Commerce', 'pass'),
('Rahman', 'Commerce', 'pass'),
('Rahman', 'Commerce', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `staffanswer`
--

CREATE TABLE `staffanswer` (
  `Subject` varchar(255) NOT NULL,
  `Answer1` varchar(200) NOT NULL,
  `Answer2` varchar(200) NOT NULL,
  `Answer3` varchar(200) NOT NULL,
  `Answer4` varchar(200) NOT NULL,
  `Answer5` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staffanswer`
--

INSERT INTO `staffanswer` (`Subject`, `Answer1`, `Answer2`, `Answer3`, `Answer4`, `Answer5`) VALUES
(' Commerce', 'ghfgh', 'gjhfg', 'khkg', 'jgjh', 'mgjh');

-- --------------------------------------------------------

--
-- Table structure for table `staffdata`
--

CREATE TABLE `staffdata` (
  `Staff_Name` varchar(100) NOT NULL,
  `Staff_Email` varchar(100) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staffdata`
--

INSERT INTO `staffdata` (`Staff_Name`, `Staff_Email`, `Subject`, `Password`) VALUES
('Habzar', 'habzar@gmail.com', 'Commerce', 'habzae'),
('Rahman', 'rahman@gmail.com', 'Commerce', 'rahman');

-- --------------------------------------------------------

--
-- Table structure for table `studentdata`
--

CREATE TABLE `studentdata` (
  `id` int(11) NOT NULL,
  `Stdname` varchar(100) NOT NULL,
  `Stdemail` varchar(100) NOT NULL,
  `Class` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentdata`
--

INSERT INTO `studentdata` (`id`, `Stdname`, `Stdemail`, `Class`, `Password`) VALUES
(4, 'swathi', 'arrahmantdr@gmail.com', 'Commerce', 'swathi');

-- --------------------------------------------------------

--
-- Table structure for table `studentreview`
--

CREATE TABLE `studentreview` (
  `id` int(11) NOT NULL,
  `Stud_name` varchar(100) NOT NULL,
  `Sub_Teacher` varchar(100) NOT NULL,
  `Review` varchar(100) NOT NULL,
  `Rating` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentreview`
--

INSERT INTO `studentreview` (`id`, `Stud_name`, `Sub_Teacher`, `Review`, `Rating`) VALUES
(10, 'abdul', 'B.Com', 'good teacher habzar', '5star'),
(15, 'swathi', 'Commerce', 'good teaching', '5star');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_test`
--
ALTER TABLE `add_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentdata`
--
ALTER TABLE `studentdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentreview`
--
ALTER TABLE `studentreview`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_test`
--
ALTER TABLE `add_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `studentdata`
--
ALTER TABLE `studentdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `studentreview`
--
ALTER TABLE `studentreview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
