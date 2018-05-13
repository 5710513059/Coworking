-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2018 at 08:12 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb1`
--

-- --------------------------------------------------------

--
-- Table structure for table `booksa`
--

CREATE TABLE `booksa` (
  `ID` int(11) NOT NULL,
  `Rooms` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Usercount` int(15) NOT NULL,
  `Start_time` int(2) NOT NULL,
  `End_time` int(2) NOT NULL,
  `DateReceip` date NOT NULL,
  `Member_ID` int(11) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Status` varchar(50) CHARACTER SET tis620 NOT NULL DEFAULT 'รอการยืนยัน',
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `booksa`
--

INSERT INTO `booksa` (`ID`, `Rooms`, `Usercount`, `Start_time`, `End_time`, `DateReceip`, `Member_ID`, `Name`, `Status`, `total`) VALUES
(40, 'A', 1, 9, 10, '2018-05-18', 6, 'wipada', 'รอการยืนยัน', 80),
(41, 'C', 8, 12, 15, '2018-05-26', 6, 'wipada', 'รอการยืนยัน', 900),
(42, 'D', 7, 18, 20, '2018-06-18', 5, 'skim', 'รอการยืนยัน', 300),
(43, 'B', 6, 15, 17, '2018-07-04', 5, 'skim', 'รอการยืนยัน', 400),
(44, 'B', 2, 11, 12, '2018-08-06', 18, 'song', 'รอการยืนยัน', 200),
(45, 'A', 1, 19, 20, '2018-05-10', 7, 'pop', 'รอการยืนยัน', 80),
(46, 'A', 1, 17, 18, '2018-05-15', 18, 'song', 'รอการยืนยัน', 80),
(47, 'B', 2, 9, 12, '2018-07-26', 19, 'sufyan', 'รอการยืนยัน', 600),
(48, 'C', 4, 9, 19, '2018-05-27', 19, 'sufyan', 'อนุมัติ', 3000),
(49, 'D', 4, 9, 15, '2018-05-06', 19, 'sufyan', 'อนุมัติ', 900),
(50, 'B', 4, 9, 16, '2018-05-20', 19, 'sufyan', 'อนุมัติ', 1400);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `ID` int(10) NOT NULL,
  `Roomname` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`ID`, `Roomname`, `Price`) VALUES
(1, 'A', 80),
(2, 'B', 200),
(3, 'C', 300),
(4, 'D', 150);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room_reserve`
--

CREATE TABLE `tbl_room_reserve` (
  `reserve_id` int(11) NOT NULL,
  `reserve_start` datetime NOT NULL,
  `reserve_end` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_room_reserve`
--

INSERT INTO `tbl_room_reserve` (`reserve_id`, `reserve_start`, `reserve_end`) VALUES
(1, '2015-04-01 08:15:00', '2015-04-01 10:15:00'),
(2, '2015-04-01 14:02:04', '2015-04-01 15:02:13'),
(3, '2015-03-31 14:59:29', '2015-04-01 16:59:42');

-- --------------------------------------------------------

--
-- Table structure for table `uploadfile`
--

CREATE TABLE `uploadfile` (
  `fileID` int(5) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `fileupload` varchar(200) CHARACTER SET utf8 NOT NULL,
  `dateup` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Member_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploadfile`
--

INSERT INTO `uploadfile` (`fileID`, `name`, `fileupload`, `dateup`, `Member_ID`) VALUES
(25, 'phing', '1525962168-2536479568.jpg', '2018-05-10 14:22:48', 0),
(26, 'ping', '1525962213-2536479568.jpg', '2018-05-10 14:23:33', 0),
(27, 'kim', '1525962279-Capture1.PNG', '2018-05-10 14:24:39', 0),
(28, 'kim', '1525962317-2536479568.jpg', '2018-05-10 14:25:17', 0),
(29, 'sing', '1525962457-2536479568.jpg', '2018-05-10 14:27:37', 0),
(30, 'sing song', '1525968861-2536479568.jpg', '2018-05-10 16:14:21', 0),
(31, 'ซุฟยาน', '1525972323-123.jpg', '2018-05-10 17:12:03', 0),
(32, 'ซุฟยาน', '1525973055-Capture4.PNG', '2018-05-10 17:24:15', 19),
(50, '123456', '1525974372-hot.jpg', '2018-05-10 17:46:12', 19);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Member_ID` int(10) NOT NULL,
  `Name` varchar(100) CHARACTER SET tis620 NOT NULL,
  `Lastname` varchar(100) CHARACTER SET tis620 NOT NULL,
  `Username` varchar(100) CHARACTER SET tis620 NOT NULL,
  `Numberphone` varchar(10) CHARACTER SET tis620 NOT NULL,
  `Email` varchar(100) CHARACTER SET tis620 NOT NULL,
  `Password` varchar(100) CHARACTER SET tis620 NOT NULL,
  `Userlevel` varchar(2) CHARACTER SET tis620 NOT NULL DEFAULT 'U'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Member_ID`, `Name`, `Lastname`, `Username`, `Numberphone`, `Email`, `Password`, `Userlevel`) VALUES
(1, 'alisa', 'semmad', 'aliza', '0906691495', 'alias_ali-liizaa@hotmail.com', 'e505b3359fabddf9296bbd11fb4c5158f1821fc313beab4f2039f32f43a970ad', 'A'),
(5, 'skim', 'skun', 'kim', '123456789', 'skim@hotmail.com', 'e505b3359fabddf9296bbd11fb4c5158f1821fc313beab4f2039f32f43a970ad', 'U'),
(6, 'wipada', 'wiriyaudomkul', 'phing', '0909090909', 'wipada_2538@hotmail.com', 'e505b3359fabddf9296bbd11fb4c5158f1821fc313beab4f2039f32f43a970ad', 'U'),
(7, 'pop', 'popyyyyy', 'pop', '0856715543', 'nasriya_pop@gmail.com', 'c322cc731be308edb4e5111332afde9240013f80fa4b64049bd71c10166f57b8', 'U'),
(9, 'thitimharrrrrrrrrrr', 'SEMMAD', 'golfgetA', '0808912545', 'thitima501@gmail.com', '8688374da9929dc8f519d082e522d74e13922457338aa583b89aa8e0a5d86cc1', 'U'),
(12, 'nasriya', 'langyanai', 'nasriya', '0856715543', 'nasriya.pop@gmail.com', '63f2c30458e4137dc214062bfb593624c366c3ea39112864ea803926fc646e3c', 'O'),
(15, 'eggyy', 'ferby', 'egg', '0987886578', 'egg@hotmail.com', 'egg', 'U'),
(18, 'song', 'sang', 'sing', '0908887766', 'sing@hotmail.com', 'e505b3359fabddf9296bbd11fb4c5158f1821fc313beab4f2039f32f43a970ad', 'U'),
(19, 'sufyan', 'sufaa', 'sufyan', '0831684598', 'sufyan@hotmail.com', '956e84c8c14827e9b34d90242293714c4dec008b0bbbff3f640c69ce8ba67f77', 'U');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booksa`
--
ALTER TABLE `booksa`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Roomname` (`Roomname`);

--
-- Indexes for table `tbl_room_reserve`
--
ALTER TABLE `tbl_room_reserve`
  ADD PRIMARY KEY (`reserve_id`);

--
-- Indexes for table `uploadfile`
--
ALTER TABLE `uploadfile`
  ADD PRIMARY KEY (`fileID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Member_ID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booksa`
--
ALTER TABLE `booksa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_room_reserve`
--
ALTER TABLE `tbl_room_reserve`
  MODIFY `reserve_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Member_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
