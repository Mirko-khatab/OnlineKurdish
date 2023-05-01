-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2023 at 08:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opd`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categorieId` int(12) NOT NULL,
  `categorieName` varchar(255) NOT NULL,
  `categorieDesc` text NOT NULL,
  `categorieCreateDate` datetime NOT NULL DEFAULT current_timestamp(),
  `itemId` int(12) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categorieId`, `categorieName`, `categorieDesc`, `categorieCreateDate`, `itemId`) VALUES
(2, 'Kurdish Clothes Lawy', 'Address: Sulaymaniyah,Ranya', '2022-04-12 18:17:14', 0),
(3, 'Kurdish Clothes Hawar', 'Address : Sulaymaniyah , Zewar', '2022-04-12 01:34:32', 0),
(4, 'Kurdish Clothes Soran', 'Address: Sulaymaniyah , Daboka', '2022-04-15 03:11:01', 0),
(24, 'Kurdish Clothes Mhamad', 'Address: Sulaymaniyah,Kawa', '2022-08-27 22:14:04', 0),
(25, 'Kurdish Clothes Twana', 'Address: Sulaymaniyah,Kawa', '2022-08-28 17:24:50', 0),
(26, 'Kurdish Clothes Ahmad', 'Address: Sulaymaniyah,Kawa', '2022-08-28 17:34:26', 0),
(27, 'Kurdish Clothes Harem', 'Address: Sulaymaniyah,Kawa', '2022-08-28 17:45:08', 0),
(28, 'RH Design Accessories', 'Address: Sulaymaniyah', '2022-08-28 17:55:27', 0),
(30, 'Gull Design Accessories', 'Address: Sulaymaniyah', '2022-08-28 18:10:19', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactId` int(21) NOT NULL,
  `userId` int(21) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phoneNo` bigint(21) NOT NULL,
  `orderId` int(21) NOT NULL DEFAULT 0 COMMENT 'If problem is not related to the order then order id = 0',
  `message` text NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactId`, `userId`, `email`, `phoneNo`, `orderId`, `message`, `time`) VALUES
(1, 1, 'admin@gmail.com', 1111111111, 1, 'helppppp', '2022-04-12 02:42:52');

-- --------------------------------------------------------

--
-- Table structure for table `contactreply`
--

CREATE TABLE `contactreply` (
  `id` int(21) NOT NULL,
  `contactId` int(21) NOT NULL,
  `userId` int(23) NOT NULL,
  `message` text NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactreply`
--

INSERT INTO `contactreply` (`id`, `contactId`, `userId`, `message`, `datetime`) VALUES
(1, 1, 1, 'ok ok', '2022-04-12 02:44:27'),
(2, 1, 1, 'hello', '2022-04-13 12:41:45');

-- --------------------------------------------------------

--
-- Table structure for table `deliverydetails`
--

CREATE TABLE `deliverydetails` (
  `id` int(21) NOT NULL,
  `orderId` int(21) NOT NULL,
  `deliveryBoyName` varchar(35) NOT NULL,
  `deliveryBoyPhoneNo` bigint(25) NOT NULL,
  `deliveryTime` int(200) NOT NULL COMMENT 'Time in minutes',
  `dateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deliverydetails`
--

INSERT INTO `deliverydetails` (`id`, `orderId`, `deliveryBoyName`, `deliveryBoyPhoneNo`, `deliveryTime`, `dateTime`) VALUES
(1, 1, '', 0, 0, '2022-04-12 02:37:31'),
(3, 2, '', 0, 0, '2022-04-21 01:56:19'),
(5, 3, '', 0, 0, '2022-09-04 13:52:32'),
(7, 4, '', 0, 0, '2022-11-22 09:29:57');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `itemId` int(12) NOT NULL,
  `itemName` varchar(255) NOT NULL,
  `itemPrice` int(12) NOT NULL,
  `itemDesc` text NOT NULL,
  `itemCategorieId` int(12) NOT NULL,
  `itemPubDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`itemId`, `itemName`, `itemPrice`, `itemDesc`, `itemCategorieId`, `itemPubDate`) VALUES
