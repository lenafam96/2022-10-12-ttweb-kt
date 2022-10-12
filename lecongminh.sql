-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 08, 2022 at 12:28 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lecongminh`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(5) NOT NULL,
  `member_name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_dob` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_sex` int(1) NOT NULL DEFAULT 0,
  `member_nativeLand` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_hobby` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_time` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `member_name`, `member_dob`, `member_sex`, `member_nativeLand`, `member_hobby`, `member_time`) VALUES
(1, 'Nguyễn Mạnh Hùng', '16/04/2001', 0, 'Hiệp Hoà, Bắc Giang', '1', 0),
(2, 'Thái Thị Quỳnh Ngân', '2003-04-05', 1, 'Vinh, Nghệ An', '12', 1),
(4, 'Nguyễn Hoàng Kiều Trinh', '01/01/2008', 1, 'Tp Hồ Chí Minh', '2', 2),
(6, 'test', '2022-05-06', 2, 'test', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
