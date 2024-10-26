-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2024 at 05:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `myinformation`
--

CREATE TABLE `myinformation` (
  `fullname` varchar(30) NOT NULL,
  `objective` varchar(200) DEFAULT NULL,
  `collge` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `linkedin` varchar(50) DEFAULT NULL,
  `sd1` varchar(100) DEFAULT NULL,
  `sd2` varchar(100) DEFAULT NULL,
  `sd3` varchar(100) DEFAULT NULL,
  `i1` varchar(100) DEFAULT NULL,
  `i2` varchar(100) DEFAULT NULL,
  `i3` varchar(100) DEFAULT NULL,
  `skill1` varchar(100) DEFAULT NULL,
  `skill2` varchar(100) DEFAULT NULL,
  `skill3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `myinformation`
--

INSERT INTO `myinformation` (`fullname`, `objective`, `collge`, `email`, `phone`, `linkedin`, `sd1`, `sd2`, `sd3`, `i1`, `i2`, `i3`, `skill1`, `skill2`, `skill3`) VALUES
('Mariahgil Mae Guillen', 'mhagill.guillenroja@gmail.com', '0935-234-8566', 'linkedin.com/in/johndoe', 'Motivated professional seeking a challenging posit', 'Baliwag Polytechnic College, Baliwag,', 'Example Company, City, State | June 2020 - Present', 'Developed web applications using HTML, CSS, and JavaScript.', 'Collaborated with cross-functional teams to deliver projects on time.', 'Another Company, City, State | Summer 2019', 'Assisted in software testing and documentation.', 'Participated in code reviews and team meetings.', 'Python, Java, JavaScript', 'HTML, CSS, React', 'Git, Docker, Jenkins');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