(1, 'swrma qwmash', 77, 'Color:pink', 1, '2022-04-14 17:16:52'),
(2, 'swrma qwmash', 99, 'Color:Oranjges', 1, '2022-04-14 17:18:26'),
(3, 'swrma qwmash', 66, 'Color:red', 1, '2022-04-14 17:24:28'),
(4, 'swrma qwmash', 88, 'Color:blue', 1, '2022-04-14 17:25:37'),
(5, 'qwmashy nqem', 99, 'Color: Purple', 2, '2022-04-14 17:26:48'),
(6, 'qwmashy nqem', 99, 'Color:red', 2, '2022-04-14 17:27:40'),
(7, 'swrma qwmash', 89, 'Color:red', 2, '2022-04-14 17:30:16'),
(8, 'swrma qwmash', 77, 'Color:white', 2, '2022-04-14 17:35:43'),
(9, 'tafta qwmash', 77, 'Color:Orange', 3, '2022-04-14 20:58:06'),
(10, 'tafta qwmash', 88, 'Color:green', 3, '2022-04-14 20:59:02'),
(11, 'qwmashy nqem', 67, 'Color:Purple', 3, '2022-04-14 21:04:55'),
(12, 'qwmashy nqem', 89, 'Color:blue', 3, '2022-04-14 21:06:43'),
(13, 'swrma qwmash', 100, 'Color:pink', 4, '2022-04-14 21:08:27'),
(14, 'swrma qwmash', 98, 'Color:Orange', 4, '2022-04-14 21:09:08'),
(15, 'qwmashy nqem', 89, 'Color:grey', 4, '2022-04-14 21:11:42'),
(16, 'qwmashy nqem', 100, 'Color:green', 4, '2022-04-14 21:12:24'),
(55, 'Mwshaxat Qwmash', 50, 'Color : Blue', 24, '2022-08-28 17:11:27'),
(56, 'Mwshaxat Qwmash', 50, 'Color : Darkgray', 24, '2022-08-28 17:14:16'),
(57, 'Mwshaxat Qwmash', 50, 'Color : Beige', 24, '2022-08-28 17:18:44'),
(58, 'Sada Qwmash', 40, 'Color : Blue', 25, '2022-08-28 17:25:53'),
(59, 'Sada Qwmash', 40, 'Color : Darkkhaki', 25, '2022-08-28 17:27:35'),
(60, 'Sada Qwmash', 40, 'Color : Burlywood', 25, '2022-08-28 17:30:43'),
(61, 'Xatdar Qwmash', 60, 'Color : Brown', 26, '2022-08-28 17:35:16'),
(62, 'Xatdar Qwmash', 60, 'Color : Bluedark', 26, '2022-08-28 17:36:01'),
(63, 'Shall Qwmash', 80, 'Color : Beige', 27, '2022-08-28 17:47:09'),
(64, 'Shall Qwmash', 80, 'Color : Bluedark', 27, '2022-08-28 17:47:50'),
(65, 'Kurdish Accessories Clothes', 30, 'Accessories', 28, '2022-08-28 17:58:06'),
(66, 'Kurdish Accessories Clothes', 35, 'Accessories', 28, '2022-08-28 17:59:56'),
(67, 'Kurdish Accessories Clothes', 50, 'Accessories', 28, '2022-08-28 18:00:27'),
(68, 'Kurdish Accessories Clothes', 60, 'Klaw , Mlwanka', 30, '2022-08-28 18:13:12'),
(69, 'Kurdish Accessories Clothes', 50, 'Kalw , Mlwanka', 30, '2022-08-28 18:15:06'),
(70, 'Kurdish Accessories Clothes', 40, 'Klaw , Mlwanka', 30, '2022-08-28 18:19:03'),
(71, 'Kurdish Accessories Clothes', 50, 'Klawa , Mlwanka', 30, '2022-08-28 18:19:58');

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `id` int(21) NOT NULL,
  `orderId` int(21) NOT NULL,
  `itemId` int(21) NOT NULL,
  `itemQuantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`id`, `orderId`, `itemId`, `itemQuantity`) VALUES
(1, 1, 24, 1),
(2, 1, 21, 1),
(3, 2, 13, 2),
(4, 2, 14, 1),
(5, 3, 1, 2),
(6, 3, 5, 1),
(7, 4, 55, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderId` int(21) NOT NULL,
  `userId` int(21) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zipCode` int(21) NOT NULL,
  `phoneNo` bigint(21) NOT NULL,
  `amount` int(200) NOT NULL,
  `paymentMode` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0=cash on delivery, \r\n1=online ',
  `orderStatus` enum('0','1','2','3','4','5','6') NOT NULL DEFAULT '0' COMMENT '0=Order Placed.\r\n1=Order Confirmed.\r\n2=Preparing your Order.\r\n3=Your order is on the way!\r\n4=Order Delivered.\r\n5=Order Denied.\r\n6=Order Cancelled.',
  `orderDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderId`, `userId`, `address`, `zipCode`, `phoneNo`, `amount`, `paymentMode`, `orderStatus`, `orderDate`) VALUES
(1, 1, '12345, 124', 111111, 7701490741, 198, '0', '1', '2022-04-12 02:37:31'),
(2, 1, 'hkh, errew', 127757, 4272725755, 298, '0', '1', '2022-04-21 01:56:18'),
(3, 1, 'slemani, kurdsat', 126665, 4272725755, 253, '0', '0', '2022-09-04 13:52:32'),
(4, 14, 'bazian, raparin', 676748, 7725221235, 50, '0', '0', '2022-11-22 09:29:57');

-- --------------------------------------------------------

--
-- Table structure for table `sitedetail`
--

CREATE TABLE `sitedetail` (
  `tempId` int(11) NOT NULL,
  `systemName` varchar(21) NOT NULL,
  `email` varchar(35) NOT NULL,
  `contact1` bigint(21) NOT NULL,
  `contact2` bigint(21) DEFAULT NULL COMMENT 'Optional',
  `address` text NOT NULL,
  `dateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sitedetail`
--

INSERT INTO `sitedetail` (`tempId`, `systemName`, `email`, `contact1`, `contact2`, `address`, `dateTime`) VALUES
(1, 'Online KC', 'kurdishclothes@gmail.com', 123456789, 987654321, 'Kurdistan.<br> 224 Sulaimani', '2022-02-02 19:56:25');

-- --------------------------------------------------------

--
-- Table structure for table `tailor`
--

CREATE TABLE `tailor` (
  `User_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` text NOT NULL,
  `City` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Numcard` text NOT NULL,
  `Noteorder` varchar(255) NOT NULL,
  `Typestyle` varchar(255) NOT NULL,
  `Qyasishan` double(200,1) NOT NULL,
  `Panibal` double(200,1) NOT NULL,
  `Qyasisng` double(200,1) NOT NULL,
  `Drezhiqol` double(200,1) NOT NULL,
  `Drezhibla` double(200,1) NOT NULL,
  `Tailorid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tailorpost`
