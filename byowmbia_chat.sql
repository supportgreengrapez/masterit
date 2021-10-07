-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 06, 2021 at 07:27 AM
-- Server version: 10.3.31-MariaDB-log-cll-lve
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `byowmbia_chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `pk_id` int(11) NOT NULL,
  `fname` varchar(500) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `manageapprovels` int(11) NOT NULL,
  `mentormanagement` int(11) NOT NULL,
  `earnings` int(11) NOT NULL,
  `settings` int(11) NOT NULL,
  `skill` int(11) NOT NULL,
  `student` int(11) NOT NULL,
  `adminmanagement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`pk_id`, `fname`, `lname`, `username`, `address`, `password`, `image`, `phone`, `manageapprovels`, `mentormanagement`, `earnings`, `settings`, `skill`, `student`, `adminmanagement`) VALUES
(1, 'Green', 'Grapez', 'support@greengrapez.com', 'Lahore', 'e10adc3949ba59abbe56e057f20f883e', '5d9da504ea16c2.png.png', '03244244934', 1, 1, 1, 1, 1, 1, 1),
(2, 'ibrahim', 'anwar', 'ibrahim.greengrapez@gmail.com', '92-K, 2nd floor, Phase 1, Commercial, DH', 'e10adc3949ba59abbe56e057f20f883e', '5e1464dad79031_.png', '03244244934', 0, 1, 1, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `answered_review`
--

CREATE TABLE `answered_review` (
  `pk_id` int(11) NOT NULL,
  `mentor_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `skill_name` varchar(500) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `answered` varchar(1000) NOT NULL,
  `review_type` varchar(500) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_to` int(11) NOT NULL,
  `user_from` int(11) NOT NULL,
  `message` text CHARACTER SET latin1 NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `user_to`, `user_from`, `message`, `file`, `file_name`, `status`, `created_at`, `updated_at`) VALUES
(22, 34, 35, 'hi', NULL, NULL, NULL, '2021-08-11 11:38:01', '2021-08-11 11:38:01'),
(23, 34, 35, 'how are you', NULL, NULL, NULL, '2021-08-11 11:38:55', '2021-08-11 11:38:55'),
(24, 34, 35, 'can you please help me', NULL, NULL, NULL, '2021-08-11 11:39:02', '2021-08-11 11:39:02'),
(25, 34, 35, 'hu', NULL, NULL, NULL, '2021-08-11 11:40:48', '2021-08-11 11:40:48'),
(26, 34, 35, 'hu', NULL, NULL, NULL, '2021-08-11 11:40:49', '2021-08-11 11:40:49'),
(27, 34, 35, 'uh', NULL, NULL, NULL, '2021-08-11 11:40:50', '2021-08-11 11:40:50'),
(28, 34, 35, 'yu', NULL, NULL, NULL, '2021-08-11 11:40:51', '2021-08-11 11:40:51'),
(29, 34, 35, 'fd', NULL, NULL, NULL, '2021-08-11 11:40:51', '2021-08-11 11:40:51'),
(30, 34, 35, 'fd', NULL, NULL, NULL, '2021-08-11 11:40:52', '2021-08-11 11:40:52'),
(31, 34, 35, 'hi', NULL, NULL, NULL, '2021-08-11 11:47:11', '2021-08-11 11:47:11'),
(32, 34, 35, 'bye', NULL, NULL, NULL, '2021-08-11 11:48:04', '2021-08-11 11:48:04'),
(33, 34, 35, 'helo', NULL, NULL, NULL, '2021-08-12 09:05:10', '2021-08-12 09:05:10'),
(34, 34, 35, 'what heppend', NULL, NULL, NULL, '2021-08-12 09:05:20', '2021-08-12 09:05:20'),
(35, 34, 35, 'helo', NULL, NULL, NULL, '2021-08-12 09:06:54', '2021-08-12 09:06:54'),
(36, 34, 35, 'hu', NULL, NULL, NULL, '2021-08-12 09:12:26', '2021-08-12 09:12:26'),
(37, 34, 35, 'hi', NULL, NULL, NULL, '2021-08-12 09:29:48', '2021-08-12 09:29:48'),
(38, 34, 35, 'helo', NULL, NULL, NULL, '2021-08-12 09:29:49', '2021-08-12 09:29:49'),
(39, 34, 35, 'test123', NULL, NULL, NULL, '2021-08-12 09:35:55', '2021-08-12 09:35:55'),
(40, 35, 34, 'hjkh', NULL, NULL, NULL, '2021-08-12 09:56:06', '2021-08-12 09:56:06'),
(41, 35, 34, 'helo', NULL, NULL, NULL, '2021-08-12 09:57:35', '2021-08-12 09:57:35'),
(42, 34, 35, 'hi', NULL, NULL, NULL, '2021-08-12 10:03:18', '2021-08-12 10:03:18'),
(43, 34, 35, 'helo', NULL, NULL, NULL, '2021-08-12 10:03:20', '2021-08-12 10:03:20'),
(44, 34, 35, 'kiya hall hy', NULL, NULL, NULL, '2021-08-12 10:03:24', '2021-08-12 10:03:24'),
(45, 34, 35, 'hi', NULL, NULL, NULL, '2021-08-12 10:07:59', '2021-08-12 10:07:59');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `pk_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `school` varchar(500) DEFAULT NULL,
  `start` varchar(500) DEFAULT NULL,
  `end` varchar(500) DEFAULT NULL,
  `degree` varchar(500) DEFAULT NULL,
  `area_study` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`pk_id`, `user_id`, `school`, `start`, `end`, `degree`, `area_study`) VALUES
(10, 19, 'University of sarghoda', '2020-01-30', '2020-01-29', 'BSIT', 'information technolgy'),
(11, 20, 'Virtual university of Pakistan', '2014-09-01', '2018-09-01', 'BS(CS)', 'Computer Science'),
(12, 21, 'Riphah International University', '2013-02-11', '2017-02-08', 'Bachelor of Science in Software Engineering', 'Software Engineering'),
(13, 22, 'gghs', '2020-01-08', '2020-01-24', 'master', ''),
(14, 23, 'gghs', '2020-01-24', '2020-01-25', 'ms', ''),
(15, 24, 'Iqra University', '2018-08-30', '2020-12-31', 'M.I.S', ''),
(16, 25, 'Islamic university', '2009-09-09', '2014-01-15', 'bachelors', 'computer engineering'),
(17, 26, 'Uet', '2019-06-21', '2020-03-03', 'MS Data Science', 'Data Science'),
(18, 27, 'University of sarghoda', '2020-03-18', '2020-03-15', 'BSIT', 'information technolgy'),
(19, 28, 'PUCIT', '2014-09-01', '2018-08-31', 'BS SE', 'Computer Science'),
(20, 29, 'Lums', '2012-01-14', '2016-03-14', 'Econ Pol', ''),
(21, 30, 'Beaconhouse School System', '2009-09-01', '2009-05-30', 'Business Information Systems', 'Bachelors'),
(22, 31, 'University of Punjab', '2015-09-01', '2017-07-01', 'Masters in Computer Science', 'Computer Science'),
(23, 32, 'The University of Punjab', '2020-04-09', '2020-04-08', 'MCS', 'Computer Science'),
(24, 33, 'P.University', '2017-03-01', '2019-03-01', 'MS', 'Computer Science'),
(25, 33, 'Punjab college', '2016-11-01', '2020-05-01', 'BSc', 'IT'),
(26, 34, 'University of sarghoda', '2013-03-09', '2017-11-01', 'BSIT', 'Information of Science'),
(27, 35, 'University of sarghoda', '2014-11-11', '2018-11-11', 'BSIT', 'Information of Science');

-- --------------------------------------------------------

--
-- Table structure for table `entract_transaction`
--

CREATE TABLE `entract_transaction` (
  `pk_id` int(11) NOT NULL,
  `agreement_id` varchar(255) NOT NULL,
  `freelancer_username` varchar(255) NOT NULL,
  `state` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE `mentor` (
  `pk_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `skill` varchar(5000) NOT NULL,
  `otherskill` varchar(5000) DEFAULT NULL,
  `qualification` varchar(5000) NOT NULL,
  `certificate` varchar(5000) NOT NULL,
  `time` varchar(55) NOT NULL,
  `price` varchar(55) NOT NULL,
  `experince` varchar(55) NOT NULL,
  `experties` varchar(5000) NOT NULL,
  `image` varchar(5000) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `question1` varchar(5000) DEFAULT NULL,
  `question2` varchar(5000) DEFAULT NULL,
  `question3` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentor`
--

INSERT INTO `mentor` (`pk_id`, `user_id`, `skill`, `otherskill`, `qualification`, `certificate`, `time`, `price`, `experince`, `experties`, `image`, `description`, `question1`, `question2`, `question3`) VALUES
(3, 5, 'Phython,HTML/CSS/Javascript', NULL, 'BBIT (Hons)', 'WebDevelopment,Devops,BestEmployeeOfSixMonths', '8:00PM - 12:00AM', '10', '4.5 Year', 'Technology,Computer software,Website', '', 'Hi, this is Shoaib Akhtar; Full stack python developer.\r\n\r\nHaving more than 4 year of experience in web development. Hands on experience on python with Django and Angular\r\n\r\nWorked with multiple offshore teams using agile and scrum methodology.\r\n\r\nI have done my graduation form University of the Punjab (Lahore Campus) with major in Information Technology', NULL, NULL, NULL),
(5, 8, 'Graphic Designing,PHP', NULL, 'Graduation', 'A+ (CompTIA)', '11:00-4:00', '10', '2', 'Manufacturing', '5df23cb7b1986person_2.jpg.jpg', 'testing image', NULL, NULL, NULL),
(10, 14, 'Python,Wordpress,HTML/CSS/Javascript', NULL, 'Bs in computer Science', '', '7pm to 12am', '20', 'Freelancer', 'Technology,Computer software', '5e03eeae8d882vyh.jpg.jpg', 'Hi Students. My name is hashir and am freelance web developer.My aim is to polish their skills so they can become best industry professionals.', NULL, NULL, NULL),
(11, 15, 'HTML/CSS/Javascript,NodeJS,angular,express,react,mongodb,sql,PeopleSoft', NULL, 'MS Data Engineering', '', 'After 8 PM', '10', '2.5', 'Computer software', '5dfc7652797bf13083110_525542047570777_8753202545426811591_n.jpg.jpg', 'A software engineer from Karachi having 2.5 years of experience in developing web applications. Love to learn new technologies and latest trends in the software development domain.', NULL, NULL, NULL),
(12, 16, 'Python,Java for Android,Java', NULL, 'BSCS', '', '11:00 AM - 11:00 PM', '10', '02', 'Technology,IT', '5e0d97cba4840-AsAW2iJ_400x400.jpg.jpg', '.', NULL, NULL, NULL),
(14, 20, 'Python', '', 'BS(CS)', 'A+ (CompTIA)', '7:00-11:00 pm', '10', '1.5 years', 'Industry,Computer software', '5e18a800c4401IMG_20190422_091017.jpg.jpg', 'I\'m a python django developer having 1.5 years of industry experience and currently working as a python django developer in a software company.', 'Foqy', 'Comprehensive', 'Sahiwal'),
(15, 21, 'Python,PHP,Wordpress,HTML/CSS/Javascript,LinkedIn', 'Linux,Mysql,SQL,Postgres,Magento,ERP_specialist(ERPNext)', 'BSSE', 'Gold_Medalist', '6:00 PM to 11:00 PM', '10', '3', 'Research,Computer software,Website', '5e2431c7d6518DSC_0046.JPG.JPG', 'I am working as web developer software engineer and mentor(trainer) for new candidates. Coding and teaching are my passion.', NULL, NULL, NULL),
(17, 24, 'Python,HTML/CSS/Javascript', 'React,Reddis,Node.js,Redux,Django,Mysql,Firestore', 'MIS', 'IBM Professional Certifications,Microsoft Technology Associate (MTA)', '7:00Pm - 12:00Pm', '10', '4 Years', 'Technology', '5e398eada0c2c0.jpg.jpg', 'My education includes both technical certifications and managerial degree. My experiences include operational, technical and managerial roles that have shaped me in understanding the company needs and catering to them.', NULL, NULL, NULL),
(18, 25, 'PHP,Copy Writing,Wordpress,HTML/CSS/Javascript,Email Marketing', 'laravel', 'bachelors', 'A+ (CompTIA)', '12:00 Pm _8:00 Pm', '5', '5', 'Technology', '5e4fcb697f3f183382262_779685455876611_922728879792062464_n (1).jpg.jpg', 'I am web developer from Palestine, I am excited about problem-solving in complex backend functionality for web solutions, I am goal-oriented, sociable, capable to learn, responsibility and active life position.\r\nMy main skills are:\r\n- Developing websites with Laravel.\r\n-Strong understanding of OOP principles.\r\n- Solid web development experience using OOP, PHP, AJAX, MySQL, JavaScript, HTML, CSS.\r\n\r\nI\'m ready to learn, and learn quickly... any framework that needs to be used in your task.\r\nThe combination of my programming, communication, and management skills have helped me to successfully deliver projects on time with high quality.\r\n\r\nI will be glad to work with you!', 'Haneen', NULL, NULL),
(19, 27, 'Graphic Designing,Python', '', 'Graduation', 'Adobe Certified Expert (ACE),Adobe Digital Marketing Accreditation', '11:00-4:00', '10', '5', 'Technology,Trade', '5e5f9f5e059372.png.png', 'testing', 'sdf', 'dfg', 'dsfg'),
(20, 28, 'Python', '', 'Graduation', '', '8 PM- 12 AM', '5', '3 Years', 'Technology,Information,Computer software', '5e6224cdbdcf4Salman.jpg.jpg', 'Experienced Software Engineer with a demonstrated history of working in the computer software industry. Skilled in Python, Django REST Framework, Machine Learning, and Natural Language Processing. Strong engineering professional with a Bachelor of Science (BS) focused in Computer Software Engineering from the University of the Punjab, Lahore.', 'salman', NULL, 'Sialkot'),
(21, 29, 'Wordpress', '', 'Econ Pol', 'Adobe Certified Expert (ACE)', '5pm-6pm', '0', '11', 'Manufacturing', '', 'Founder of a consultancy business. 5+ years of UI/UX experience.', NULL, NULL, NULL),
(22, 31, 'Java for Android', '', 'Masters', 'Adobe Certified Associate (ACA)', '9am-5pm', '5', '5 years', 'Technology', '5eb3a2b67d28d334876753.jpg.jpg', 'Hello, I am Faizan', 'Faizy', NULL, NULL),
(23, 34, 'Graphic Designing,PHP,Wordpress,HTML/CSS/Javascript', 'test', 'Bacholar', 'A+ (CompTIA)', '9', '10', '1', 'Technology', '6113a06cf1840DSC_0017.JPG.JPG', 'Experienced Web Developer with a demonstrated history of working in the information technology and services industry. Skilled in HTML 5,Bootstrap,HTML Emails, WordPress and jQuery. Strong engineering professional graduated from University of Sargodha.', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mentor_card`
--

CREATE TABLE `mentor_card` (
  `pk_id` int(11) NOT NULL,
  `fname` varchar(500) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `ctype` varchar(500) NOT NULL,
  `cnumb` varchar(500) NOT NULL,
  `expiry` varchar(500) NOT NULL,
  `scode` int(11) NOT NULL,
  `zcode` int(11) NOT NULL,
  `cvv` int(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `country` varchar(500) NOT NULL,
  `state` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `atype` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentor_card`
--

INSERT INTO `mentor_card` (`pk_id`, `fname`, `lname`, `ctype`, `cnumb`, `expiry`, `scode`, `zcode`, `cvv`, `address`, `country`, `state`, `city`, `phone`, `atype`, `user_id`) VALUES
(4, 'faizan', 'aslam', 'Master Card', '2345345345', '2019-12-25', 54545, 54000, 5446, 'lahore', 'Pakistan', 'Punjab', 'Arifwala', '122333335', 'Secondary', 9),
(5, 'faizan', 'aslam', 'Visa Card', '454544545', '2019-12-25', 5355, 54000, 4556465, 'lahore', 'Belarus', 'Minsk', 'Haradzyeya', '122333335', 'Primary', 9),
(6, 'Faizan', 'Aslam', 'Visa Card', '1864648848', '2019-12-18', 645454, 6645454, 66688, 'DHA', 'Bangladesh', 'Khulna', 'Jhingergacha', '698484', 'Primary', 10),
(7, 'Kiran', 'Riaz', 'Master Card', '55555555', '2019-12-31', 55555, 54000, 55555, 'Johar Town', 'Pakistan', 'Punjab', 'Hafizabad', '03001234567', 'Primary', 11),
(8, 'Kiran', 'Riaz', 'Visa Card', '11111111111', '2020-03-20', 11111, 54000, 111111, 'DHA', 'Pakistan', 'FATA', 'Miran Shah', '03001234567', 'Secondary', 11),
(9, 'faizan', 'rasool', 'Visa Card', '1231331315', '2020-05-30', 453646, 54000, 21313, 'Lhr', 'Pakistan', 'Gilgit-Baltistan', 'Gakuch', '0300123456', 'Primary', 31);

-- --------------------------------------------------------

--
-- Table structure for table `mentor_hire`
--

CREATE TABLE `mentor_hire` (
  `pk_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mentor_id` int(11) NOT NULL,
  `skill_name` varchar(500) NOT NULL,
  `status` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentor_hire`
--

INSERT INTO `mentor_hire` (`pk_id`, `user_id`, `mentor_id`, `skill_name`, `status`, `date`) VALUES
(3, 13, 11, 'Phython', 0, '2019-12-16 12:27:55'),
(6, 23, 22, 'Graphic Designing', 0, '2020-01-24 12:01:40'),
(7, 30, 21, 'Python', 0, '2020-03-20 10:28:36'),
(8, 30, 21, 'Python', 0, '2020-03-20 12:50:03'),
(9, 30, 29, 'Wordpress', 0, '2020-04-23 18:14:44'),
(10, 30, 29, 'Wordpress', 0, '2020-04-23 18:14:59'),
(11, 30, 14, 'Wordpress', 0, '2020-04-23 18:24:48'),
(12, 30, 25, 'Wordpress', 0, '2020-04-23 18:25:36'),
(13, 30, 16, 'Python', 0, '2020-04-23 18:38:32'),
(14, 30, 24, 'Python', 0, '2020-04-23 18:39:49'),
(15, 30, 20, 'Python', 0, '2020-04-23 18:41:38'),
(16, 30, 20, 'Python', 0, '2020-04-23 18:43:40'),
(17, 30, 21, 'Python', 0, '2020-04-24 12:03:19'),
(18, 30, 25, 'Wordpress', 0, '2020-04-27 09:38:25'),
(19, 33, 21, 'Python', 0, '2021-08-11 11:20:53'),
(20, 33, 30, 'Java for Android', 0, '2021-08-11 11:20:56'),
(21, 35, 34, 'Graphic Designing', 0, '2021-08-11 10:19:37');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from` bigint(20) NOT NULL,
  `to` bigint(20) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_read` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `from`, `to`, `message`, `thumbnail`, `is_read`, `created_at`, `updated_at`) VALUES
(64, 35, 34, 'helo', NULL, 1, '2021-08-25 11:43:17', '2021-10-06 15:24:31'),
(65, 35, 34, 'fahad is here', NULL, 1, '2021-08-25 11:43:23', '2021-10-06 15:24:31'),
(66, 35, 34, 'hi', NULL, 1, '2021-08-25 11:48:09', '2021-10-06 15:24:31'),
(67, 35, 34, 'helo', NULL, 1, '2021-08-25 12:02:53', '2021-10-06 15:24:31'),
(68, 35, 34, 'hi', NULL, 1, '2021-08-25 12:06:44', '2021-10-06 15:24:31'),
(69, 35, 34, 'hi', NULL, 1, '2021-08-25 14:08:25', '2021-10-06 15:24:31'),
(70, 1, 2, 'C:\\fakepath\\contant_banner.png', NULL, 0, '2021-08-25 15:38:32', '2021-08-25 15:38:32'),
(71, 1, 2, 'C:\\fakepath\\contant_banner.png', NULL, 0, '2021-08-25 15:40:17', '2021-08-25 15:40:17'),
(72, 1, 2, 'C:\\fakepath\\contant_banner.png', NULL, 0, '2021-08-25 15:41:11', '2021-08-25 15:41:11'),
(73, 1, 2, 'hi', NULL, 0, '2021-08-25 15:42:23', '2021-08-25 15:42:23'),
(74, 1, 2, 'hi', NULL, 0, '2021-08-25 15:50:38', '2021-08-25 15:50:38'),
(75, 1, 2, 'fahad', NULL, 0, '2021-08-25 15:58:23', '2021-08-25 15:58:23'),
(76, 35, 34, 'hi', NULL, 1, '2021-08-30 22:32:53', '2021-10-06 15:24:31'),
(77, 35, 34, 'fahad', NULL, 1, '2021-08-30 22:32:57', '2021-10-06 15:24:31'),
(78, 35, 34, 'hi helo', NULL, 1, '2021-08-30 22:49:17', '2021-10-06 15:24:31'),
(79, 35, 34, 'hi', NULL, 1, '2021-08-30 22:49:42', '2021-10-06 15:24:31'),
(80, 35, 34, 'helo', NULL, 1, '2021-08-30 22:54:18', '2021-10-06 15:24:31'),
(81, 35, 34, 'C:\\fakepath\\Capture.PNG', NULL, 1, '2021-08-30 22:56:32', '2021-10-06 15:24:31'),
(82, 35, 34, '1', NULL, 1, '2021-08-30 23:02:21', '2021-10-06 15:24:31'),
(83, 35, 34, NULL, '612d3169f3ec1harf.jpg.jpg', 1, '2021-08-30 23:28:42', '2021-10-06 15:24:31'),
(84, 35, 34, NULL, '612d3487a2e54DOT.png.png', 1, '2021-08-30 23:41:59', '2021-10-06 15:24:31'),
(85, 35, 34, NULL, '612d35554b705assignement.docx.docx', 1, '2021-08-30 23:45:25', '2021-10-06 15:24:31'),
(86, 35, 34, NULL, '612d35572bd2fCapture.PNG.PNG', 1, '2021-08-30 23:45:27', '2021-10-06 15:24:31'),
(88, 35, 34, NULL, '612d357009b21assignement.docx.docx', 1, '2021-08-30 23:45:52', '2021-10-06 15:24:31'),
(89, 35, 34, NULL, '612d358c9d2c1assignement.docx.docx', 1, '2021-08-30 23:46:20', '2021-10-06 15:24:31'),
(90, 35, 34, NULL, '612d358e45e99assignement.docx.docx', 1, '2021-08-30 23:46:22', '2021-10-06 15:24:31'),
(91, 35, 34, NULL, '612d358e53bd1assignement.docx.docx', 1, '2021-08-30 23:46:22', '2021-10-06 15:24:31'),
(92, 35, 34, NULL, '612d359026f38assignement.docx.docx', 1, '2021-08-30 23:46:24', '2021-10-06 15:24:31'),
(93, 35, 34, NULL, '612d35903acbdassignement.docx.docx', 1, '2021-08-30 23:46:24', '2021-10-06 15:24:31'),
(94, 35, 34, NULL, '612d35df9bd19Hands.docx.docx', 1, '2021-08-30 23:47:43', '2021-10-06 15:24:31'),
(95, 35, 34, 'hi', NULL, 1, '2021-09-01 11:52:14', '2021-10-06 15:24:31'),
(96, 35, 34, NULL, '612f33770798aWhatsApp Image 2021-08-27 at 1.56.48 PM.jpeg.jpeg', 1, '2021-09-01 12:01:59', '2021-10-06 15:24:31'),
(97, 35, 34, 'helo', NULL, 1, '2021-09-01 12:17:52', '2021-10-06 15:24:31'),
(98, 35, 34, NULL, '612f373dba5c0interview-tips-and-ideas_edited.jpg.jpg', 1, '2021-09-01 12:18:05', '2021-10-06 15:24:31'),
(99, 34, 35, 'helo this is testing', NULL, 1, '2021-09-01 16:42:03', '2021-09-01 17:16:37'),
(100, 35, 34, 'hello', NULL, 1, '2021-09-01 16:46:44', '2021-10-06 15:24:31'),
(101, 35, 34, 'whatsup', NULL, 1, '2021-09-01 16:46:51', '2021-10-06 15:24:31'),
(102, 35, 34, 'daklsdnalskdnas', NULL, 1, '2021-09-01 16:46:58', '2021-10-06 15:24:31'),
(103, 35, 34, 'youtube', NULL, 1, '2021-09-01 16:47:13', '2021-10-06 15:24:31'),
(104, 34, 32, 'bsdadasdas', NULL, 0, '2021-09-01 17:02:45', '2021-09-01 17:02:45'),
(105, 34, 35, 'hi', NULL, 1, '2021-09-01 17:14:55', '2021-09-01 17:16:37'),
(106, 35, 34, NULL, '612f7cf86c64327517197.jpg.jpg', 1, '2021-09-01 17:15:36', '2021-10-06 15:24:31'),
(107, 35, 34, 'hefdsk', NULL, 1, '2021-09-01 17:15:48', '2021-10-06 15:24:31'),
(108, 35, 34, NULL, '612f7d1d5a1c8imgtopdf_01092021111714 (1).pdf.pdf', 1, '2021-09-01 17:16:13', '2021-10-06 15:24:31'),
(109, 35, 34, 'hi', NULL, 1, '2021-09-01 17:16:36', '2021-10-06 15:24:31');

-- --------------------------------------------------------

--
-- Table structure for table `message_review`
--

CREATE TABLE `message_review` (
  `pk_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mentor_id` int(11) NOT NULL,
  `mentor_name` varchar(500) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `skill_name` varchar(500) NOT NULL,
  `review_type` varchar(500) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message_review`
--

INSERT INTO `message_review` (`pk_id`, `user_id`, `mentor_id`, `mentor_name`, `question`, `skill_name`, `review_type`, `created_at`) VALUES
(4, 30, 21, 'Muhammad Sajid', 'Tell me the exact coursepath i should follow to learn python and become good at it in 6 months? Sometimes i get stuck at different things', 'Python', 'Text Message Review', '2020-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `milestone`
--

CREATE TABLE `milestone` (
  `pk_id` int(11) NOT NULL,
  `freelancer_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `name` varchar(550) NOT NULL,
  `due_date` varchar(30) NOT NULL,
  `charge_fee` int(11) NOT NULL,
  `instruction` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `reason` text DEFAULT NULL COMMENT 'reason to cancel',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `pk_id` int(11) NOT NULL,
  `header` date DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`pk_id`, `header`, `description`, `student_id`) VALUES
(2, '2020-04-13', 'testing', 30),
(3, '2020-05-06', 'abcdefghijklmnopqmdnjksdbgjksjksjkv', 33),
(4, '2021-09-01', '- Chat with mentor \r\n- New skills \r\n- new UI/UX', 35),
(5, '2021-09-01', '- chat with mentor\r\n- amazon selling \r\n- fb marketing', 35);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `pk_id` int(11) NOT NULL,
  `mentor_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `skill_name` varchar(500) NOT NULL,
  `fee` varchar(500) NOT NULL,
  `paypal_email` varchar(500) NOT NULL,
  `status` varchar(500) NOT NULL,
  `review_type` varchar(500) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`pk_id`, `mentor_id`, `student_id`, `skill_name`, `fee`, `paypal_email`, `status`, `review_type`, `created_at`) VALUES
(4, 21, 30, 'Python', '0.5', 'ibrahim1@greengrapez.com', 'completed', 'Chat Review', '2020-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `reset_password`
--

CREATE TABLE `reset_password` (
  `pk_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `verification_code` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reset_password`
--

INSERT INTO `reset_password` (`pk_id`, `username`, `verification_code`, `created_at`) VALUES
(1, 'kiran@gmail.com', '5df0945168364', '2019-12-11 07:01:37'),
(2, 'kiran@gmail.com', '5df0951b13036', '2019-12-11 07:04:59'),
(3, 'kiran@gmail.com', '5df095ed52b38', '2019-12-11 07:08:29'),
(4, 'kiran@gmail.com', '5df098855c1d3', '2019-12-11 07:19:33'),
(5, 'kiran@gmail.com', '5df0994ca499c', '2019-12-11 07:22:52'),
(6, 'fahad.appiteck@gmail.com', '5df099e61002f', '2019-12-11 07:25:26'),
(7, 'fahad.appiteck@gmail.com', '5df09cf968220', '2019-12-11 07:38:33'),
(8, 'fahad.appiteck@gmail.com', '5df09e6496a49', '2019-12-11 07:44:36'),
(9, 'fahad.appiteck@gmail.com', '5df09fa1f113d', '2019-12-11 07:49:53'),
(10, 'faizy.644@gmail.com', '5df775d8f2bf9', '2019-12-16 12:17:28'),
(11, 'ahsan-jamal@hotmail.com', '5dfc76a570768', '2019-12-20 07:22:13'),
(12, 'hashirawan76@gmail.com', '5e03eda820ec5', '2019-12-25 23:15:52'),
(13, 'salmananjum808@gmail.com', '5e62253058b5e', '2020-03-06 10:25:52'),
(14, 'mcsf15a007@pucit.edu.pk', '5eb3a08c4585b', '2020-05-07 05:45:48');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `pk_id` int(11) NOT NULL,
  `fname` varchar(55) NOT NULL,
  `lname` varchar(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `country` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `account_type` varchar(55) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`pk_id`, `fname`, `lname`, `username`, `country`, `password`, `account_type`, `status`) VALUES
(5, 'Shoaib', 'Akhtar', 'shoaibakhtar036@gmail.com', 'Pakistan', 'd21d8b126b5ba71245e7545f784ba747', 'Mentor', 4),
(8, 'rizwan', 'ahamad', 'rizawan123@gmail.com', 'Pakistan', 'e10adc3949ba59abbe56e057f20f883e', 'Mentor', 3),
(14, 'hashir', 'inayat', 'hashirawan76@gmail.com', 'Pakistan', 'd6b0ab7f1c8ab8f514db9a6d85de160a', 'Mentor', 4),
(15, 'Ahsan', 'Jamal', 'ahsan-jamal@hotmail.com', 'Pakistan', 'a42df45f9f62c25a785183f5d6fa4f0b', 'Mentor', 4),
(16, 'Moazzam', 'Shoukat', 'moazzmashoukat1@gmail.com', 'Pakistan', 'd01415771e05dba8cb365b292564aba3', 'Mentor', 4),
(20, 'Muhammad', 'Furqan', 'raomuhammadfurqan@gmail.com', 'Pakistan', '528886bc1e1c38b636a82c951b1b4691', 'Mentor', 4),
(21, 'Muhammad', 'Sajid', 'sajid.eycon@gmail.com', 'Pakistan', '3d289c89fb5e220b117e6104d452b68a', 'Mentor', 4),
(24, 'Muhammad', 'Ozair', 'pk.ozair@gmail.com', 'Pakistan', '83ce9e9b5f56576336d7794428ebb228', 'Mentor', 4),
(25, 'haneen', 'abu shaaban', 'haneenabushaaban@gmail.com', 'Palestine', 'b4f1c0fb17074e0d376d4aaf99585d83', 'Mentor', 4),
(26, 'Umair', 'Mairy', 'umairnazirprofessionals@gmail.com', 'Pakistan', '627299247930270afa47faf2d21c553b', 'Student', 0),
(27, 'asif', 'khan', 'asif@gmail.com', 'Pakistan', 'e10adc3949ba59abbe56e057f20f883e', 'Mentor', 4),
(28, 'Salman', 'Anjum', 'salmananjum808@gmail.com', 'Pakistan', '94dc5501a934242da97b1f1fe0197ac7', 'Mentor', 4),
(29, 'Qasim', 'Salam', 'qasimsalam@gmail.com', 'Select Country', '89545691c085289ed5262ca547489421', 'Mentor', 4),
(30, 'Ibrahim', 'Anwar', 'izawn123@gmail.com', 'Pakistan', '783cee5f9cdc3bc56fc30fbf300a9df1', 'Student', 1),
(31, 'Faizan', 'Rasool', 'faizy.644@gmail.com', 'Pakistan', 'e10adc3949ba59abbe56e057f20f883e', 'Mentor', 4),
(32, 'QA', 'Student', 'qastudent@gmail.com', 'Pakistan', 'e10adc3949ba59abbe56e057f20f883e', 'Student', 1),
(33, 'faizan', 'aslam', 'mcsf15a007@pucit.edu.pk', 'Select Country', 'e10adc3949ba59abbe56e057f20f883e', 'Student', 1),
(34, 'fahad', 'maqsood', 'fahad.appiteck@gmail.com', 'Pakistan', 'e10adc3949ba59abbe56e057f20f883e', 'Mentor', 4),
(35, 'Danish', 'siddiqui', 'danishsiddiqui36@gmail.com', 'Pakistan', 'e10adc3949ba59abbe56e057f20f883e', 'Student', 0);

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `pk_id` int(11) NOT NULL,
  `sname` varchar(5000) NOT NULL,
  `image` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`pk_id`, `sname`, `image`) VALUES
(1, 'Graphic Designing', '5dea15b0e4712Web & Apps.png'),
(6, 'Python', '5dee09c572c05Web & Apps.png'),
(7, 'PHP', '5dee09ea7e082Web & Apps.png'),
(8, 'C# for Web', '5dee0a0e53726Web & Apps.png'),
(9, 'VB for Web', '5dee0a48d9774Web & Apps.png'),
(10, 'C# for Desktop', '5dee0a6b2efc5Web & Apps (1).png'),
(11, 'VB for Desktop', '5dee0aa10860cWeb & Apps (1).png'),
(12, 'Copywriting', ''),
(13, 'Lead Generation/Sales & Marketing', '5dee0b2289025Web & Apps (1).png'),
(14, 'Wordpress', '5dee0b3b3d8a7Web & Apps.png'),
(15, 'Swift for IOS', '5dee0b801f0aaWeb & Apps.png'),
(16, 'Objective-C', '5dee0b9239e74Web & Apps.png'),
(17, 'HTML/CSS/Javascript', '5dee0bc65017dWeb & Apps.png'),
(18, 'Java for Android', '5dee0be292952Web & Apps.png'),
(19, 'Java for Desktop', '5dee0c17d7eddWeb & Apps (1).png'),
(20, 'Facebook/Instagram', '5dee0f0e25097Web & Apps (1).png'),
(21, 'Snapchat', '5dee0f3cd37e5Web & Apps (1).png'),
(22, 'MS Excel', ''),
(23, 'LinkedIn', '5dee0fca83e60Web & Apps (1).png'),
(24, 'Pinterest', '5dee0fdc6e790Web & Apps (1).png'),
(25, 'Twitter', '5dee100b8236cWeb & Apps (1).png'),
(26, 'Email Marketing', '5dee102260d2bWeb & Apps (1).png'),
(27, 'Icecream', '5e9079d8789d4Graphic Designing (1).png'),
(28, 'Quran Class', '5e907a009e1b0Graphic Designing (1).png'),
(29, 'Shoe Designing', '5e907a251607fGraphic Designing.png'),
(30, 'Quran Class Nazra', '5e907a598e3a4Graphic Designing (1).png'),
(31, 'Quran Class Tajweed', '5e907a77c106cGraphic Designing (1).png'),
(32, 'Personal Development', '5e907a901e021Business & Accounting.png'),
(33, 'Fashion Designing', '5e907aaf437b5Graphic Designing (1).png'),
(34, 'Makeup Classes', '5e907ac97f2aeGraphic Designing (1).png'),
(35, 'Sales & Marketing', '5e907ae22877eBusiness & Accounting (1).png'),
(36, 'Blog / Web Content Writer', '5ea099534995523rd Jan Clutch.co meeting with Jeremy.png'),
(37, 'SEO', '5ea0997d8e02623rd Jan Clutch.co meeting with Jeremy.png'),
(38, 'Google Adwords', '5ea09994df00523rd Jan Clutch.co meeting with Jeremy.png');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `pk_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `skill` varchar(5000) NOT NULL,
  `image` varchar(5000) NOT NULL,
  `question1` varchar(5000) DEFAULT NULL,
  `question2` varchar(5000) DEFAULT NULL,
  `question3` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`pk_id`, `user_id`, `skill`, `image`, `question1`, `question2`, `question3`) VALUES
(6, 26, 'Technology,Information,Computer software', '5e5e2f1f691d7B612_20191212_194658_941.jpg.jpg', 'mairy', 'Mairy', 'Gojra'),
(7, 30, 'Medicine,Food Industry,tech', '', 'ibrahim', NULL, NULL),
(8, 32, 'Manufacturing', '', 'Faizy', 'PU', 'Abottabad'),
(9, 33, 'Finance', '5eb39b379c25dDSC_0339.JPG.JPG', 'Faizy', NULL, NULL),
(10, 35, 'Technology', '6113a4032c73dDSC_0001.JPG.JPG', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_card`
--

CREATE TABLE `student_card` (
  `pk_id` int(11) NOT NULL,
  `fname` varchar(500) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `ctype` varchar(500) NOT NULL,
  `cnumb` varchar(500) NOT NULL,
  `expiry` varchar(500) NOT NULL,
  `scode` int(11) NOT NULL,
  `zcode` int(11) NOT NULL,
  `cvv` int(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `country` varchar(500) NOT NULL,
  `state` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `atype` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_card`
--

INSERT INTO `student_card` (`pk_id`, `fname`, `lname`, `ctype`, `cnumb`, `expiry`, `scode`, `zcode`, `cvv`, `address`, `country`, `state`, `city`, `phone`, `atype`, `user_id`) VALUES
(1, 'faizan', 'aslam', 'Master Card', '12345678', '2020-05-30', 12335, 54000, 50000, 'lahore', 'Pakistan', 'Gilgit-Baltistan', 'Gakuch', '122333335', 'Primary', 33);

-- --------------------------------------------------------

--
-- Table structure for table `time_tracker`
--

CREATE TABLE `time_tracker` (
  `pk_id` int(11) NOT NULL,
  `time` varchar(500) NOT NULL,
  `student_id` int(11) NOT NULL,
  `mentor_id` int(11) NOT NULL,
  `skill` varchar(500) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_tracker`
--

INSERT INTO `time_tracker` (`pk_id`, `time`, `student_id`, `mentor_id`, `skill`, `description`, `created_at`) VALUES
(6, '00:00:06', 23, 23, 'Graphic Designing', NULL, '2020-02-28'),
(7, '00:05:26', 30, 30, 'Python', 'Python Course on Linkedin', '2020-04-11'),
(36, '00:00:07', 30, 30, 'Python', NULL, '2020-04-13'),
(37, '00:00:12', 30, 30, 'Python', NULL, '2020-04-13'),
(38, '00:00:04', 30, 30, 'Python', NULL, '2020-04-18'),
(39, '00:00:02', 30, 30, 'Python', NULL, '2020-04-21'),
(40, '00:00:13', 30, 30, 'Python', NULL, '2020-04-21'),
(41, '00:00:02', 30, 30, 'Python', NULL, '2020-04-21'),
(42, '00:00:07', 30, 30, 'Python', NULL, '2020-04-22'),
(43, '00:00:03', 30, 21, 'Python', NULL, '2020-04-24'),
(44, '00:00:00', 33, 31, 'Java for Android', 'Introduction', '2020-05-07'),
(45, '00:00:10', 33, 31, 'Java for Android', 'Description', '2020-05-07'),
(46, '00:00:07', 33, 31, 'Java for Android', 'Desc', '2020-05-07'),
(47, '00:00:00', 33, 33, 'Java for Android', NULL, '2020-05-07'),
(48, '00:00:00', 33, 33, 'Java for Android', NULL, '2020-05-07'),
(49, '00:00:01', 33, 33, 'Java for Android', 'zhfnjksdhfjksahfjkashfjkashfjkhajkfasjkfsjkfjksdjkvhsdjkfvsdjkvjksdhfjksdnhjkvsdjksdnjkgnsdjkgvnsdk', '2020-05-07'),
(50, '00:00:07', 35, 35, 'Graphic Designing', NULL, '2021-09-01'),
(51, '00:00:04', 35, 35, 'Graphic Designing', NULL, '2021-09-01');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `pk_id` int(11) NOT NULL,
  `milestone_id` int(11) NOT NULL,
  `payment_id` varchar(355) NOT NULL,
  `total` int(11) DEFAULT NULL,
  `payeer_id` varchar(355) NOT NULL,
  `payeer_email` varchar(255) DEFAULT NULL,
  `entrelance_email` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `sale_id` varchar(355) NOT NULL,
  `state` varchar(355) NOT NULL,
  `payout_status` varchar(45) NOT NULL DEFAULT 'Not Paid',
  `refund_reason` text DEFAULT NULL,
  `complete_date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'fahad maqsood', NULL, 'fahad.appiteck@gmail.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', NULL, '2021-08-13 16:46:23', '2021-08-13 16:46:23'),
(2, 'abc', NULL, 'abdullahfarooqi26@gmail.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', NULL, '2021-08-13 16:46:30', '2021-08-13 16:46:30'),
(3, 'Ali haider', NULL, 'alihaider12@gmail.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `answered_review`
--
ALTER TABLE `answered_review`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `entract_transaction`
--
ALTER TABLE `entract_transaction`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `mentor`
--
ALTER TABLE `mentor`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `mentor_card`
--
ALTER TABLE `mentor_card`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `mentor_hire`
--
ALTER TABLE `mentor_hire`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_review`
--
ALTER TABLE `message_review`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `milestone`
--
ALTER TABLE `milestone`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `reset_password`
--
ALTER TABLE `reset_password`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `student_card`
--
ALTER TABLE `student_card`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `time_tracker`
--
ALTER TABLE `time_tracker`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `answered_review`
--
ALTER TABLE `answered_review`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `entract_transaction`
--
ALTER TABLE `entract_transaction`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mentor`
--
ALTER TABLE `mentor`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `mentor_card`
--
ALTER TABLE `mentor_card`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mentor_hire`
--
ALTER TABLE `mentor_hire`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `message_review`
--
ALTER TABLE `message_review`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `milestone`
--
ALTER TABLE `milestone`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reset_password`
--
ALTER TABLE `reset_password`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student_card`
--
ALTER TABLE `student_card`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `time_tracker`
--
ALTER TABLE `time_tracker`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
