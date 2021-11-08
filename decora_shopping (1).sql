-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2021 at 03:50 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `decora_shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Cat_ID` varchar(10) NOT NULL,
  `Cat_Name` varchar(30) NOT NULL,
  `Cat_Des` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Cat_ID`, `Cat_Name`, `Cat_Des`) VALUES
('C001', 'FURNITURE', 'FURNITURE'),
('C002', 'RUGS', 'RUGS'),
('C003', 'CURTAINS', 'CURTAINS'),
('C004', 'KITCHEN_DINING', 'KITCHEN_DINING'),
('C005', 'BED_BATH', 'BED_BATH'),
('C006', 'WALLDECOR', 'WALLDECOR'),
('C007', 'TABLE DINNER', 'Table dinner luxury is made in Australia');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `CustName` varchar(30) NOT NULL,
  `gender` int(11) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `CusDate` int(11) NOT NULL,
  `CusMonth` int(11) NOT NULL,
  `CusYear` int(11) NOT NULL,
  `SSN` varchar(10) DEFAULT NULL,
  `ActiveCode` varchar(100) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Username`, `Password`, `CustName`, `gender`, `Address`, `telephone`, `email`, `CusDate`, `CusMonth`, `CusYear`, `SSN`, `ActiveCode`, `state`) VALUES
