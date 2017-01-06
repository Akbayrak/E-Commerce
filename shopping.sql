-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2017 at 09:42 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `ID` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `ID` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `tittle` varchar(255) DEFAULT NULL,
  `price` decimal(10,0) NOT NULL,
  `list_price` decimal(10,0) NOT NULL,
  `brand` int(11) NOT NULL,
  `categories` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `tittle`, `price`, `list_price`, `brand`, `categories`, `image`, `description`) VALUES
(1, 'Jeans', '120', '100', 1, 'Mantel', 'images/big1.jpg', 'This is Mental and all price will diskuren wird\r\n; nbjhjh'),
(2, 'Helm', '22', '19', 2, 'Helm', 'images/big2.jpg', 'sjadnslakld;slak;l\r\n kmska dkmksmks skmkamsk '),
(3, 'Tshirt', '45', '40', 3, 'Tshirty', 'images/big3.jpg', 'nsdkas sakndksak jdnsajnds\r\nsalhamd lellah ea=r\r\nran rab alalameen\r\nalrahman a;lerahem malek ralmka\r\n'),
(4, 'Short', '34', '30', 2, 'short', 'images/big1.jpg', 'kol ho allral ahad allaf ajsamad lama \r\nasj kmdkmsas\r\nkmksmdkamsd\r\n\r\nsasd'),
(5, 'Bikini', '25', '20', 4, 'bikini', 'images/big2.jpg', ' jhjhk;Iyak nabud hghgklkjjhg\r\nbjhbkjnkjkjn'),
(9, NULL, '80', '42', 42, NULL, NULL, 'oppppppkkjk'),
(13, NULL, '52', '42', 42, NULL, NULL, 'kdjfsdkkldsfd'),
(15, NULL, '12', '42', 20, NULL, NULL, 'kwk sjsjakslk skkask');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
