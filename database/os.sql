-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2025 at 07:57 PM
-- Server version: 10.4.28-Ma riaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `os`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL,
  `dor` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `email`, `password`, `dor`) VALUES
(1, 'piyush@gmail.com', '1234', '30-10-2024');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `status` varchar(15) NOT NULL,
  `date` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `user_id`, `cate_id`, `pro_id`, `status`, `date`) VALUES
(1, 1, 1, 14, 'Y', '2024-10-30'),
(2, 1, 1, 14, 'Y', '2024-10-30'),
(3, 1, 2, 11, 'Y', '2024-10-30'),
(4, 1, 1, 14, 'Y', '2024-10-31'),
(5, 1, 1, 14, 'Y', '2024-10-31'),
(6, 1, 1, 14, 'Y', '2024-11-01'),
(20, 4, 1, 14, 'Y', '2025-01-27'),
(21, 4, 1, 16, 'Y', '2025-01-27'),
(11, 3, 1, 14, 'Y', '2024-10-26'),
(12, 4, 1, 16, 'Y', '2024-11-17'),
(13, 2, 1, 14, 'Y', '2024-10-24'),
(14, 1, 1, 16, 'Y', '2024-10-24'),
(15, 2, 1, 16, 'Y', '2025-01-27'),
(16, 3, 1, 14, 'Y', '2025-01-27'),
(17, 3, 2, 11, 'Y', '2025-01-27'),
(18, 3, 2, 10, 'Y', '2025-01-27'),
(19, 4, 1, 16, 'Y', '2025-01-27'),
(22, 4, 2, 11, 'Y', '2025-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cat_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `name`, `date`) VALUES
(1, 'Vineggar', '2024-10-30 11:02:41'),
(2, 'Pickle', '2024-10-30 11:03:16'),
(3, 'jaggery', '2024-10-30 11:04:27'),
(4, '', '2024-10-30 11:05:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `con_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `message` varchar(200) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`con_id`, `name`, `email`, `mobile`, `message`, `date`) VALUES
(1, 'priy darshan', 'priydarshan@gmail.com', '7268099166', 'Hello i am priy darshan', '2024-10-27 21:04:13'),
(2, 'piyush', 'piyush@gmail.com', '6392058807', 'hello i am piyush', '2024-10-27 21:18:38'),
(3, 'kartik kumar rai', 'kartik@gmail.com', '639205353', 'hello i am kartik', '2024-10-27 21:18:43'),
(4, 'ambuj', 'ambuj@gmail.com', '6392058807', 'hello i am ambuj', '2024-10-27 21:19:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notification`
--

CREATE TABLE `tbl_notification` (
  `sr_no` int(11) NOT NULL,
  `notification` varchar(200) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_notification`
--

INSERT INTO `tbl_notification` (`sr_no`, `notification`, `date`) VALUES
(2, 'GAVAI SWAD', '2024-11-10 12:10:08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `unit` varchar(8) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `order_date` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `user_id`, `cate_id`, `pro_id`, `unit`, `amount`, `order_date`) VALUES
(14, 1, 3, 1, '1', '99', '2024-10-24'),
(13, 2, 2, 11, '1', '275', '2024-10-24'),
(17, 4, 1, 16, '24', '45', '2025-01-27'),
(18, 4, 1, 14, '44', '75', '2025-01-27'),
(19, 4, 1, 16, '23', '45', '2025-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(100) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `total_unit` int(5) NOT NULL,
  `c_price` varchar(4) NOT NULL,
  `s_price` varchar(4) NOT NULL,
  `expiry` varchar(10) NOT NULL,
  `description` varchar(200) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`pro_id`, `pro_name`, `cat_id`, `file_name`, `total_unit`, `c_price`, `s_price`, `expiry`, `description`, `date`) VALUES
(1, 'Jaggery Product', 3, 'jagge5.jpg', 50, '70', '99', '2026-09-30', 'Pure and fresh item', '2024-10-30 03:42:05'),
(4, 'Oraganic Tattva Jaggery', 3, 'jagge3.jpg', 99, '199', '299', '2026-08-30', 'We will pick up the items before interesting pics', '2024-10-30 03:53:18'),
(14, 'Orange Vinegar', 1, 'vin7.jpg', 44, '65', '75', '2026-09-11', 'This is good product', '2024-10-30 11:13:03'),
(16, 'fruit', 1, 'vin5.jpg', 23, '35', '45', '2026-09-10', 'This is good product', '2024-10-31 13:57:53'),
(10, 'Orange pickle', 2, 'pickle3.jpeg', 125, '175', '225', '2026-09-10', ' He is the best pickle ', '2024-08-30 04:19:32'),
(11, 'Pineapple Pickle', 2, 'pickle8.webp', 165, '225', '275', '2026-10-06', 'This is a used full pickle for everday', '2024-08-30 04:22:03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dor` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `name`, `email`, `mobile`, `password`, `city`, `address`, `dor`) VALUES
(1, 'priy darshan', 'priydarshan@gmail.com', '7268099166', '1234', 'gorakhpur', 'GORAKHPUR', '2024-10-31'),
(2, 'KARTIK KUMAR RAI', 'kartik@gmail.com', '6393587859', '1234', 'ballia', 'BALLIA', '2024-12-12'),
(3, 'ambuj', 'ambuj@gmail.com', '6205231516', '1234', 'deoria', 'DEORIA', '2025-01-02'),
(4, 'piyush kumar singh', 'piyush@gmail.com', '9721966272', '1234', 'Gorakhpur', 'belwa buzurg', '2024-10-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
