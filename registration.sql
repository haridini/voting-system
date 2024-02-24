-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 10:20 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `password` int(11) NOT NULL,
  `cnfpassword` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `aadhaar` bigint(12) NOT NULL,
  `aadhaarphoto` varchar(255) NOT NULL,
  `role` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `votes` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `mobile`, `password`, `cnfpassword`, `address`, `photo`, `aadhaar`, `aadhaarphoto`, `role`, `status`, `votes`) VALUES
(10, 'Panku', 8210635992, 4568, 4568, 'gitewadi', 'panku.jpg', 603012124506, 'loginpage.png', 1, 1, 0),
(11, 'Sappharr', 12345698, 0, 0, 'YAVATMAL', 'sappharr.jpg', 1234, 'TOC question bank.pdf', 2, 0, 3),
(12, 'adarsh ', 7350472176, 0, 0, 'vaidhya nagar', 'WIFI CAR CIRCUIT11 (1).jpg', 839723967502, 'WIFI CAR CIRCUIT11 (1).jpg', 1, 1, 0),
(13, '3idiots', 987654321, 951, 951, 'yvat', 'IMG_20221115_173454.jpg', 987654321, 'IMG_20221115_171945.jpg', 2, 1, 1),
(14, 'harshada', 12345678, 123, 123, 'sawangi', 'bg3.jpg', 2345678797, 'bg5.jpg', 2, 1, 2),
(15, 'pushpa', 123456789, 12345, 12345, 'yavatmal', 'bg4.jpg', 123456789010, 'bg6.jpg', 1, 1, 0),
(16, 'prajwal', 123456789, 123456, 123456, 'sawangi', 'bg5.jpg', 23445789965, 'bg6.jpg', 2, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
