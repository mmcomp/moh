-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2016 at 04:27 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mohajeri_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fa_name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `en_name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci COMMENT='city' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `fa_name`, `en_name`, `country_id`) VALUES
(1, 'مشهد', 'Mashhad', 1),
(2, 'تهران', 'Tehran', 1);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fa_name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `en_name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `fa_name`, `en_name`) VALUES
(1, 'ایران', 'Iran');

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE IF NOT EXISTS `flight` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `flight_number` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `airplane_id` int(11) NOT NULL,
  `departure_time` int(11) NOT NULL,
  `landing_time` int(11) NOT NULL,
  `airline_iata` varchar(2) COLLATE utf8_persian_ci NOT NULL,
  `from_city_iata` varchar(3) COLLATE utf8_persian_ci NOT NULL,
  `to_city_iata` varchar(3) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `flight_detail`
--

CREATE TABLE IF NOT EXISTS `flight_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `flight_id` int(11) NOT NULL,
  `departure_date` int(11) NOT NULL,
  `landing_date` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `capacity_order` int(11) NOT NULL,
  `flight_type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `iata`
--

CREATE TABLE IF NOT EXISTS `iata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iata` varchar(3) COLLATE utf8_persian_ci NOT NULL,
  `city_id` int(11) NOT NULL,
  `airport_name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `iata`
--

INSERT INTO `iata` (`id`, `iata`, `city_id`, `airport_name`) VALUES
(1, 'MHD', 1, 'هاشمی نژاد'),
(2, 'THR', 2, 'مهرآباد'),
(3, 'THR', 2, 'امام خمینی');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE IF NOT EXISTS `passenger` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fa_name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `fa_last_name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `en_name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `en_last_name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `ad_birth` int(11) NOT NULL,
  `helical_birth` int(11) NOT NULL,
  `reserve_id` int(11) NOT NULL,
  `nationality` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `passport_issue_country` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `passport_expire` int(11) NOT NULL,
  `age` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
