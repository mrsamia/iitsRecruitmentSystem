-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2019 at 12:26 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `applyform`
--

CREATE TABLE `applyform` (
  `ID` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `position` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `dept-id` int(11) NOT NULL,
  `Program` varchar(500) NOT NULL,
  `wing` varchar(1200) NOT NULL,
  `CGPA` float NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Contact` int(11) NOT NULL,
  `E-mail` varchar(500) NOT NULL,
  `Facebook` varchar(500) NOT NULL,
  `association` varchar(500) NOT NULL,
  `Experience` varchar(500) NOT NULL,
  `choosing-position` varchar(500) NOT NULL,
  `serve` varchar(500) NOT NULL,
  `selected` tinyint(1) DEFAULT NULL,
  `imgdir` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applyform`
--

INSERT INTO `applyform` (`ID`, `password`, `position`, `name`, `dept-id`, `Program`, `wing`, `CGPA`, `Address`, `Contact`, `E-mail`, `Facebook`, `association`, `Experience`, `choosing-position`, `serve`, `selected`, `imgdir`) VALUES
(60, 'GLRsm19RL2', 'Asst. Manager', 'Mukta Rahman', 15888888, 'BCSE', 'Academic', 0, 'v84actFY9X', 0, 'moeqDEHBi3', 'fwb5qEDQUC', 'boFE2ZsnKU', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 0, ''),
(62, 'omkrfvjaUQ', 'Manager', 'Mukta Rahman', 15888111, 'BCSE', 'Academic', 0, 'D371JxKpR3', 0, 'hFKVSiorup', 'TkqD6tQXcx', '2mCU5XvZIE', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 1, ''),
(64, 'Dhty9Gzb', 'Manager', 'Moshfiqur Rahman Rony', 15203012, 'BCSE', 'Event', 0, 'hnQ3EsT2Af', 0, 'v7sZqTi9dS', 'qoBkAlMkyD', '3VBlcwqAn3', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 1, ''),
(67, 'Dhty9Gzb', 'Deputy Manager', 'Moshfiqur Rahman Rony', 152030133, 'BCSE', 'Programming', 0, '7t1Rca5I9E', 0, 'Rf3SQaWBm2', 'VldYdVS3lC', 'tunYtACxk3', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 1, ''),
(69, 'Dhty9Gzb', 'Deputy Manager', 'Moshfiqur Rahman Rony', 1520301323, 'BCSE', 'Academic', 0, 'Ogv0pWLvLp', 0, 'mdPSmAN6JQ', 'pr2VOkwSw8', 'zxMtUOMVDx', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 1, ''),
(70, '123', 'Manager', 'Samia Rahman', 15203060, 'BCSE', 'Sports', 3.48, 'DCZSS1BRJV', 1706025403, 'samiamim@gmail.com', 'Samia Rahman Mim', 'ztqZX4hsHK', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 1, ''),
(71, 'hMkCZFr65G', 'Asst. Manager', 'Naima Rahman', 15203061, 'BCSE', 'Sports', 3.84, 'Dhaka', 1706025402, 'naima@gmail.com', 'Naima Rahman', 'VtkKK94rC', 'Essay on Past experiences shape identity. Many believe that whatever situations have happened in the past should be left in the past', 'Essay on Past experiences shape identity. Many believe that whatever situations have happened in the past should be left in the past.', 'Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 1, ''),
(72, 'uDKfLHNGxp', 'Deputy  Manager', 'Manha Rahman', 15203062, 'BCSE', 'Sports', 3.84, 'Dhaka', 1706025404, 'manha@gmail.com', 'Manha Rahman ', 'VtkKK94rC', 'Essay on Past experiences shape identity. Many believe that whatever situations have happened in the past should be left in the past', 'Essay on Past experiences shape identity. Many believe that whatever situations have happened in the past should be left in the past.', 'Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 1, ''),
(73, '1233', 'Assistant', 'Sabera Papri', 15203064, 'BCSE', 'Sports', 3.48, 'Dhaka', 1706025407, 'Sabera @gmail.com', 'Sabera Papri', 'bS8MflMTit', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 1, ''),
(75, '1233', 'Assistant', 'Sabera Papri', 15203065, 'BCSE', 'Cultural', 3.48, 'Dhaka', 1706025407, 'Sabera @gmail.com', 'Sabera Papri', 'Z1zylAFkNn', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 1, ''),
(77, '1233', 'Assistant', 'Akhi Moni', 15203066, 'BCSE', 'Academic', 3.84, 'Dhaka', 1706025408, 'akhi@gmail.com', 'Akhi Moni', 'zcgiC7Qh0s', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 1, ''),
(78, '12334', 'Manager', 'Akhi Moni', 15203067, 'BCSE', 'Cultural', 3.84, 'Dhaka', 1706025409, 'akhi@gmail.com', 'Akhi Moni', '2Np7JujX6A', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 1, ''),
(79, '1234', 'Asst. Manager', 'Atia akhter', 15203068, 'BCSE', 'Cultural', 3.84, 'Dhaka', 1706025401, 'atia@gmail.com', 'Atia', '9QBggZjyG7', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 1, ''),
(80, '1235', 'Assistant', 'Atia Rahman', 15203069, 'BCSE', 'Cultural', 3.84, 'Dhaka', 1706025400, 'atia@gmail.com', 'Atia', 'CgBYZOlqu5', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 1, ''),
(81, 'a1HppSN7iI', 'Manager', 'Tazim Rahman', 15203017, 'BCSE', 'Finance', 3.88, 'Dhaka', 1706025307, 'tazim @gmail.com', 'Tazim', 'VtkKK94rC', 'Essay on Past experiences shape identity. Many believe that whatever situations have happened in the past should be left in the past', 'Essay on Past experiences shape identity. Many believe that whatever situations have happened in the past should be left in the past.', 'Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 1, ''),
(82, 'Dhty9Gz', 'Assistant', 'Jebin Rahman', 15203020, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025507, 'jebin @gmail.com', 'Jebin', 'VtkKK94rC', 'Essay on Past experiences shape identity. Many believe that whatever situations have happened in the past should be left in the past', 'Essay on Past experiences shape identity. Many believe that whatever situations have happened in the past should be left in the past.', 'Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 1, ''),
(83, '1235', 'Manager', 'Moshfiq', 15203070, 'BCSE', 'Relational', 3.84, 'Dhaka', 1706025401, 'moshfiq@gmail.com', 'moshfiq', 'XsP16kXJfy', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 1, ''),
(84, '1233', 'Asst. Manager', 'Merin Rahman', 15203071, 'BCSE', 'Relational', 3.84, 'Dhaka', 1706025503, 'Merin @gmail.com', 'Merin ', '4eTCrZzDcT', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 1, ''),
(85, '12333', 'Deputy Manager', 'Roayda Rahman', 15203072, 'BCSE', 'Relational', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', 'GZWB9pODaE', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 1, ''),
(86, '12333', 'Assistant', 'Roayd Rahman', 15203073, 'BCSE', 'Relational', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', 'NHfTL9mIQU', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, ''),
(87, '12333', 'Assistant', 'Roayd Rahman', 15203564, 'BCSE', 'Relational', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', 'gVtNrbvasl', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/1.png'),
(88, '12333', 'Manager', 'Samia Rahman', 15203566, 'BCSE', 'Finance', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', 'yrgCs4uvnD', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 1, 'uploads/IMG_20181129_103835.jpg'),
(89, '12333', 'Manager', 'Samia Rahman', 15203567, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', '1kwNACU7TV', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/IMG_20181129_104911.jpg'),
(90, '12333', 'Manager', 'Samia Rahman', 15203582, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', '8ANUGl8q9R', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/IMG_20181126_170014.jpg'),
(91, '12333', 'Manager', 'Samia Rahman', 1520358254, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', 'PAkJmtNBdz', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/IMG_20181127_152556.jpg'),
(92, '12333', 'Manager', 'Samia Rahman', 1520, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', 'l9EeFGbKc4', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/IMG_20181127_120132.jpg'),
(93, '12333', 'Manager', 'Samia Rahman', 15205, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', '65x2Oa27g1', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/IMG_20181126_165948.jpg'),
(94, '12333', 'Manager', 'Samia Rahman', 152053, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', 'NblqG8cJIN', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/IMG_20181127_152510.jpg'),
(95, '12333', 'Manager', 'Samia Rahman', 1520537, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', '0YjifCZ0gj', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/IMG_20181127_120132.jpg'),
(96, '12333', 'Manager', 'Samia Rahman', 1, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', '56oJ1KZghB', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/IMG_20181127_120132.jpg'),
(97, '12333', 'Manager', 'Samia Rahman', 12, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', 'qEJioLzHJJ', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/IMG_20181127_120132.jpg'),
(98, '12333', 'Manager', 'Samia Rahman', 121, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', 's3e4mo2wfs', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/IMG_20181127_120132.jpg'),
(99, '12333', 'Manager', 'Samia Rahman', 122, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', 'xPgW9nD7pB', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/IMG_20181126_165950.jpg'),
(101, '12333', 'Manager', 'Samia Rahman', 123, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', 'zXL5pIwfT5', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/IMG_20181127_120132.jpg'),
(102, '12333', 'Manager', 'Samia Rahman', 124, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', 'hLn4W8p55S', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/IMG_20181127_120132.jpg'),
(103, '12333', 'Manager', 'Samia Rahman', 125, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', 'GUD20XInuB', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/IMG_20181126_165948.jpg'),
(106, '12333', 'Manager', 'Samia Rahman', 126, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', 'du52kpeVX7', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/IMG_20181126_165950.jpg'),
(108, '12333', 'Manager', 'Samia Rahman', 127, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', 'TFQGXatmQB', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/IMG_20181126_165555.jpg'),
(110, '12333', 'Manager', 'Samia Rahman', 128, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', '0vny5dLVMv', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/IMG_20181126_165557.jpg'),
(112, '12333', 'Manager', 'Samia Rahman', 129, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', 'K2lyI0pZmd', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/1.jpg'),
(113, '12333', 'Manager', 'Samia Rahman', 130, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', 'Mumuphw4Ke', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/1.jpg'),
(114, '12333', 'Manager', 'Samia Rahman', 131, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', 'hJ3AkGgbxE', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/IMG_20181127_120132.jpg'),
(115, '12333', 'Manager', 'Samia Rahman', 132, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', 'D59npbJ5J2', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/IMG_20181127_120132.jpg'),
(116, '12333', 'Manager', 'Samia Rahman', 133, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', 'N71v7cjQCA', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/IMG_20181127_120132.jpg'),
(117, '12333', 'Manager', 'Samia Rahman', 136, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', 'gOWwDyfnzb', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/IMG_20181127_120132.jpg'),
(118, '12333', 'Manager', 'Samia Rahman', 138, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', 'oB3BE16Jc3', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/IMG_20181127_120132.jpg'),
(119, '12333', 'Manager', 'Samia Rahman', 140, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', '0C9Pj1Md0P', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/IMG_20181127_120132.jpg'),
(120, '12333', 'Manager', 'Samia Rahman', 141, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', 'jG7WI2KVDp', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/IMG_20181127_120132.jpg'),
(121, '12333', 'Manager', 'Samia Rahman', 146, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', 'aBRNyqoOER', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/IMG_20181127_120132.jpg'),
(122, '12333', 'Manager', 'Samia Rahman', 147, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', '3lIOngAHeL', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/IMG_20181127_120132.jpg'),
(123, '12333', 'Manager', 'Samia Rahman', 148, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', 'KSk4neQjdY', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/IMG_20181127_120132.jpg'),
(124, '12333', 'Manager', 'Samia Rahman', 149, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', 'Y9Ap8WLYVq', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/IMG_20181127_120132.jpg'),
(125, '12333', 'Manager', 'Samia Rahman', 1497, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', 'tG5EUFY7HQ', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/IMG_20181127_120132.jpg'),
(126, '12333', 'Manager', 'Samia Rahman', 1493, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', 'an5cPTqIGs', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/IMG_20181126_165555.jpg'),
(127, '12333', 'Manager', 'Samia Rahman', 1496, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', 'ZZ0ORHI0PN', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/IMG_20181126_170217.jpg'),
(128, '12333', 'Manager', 'Samia Rahman', 1112, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'RoaydaRahman@gmail.com', 'Roayda Rahman', 'aScxyfTfcr', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/1.jpg'),
(129, '12333', 'Manager', 'Samia Rahman', 15204060, 'BCSE', 'Publication', 3.84, 'Dhaka', 1706025504, 'samiaRahman@gmail.com', 'Roayda Rahman', 'IvC4qxBB5P', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/Passport.jpg'),
(130, '12333', 'President', 'Samia Rahman', 19103023, 'BCSE', 'Relational', 3.84, 'Dhaka', 1706025504, 'samiaRahman@gmail.com', 'Roayda Rahman', '1sn6q3P1Ab', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/erd diagram (1).jpg'),
(131, '12333', 'President', 'Samia Rahman', 19103028, 'BCSE', 'Relational', 3.84, 'Dhaka', 1706025504, 'samiaRahman@gmail.com', 'Roayda Rahman', 'p3qaalNSpp', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/erd diagram (1).jpg'),
(132, '12333', 'President', 'Samia Rahman', 16203026, 'BCSE', 'Relational', 3.84, 'Dhaka', 1706025504, 'samiaRahman@gmail.com', 'Roayda Rahman', 'JsXW0ppTw0', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/erd diagram (1).jpg'),
(133, '12333', 'President', 'Samia Rahman', 16103029, 'BCSE', 'Relational', 3.84, 'Dhaka', 1706025504, 'samiaRahman@gmail.com', 'Roayda Rahman', 'fl2MQ9SgMg', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/erd diagram (1).jpg'),
(134, '12333', 'President', 'Samia Rahman', 16103095, 'BCSE', 'Relational', 3.84, 'Dhaka', 1706025504, 'samiaRahman@gmail.com', 'Roayda Rahman', 'YrYG2pbcwu', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/organizational structure.jpg'),
(135, '12333', 'President', 'Samia Rahman', 16103094, 'BCSE', 'Relational', 3.84, 'Dhaka', 1706025504, 'samiaRahman@gmail.com', 'Roayda Rahman', 'WQqml5SVfN', 'DGVAFEXieRWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'ABJQI0OzbwWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', 'dHHVJ7bh1XWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ..', NULL, 'uploads/erd diagram (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `ID` int(11) NOT NULL,
  `notice_date` date NOT NULL,
  `title` varchar(1200) NOT NULL,
  `notice` varchar(1000) NOT NULL,
  `public` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`ID`, `notice_date`, `title`, `notice`, `public`) VALUES
(21, '2019-03-01', 'LL7ixylJQc', 'n computer programming, a loop is a sequence of instruction s that is continually repeated until a certain condition is reached. Typically, a certain process is done, such as getting an item of data and changing it, and then some condition is checked such as whether a counter has reached a prescribed number.', 0),
(22, '2019-03-02', 'Ahf jfhfj ghfughf uyeun cjdndnc heejdkennfej', 'Qdkcfdjfkgjolrkvlfkvgl;fk,gvblfkgorfg\r\n\r\nggrgrlgkrjgrihgrijrkfmrfmrkjfk', 0),
(23, '2019-03-11', 'UEF9JWnRGn', 'n computer programming, a loop is a sequence of instruction s that is continually repeated until a certain condition is reached. Typically, a certain process is done, such as getting an item of data and changing it, and then some condition is checked such as whether a counter has reached a prescribed number.', 0),
(24, '2019-03-19', 'nlknj', 'n kn m,', 0),
(25, '2019-04-05', 'lkbvc', '\r\n10.	Admin can make the list of the final selected candidates.\r\n11.	Admin can upload all the important notice.\r\nâ€¢	Admin must login the system.\r\nâ€¢	After login admin will get a notice option.\r\nâ€¢	Then click on notice.\r\nâ€¢	After clicking on notice, admin ', 0),
(26, '2019-04-03', 'yJLMORVLFq', 'n computer programming, a loop is a sequence of instruction s that is continually repeated until a certain condition is reached. Typically, a certain process is done, such as getting an item of data and changing it, and then some condition is checked such as whether a counter has reached a prescribed number.', 0),
(27, '2019-04-10', 'yJLMORVLFq', 'n computer programming, a loop is a sequence of instruction s that is continually repeated until a certain condition is reached. Typically, a certain process is done, such as getting an item of data and changing it, and then some condition is checked such as whether a counter has reached a prescribed number.', 0),
(28, '2019-04-10', 'yJLMORVLFq', 'n computer programming, a loop is a sequence of instruction s that is continually repeated until a certain condition is reached. Typically, a certain process is done, such as getting an item of data and changing it, and then some condition is checked such as whether a counter has reached a prescribed number.', 1),
(29, '2019-04-17', 'i', 'i', 0);

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `details` varchar(200) NOT NULL,
  `feed` varchar(1200) NOT NULL,
  `feed_status` tinyint(1) NOT NULL,
  `date` date NOT NULL,
  `stuid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id`, `name`, `details`, `feed`, `feed_status`, `date`, `stuid`) VALUES
(8, 'dsfs', 'ds', '', 0, '2019-03-14', 15203013),
(9, 'dsfs', 'aed', '', 0, '2019-03-20', 15203013),
(10, 'dsfs', 'sd', '', 0, '2019-03-19', 15203013),
(11, 'dsfs', 'sd', '', 0, '2019-03-19', 15203013),
(12, 'dsfs', 'sdfd', '', 0, '2019-03-20', 15203013),
(13, 'sdfsdf', 'sdfsdfsdfsd', '', 0, '2019-03-21', 152030133),
(14, 'Arrange a meeting for more work to do asjdfbjasgdjhfbak', 'xjkfngushvkjbzxclmbvioarfgubsdjklvbasdioufgwuiorhgkljsdbnkljvbfklzxc vjklzbuiogioarubguisdfn', '', 0, '2019-03-14', 15203013),
(15, 'ffrg', 'gtyjuioip;[;olikujyhgfd', '', 0, '2019-03-29', 1520301323),
(16, 'sdfsdf', 'sdfg', '', 0, '2019-03-20', 15203065),
(17, 'Asdfghj', 'Qfdghjkloikjuhgfdc', '', 0, '2019-03-06', 15888111),
(18, 'Arrange a meeting', 'Tomorrow at 10am arrange a meeting.', '', 0, '2019-03-30', 15203060),
(19, 'Arrange a meeting', 'Arrange a meeting at 11am.', 'kdfnkghdkjgnkdjf', 1, '2019-03-31', 15203060),
(20, 'Arrange a meeting', 'Arrange a meetingArrange a meetingArrange a meetingArrange a meetingArrange a meetingArrange a meeting', 'klnrgkjrhfkgjdfk', 1, '2019-04-04', 15203060),
(21, 'Arrange A ICFL Meeting for 2019', 'ksdngjklsdfsbfljkbgsdfjklghsdf\r\ngsdfgjhsdfjkghsdfjhgjksdfhjkgsdf\r\nsdfnljgbsdfkjghkjsdfhgkjsdfhgjksdfg\r\nsdfklghlsdfjgkljsfdlgkjsdflkg\r\nsdfjklghsdfkjghkjsdfg\r\nksdngjklsdfsbfljkbgsdfjklghsdf\r\ngsdfgjhsdfj', '', 0, '2019-04-10', 15203060),
(22, 'Arrange A ICFL Meeting for 2019', 'klsdjhgkfldjl', '', 0, '2019-04-11', 1520301323),
(23, 'Arrange A ICFL Meeting for 2019', 'Arrange A ICFL Meeting for 2019\r\nArrange A ICFL Meeting for 2019Arrange A ICFL Meeting for 2019Arrange A ICFL Meeting for 2019Arrange A ICFL Meeting for 2019Arrange A ICFL Meeting for 2019Arrange A IC', '', 0, '2019-04-18', 15203060),
(24, 'Arrange A ICFL Meeting for 2019', 'Arrange A ICFL Meeting for 2019Arrange A ICFL Meeting for 2019Arrange A ICFL Meeting for 2019', 'done', 1, '2019-04-01', 15203067),
(25, 'Arrange A ICFL Meeting for 2019', 'Arrange A ICFL Meeting for 2019Arrange A ICFL Meeting for 2019Arrange A ICFL Meeting for 2019Arrange A ICFL Meeting for 2019', '', 0, '2019-04-01', 15203061),
(26, 'Arrange A ICFL Meeting for 2019', 'Arrange A ICFL Meeting for 2019Arrange A ICFL Meeting for 2019', '', 0, '2019-04-01', 15203060);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applyform`
--
ALTER TABLE `applyform`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `dept-id` (`dept-id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applyform`
--
ALTER TABLE `applyform`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
