-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 08:42 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modal2`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `pname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `doctor` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`pname`, `email`, `contact`, `doctor`, `date`) VALUES
('ja', 'ja@hsd.com', '123', 'doctor2', '2021-02-16'),
('hhh', 'hhh@gsa.cd', '567', 'doctor2', '2021-02-15'),
('45', 'rt@df.cg', '564', 'doctor3', '2021-02-09'),
('rt', 'gh@gh.bh', '57556', 'doctor4', '2021-02-15'),
('ik', 'ik@shdj.com', '1293', 'doctor5', '2021-02-08'),
('lk', 'rt@dfg.cod', '3433', 'doctor2', '2021-02-22'),
('kk', 'kk@sd.cvf', '678', 'doctor5', '2021-02-27'),
('klk', 'klk@jsd.cv', '456', 'doctor2', '2021-03-07'),
('hlh', 'hlh@sjh.cdf', '0123', 'Dr. Sam Smith', '2021-02-21'),
('hlh', 'hlh@sjh.cdf', '0123', 'Dr. Sam Smith', '2021-02-21'),
('hlh', 'hlh@sjh.cdf', '0123', 'Dr. Sam Smith', '2021-02-21'),
('hlh', 'hlh@sjh.cdf', '0123', 'Dr. Sam Smith', '2021-02-21'),
('hlh', 'hlh@sjh.cdf', '0123', 'Dr. Sam Smith', '2021-02-21'),
('hlh', 'hlh@sjh.cdf', '0123', 'Dr. Sam Smith', '2021-02-21'),
('hlh', 'hlh@sjh.cdf', '0123', 'Dr. Sam Smith', '2021-02-21'),
('hlh', 'hlh@sjh.cdf', '0123', 'Dr. Sam Smith', '2021-02-21'),
('titi', 'tit@as.com', '019', 'Dr. Beryl Wilder', '2021-02-25'),
('df', 'df@sdj.com', '9239', 'Dr. Christina Green', '2021-02-15'),
('df', 'df@sdj.com', '9239', 'Dr. Christina Green', '2021-02-15'),
('df', 'df@sdj.com', '9239', 'Dr. Christina Green', '2021-02-15'),
('df', 'df@sdj.com', '9239', 'Dr. Christina Green', '2021-02-15'),
('df', 'df@sdj.com', '9239', 'Dr. Christina Green', '2021-02-15'),
('df', 'df@sdj.com', '9239', 'Dr. Christina Green', '2021-02-15'),
('df', 'df@sdj.com', '9239', 'Dr. Christina Green', '2021-02-15'),
('df', 'df@sdj.com', '9239', 'Dr. Christina Green', '2021-02-15'),
('cf', 'cf@gd.com', '0676', 'Dr.Madeline Jay', '2021-02-27'),
('cf', 'cf@gd.com', '0676', 'Dr.Madeline Jay', '2021-02-27'),
('cf', 'cf@gd.com', '0676', 'Dr.Madeline Jay', '2021-02-27'),
('er', 'er@gm.com', '564', 'Dr. Christina Green', '2021-02-25'),
('er', 'er@gm.com', '564', 'Dr. Christina Green', '2021-02-25'),
('er', 'er@df.com', '56', 'Dr.Madeline Jay', '2021-02-20'),
('er', 'er@df.com', '56', 'Dr.Madeline Jay', '2021-02-20'),
('d', 'd@h.b', '45', 'Dr. Beryl Wilder', '2021-02-12'),
('er', 'er@gmail.com', '345', 'doctor2', '2021-02-26'),
('er', 'er@sjd.com', '845', 'doctor4', '2021-02-26'),
('hell', 'hell@shgd.com', '8734', 'Dr. Michele Jhonson', '2021-02-27'),
('hell', 'hell@shgd.com', '8734', 'Dr. Michele Jhonson', '2021-02-27'),
('tt', 'tt@df.cidf', '34', 'Dr. Michele Jhonson', '2021-02-27'),
('tt', 'tt@df.cidf', '34', 'Dr. Michele Jhonson', '2021-02-27'),
('tt', 'tt@df.cidf', '34', 'Dr. Michele Jhonson', '2021-02-27'),
('tt', 'tt@df.cidf', '34', 'Dr. Michele Jhonson', '2021-02-27'),
('er', 'er@gmail.com', '745', 'Dr. Andrew Doe', '2021-02-27'),
('Abc', 'ab@rr', '625', 'Dr.Jane Foster', '2021-04-16');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
