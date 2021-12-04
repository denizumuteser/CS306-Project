-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2021 at 05:56 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `redaus`
--

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `club_id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`club_id`, `email`, `name`) VALUES
(1, 'photoclub@sabanciuniv.edu', 'Photography Club'),
(2, 'danceclub@sabanciuniv.edu', 'Dance Club'),
(3, 'artclub@sabanciuniv.edu', 'Art Club'),
(4, 'pandora@sabanciuniv.edu', 'Pandora Club'),
(5, 'codingclub@sabanciuniv.edu', 'Coding Club');

-- --------------------------------------------------------

--
-- Table structure for table `counts_in`
--

CREATE TABLE `counts_in` (
  `course_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `type` char(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counts_in`
--

INSERT INTO `counts_in` (`course_id`, `program_id`, `type`) VALUES
(1, 1, 'CORE'),
(1, 4, 'CORE'),
(2, 1, 'FREE'),
(2, 2, 'AREA'),
(3, 6, 'REQD'),
(4, 3, 'FREE'),
(5, 5, 'REQD'),
(7, 6, 'REQD'),
(8, 3, 'FREE'),
(10, 1, 'REQD'),
(11, 1, 'REQD'),
(11, 4, 'REQD');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credits` int(11) NOT NULL,
  `level` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `name`, `code`, `credits`, `level`) VALUES
(1, 'Database Systems', 'CS306', 3, 'Undergraduate'),
(2, 'Introduction to Management', 'MGMT201', 3, 'Undergraduate'),
(3, 'Visual Language I', 'VA201', 3, 'Undergraduate'),
(4, 'Spanish I', 'SPA101', 2, 'Undergraduate'),
(5, 'Introduction to Teaching', 'EDU101', 3, 'Graduate'),
(6, 'Advanced Programming', 'CS204', 3, 'Undergraduate'),
(7, 'Visual Language II', 'VA202', 3, 'Undergraduate'),
(8, 'Spanish II', 'SPA102', 3, 'Undergraduate'),
(9, 'Statistical Modelling', 'MATH306', 3, 'Undergraduate'),
(10, 'Introduction to Probability', 'MATH203', 3, 'Undergraduate'),
(11, 'Introduction to Computing', 'CS201', 3, 'Undergraduate');

-- --------------------------------------------------------

--
-- Table structure for table `enrolls_in`
--

