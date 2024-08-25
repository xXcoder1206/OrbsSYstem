-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2021 at 10:33 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(300) NOT NULL,
  `bus` varchar(30) NOT NULL,
  `transactionum` varchar(10) NOT NULL,
  `payable` varchar(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `setnumber` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fname`, `lname`, `contact`, `address`, `bus`, `transactionum`, `payable`, `status`, `setnumber`) VALUES
(2, 'j', 'kjk', 'kjkj', 'kjk', '1', 'kd77mzfy', '400', 'Onboard', ''),
(3, 'p', 'p', 'p', 'p', '1', 'nidsyeyg', '400', 'Not Void', ''),
(4, 'k', 'k', 'k', 'k', '1', 'v53zohwk', '400', '', ''),
(5, 'k', 'k', 'k', 'k', '1', 's4xf7qkq', '400', '', '1, 2, 3, 4, 5, 6, 7, 8, 9, '),
(6, 'k', 'k', 'k', 'k', '1', 'fhk7qarc', '1600', '', '1, 2, 3, 4, '),
(7, 'John', 'Smith', '2345678', 'Saple Address', '1', 'h68u6ksu', '1200', 'Onboard', '1, 2, 3, '),
(8, 'John', 'Smith', '2345678', 'Saple Address', '5', 'vsuucxgy', '174', '', '1, 2, 3, '),
(9, 'earl', 'de vero', '092219218922', 'pag asa', '5', 'u2ssyoiy', '58', '', '1, '),
(10, 'earl', 'de vero', 'dsdas', 'pag asa', '1', 'ndqyb3m4', '1600', '', '2, 3, 4, 5, ');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `id` int(11) NOT NULL,
  `date` varchar(11) NOT NULL,
  `bus` varchar(11) NOT NULL,
  `seat_reserve` varchar(11) NOT NULL,
  `transactionnum` varchar(10) NOT NULL,
  `seat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`id`, `date`, `bus`, `seat_reserve`, `transactionnum`, `seat`) VALUES
(1, '2013-01-01', '1', '1', 'o8ey8p40', '1'),
(2, '2013-01-13', '1', '1', 'kd77mzfy', '1'),
(3, '2013-01-15', '1', '5', 'nidsyeyg', '1'),
(4, '2013-01-17', '1', '4', 'v53zohwk', '1'),
(5, '2013-01-16', '1', '9', 's4xf7qkq', '1, 2, 3, 4, 5, 6, 7, 8, 9, '),
(6, '2013-01-21', '1', '4', 'fhk7qarc', '1, 2, 3, 4, '),
(7, '10/12/2020', '1', '3', 'h68u6ksu', '1, 2, 3, '),
(8, '18/12/2020', '5', '3', 'vsuucxgy', '1, 2, 3, '),
(9, '', '5', '1', 'u2ssyoiy', '1, '),
(10, '', '1', '4', 'ndqyb3m4', '2, 3, 4, 5, ');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `id` int(11) NOT NULL,
  `route` varchar(300) NOT NULL,
  `price` varchar(30) NOT NULL,
  `numseats` int(30) NOT NULL,
  `type` varchar(300) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `route`, `price`, `numseats`, `type`, `time`) VALUES
(1, 'Ilocos - Manila', '400', 50, 'Deluxe', '10:30:00'),
(3, 'Manila Ilocos', '400', 50, 'Air Con', '12:30:00'),
(4, 'Manila-Alabang', '55', 20, 'Economy', '10:00:00'),
(5, 'Alabang- Manila', '58', 40, 'test', '11:30:00'),
(6, 'Bamban-Capas', '15', 50, '', '07:00:00'),
(7, 'Bamban-Talaga', '15', 50, '', '07:00:00'),
(8, 'Bamban-Capas', '15', 50, '', '07:00:00'),
(9, 'Bamban-Talaga', '15', 50, '', '07:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `userss`
--

CREATE TABLE `userss` (
  `ID` int(255) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userss`
--

INSERT INTO `userss` (`ID`, `firstname`, `lastname`, `address`, `phonenumber`, `username`, `email`, `password`, `usertype`) VALUES
(3, '', '', '', 0, 'admin3@gmail.com', '', 'admin3', ''),
(5, 'earl', 'de vero', 'bamban', 0, '111', 'earljuliadevero@gmail.com', '6512bd43d9caa6e02c990b0a82652dca', 'user'),
(8, 'juan', 'pedro', '1223 street', 912223219, 'juane1', 'juan@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(9, 'juan', 'pedro', '12232 street', 2147483647, 'juan1', 'juan1@gmail.com', '47bce5c74f589f4867dbd57e9ca9f808', 'user'),
(10, 'johnlester', 'orquero', 'Tarlac', 2147483647, 'johnorquero11', 'orquero@gmail.com', '698d51a19d8a121ce581499d7b701668', 'user'),
(11, 'Marlo', 'Pal', 'Tarlac', 2147483647, 'marlop', 'marlop@gmail.com', '698d51a19d8a121ce581499d7b701668', 'user'),
(12, 'Marlon', 'Palcuto', 'Tarlac', 1111111111, 'marlop', 'marlonp@gmail.com', '698d51a19d8a121ce581499d7b701668', 'user'),
(13, 'dar', 'vallejos', 'moncada', 111111, 'dars11', 'dars@gmail.com', '698d51a19d8a121ce581499d7b701668', 'user'),
(14, 'julia', 'dev', 'pag asa', 1111, 'juls1', 'juls@gmail.com', '698d51a19d8a121ce581499d7b701668', 'user'),
(16, 'Marlonn', 'orquero', 'Tarlac', 33232323, 'marlon1', 'marlon1@gmail.com', '698d51a19d8a121ce581499d7b701668', 'user'),
(20, 'joy', 'dev', 'SAN PEDRO', 0, 'joy1', 'joy@gmail.com', '6512bd43d9caa6e02c990b0a82652dca', 'user'),
(21, 'johnlester1', 'dev', 'SAN PEDRO', 0, 'johnorquero112', 'orquer1o@gmail.com', '6512bd43d9caa6e02c990b0a82652dca', 'user'),
(22, 'johnlester1', 'dev', 'SAN PEDRO', 0, 'johnorquero112', 'orquer1o1@gmail.com', '6512bd43d9caa6e02c990b0a82652dca', 'user'),
(23, 'ej', 'devw', 'pag asa', 9123, 'earl1112', 'ej@gmail.com', '6512bd43d9caa6e02c990b0a82652dca', 'user'),
(24, 'Kj', 'ahahsh', 'jajajsh', 1, 'nuasjajh', 'jajhajw@gmail.com', '6512bd43d9caa6e02c990b0a82652dca', 'user'),
(30, 'admin', 'admi', 'admin', 111, 'admin3', 'admin3@gmail.com', '32cacb2f994f6b42183a1300d9a3e8d6', 'admin'),
(36, 'jeje', 'deve', 'pag asa', 909, 'jeje1', 'jeje@gmail.com', 'jeje22', 'user'),
(37, 'admin', 'admin', 'admin111', 111, 'admin111', 'admin111@gmail.com', 'admin111', 'admin'),
(38, 'Darlene', 'Vallejos', 'Gerona', 90909090, 'darlene23', 'darlene@gmail.com', 'darlene11', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userss`
--
ALTER TABLE `userss`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reserve`
--
ALTER TABLE `reserve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `userss`
--
ALTER TABLE `userss`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
