-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 23, 2023 at 01:59 PM
-- Server version: 8.0.32-0ubuntu0.22.04.2
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pract`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '123'),
(2, 'sarthak', '456'),
(3, 'admin1', '456'),
(4, 'nirav', '222'),
(54, 'admin', '123'),
(57, 'dhruv', '789'),
(58, 'dhruv', '789'),
(59, 'sart', '159'),
(60, 'nirav123', 'nirav123'),
(61, 'sart', '789');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int NOT NULL,
  `billing_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone` varchar(15) NOT NULL,
  `order_date` date NOT NULL,
  `total` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pay_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pay_method` varchar(255) NOT NULL,
  `user_add` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `cancel_reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `billing_name`, `product_name`, `phone`, `order_date`, `total`, `pay_status`, `pay_method`, `user_add`, `order_status`, `cancel_reason`) VALUES
(1, 'sarthak', 'pizza', '123456789', '2023-02-20', '1000', 'pending', 'COD', 'surat', 'pending', ''),
(3, 'admin', 'pasta', '123456789', '2023-02-20', '200', 'paid', 'Gpay', 'kamrej', 'dispatch', ''),
(4, 'admin', 'pasta', '123456789', '2023-02-20', '200', 'paid', 'Gpay', 'kamrej', 'cancel', ''),
(5, 'admin', 'pasta', '123456789', '2023-02-20', '200', 'paid', 'Gpay', 'kamrej', 'dispatch', ''),
(7, 'dhruv', 'burger', '456789132', '2023-02-20', '300', 'pending', 'COD', 'surat', 'pending', ''),
(8, 'dhruv', 'burger', '456789132', '2023-02-20', '300', 'pending', 'COD', 'surat', 'dispatch', ''),
(9, 'darshan', 'nitrogen biscuite', '987654321', '2023-02-21', '150', 'pending', 'COD', 'pasodra, surat, gujarat - 395006', 'cancel', ''),
(10, 'a', 'b', '1', '2023-02-22', '2', 'c', 'd', 'f', 'cancel', 'customer at not home\r\n'),
(11, 'nikhil', 'panipuri', '98765431', '2023-02-22', '20', 'pending', 'online', 'lajamni, motavaracha, surat - 395006', 'cancel', 'abcdefg'),
(12, 'nikhil', 'panipuri', '98765431', '2023-02-22', '20', 'pending', 'online', 'lajamni, motavaracha, surat - 395006', 'pending', ''),
(13, 'kishan', 'cha', '456789123', '2023-02-22', '40', 'paid', 'COD', 'kamrej', 'dispatch', ''),
(14, 'admin', 'gsggdfg', '1', '2023-02-22', '1000', 'paid', 'online', 'lajamni, motavaracha, surat - 395006', 'cancel', 'not satisfy'),
(15, 'sart', 'peri peri fries', '4455661122', '2023-02-23', '120', 'paid', 'COD', 'lajamni, motavaracha, surat - 395006', 'pending', 'null'),
(16, 'sart', 'peri peri fries', '4455661122', '2023-02-23', '120', 'paid', 'COD', 'lajamni, motavaracha, surat - 395006', 'pending', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int NOT NULL,
  `product_name` text NOT NULL,
  `product_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_image`, `price`) VALUES
(22, 'Burger', '54481675334264.jpeg', 90),
(25, 'Dosa', '61121675335029.jpeg', 140),
(30, 'Garlic bread', '88871676280231.jpeg', 160),
(32, 'Paneer chilli dry', '67031676280853.jpeg', 160);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
