-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 10:48 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitnessgymdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_no` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `trainerID` int(11) NOT NULL,
  `dateOfAppointment` date NOT NULL,
  `timeOfAppointment` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_no`, `username`, `trainerID`, `dateOfAppointment`, `timeOfAppointment`) VALUES
(2, 'Lee22', 1, '2021-05-28', '16:47:17'),
(3, 'Lee22', 1, '2021-05-28', '16:47:56'),
(4, 'Lee22', 3, '2021-05-28', '16:51:38'),
(8, 'Lee22', 1, '2021-05-05', '19:57:09'),
(15, 'Lee22', 2, '2021-05-14', '23:28:41'),
(16, 'Lee22', 4, '2021-05-03', '23:29:02');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` char(1) NOT NULL,
  `weight` double NOT NULL,
  `height` double NOT NULL,
  `bmi` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `password`, `fname`, `lname`, `birthdate`, `gender`, `weight`, `height`, `bmi`) VALUES
('Lee22', '123456', 'Buuble', 'Bee', '2000-10-24', 'M', 75, 167, 26.89),
('user1', '123456', 'Jilcres', 'Datoy', '2021-04-28', 'M', 6533, 32, 63798.83);

-- --------------------------------------------------------

--
-- Table structure for table `fitnessprogram`
--

CREATE TABLE `fitnessprogram` (
  `programID` int(11) NOT NULL,
  `programName` varchar(50) NOT NULL,
  `dietRoutine` varchar(50) NOT NULL,
  `trainerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fitnessprogram`
--

INSERT INTO `fitnessprogram` (`programID`, `programName`, `dietRoutine`, `trainerID`) VALUES
(1, 'Low Intensity Program', 'Modified Plant-based Diet', 1),
(2, 'Medium Intensity Program', 'Low-carb Diet', 2),
(3, 'High Intensity Program', 'The Paleo Diet', 3),
(4, 'Athlete-level Intensity Program', 'Protein-Rich Diet', 4);

-- --------------------------------------------------------

--
-- Table structure for table `fitnesstrainer`
--

CREATE TABLE `fitnesstrainer` (
  `trainerID` int(11) NOT NULL,
  `trainer_fname` varchar(50) NOT NULL,
  `trainer_lname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fitnesstrainer`
--

INSERT INTO `fitnesstrainer` (`trainerID`, `trainer_fname`, `trainer_lname`) VALUES
(1, 'Olivia', 'Skye'),
(2, 'Noah', 'Jordan'),
(3, 'Chris', 'Miliano'),
(4, 'David', 'Bryant');

-- --------------------------------------------------------

--
-- Table structure for table `trainerspecialty`
--

CREATE TABLE `trainerspecialty` (
  `trainerID` int(11) NOT NULL,
  `specialty` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainerspecialty`
--

INSERT INTO `trainerspecialty` (`trainerID`, `specialty`) VALUES
(1, 'Yoga'),
(2, 'Cardio Exercises'),
(3, 'Weight Lifting'),
(4, 'Body Building');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_no`),
  ADD KEY `username` (`username`),
  ADD KEY `trainerID` (`trainerID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `fitnessprogram`
--
ALTER TABLE `fitnessprogram`
  ADD PRIMARY KEY (`programID`),
  ADD KEY `trainerID` (`trainerID`);

--
-- Indexes for table `fitnesstrainer`
--
ALTER TABLE `fitnesstrainer`
  ADD PRIMARY KEY (`trainerID`);

--
-- Indexes for table `trainerspecialty`
--
ALTER TABLE `trainerspecialty`
  ADD KEY `trainerspecialty_ibfk_1` (`trainerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `fitnessprogram`
--
ALTER TABLE `fitnessprogram`
  MODIFY `programID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fitnesstrainer`
--
ALTER TABLE `fitnesstrainer`
  MODIFY `trainerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`username`) REFERENCES `customer` (`username`) ON DELETE CASCADE,
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`trainerID`) REFERENCES `fitnesstrainer` (`trainerID`);

--
-- Constraints for table `fitnessprogram`
--
ALTER TABLE `fitnessprogram`
  ADD CONSTRAINT `fitnessprogram_ibfk_1` FOREIGN KEY (`trainerID`) REFERENCES `fitnesstrainer` (`trainerID`);

--
-- Constraints for table `trainerspecialty`
--
ALTER TABLE `trainerspecialty`
  ADD CONSTRAINT `trainerspecialty_ibfk_1` FOREIGN KEY (`trainerID`) REFERENCES `fitnesstrainer` (`trainerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
