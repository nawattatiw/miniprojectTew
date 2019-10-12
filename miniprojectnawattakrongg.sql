-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2019 at 01:55 PM
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
-- Table structure for table `orderbuy`
--

CREATE TABLE `orderbuy` (
  `idorderbuy` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `nameorderbuy` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `addressorderbuy` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `dateorderbuy` date NOT NULL,
  `typepd` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `refundreason` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `trackingnumber` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orderfence`
--

INSERT INTO `orderfence` (`orderid`, `orderstatus`, `ordernamecus`, `ordercontact`, `orderaddress`, `typepd`, `ordernameproduct`, `orderpieceproduct`, `orderdetailproduct`, `orderservicecharge`, `ordertotalprice`, `orderdatebuy`, `refundreason`, `trackingnumber`) VALUES
('T002', 'อยู่ในระหว่างทำการจัดและซื้อส่งสินค้า', 'K. กิตติค่ะ', 'ns.wit', '505room15 in apertmant', 'สร้อยคอ', 'Rastaclat Classic', '3', 'rastaclast classic สีดำ สีvoid สีขาว', '150 / ชิ้น  50 ค่าส่ง', '3200', '2019-10-19', '', 'TH020010013'),
('T003', 'ส่งสินค้าเสร็จเรียบร้อย', 'ธราวัณ  ปันยาทอง', 'ธราวัณ  ปันยาทอง', 'หอหญิงใน  ม. เกษตร 50 ถนน งามวงศ์วาน แขวง ลาดยาว เขตจตุจักร กรุงเทพมหานคร 10900', 'กระเป๋า', 'Gucci belt', '2', 'Gucci belt คัดแบรนสองชิ้น ชิ้นล่ะ 13500', '150', '2300', '2019-10-18', '', 'G20202023'),
('T004', 'refund', 'ประวิตร วงษ์สุวรรณ', 'P.prawit rakprayut', 'กองบัญชาการกองทัพบก\r\nเดิม กองบังคับการ กรมทหารราบที่ 1 มหาดเล็กรักษาพระองค์', 'อื่นๆ', 'นาฟิกาข้อมือยืมเพื่อน', '3', '-Richard Mille รุ่น RM 029 ราคาประมาณ 3.6 ล้านบาท\r\n-นาฬิกายี่ห้อ Richard Mille รุ่น RM 30 ราคาประมาณ 4 ล้านบาท\r\n-นาฬิกายี่ห้อ Rolex รุ่น Cosmograph Daytona Ice Blue Dial Platinum ราคาประมาณ  2.4ล้านบาท\r\n-นาฬิกายี่ห้อ Patek Philippe รุ่น 5960/1A ราคาอยู่ที่ 1.5-1.66 ล้านบาท', '300,000', '13', '2019-10-31', 'เงินหมด', ''),
('T005', 'ส่งสินค้าเสร็จเรียบร้อย', 'มากมาย มากมี', 'WW5353', 'Popular  มหาเมฆ', 'สร้อยคอ', 'เสื้อกล้ามTop', '1', 'กล้าม TOP3', '500', '2500', '2019-10-16', '', 'TH22354512'),
('T006', 'อยู่ในระหว่างทำการจัดและซื้อส่งสินค้า', 'K. มหาชัย', 'ns.witty', 'รพ. สีลม', 'อื่นๆ', 'Rastaclat 52212', '4', 'OPB', '300', '73000', '2019-10-27', '', ''),
('T007', 'ยืนยันการซื้อสินค้า', 'K. ชินนกาด บัดตง', 'ชินนกาด บัดตง ', '33632 /65 อพาตเม้นคุณป้า', 'อุปกรณ์ของใช้ต่างๆ', 'โต๊ะวางของ', '1', 'โต๊ะวางของ ขนาด 300 * 900 ซม. ที่ โฮมโปร', '300', '3000', '2019-10-27', '', ''),
('T008', 'Refund', 'ธนาธร จึงรุ่งเรืองกิจ', 'ธนาธร จิงกุ้ง', '50 ถนน งามวงศ์วาน แขวง ลาดยาว เขตจตุจักร กรุงเทพมหานคร 10900', 'อื่นๆ', 'ปืนฉีดน้ำ', '3', 'ปืนฉีดน้ำ ยาว\r\nปืนฉีดน้ำ สั้น\r\nปืนฉีดน้ำ หัวกุด', '150', '450', '0000-00-00', 'ปืนฉีดน้ำพัง', ''),
('T009', 'Refund', 'กิตติ สิงหาปัด', 'kittisinghaput', 'เลขที่ 3199 อาคารมาลีนนท์ทาวเวอร์ ถนนพระราม 4 แขวงคลองตัน เขตคลองเตย กรุงเทพฯ 10110', 'สร้อยคอ', 'สร้อย vasave', '1', 'สร้อย vasave ขนาด 90 กรัม รุ่น OG', '500', '2250', '0000-00-00', 'สินค้าหมด', ''),
('T010', 'Refund', 'มากมาย มากมี', 'ไม่มีตังค่า ', 'ตึกโซดาไฟ', 'อุปกรณ์ของใช้ต่างๆ', 'นาฟิกาข้อมือยืมเพื่อน', '1', 'UWU  นาฟิกาข้อมือยืมเพื่อน', '150', '9000', '2019-10-24', 'ปืนหายระเบิดไปแล้ว', '');

-- --------------------------------------------------------

--
-- Table structure for table `refundordered`
--

CREATE TABLE `refundordered` (
  `idrefund` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `refundstatus` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `refundnamecus` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `refundtypepd` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `refundnameproduct` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `refundpieceproduct` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `refundservicecharge` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `refundtotalprice` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `refunddatebuy` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `refuntrackingnumber` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `refundordered`
--

INSERT INTO `refundordered` (`idrefund`, `refundstatus`, `refundnamecus`, `refundtypepd`, `refundnameproduct`, `refundpieceproduct`, `refundservicecharge`, `refundtotalprice`, `refunddatebuy`, `refuntrackingnumber`) VALUES
('T002', 'Refund', 'K. กิตติค่ะ', '', 'Rastaclat Classic', '3', '150 / ชิ้น  50 ค่าส่ง', '3200', '2019-10-19', 'TH020010013'),
('T003', 'Refund', 'ธราวัณ  ปันยาทอง', '', 'Gucci belt', '2', '150', '2300', '2019-10-18', 'G20202023'),
('T004', 'Refund', 'ประวิตร วงษ์สุวรรณ', '', 'นาฟิกาข้อมือยืมเพื่อน', '3', '300,000', '13', '2019-10-31', ''),
('T009', 'Refund', 'กิตติ สิงหาปัด', '', 'สร้อย vasave', '1', '500', '2250', '2019-10-04', '');

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
  `orderaddress` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `orderaddresscus` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `requestorder`
--

INSERT INTO `requestorder` (`ordercustomer`, `orderdate`, `orderproductname`, `orderpiece`, `ordercontact`, `orderaddress`, `orderaddresscus`) VALUES
('OD001', '2019-10-25', 'Nike Air Force 1 Type เฉลิมฉลองประวัติศาสตร์แห่งกีฬาในฐานะส่วนหนึ่งของตระกูล N354 ที่ยกย่องไมล์ที่เร็วที่สุดของ Steve Prefontaine คู่นี้ใช้วัสดุโปร่งแสงเพื่ออวดระบบการสวมใส่ และเทคโนโลยีที่ปรับได้ ซึ่งให้สไตล์ที่ไม่เหมือนใคร ความพอดีแบบเฉพาะตัว และสไตล์การสวมใส่ที่อเนกประสงค์', '2', 'ggwp', '505room15 in apertmant', ''),
('OD002', '2019-10-23', 'ใส่ความ Freak ไปกับรองเท้ารุ่นซิกเนเจอร์รุ่นแรกของ Giannis Antetokoumpo และเป็นคู่แรกของ Nike ที่ให้สัมผัสแห่งเกมบาสเก็ตบอลในระดับนานาชาติ Zoom Freak 1 มีระบบลดแรงกระแทกพร้อมตอบสนองได้ดีเป็นพิเศษ ปลายเท้าล็อคกระชับ และการยึดเกาะหลายทิศทางแบบที่ต้องการเพื่อเติมเต็มเกมกีฬาสุด Freak ของเขา', '2', 'ggwp', '2 หมู่ที่ 1 บ้าน ถนน ยันตรกิจโกศล ตำบล ร้องกวาง อำเภอ ร้องกวาง แพร่ 54140', ''),
('OD003', '2019-10-16', 'Nike Free Metcon 2 UT เพิ่มการรองรับอีกชั้นเพื่อการออกกำลังกายหลากหลายรูปแบบ มาพร้อมสายรัดทนทานช่วยล็อคเท้าของคุณไว้ ขณะที่โฟมยืดหยุ่นทำให้คุณเคลื่อนไหวได้เป็นธรรมชาติอย่างต่อเนื่องตั้งแต่ท่าฝึกน้ำหนักไปจนถึงท่าฝึกความคล่องแคล่ว', '2', 'Kirawit', '2 ถนน วังหลัง แขวง ศิริราช เขตบางกอกน้อย กรุงเทพมหานคร 10700', ''),
('OD004', '2019-10-24', 'รองเท้าสปอตของ Nike ชื่อรุ่นว่า XXXX X XXXX ราคา 2900 บาท', '2', 'Kingkow', 'IMPACT Muang Thong Thani ถนน ถนนป๊อปปูล่า 3 Banmai นนทบุรี 11120', 'บริษัท กรุงเทพโทรทัศน์และวิทยุ จำกัด (ช่อง 3HD) เลขที่ 998/1 ซอยร่วมศิริมิตร (พหลโยธิน 18/1) ถ.พหลโยธิน แขวงจอมพล เขตจตุจักร กทม. 10900'),
('OD005', '2019-10-25', 'adidas รุ่น มหาเทพ', '1', 'มหาสมุด จดดีกว่าจำ', 'IMPACT Muang Thong Thani ถนน ถนนป๊อปปูล่า 3 Banmai นนทบุรี 11120', 'บริษัท กรุงเทพโทรทัศน์และวิทยุ จำกัด (ช่อง 3HD) เลขที่ 998/1 ซอยร่วมศิริมิตร (พหลโยธิน 18/1) ถ.พหลโยธิน แขวงจอมพล เขตจตุจักร กทม. 10900'),
('OD006', '2019-10-25', 'adidas รุ่น มหาเทพ', '1', 'มหาสมุด จดดีกว่าจำ', 'IMPACT Muang Thong Thani ถนน ถนนป๊อปปูล่า 3 Banmai นนทบุรี 11120', 'บริษัท กรุงเทพโทรทัศน์และวิทยุ จำกัด (ช่อง 3HD) เลขที่ 998/1 ซอยร่วมศิริมิตร (พหลโยธิน 18/1) ถ.พหลโยธิน แขวงจอมพล เขตจตุจักร กทม. 10900');

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

-- --------------------------------------------------------

--
-- Table structure for table `usered`
--

CREATE TABLE `usered` (
  `ID` int(5) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Lastname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `addressuser` varchar(500) NOT NULL,
  `Userlevel` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usered`
--

INSERT INTO `usered` (`ID`, `Username`, `Password`, `Firstname`, `Lastname`, `email`, `phonenumber`, `addressuser`, `Userlevel`) VALUES
(1, 'admin', '0b9a9b8b5efffed491c57eb570e90666', 'nawattakron', 'somboonmana', '', '', '', 'A'),
(2, 'bbb', '08f8e0260c64418510cefb2b06eee5cd', 'test', 'testuser', 'tiwloveyou03@hotmail.com', '0112255488', 'อยู่นี้ไว้เทสไดำๆไดมทสยำๆ ทมบสอแยำๆแส', 'M'),
(10, 'god', '25f9e794323b453885f5181f1b624d0b', 'god ', 'jesus', 'tiwlovethin@hotmail.co.th', '080441215', 'บริษัท กรุงเทพโทรทัศน์และวิทยุ จำกัด (ช่อง 3HD) เลขที่ 998/1 ซอยร่วมศิริมิตร (พหลโยธิน 18/1) ถ.พหลโยธิน แขวงจอมพล เขตจตุจักร กทม. 10900', 'M'),
(8, 'wed', '202cb962ac59075b964b07152d234b70', 'นวัตกรณ์กก', 'สมบุญมากก', 'jiwprahas28@gmail.com', '0800598435', 'บริษัท กรุงเทพโทรทัศน์และวิทยุ จำกัด (ช่อง 7HD)\r\nเลขที่ 998/1 ซอยร่วมศิริมิตร (พหลโยธิน 18/1) ถ.พหลโยธิน แขวงจอมพล เขตจตุจักร กทม. 10900', 'M'),
(9, '1150', '1150', 'ปราจีน', 'ธารามาหา', 'waratchaya.r@kisracorp.com', '0909809397', 'เลขที่ 3199 อาคารมาลีนนท์ทาวเวอร์ ถนนพระราม 4 แขวง', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderbuy`
--
ALTER TABLE `orderbuy`
  ADD PRIMARY KEY (`idorderbuy`),
  ADD KEY `typepd` (`typepd`);

--
-- Indexes for table `orderfence`
--
ALTER TABLE `orderfence`
  ADD PRIMARY KEY (`orderid`),
  ADD KEY `typepd` (`typepd`);

--
-- Indexes for table `refundordered`
--
ALTER TABLE `refundordered`
  ADD PRIMARY KEY (`idrefund`);

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
-- Indexes for table `usered`
--
ALTER TABLE `usered`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usered`
--
ALTER TABLE `usered`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderbuy`
--
ALTER TABLE `orderbuy`
  ADD CONSTRAINT `orderbuy_ibfk_1` FOREIGN KEY (`typepd`) REFERENCES `typeproduct` (`typepd`);

--
-- Constraints for table `orderfence`
--
ALTER TABLE `orderfence`
  ADD CONSTRAINT `orderfence_ibfk_1` FOREIGN KEY (`typepd`) REFERENCES `typeproduct` (`typepd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
