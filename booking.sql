-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2018 at 01:13 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `bookref` varchar(1000) DEFAULT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `mobileno` int(11) NOT NULL,
  `hotel` varchar(100) NOT NULL,
  `rtype` varchar(100) NOT NULL,
  `noofrooms` int(11) NOT NULL,
  `roomupdate` int(11) NOT NULL,
  `checkin` varchar(1000) NOT NULL,
  `checkout` varchar(1000) NOT NULL,
  `pmethod` varchar(100) DEFAULT NULL,
  `ptype` varchar(100) DEFAULT NULL,
  `totalp` int(11) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `additionalinfo` varchar(1000) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `bookref`, `fname`, `lname`, `mobileno`, `hotel`, `rtype`, `noofrooms`, `roomupdate`, `checkin`, `checkout`, `pmethod`, `ptype`, `totalp`, `status`, `additionalinfo`, `created_at`, `updated_at`) VALUES
(1, NULL, 'kevin', 'kemboi', 712398398, 'The Clarion Hotel', 'Single', 5, 0, '30/03/2018', '01/04/2018', 'onarrival', 'Cash', 7500, 'checkedout', NULL, '2018-04-02 07:05:30', '2018-04-02 04:05:30'),
(2, NULL, 'moses', 'maina', 877878, 'The Clarion Hotel', 'Single', 1, 1, '30/03/2018', '31/03/2018', 'onarrival', 'Cash', 1500, NULL, NULL, '2018-03-31 10:34:33', '2018-03-30 07:44:30'),
(111, NULL, 'leo', 'leo', 87878787, 'The Clarion Hotel', 'Single', 1, 1, '06/04/2018', '12/04/2018', NULL, NULL, 1500, NULL, NULL, '2018-04-06 06:27:02', '2018-04-06 06:27:02'),
(116, NULL, 'michael', 'kip', 988989, 'The Clarion Hotel', 'Single', 1, 1, '06/04/2018', '12/04/2018', NULL, NULL, 1500, NULL, NULL, '2018-04-06 07:02:14', '2018-04-06 07:02:14'),
(117, NULL, 'sam', 'sam', 9898989, 'The Clarion Hotel', 'Single', 1, 1, '06/04/2018', '10/04/2018', NULL, NULL, 1500, NULL, NULL, '2018-04-06 07:03:33', '2018-04-06 07:03:33'),
(118, NULL, 'mtende', 'juliyus', 6878787, 'Hilton', 'Single', 1, 1, '07/04/2018', '10/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 05:08:44', '2018-04-07 05:08:44'),
(119, NULL, 'y7hy7h', 'hyhyyh', 55567, 'Hilton', 'Single', 1, 1, '09/04/2018', '12/04/2018', NULL, NULL, 2150, NULL, NULL, '2018-04-07 05:13:29', '2018-04-07 05:13:29'),
(120, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 05:23:57', '2018-04-07 05:23:57'),
(121, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 05:25:58', '2018-04-07 05:25:58'),
(122, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 05:41:24', '2018-04-07 05:41:24'),
(123, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 05:42:28', '2018-04-07 05:42:28'),
(124, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 05:43:08', '2018-04-07 05:43:08'),
(125, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 05:46:58', '2018-04-07 05:46:58'),
(126, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 05:52:15', '2018-04-07 05:52:15'),
(127, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:01:04', '2018-04-07 06:01:04'),
(128, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:01:37', '2018-04-07 06:01:37'),
(129, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:13:11', '2018-04-07 06:13:11'),
(130, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:15:42', '2018-04-07 06:15:42'),
(131, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:17:00', '2018-04-07 06:17:00'),
(132, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:17:37', '2018-04-07 06:17:37'),
(133, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:19:04', '2018-04-07 06:19:04'),
(134, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:20:17', '2018-04-07 06:20:17'),
(135, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:21:49', '2018-04-07 06:21:49'),
(136, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:25:06', '2018-04-07 06:25:06'),
(137, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:25:53', '2018-04-07 06:25:53'),
(138, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:27:21', '2018-04-07 06:27:21'),
(139, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:29:29', '2018-04-07 06:29:29'),
(140, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:30:08', '2018-04-07 06:30:08'),
(141, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:30:31', '2018-04-07 06:30:31'),
(142, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:31:02', '2018-04-07 06:31:02'),
(143, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:32:32', '2018-04-07 06:32:32'),
(144, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:33:13', '2018-04-07 06:33:13'),
(145, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:34:24', '2018-04-07 06:34:24'),
(146, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:34:47', '2018-04-07 06:34:47'),
(147, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:35:25', '2018-04-07 06:35:25'),
(148, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:35:55', '2018-04-07 06:35:55'),
(149, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:36:43', '2018-04-07 06:36:43'),
(150, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:38:03', '2018-04-07 06:38:03'),
(151, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:39:21', '2018-04-07 06:39:21'),
(152, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:39:45', '2018-04-07 06:39:45'),
(153, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:41:28', '2018-04-07 06:41:28'),
(154, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:41:53', '2018-04-07 06:41:53'),
(155, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:42:22', '2018-04-07 06:42:22'),
(156, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:42:37', '2018-04-07 06:42:37'),
(157, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:42:51', '2018-04-07 06:42:51'),
(158, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:43:22', '2018-04-07 06:43:22'),
(159, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:43:31', '2018-04-07 06:43:31'),
(160, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:45:14', '2018-04-07 06:45:14'),
(161, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:47:21', '2018-04-07 06:47:21'),
(162, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:48:53', '2018-04-07 06:48:53'),
(163, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:49:31', '2018-04-07 06:49:31'),
(164, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:52:24', '2018-04-07 06:52:24'),
(165, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:54:34', '2018-04-07 06:54:34'),
(166, NULL, 'ftfrt', 'drdrd', 56454, 'Hilton', 'Single', 1, 1, '07/04/2018', '17/04/2018', NULL, NULL, 2000, NULL, NULL, '2018-04-07 06:55:19', '2018-04-07 06:55:19');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `hotel` varchar(1000) NOT NULL,
  `startd` varchar(100) NOT NULL,
  `fdate` varchar(100) NOT NULL,
  `discount` int(11) NOT NULL,
  `comments` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Flat Screen TV', '2018-04-02 07:53:01', '2018-04-02 07:53:01'),
(2, 'Jacuzzi', '2018-04-02 07:56:21', '2018-04-02 07:56:21'),
(3, 'Private Balcony', '2018-04-02 07:56:43', '2018-04-02 07:56:43'),
(4, 'Beach view', '2018-04-02 07:56:52', '2018-04-02 07:56:52'),
(5, 'Breakfast included', '2018-04-02 07:57:09', '2018-04-02 07:57:09'),
(6, 'Free Newspaper', '2018-04-02 07:57:26', '2018-04-02 07:57:26'),
(7, 'Pets Allowed', '2018-04-02 07:58:25', '2018-04-02 07:58:25'),
(8, 'Smoking allowed', '2018-04-02 07:58:32', '2018-04-02 07:58:32'),
(9, 'Family/Kid friendly', '2018-04-02 07:58:48', '2018-04-02 07:58:48'),
(10, 'Indoor Fireplace', '2018-04-02 07:58:58', '2018-04-02 07:58:58'),
(11, 'Air Conditioningg', '2018-04-02 11:09:14', '2018-04-02 08:09:14'),
(12, 'Wireless Internet', '2018-04-02 08:00:05', '2018-04-02 08:00:05');

-- --------------------------------------------------------

--
-- Table structure for table `hotelinfos`
--

CREATE TABLE `hotelinfos` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `ratings` varchar(100) NOT NULL,
  `active` varchar(100) NOT NULL,
  `addrress` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` blob NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotelinfos`
--

INSERT INTO `hotelinfos` (`id`, `name`, `location`, `ratings`, `active`, `addrress`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Hilton', 'Nairobi', '*****', 'Yes', 'st. Garon st., 210 Ronston 213456', 'Step into a world of ease, luxury and Swiss hospitality at The Stamford, our 5-star deluxe hotel. Located in the heart of the city amidst world-class shopping, entertainment and the CBD. The hotel is seated at Turn 9 of the F1 race and 20 minutes away from the Airport.', 0x4453435f303535342e4a5047, '2018-03-21 10:03:31', '2018-03-21 10:03:31'),
(2, 'The Clarion Hotel', 'Nairobi', '*****', 'Yes', 'The nearest airport is Jomo Kenyatta Airport, 12.9 km from the property.', 'Each room comes with a flat-screen TV with satellite channels. Certain rooms include a sitting area to relax in after a busy day. You will find a kettle in the room. Every room comes with a private bathroom. For your comfort, you will find slippers and free toiletries.', 0x32313734303439395f313833323731313034333431303335335f36313438383332303536353637343431375f6e2e6a7067, '2018-03-27 11:45:10', '2018-03-27 11:45:10');

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `id` int(11) NOT NULL,
  `hotel` varchar(1000) NOT NULL,
  `type` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`id`, `hotel`, `type`, `description`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Hilton', 'Breakfast', 'One meal offered', 0, '2018-04-02 04:18:27', '2018-04-02 04:18:27'),
(2, 'Hilton', 'halfboard', 'Two meals(no lunch) supplied', 150, '2018-04-02 06:30:21', '2018-04-02 06:30:21'),
(3, 'Hilton', 'fullboard', 'Three meals supplied', 300, '2018-04-02 06:30:47', '2018-04-02 06:30:47'),
(4, 'The Clarion Hotel', 'Breakfast', 'One meal supplied', 0, '2018-04-02 06:31:35', '2018-04-02 06:31:35'),
(5, 'The Clarion Hotel', 'halfboard', 'Two meals(no lunch) supplied', 150, '2018-04-02 06:31:58', '2018-04-02 06:31:58'),
(6, 'The Clarion Hotel', 'fullboard', 'Three meals supplied', 300, '2018-04-02 06:32:16', '2018-04-02 06:32:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mpesa_payments`
--

CREATE TABLE `mpesa_payments` (
  `transactionId` varchar(2000) NOT NULL,
  `transactionPhoneNumber` varchar(2000) NOT NULL,
  `transactionAmount` varchar(2000) NOT NULL,
  `transactionDate` varchar(2000) NOT NULL,
  `transactionMpesaId` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mpesa_payments`
--

INSERT INTO `mpesa_payments` (`transactionId`, `transactionPhoneNumber`, `transactionAmount`, `transactionDate`, `transactionMpesaId`) VALUES
('e00b1b35a191ffc00cb1f878df985f2f', '2547XXXXXXXX', '10.0', '2016-06-26 12:47:14', 'KFQ13CX0HD');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('brian.mutua@gmail.com', '$2y$10$aYm2xhl4xUbkUh07CALGv.K/BYUPSPTEy7CCiMC0iuhdF93.fpkH6', '2018-03-31 04:48:21');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `hotel` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `maxadults` int(11) NOT NULL,
  `maxchildren` int(11) NOT NULL,
  `noofrooms` int(11) NOT NULL,
  `bathroom` int(11) NOT NULL,
  `roomarea` int(11) NOT NULL,
  `dprice` int(11) NOT NULL,
  `extrabed` int(11) NOT NULL,
  `iconimage` blob NOT NULL,
  `image1` blob,
  `image2` blob,
  `image3` blob,
  `image4` blob,
  `image5` blob,
  `description` varchar(1000) NOT NULL,
  `nobed` int(11) NOT NULL,
  `active` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `hotel`, `type`, `maxadults`, `maxchildren`, `noofrooms`, `bathroom`, `roomarea`, `dprice`, `extrabed`, `iconimage`, `image1`, `image2`, `image3`, `image4`, `image5`, `description`, `nobed`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Hilton', 'Single', 1, 1, 5, 1, 15, 2000, 0, 0x4453435f303535342e4a5047, NULL, NULL, NULL, NULL, NULL, 'Rooms measuring 15 m² equipped with all the details expected of a superior 4 star hotel. Services: Wake up call service, Customer service, Laundry service and express laundry, Concierge service, Pillow menu.', 1, 'Yes', '2018-03-29 10:00:44', '2018-03-22 05:53:37'),
(2, 'Hilton', 'Double', 2, 1, 5, 1, 20, 3000, 0, 0x38643032323037662d613932622d343633642d393066612d3334376534386362373432382e6a7067, NULL, NULL, NULL, NULL, NULL, 'Modern and functional rooms measuring approximately 20-25 m² equipped with all the details expected of the hotel. The rooms have a king or queen size bed or two single beds, in addition to beds measuring 1 by 2.2 metres ideal for sports teams.', 3, 'Yes', '2018-03-27 14:14:38', '2018-03-27 03:26:58'),
(3, 'Hilton', 'Superior', 3, 1, 4, 2, 25, 4000, 0, 0x32313734303439395f313833323731313034333431303335335f36313438383332303536353637343431375f6e2e6a7067, NULL, NULL, NULL, NULL, NULL, 'Spacious rooms with exquisite decor, measuring approximately 25-30 m² and equipped with all the details expected of the hotel hotel. The rooms have a king or queen size bed or two single beds, in addition to beds measuring 1 by 2.2 metres.', 4, 'Yes', '2018-03-27 14:14:45', '2018-03-27 03:30:12'),
(4, 'Hilton', 'Luxury', 4, 2, 5, 3, 30, 5000, 0, 0x77616c6c686176656e2d3332303730392e706e67, NULL, NULL, NULL, NULL, NULL, 'Spacious rooms with exquisite decor measuring approximately 25-30 m² and equipped with all the details expected of a superior 4 star Hotel. The rooms have a king or queen size bed or two single beds, and views of the streets.', 6, 'Yes', '2018-03-27 14:14:52', '2018-03-27 03:33:17'),
(5, 'The Clarion Hotel', 'Single', 1, 0, 10, 1, 20, 1500, 0, 0x32313734303439395f313833323731313034333431303335335f36313438383332303536353637343431375f6e2e6a7067, NULL, NULL, NULL, NULL, NULL, 'Featuring free WiFi, a restaurant and a sun terrace, The Clarion Hotel offers accommodations in Nairobi. Guests can enjoy the on-site restaurant. Free private parking is available on site.', 1, 'Yes', '2018-03-29 03:48:32', '2018-03-29 03:48:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotelowner` tinyint(1) NOT NULL DEFAULT '0',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `hotelowner`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 1, 'admin@gmail.com', '$2y$10$t.iqh0UxgFe0nrYANmiWXuJuSj1e1mQRqyh8Q1Tun4ym5hrqp1aOG', 'dmlSIfYXKPl1c0PPiNNbWRgPvtvpujZBcS2sP68vbS9tE0e5XaOX76rWhyxP', '2018-03-31 04:03:01', '2018-03-31 04:03:01'),
(2, 'brian mutua', 0, 'brian.mutua@gmail.com', '$2y$10$o5AaxWriVeEi10Qf/4F.Uu83wKwMFkwDuiRkZAqysYXtH1WZRBttO', 'TtnVS9A3wcHQ21QsaVJ0DQYMVNN3UDPJhH3s8VaM9ukr37hTY2Efkq9HtZav', '2018-03-31 04:29:03', '2018-03-31 04:29:03'),
(3, 'michael Too', 0, 'michael@gmail.com', '$2y$10$B48rHHH/3HDHF3w6TqaK0.dFj6P894DDXvEZcEMxyZcGxncStES5.', NULL, '2018-03-31 04:54:38', '2018-03-31 04:54:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotelinfos`
--
ALTER TABLE `hotelinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`id`,`type`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;
--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `hotelinfos`
--
ALTER TABLE `hotelinfos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `meals`
--
ALTER TABLE `meals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
