-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2022 at 03:37 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportal`
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
  `job_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(80) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate_apply`
--

INSERT INTO `candidate_apply` (`id`, `job_id`, `name`, `email`, `mobile`, `date`) VALUES
(1, '101', 'Rajat Kumar', 'rajat.kumar@gmail.com', '9876543210', '2022-05-10 06:22:57'),
(2, '102', 'Sunil kumar', 'sunil@gmail.com', '1234567890', '2022-05-10 06:33:41'),
(3, '105', 'Bhaskar Reddy', 'sfdsfew@gmail.com', '123456789', '2022-05-10 11:08:18');

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
(4, 'sunil ', 'kumar', 'sunil@gmail.com', '7896541230', '2022-05-10 10:26:36'),
(5, 'Rajat', 'm', 'raja@gmail.com', '789654130', '2022-05-10 10:27:19'),
(6, 'Rajat', 'Kumar', 'raja@gmail.com', '7896541230', '2022-05-10 12:51:31'),
(7, 'Rajat', 'Kumar', 'sunil@gmail.com', '4567896542', '2022-05-10 12:53:35'),
(8, 'Rajat', 'Kumar', 'Bhaskar@gmail.com', '1234567890', '2022-05-10 12:54:54'),
(9, 'Bhaskar', 'hjghja', 'jksajk@gfkjhgk.com', 'uyfuyf', '2022-05-10 12:56:27'),
(10, 'Bhaskar', 'Prostaff', 'rajat@gmail.com', '9876543210', '2022-05-11 12:02:18');

-- --------------------------------------------------------

--
-- Table structure for table `new_job_post`
--

CREATE TABLE `new_job_post` (
  `id_jobpost` int(11) NOT NULL,
  `job_id` varchar(100) NOT NULL,
  `jobtitle` varchar(100) NOT NULL,
  `Client_name` varchar(50) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `location` varchar(100) DEFAULT NULL,
  `jobtype` varchar(80) NOT NULL,
  `payrate` varchar(155) DEFAULT NULL,
  `skill` varchar(255) NOT NULL,
  `jobdesc` longtext NOT NULL,
  `job_status` varchar(55) DEFAULT NULL,
  `createdat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_job_post`
--

INSERT INTO `new_job_post` (`id_jobpost`, `job_id`, `jobtitle`, `Client_name`, `contact_person`, `location`, `jobtype`, `payrate`, `skill`, `jobdesc`, `job_status`, `createdat`) VALUES
(2, '102', 'PHP Developer', '', '', 'London', 'Part Time', '$50 - $70', 'php', '', '1', '2022-05-09 12:19:13'),
(3, '103', 'React Developer', '', '', 'New York, USA', 'Part Time', '$123 - $456', 'React JS', 'Description is here', '2', '2022-05-10 06:49:16'),
(4, '104', 'Java Developer', '', '', 'Bangalore, India', 'Contract', '$150 - $160', 'Java', '<h3>Title</h3><p><b>lorem ipsum dolor sit amet consectetur adipisicing elit. quae molestias optio facilis. aut, eos, totam quibusdam eius illo nulla aspernatur repudiandae sunt voluptates delectus suscipit cupiditate balanitis under ipsum odio.</b></p><p>lorem ipsum dolor sit amet consectetur adipisicing elit. quae molestias optio facilis. aut, eos, totam quibusdam eius illo nulla aspernatur repudiandae sunt voluptates delectus suscipit cupiditate balanitis under ipsum odio.</p><p>lorem ipsum dolor sit amet consectetur adipisicing elit. quae molestias optio facilis. aut, eos, totam quibusdam eius illo nulla aspernatur repudiandae sunt voluptates delectus suscipit cupiditate balanitis under ipsum odio.</p><p>lorem ipsum dolor sit amet consectetur adipisicing elit. quae molestias optio facilis. aut, eos, totam quibusdam eius illo nulla aspernatur repudiandae sunt voluptates delectus suscipit cupiditate balanitis under ipsum odio.</p><p><b><u>lorem ipsum dolor sit amet consectetur adipisicing elit. quae molestias optio facilis. aut, eos, totam quibusdam eius illo nulla aspernatur repudiandae sunt voluptates delectus suscipit cupiditate balanitis under ipsum odio.</u></b><br><br></p>', '3', '2022-05-10 07:46:17'),
(5, '105', 'Content Creator', 'Bhaskar', '', 'Delhi', 'Part Time', '$123 - $234', 'Ms word', '<h3>Title</h3><p><b>lorem ipsum dolor sit amet consectetur adipisicing elit. quae molestias optio facilis. aut, eos, totam quibusdam eius illo nulla aspernatur repudiandae sunt voluptates delectus suscipit cupiditate balanitis under ipsum odio.</b></p><p>lorem ipsum dolor sit amet consectetur adipisicing elit. quae molestias optio facilis. aut, eos, totam quibusdam eius illo nulla aspernatur repudiandae sunt voluptates delectus suscipit cupiditate balanitis under ipsum odio.</p><p>lorem ipsum dolor sit amet consectetur adipisicing elit. quae molestias optio facilis. aut, eos, totam quibusdam eius illo nulla aspernatur repudiandae sunt voluptates delectus suscipit cupiditate balanitis under ipsum odio.</p><p>lorem ipsum dolor sit amet consectetur adipisicing elit. quae molestias optio facilis. aut, eos, totam quibusdam eius illo nulla aspernatur repudiandae sunt voluptates delectus suscipit cupiditate balanitis under ipsum odio.</p><p><b><u>lorem ipsum dolor sit amet consectetur adipisicing elit. quae molestias optio facilis. aut, eos, totam quibusdam eius illo nulla aspernatur repudiandae sunt voluptates delectus suscipit cupiditate balanitis under ipsum odio.</u></b><br><br></p>', '2', '2022-05-10 08:09:06'),
(6, '106', 'PHP Developer', '', '', 'Bangalore', 'Part Time', '$50 - $70', 'php', '<h3>Title 106</h3><p><b>lorem ipsum dolor sit amet consectetur adipisicing elit. quae molestias optio facilis. aut, eos, totam quibusdam eius illo nulla aspernatur repudiandae sunt voluptates delectus suscipit cupiditate balanitis under ipsum odio.</b></p><p>lorem ipsum dolor sit amet consectetur adipisicing elit. quae molestias optio facilis. aut, eos, totam quibusdam eius illo nulla aspernatur repudiandae sunt voluptates delectus suscipit cupiditate balanitis under ipsum odio.</p><p>lorem ipsum dolor sit amet consectetur adipisicing elit. quae molestias optio facilis. aut, eos, totam quibusdam eius illo nulla aspernatur repudiandae sunt voluptates delectus suscipit cupiditate balanitis under ipsum odio.</p><p>lorem ipsum dolor sit amet consectetur adipisicing elit. quae molestias optio facilis. aut, eos, totam quibusdam eius illo nulla aspernatur repudiandae sunt voluptates delectus suscipit cupiditate balanitis under ipsum odio.</p><p><b><u>lorem ipsum dolor sit amet consectetur adipisicing elit. quae molestias optio facilis. aut, eos, totam quibusdam eius illo nulla aspernatur repudiandae sunt voluptates delectus suscipit cupiditate balanitis under ipsum odio.</u></b><br><br></p>', '3', '2022-05-10 12:19:13'),
(7, '107', 'Java Developer', 'Rcs Technology', 'Sunil Kumar', 'bangalore, India', 'Part Time', '$1211 - $1311', 'Java', '<p>Job Description For job is 107 is here</p>', '1', '2022-05-11 07:48:56');

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
-- Indexes for table `new_job_post`
--
ALTER TABLE `new_job_post`
  ADD PRIMARY KEY (`id_jobpost`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company_apply`
--
ALTER TABLE `company_apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `new_job_post`
--
ALTER TABLE `new_job_post`
  MODIFY `id_jobpost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
