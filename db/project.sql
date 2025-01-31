-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2024 at 05:44 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `owner` int(11) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `userid`, `pid`, `owner`, `created_date`) VALUES
(138, 18, 47, 17, '2024-12-30 16:18:47');

-- --------------------------------------------------------

--
-- Table structure for table `myorders`
--

CREATE TABLE `myorders` (
  `orderid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `owner` int(11) NOT NULL,
  `order_created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `myorders`
--

INSERT INTO `myorders` (`orderid`, `userid`, `pid`, `owner`, `order_created_date`) VALUES
(68, 18, 45, 17, '2024-12-30 16:10:51'),
(70, 21, 47, 17, '2024-12-30 16:12:20'),
(72, 22, 48, 17, '2024-12-30 16:13:06');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `details` text NOT NULL,
  `impath` varchar(500) NOT NULL,
  `owner` int(10) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `name`, `price`, `details`, `impath`, `owner`, `created_date`) VALUES
(45, 'Mango', 70, 'Mango fruit is roughly oval in shape, with uneven sides.', '../shared/images/mango.jpeg', 17, '2024-12-30 16:02:35'),
(47, 'Guava', 40, 'The fruits are round to pear-shaped and measure up to 7.6 cm in diameter.', '../shared/images/guava.jpeg', 17, '2024-12-30 16:04:23'),
(48, 'Pineapple', 100, 'A tough rind made up of hexagonal units and a fibrous, juicy flesh which may be yellow to white in color. ', '../shared/images/pineapple.jpeg', 17, '2024-12-30 16:05:32'),
(49, 'Coconuts', 120, 'A coconut is a large, nut-like fruit that grows high in trees.', '../shared/images/coconut.jpeg', 17, '2024-12-30 16:06:27');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `usertype`) VALUES
(17, 'Moumita', '2001', 'Seller'),
(18, 'Ram', '123', 'Buyer'),
(21, 'Gita', '123', 'Buyer'),
(22, 'Rahul', '258', 'Buyer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `myorders`
--
ALTER TABLE `myorders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `myorders`
--
ALTER TABLE `myorders`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
