-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2019 at 04:00 AM
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
('T002', 'ส่งสินค้าเสร็จเรียบร้อย', 'K. กิตติค่ะ', 'ns.wit', '505room15 in apertmant', 'สร้อยคอ', 'Rastaclat Classic', '3', 'rastaclast classic สีดำ สีvoid สีขาว', '150 / ชิ้น  50 ค่าส่ง', '3200', '2019-10-19', 'TH020010013'),
('T003', 'ส่งสินค้าเสร็จเรียบร้อย', 'ธราวัณ  ปันยาทอง', 'ธราวัณ  ปันยาทอง', 'หอหญิงใน  ม. เกษตร 50 ถนน งามวงศ์วาน แขวง ลาดยาว เขตจตุจักร กรุงเทพมหานคร 10900', 'กระเป๋า', 'Gucci belt', '2', 'Gucci belt คัดแบรนสองชิ้น ชิ้นล่ะ 13500', '150', '2300', '2019-10-18', 'G20202023'),
('T004', 'กำลังโดนจับกูเนี่ย', 'ประวิตร วงษ์สุวรรณ', 'P.prawit rakprayut', 'กองบัญชาการกองทัพบก\r\nเดิม กองบังคับการ กรมทหารราบที่ 1 มหาดเล็กรักษาพระองค์', 'อื่นๆ', 'นาฟิกาข้อมือยืมเพื่อน', '3', '-Richard Mille รุ่น RM 029 ราคาประมาณ 3.6 ล้านบาท\r\n-นาฬิกายี่ห้อ Richard Mille รุ่น RM 30 ราคาประมาณ 4 ล้านบาท\r\n-นาฬิกายี่ห้อ Rolex รุ่น Cosmograph Daytona Ice Blue Dial Platinum ราคาประมาณ  2.4ล้านบาท\r\n-นาฬิกายี่ห้อ Patek Philippe รุ่น 5960/1A ราคาอยู่ที่ 1.5-1.66 ล้านบาท', '300,000', '13', '2019-10-31', '');

-- --------------------------------------------------------

--
-- Table structure for table `requestorder`
--

CREATE TABLE `requestorder` (
  `ordercustomer` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `orderdate` date NOT NULL,
  `orderproductname` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `orderpiece` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `ordercontact` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `orderaddress` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `requestorder`
--

INSERT INTO `requestorder` (`ordercustomer`, `orderdate`, `orderproductname`, `orderpiece`, `ordercontact`, `orderaddress`) VALUES
('OD001', '2019-10-25', 'Nike Air Force 1 Type เฉลิมฉลองประวัติศาสตร์แห่งกีฬาในฐานะส่วนหนึ่งของตระกูล N354 ที่ยกย่องไมล์ที่เร็วที่สุดของ Steve Prefontaine คู่นี้ใช้วัสดุโปร่งแสงเพื่ออวดระบบการสวมใส่ และเทคโนโลยีที่ปรับได้ ซึ่งให้สไตล์ที่ไม่เหมือนใคร ความพอดีแบบเฉพาะตัว และสไตล์การสวมใส่ที่อเนกประสงค์', '2', 'ggwp', '505room15 in apertmant'),
('OD002', '2019-10-23', 'ใส่ความ Freak ไปกับรองเท้ารุ่นซิกเนเจอร์รุ่นแรกของ Giannis Antetokoumpo และเป็นคู่แรกของ Nike ที่ให้สัมผัสแห่งเกมบาสเก็ตบอลในระดับนานาชาติ Zoom Freak 1 มีระบบลดแรงกระแทกพร้อมตอบสนองได้ดีเป็นพิเศษ ปลายเท้าล็อคกระชับ และการยึดเกาะหลายทิศทางแบบที่ต้องการเพื่อเติมเต็มเกมกีฬาสุด Freak ของเขา', '2', 'ggwp', '2 หมู่ที่ 1 บ้าน ถนน ยันตรกิจโกศล ตำบล ร้องกวาง อำเภอ ร้องกวาง แพร่ 54140'),
('OD003', '2019-10-16', 'Nike Free Metcon 2 UT เพิ่มการรองรับอีกชั้นเพื่อการออกกำลังกายหลากหลายรูปแบบ มาพร้อมสายรัดทนทานช่วยล็อคเท้าของคุณไว้ ขณะที่โฟมยืดหยุ่นทำให้คุณเคลื่อนไหวได้เป็นธรรมชาติอย่างต่อเนื่องตั้งแต่ท่าฝึกน้ำหนักไปจนถึงท่าฝึกความคล่องแคล่ว', '2', 'Kirawit', '2 ถนน วังหลัง แขวง ศิริราช เขตบางกอกน้อย กรุงเทพมหานคร 10700');

-- --------------------------------------------------------

--
-- Table structure for table `typeproduct`
--

CREATE TABLE `typeproduct` (
  `typepd` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `namepd` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dategetpd` date NOT NULL,
  `historypd` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `typeproduct`
--

INSERT INTO `typeproduct` (`typepd`, `namepd`, `dategetpd`, `historypd`) VALUES
('กระเป๋า', '', '0000-00-00', ''),
('รองเท้า', 'ไนกี้', '2019-10-09', 'Nike Free Metcon 2 UT เพิ่มการรองรับอีกชั้นเพื่อการออกกำลังกายหลากหลายรูปแบบ มาพร้อมสายรัดทนทานช่วยล็อคเท้าของคุณไว้ ขณะที่โฟมยืดหยุ่นทำให้คุณเคลื่อนไหวได้เป็นธรรมชาติอย่างต่อเนื่องตั้งแต่ท่าฝึกน้ำหนักไปจนถึงท่าฝึกความคล่องแคล่ว'),
('สร้อยข้อมือ', '', '2019-10-09', ''),
('สร้อยคอ', '', '2019-10-09', ''),
('หมวก', '', '0000-00-00', ''),
('อื่นๆ', '', '0000-00-00', ''),
('อุปกรณ์ของใช้ต่างๆ', '', '0000-00-00', '');

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
-- Indexes for table `requestorder`
--
ALTER TABLE `requestorder`
  ADD PRIMARY KEY (`ordercustomer`);

--
-- Indexes for table `typeproduct`
--
ALTER TABLE `typeproduct`
  ADD PRIMARY KEY (`typepd`);

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