('admin', 'e10adc3949ba59abbe56e057f20f883e', 'Nhan', 0, 'Can Tho', '0386363677', 'nhan@gmail.com', 17, 3, 1989, '', '', 1),
('nhdung', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyen Hung Dung', 0, 'hau giang', '0386363677', 'nhdung@gmail.com', 2, 5, 1973, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_ID` varchar(10) NOT NULL,
  `Product_Name` varchar(30) NOT NULL,
  `Price` bigint(20) NOT NULL,
  `oldPrice` decimal(12,2) NOT NULL,
  `SmallDesc` varchar(1000) NOT NULL,
  `DetailDesc` text NOT NULL,
  `ProDate` datetime NOT NULL,
  `Pro_qty` int(11) NOT NULL,
  `Pro_image` varchar(200) NOT NULL,
  `Cat_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `Product_Name`, `Price`, `oldPrice`, `SmallDesc`, `DetailDesc`, `ProDate`, `Pro_qty`, `Pro_image`, `Cat_ID`) VALUES
('1', 'Classic withe chair Luxury fur', 120, '0.00', 'Classic withe chair Luxury furniture', 'Classic withe chair Luxury furniture', '2021-05-06 15:56:57', 20, 'furniture1.jpg', 'C001'),
('B1', 'Bedding set Luxury Brocade sil', 600, '0.00', 'Bedding set Luxury Brocade silk', '<div style=\"color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\">\r\n	Bedding&nbsp;set&nbsp;Luxury&nbsp;Brocade&nbsp;silk</div>\r\n', '2021-05-06 17:23:40', 30, 'gagiuong.jpg', 'C005'),
('B2', 'Luxury Silk blanket cover', 60, '0.00', 'Luxury Silk blanket cover', '<div style=\"color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\">\r\n	Luxury&nbsp;Silk&nbsp;blanket&nbsp;cover</div>\r\n', '2021-05-06 17:24:40', 30, 'bo-chan-ga-phu-luxury-tam.jpg', 'C005'),
('B3', 'Genuine luxury towels', 70, '0.00', 'Genuine luxury towels', '<div style=\"color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\">\r\n	Genuine&nbsp;luxury&nbsp;towels</div>\r\n', '2021-05-06 17:25:46', 60, 'goi1.jpg', 'C005'),
('C1', 'High Quality One Way Vision Lu', 500, '0.00', 'High Quality One Way Vision Luxury Curtains', 'High Quality One Way Vision Luxury Curtains', '2021-05-06 16:50:41', 10, 'cur1.jpg', 'C003'),
('C2', 'Luxury Blackout Curtain', 900, '0.00', 'Luxury Blackout Curtain', 'Luxury Blackout Curtain', '2021-05-06 16:51:30', 50, 'cur2.jpg', 'C003'),
('C3', 'Luxury Classic Curtains', 600, '0.00', 'Luxury Classic Curtain', 'Luxury Classic Curtain', '2021-05-06 16:53:44', 80, 'cur3.jpg', 'C003'),
('F02', 'Luxury Classic Furniture', 300, '0.00', 'Luxury Classic Furniture', 'Luxury Classic Furniture', '2021-05-06 16:03:16', 10, 'furniture3.jpg', 'C001'),
('F03', 'Classic luxury living room fur', 600, '0.00', 'Classic luxury living room furniture', 'Classic luxury living room furniture', '2021-05-06 16:04:30', 5, 'furniture4.jpg', 'C001'),
('F05', 'Classic luxury living room  gr', 208, '0.00', 'Classic luxury living room furniture', 'Classic luxury living room furniture', '2021-05-06 16:06:14', 8, 'furniture5.jpg', 'C001'),
('F104', 'Jansen Furniture', 400, '0.00', 'Jansen Furniture', 'Jansen Furniture', '2021-05-06 16:24:41', 50, 'ban_ghe.jpg', 'C001'),
('F23', 'Classic living room armchairs_', 300, '0.00', 'Classic living room armchairs', 'Classic living room armchairs', '2021-05-06 16:11:52', 10, 'furniture7.jpg', 'C001'),
('K1', 'Luxury Dining Rooms', 60, '0.00', 'Luxury Dining Rooms', 'Luxury Dining Rooms', '2021-05-06 17:04:01', 20, 'kit1.jpg', 'C004'),
('K2', 'The set of luxurious ceramic b', 600, '0.00', 'The set of luxurious ceramic bowls and dishes', '<div style=\"color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\">\r\n	The&nbsp;set&nbsp;of&nbsp;luxurious&nbsp;ceramic&nbsp;bowls&nbsp;and&nbsp;dishes</div>\r\n', '2021-05-06 17:14:02', 50, 'kit2.jpg', 'C004'),
('K3', 'High-end white ceramic bowls w', 600, '0.00', 'High-end white ceramic bowls with gold border', '<div style=\"color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\">\r\n	High-end&nbsp;white&nbsp;ceramic&nbsp;bowls&nbsp;with&nbsp;gold&nbsp;border</div>\r\n', '2021-05-06 17:17:59', 50, 'kit3.jpg', 'C004'),
('K4', 'LUXURY 3D high-end float glass', 50, '0.00', 'LUXURY 3D high-end float glass set', '<div style=\"color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\">\r\n	LUXURY&nbsp;3D&nbsp;high-end&nbsp;float&nbsp;glass&nbsp;set</div>\r\n', '2021-05-06 17:19:39', 30, 'ly1.jpg', 'C004'),
('K5', 'Glass of Luxury Red Wine', 30, '0.00', 'Glass of Luxury Red Wine', '<div style=\"color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\">\r\n	Glass&nbsp;of&nbsp;Luxury&nbsp;Red&nbsp;Wine</div>\r\n', '2021-05-06 17:20:38', 25, 'ly2.jpg', 'C004'),
('R1', 'Luxury Hand Tufted Rugs', 100, '0.00', 'Luxury Hand Tufted Rugs', 'Luxury Hand Tufted Rugs', '2021-05-06 16:38:15', 50, 'rug1.jpg', 'C002'),
('R2', 'Luxury Modern Rugs', 400, '0.00', 'Luxury Modern Rugs', 'Luxury Modern Rugs', '2021-05-06 16:40:41', 80, 'rug2.jpg', 'C002'),
('R3', 'Luxury Livingroom Silver Rug', 800, '0.00', 'Luxury Livingroom Silver Rug', 'Luxury Livingroom Silver Rug', '2021-05-06 16:41:33', 80, 'rug3.jpg', 'C002'),
('R4', 'Luxury Designer Rug', 800, '0.00', 'Luxury Designer Rug', 'Luxury Designer Rug', '2021-05-06 16:42:29', 50, 'rug4.jpg', 'C002'),
('R5', 'Shag Loomed Area Rugs', 600, '0.00', 'Shag Loomed Area Rug', 'Shag Loomed Area Rug', '2021-05-06 16:43:30', 30, 'rug5.jpg', 'C002'),
('R6', 'Luxury Crafts Carpet Rugs', 800, '0.00', 'Luxury Crafts Carpet Rugs', 'Luxury Crafts Carpet Rugs', '2021-05-06 16:48:09', 20, 'rug6.jpg', 'C002'),
('W1', 'Set of 3 beautiful hanging wal', 600, '0.00', 'Set of 3 beautiful hanging wall pictures', '<div style=\"color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\">\r\n	Set&nbsp;of&nbsp;3&nbsp;beautiful&nbsp;hanging&nbsp;wall&nbsp;pictures</div>\r\n', '2021-05-06 17:27:59', 30, 'tranhtreotuong.jpg', 'C006'),
('W2', 'Modern decorative wall clock', 250, '0.00', 'Modern decorative wall clock', '<div courier=\"\" font-size:=\"\" line-height:=\"\" style=\"color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, \" white-space:=\"\">\r\n	Modern&nbsp;decorative&nbsp;wall&nbsp;clock</div>\r\n', '2021-05-07 08:01:46', 12, 'dong-ho-treo-tuong-nghe-thuat-chim-cong-may-man.jpg', 'C006'),
('W3', 'Mirror silver', 500, '0.00', 'Mirror silver', '<p>\r\n	Mirror Silver</p>\r\n', '2021-05-07 08:12:07', 12, 'mirror.jpg', 'C006');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Cat_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`),
  ADD KEY `Cat_ID` (`Cat_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Cat_ID`) REFERENCES `category` (`Cat_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
