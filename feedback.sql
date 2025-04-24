-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2025 at 09:29 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `auser`
--

CREATE TABLE `auser` (
  `aname` varchar(100) NOT NULL,
  `aemail` varchar(100) NOT NULL,
  `apassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auser`
--

INSERT INTO `auser` (`aname`, `aemail`, `apassword`) VALUES
('Aditya Sharma', 'adityasharma003@gmail.com', 'adityasharma003'),
('Suraj Kumar', 'surajkumar002@gmail.com', 'surajkumar002'),
('Yash Goswami', 'yashgoswami001@gmail.com', 'yashgoswami001122');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `name` text NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `parents` varchar(10) NOT NULL,
  `class` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`name`, `number`, `email`, `parents`, `class`, `gender`, `city`, `state`, `address`, `image`) VALUES
('Aditya Sharma', '8445346627', 'adityasharma003@gmail.com', '92776222', '3rd Year', 'Male', 'agra', 'uttar pradesh', 'Rambagh', ''),
('Suraj Kumar', '8077089864', 'surajkumar002@gmail.com', '6521624767', '3rd Year', 'Male', 'agra', 'uttar pradesh', 'dhakri ka mahal,ghadi bhadoriya', ''),
('yash goswami', '782789783', 'yashgoswami001@gmail.com', '8077080528', '3rd Year', 'Male', 'agra', 'uttar pradesh', '4/1c/4d Ram kunj gali.Shahganj', '');

-- --------------------------------------------------------

--
-- Table structure for table `stufeedback`
--

CREATE TABLE `stufeedback` (
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `feedback` varchar(2000) NOT NULL,
  `givenby` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stufeedback`
--

INSERT INTO `stufeedback` (`name`, `email`, `feedback`, `givenby`) VALUES
('meena', 'jatingoswami000000@gmail.com', 'i am your teacher.', 'ravi goswami');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `name` text NOT NULL,
  `number` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` text NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`name`, `number`, `email`, `gender`, `qualification`, `address`, `image`) VALUES
('Aishna Sengar', 916111654, 'aishnasengar003@gmail.com', 'Female', 'B.Tech Computer Science', 'Agra', 'uploadimg/4.jpg'),
('Marutesh Sharma', 941041074, 'maruteshsharma000@gmail.com', 'Male', 'BCA', 'Agra', 'uploadimg/4.jpg'),
('Reena Garg', 976002608, 'reenagarg002@gmail.com', 'Female', 'cs teacher', 'Agra', 'uploadimg/4.jpg'),
('Sharon Moses', 976003425, 'sharonmoses004@gmail.com', 'Male', 'B.ed', 'Agra', 'uploadimg/4.jpg'),
('Shivendra Pathak', 790629398, 'shivendrapathak001@gmail.com', 'Male', 'Phd', 'Agra', 'uploadimg/4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teafeedback`
--

CREATE TABLE `teafeedback` (
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `feedback` varchar(2000) NOT NULL,
  `givenby` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teafeedback`
--

INSERT INTO `teafeedback` (`name`, `email`, `feedback`, `givenby`) VALUES
('yash goswami', 'yashgoswami000@gmail.com', 'hii my name is yash.', 'ravi goswami'),
('', '', '', ''),
('yash goswami', 'laksh@gmail.com', 'heio', 'ravi goswami');

-- --------------------------------------------------------

--
-- Table structure for table `tuser`
--

CREATE TABLE `tuser` (
  `tname` text NOT NULL,
  `temail` varchar(100) NOT NULL,
  `tpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tuser`
--

INSERT INTO `tuser` (`tname`, `temail`, `tpassword`) VALUES
('laksh', 'laksh@gmail.com', 'laksh'),
('raju', 'raju@gmail.com', '123456'),
('virat', 'virat000@gmail.com', 'virat');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`) VALUES
('123', '123@gmail.com', '123'),
('akash kumar', 'akashkumar@gmail.com', 'akashkumar'),
('akash yadav', 'akashyadav@gmail.com', 'akash123'),
('james', 'james000@gmail.com', 'james123'),
('jass manak', 'jassmanak@gmail.com', 'jassmanak'),
('jatin gautam', 'jatingautam@gmail.com', 'jatingautam'),
('jayveer', 'jayveer@gmail.com', 'jayveer'),
('lovely ', 'lovely@gmail.com', '5555'),
('ronak baghel', 'ronakbaghel@gmail.com', 'ronakbaghel'),
('yash', 'yash@gmail.com', 'yash');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auser`
--
ALTER TABLE `auser`
  ADD PRIMARY KEY (`aemail`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `stufeedback`
--
ALTER TABLE `stufeedback`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`temail`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
