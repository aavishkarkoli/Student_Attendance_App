-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2022 at 06:26 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendancemaster`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `aid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `ispresent` tinyint(4) NOT NULL,
  `uid` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`aid`, `sid`, `date`, `ispresent`, `uid`, `id`) VALUES
(92, 1, 1489795200, 1, 1, 1),
(93, 2, 1489795200, 1, 1, 1),
(94, 3, 1489795200, 1, 1, 1),
(95, 4, 1489795200, 1, 1, 1),
(96, 5, 1489795200, 1, 1, 1),
(97, 1, 1643583600, 1, 1, 1),
(98, 2, 1643583600, 1, 1, 1),
(99, 3, 1643583600, 1, 1, 1),
(100, 4, 1643583600, 0, 1, 1),
(101, 5, 1643583600, 1, 1, 1),
(102, 1, 1641250800, 1, 1, 1),
(103, 2, 1641250800, 1, 1, 1),
(104, 3, 1641250800, 1, 1, 1),
(105, 4, 1641250800, 1, 1, 1),
(106, 5, 1641250800, 1, 1, 1),
(107, 1, 1643756400, 1, 1, 1),
(108, 2, 1643756400, 1, 1, 1),
(109, 3, 1643756400, 1, 1, 1),
(110, 4, 1643756400, 1, 1, 1),
(111, 5, 1643756400, 1, 1, 1),
(112, 1, 1643670000, 0, 2, 4),
(113, 2, 1643670000, 0, 2, 4),
(114, 3, 1643670000, 0, 2, 4),
(115, 4, 1643670000, 0, 2, 4),
(116, 5, 1643670000, 0, 2, 4),
(117, 1, 1644447600, 1, 2, 4),
(118, 2, 1644447600, 1, 2, 4),
(119, 3, 1644447600, 1, 2, 4),
(120, 4, 1644447600, 1, 2, 4),
(121, 5, 1644447600, 1, 2, 4),
(122, 1, 1644361200, 1, 2, 4),
(123, 2, 1644361200, 1, 2, 4),
(124, 3, 1644361200, 1, 2, 4),
(125, 4, 1644361200, 1, 2, 4),
(126, 5, 1644361200, 1, 2, 4),
(127, 1, 1644274800, 1, 2, 4),
(128, 2, 1644274800, 1, 2, 4),
(129, 3, 1644274800, 1, 2, 4),
(130, 4, 1644274800, 1, 2, 4),
(131, 5, 1644274800, 1, 2, 4),
(132, 1, 1644188400, 1, 2, 4),
(133, 2, 1644188400, 1, 2, 4),
(134, 3, 1644188400, 1, 2, 4),
(135, 4, 1644188400, 1, 2, 4),
(136, 5, 1644188400, 1, 2, 4),
(137, 1, 1643756400, 0, 2, 4),
(138, 2, 1643756400, 0, 2, 4),
(139, 3, 1643756400, 0, 2, 4),
(140, 4, 1643756400, 0, 2, 4),
(141, 5, 1643756400, 0, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `uid` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` bigint(20) NOT NULL,
  `qualifications` varchar(100) NOT NULL DEFAULT 'Msc IT',
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`uid`, `uname`, `password`, `email`, `number`, `qualifications`, `status`) VALUES
(1, 'ramesh', 'ramesh', 'ramesh@gmail.com', 9999999999, '', 1),
(2, 'sagar', 'sagar', 'sagar@gmail.com', 9999999998, '', 1),
(3, 'disha', 'disha', 'disha@gmail.com', 9999999997, '', 1),
(4, 'pramod', 'pramod', 'pramod@gmail.com', 9999999996, '', 1),
(12, 'rakesh sinha', '1234', 'rakesh@gmail.com', 8888888888, 'msc in artificial intelegence', 1),
(11, 'rakesh sinha', '1234', 'rakesh@gmail.com', 8888888888, 'msc in artificial intelegence', 1),
(10, 'mangesh shinde', '1234', 'mangesh@gmail.com', 9988998899, 'Msc In Artificial Intelegence', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_subject`
--

CREATE TABLE `faculty_subject` (
  `teacher_subject_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_subject`
--

INSERT INTO `faculty_subject` (`teacher_subject_id`, `uid`, `id`) VALUES
(1, 1, 1),
(2, 3, 2),
(3, 4, 5),
(4, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `uid` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` bigint(20) NOT NULL,
  `qualifications` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`uid`, `uname`, `password`, `email`, `number`, `qualifications`, `status`) VALUES
(10, 'rakesh sinha', '1234', 'rakesh@gmail.com', 7788888888, 'msc in neural networks', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rollno` varchar(255) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `name`, `rollno`, `pass`, `email`) VALUES
(1, 'nikhil', '101', '1234', 'nikhil@gmail.com'),
(2, 'sarthak', '102', '1234', 'sarthak@gmail.com'),
(3, 'sashank', '103', '1234', 'sashank@gmail.com'),
(4, 'soman', '104', '1234', 'soman@gmail.com'),
(5, 'ritu', '105', '1234', 'ritu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `student_subject`
--

CREATE TABLE `student_subject` (
  `student_subject_id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_subject`
--

INSERT INTO `student_subject` (`student_subject_id`, `sid`, `id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 2, 1),
(7, 2, 2),
(8, 2, 3),
(9, 2, 4),
(10, 2, 5),
(11, 3, 1),
(12, 3, 2),
(13, 3, 3),
(14, 3, 4),
(15, 3, 5),
(16, 4, 1),
(17, 4, 2),
(18, 4, 3),
(19, 4, 4),
(20, 4, 5),
(21, 5, 1),
(22, 5, 2),
(23, 5, 3),
(24, 5, 4),
(25, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`) VALUES
(1, 'maths'),
(2, 'Data Structure'),
(3, 'Networking'),
(4, 'Artificial Intelegence'),
(5, 'Android');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `faculty_subject`
--
ALTER TABLE `faculty_subject`
  ADD PRIMARY KEY (`teacher_subject_id`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `student_subject`
--
ALTER TABLE `student_subject`
  ADD PRIMARY KEY (`student_subject_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `faculty_subject`
--
ALTER TABLE `faculty_subject`
  MODIFY `teacher_subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hod`
--
ALTER TABLE `hod`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_subject`
--
ALTER TABLE `student_subject`
  MODIFY `student_subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
