-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 26, 2016 at 06:04 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission_form`
--

CREATE TABLE IF NOT EXISTS `admission_form` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'student',
  `college_no` int(6) DEFAULT '0',
  `batch_no` int(11) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `cnic` varchar(30) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `paddress` varchar(30) NOT NULL,
  `taddress` varchar(30) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL,
  `university` varchar(30) NOT NULL,
  `obtained` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `cgpa` varchar(255) NOT NULL DEFAULT '0',
  `image` varchar(30) NOT NULL,
  `session` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `selection` varchar(255) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `admission_form`
--

INSERT INTO `admission_form` (`sid`, `username`, `password`, `role`, `college_no`, `batch_no`, `sname`, `fname`, `gender`, `dob`, `cnic`, `religion`, `mobile`, `email`, `paddress`, `taddress`, `qualification`, `year`, `university`, `obtained`, `total`, `subject`, `cgpa`, `image`, `session`, `selection`) VALUES
(18, 'Ahmad', 'khan', 'student', 101234, 13, 'Ahmad Khan', 'Sher Khan', 'male', '2015-10-15', '4210123423411', 'Islam', '03335456768', 'ahmad@gmail.com', 'Peshawar', 'Lahore', 'FCS', '2014', 'UPS', 950, 1100, 'Computer Science', '3.0', 'images/e.jpg', '2015-09-26 07:00:00', 'Selected'),
(23, 'irfanali', 'hayatabad', 'student', 104567, 12, 'Irfan Ali', 'Ali Khan', 'male', '2015-10-06', '4210132434234', 'Islam', '03456567873', 'irfan@gmail.com', 'Peshawar', 'Islamabad', 'BA', '2013', 'APS', 951, 1100, 'Chemistry', '2.1', 'images/e.jpg', '2016-05-26 07:00:00', 'Selected'),
(24, 'Owais', 'pakistan', 'student', 106543, 12, 'Owais Khan', 'Shees Khan', 'male', '2015-10-12', '4210134456543', 'Islam', '03435656789', 'owais@gmail.com', 'Peshawar', 'Kohat', 'BSC', '2010', 'Peshawar Model', 899, 1100, 'Physics', '2.1', 'images/d.jpg', '2013-12-26 08:00:00', 'Selected'),
(26, 'shahidafridi', 'pakistan', 'student', 104563, 12, 'Shahid Afridi', 'Umar Afridi', 'male', '2015-10-20', '4210145764534', 'Islam', '03332343456', 'shahid@gmail.com', 'Kohat', 'Peshawar', 'FSC', '2010', 'Edwardes', 860, 1100, 'Computer Science', '2.6', 'images/Chrysanthemum.jpg', '2013-11-26 08:00:00', 'Selected'),
(27, 'sheeszahidi', 'pakistan', 'student', 109876, 13, 'Shees Zahidi', 'Imtiaz Zahidi', 'male', '2015-10-15', '4210145676545', 'Islam', '03324565672', 'shees@gmail.com', 'Kashmir', 'Lahore', 'FSC', '2010', 'Edwardes', 700, 1100, 'Computer Science', '2.2', 'images/Chrysanthemum.jpg', '2014-11-26 08:00:00', 'Selected'),
(35, 'shahiqqaleem', 'indinashia', 'student', 105435, 14, 'Shahiq Kalim', 'Raees Khan', 'male', '0000-00-00', '4210102343234', 'Islam', '03445456789', 'shahiq@gmail.com', 'Islamabad', 'Peshawar', 'FSC', '2010', 'Brains', 981, 1100, 'Computer', '3.3', 'images/Chrysanthemum.jpg', '2014-11-26 08:00:00', 'Selected'),
(38, 'yasirkhan', 'imansdasd', 'student', 104324, 14, 'Yasir Khan', 'Iman Khan', 'male', '2015-10-21', '4210167894534', 'Hindu', '03334556678', 'yasir@gmail.com', 'Faisalabad', 'Quetta', 'FSC', '2010', 'Farabi', 999, 1100, 'Computer', '2.4', 'images/Chrysanthemum.jpg', '2015-11-26 08:00:00', 'Selected'),
(41, 'fawadalam', 'fawad', 'student', 108767, 12, 'Fawad Alam', 'Alam Khan', 'male', '2015-11-03', '4210145564345', 'Islam', '03455489234', 'fawad@gmail.com', 'Peshawar', 'Islamabad', 'FSC', '2010', 'Edwardes', 950, 1100, 'Computer Science', '3.7', 'images/Lighthouse.jpg', '2014-11-26 08:00:00', ''),
(49, 'imran', 'imran', 'student', 105434, 13, 'Imran Ali', 'Shahid Khan', 'male', '2016-01-12', '4210176453421', 'Islam', '03456578916', 'imran@gmail.com', 'Lahore', 'Peshawar', 'FSC', '2010', 'Islamia', 800, 1100, 'Computer Sciences', '3.7', 'images/Hydrangeas.jpg', '2015-08-26 07:00:00', ''),
(50, 'kamran', 'kamran', 'student', 105675, 14, 'Kamran Khan', 'Sher Zaman', 'male', '2016-01-12', '4210134566787', 'Islam', '03365467890', 'kamran@gmail.com', 'Islamabad', 'Peshwar', 'FSC', '2010', 'Islamia', 850, 1100, 'Physics', '3.3', 'images/Koala.jpg', '2015-09-08 07:00:00', ''),
(51, 'zahidshah', 'zahid', 'student', 108433, 14, 'Syed Zahid Shah', 'Syed Hussain Shah', 'male', '2015-12-30', '4201013242341', 'Islam', '03328789345', 'zahid@gmail.com', 'Sialkot', 'Peshawar', 'FSC', '2013', 'Edwardes', 841, 1100, 'Computer Science', '3.5', 'images/Koala.jpg', '2016-05-26 07:00:00', 'Selected'),
(52, 'zulfiqarkhan', 'zulfiqar', 'student', 105678, 13, 'Zulfiqar Khan', 'Muhammad Fayaz', 'male', '2016-01-12', '4210102342341', 'Islam', '03439823657', 'zulfiqar@gmail.com', 'Faisalabad', 'Multan', 'FSC', '2012', 'Peshawar Model', 758, 1100, 'Computer Science', '3.6', 'images/Lighthouse.jpg', '2016-05-26 07:00:00', 'Selected'),
(58, 'hashimkhan', 'hashim', 'student', 104345, 12, 'Hashim Khan', 'Sher Khan', 'male', '2012-04-02', '4210145654321', 'Islam', '03335757652', 'hashim@hotmail.com', 'Peshawar', 'Peshawar', 'FSC', '2010', 'Govt. College', 888, 1100, 'Computer Science', '3.8', 'images/Lighthouse.jpg', '2016-05-23 06:42:33', '');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE IF NOT EXISTS `assignment` (
  `assignid` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `t_desc` varchar(5000) NOT NULL,
  `semester` int(11) NOT NULL,
  `batch_no` int(11) NOT NULL,
  `file_upload` varchar(255) DEFAULT NULL,
  `deadline` date NOT NULL,
  `tot_marks` int(11) NOT NULL,
  `received_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`assignid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assignid`, `subject`, `teacher`, `title`, `t_desc`, `semester`, `batch_no`, `file_upload`, `deadline`, `tot_marks`, `received_date`) VALUES
