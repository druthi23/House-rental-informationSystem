-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2023 at 07:56 AM
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
-- Database: `rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bid` int(10) NOT NULL,
  `tid` int(10) NOT NULL,
  `tenant_name` varchar(30) NOT NULL,
  `tenant_aadhar` bigint(8) NOT NULL,
  `hid` int(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `booking_date` varchar(20) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bid`, `tid`, `tenant_name`, `tenant_aadhar`, `hid`, `address`, `pincode`, `booking_date`) VALUES
(1, 1, 'aditya', 203065987452, 2, 'Pipeline,Vasanthapura Bangalor', '560086', '2023-02-06 21:59:28'),
(2, 1, 'aditya', 203065987452, 1, 'Krishna layout,Hulimavu,Bangal', '560076', '2023-02-06 22:02:14');

--
-- Triggers `booking`
--
DELIMITER $$
CREATE TRIGGER `prevent_double_booking` BEFORE INSERT ON `booking` FOR EACH ROW BEGIN
	DECLARE duplicate integer;
	SET duplicate = (SELECT COUNT(*) FROM `booking` WHERE 		hid=NEW.hid );
    IF duplicate > 0 THEN 
    	SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'House already booked';
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_availability_status` AFTER INSERT ON `booking` FOR EACH ROW BEGIN
    UPDATE `house`
    SET availability = 'Unavailable'
    WHERE hid = NEW.hid;
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `s_no` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `feedback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`s_no`, `name`, `email`, `feedback`) VALUES
(1, 'varun', 'varun@gmail.com', 'It is easy to find house here.'),
(2, 'tony', 'tony@gmail.com', 'it is very helpfulll!!');

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `s_no` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`s_no`, `name`, `email`, `message`) VALUES
(1, 'ganesh', 'gani@gmail.com', 'Am not able to signup'),
(2, 'ramya', 'ramya@gmail.com', 'i am facing login issues');

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `hid` int(10) NOT NULL,
  `oid` int(2) NOT NULL,
  `owner_name` varchar(30) NOT NULL,
  `owner_aadhar` bigint(8) NOT NULL,
  `no_of_rooms` varchar(10) NOT NULL,
  `address` varchar(60) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `availability` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`hid`, `oid`, `owner_name`, `owner_aadhar`, `no_of_rooms`, `address`, `amount`, `pincode`, `filename`, `availability`) VALUES
(1, 1, 'abhi', 408050395623, '2', 'Krishna layout,Hulimavu,Bangalore South', '12000', '560076', 'h1.jpg', 'Unavailable'),
(2, 2, 'anaghaa', 562398745632, '3', 'Pipeline,Vasanthapura Bangalore South', '8000', '560086', 'h77.jpg', 'Unavailable'),
(3, 3, 'drithi', 789945645623, '2', 'Padhmanabanagar,Bangalore North', '10500', '560025', 'h2.jpg', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `oid` int(2) NOT NULL,
  `name` varchar(30) NOT NULL,
  `aadhar` bigint(8) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` int(1) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `registered_date` varchar(10) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`oid`, `name`, `aadhar`, `gender`, `age`, `email`, `password`, `phone`, `registered_date`) VALUES
(1, 'abhi', 408050395623, 'male', 20, 'abhi@gmail.com', '8596pop', 7975145617, '2023-02-06'),
(2, 'anaghaa', 562398745632, 'female', 21, 'ana@gmail.com', 'ana123', 8197564159, '2023-02-06'),
(3, 'drithi', 789945645623, 'female', 20, 'drithi@gmail.com', 'drithi07', 8073781946, '2023-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE `problem` (
  `tid` int(10) NOT NULL,
  `tenant_name` varchar(30) NOT NULL,
  `owner_email` varchar(30) NOT NULL,
  `issue` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `problem`
--

INSERT INTO `problem` (`tid`, `tenant_name`, `owner_email`, `issue`) VALUES
(2, 'harshith m n', 'drithi@gmail.com', 'can i get house painted ?');

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE `tenant` (
  `tid` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `aadhar` bigint(12) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(1) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `registration_date` varchar(10) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`tid`, `name`, `aadhar`, `gender`, `age`, `email`, `password`, `phone`, `registration_date`) VALUES
(1, 'aditya', 203065987452, 'male', 20, 'adi@gmail.com', 'aditya', 9986770284, '2023-02-03'),
(2, 'harshith m n', 895623124651, 'male', 21, 'harsh@gmail.com', 'harshith', 6364509969, '2023-02-03'),
(3, 'chakshu', 494949494949, 'male', 19, 'chakshu@gmail', 'asdfghjkl', 9876544321, '2023-02-06'),
(4, 'varun', 147856932541, 'male', 22, 'varun@gmail.com', 'varun', 9091762769, '2023-02-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `hid` (`hid`),
  ADD KEY `tid` (`tid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`hid`),
  ADD KEY `oid` (`oid`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `problem`
--
ALTER TABLE `problem`
  ADD KEY `tid` (`tid`);

--
-- Indexes for table `tenant`
--
ALTER TABLE `tenant`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `s_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `s_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `house`
--
ALTER TABLE `house`
  MODIFY `hid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `oid` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tenant`
--
ALTER TABLE `tenant`
  MODIFY `tid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `tenant` (`tid`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`hid`) REFERENCES `house` (`hid`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `house`
--
ALTER TABLE `house`
  ADD CONSTRAINT `house_ibfk_1` FOREIGN KEY (`oid`) REFERENCES `owner` (`oid`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `problem`
--
ALTER TABLE `problem`
  ADD CONSTRAINT `problem_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `tenant` (`tid`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