CREATE TABLE `enrolls_in` (
  `student_id` int(8) NOT NULL,
  `program_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enrolls_in`
--

INSERT INTO `enrolls_in` (`student_id`, `program_id`) VALUES
(1, 1),
(1, 3),
(3, 1),
(5, 1),
(5, 4),
(6, 5),
(9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `name`, `room_count`) VALUES
(1, 'Faculty of Engineering and Natural Sciences', 350),
(2, 'Faculty of Arts and Social Sciences', 350),
(3, 'Sabanci Business School', 250),
(4, 'School of Languages', 100),
(5, 'Faculty of Education', 50);

-- --------------------------------------------------------

--
-- Table structure for table `has_prerequisite`
--

CREATE TABLE `has_prerequisite` (
  `course_id` int(11) NOT NULL,
  `prerequisite_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `has_prerequisite`
--

INSERT INTO `has_prerequisite` (`course_id`, `prerequisite_id`) VALUES
(1, 6),
(6, 11),
(7, 3),
(8, 4),
(9, 10);

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `instructor_id` int(8) NOT NULL,
  `faculty_office_location` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `since` date NOT NULL,
  `faculty_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`instructor_id`, `faculty_office_location`, `title`, `since`, `faculty_id`) VALUES
(2, '2081', 'Prof.', '2001-01-01', 1),
(4, '1091', 'Prof.', '2002-01-01', 1),
(7, '1041', NULL, '2019-01-01', 4),
(8, 'G074', 'Prof.', '2005-01-01', 3),
(10, '2012', 'Asst. Prof', '2017-01-01', 2);

-- --------------------------------------------------------

--
-- Table structure for table `manages`
--

CREATE TABLE `manages` (
  `student_id` int(8) NOT NULL,
  `club_id` int(11) NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manages`
--

INSERT INTO `manages` (`student_id`, `club_id`, `role`) VALUES
(1, 1, 'Board Member'),
(5, 4, 'President'),
(5, 5, 'Board Member'),
(9, 2, 'President'),
(9, 3, 'Board Member');

-- --------------------------------------------------------

--
-- Table structure for table `member_of`
--

CREATE TABLE `member_of` (
  `student_id` int(8) NOT NULL,
  `club_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member_of`
--

INSERT INTO `member_of` (`student_id`, `club_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(3, 4),
(5, 4),
(5, 5),
(6, 1),
(6, 2),
(9, 2),
(9, 3);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `instructor_id` int(8) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `term` char(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`instructor_id`, `faculty_id`, `course_id`, `term`) VALUES
(2, 1, 1, '202101'),
(4, 1, 11, '201901'),
(7, 4, 4, '202101'),
(8, 3, 2, '202002'),
(10, 2, 3, '202101'),
(10, 2, 7, '202102');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` int(8) NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` tinyint(4) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `address` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `username`, `password`, `name`, `surname`, `gender`, `birth_date`, `address`, `email`, `phone_number`) VALUES
(1, 'ydogukan', '123456', 'Doğukan', 'Yıldırım', 1, '2001-01-07', 'Sabanci University', 'ydogukan@sabanciuniv.edu', '+905447882028'),
(2, 'ysaygin', '306eniyiders', 'Yücel', 'Saygın', 1, NULL, 'Sabanci University', 'ysaygin@sabanciuniv.edu', NULL),
(3, 'alikoray', 'wotprosu', 'Ali Koray', 'Cankı', 1, '2000-05-25', 'Sabanci University', 'alikoray@sabanciuniv.edu', NULL),
(4, 'levi', 'networknetwork408network', 'Albert', 'Levi', 1, NULL, 'Sabanci University', 'levi@sabanciuniv.edu', NULL),
(5, 'gdeniz', '42424242', 'Miraç Deniz', 'Gözen', 1, '1999-11-30', 'Sabanci University', 'gdeniz@sabanciuniv.edu', '+905232732332'),
(6, 'berfinkiraz', '914121', 'Berfin', 'Kiraz', 2, '2000-07-07', 'United States', 'berfinkiraz@sabanciuniv.edu', '+905211237777'),
(7, 'defnee', 'defnemükemmelhoca', 'Defne', 'Eser', 2, '1983-12-03', 'Istanbul', 'defnee@sabanciuniv.edu', '+905291828319'),
(8, 'ceydasahin', '123su321', 'Ceyda', 'Şahinoğlu', 2, '1975-03-05', 'Antalya', 'ceydasahin@sabanciuniv.edu', '+905552225522'),
(9, 'melisk', 'reaperleviathan', 'Melis', 'Kılınç', 2, '2001-04-23', 'İzmir', 'melisk@sabanciuniv.edu', '+905324442323'),
(10, 'cerenozer', 'rihannacandır', 'Ceren', 'Özer', 2, '1981-11-03', 'Ankara', 'cerenozer@sabanciuniv.edu', '+905853239931');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `program_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`program_id`, `name`) VALUES
(1, 'Computer Science and Engineering'),
(2, 'Economics'),
(3, 'Psychology'),
(4, 'Industrial Engineering'),
(5, 'Language Teaching'),
(6, 'Visual Arts and Visual Communication Design');

-- --------------------------------------------------------

--
-- Table structure for table `scheduled`
--

CREATE TABLE `scheduled` (
  `timeslot_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scheduled`
--

INSERT INTO `scheduled` (`timeslot_id`, `section_id`, `course_id`) VALUES
(1, 1, 1),
(2, 1, 1),
(2, 2, 2),
(3, 3, 2),
(4, 4, 3),
(5, 5, 4),
(6, 8, 6);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `location` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `course_id`, `location`, `code`, `capacity`) VALUES
(1, 1, 'FMAN 1099', 'A', 200),
(2, 2, 'FASS G022', 'A', 50),
(3, 2, 'FMAN L018', 'B', 50),
(4, 3, 'FASS 1012', 'A', 20),
(5, 4, 'ONLINE', 'A', 10),
(6, 5, 'FASS G012', 'A', 20),
(7, 7, 'FASS 2024', 'A', 20),
(8, 6, 'FENS G077', 'A', 300),
(9, 8, 'ONLINE', 'A', 10),
(10, 9, 'FENS G035', 'A', 50),
(11, 9, 'FENS G032', 'B', 50),
(12, 10, 'FENS G077', 'A', 250),
(13, 11, 'FENS G077', 'A', 250),
(14, 11, 'FENS G077', 'B', 250),
(15, 11, 'FENS G077', 'C', 100);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(8) NOT NULL,
  `CGPA` decimal(3,2) NOT NULL,
  `enroll_year` year(4) NOT NULL,
  `scholarship` int(3) NOT NULL,
  `level` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `advisor_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `CGPA`, `enroll_year`, `scholarship`, `level`, `advisor_id`) VALUES
(1, '3.97', 2019, 50, 'Undergraduate', 4),
(3, '3.31', 2018, 100, 'Undergraduate', 2),
(5, '3.89', 2019, 75, 'Undergraduate', 7),
(6, '2.70', 2020, 25, 'Undergraduate', 10),
(9, '4.00', 2021, 100, 'Graduate', 8);

-- --------------------------------------------------------

--
-- Table structure for table `takes`
--

