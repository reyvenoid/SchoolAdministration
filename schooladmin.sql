-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2013 at 03:10 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `schooladmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `department_relationship`
--

CREATE TABLE IF NOT EXISTS `department_relationship` (
  `Emp_No` int(11) NOT NULL,
  `Relationship` varchar(50) NOT NULL,
  `Dep_NO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dependent`
--

CREATE TABLE IF NOT EXISTS `dependent` (
  `Dep_No` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Age` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `Emp_No` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `firstyearenrollee`
--

CREATE TABLE IF NOT EXISTS `firstyearenrollee` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Gender` varchar(15) NOT NULL,
  `Age` int(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Mobile` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `firstyearenrollee`
--

INSERT INTO `firstyearenrollee` (`id`, `Firstname`, `Lastname`, `Gender`, `Age`, `Address`, `Mobile`) VALUES
(1, 'Reyven', 'Obalan', 'Male', 17, 'Carigara,LEyte', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `secondyearenrollee`
--

CREATE TABLE IF NOT EXISTS `secondyearenrollee` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Age` int(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Mobile` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `secondyearenrollee`
--

INSERT INTO `secondyearenrollee` (`id`, `Firstname`, `Lastname`, `Gender`, `Age`, `Address`, `Mobile`) VALUES
(1, 'chong', 'gok gok', 'male', 45, 'Carigara,LEyte', 2147483647),
(2, 'fxs', 'gdf', 'sda', 21, 'sfsf', 910731609);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
