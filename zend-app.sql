-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2019 at 08:18 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zend-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `mobile_no` bigint(20) NOT NULL,
  `address_line_1` varchar(150) NOT NULL,
  `address_line_2` varchar(150) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `password`, `mobile_no`, `address_line_1`, `address_line_2`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Steve', 'Green', 'steve.green@deerfoot.co.uk', '123456', 2380817151, 'Deerfoot I.T. Resources Limited Units 10/11', 'Mortimers Park, Ower,', 1, '2019-02-19 00:00:00', '2019-02-01 11:55:51'),
(2, 'Steve', 'Jobs', 'steve.jobs@deerfoot.co.uk', '123456', 2380817151, 'Deerfoot I.T. Resources Limited Units 10/11', 'Mortimers Park, Ower,', 1, '2019-02-19 00:00:00', '2019-02-01 11:55:51'),
(3, 'Steve', 'Smith', 'steve.smith@deerfoot.co.uk', '123456', 2380817151, 'Deerfoot I.T. Resources Limited Units 10/11', 'Mortimers Park, Ower,', 1, '2019-02-19 00:00:00', '2019-02-01 11:55:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
