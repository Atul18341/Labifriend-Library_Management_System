-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql105.epizy.com
-- Generation Time: Jan 18, 2021 at 10:50 PM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_23732324_library_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `books_records`
--

CREATE TABLE `books_records` (
  `SUBJECT` varchar(50) NOT NULL,
  `BOOK_NAME` varchar(200) NOT NULL,
  `AUTHOR_NAME` varchar(200) NOT NULL,
  `EDITION` int(3) NOT NULL,
  `NO_OF_VOLUME_AVAILABLE` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `book_issue_submit_records`
--

CREATE TABLE `book_issue_submit_records` (
  `STUDENT_NAME` varchar(30) NOT NULL,
  `ROLL_NUMBER` int(11) NOT NULL,
  `BOOK_NUMBER` int(11) NOT NULL,
  `BOOK_NAME` varchar(70) NOT NULL,
  `AUTHOR_NAME` varchar(30) NOT NULL,
  `ISSUE_DATE` datetime(6) NOT NULL,
  `SUBMISSION_DATE` datetime(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `USERNAME` varchar(30) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `Students_Feedback_Records`
--

CREATE TABLE `Students_Feedback_Records` (
  `NAME` text NOT NULL,
  `ROLL_NUMBER` int(11) NOT NULL,
  `EMAIL_ADDRESS` varchar(100) NOT NULL,
  `SEMESTER` int(11) NOT NULL,
  `FEEDBACK` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students_profile`
--

CREATE TABLE `students_profile` (
  `STUDENT_NAME` varchar(30) NOT NULL,
  `FATHER_NAME` varchar(50) NOT NULL,
  `BRANCH` varchar(50) NOT NULL,
  `ADMISSION_YEAR` int(20) NOT NULL,
  `ROLL_NUMBER` int(5) NOT NULL,
  `REGISTERATION_NUMBER` bigint(20) NOT NULL,
  `CONTACT_NUMBER` bigint(10) NOT NULL,
  `PROFILE_PIC_ADDRESS` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `student_login_details`
--

CREATE TABLE `student_login_details` (
  `FIRST_NAME` text NOT NULL,
  `LAST_NAME` text NOT NULL,
  `ROLL_NO` int(6) NOT NULL,
  `USERNAME` varchar(30) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `student_login_records`
--

CREATE TABLE `student_login_records` (
  `USERNAME` varchar(30) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL,
  `LOGIN_RECORDS` datetime(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=ascii;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
