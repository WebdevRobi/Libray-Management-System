-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 21, 2023 at 09:40 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `action` varchar(100) NOT NULL,
  `user_ip_address` varchar(150) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `username`, `action`, `user_ip_address`, `date_time`) VALUES
(135, 'Administrator', 'Admin added new books', '::1', '2022-12-04 12:54:47'),
(136, 'Administrator', 'Admin added new books', '::1', '2022-12-04 12:57:54'),
(137, 'Administrator', 'Admin added New Borrow Books.', '::1', '2022-12-04 13:00:20'),
(138, 'Administrator', 'Admin added new books, .Intro to MySQL', '::1', '2022-12-04 13:01:45'),
(139, 'Administrator', 'Admin added new book Intro to History', '::1', '2022-12-04 13:02:48'),
(140, 'Administrator', 'Admin added New Borrowed Book ,229', '::1', '2022-12-04 13:05:02'),
(141, 'Administrator', 'Admin added New Borrowed Book ', '::1', '2022-12-04 13:05:41'),
(142, 'Administrator', 'Admin was login to the system', '::1', '2022-12-13 14:36:51'),
(143, 'Administrator', 'Admin was login to the system', '::1', '2022-12-17 21:08:01'),
(144, 'Administrator', 'Admin was login to the system', '::1', '2022-12-27 11:32:17'),
(145, 'Administrator', 'Admin was login to the system', '::1', '2023-01-04 11:04:18'),
(146, 'Administrator', 'Admin was logout on the system', '::1', '2023-01-04 11:05:22'),
(147, 'Administrator', 'Admin was login to the system', '::1', '2023-01-06 18:25:10'),
(148, 'Administrator', 'Admin was login to the system', '::1', '2023-01-08 20:47:23'),
(149, 'Administrator', 'Admin was login to the system', '::1', '2023-01-08 20:47:32'),
(150, 'Administrator', 'Admin was login to the system', '::1', '2023-01-12 13:17:24'),
(151, 'Administrator', 'Admin was logout on the system', '::1', '2023-01-12 13:19:30'),
(152, 'Administrator', 'Admin was login to the system', '::1', '2023-01-12 13:19:34'),
(153, 'Administrator', 'Admin was logout on the system', '::1', '2023-01-12 13:20:18'),
(154, 'Administrator', 'Admin was login to the system', '::1', '2023-01-16 22:24:09'),
(155, 'Administrator', 'Admin was logout on the system', '::1', '2023-01-16 22:42:18'),
(156, 'Administrator', 'Admin was login to the system', '::1', '2023-01-16 22:43:00'),
(157, 'Administrator', 'Admin was logout on the system', '::1', '2023-01-16 23:13:38'),
(158, 'Administrator', 'Admin was login to the system', '::1', '2023-01-16 23:19:24'),
(159, 'Administrator', 'Admin was login to the system', '::1', '2023-01-18 00:49:50'),
(160, 'Administrator', 'Admin was login to the system', '::1', '2023-01-21 00:05:32'),
(161, 'Administrator', 'Admin added New Borrowed Book ', '::1', '2023-01-21 00:15:00'),
(162, 'Administrator', 'Admin was logout on the system', '::1', '2023-01-21 00:15:23'),
(163, 'Administrator', 'Admin was login to the system', '::1', '2023-01-21 00:15:42'),
(164, 'Administrator', 'Admin added New Borrowed Book ', '::1', '2023-01-21 00:17:37'),
(165, 'Administrator', 'Admin added New Borrowed Book ', '::1', '2023-01-21 00:19:57'),
(166, 'Administrator', 'Admin was login to the system', '::1', '2023-01-21 00:22:37'),
(167, 'Administrator', 'Admin added New Borrowed Book ', '::1', '2023-01-21 00:23:45'),
(168, 'Administrator', 'Admin was login to the system', '::1', '2023-01-21 00:24:25'),
(169, 'Administrator', 'Admin was login to the system', '::1', '2023-01-21 00:29:11'),
(170, 'Administrator', 'Admin added New Borrowed Book ', '::1', '2023-01-21 00:29:50'),
(171, 'Administrator', 'Admin was login to the system', '::1', '2023-01-21 00:31:18'),
(172, 'Administrator', 'Admin added new book Robi', '::1', '2023-01-21 00:32:15');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `user_type`, `photo`, `created_on`) VALUES
(2, 'admin', '$2y$10$OmaLjCPmVu8jZr.hzQxJZe.Il0FCkjg1yGSW08/iOtGL2i47TsmOG', 'Principal', 'Soliven', 'Admin', 'unauthorized-person.png', '2022-10-20'),
(8, 'anntonette', '$2y$10$mRxfJi0jgWAfWrpuoTJF3utxuAatKMCidMRD7MGqndwwWoQDO55YC', 'Antonette', 'Pastores', 'Faculty Admin', '2022_06_14_13_10_IMG_6970.JPG', '2022-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `student_id` int(20) NOT NULL,
  `log_type` tinyint(1) NOT NULL COMMENT '1 = AM IN,2 = AM out, 3= PM IN, 4= PM out\r\n',
  `datetime_log` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `student_id`, `log_type`, `datetime_log`, `date_updated`) VALUES
