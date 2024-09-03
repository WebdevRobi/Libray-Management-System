-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 01, 2023 at 06:55 AM
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
(172, 'Administrator', 'Admin added new book Robi', '::1', '2023-01-21 00:32:15'),
(173, 'Administrator', 'Admin was login to the system', '::1', '2023-01-23 02:25:11'),
(174, 'Administrator', 'Admin added New Borrowed Book ', '::1', '2023-01-23 02:32:13'),
(175, 'Administrator', 'Admin was logout on the system', '::1', '2023-01-23 02:32:32'),
(176, 'Administrator', 'Admin was login to the system', '::1', '2023-01-23 02:33:57'),
(177, 'Administrator', 'Admin added New Borrowed Book ', '::1', '2023-01-23 03:12:56'),
(178, 'Administrator', 'Admin was login to the system', '::1', '2023-01-29 00:06:36'),
(179, 'Administrator', 'Admin was login to the system', '::1', '2023-01-29 17:11:33'),
(180, 'Administrator', 'Admin was logout on the system', '::1', '2023-01-30 05:42:33'),
(181, 'Administrator', 'Admin was login to the system', '::1', '2023-01-30 05:42:37'),
(182, 'Administrator', 'Admin was login to the system', '::1', '2023-01-30 06:33:12'),
(183, 'Administrator', 'Admin was logout on the system', '::1', '2023-01-30 08:04:17'),
(184, 'Administrator', 'Admin was login to the system', '::1', '2023-01-30 08:07:25'),
(185, 'Administrator', 'Admin was login to the system', '::1', '2023-01-31 02:50:30'),
(186, 'Administrator', 'Admin was login to the system', '::1', '2023-01-31 02:50:33'),
(187, 'Administrator', 'Admin added New Borrowed Book ', '::1', '2023-01-31 19:49:30'),
(188, 'Administrator', 'Admin added New Borrowed Book ', '::1', '2023-01-31 19:50:23'),
(189, 'Administrator', 'Admin added New Borrowed Book ', '::1', '2023-01-31 19:51:44'),
(190, 'Administrator', 'Admin added New Borrowed Book ', '::1', '2023-01-31 19:53:03'),
(191, 'Administrator', 'Admin was logout on the system', '::1', '2023-01-31 19:57:05'),
(192, 'Administrator', 'Admin was login to the system', '::1', '2023-01-31 19:57:25'),
(193, 'Administrator', 'Admin added New Borrowed Book ', '::1', '2023-01-31 19:58:49'),
(194, 'Administrator', 'Admin added New Borrowed Book ', '::1', '2023-01-31 19:59:22'),
(195, 'Administrator', 'Admin added New Borrowed Book ', '::1', '2023-01-31 20:00:36'),
(196, 'Administrator', 'Admin added New Borrowed Book ', '::1', '2023-01-31 20:01:59'),
(197, 'Administrator', 'Admin was logout on the system', '::1', '2023-01-31 20:02:32'),
(198, 'Administrator', 'Admin was login to the system', '::1', '2023-01-31 20:02:57'),
(199, 'Administrator', 'Admin added New Borrowed Book ', '::1', '2023-01-31 20:04:08'),
(200, 'Administrator', 'Admin was logout on the system', '::1', '2023-01-31 20:04:21'),
(201, 'Administrator', 'Admin was login to the system', '::1', '2023-01-31 20:04:47'),
(202, 'Administrator', 'Admin added new book Intro to database', '::1', '2023-01-31 20:06:43'),
(203, 'Administrator', 'Admin added new book Database SQL', '::1', '2023-01-31 20:19:46'),
(204, 'Administrator', 'Admin added New Borrowed Book ', '::1', '2023-01-31 20:20:47'),
(205, 'Administrator', 'Admin added New Borrowed Book ', '::1', '2023-01-31 20:21:40'),
(206, 'Administrator', 'Admin was logout on the system', '::1', '2023-01-31 20:41:11'),
(207, 'Administrator', 'Admin was login to the system', '::1', '2023-01-31 20:41:15'),
(208, 'Administrator', 'Admin added new book Programming 1', '::1', '2023-01-31 20:57:52'),
(209, 'Administrator', 'Admin added New Borrowed Book ', '::1', '2023-01-31 20:58:01'),
(210, 'Administrator', 'Admin was logout on the system', '::1', '2023-01-31 20:58:34'),
(211, 'Administrator', 'Admin was login to the system', '::1', '2023-01-31 20:58:59'),
(212, 'Administrator', 'Admin was login to the system', '::1', '2023-01-31 20:59:06'),
(213, 'Administrator', 'Admin added New Borrowed Book ', '::1', '2023-01-31 21:03:11'),
(214, 'Administrator', 'Admin was logout on the system', '::1', '2023-01-31 21:03:42'),
(215, 'Administrator', 'Admin was login to the system', '::1', '2023-01-31 21:04:04');

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
(8, 'anntonette', '$2y$10$mRxfJi0jgWAfWrpuoTJF3utxuAatKMCidMRD7MGqndwwWoQDO55YC', 'Antonette', 'Pastores', 'Faculty Admin', '2022_06_14_13_10_IMG_6970.JPG', '2022-11-14'),
(9, 'robi', '$2y$10$Xiiu5/rM3wOS7mxM8wR/5OJKeyhqxHEKDhZQx4JUBYi9xfvTdDoJy', 'robi', 'pastores', 'Admin', '', '2023-01-23');

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
(37, '123', 9, 'Intro to database', 'Robi', 'Pastores', '2023-01-10', 19, 1),
(38, '111', 9, 'Database SQL', 'Muryot', 'Pastores', '2019-02-20', 29, 1),
(39, '145', 9, 'Programming 1', 'Robi', 'Pastores', '2023-01-25', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `gender_id` varchar(20) NOT NULL,
  `book_id` int(11) NOT NULL,
  `date_borrow` date NOT NULL,
  `status` int(1) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`id`, `student_id`, `gender_id`, `book_id`, `date_borrow`, `status`, `date_created`) VALUES
(47, 25, '1', 37, '2023-01-31', 0, '2023-02-01 04:53:19'),
(48, 26, '2', 38, '2023-01-31', 0, '2023-02-01 04:53:24'),
(49, 25, '', 39, '2023-01-31', 1, '2023-02-01 05:04:17');

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
(6, 'LQJ012589634', '1st year', '2022-11-10 21:04:48'),
(7, 'CPS952087463', '2nd Year', '2023-01-31 20:31:34'),
(8, 'IGY561437980', '3rd Year', '2023-01-31 20:31:40'),
(9, 'IUE284673519', '4th Year', '2023-01-31 20:31:48');

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
(8, 'Sampaguita', 'BSNHS-Sampaguit');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `id` int(20) NOT NULL,
  `sex` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id`, `sex`) VALUES
(1, 'male'),
(2, 'female');

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
(22, 25, 39, '2023-01-31');

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
(25, 'RYC107869534', 'Robi', 'Pastores', 'male', '', 6, 6, '2023-01-31'),
(26, 'XNO124705689', 'Anntonette', 'Pastores', 'female', '', 8, 6, '2023-01-31'),
(28, 'GCP537640219', 'Marvin', 'Villa', '', '', 8, 8, '2023-01-31');

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
-- Indexes for table `gender`
--
ALTER TABLE `gender`
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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `class_year`
--
ALTER TABLE `class_year`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `returns`
--
ALTER TABLE `returns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
