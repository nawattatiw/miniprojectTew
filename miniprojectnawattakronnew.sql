-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2019 at 08:53 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniprojectnawattakron`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderfence`
--

CREATE TABLE `orderfence` (
  `orderid` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `orderstatus` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ordernamecus` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ordercontact` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `orderaddress` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `typepd` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ordernameproduct` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `orderpieceproduct` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `orderdetailproduct` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `orderservicecharge` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ordertotalprice` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `orderdatebuy` date NOT NULL,
  `trackingnumber` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orderfence`
--

INSERT INTO `orderfence` (`orderid`, `orderstatus`, `ordernamecus`, `ordercontact`, `orderaddress`, `typepd`, `ordernameproduct`, `orderpieceproduct`, `orderdetailproduct`, `orderservicecharge`, `ordertotalprice`, `orderdatebuy`, `trackingnumber`) VALUES
('T002', 'อยู่ในระหว่างทำการจัดและซื้อส่งสินค้า', 'K. กิตติค่ะ', 'ns.wit', '505room15 in apertmant', 'สร้อยคอ', 'Rastaclat Classic', '3', 'rastaclast classic สีดำ สีvoid สีขาว', '150 / ชิ้น  50 ค่าส่ง', '3200', '2019-10-19', 'TH020010013'),
('T003', 'ส่งสินค้าเสร็จเรียบร้อย', 'ธราวัณ  ปันยาทอง', 'ธราวัณ  ปันยาทอง', 'หอหญิงใน  ม. เกษตร 50 ถนน งามวงศ์วาน แขวง ลาดยาว เขตจตุจักร กรุงเทพมหานคร 10900', 'กระเป๋า', 'Gucci belt', '2', 'Gucci belt คัดแบรนสองชิ้น ชิ้นล่ะ 13500', '150', '2300', '2019-10-18', 'G20202023'),
('T004', 'refund', 'ประวิตร วงษ์สุวรรณ', 'P.prawit rakprayut', 'กองบัญชาการกองทัพบก\r\nเดิม กองบังคับการ กรมทหารราบที่ 1 มหาดเล็กรักษาพระองค์', 'อื่นๆ', 'นาฟิกาข้อมือยืมเพื่อน', '3', '-Richard Mille รุ่น RM 029 ราคาประมาณ 3.6 ล้านบาท\r\n-นาฬิกายี่ห้อ Richard Mille รุ่น RM 30 ราคาประมาณ 4 ล้านบาท\r\n-นาฬิกายี่ห้อ Rolex รุ่น Cosmograph Daytona Ice Blue Dial Platinum ราคาประมาณ  2.4ล้านบาท\r\n-นาฬิกายี่ห้อ Patek Philippe รุ่น 5960/1A ราคาอยู่ที่ 1.5-1.66 ล้านบาท', '300,000', '13', '2019-10-31', ''),
('T005', 'ส่งสินค้าเสร็จเรียบร้อย', 'มากมาย มากมี', 'WW5353', 'Popular  มหาเมฆ', 'สร้อยคอ', 'เสื้อกล้ามTop', '1', 'กล้าม TOP3', '500', '2500', '2019-10-16', 'TH22354512'),
('T006', 'ยืนยันการซื้อสินค้า', 'K. มหาชัย', 'ns.witty', 'รพ. สีลม', 'อื่นๆ', 'Rastaclat 52212', '4', 'OPB', '300', '73000', '2019-10-27', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderfence`
--
ALTER TABLE `orderfence`
  ADD PRIMARY KEY (`orderid`),
  ADD KEY `typepd` (`typepd`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderfence`
--
ALTER TABLE `orderfence`
  ADD CONSTRAINT `orderfence_ibfk_1` FOREIGN KEY (`typepd`) REFERENCES `typeproduct` (`typepd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