--

CREATE TABLE `tailorpost` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `img` text NOT NULL,
  `tailorId` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tailorpost`
--

INSERT INTO `tailorpost` (`id`, `name`, `title`, `img`, `tailorId`, `gender`) VALUES
(2, 'hamakawa', 'hama kawa', 'men.jpg', 1, 'male'),
(5, 'new ', 'new', 'women.png', 1, 'female');

-- --------------------------------------------------------

--
-- Table structure for table `tailorregester`
--

CREATE TABLE `tailorregester` (
  `id` int(11) NOT NULL,
  `username` varchar(21) NOT NULL,
  `firstName` varchar(21) NOT NULL,
  `lastName` varchar(21) NOT NULL,
  `email` varchar(21) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `joinDate` datetime NOT NULL DEFAULT current_timestamp(),
  `facebooklink` text NOT NULL,
  `instalink` text NOT NULL,
  `file` text NOT NULL,
  `gender` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `accept` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tailorregester`
--

INSERT INTO `tailorregester` (`id`, `username`, `firstName`, `lastName`, `email`, `phone`, `password`, `joinDate`, `facebooklink`, `instalink`, `file`, `gender`, `about`, `accept`) VALUES
(1, 'tailor', 'tailor', '1', 'tailor@gmail.com', 7725221235, '12345678', '2022-10-28 16:52:33', 'https://www.facebook.com/mirko.kawa.921', 'https://www.facebook.com/mirko.kawa.921', 'kch.jpg', 'mail', 'tailor profelo to talk about her self ', 1),
(2, 'tailor2', 'tailor', '2', 'tailor2@gmail.com', 7725221235, '$2y$10$XSMiT.ic.utGDgBl8qvMkOJRflsfYXodBwJuabYP9/h5kFjhT4py.', '2022-10-28 16:55:49', 'https://www.facebook.com/', 'https://www.instagram.com/', 'kch.jpg', 'female', 'tailor profelo to talk about her self ', 1),
(3, 'monster', 'monster', 'keyscoor', 'mirko@gmail.com', 7725221235, '$2y$10$zin1PAqPz2GDFITbtKgeie24nUf7qMU9yUihtviwQBiIA.IoxoQJ.', '2022-11-05 22:43:49', 'https://www.facebook.com/', 'https://www.instagram.com/', 'kch.jpg', 'mail', 'tailor profelo to talk about her self ', 1),
(44, 'tailor4', 'tailor', '4', 'tailor4@gmail.com', 7725221235, '$2y$10$XSMiT.ic.utGDgBl8qvMkOJRflsfYXodBwJuabYP9/h5kFjhT4py.', '2022-10-28 16:55:49', 'https://www.facebook.com/', 'https://www.instagram.com/', 'kch.jpg', 'female', 'tailor profelo to talk about her self ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(21) NOT NULL,
  `username` varchar(21) NOT NULL,
  `firstName` varchar(21) NOT NULL,
  `lastName` varchar(21) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `userType` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0=user\r\n1=admin',
  `password` varchar(255) NOT NULL,
  `joinDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstName`, `lastName`, `email`, `phone`, `userType`, `password`, `joinDate`) VALUES
