-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 31, 2023 at 07:25 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sorntampan`
--

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_form`
--

CREATE TABLE `evaluation_form` (
  `eva_id` int(11) UNSIGNED NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `eva_score` int(11) DEFAULT NULL,
  `eva_score2` int(11) DEFAULT NULL,
  `eva_score3` int(11) DEFAULT NULL,
  `eva_score4` int(11) DEFAULT NULL,
  `eva_score5` int(11) DEFAULT NULL,
  `eva_comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evaluation_form`
--

INSERT INTO `evaluation_form` (`eva_id`, `post_id`, `eva_score`, `eva_score2`, `eva_score3`, `eva_score4`, `eva_score5`, `eva_comment`) VALUES
(1, 1, 5, 4, 5, 5, 4, ''),
(2, 1, 4, 4, 4, 5, 1, 'hhgfdhfggfbgf'),
(3, 2, 4, 5, 3, 5, 7, '12121hkhjkhhjkh'),
(4, 4, 1, 4, 4, 5, 5, 'gvhnjvghghgv');

-- --------------------------------------------------------

--
-- Table structure for table `lesson_plan`
--

CREATE TABLE `lesson_plan` (
  `lp_id` int(11) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `lp_name` varchar(255) DEFAULT NULL,
  `lp_unit` int(11) DEFAULT NULL,
  `lp_title` varchar(255) DEFAULT NULL,
  `lp_info` longtext DEFAULT NULL,
  `lp_file_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lesson_plan`
--

INSERT INTO `lesson_plan` (`lp_id`, `user_id`, `lp_name`, `lp_unit`, `lp_title`, `lp_info`, `lp_file_id`) VALUES
(2, 'T00002', 'แผนคอม', 2, 'Lorem ipsum dolor sit amet,', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '/CED312/upload/แบบประเมินแผน.pdf'),
(3, 'T00001', 'แผนคอมㅇㅎㄹfghfhfg', 6, ' Ut enim ffdgdf', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ffdgdf', '/CED312/upload/chalei.pdf'),
(4, 'T00001', 'แผนคอม', 1, ' Ut  Ut enim ffdgdfdf', 'ㄴㄹㅊㄴㅇㄹㄴำดำ่ท', '/CED312/upload/กติกาการเล่น Coding Card.pdf'),
(5, 'T00002', 'ㄶㄴㅇㅎㄴㅇㅎ', 5, ' Ut enim ffdgdfLorem ipsum dolor sit amet,', 'ㄴㅋㅎㄶㄶㄶㄹㄴㅇㅎㅀㅀ', '/CED312/upload/Doc4.pdf'),
(9, 'T00001', 'แผนไทย', 2, 'หลักษาไทย', 'วยาสวหไกไดำดำ', '/CED312/upload/marisa2020,+{$userGroup},+4.+นิรันดร์+ชัยวิเศษ+38-52.pdf'),
(10, 'T00001', 'แผนไทย', 1, 'หลักษาไทย', 'lorem ipsum', '/CED312/upload/_  Story board GOF.pdf'),
(11, 'T0003', 'test', 1, 'อุปกรณ์คอม', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop p', '');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) UNSIGNED NOT NULL,
  `lp_id` int(11) DEFAULT NULL,
  `post_date` date DEFAULT NULL,
  `post_detail` varchar(255) DEFAULT NULL,
  `post_file_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `lp_id`, `post_date`, `post_detail`, `post_file_id`) VALUES
(1, 3, '2022-12-04', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '/CED312/upload_cover_image/278933571_115769447767675_1816209034009849081_n.jpg'),
(2, 4, '2022-12-05', 'fhjfhfhfghfgh', '/CED312/upload_cover_image/เฉลย.png'),
(4, 3, '2022-12-05', 'ghjghjghjgjhg', '/CED312/upload_cover_image/TD_052_กมลเพชร.jpg'),
(5, 4, '2022-12-06', 'gdfgdcfgdg', '/CED312/upload_cover_image/png-clipart-bestseller-computer-icons-sales-best-seller-text-logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `required`
--

CREATE TABLE `required` (
  `req_id` int(11) NOT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `req_type` int(11) DEFAULT NULL,
  `req_detail` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `required`
--

INSERT INTO `required` (`req_id`, `user_id`, `req_type`, `req_detail`) VALUES
(1, 'S0004', 6, 'เก่งแล้ว'),
(2, 'S0004', 8, 'เก่ง ๆๆๆ');

-- --------------------------------------------------------

--
-- Table structure for table `required_type`
--

CREATE TABLE `required_type` (
  `rt_id` int(11) NOT NULL,
  `rt_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `required_type`
--

INSERT INTO `required_type` (`rt_id`, `rt_name`) VALUES
(1, 'ฟังบรรยาย'),
(2, 'การอภิปรายกลุ่ม'),
(3, 'ใช้เกม'),
(4, 'การสาธิต'),
(5, 'การแสดงละคร'),
(6, 'สถานการณ์จำลอง'),
(7, 'การทดลอง'),
(8, 'การแสดงบทบาทสมมติ'),
(9, 'ใช้ศูนย์การเรียน'),
(10, 'การไปทัศนศึกษา'),
(11, 'การใช้กรณีตัวอย่าง');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `user_sname` varchar(255) DEFAULT NULL,
  `user_lname` varchar(255) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_tell` varchar(11) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_tier` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_id`, `user_sname`, `user_lname`, `class_id`, `subject_id`, `user_email`, `user_tell`, `user_password`, `user_tier`) VALUES
(1, 'S0001', 'you', 'me', 1, NULL, 'dfsdfSdfdsg@gmail.com', '0999999999', '$2y$10$JzEIMTUmlxY1WxjjlCjyAe28pkSh8BN.oJ.GDkmAUp97SV4lAEdYm', 'student'),
(2, 'T0001', 'phet4', 'kamonphet', 1, 1, 'afhtygjytb@gmail.com', '0123456789', '$2y$10$/VfhYfrhJ2767qJcIrUiCer7CzfyxxiCf7unmKN0nXwwp/mDG8Jku', 'teacher'),
(3, 'S0002', 'd', 'a', 2, NULL, 'fsdfiosdhfik@gmail.com', '0147258369', '$2y$10$p0EuosVS95Bkfdn7wOZBkOK.pm8CyWugaGFA1zPkCxT2PpjEVjURC', 'student'),
(4, 'T0002', 'soy', 'yee', 2, 3, 'iofgshjgmlk@gmail.com', '0369852147', '$2y$10$FwwjyZeUMUKzUXkZ9PsFseuULAI8a9AnBN8PrDmJ9pe7k1n18TQIK', 'teacher'),
(5, 'S0003', 'สาจัง', 'ลาละ', 6, 7, 'user@email.com', '0889854214', '$2y$10$Kbhci2S0EWGvVUX71ZpfReZJl9TvxgDreCmuHSGvOKzGYNockZlgO', 'student'),
(6, 'T0003', 'phet', 'ลาละ', 2, 9, 'user@email.com', '0889854214', '$2y$10$FwwjyZeUMUKzUXkZ9PsFseuULAI8a9AnBN8PrDmJ9pe7k1n18TQIK', 'teacher'),
(7, 'A0001', 'Admin', 'Admin', NULL, NULL, 'userAdmin@email.com', NULL, '$2y$10$U0KCu54NrJ4sRCH8TRb4SeueWV2EzSJlGj/eb4.hOb32dAwL7UoFu', 'admin'),
(8, 'S0004', 'สมชาย', 'เรียนดี', 5, 14, 'user@email.com', '0978452144', '$2y$10$wxEPaSRwSQphNtMyph3ZaeM4PUouTiT1.Nb6WiOxiHNMAocBH50yu', 'student'),
(9, 's0005', 'Test', 'Test', 5, 7, 'Test@gmail.com', '8585858585', '$2y$10$TPH6V38jM6mI0mRwqoluaezGV47VURyC8lcKJrpGbzm14C2yj5ITq', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `user_class_teach`
--

CREATE TABLE `user_class_teach` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_class_teach`
--

INSERT INTO `user_class_teach` (`class_id`, `class_name`) VALUES
(1, 'มัธยมศึกษาปีที่ 1'),
(2, 'มัธยมศึกษาปีที่ 2'),
(3, 'มัธยมศึกษาปีที่ 3'),
(4, 'มัธยมศึกษาปีที่ 4'),
(5, 'มัธยมศึกษาปีที่ 5'),
(6, 'มัธยมศึกษาปีที่ 6');

-- --------------------------------------------------------

--
-- Table structure for table `user_subject_teach`
--

CREATE TABLE `user_subject_teach` (
  `subject_id` int(11) UNSIGNED NOT NULL,
  `subject_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_subject_teach`
--

INSERT INTO `user_subject_teach` (`subject_id`, `subject_name`) VALUES
(1, 'ภาษาไทย'),
(2, 'คณิตศาสตร์'),
(3, 'วิทยาศาสตร์'),
(4, 'ฟิสิกส์'),
(5, 'เคมี'),
(6, 'ชีววิทยา'),
(7, 'วิทยาการคำนวณ'),
(8, 'สังคมศึกษา ศาสนาและวัฒนธรรม'),
(9, 'ประวัติศาสตร์'),
(10, 'สุขศึกษา'),
(11, 'พลศึกษา'),
(12, 'ศิลปะ'),
(13, 'การงานอาชีพ'),
(14, 'ภาษาอังกฤษ'),
(15, 'ภาษาต่างประเทศ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `evaluation_form`
--
ALTER TABLE `evaluation_form`
  ADD PRIMARY KEY (`eva_id`);

--
-- Indexes for table `lesson_plan`
--
ALTER TABLE `lesson_plan`
  ADD PRIMARY KEY (`lp_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `required`
--
ALTER TABLE `required`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `required_type`
--
ALTER TABLE `required_type`
  ADD PRIMARY KEY (`rt_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_class_teach`
--
ALTER TABLE `user_class_teach`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `user_subject_teach`
--
ALTER TABLE `user_subject_teach`
  ADD PRIMARY KEY (`subject_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `evaluation_form`
--
ALTER TABLE `evaluation_form`
  MODIFY `eva_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lesson_plan`
--
ALTER TABLE `lesson_plan`
  MODIFY `lp_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `required`
--
ALTER TABLE `required`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_class_teach`
--
ALTER TABLE `user_class_teach`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_subject_teach`
--
ALTER TABLE `user_subject_teach`
  MODIFY `subject_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
