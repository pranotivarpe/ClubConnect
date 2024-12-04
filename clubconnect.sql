-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2023 at 01:51 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clubconnect`
--
CREATE DATABASE IF NOT EXISTS `clubconnect` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `clubconnect`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `Username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `backup`
--

DROP TABLE IF EXISTS `backup`;
CREATE TABLE `backup` (
  `club_id` int(4) NOT NULL,
  `club_name` varchar(30) NOT NULL,
  `co_ordinator` varchar(30) NOT NULL,
  `co_ordinator_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `backup`
--

INSERT INTO `backup` (`club_id`, `club_name`, `co_ordinator`, `co_ordinator_id`) VALUES
(1234, 'AIML', 'harish kundar', 6254),
(12334, 'Asquare', 'Harish kundar', 3212);

--
-- Triggers `backup`
--
DROP TRIGGER IF EXISTS `restore`;
DELIMITER $$
CREATE TRIGGER `restore` BEFORE DELETE ON `backup` FOR EACH ROW INSERT INTO clubinfo VALUES (OLD.club_id, old.club_name,old.co_ordinator,old.co_ordinator_id)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `clubinfo`
--

DROP TABLE IF EXISTS `clubinfo`;
CREATE TABLE `clubinfo` (
  `club_id` int(4) NOT NULL,
  `club_name` varchar(30) NOT NULL,
  `co_ordinator` varchar(30) NOT NULL,
  `co_ordinator_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clubinfo`
--

INSERT INTO `clubinfo` (`club_id`, `club_name`, `co_ordinator`, `co_ordinator_id`) VALUES
(1234, 'Fine-art Club', 'Deepak Raj', 1232),
(2342, 'Language Club', 'harish kundar', 6254),
(4206, 'Life Skill Club', 'Arun anoop', 5268),
(4209, 'Nisargavedh Club', 'Deeksha M', 5264),
(4210, 'Photography Club', 'Venkatesh Bhat', 5264),
(4216, 'Readers Club', 'Tanvi rai', 5483),
(4234, 'Sports Club', 'Tanvi rai', 45126),
(4985, 'Women empowerment cell', 'Vidhya ', 5325);

--
-- Triggers `clubinfo`
--
DROP TRIGGER IF EXISTS `mybackup`;
DELIMITER $$
CREATE TRIGGER `mybackup` BEFORE DELETE ON `clubinfo` FOR EACH ROW INSERT INTO backup VALUES(OLD.club_id,OLD.club_name,OLD.co_ordinator,OLD.co_ordinator_id)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

DROP TABLE IF EXISTS `contact_form`;
CREATE TABLE `contact_form` (
  `name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`name`, `phone`, `email`, `subject`, `message`) VALUES
('Jayesh', '8108675793', 'koradejayesh@gmail.com', 'About fest', 'is their any non_veg items be their in the food fest'),
('Kavya', '1234567891', 'kavya@gmail.com', 'jss', 'is their ewvent twrw'),
('Poonam', '7058450276', 'poonam@gmail.com', 'Tickets', 'is it necessary to sell all the tickets that i received from faculty co-ordinator');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback` (
  `slno` int(4) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`slno`, `email`, `message`) VALUES
(1, 'hemanth.arya1947@gmail.com', 'The site is good and easy to use'),
(2, 'vid@gmail.com', 'btffesed');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `club_name` varchar(30) DEFAULT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `email`, `club_name`, `password`) VALUES
(9616, 'dharshan', 'dharshan@gmail.com', 'Fine-art Club', '852741963&Rt'),
(9617, 'abhi', 'abhiiii@gmail.com', 'Language Club', '098765%Yt'),
(9618, 'varsha', 'varsha@gmail.com', 'Life Skill Club', '123456*Gh'),
(9619, 'gagana', 'gagana@gmail.com', 'Fine-art Club', 'LkJHGFD45674'),
(9620, 'suryank', 'suryank@gmail.com', 'Women empowerment cell', '951753*3Hu'),
(9621, 'amulaya', 'amulya@gmail.com', 'Life Skills Club', '8521265Kl*'),
(9622, 'meghana', 'meghana@gmail.com', 'Fine-art Club', 'Magana3456&'),
(9623, 'pavan', 'paan@gmail.com', 'Life Skill Club', '852741(Ij'),
(9624, 'harsha', 'harsha@gmail.com', 'Readers Club', 'qwex@12343I'),
(9625, 'harshitha', 'harsh@gmail.com', 'Nisargavedh Club', '@gJhail.com567'),
(9626, 'surya', 'sury@gmail.com', 'Nisargavedh Club', '@gmaH3474@.com'),
(9627, 'nararujuto', 'raju@gmail.com', 'Language Club', '@12al.G@com'),
(9628, 'chaya', 'chaya@gmail.com', 'Nisargavedh Club', '@gmail.coD741'),
(9629, 'neha', 'neha@gmail.com', 'Sports Club', '@gmailH741'),
(9630, 'jonney', 'jonney@gmail.com', 'Fine-art Club', '@gmail.cB852'),
(9631, 'freddy', 'freddy@gmail.com', 'Readers Club', '@gmail.coU963'),
(9632, 'maharaja', 'maha@gmail.com', 'Women empowerment cell', '@gmail.coA741'),
(9633, 'zoozuu', 'zoozu@gmail.com', 'Sports Club', 'DFG@gmail.com8'),
(9634, 'vidhya', 'vidhya@gmail.com', 'Sports Club', '@gmail.com7F'),
(9635, 'hemanth', 'hemanth.arya1947@gmail.com', 'Readers Club', 'Hemi@12345'),
(9636, 'anuj', 'jayasuryard@gmail.com', 'Language Club', 'Alva@123'),
(9637, 'gojo', 'explorejrd@gmail.com', 'Readers Club', 'Alvas@123'),
(9638, 'surya', 'surya@org.in', 'Readers Club', 'Surya#123'),
(9642, 'suresh', 'suresh@org.in', 'Photography Club', 'Alvas@12345'),
(9643, 'sunil', 'sunil@gmail.com', 'Photography Club', 'Sunil1234'),
(9644, 'swsws', 'wsws@gmail.com', 'Language Club', 'Dhruvan@123'),
;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `backup`
--
ALTER TABLE `backup`
  ADD PRIMARY KEY (`club_id`);

--
-- Indexes for table `clubinfo`
--
ALTER TABLE `clubinfo`
  ADD PRIMARY KEY (`club_id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `slno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9645;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
