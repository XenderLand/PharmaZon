-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2023 at 06:42 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `getcat` (IN `cid` INT)   SELECT * FROM categories WHERE cat_id=cid$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) DEFAULT NULL,
  `categoryDescription` longtext DEFAULT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`, `categoryDescription`, `creationDate`, `updationDate`) VALUES
(3, 'First Aid', 'First Aid Medicines and Tools', '2023-08-28 10:55:37', '28-08-2023 10:56:24 AM'),
(4, 'Pain Relief', 'Pain Relief or Painkillers', '2017-01-24 10:56:24', '28-08-2023 10:56:24 AM'),
(5, 'Vitamins & Minerals', 'Vitamins & Minerals', '2017-01-24 10:56:24', '28-08-2023 10:56:24 AM'),
(6, 'Cough, Cold & Flu', 'Cough, Cold & Flu', '2023-08-28 10:56:24', '28-08-2023 10:56:24 AM');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `orderDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `paymentMethod` varchar(50) DEFAULT NULL,
  `orderStatus` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userId`, `productId`, `quantity`, `orderDate`, `paymentMethod`, `orderStatus`) VALUES
(1, 1, '3', 1, '2017-03-07 19:32:57', 'COD', NULL),
(3, 1, '4', 1, '2017-03-10 19:43:04', 'Debit / Credit card', 'Delivered'),
(4, 1, '17', 1, '2017-03-08 16:14:17', 'COD', 'in Process'),
(5, 1, '3', 1, '2017-03-08 19:21:38', 'COD', NULL),
(6, 1, '4', 1, '2017-03-08 19:21:38', 'COD', NULL),
(7, 0, '1', 3, '2023-08-10 01:29:22', 'Paystack', NULL),
(8, 0, '21', 1, '2023-08-10 00:57:54', 'Paystack', NULL),
(9, 0, '23', 1, '2023-08-11 05:12:34', 'Paystack', NULL),
(10, 0, '27', 1, '2023-08-11 05:12:35', 'Paystack', NULL),
(11, 0, '22', 1, '2023-08-11 04:34:12', 'Paystack', NULL),
(12, 0, '23', 1, '2023-08-11 04:34:12', 'Paystack', NULL),
(13, 0, '27', 1, '2023-08-11 04:34:12', 'Paystack', NULL),
(14, 0, '22', 1, '2023-08-11 04:36:40', 'Paystack', NULL),
(15, 0, '23', 1, '2023-08-11 04:36:40', 'Paystack', NULL),
(16, 0, '27', 1, '2023-08-11 04:36:40', 'Paystack', NULL),
(17, 0, '22', 1, '2023-08-11 04:39:42', 'Paystack', NULL),
(18, 0, '23', 1, '2023-08-11 04:39:42', 'Paystack', NULL),
(19, 0, '27', 2, '2023-08-11 04:39:42', 'Paystack', NULL),
(20, 0, '27', 2, '2023-08-11 05:07:36', 'Paystack', NULL),
(21, 0, '25', 1, '2023-08-11 04:24:19', 'Paystack', NULL),
(22, 0, '27', 2, '2023-08-11 04:24:19', 'Paystack', NULL),
(23, 0, '25', 1, '2023-08-11 04:24:30', 'Paystack', NULL),
(24, 0, '27', 2, '2023-08-11 04:24:30', 'Paystack', NULL),
(25, 0, '25', 1, '2023-08-11 04:25:02', 'Paystack', NULL),
(26, 0, '25', 1, '2023-08-11 04:29:07', 'Paystack', NULL),
(27, 0, '25', 2, '2023-08-11 04:34:01', 'Paystack', NULL),
(28, 0, '25', 2, '2023-08-11 04:57:31', 'Paystack', NULL),
(29, 0, '26', 2, '2023-08-11 04:57:31', 'Paystack', NULL),
(30, 0, '26', 2, '2023-08-11 04:58:33', 'Paystack', NULL),
(31, 0, '22', 2, '2023-08-16 00:51:25', 'Paystack', NULL),
(32, 0, '25', 1, '2023-08-16 00:51:25', 'Paystack', NULL),
(33, 0, '22', 2, '2023-08-16 00:57:53', 'Paystack', NULL),
(34, 0, '22', 2, '2023-08-16 01:10:48', 'Paystack', NULL),
(35, 0, '26', 1, '2023-08-16 01:10:49', 'Paystack', NULL),
(36, 0, '27', 1, '2023-08-16 01:10:49', 'Paystack', NULL),
(37, 0, '22', 2, '2023-08-16 01:11:06', 'Paystack', NULL),
(38, 0, '26', 1, '2023-08-16 01:11:06', 'Paystack', NULL),
(39, 0, '27', 1, '2023-08-16 01:11:06', 'Paystack', NULL),
(40, 0, '22', 2, '2023-08-16 01:14:16', 'Paystack', NULL),
(41, 0, '26', 1, '2023-08-16 01:14:16', 'Paystack', NULL),
(42, 0, '27', 1, '2023-08-16 01:14:16', 'Paystack', NULL),
(43, 0, '22', 2, '2023-08-16 01:21:22', 'Paystack', NULL),
(44, 0, '26', 1, '2023-08-16 01:21:22', 'Paystack', NULL),
(45, 0, '27', 1, '2023-08-16 01:21:22', 'Paystack', NULL),
(46, 0, '22', 1, '2023-08-16 01:22:49', 'Paystack', NULL),
(47, 0, '26', 1, '2023-08-16 01:22:49', 'Paystack', NULL),
(48, 0, '27', 1, '2023-08-16 01:22:49', 'Paystack', NULL),
(49, 0, '22', 1, '2023-08-16 01:12:55', 'Paystack', NULL),
(50, 0, '23', 1, '2023-08-16 01:12:55', 'Paystack', NULL),
(51, 0, '26', 1, '2023-08-16 01:12:55', 'Paystack', NULL),
(52, 0, '27', 1, '2023-08-16 01:12:55', 'Paystack', NULL),
(53, 0, '23', 1, '2023-08-16 01:15:51', 'Paystack', NULL),
(54, 0, '23', 1, '2023-08-16 01:16:20', 'Paystack', NULL),
(55, 0, '26', 1, '2023-08-16 01:16:21', 'Paystack', NULL),
(56, 0, '26', 1, '2023-08-16 01:17:46', 'Paystack', NULL),
(57, 0, '22', 1, '2023-08-16 01:18:09', 'Paystack', NULL),
(58, 0, '26', 1, '2023-08-16 01:18:10', 'Paystack', NULL),
(59, 0, '22', 1, '2023-08-16 01:21:14', 'Paystack', NULL),
(60, 0, '26', 1, '2023-08-16 01:21:14', 'Paystack', NULL),
(61, 0, '27', 1, '2023-08-16 01:21:14', 'Paystack', NULL),
(62, 0, '27', 1, '2023-08-16 01:24:55', 'Paystack', NULL),
(63, 0, '27', 2, '2023-08-16 01:25:22', 'Paystack', NULL),
(64, 0, '25', 1, '2023-08-16 01:25:56', 'Paystack', NULL),
(65, 0, '27', 2, '2023-08-16 01:25:56', 'Paystack', NULL),
(66, 0, '22', 1, '2023-08-17 00:48:33', 'Paystack', NULL),
(67, 0, '27', 1, '2023-08-17 00:48:33', 'Paystack', NULL),
(68, 0, '22', 1, '2023-08-17 00:51:14', 'Paystack', NULL),
(69, 0, '26', 1, '2023-08-17 00:51:14', 'Paystack', NULL),
(70, 0, '27', 2, '2023-08-17 00:51:14', 'Paystack', NULL),
(71, 0, '23', 1, '2023-08-17 00:53:16', 'Paystack', NULL),
(72, 0, '25', 1, '2023-08-17 00:53:16', 'Paystack', NULL),
(73, 0, '23', 2, '2023-08-17 01:11:11', 'Paystack', NULL),
(74, 0, '25', 1, '2023-08-17 01:11:11', 'Paystack', NULL),
(75, 0, '23', 1, '2023-08-20 20:44:13', 'Paystack', NULL),
(76, 0, '23', 1, '2023-08-20 20:07:39', 'Paystack', NULL),
(77, 1, '22', 1, '2023-08-22 08:05:26', 'Paystack', NULL),
(78, 1, '23', 2, '2023-08-22 08:05:26', 'Paystack', NULL),
(79, 1, '22', 1, '2023-08-22 07:58:20', 'Paystack', NULL),
(80, 1, '22', 1, '2023-08-22 08:33:54', 'Paystack', NULL),
(81, 1, '22', 1, '2023-08-22 07:38:25', 'Paystack', NULL),
(82, 0, '26', 1, '2023-08-22 08:20:21', NULL, NULL),
(83, 1, '26', 1, '2023-08-22 08:21:10', '', NULL),
(84, 1, '26', 1, '2023-08-22 08:31:26', '', NULL),
(85, 1, '26', 1, '2023-08-22 08:36:42', '', NULL),
(86, 1, '27', 1, '2023-08-22 08:36:42', '', NULL),
(87, 1, '26', 1, '2023-08-23 03:16:25', '', NULL),
(88, 1, '23', 1, '2023-08-23 03:49:49', '', NULL),
(89, 1, '26', 1, '2023-08-23 03:49:49', '', NULL),
(90, 1, '23', 2, '2023-08-23 03:52:20', '', NULL),
(91, 1, '26', 1, '2023-08-23 03:52:20', '', NULL),
(92, 1, '23', 2, '2023-08-23 03:53:35', '', NULL),
(93, 1, '26', 1, '2023-08-23 03:53:35', '', NULL),
(94, 0, '25', 1, '2023-08-26 04:44:55', NULL, NULL),
(95, 0, '25', 1, '2023-08-26 04:50:06', NULL, NULL),
(96, 1, '25', 1, '2023-08-26 04:55:23', '', NULL),
(97, 1, '25', 1, '2023-08-26 04:58:49', '', NULL),
(98, 1, '25', 1, '2023-08-26 05:01:05', '', NULL),
(99, 1, '25', 1, '2023-08-26 05:04:16', '', NULL),
(100, 0, '23', 1, '2023-08-26 04:42:31', NULL, NULL),
(101, 1, '23', 1, '2023-08-26 04:43:53', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ordertrackhistory`
--

