-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2021 at 02:36 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `att_rec`
--

CREATE TABLE `att_rec` (
  `roomno` int(11) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `Adate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `att_rec`
--

INSERT INTO `att_rec` (`roomno`, `fName`, `lName`, `status`, `Adate`) VALUES
(0, 'mrunal', 'shende', 'present', '2021-07-29');

-- --------------------------------------------------------

--
-- Table structure for table `com_reg`
--

CREATE TABLE `com_reg` (
  `cid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `fName` varchar(15) NOT NULL,
  `lName` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `type1` varchar(20) NOT NULL,
  `complaint` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `com_reg`
--

INSERT INTO `com_reg` (`cid`, `id`, `fName`, `lName`, `date`, `type1`, `complaint`) VALUES
(1, 1, 'mrunal', 'shende', '2021-07-29', 'Infrastructure', 'Bed Broken'),
(2, 2, 'sakshi', 'kale', '2021-07-30', 'Mess', 'Food quality not good');

-- --------------------------------------------------------

--
-- Table structure for table `deadstock`
--

CREATE TABLE `deadstock` (
  `item` text NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deadstock`
--

INSERT INTO `deadstock` (`item`, `price`, `quantity`, `total`) VALUES
('register', 50, 5, 250);

-- --------------------------------------------------------

--
-- Table structure for table `feedbacktable`
--

CREATE TABLE `feedbacktable` (
  `id` int(11) NOT NULL,
  `fName` varchar(20) NOT NULL,
  `lName` varchar(20) NOT NULL,
  `food_quality` int(11) NOT NULL,
  `food_variety` int(11) NOT NULL,
  `food_taste` int(11) NOT NULL,
  `electricity` int(11) NOT NULL,
  `water` int(11) NOT NULL,
  `other_facility` int(11) NOT NULL,
  `oveall` int(11) NOT NULL,
  `suggetions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacktable`
--

INSERT INTO `feedbacktable` (`id`, `fName`, `lName`, `food_quality`, `food_variety`, `food_taste`, `electricity`, `water`, `other_facility`, `oveall`, `suggetions`) VALUES
(1, 'mrunal', 'shende', 7, 7, 7, 7, 7, 7, 7, 'Nothing'),
(2, 'sakshi', 'kale', 8, 8, 7, 8, 7, 7, 7, '');

--
-- Triggers `feedbacktable`
--
DELIMITER $$
CREATE TRIGGER `feedbacktrigger` BEFORE INSERT ON `feedbacktable` FOR EACH ROW IF NEW.oveall < 1
	THEN SET NEW.oveall =1;
ELSEIF NEW.oveall > 10
	THEN SET NEW.oveall = 10;
END IF
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `leave_app`
--

CREATE TABLE `leave_app` (
  `id` int(11) NOT NULL,
  `Name1` varchar(50) NOT NULL,
  `Name2` varchar(50) NOT NULL,
  `odate` date NOT NULL,
  `idate` date NOT NULL,
  `PLACE` varchar(50) NOT NULL,
  `Reason1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_app`
--

INSERT INTO `leave_app` (`id`, `Name1`, `Name2`, `odate`, `idate`, `PLACE`, `Reason1`) VALUES
(1, 'mrunal', 'shende', '2018-08-08', '2018-08-15', 'Pune', 'Visiting Hometown');

-- --------------------------------------------------------

--
-- Table structure for table `livestock`
--

CREATE TABLE `livestock` (
  `item` text NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livestock`
--

INSERT INTO `livestock` (`item`, `price`, `quantity`, `total`) VALUES
('pen', 10, 10, 100);

-- --------------------------------------------------------

--
-- Table structure for table `roomsinhostel`
--

CREATE TABLE `roomsinhostel` (
  `roomno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sdnew`
--

CREATE TABLE `sdnew` (
  `id` int(11) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `mName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` text NOT NULL,
  `course` text NOT NULL,
  `year` text NOT NULL,
  `department` text NOT NULL,
  `date_of_addmission` date NOT NULL,
  `contact` varchar(11) NOT NULL,
  `parent_contact` varchar(11) NOT NULL,
  `Guardian_contact` varchar(11) NOT NULL,
  `permenant_address` text NOT NULL,
  `username` text NOT NULL,
  `password` varchar(10) NOT NULL,
  `roomno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sdnew`
--

INSERT INTO `sdnew` (`id`, `fName`, `mName`, `lName`, `date_of_birth`, `email`, `course`, `year`, `department`, `date_of_addmission`, `contact`, `parent_contact`, `Guardian_contact`, `permenant_address`, `username`, `password`, `roomno`) VALUES
(1, 'mrunal', 'sunil', 'shende', '2000-04-05', 'mrunalshende@gmail', 'Eng', '3', 'Information Technology', '2019-06-04', '1234567890', '1234567890', '1324567890', 'atp - Manchar , Tal- Ambegaon , Dist- Pune , 410503', 'Mrunal', 'monusunil', 101),
(2, 'sakshi', 'shrihari', 'kale', '2000-08-02', 'sakshikale@gmail.com', 'Eng', '3', 'Information Technology', '2016-04-15', '1234567890', '1234567890', '1234567899', 'atp- manchar , tal- ambegoan , dist- Pune', 'sakshi', 'sakshi123', 0),
(3, 'Snehal', 'Dattatray', 'Tambe', '2000-01-21', 'snehalTambe1@gmail.com', 'Eng', '3', 'Information Technology', '2016-04-07', '1234567890', '1234567890', '1234567890', 'atp- Manchar, Tal-ambegaon , Dist. - Pune', 'snehal', 'snehal123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `com_reg`
--
ALTER TABLE `com_reg`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `sdnew`
--
ALTER TABLE `sdnew`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `com_reg`
--
ALTER TABLE `com_reg`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sdnew`
--
ALTER TABLE `sdnew`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
