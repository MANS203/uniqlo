-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2022 at 06:14 AM
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
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `name`, `price`, `image`, `quantity`) VALUES
(15, 0, 'Wood Simple Chair V2', '10.00', '15.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `price_discount` decimal(10,2) NOT NULL,
  `image` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `created_at`, `price_discount`, `image`, `category`) VALUES
(10, 'Simple Black clock', '16.00', '', '2022-12-23 18:11:16', '10.00', '1.png', ''),
(11, 'BO&Play Wireless Speaker', '16.00', '', '2022-12-23 18:11:35', '10.00', '2.png', ''),
(12, 'Brone Candle', '16.00', '', '2022-12-23 18:12:01', '10.00', '3.png', ''),
(13, 'Brone Lamp Glasses', '16.00', '', '2022-12-23 18:12:19', '10.00', '4.png', ''),
(14, 'Clothes Boxed', '16.00', '', '2022-12-23 18:12:43', '10.00', '5.png', ''),
(15, 'Liqyid Unero Ginger Lily', '16.00', '', '2022-12-23 18:13:02', '10.00', '6.png', ''),
(16, 'Miliraty Backpack', '16.00', '', '2022-12-23 18:13:35', '10.00', '7.png', ''),
(17, 'Saved Wines Corkscrew', '16.00', '', '2022-12-23 18:14:06', '10.00', '8.png', ''),
(18, 'Simple Fabric Bags', '16.00', '', '2022-12-23 18:14:18', '10.00', '9.png', ''),
(19, 'Simple Fabric Chair', '16.00', '', '2022-12-23 18:14:34', '10.00', '10.png', ''),
(20, 'Unero Round Sunglass', '16.00', '', '2022-12-23 18:15:03', '10.00', '11.png', ''),
(21, 'Unero Small Bag', '16.00', '', '2022-12-23 18:15:21', '10.00', '12.png', ''),
(22, 'Wood Complex Lamp Box', '16.00', '', '2022-12-23 18:15:33', '10.00', '13.png', ''),
(23, 'Wood Long TV Board', '16.00', '', '2022-12-23 18:15:50', '10.00', '14.png', ''),
(24, 'Wood Simple Chair V2', '16.00', '', '2022-12-23 18:16:07', '10.00', '15.png', ''),
(25, 'Wood Simple clock', '16.00', '', '2022-12-23 18:16:23', '10.00', '16.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(10, 'admin A', 'admin01@gmail.com', '123456', 'admin'),
(14, 'user A', 'user01@gmail.com', '698d51a19d8a121ce581499d7b701668', 'user'),
(15, 'user B', 'user02@gmail.com', '698d51a19d8a121ce581499d7b701668', 'user'),
(16, 'ziad', 'ziad@gmail.com', '', 'user'),
(17, 'abdoo', 'abdoomes@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