(20, 'Database 1', 'Changez Khan', 'Assignment 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 12, 'tassignment/ftp.txt', '2016-04-10', 25, '2016-05-26 07:00:00'),
(21, 'Compiler Contruction', 'Ali Raza', 'Compiler Assignment 3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 6, 14, 'tassignment/Work in Merlin.txt', '2016-04-11', 25, '2016-05-26 07:00:00'),
(22, 'Compiler Contructions', 'Abdul Hameed', 'Assignment 6', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 3, 13, 'tassignment/Work in Merlin.txt', '2016-04-11', 25, '2016-04-04 09:09:15'),
(24, 'Compiler', 'Ali Raza', 'Assignment 5', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 4, 12, 'tassignment/ftp.txt', '2016-04-14', 25, '2016-04-14 08:24:28'),
(25, 'Physics 1', 'Changez Khan', 'Assignment 6', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 3, 14, 'tassignment/Work in Merlin.txt', '2016-04-21', 25, '2016-04-14 08:25:16'),
(26, 'Maths', 'Abdul Hameed ', 'Assignment 7', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 4, 13, 'tassignment/Work in Merlin.txt', '2016-04-14', 25, '2016-04-14 08:26:19'),
(27, 'Data Communication', 'Abdul Muddasar', 'Assignment 7', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 5, 13, 'tassignment/ftp.txt', '2016-04-14', 25, '2016-04-14 08:27:54');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `role`) VALUES
(1, 'Changez Khan', 'teacher', 'teacher'),
(3, 'Ali Raza', 'teacher', 'teacher'),
(7, 'admin', 'admin', 'admin'),
(8, 'Abdul Hameed', 'teacher', 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `notice_board`
--

CREATE TABLE IF NOT EXISTS `notice_board` (
  `noticeID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`noticeID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `notice_board`
--

INSERT INTO `notice_board` (`noticeID`, `title`, `description`, `time`, `image`) VALUES
(1, 'Notice No 1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2016-05-26 07:00:00', 'images/Koala.jpg'),
(2, 'Notice No 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2016-05-26 07:00:00', 'images/Koala.jpg'),
(3, 'Notice No 3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2016-05-26 07:00:00', 'images/Hydrangeas.jpg'),
(4, 'Notice No 4', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2016-05-26 07:00:00', 'images/Lighthouse.jpg'),
(11, 'Notice No 5', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2016-05-01 06:33:46', 'images/Koala.jpg'),
(12, 'Notice No 6', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2016-05-01 06:34:22', 'images/Jellyfish.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sassignment`
--

CREATE TABLE IF NOT EXISTS `sassignment` (
  `sa_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(255) NOT NULL,
  `submit_to` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `college_no` int(11) NOT NULL,
  `batch_no` int(11) NOT NULL,
  `atitle` varchar(255) NOT NULL,
  `file_upload` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `obt_marks` int(11) NOT NULL,
  PRIMARY KEY (`sa_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `sassignment`
--

INSERT INTO `sassignment` (`sa_id`, `s_name`, `submit_to`, `subject`, `college_no`, `batch_no`, `atitle`, `file_upload`, `date`, `obt_marks`) VALUES
(3, 'Hassan Umair', 'Changez Khan', 'Computer Graphics', 10232, 12, 'Assignment 1', 'sassignment/Work in Merlin.txt', '2016-04-05 08:54:12', 23),
(4, 'Hassan Khan', 'Ali Raza', 'Network Strategies', 10234, 13, 'Assignment 2', 'sassignment/Work in Merlin.txt', '2016-04-05 08:57:53', 24),
(5, 'Asad Khan', 'Abdul Mudassar', 'Computer Graphics', 10345, 13, 'Assignment 3', 'sassignment/Work in Merlin.txt', '2016-04-05 13:18:46', 20),
(6, 'Kashan Ahmad', 'Changez Khan', 'Software Engineering 2', 102345, 12, 'Assignment 7', 'sassignment/Work in Merlin.txt', '2016-04-14 07:20:24', 23),
(7, 'Behram Ali', 'Abdul Hameed', 'Database 2', 102345, 14, 'Assignment 8', 'sassignment/Work in Merlin.txt', '2016-04-14 07:20:24', 19),
(8, 'Umar Khan', 'Ali Raza', 'Artificial Intelligence', 102345, 14, 'Assignment 9', 'sassignment/Work in Merlin.txt', '2016-04-14 07:22:15', 18),
(9, 'Yasir Imran', 'Abdul Mudassar', 'Telecommunication', 102345, 13, 'Assignment 10', 'sassignment/Work in Merlin.txt', '2016-04-14 07:22:15', 17),
(11, 'Imran Kashan', 'Changez Khan', 'Assembly Language', 102344, 13, 'Assignment 10', 'sassignment/Work in Merlin.txt', '2016-04-14 12:08:35', 22),
(12, 'Imran Kashan', 'Changez Khan', 'Assembly Language', 102344, 13, 'Assignment 10', 'sassignment/Work in Merlin.txt', '2016-04-14 14:06:56', 21),
(13, 'Ahmad Khan', 'Abdul Muddasar', 'Data Communication', 0, 13, 'Assignment 7', 'sassignment/ftp.txt', '2016-04-15 11:55:06', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
