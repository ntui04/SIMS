-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2023 at 01:44 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sims`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `coID` int(255) NOT NULL,
  `college` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`coID`, `college`) VALUES
(1, 'engneering and technology (CET)'),
(2, 'archrchitecture and construction technology (COACT)'),
(3, 'information and communication technology (COICT)'),
(4, 'science and technical education (COSTE)'),
(5, 'hummanities and bussness studies (COHBS)');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `depID` int(255) NOT NULL,
  `coID` int(255) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`depID`, `coID`, `department`) VALUES
(1, 1, 'civil engineering'),
(2, 1, 'electrical and power engineering'),
(3, 1, 'mechanical and industrial engineering'),
(4, 1, 'chemical engineering'),
(5, 2, 'architecture and art design'),
(6, 2, 'urban planning'),
(7, 2, 'construction management'),
(8, 3, 'computer science and engineering'),
(9, 3, 'electronicts and telecomm engineering'),
(10, 3, 'information system and technology'),
(11, 3, 'informatics'),
(12, 4, 'applied science'),
(13, 4, 'medical science and technology'),
(14, 4, 'natural resources'),
(15, 4, 'technical education'),
(16, 5, 'bussiness management'),
(17, 5, 'humanities');

-- --------------------------------------------------------

--
-- Table structure for table `kozi`
--

CREATE TABLE `kozi` (
  `kozID` int(255) NOT NULL,
  `depID` int(255) NOT NULL,
  `kozi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kozi`
--

INSERT INTO `kozi` (`kozID`, `depID`, `kozi`) VALUES
(1, 1, ' Civil Engineering'),
(2, 1, 'Highway Engineering'),
(3, 2, 'Electrical and Electronic Engineering'),
(4, 2, 'Automotive and Autoelectrical Engineering'),
(5, 3, 'Mechatronics Engineering;'),
(6, 3, 'Mechanical Engineering with Industrial Safety and Occupational Health;'),
(7, 4, 'chemical engineering'),
(8, 5, 'Architecture'),
(9, 6, 'Technology in Landscape Architecture'),
(10, 7, 'construction management'),
(11, 8, 'Computer Engineering'),
(12, 9, 'Electronic and Telecommunication Engineering'),
(13, 10, 'Information and Communication Technology'),
(14, 11, 'informatics'),
(15, 8, 'Computer Science'),
(16, 12, 'Biomedical Equipment Engineering'),
(17, 12, 'Laboratory Science and Technology'),
(18, 12, ' Food Science and Technology'),
(19, 13, 'biometric'),
(20, 14, 'Natural Resources Conservation.'),
(21, 15, 'Education in Architectural Technology'),
(22, 15, 'Chemistry and Biology'),
(23, 15, 'Technical Education in Mechanical Engineering'),
(24, 15, 'Education in Civil Engineering'),
(25, 15, ' Chemistry and Physics'),
(26, 15, ' Physics and Mathematics'),
(27, 15, 'Education in Mechanical Engineering'),
(28, 16, 'Business Administration'),
(29, 16, 'Accounting and Finance;'),
(30, 16, 'Human Resources Management'),
(31, 17, 'Agribusiness with Technology'),
(32, 17, 'Procurement and Supply Chain Management'),
(33, 17, 'Marketing and Entrepreneurship'),
(34, 17, 'Administration in Accounting and Finance');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(255) NOT NULL,
  `regno` int(255) NOT NULL,
  `jinalakwanza` varchar(255) NOT NULL,
  `jinalamwisho` varchar(255) NOT NULL,
  `baruapepe` varchar(255) NOT NULL,
  `mwaka` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `kozi` varchar(255) NOT NULL,
  `namba` int(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `regno`, `jinalakwanza`, `jinalamwisho`, `baruapepe`, `mwaka`, `college`, `department`, `kozi`, `namba`, `password`) VALUES
(1, 2032, 'costa', 'hazey', '', '', '', '', '', 0, ''),
(2, 2032, 'costa', 'hazey', 'costa@gmail.com', '06227473', 'ist', 'ict', '2022/2023', 0, '1q'),
(3, 2032, 'costa', 'hazey', 'costa@gmail.com', '06227473', 'department', 'kozi', '2022/2023', 0, 'qw21'),
(4, 0, '', '', '', '', 'Civil engineering', '', '', 0, ''),
(5, 0, '', '', '', '', 'department', 'kozi', '', 0, ''),
(6, 0, '', '', '', '', '', 'kozi', '', 0, ''),
(7, 0, '', '', '', '', 'urban planning', 'kozi', '', 0, ''),
(8, 0, '', '', '', '', 'civil engineering', 'kozi', '', 0, ''),
(9, 0, '', '', '', '', 'construction management', 'kozi', '', 0, ''),
(10, 0, '', '', '', '', 'informatics', 'kozi', '', 0, ''),
(11, 0, '', '', '', '', 'civil engineering', 'kozi', '', 0, ''),
(12, 0, '', '', '', '', 'mechanical and industrial engineering', 'Laboratory Science and Technology', '', 0, ''),
(13, 0, '', '', '', '', 'construction management', 'informatics', '', 0, ''),
(14, 0, '', '', '', '', 'department', 'kozi', '', 0, ''),
(15, 0, '', '', '', '06227473', 'civil engineering', 'Education in Architectural Technology', '', 0, ''),
(16, 2032, 'costa', 'hazey', 'costa@gmail.com', '06227473', 'civil engineering', 'Natural Resources Conservation.', '2022/2023', 0, '1qa'),
(17, 2032, 'costa', 'hazey', 'costa@gmail.com', '06227473', 'civil engineering', 'Civil Engineering', '2022', 0, '1qa'),
(18, 2032, 'costa', 'hazey', 'costa@gmail.com', '06227473', 'information and communication technology (COICT)', 'civil engineering', 'Computer Engineering', 2022, '1qa'),
(19, 0, '', '', '', '', 'engneering and technology (CET)', '', 'kozi', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(255) NOT NULL,
  `regno` int(255) NOT NULL,
  `jinalakwanza` varchar(255) NOT NULL,
  `jinalamwisho` varchar(255) NOT NULL,
  `baruapepe` varchar(255) NOT NULL,
  `namba` int(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `regno`, `jinalakwanza`, `jinalamwisho`, `baruapepe`, `namba`, `college`, `department`, `password`) VALUES
(1, 2032, 'costa', 'hazey', 'costa@gmail.com', 6227473, 'ict', 'ist', 'qa'),
(2, 2032, 'costa', 'hazey', 'costa@gmail.com', 6227473, '', '', 'qa'),
(3, 0, '', '', '', 0, 'college', 'department', ''),
(4, 0, '', '', '', 0, 'college', 'department', ''),
(5, 0, '', '', '', 0, 'college', 'department', ''),
(6, 0, '', '', '', 0, 'engneering and technology (CET)', 'civil engineering', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`coID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`depID`),
  ADD KEY `coID` (`coID`);

--
-- Indexes for table `kozi`
--
ALTER TABLE `kozi`
  ADD PRIMARY KEY (`kozID`),
  ADD KEY `depID` (`depID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `coID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `depID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kozi`
--
ALTER TABLE `kozi`
  MODIFY `kozID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`coID`) REFERENCES `college` (`coID`);

--
-- Constraints for table `kozi`
--
ALTER TABLE `kozi`
  ADD CONSTRAINT `kozi_ibfk_1` FOREIGN KEY (`depID`) REFERENCES `department` (`depID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