CREATE TABLE `ordertrackhistory` (
  `id` int(11) NOT NULL,
  `orderId` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `remark` mediumtext DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ordertrackhistory`
--

INSERT INTO `ordertrackhistory` (`id`, `orderId`, `status`, `remark`, `postingDate`) VALUES
(1, 3, 'in Process', 'Order has been Shipped.', '2017-03-10 19:36:45'),
(2, 1, 'Delivered', 'Order Has been delivered', '2017-03-10 19:37:31'),
(3, 3, 'Delivered', 'Product delivered successfully', '2017-03-10 19:43:04'),
(4, 4, 'in Process', 'Product ready for Shipping', '2017-03-10 19:50:36');

-- --------------------------------------------------------

--
-- Table structure for table `pharadmin`
--

CREATE TABLE `pharadmin` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `passwork` varchar(100) NOT NULL,
  `creationDate` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `updationDate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pharadmin`
--

INSERT INTO `pharadmin` (`id`, `email`, `passwork`, `creationDate`, `updationDate`) VALUES
(1, 'jamal@yahoo.com', 'qwert@12345', '2023-08-28 04:56:59.000000', '2023-08-28 04:56:59');

-- --------------------------------------------------------

--
-- Table structure for table `productreviews`
--

CREATE TABLE `productreviews` (
  `id` int(11) NOT NULL,
  `productId` int(11) DEFAULT NULL,
  `quality` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `review` longtext DEFAULT NULL,
  `reviewDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `productreviews`
--

INSERT INTO `productreviews` (`id`, `productId`, `quality`, `price`, `value`, `name`, `summary`, `review`, `reviewDate`) VALUES
(2, 3, 4, 5, 5, 'Anuj Kumar', 'BEST PRODUCT FOR ME :)', 'BEST PRODUCT FOR ME :)', '2017-02-26 20:43:57'),
(3, 3, 3, 4, 3, 'Sarita pandey', 'Nice Product', 'Value for money', '2017-02-26 20:52:46'),
(4, 3, 3, 4, 3, 'Sarita pandey', 'Nice Product', 'Value for money', '2017-02-26 20:59:19');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` int(100) NOT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `productPrice` int(11) DEFAULT NULL,
  `productImage1` varchar(255) DEFAULT NULL,
  `productAvailability` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `productName`, `productPrice`, `productImage1`, `productAvailability`, `postingDate`, `updationDate`) VALUES
(22, 4, 'Martins Liver Salt', 46, 'martinsLS_040.jpg', '100', '2023-08-10 00:58:30', NULL),
(23, 5, 'MyTil', 43, '1058377-1.jpg', '50', '2023-08-10 00:58:54', NULL),
(25, 5, 'Taabea', 56, 'TAABEA.jpg', '100', '2023-08-10 01:02:52', NULL),
(26, 4, 'Magacid', 35, 'Magacid.jpg', '50', '2023-08-10 01:03:52', NULL),
(27, 5, 'Vikil', 37, 'vikil.jpg', '50', '2023-08-10 00:59:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `categoryid` int(11) DEFAULT NULL,
  `subcategory` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `categoryid`, `subcategory`, `creationDate`, `updationDate`) VALUES
(2, 4, 'Led Television', '2017-01-26 16:24:52', '26-01-2017 11:03:40 PM'),
(3, 4, 'Television', '2017-01-26 16:29:09', ''),
(4, 4, 'Mobiles', '2017-01-30 16:55:48', ''),
(5, 4, 'Mobile Accessories', '2017-02-04 04:12:40', ''),
(6, 4, 'Laptops', '2017-02-04 04:13:00', ''),
(7, 4, 'Computers', '2017-02-04 04:13:27', ''),
(8, 3, 'Comics', '2017-02-04 04:13:54', ''),
(9, 5, 'Beds', '2017-02-04 04:36:45', ''),
(10, 5, 'Sofas', '2017-02-04 04:37:02', ''),
(11, 5, 'Dining Tables', '2017-02-04 04:37:51', ''),
(12, 6, 'Men Footwears', '2017-03-10 20:12:59', '');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userEmail`, `userip`, `loginTime`, `logout`, `status`) VALUES
(1, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 11:18:50', '', 1),
(2, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 11:29:33', '', 1),
(3, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 11:30:11', '', 1),
(4, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 15:00:23', '26-02-2017 11:12:06 PM', 1),
(5, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 18:08:58', '', 0),
(6, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 18:09:41', '', 0),
(7, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 18:10:04', '', 0),
(8, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 18:10:31', '', 0),
(9, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 18:13:43', '', 1),
(10, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-27 18:52:58', '', 0),
(11, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-27 18:53:07', '', 1),
(12, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-03 18:00:09', '', 0),
(13, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-03 18:00:15', '', 1),
(14, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-06 18:10:26', '', 1),
(15, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-07 12:28:16', '', 1),
(16, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-07 18:43:27', '', 1),
(17, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-07 18:55:33', '', 1),
(18, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-07 19:44:29', '', 1),
(19, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-08 19:21:15', '', 1),
(20, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-15 17:19:38', '', 1),
(21, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-15 17:20:36', '15-03-2017 10:50:39 PM', 1),
(22, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-16 01:13:57', '', 1),
(23, 'hgfhgf@gmass.com', 0x3a3a3100000000000000000000000000, '2018-04-29 09:30:40', '', 1),
(24, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2023-02-09 22:23:13', NULL, 1),
(25, 'mensah@yahoo.com', 0x3132372e302e302e3100000000000000, '2023-08-17 01:02:40', NULL, 1),
(26, 'jamal@yahoo.com', 0x3132372e302e302e3100000000000000, '2023-08-22 08:17:31', NULL, 1),
(27, 'jamal@yahoo.com', 0x3a3a3100000000000000000000000000, '2023-08-22 08:21:04', '23-08-2023 09:24:33 AM', 1),
(28, 'jamal@yahoo.com', 0x3132372e302e302e3100000000000000, '2023-08-26 04:45:58', NULL, 0),
(29, 'jamal@yahoo.com', 0x3132372e302e302e3100000000000000, '2023-08-26 04:48:34', NULL, 0),
(30, 'jamalraj@yahoo.com', 0x3132372e302e302e3100000000000000, '2023-08-26 04:50:43', NULL, 0),
(31, 'jamal@yahoo.com', 0x3132372e302e302e3100000000000000, '2023-08-26 04:51:08', NULL, 0),
(32, 'jamal@yahoo.com', 0x3132372e302e302e3100000000000000, '2023-08-26 04:52:32', NULL, 0),
(33, 'jamal@yahoo.com', 0x3132372e302e302e3100000000000000, '2023-08-26 04:54:18', NULL, 0),
(34, 'jamal@yahoo.com', 0x3132372e302e302e3100000000000000, '2023-08-26 04:54:46', NULL, 0),
(35, 'jamal@yahoo.com', 0x3132372e302e302e3100000000000000, '2023-08-26 04:55:13', '26-08-2023 10:35:33 AM', 1),
(36, 'jamal@yahoo.com', 0x3132372e302e302e3100000000000000, '2023-08-26 05:10:13', '26-08-2023 10:55:00 AM', 1),
(37, '', 0x3132372e302e302e3100000000000000, '2023-08-26 04:46:02', NULL, 0),
(38, '', 0x3132372e302e302e3100000000000000, '2023-08-26 04:47:54', NULL, 0),
(39, 'jamal@yahoo.com', 0x3132372e302e302e3100000000000000, '2023-08-26 05:19:25', '26-08-2023 10:49:41 AM', 1),
(40, 'jamal@yahoo.com', 0x3132372e302e302e3100000000000000, '2023-08-26 04:42:55', NULL, 0),
(41, 'jamal@yahoo.com', 0x3132372e302e302e3100000000000000, '2023-08-26 04:43:30', '26-08-2023 10:34:25 AM', 1),
(42, 'jamal@yahoo.com', 0x3132372e302e302e3100000000000000, '2023-08-26 04:37:29', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `shippingAddress` longtext DEFAULT NULL,
  `shippingState` varchar(255) DEFAULT NULL,
  `shippingCity` varchar(255) DEFAULT NULL,
  `shippingPincode` int(11) DEFAULT NULL,
  `billingAddress` longtext DEFAULT NULL,
  `billingState` varchar(255) DEFAULT NULL,
  `billingCity` varchar(255) DEFAULT NULL,
  `billingPincode` int(11) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contactno`, `password`, `shippingAddress`, `shippingState`, `shippingCity`, `shippingPincode`, `billingAddress`, `billingState`, `billingCity`, `billingPincode`, `regDate`, `updationDate`) VALUES
(1, 'jamal raj', 'jamal@yahoo.com', 261760077, '7760d0ee15adbba1928ae57605216917', 'Takoradi New-site B-65', 'Takoradi', 'Takoradi', 261760077, 'Takoradi New-site B-65', 'Takoradi', 'Takoradi', 261760077, '2023-08-22 08:11:26', NULL),
(4, 'kofi Mensah', 'mensah@yahoo.com', 213451628, 'c412801525e25278fa93a240eec48d93', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-17 01:02:04', NULL),
(6, '', '', 0, '7760d0ee15adbba1928ae57605216917', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-26 05:33:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `userId`, `productId`, `postingDate`) VALUES
(1, 1, 0, '2017-02-27 18:53:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharadmin`
--
ALTER TABLE `pharadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productreviews`
--
ALTER TABLE `productreviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pharadmin`
--
ALTER TABLE `pharadmin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `productreviews`
--
ALTER TABLE `productreviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
