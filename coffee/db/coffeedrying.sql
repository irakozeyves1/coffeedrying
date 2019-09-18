-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 06, 2016 at 06:46 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `coffeedrying`
--

-- --------------------------------------------------------

--
-- Table structure for table `adrying`
--

CREATE TABLE IF NOT EXISTS `adrying` (
  `adry_id` int(20) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `p_id` int(20) NOT NULL,
  `qty` int(20) NOT NULL,
  PRIMARY KEY (`adry_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `adrying`
--

INSERT INTO `adrying` (`adry_id`, `date`, `p_id`, `qty`) VALUES
(1, '2016-06-11 12:51:57', 1, 300);

-- --------------------------------------------------------

--
-- Table structure for table `bdrying`
--

CREATE TABLE IF NOT EXISTS `bdrying` (
  `id_bdry` int(20) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `p_id` int(20) NOT NULL,
  `qty` int(20) NOT NULL,
  PRIMARY KEY (`id_bdry`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bdrying`
--

INSERT INTO `bdrying` (`id_bdry`, `date`, `p_id`, `qty`) VALUES
(1, '2016-06-11 10:45:29', 1, 250);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `manId` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`manId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manId`, `username`, `password`) VALUES
(1, 'Beatha', 'Beatha');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `p_id` int(20) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `pro_name` varchar(20) NOT NULL,
  `qty` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  `suppl_name` varchar(20) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `date`, `pro_name`, `qty`, `price`, `suppl_name`) VALUES
(1, '2016-06-11 09:34:23', 'coffee', 2, 400, 'umutoni');

-- --------------------------------------------------------

--
-- Table structure for table `purprice`
--

CREATE TABLE IF NOT EXISTS `purprice` (
  `pu_id` int(20) NOT NULL AUTO_INCREMENT,
  `amount` int(20) NOT NULL,
  PRIMARY KEY (`pu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `purprice`
--

INSERT INTO `purprice` (`pu_id`, `amount`) VALUES
(1, 200);

-- --------------------------------------------------------

--
-- Table structure for table `selling`
--

CREATE TABLE IF NOT EXISTS `selling` (
  `sel_id` int(20) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `p_id` int(20) NOT NULL,
  `qty` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  `custo_name` varchar(20) NOT NULL,
  PRIMARY KEY (`sel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `selling`
--

INSERT INTO `selling` (`sel_id`, `date`, `p_id`, `qty`, `price`, `custo_name`) VALUES
(1, '2016-06-11 13:43:29', 1, 2, 8000, 'rwacoffee');

-- --------------------------------------------------------

--
-- Table structure for table `sell_price`
--

CREATE TABLE IF NOT EXISTS `sell_price` (
  `sel_id` int(20) NOT NULL AUTO_INCREMENT,
  `amount` int(20) NOT NULL,
  PRIMARY KEY (`sel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sell_price`
--

INSERT INTO `sell_price` (`sel_id`, `amount`) VALUES
(1, 4000);