(7, 'user', 'user', 'yakam', 'user@gmail.com', 7725221235, '0', '12345678', '2022-10-16 20:03:11'),
(8, 'admin', 'admin', 'admin', 'admin@gmail.com', 7725221235, '1', 'admin', '2022-10-27 12:41:05');

-- --------------------------------------------------------

--
-- Table structure for table `viewcart`
--

CREATE TABLE `viewcart` (
  `cartItemId` int(11) NOT NULL,
  `itemId` int(11) NOT NULL,
  `itemQuantity` int(100) NOT NULL,
  `userId` int(11) NOT NULL,
  `addedDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `viewcart`
--

INSERT INTO `viewcart` (`cartItemId`, `itemId`, `itemQuantity`, `userId`, `addedDate`) VALUES
(18, 63, 2, 1, '2022-09-04 14:13:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categorieId`);
ALTER TABLE `categories` ADD FULLTEXT KEY `categorieName` (`categorieName`,`categorieDesc`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactId`),
  ADD KEY `orderId` (`orderId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `contactreply`
--
ALTER TABLE `contactreply`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contactId` (`contactId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `deliverydetails`
--
ALTER TABLE `deliverydetails`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orderId` (`orderId`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemId`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `itemQuantity` (`itemQuantity`),
  ADD KEY `orderId` (`orderId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `sitedetail`
--
ALTER TABLE `sitedetail`
  ADD PRIMARY KEY (`tempId`);

--
-- Indexes for table `tailor`
--
ALTER TABLE `tailor`
  ADD PRIMARY KEY (`User_ID`),
  ADD KEY `Tailorid` (`Tailorid`);

--
-- Indexes for table `tailorpost`
--
ALTER TABLE `tailorpost`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tailorId` (`tailorId`);

--
-- Indexes for table `tailorregester`
--
ALTER TABLE `tailorregester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `viewcart`
--
ALTER TABLE `viewcart`
  ADD PRIMARY KEY (`cartItemId`),
  ADD KEY `itemId` (`itemId`),
  ADD KEY `itemQuantity` (`itemQuantity`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categorieId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactId` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactreply`
--
ALTER TABLE `contactreply`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `deliverydetails`
--
ALTER TABLE `deliverydetails`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `itemId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderId` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sitedetail`
--
ALTER TABLE `sitedetail`
  MODIFY `tempId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tailor`
--
ALTER TABLE `tailor`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tailorpost`
--
ALTER TABLE `tailorpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tailorregester`
--
ALTER TABLE `tailorregester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `viewcart`
--
ALTER TABLE `viewcart`
  MODIFY `cartItemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`orderId`) REFERENCES `orders` (`orderId`),
  ADD CONSTRAINT `contact_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `item` (`itemId`),
  ADD CONSTRAINT `contact_ibfk_3` FOREIGN KEY (`userId`) REFERENCES `contactreply` (`id`),
  ADD CONSTRAINT `contact_ibfk_4` FOREIGN KEY (`userId`) REFERENCES `orderitems` (`id`),
  ADD CONSTRAINT `contact_ibfk_5` FOREIGN KEY (`contactId`) REFERENCES `item` (`itemId`),
  ADD CONSTRAINT `contact_ibfk_6` FOREIGN KEY (`userId`) REFERENCES `orders` (`orderId`);

--
-- Constraints for table `contactreply`
--
ALTER TABLE `contactreply`
  ADD CONSTRAINT `contactreply_ibfk_1` FOREIGN KEY (`contactId`) REFERENCES `contact` (`contactId`),
  ADD CONSTRAINT `contactreply_ibfk_10` FOREIGN KEY (`userId`) REFERENCES `item` (`itemId`),
  ADD CONSTRAINT `contactreply_ibfk_11` FOREIGN KEY (`userId`) REFERENCES `deliverydetails` (`id`),
  ADD CONSTRAINT `contactreply_ibfk_12` FOREIGN KEY (`userId`) REFERENCES `item` (`itemId`),
  ADD CONSTRAINT `contactreply_ibfk_13` FOREIGN KEY (`userId`) REFERENCES `contact` (`contactId`),
  ADD CONSTRAINT `contactreply_ibfk_14` FOREIGN KEY (`userId`) REFERENCES `contact` (`contactId`),
  ADD CONSTRAINT `contactreply_ibfk_2` FOREIGN KEY (`id`) REFERENCES `item` (`itemId`),
  ADD CONSTRAINT `contactreply_ibfk_3` FOREIGN KEY (`id`) REFERENCES `orderitems` (`id`),
  ADD CONSTRAINT `contactreply_ibfk_4` FOREIGN KEY (`id`) REFERENCES `orderitems` (`orderId`),
  ADD CONSTRAINT `contactreply_ibfk_5` FOREIGN KEY (`id`) REFERENCES `orders` (`orderId`),
  ADD CONSTRAINT `contactreply_ibfk_6` FOREIGN KEY (`userId`) REFERENCES `sitedetail` (`tempId`),
  ADD CONSTRAINT `contactreply_ibfk_7` FOREIGN KEY (`userId`) REFERENCES `orders` (`userId`),
  ADD CONSTRAINT `contactreply_ibfk_8` FOREIGN KEY (`userId`) REFERENCES `orders` (`orderId`),
  ADD CONSTRAINT `contactreply_ibfk_9` FOREIGN KEY (`userId`) REFERENCES `orderitems` (`id`);

--
-- Constraints for table `deliverydetails`
--
ALTER TABLE `deliverydetails`
  ADD CONSTRAINT `deliverydetails_ibfk_1` FOREIGN KEY (`orderId`) REFERENCES `orders` (`orderId`),
  ADD CONSTRAINT `deliverydetails_ibfk_2` FOREIGN KEY (`id`) REFERENCES `item` (`itemId`),
  ADD CONSTRAINT `deliverydetails_ibfk_3` FOREIGN KEY (`id`) REFERENCES `orderitems` (`id`);

--
-- Constraints for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD CONSTRAINT `orderitems_ibfk_1` FOREIGN KEY (`orderId`) REFERENCES `orders` (`orderId`),
  ADD CONSTRAINT `orderitems_ibfk_2` FOREIGN KEY (`id`) REFERENCES `item` (`itemId`),
  ADD CONSTRAINT `orderitems_ibfk_3` FOREIGN KEY (`itemQuantity`) REFERENCES `orders` (`orderId`),
  ADD CONSTRAINT `orderitems_ibfk_4` FOREIGN KEY (`itemQuantity`) REFERENCES `item` (`itemId`),
  ADD CONSTRAINT `orderitems_ibfk_5` FOREIGN KEY (`itemQuantity`) REFERENCES `orderitems` (`id`),
  ADD CONSTRAINT `orderitems_ibfk_6` FOREIGN KEY (`itemQuantity`) REFERENCES `orders` (`orderId`),
  ADD CONSTRAINT `orderitems_ibfk_7` FOREIGN KEY (`orderId`) REFERENCES `item` (`itemId`),
  ADD CONSTRAINT `orderitems_ibfk_8` FOREIGN KEY (`orderId`) REFERENCES `orderitems` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `item` (`itemId`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`orderId`) REFERENCES `item` (`itemId`),
  ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`orderId`) REFERENCES `orderitems` (`id`);

--
-- Constraints for table `sitedetail`
--
ALTER TABLE `sitedetail`
  ADD CONSTRAINT `sitedetail_ibfk_1` FOREIGN KEY (`tempId`) REFERENCES `orders` (`orderId`),
  ADD CONSTRAINT `sitedetail_ibfk_2` FOREIGN KEY (`tempId`) REFERENCES `item` (`itemId`),
  ADD CONSTRAINT `sitedetail_ibfk_3` FOREIGN KEY (`tempId`) REFERENCES `contact` (`contactId`),
  ADD CONSTRAINT `sitedetail_ibfk_4` FOREIGN KEY (`tempId`) REFERENCES `deliverydetails` (`id`);

--
-- Constraints for table `tailor`
--
ALTER TABLE `tailor`
  ADD CONSTRAINT `tailor_ibfk_1` FOREIGN KEY (`Tailorid`) REFERENCES `tailorregester` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tailor_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `tailorpost` (`tailorId`);

--
-- Constraints for table `tailorpost`
--
ALTER TABLE `tailorpost`
  ADD CONSTRAINT `tailorPost_ibfk_1` FOREIGN KEY (`tailorId`) REFERENCES `tailorregester` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id`) REFERENCES `item` (`itemId`);

--
-- Constraints for table `viewcart`
--
ALTER TABLE `viewcart`
  ADD CONSTRAINT `viewcart_ibfk_1` FOREIGN KEY (`itemId`) REFERENCES `item` (`itemId`),
  ADD CONSTRAINT `viewcart_ibfk_2` FOREIGN KEY (`itemQuantity`) REFERENCES `categories` (`categorieId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
