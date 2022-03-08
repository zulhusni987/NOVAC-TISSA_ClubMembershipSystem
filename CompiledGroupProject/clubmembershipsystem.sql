-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2022 at 04:00 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clubmembershipsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `Admin_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Phone_Number` varchar(20) DEFAULT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblallmembers`
--

CREATE TABLE `tblallmembers` (
  `profile_image` varchar(255) NOT NULL,
  `matric_number` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bio` text NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblallmembers`
--

INSERT INTO `tblallmembers` (`profile_image`, `matric_number`, `name`, `bio`, `instagram`, `facebook`, `linkedin`) VALUES
('$profileImageName', '$matric_number', '$name', '$bio', '$instagram', '$facebook', '$linkedin'),
('1643193527-photo_2021-10-06_20-51-09 (2).jpg', '284736', 'asd', 'asda', 'asda', 'asdad', 'adsada'),
('1643193620-BGS Profile.jpg', '274845', 'adsnasdi', 'adsnaisd', 'adisadaiu', 'adsajdaisuj', 'adsaidjaiu'),
('1643194141-IMG20211023162851.png', ' 274929', 'Amirul Haziq', 'adad', 'sadadsa', 'asdasd', 'asdadsa'),
('1643224892-photo_2021-10-06_20-51-10.jpg', ' 284204', 'Muhammad Fitri bin Musa', 'noqdsaidjqoi', 'jdasoidjqosi', 'djwoqidjqwoid', 'doidwja'),
('1643224925-photo_2021-10-06_20-51-04.jpg', ' 284204', 'Muhammad Fitri bin Musa', 'Im a quiet guy', '@fitri', 'Muhammad Fitri', 'Muhammad Fitri'),
('1643224992-photo_2021-10-06_20-51-04.jpg', ' 284204', 'Muhammad Fitri bin Musa', 'Im a quiet guy', '@fitri', 'Muhammad Fitri', 'Muhammad Fitri'),
('1643249898-photo_2021-10-06_20-51-10 (2).jpg', ' 214834', 'AFIQ IZZUDDIN BIN HISHAM', 'sdaudjaidj', 'sajdaidjsu', 'dasdiajdisu', 'qdwqdd'),
('1643253878-3.png', ' 214834', 'AFIQ IZZUDDIN BIN HISHAM', 'Im a quiet guy', 'Waibee', 'Waibee', 'Waibee'),
('1643258132-1.png', ' 214834', 'AFIQ IZZUDDIN bin HISHAm', 'Im a quiet guy', 'waibee', 'Waibeee', 'Waibee');

-- --------------------------------------------------------

--
-- Table structure for table `tblevents`
--

CREATE TABLE `tblevents` (
  `Event_ID` int(11) NOT NULL,
  `Event_Name` varchar(255) NOT NULL,
  `Event_Date_Time` date DEFAULT NULL,
  `Event_Venue` varchar(255) DEFAULT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblevents`
--

INSERT INTO `tblevents` (`Event_ID`, `Event_Name`, `Event_Date_Time`, `Event_Venue`, `Description`) VALUES
(2, 'Shape Your Career', '2022-01-21', 'Teams', 'A career talk by a famous career advisor'),
(3, 'Interpersonal Workshop', '2022-02-16', 'Google Meet', 'Workshop about communication skills'),
(4, 'Big Data and Analytic Talk', '2022-01-29', 'Cisco Webex Meeting', ''),
(5, 'Communication Workshop', '2022-03-09', 'Microsoft Teams', 'fewfwefwefwfw'),
(6, 'Negotiation Workshop', '2022-04-07', 'Cisco Webex Meeting', ''),
(7, 'Investment Workshop', '2022-03-17', 'Google Meet', ''),
(8, 'Mentoring Workshop', '2022-05-14', 'Microsoft Teams', ''),
(9, 'Excel Workshop', '2022-03-07', 'Cisco Webex Meeting', ''),
(10, 'Counselling Day', '2022-03-19', 'Cisco Webex Meeting', 'This event is a one-day session with counsellor to talk about mental health.'),
(12, 'Accounting All Stars!', '2022-04-29', 'Cisco Webex Meeting', 'This event gathers all accounting students to showcase their talent!'),
(13, 'Ethical Workshop', '2022-05-25', 'Cisco Webex Meeting', 'This workshop expose participants about the work ethic. '),
(14, 'Accounting Workshop', '2022-05-18', 'Cisco Webex Meeting', 'This workshop is exposing participants about skills to have for an accountant');

-- --------------------------------------------------------

--
-- Table structure for table `tblfeedback`
--

