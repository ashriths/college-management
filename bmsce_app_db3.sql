-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 18, 2014 at 05:09 AM
-- Server version: 5.6.12
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bmsce_app`
--
CREATE DATABASE IF NOT EXISTS `bmsce_app` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bmsce_app`;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `subjectId` int(5) NOT NULL,
  `userId` int(5) NOT NULL,
  `classesAttended` int(2) NOT NULL,
  `totalClasses` int(2) NOT NULL,
  PRIMARY KEY (`subjectId`,`userId`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `classId` int(5) NOT NULL AUTO_INCREMENT,
  `sem` int(2) NOT NULL,
  `deptId` int(5) NOT NULL,
  `section` varchar(1) NOT NULL,
  PRIMARY KEY (`classId`),
  KEY `deptId` (`deptId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`classId`, `sem`, `deptId`, `section`) VALUES
(1, 6, 1, 'A'),
(2, 6, 1, 'B'),
(3, 6, 1, 'C'),
(4, 6, 9, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE IF NOT EXISTS `dept` (
  `deptId` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`deptId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`deptId`, `name`) VALUES
(1, 'CSE'),
(2, 'ECE'),
(3, 'EEE'),
(9, 'MECH');

-- --------------------------------------------------------

--
-- Table structure for table `examType`
--

CREATE TABLE IF NOT EXISTS `examType` (
  `examtypeId` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `maxMarks` int(3) NOT NULL,
  PRIMARY KEY (`examtypeId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `examType`
--

INSERT INTO `examType` (`examtypeId`, `name`, `maxMarks`) VALUES
(1, 'Quiz', 5),
(2, 'Test', 20),
(3, 'Test(Integrated)', 10),
(4, 'LAB1', 10),
(5, 'LAB2', 15),
(6, 'CIE', 50);

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `userId` int(5) NOT NULL,
  `subjectId` int(5) NOT NULL,
  `score` int(3) NOT NULL,
  `examtypeId` int(2) NOT NULL,
  KEY `userId` (`userId`,`subjectId`,`examtypeId`),
  KEY `subjectId` (`subjectId`),
  KEY `marks_ibfk_1` (`examtypeId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `userId` int(5) NOT NULL AUTO_INCREMENT,
  `usn` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `classId` int(5) NOT NULL,
  `proctorId` int(5) NOT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `usn` (`usn`),
  KEY `name` (`name`),
  KEY `proctorId` (`proctorId`),
  KEY `classId` (`classId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`userId`, `usn`, `name`, `password`, `email`, `classId`, `proctorId`) VALUES
(3, '1BM11CS018', 'ashish rawat', '428b6da53085b8fd7b37e9fb259c0c609bd09984', 'ashish@yahoo.com', 1, 33),
(4, '1BM11CS019', 'ashrith s', '01a954765357a56c1c3fe4c6e4181f4780948074', 'ashrith@yahoo.com', 1, 22),
(5, '1BM11CS012', 'alta soni', '475b5952739c62bfcd2ba9592a04848e68ad2f87', 'alta@yahoo.co.in', 1, 23),
(6, '1BM11CS016', 'anuj raghuram', 'fa446f551bf5f1cf7a1f58d532fcbf89a120a3d1', 'anuj@yahoo.com', 1, 12),
(7, '1BM11CS001', 'kavya reddy', '47de38fbdece0d484472919c37c107cfadb2ad00', 'kavya@yahoo.com', 1, 67),
(8, '1BM11CS002', 'nagambika', 'eea5dca9d5171e8a512df767a5eae70faf5f6e24', 'nag@yahoo.com', 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subjectId` int(5) NOT NULL AUTO_INCREMENT,
  `subjectName` varchar(50) NOT NULL,
  `subjectCode` varchar(10) NOT NULL,
  `sem` int(2) NOT NULL,
  `deptId` int(5) NOT NULL,
  PRIMARY KEY (`subjectId`),
  KEY `deptId` (`deptId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subjectId`, `subjectName`, `subjectCode`, `sem`, `deptId`) VALUES
(13, 'Web Programming', '10CI5GCWEP', 6, 1),
(14, 'Java', '10CI5GCJAV', 5, 1),
(15, 'OOMD', '10CI5GCOOM', 6, 1),
(16, 'Software Engineering', '10CI5GCSWE', 6, 1),
(17, 'Computer Networks', '10CI5GCCON', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `teacherId` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`teacherId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacherId`, `name`, `password`, `email`) VALUES
(1, 'sayed akram', '5a4bba8ce27264156fbfbdfd87d24a91200cfb6c', 'SA@bmsce.in'),
(2, 'selva kumar', '540e358b3aa75a12b2777237550599a1529af60d', 'selva@bmsce.in'),
(3, 'ljj', 'df7e3bf86f4495807cf5a6e368526de34a77eb41', 'ljj@bmsce.in'),
(4, 'seema afreen', 'ce960f25b09c7330590a6266dd1f655cca4cb359', 'seema@bmsce.in');

-- --------------------------------------------------------

--
-- Table structure for table `teacherSubject`
--

CREATE TABLE IF NOT EXISTS `teacherSubject` (
  `teacherid` int(5) NOT NULL,
  `subjectId` int(5) NOT NULL,
  `classId` int(5) NOT NULL,
  `totalClasses` int(2) NOT NULL,
  KEY `teacherid` (`teacherid`,`subjectId`,`classId`),
  KEY `subjectId` (`subjectId`),
  KEY `classId` (`classId`),
  KEY `classId_2` (`classId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacherSubject`
--

INSERT INTO `teacherSubject` (`teacherid`, `subjectId`, `classId`, `totalClasses`) VALUES
(1, 15, 1, 20),
(1, 15, 2, 35),
(4, 16, 1, 25);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`subjectId`) REFERENCES `subject` (`subjectId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `student` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`deptId`) REFERENCES `dept` (`deptId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`examtypeId`) REFERENCES `student` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `marks_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `student` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `marks_ibfk_3` FOREIGN KEY (`subjectId`) REFERENCES `subject` (`subjectId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`classId`) REFERENCES `class` (`classId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`deptId`) REFERENCES `dept` (`deptId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacherSubject`
--
ALTER TABLE `teacherSubject`
  ADD CONSTRAINT `teachersubject_ibfk_1` FOREIGN KEY (`teacherid`) REFERENCES `teacher` (`teacherId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teachersubject_ibfk_2` FOREIGN KEY (`subjectId`) REFERENCES `subject` (`subjectId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teachersubject_ibfk_3` FOREIGN KEY (`classId`) REFERENCES `class` (`classId`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