(10, 20, 1, '2023-01-20 22:51:12', '2023-01-20 22:51:12');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `author` varchar(150) NOT NULL,
  `publisher` varchar(150) NOT NULL,
  `publish_date` date NOT NULL,
  `quantity` int(20) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `isbn`, `category_id`, `title`, `author`, `publisher`, `publish_date`, `quantity`, `status`) VALUES
(25, 'BSNHS-111', 10, 'Ang Alamat ng Saging', 'Duterte', 'BSNHS', '1970-08-26', 0, 0),
(26, '1234', 10, 'Aralin Panlipunan', 'Robi', 'Pastores', '2022-12-29', 0, 0),
(27, '222', 11, 'Algebra 2.0', 'Robi', 'Pastores', '2022-12-21', 1, 0),
(28, '223', 11, 'Trygonometry', 'Admin Marvin', 'Marvin Villa', '2022-12-25', 0, 0),
(29, '224', 11, 'math 2.0', 'Robi', 'Pastores', '2022-12-15', 0, 1),
(30, '225', 9, 'intro to database', 'Robi', 'Pastores', '2022-12-22', 4, 1),
(31, '226', 9, 'PHP Programming', 'Duterte', 'Pastores', '2022-12-21', 6, 0),
(32, '227', 9, 'Java Programming', 'Robi', 'Pastores', '2022-12-06', 0, 0),
(33, '228', 9, 'Intro to programming 2', 'Robi', 'Pastores', '2023-01-05', 0, 0),
(34, '228', 9, 'Intro to MySQL', 'Robi', 'Pastores', '2022-12-14', 0, 0),
(35, '229', 10, 'Intro to History', 'Robi', 'Pastores', '2022-03-25', 0, 1),
(36, '229', 10, 'Robi', 'Muryot', 'anntonette', '2023-02-01', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `date_borrow` date NOT NULL,
  `status` int(1) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`id`, `student_id`, `book_id`, `date_borrow`, `status`, `date_created`) VALUES
(33, 20, 25, '2022-11-14', 1, '2022-11-14 13:09:47'),
(34, 21, 26, '2022-12-03', 1, '2022-12-04 04:14:50'),
(35, 20, 30, '2022-12-04', 0, '2022-12-04 05:00:20'),
(36, 20, 35, '2022-12-04', 0, '2022-12-04 05:05:02'),
(37, 20, 29, '2022-12-04', 0, '2022-12-04 05:05:41'),
(38, 21, 27, '2023-01-21', 1, '2023-01-21 08:15:50'),
(39, 22, 27, '2023-01-21', 1, '2023-01-21 08:18:56'),
(40, 21, 27, '2023-01-21', 1, '2023-01-21 08:23:04'),
(41, 20, 27, '2023-01-21', 1, '2023-01-21 08:24:34'),
(42, 20, 31, '2023-01-21', 1, '2023-01-21 08:31:29');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(9, 'BSIT - Programming'),
(10, 'Alamat Books'),
(11, 'Mathematics');

-- --------------------------------------------------------

--
-- Table structure for table `class_year`
--

CREATE TABLE `class_year` (
  `id` int(50) NOT NULL,
  `year_code` varchar(150) NOT NULL,
  `class_year` varchar(150) NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_year`
--

INSERT INTO `class_year` (`id`, `year_code`, `class_year`, `created_on`) VALUES
(6, 'LQJ012589634', '1st year', '2022-11-10 21:04:48');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `code` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `title`, `code`) VALUES
(6, 'Mahogany IV', 'BSNHS-Mahogany'),
(7, 'Narra 1', 'Narra 1');

-- --------------------------------------------------------

--
-- Table structure for table `returns`
--

CREATE TABLE `returns` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `date_return` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `returns`
--

INSERT INTO `returns` (`id`, `student_id`, `book_id`, `date_return`) VALUES
(12, 21, 26, '2022-12-04'),
(13, 21, 27, '2023-01-21'),
(14, 22, 27, '2023-01-21'),
(15, 21, 27, '2023-01-21'),
(16, 20, 27, '2023-01-21'),
(17, 20, 31, '2023-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `student_id` varchar(15) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `course_id` int(11) NOT NULL,
  `class_year_id` int(50) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_id`, `firstname`, `lastname`, `gender`, `photo`, `course_id`, `class_year_id`, `created_on`) VALUES
(20, 'WQP947312605', 'luna', 'Castillo', 'Female', '2022_05_28_15_42_IMG_5863.JPG', 6, 6, '2022-11-14'),
(21, 'EVD951847032', 'Marvin', 'Villa', 'Male', '', 6, 6, '2022-12-03'),
(22, 'VJE275490163', 'Nicole', 'Villa', 'Female', 'computer-icons-login-user-system-administrator-image-png-favpng-iNFT01rNqwKESE8gShbhXTYCv.jpg', 7, 6, '2023-01-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_year`
--
ALTER TABLE `class_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `returns`
--
ALTER TABLE `returns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `class_year`
--
ALTER TABLE `class_year`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `returns`
--
ALTER TABLE `returns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