CREATE TABLE `tblfeedback` (
  `Users_ID` int(11) NOT NULL,
  `Matric_Number` int(11) NOT NULL,
  `Event_ID` int(11) NOT NULL,
  `Problem_Issue` varchar(255) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblfeedback`
--

INSERT INTO `tblfeedback` (`Users_ID`, `Matric_Number`, `Event_ID`, `Problem_Issue`, `Date`) VALUES
(6, 274929, 9, 'sadsasdas', '2022-01-28'),
(6, 274929, 9, 'sadsasdas', '2022-01-28'),
(8, 214834, 6, 'sadasd', '2022-01-27'),
(8, 214834, 4, 'Technical problem in Webex. Please improve in the future', '2022-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `tblmembers`
--

CREATE TABLE `tblmembers` (
  `User_ID` int(11) DEFAULT NULL,
  `Members_ID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Matric_Number` int(11) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Phone_Number` varchar(20) DEFAULT NULL,
  `Courses` varchar(255) DEFAULT NULL,
  `INASIS` varchar(255) DEFAULT NULL,
  `Status` varchar(100) NOT NULL DEFAULT 'pending',
  `Date_Joined` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblmembers`
--

INSERT INTO `tblmembers` (`User_ID`, `Members_ID`, `Username`, `Password`, `Name`, `Matric_Number`, `Email`, `Phone_Number`, `Courses`, `INASIS`, `Status`, `Date_Joined`) VALUES
(6, 6, 'zul', 'zul123', 'Muhammad Zulhusni bin Shokri', 284532, 'zulhusnishokri85@gmail.com', '01156678299', 'BACCT (IS)', 'TNB', 'approved', '2022-01-01'),
(11, 11, 'dindin', 'dindin', 'Izzuddin', 284924, 'din@gmail.com', '0114858393', 'B.Mathematics', 'SME Bank', 'approved', NULL),
(12, 12, 'harith', 'harith', 'Harith', 284274, 'harith@gmail.com', '0194739842', 'B.Islamic Finance and Banking', 'SME Bank', 'approved', NULL),
(13, 13, 'aziim', 'aziim', 'Aziim', 287384, 'aziim@gmail.com', '014857395', 'B. hensem', 'SME hensem', 'approved', NULL),
(14, 14, 'eddie', 'eddie', 'Eddie', 275383, 'eddie@gmail.com', '01145869234', 'B.Business Admin.', 'MISC', 'approved', NULL),
(15, 15, 'fayyadh', 'yadhmete', 'Fayyadh', 273755, 'fayyadh@gmail.com', '0118476242', 'B. Islamic Finance and Banking', 'TNB', 'approved', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblmerit`
--

CREATE TABLE `tblmerit` (
  `Users_ID` int(11) NOT NULL,
  `Matric_Number` int(11) NOT NULL,
  `Event_ID` int(11) NOT NULL,
  `Event_Name` varchar(255) NOT NULL,
  `Event_Date` date DEFAULT NULL,
  `Merit_Point` int(11) NOT NULL,
  `Upload_Screenshot` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblmerit`
--

INSERT INTO `tblmerit` (`Users_ID`, `Matric_Number`, `Event_ID`, `Event_Name`, `Event_Date`, `Merit_Point`, `Upload_Screenshot`, `Status`) VALUES
(6, 274929, 3, 'Interpersonal Workshop', '2022-02-16', 5, 'Meme Zul love.png', 'approved'),
(8, 214834, 8, 'Mentoring Workshop', '2022-05-14', 5, 'Screenshot (27).png', 'approved'),
(8, 214834, 2, 'Shape Your Career', '2022-01-21', 5, 'Screenshot (8).png', 'approved'),
(6, 274929, 2, 'Shape Your Career', '2022-01-21', 5, 'Screenshot (10).png', 'approved'),
(9, 284204, 7, 'Investment Workshop', '2022-03-17', 5, 'photo_2021-10-06_20-51-10.jpg', 'approved'),
(8, 214834, 6, 'Negotiation Workshop', '2022-04-07', 5, 'Screenshot (40).png', 'approved'),
(8, 214834, 4, 'Big Data and Analytic Talk', '2022-01-29', 5, 'Screenshot (48).png', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `tblregistration`
--

CREATE TABLE `tblregistration` (
  `Registration_ID` int(11) NOT NULL,
  `Users_ID` int(11) NOT NULL,
  `Matric_Number` int(11) NOT NULL,
  `Events_ID` int(11) NOT NULL,
  `s` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblregistration`
--

INSERT INTO `tblregistration` (`Registration_ID`, `Users_ID`, `Matric_Number`, `Events_ID`, `s`) VALUES
(13, 8, 214834, 2, ''),
(16, 8, 214834, 3, ''),
(17, 6, 274929, 2, ''),
(20, 6, 274929, 8, ''),
(21, 6, 274929, 7, ''),
(23, 9, 284204, 5, ''),
(24, 8, 214834, 6, ''),
(25, 8, 214834, 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `Users_ID` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `matrics_number` int(11) DEFAULT NULL,
  `courses` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_type` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `trn_date` datetime DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) NOT NULL,
  `INASIS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`Users_ID`, `name`, `matrics_number`, `courses`, `username`, `email`, `user_type`, `password`, `trn_date`, `status`, `phone_number`, `INASIS`) VALUES
(4, 'Izzuddin', 284738, 'B. Islamic Finance and Banking', 'dindin', 'izzuddin@gmail.com', 'admin', 'dindin', '2022-01-25 19:17:39', 'approved', '', ''),
(6, 'Amirul Haziq', 274929, 'BACCT (IS)', 'meon', 'mirul@gmail.com', 'members', 'meon', '2022-01-25 21:55:40', 'approved', '0153829482', 'TNB'),
(7, 'Aziim', 284924, 'B.ACCT (IS)', 'aziim', 'aziim@gmail.com', 'admin', 'hensem', '2022-01-26 06:16:34', 'approved', '', ''),
(8, 'AFIQ IZZUDDIN bin HISHAm', 214834, 'B.Acct (IS)', 'waibee', 'aifq@gmail.com', 'members', 'waibee', '2022-01-26 06:20:47', 'approved', '0114584939', 'Yayasan al-Bukhari'),
(9, 'Muhammad Fitri bin Musa', 284204, 'B.Acct (IS)', 'Fitri', 'fitri@gmail.com', 'members', 'fitri', '2022-01-26 08:11:45', 'approved', '01156678299', 'Petronas'),
(10, 'Afirudin', 249284, 'B.IT', 'Afi', 'afi@gmail.com', 'admin', 'afi', '2022-01-26 08:12:11', 'pending', '', ''),
(11, 'Hezaire', 284392, 'B.Counselling', 'Zaire', 'zaire@gmail.com', 'members', 'zaire', '2022-01-26 15:51:32', 'approved', '', ''),
(12, 'Aminnur', 241942, 'B. IT', 'mino', 'aminnur@gmail.com', 'members', 'mino', '2022-01-26 16:19:34', 'pending', '', ''),
(13, 'Syarifah Safeerah', 274392, 'B.ACCT (IS)', 'syasya', 'syasya@gmail.com', 'admin', 'syasya', '2022-01-26 16:25:56', 'approved', '', ''),
(14, 'Ooi Shinyee', 273854, 'B.ACCT (IS)', 'Shinyee', 'shinyee@gmail.com', 'members', 'shinyee', '2022-01-27 03:16:10', 'approved', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `tblevents`
--
ALTER TABLE `tblevents`
  ADD PRIMARY KEY (`Event_ID`);

--
-- Indexes for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  ADD KEY `Event_ID` (`Event_ID`),
  ADD KEY `tblfeedback_ibfk_3` (`Users_ID`);

--
-- Indexes for table `tblmembers`
--
ALTER TABLE `tblmembers`
  ADD PRIMARY KEY (`Members_ID`);

--
-- Indexes for table `tblmerit`
--
ALTER TABLE `tblmerit`
  ADD KEY `Event_ID` (`Event_ID`),
  ADD KEY `Users_ID` (`Users_ID`);

--
-- Indexes for table `tblregistration`
--
ALTER TABLE `tblregistration`
  ADD PRIMARY KEY (`Registration_ID`),
  ADD KEY `Events_ID` (`Events_ID`),
  ADD KEY `tblregistration_ibfk_1` (`Users_ID`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`Users_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblevents`
--
ALTER TABLE `tblevents`
  MODIFY `Event_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tblmembers`
--
ALTER TABLE `tblmembers`
  MODIFY `Members_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblregistration`
--
ALTER TABLE `tblregistration`
  MODIFY `Registration_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `Users_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  ADD CONSTRAINT `tblfeedback_ibfk_2` FOREIGN KEY (`Event_ID`) REFERENCES `tblevents` (`Event_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblfeedback_ibfk_3` FOREIGN KEY (`Users_ID`) REFERENCES `tblusers` (`Users_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblmerit`
--
ALTER TABLE `tblmerit`
  ADD CONSTRAINT `tblmerit_ibfk_2` FOREIGN KEY (`Event_ID`) REFERENCES `tblevents` (`Event_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblmerit_ibfk_3` FOREIGN KEY (`Users_ID`) REFERENCES `tblusers` (`Users_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblregistration`
--
ALTER TABLE `tblregistration`
  ADD CONSTRAINT `tblregistration_ibfk_1` FOREIGN KEY (`Users_ID`) REFERENCES `tblusers` (`Users_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblregistration_ibfk_2` FOREIGN KEY (`Events_ID`) REFERENCES `tblevents` (`Event_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
