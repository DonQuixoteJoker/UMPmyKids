-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2022 at 07:07 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umpmykids`
--

-- --------------------------------------------------------

--
-- Table structure for table `kid`
--

CREATE TABLE `kid` (
  `kidID` varchar(10) NOT NULL,
  `kidName` varchar(40) NOT NULL,
  `kidGender` varchar(10) NOT NULL,
  `kidDob` int(11) NOT NULL,
  `kidRace` varchar(10) NOT NULL,
  `kidAllergy` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `manpower`
--

CREATE TABLE `manpower` (
  `mpID` varchar(10) NOT NULL,
  `userID` varchar(10) NOT NULL,
  `mpName` varchar(30) NOT NULL,
  `mpPhoneNo` varchar(10) NOT NULL,
  `mpOccupation` varchar(10) NOT NULL,
  `mpAddress` varchar(10) NOT NULL,
  `mpRegisterYear` int(4) NOT NULL,
  `mpStatus` varchar(10) NOT NULL,
  `mpSalary` int(11) NOT NULL,
  `mpHistory` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manpower`
--

INSERT INTO `manpower` (`mpID`, `userID`, `mpName`, `mpPhoneNo`, `mpOccupation`, `mpAddress`, `mpRegisterYear`, `mpStatus`, `mpSalary`, `mpHistory`) VALUES
('MP001', 'U001', 'Adwin', '0320729800', 'Teacher', 'Gambang', 2021, 'Active', 1200, 'None'),
('MP0010', 'U010', 'Asyraf Adnan', '087418700 ', 'Teacher', 'Kuantan', 2021, 'Active', 1200, 'Blood Pressure'),
('MP002', 'U002', 'Wong', '0321445466', 'Staff', 'Pekan', 2021, 'Active', 1200, 'None'),
('MP003', 'U003', 'Nicole', '082641001 ', 'Caretaker', 'Kuantan', 2021, 'Active', 1200, 'None'),
('MP004', 'U004', 'Emily', '0340213286', 'Staff', 'Gambang', 2021, 'Active', 1200, 'Heart Attack'),
('MP005', 'U005', 'Che Ku', '0377844262', 'Caretaker', 'Gambang', 2021, 'Terminated', 1200, 'Blood Pressure'),
('MP006', 'U006', 'Muhammad Amir', '0332902193', 'Caretaker', 'Kuantan', 2021, 'Terminated', 1200, 'None'),
('MP007', 'U007', 'Lukman Hakim', '0374929180', 'Staff', 'Kuantan', 2021, 'Active', 1200, 'Blood Pressure'),
('MP008', 'U008', 'Muhammad Afif', '073343518 ', 'Teacher', 'Pekan', 2021, 'Active', 1200, 'Heart Attack'),
('MP009', 'U009', 'Amirul Syafiq', '064576022', 'Caretaker', 'Pekan', 2021, 'Active', 1200, 'None');

-- --------------------------------------------------------

--
-- Table structure for table `parent_kid`
--

CREATE TABLE `parent_kid` (
  `parID` varchar(10) NOT NULL,
  `parName` varchar(40) NOT NULL,
  `parPhoneNum` varchar(10) NOT NULL,
  `parAddress` varchar(50) NOT NULL,
  `parYearReg` int(11) NOT NULL,
  `parStatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `parID` varchar(10) NOT NULL,
  `paymentAmount` int(11) NOT NULL,
  `paymentDate` date NOT NULL,
  `paymentStatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `salaryID` varchar(10) NOT NULL,
  `mpID` varchar(10) NOT NULL,
  `salaryStatus` varchar(10) NOT NULL,
  `baseSalary` int(11) NOT NULL,
  `overTime` int(11) NOT NULL,
  `totalSalary` int(11) NOT NULL,
  `paidDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` varchar(10) NOT NULL,
  `userType` varchar(10) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userPassword` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `userType`, `userName`, `userPassword`) VALUES
('U001', 'admin', 'Lee', 'abc123'),
('U002', 'admin', 'Aiman', 'aiman123'),
('U003', 'admin', 'Khairul', 'khairul123'),
('U004', 'owner', 'Yong', 'yong123'),
('U005', 'owner', 'James', 'james123'),
('U006', 'owner', 'Velan', 'velan123'),
('U007', 'UMP Staff', 'Adwin', 'adwin123'),
('U008', 'UMP Staff', 'Wong', 'wong123'),
('U009', 'UMP Staff', 'Nicole', 'nicole123'),
('U010', 'UMP Staff', 'Emily', 'emily123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kid`
--
ALTER TABLE `kid`
  ADD PRIMARY KEY (`kidID`);

--
-- Indexes for table `manpower`
--
ALTER TABLE `manpower`
  ADD PRIMARY KEY (`mpID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `parent_kid`
--
ALTER TABLE `parent_kid`
  ADD PRIMARY KEY (`parID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD KEY `parID` (`parID`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`salaryID`),
  ADD KEY `mpID` (`mpID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `manpower`
--
ALTER TABLE `manpower`
  ADD CONSTRAINT `manpower_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`parID`) REFERENCES `parent_kid` (`parID`);

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`mpID`) REFERENCES `manpower` (`mpID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
