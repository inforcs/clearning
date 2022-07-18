-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 07, 2022 at 06:54 AM
-- Server version: 10.5.15-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u100266589_clearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_apply`
--

CREATE TABLE `candidate_apply` (
  `id` int(11) NOT NULL,
  `course_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(80) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate_apply`
--

INSERT INTO `candidate_apply` (`id`, `course_id`, `name`, `email`, `mobile`, `date`) VALUES
(8, '103', 'manish gupta', 'manishgupta@gmail.com', '8318908530', '2022-05-17 11:25:09'),
(19, '104', 'kajal', 'kajal@gmail.com', '54657676786', '2022-05-17 12:52:36');

-- --------------------------------------------------------

--
-- Table structure for table `company_apply`
--

CREATE TABLE `company_apply` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(80) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_apply`
--

INSERT INTO `company_apply` (`id`, `name`, `company_name`, `email`, `mobile`, `date`) VALUES
(4, 'sunil ', 'kumar', 'sunil@gmail.com', '7896541230', '2022-05-10 10:26:36');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id_coursepost` int(11) NOT NULL,
  `courseid` int(11) NOT NULL,
  `coursetitle` varchar(100) DEFAULT NULL,
  `contactperson` varchar(50) DEFAULT NULL,
  `coursetype` varchar(80) DEFAULT NULL,
  `price` varchar(155) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `coursedesc` longtext DEFAULT NULL,
  `coursestatus` varchar(55) DEFAULT NULL,
  `createdat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id_coursepost`, `courseid`, `coursetitle`, `contactperson`, `coursetype`, `price`, `youtube`, `coursedesc`, `coursestatus`, `createdat`) VALUES
(3, 103, 'Algebra for class 11th', 'Sunil', 'Full Time', '6000', 'https://www.youtube.com/embed/qjrRZYYWFeU', '<p>Algbra refreshal course</p>', '1', '2022-05-16 09:07:04'),
(4, 104, 'maths', 'dsddfdfd', 'Full Time', '3000', 'https://www.youtube.com/embed/qjrRZYYWFeU', '<p>vfvbvbv</p>', '1', '2022-05-16 09:07:41'),
(8, 105, '11th', 'sunil', '', '2000', 'https://www.youtube.com/embed/4wxm52DIM88', '<p>Here you watch the video for math classes</p><p><br></p>', '1', '2022-07-06 10:32:34');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(80) NOT NULL,
  `location` varchar(100) NOT NULL,
  `qual` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`id`, `name`, `subject`, `email`, `mobile`, `location`, `qual`, `date`) VALUES
(15, 'sunil', 'maths', 'sunil@gmail.com', '00918873345716', 'Bangalore', 'MCA', '2022-05-17 11:33:59'),
(16, 'sunil', 'dotNet', 'sk@gmail.com', '00918873345716', 'Bangalore', 'Ph.D', '2022-05-17 12:08:17'),
(18, 'rajat', 'maths', 'dsds@gmail.com', '9876543222', 'Bangalore', 'MCA', '2022-05-18 04:50:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `candidate_apply`
--
ALTER TABLE `candidate_apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_apply`
--
ALTER TABLE `company_apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id_coursepost`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `candidate_apply`
--
ALTER TABLE `candidate_apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `company_apply`
--
ALTER TABLE `company_apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id_coursepost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