CREATE TABLE `takes` (
  `student_id` int(8) NOT NULL,
  `section_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `letter_grade` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term` char(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `takes`
--

INSERT INTO `takes` (`student_id`, `section_id`, `course_id`, `letter_grade`, `term`) VALUES
(1, 1, 1, 'IP', '202101'),
(1, 10, 9, 'C', '202002'),
(1, 13, 11, 'A', '202001'),
(3, 1, 1, 'IP', '202101'),
(3, 4, 3, 'IP', '202101'),
(3, 10, 9, 'B+', '202002'),
(5, 1, 1, 'IP', '202101'),
(5, 10, 9, 'W', '202002'),
(5, 13, 11, 'A', '202001'),
(6, 2, 2, 'IP', '202101'),
(6, 4, 3, 'IP', '202101'),
(6, 5, 4, 'D', '202001'),
(9, 3, 2, 'A-', '202002');

-- --------------------------------------------------------

--
-- Table structure for table `timeslot`
--

CREATE TABLE `timeslot` (
  `timeslot_id` int(11) NOT NULL,
  `day` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `begin_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `timeslot`
--

INSERT INTO `timeslot` (`timeslot_id`, `day`, `begin_time`, `end_time`) VALUES
(1, 'M', '09:40:00', '10:30:00'),
(2, 'W', '12:40:00', '14:30:00'),
(3, 'M', '10:40:00', '12:30:00'),
(4, 'T', '09:40:00', '11:30:00'),
(5, 'F', '12:40:00', '15:30:00'),
(6, 'R', '14:40:00', '16:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`club_id`);

--
-- Indexes for table `counts_in`
--
ALTER TABLE `counts_in`
  ADD PRIMARY KEY (`course_id`,`program_id`),
  ADD KEY `program_id` (`program_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `enrolls_in`
--
ALTER TABLE `enrolls_in`
  ADD PRIMARY KEY (`student_id`,`program_id`),
  ADD KEY `program_id` (`program_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `has_prerequisite`
--
ALTER TABLE `has_prerequisite`
  ADD PRIMARY KEY (`course_id`,`prerequisite_id`),
  ADD KEY `prerequisite_id` (`prerequisite_id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`instructor_id`),
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `manages`
--
ALTER TABLE `manages`
  ADD PRIMARY KEY (`student_id`,`club_id`),
  ADD KEY `club_id` (`club_id`);

--
-- Indexes for table `member_of`
--
ALTER TABLE `member_of`
  ADD PRIMARY KEY (`student_id`,`club_id`),
  ADD KEY `club_id` (`club_id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`instructor_id`,`faculty_id`,`course_id`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `scheduled`
--
ALTER TABLE `scheduled`
  ADD PRIMARY KEY (`timeslot_id`,`section_id`,`course_id`),
  ADD KEY `section_id` (`section_id`,`course_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`,`course_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `advisor_id` (`advisor_id`);

--
-- Indexes for table `takes`
--
ALTER TABLE `takes`
  ADD PRIMARY KEY (`student_id`,`section_id`,`course_id`),
  ADD KEY `section_id` (`section_id`,`course_id`);

--
-- Indexes for table `timeslot`
--
ALTER TABLE `timeslot`
  ADD PRIMARY KEY (`timeslot_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `counts_in`
--
ALTER TABLE `counts_in`
  ADD CONSTRAINT `counts_in_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`),
  ADD CONSTRAINT `counts_in_ibfk_2` FOREIGN KEY (`program_id`) REFERENCES `program` (`program_id`);

--
-- Constraints for table `enrolls_in`
--
ALTER TABLE `enrolls_in`
  ADD CONSTRAINT `enrolls_in_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `enrolls_in_ibfk_2` FOREIGN KEY (`program_id`) REFERENCES `program` (`program_id`);

--
-- Constraints for table `has_prerequisite`
--
ALTER TABLE `has_prerequisite`
  ADD CONSTRAINT `has_prerequisite_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `has_prerequisite_ibfk_2` FOREIGN KEY (`prerequisite_id`) REFERENCES `course` (`course_id`);

--
-- Constraints for table `instructor`
--
ALTER TABLE `instructor`
  ADD CONSTRAINT `instructor_ibfk_1` FOREIGN KEY (`instructor_id`) REFERENCES `person` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `instructor_ibfk_2` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`);

--
-- Constraints for table `manages`
--
ALTER TABLE `manages`
  ADD CONSTRAINT `manages_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `manages_ibfk_2` FOREIGN KEY (`club_id`) REFERENCES `club` (`club_id`);

--
-- Constraints for table `member_of`
--
ALTER TABLE `member_of`
  ADD CONSTRAINT `member_of_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `member_of_ibfk_2` FOREIGN KEY (`club_id`) REFERENCES `club` (`club_id`);

--
-- Constraints for table `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `offers_ibfk_1` FOREIGN KEY (`instructor_id`) REFERENCES `instructor` (`instructor_id`),
  ADD CONSTRAINT `offers_ibfk_2` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`),
  ADD CONSTRAINT `offers_ibfk_3` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`);

--
-- Constraints for table `scheduled`
--
ALTER TABLE `scheduled`
  ADD CONSTRAINT `scheduled_ibfk_1` FOREIGN KEY (`section_id`,`course_id`) REFERENCES `section` (`section_id`, `course_id`);

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `person` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`advisor_id`) REFERENCES `instructor` (`instructor_id`);

--
-- Constraints for table `takes`
--
ALTER TABLE `takes`
  ADD CONSTRAINT `takes_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `takes_ibfk_2` FOREIGN KEY (`section_id`,`course_id`) REFERENCES `section` (`section_id`, `course_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
