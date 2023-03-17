-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2023 at 03:10 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrental`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_car`
--

CREATE TABLE `tb_car` (
  `car_id` int(11) NOT NULL COMMENT 'ไอดีรถ',
  `car_img` text NOT NULL COMMENT 'รูปรถเช่า',
  `car_name` varchar(100) DEFAULT NULL COMMENT 'ชื่อรถ',
  `car_reg` varchar(50) DEFAULT NULL COMMENT 'ทะเบียน',
  `car_type` int(11) DEFAULT NULL COMMENT '1=รถมอไซต์,2=รถเก๋ง,3=รถกะบะ,4=รถตู้,5=รถบรรทุก',
  `car_color` varchar(50) NOT NULL COMMENT 'สีรถ',
  `car_price` int(11) NOT NULL COMMENT 'ราคาเช่ารถ',
  `car_status` int(11) NOT NULL COMMENT '1=ใช้งานอยู่,2=ว่าง,3=อยู่ระหว่างซ่อม'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_car`
--

INSERT INTO `tb_car` (`car_id`, `car_img`, `car_name`, `car_reg`, `car_type`, `car_color`, `car_price`, `car_status`) VALUES
(22, 'benzwhite.jpg', 'Benz', '1234', 2, 'ขาว', 500, 2),
(23, 'toyata.jpg', 'toyata', '5555', 2, 'เทา', 299, 2),
(24, 'honda.jpg', 'honda', '2323', 2, 'น้ำเงิน', 200, 2),
(26, 'isuzu.jpg', 'isuzu', '6969', 3, 'ขาว', 500, 2),
(27, 'pcx.jpg', 'PCX', '2005', 1, 'ขาว', 300, 2),
(28, 'dream.jpg', 'Dream', '1234', 1, 'ชมพู', 250, 2),
(29, 'vespa.jpg', 'Vespa', '9999', 1, 'ส้ม', 0, 2),
(30, 'scoopy.jpg', 'Scoopy', '7777', 1, 'แดง', 555, 1),
(31, 'van1.jpg', 'Van', '4567', 4, 'เทา', 999, 2),
(32, 'van2.jpg', 'Hyundai', '9090', 4, 'ดำ', 1500, 1),
(33, 'BMW.jpg', 'BMW', '4646', 2, 'น้ำเงิน', 2000, 2),
(34, 'mitsu.jpg', 'Mitzu', '6767', 2, 'ขาว', 800, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rent`
--

CREATE TABLE `tb_rent` (
  `rent_id` int(11) NOT NULL COMMENT 'ไอดีเช่า',
  `car_id` int(11) NOT NULL COMMENT 'ไอดีรถ',
  `user_id` varchar(13) NOT NULL COMMENT 'รหัสประชาชนคนเช่า',
  `rent_start` date NOT NULL COMMENT 'วันที่เริ่มเช่า',
  `rent_end` date NOT NULL COMMENT 'วันสุดท้ายของการเช่า',
  `rent_status` int(11) NOT NULL COMMENT '1=กำลังเช่า,2=ยกเลิกเช่า,3=เช่าเสร็จ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_rent`
--

INSERT INTO `tb_rent` (`rent_id`, `car_id`, `user_id`, `rent_start`, `rent_end`, `rent_status`) VALUES
(29, 30, 'ว่าง', '2023-12-12', '2023-12-15', 1),
(30, 32, 'ว่าง', '2023-12-12', '2023-12-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL COMMENT 'ไอดีผู้ใช้งาน',
  `user_email` varchar(100) NOT NULL COMMENT 'อีเมลล์',
  `user_password` int(11) NOT NULL COMMENT 'รหัสผ่าน',
  `user_title` int(1) NOT NULL COMMENT '1=นาย,2=นางสาว,3=นาง',
  `user_fname` varchar(50) NOT NULL COMMENT 'ชื่อจริง',
  `user_lname` varchar(50) NOT NULL COMMENT 'นามสกุล',
  `user_gender` int(11) NOT NULL COMMENT 'เพศ',
  `user_tel` varchar(10) NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `user_address` text NOT NULL COMMENT 'ที่อยู่',
  `user_age` varchar(3) NOT NULL COMMENT 'อายุ',
  `user_status` int(1) NOT NULL COMMENT 'สถานะผู้ใช้งาน 1=บุคคลทั่วไป, 2=สมาชิก, 3=แอดมิน',
  `profile_img` text NOT NULL COMMENT 'รูปผู้ใช้งาน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_email`, `user_password`, `user_title`, `user_fname`, `user_lname`, `user_gender`, `user_tel`, `user_address`, `user_age`, `user_status`, `profile_img`) VALUES
(1, 'dfggdfg', 0, 1, 'gdfgdfg', 'dfgdfg', 0, 'dfgdfgdfgd', 'dfg', 'dfg', 1, 'capy.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_car`
--
ALTER TABLE `tb_car`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `tb_rent`
--
ALTER TABLE `tb_rent`
  ADD PRIMARY KEY (`rent_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_car`
--
ALTER TABLE `tb_car`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ไอดีรถ', AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tb_rent`
--
ALTER TABLE `tb_rent`
  MODIFY `rent_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ไอดีเช่า', AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ไอดีผู้ใช้งาน', AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
