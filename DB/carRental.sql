-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 10, 2023 at 01:12 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carRental`
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
  `user_status` int(1) NOT NULL COMMENT 'สถานะผู้ใช้งาน 1=บุคคลทั่วไป, 2=สมาชิก, 3=แอดมิน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ไอดีรถ';

--
-- AUTO_INCREMENT for table `tb_rent`
--
ALTER TABLE `tb_rent`
  MODIFY `rent_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ไอดีเช่า';

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ไอดีผู้ใช้งาน';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
