-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2019 at 12:47 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `search_result`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'f925916e2754e5e03f75dd58a5733251');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `us_id` int(11) NOT NULL,
  `us_business_name` varchar(255) DEFAULT NULL,
  `us_mobile_no` varchar(20) DEFAULT NULL,
  `us_email` varchar(255) DEFAULT NULL,
  `us_website` varchar(100) DEFAULT NULL,
  `us_category` varchar(255) DEFAULT NULL,
  `us_sub_category` varchar(255) DEFAULT NULL,
  `us_flat_name` varchar(255) DEFAULT NULL,
  `us_street` varchar(255) DEFAULT NULL,
  `us_area` varchar(255) DEFAULT NULL,
  `us_city` varchar(255) DEFAULT NULL,
  `us_pincode` varchar(255) DEFAULT NULL,
  `us_state` varchar(255) DEFAULT NULL,
  `us_description` varchar(255) NOT NULL,
  `us_specialization` varchar(255) NOT NULL,
  `us_mon_open` text,
  `us_mon_close` varchar(20) DEFAULT NULL,
  `us_mon_closed` varchar(20) DEFAULT NULL,
  `us_tue_open` varchar(20) DEFAULT NULL,
  `us_tue_close` varchar(20) DEFAULT NULL,
  `us_tue_closed` varchar(20) DEFAULT NULL,
  `us_wed_open` varchar(20) DEFAULT NULL,
  `us_wed_close` varchar(20) DEFAULT NULL,
  `us_wed_closed` varchar(20) DEFAULT NULL,
  `us_thu_open` varchar(20) DEFAULT NULL,
  `us_thu_close` varchar(20) DEFAULT NULL,
  `us_thu_closed` varchar(20) DEFAULT NULL,
  `us_fri_open` varchar(20) DEFAULT NULL,
  `us_fri_close` varchar(20) DEFAULT NULL,
  `us_fri_closed` varchar(20) DEFAULT NULL,
  `us_sat_open` varchar(20) DEFAULT NULL,
  `us_sat_close` varchar(20) DEFAULT NULL,
  `us_sat_closed` varchar(20) DEFAULT NULL,
  `us_sun_open` varchar(20) DEFAULT NULL,
  `us_sun_close` varchar(20) DEFAULT NULL,
  `us_sun_closed` varchar(20) DEFAULT NULL,
  `us_image1` varchar(255) NOT NULL,
  `us_image2` varchar(255) NOT NULL,
  `us_image3` varchar(255) NOT NULL,
  `us_image4` varchar(255) NOT NULL,
  `us_image5` varchar(255) NOT NULL,
  `us_image6` varchar(255) NOT NULL,
  `us_gmail` varchar(255) NOT NULL,
  `us_facebook` varchar(255) NOT NULL,
  `us_youtube` varchar(255) NOT NULL,
  `us_status` int(5) NOT NULL,
  `us_posting_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`us_id`, `us_business_name`, `us_mobile_no`, `us_email`, `us_website`, `us_category`, `us_sub_category`, `us_flat_name`, `us_street`, `us_area`, `us_city`, `us_pincode`, `us_state`, `us_description`, `us_specialization`, `us_mon_open`, `us_mon_close`, `us_mon_closed`, `us_tue_open`, `us_tue_close`, `us_tue_closed`, `us_wed_open`, `us_wed_close`, `us_wed_closed`, `us_thu_open`, `us_thu_close`, `us_thu_closed`, `us_fri_open`, `us_fri_close`, `us_fri_closed`, `us_sat_open`, `us_sat_close`, `us_sat_closed`, `us_sun_open`, `us_sun_close`, `us_sun_closed`, `us_image1`, `us_image2`, `us_image3`, `us_image4`, `us_image5`, `us_image6`, `us_gmail`, `us_facebook`, `us_youtube`, `us_status`, `us_posting_date`) VALUES
(5, 'Avindhya Guitar Classes', '9611860476', 'karthikhanasi123@gmail.com', 'www', 'Cafe', 'Sub Cate', '12345', 'Street', 'Victor Plains', 'Belagavi', '590010', 'Karnataka', 'des', 'asas', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'http://localhost/web/images/la.jpg', 'elseifladder.png', 'event_loop.jpg', 'exceptions.jpg', 'forloop.png', 'hibernate_position.jpg', 'as', 'sas', 'as', 0, '2019-01-01 05:36:03'),
(6, 'SukhaDev', '9590254444', 'sukhdev@gmail.com', 'www.sukhdev.com', 'Cafe', '', '1254', '3rd Floor', 'Douglas Extension', 'Belagavi', '590010', 'Karnataka', 'sdsad', 'sdsad', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'http://localhost/web/images/switch-statement-flowchart.png', 'http://localhost/web/images/hibernate_position.jpg', 'http://localhost/web/images/event_loop.jpg', 'http://localhost/web/images/java-do-while-loop.png', 'http://localhost/web/images/while.png', 'http://localhost/web/images/exceptions.jpg', 'sukhdev@gmail.com', 'sukhdev@gmail.com', 'sukhdev@gmail.com', 0, '2019-01-01 08:10:44'),
(7, 'Karthik', '9611860471', 'karthikhanasi123@gmail.com', 'www.karthik.com', 'Cafe', 'Sub Categaory', '12546', 'Street', 'Kulas Light', 'Belagavi', '590010', 'Karnataka', 'kyrasdshd sadusitud sdnsahdsadsafsfsvdfsafsd dsadasdaysud ahdbuiasgdyas djasgdugas djasgds', 'ssd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'http://localhost/web/images/test_001.jpg', 'http://localhost/web/images/test_002.jpg', 'http://localhost/web/images/test_003.jpg', 'http://localhost/web/images/test_012.jpg', 'http://localhost/web/images/test_010.jpg', 'http://localhost/web/images/test_016.jpg', 'karthikhanasi123@gmail.com', 'Karthik Hanasi', 'Karthik Hanasi', 0, '2019-01-01 09:39:35'),
(8, 'Karthik', '9611860475', 'karthikhanasi123@gmail.com', 'www.karthik.com', 'Cafe', 'Sub Categaory', '12546', 'Street', 'Kulas Light', 'Belagavi', '590010', 'Karnataka', 'ddd', 'ssd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'http://localhost/web/images/test_001.jpg', 'http://localhost/web/images/test_002.jpg', 'http://localhost/web/images/test_003.jpg', 'http://localhost/web/images/test_012.jpg', 'http://localhost/web/images/test_010.jpg', 'http://localhost/web/images/test_016.jpg', 'karthikhanasi123@gmail.com', 'Karthik Hanasi', 'Karthik Hanasi', 0, '2019-01-01 09:40:06'),
(9, 'edssss', '88888888888', 'sss@gmail.com', 'kk', 'Advertising Agencies', 'Sub Category', '1499', 'Street', 'Kulas Light', 'city', '590010', 'state', 'ygf fff', 'ooo', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'http://localhost/web/images/test_019.jpg', 'http://localhost/web/images/test_010.jpg', 'http://localhost/web/images/test_011.jpg', 'http://localhost/web/images/test_013.jpg', 'http://localhost/web/images/test_019.jpg', 'http://localhost/web/images/test_021.jpg', '', '', '', 0, '2019-01-01 14:51:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`us_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
