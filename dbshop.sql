-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2017 at 10:00 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(255) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `adminUser` varchar(255) NOT NULL,
  `adminEmail` varchar(255) NOT NULL,
  `adminPass` varchar(32) NOT NULL,
  `level` tinyint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminName`, `adminUser`, `adminEmail`, `adminPass`, `level`) VALUES
(1, 'touhid', 'admin', 'asifrhmn430@gmail.com', '698d51a19d8a121ce581499d7b701668', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brandId` int(255) NOT NULL,
  `brandName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brandId`, `brandName`) VALUES
(2, 'samsung'),
(3, 'Canon');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartId` int(255) NOT NULL,
  `sId` varchar(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` float(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cartId`, `sId`, `productId`, `productName`, `price`, `quantity`, `image`) VALUES
(24, 'i40ftvcu9nl', 3, 'new instrument', 234.00, 1, 'uploads/01d4483fba.png'),
(25, 'i40ftvcu9nl', 6, 'new instrument', 111.00, 1, 'uploads/7452fdaaa9.jpg'),
(26, 'i40ftvcu9nl', 3, 'new instrument', 234.00, 1, 'uploads/01d4483fba.png'),
(27, 'i40ftvcu9nl', 3, 'new instrument', 234.00, 1, 'uploads/01d4483fba.png'),
(28, 'i40ftvcu9nl', 3, 'new instrument', 234.00, 1, 'uploads/01d4483fba.png'),
(29, 'a1luo9ekhhi', 1, 'My Canon', 700.00, 1, 'uploads/f0972d95bc.png'),
(30, 'a1luo9ekhhi', 3, 'new instrument', 234.00, 1, 'uploads/01d4483fba.png'),
(31, 'a1luo9ekhhi', 6, 'new instrument', 111.00, 1, 'uploads/7452fdaaa9.jpg'),
(32, 'a1luo9ekhhi', 6, 'new instrument', 111.00, 1, 'uploads/7452fdaaa9.jpg'),
(33, 'a1luo9ekhhi', 6, 'new instrument', 111.00, 1, 'uploads/7452fdaaa9.jpg'),
(34, 'a1luo9ekhhi', 4, 'Samsung store', 234.00, 1, 'uploads/86cf152a4c.jpg'),
(35, 'a1luo9ekhhi', 4, 'Samsung store', 234.00, 1, 'uploads/86cf152a4c.jpg'),
(36, 'a1luo9ekhhi', 0, 'new instrument', 111.00, 1, 'uploads/7452fdaaa9.jpg'),
(37, 'a1luo9ekhhi', 6, 'new instrument', 111.00, 1, 'uploads/7452fdaaa9.jpg'),
(38, 'a1luo9ekhhi', 3, 'new instrument', 234.00, 1, 'uploads/01d4483fba.png'),
(39, 'a1luo9ekhhi', 1, 'My Canon', 700.00, 3, 'uploads/f0972d95bc.png'),
(40, 'borse9vub7a', 1, 'My Canon', 700.00, 1, 'uploads/f0972d95bc.png'),
(41, 'borse9vub7a', 4, 'Samsung store', 234.00, 1, 'uploads/86cf152a4c.jpg'),
(42, 'borse9vub7a', 5, 'My Canon', 33333.00, 1, 'uploads/f6f4965635.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `catId` int(255) NOT NULL,
  `catName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`catId`, `catName`) VALUES
(1, 'Guiter'),
(2, 'Pad'),
(3, 'Fluite');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `catId` int(11) NOT NULL,
  `brandId` int(11) NOT NULL,
  `body` text NOT NULL,
  `price` float(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`productId`, `productName`, `catId`, `brandId`, `body`, `price`, `image`, `type`) VALUES
(1, 'My Canon', 3, 2, '<p>sdcszbfghng</p>', 700.00, 'uploads/f0972d95bc.png', 0),
(3, 'new instrument', 2, 3, '<p>asdfghjkioliruynvmmxkjse</p>', 234.00, 'uploads/01d4483fba.png', 0),
(4, 'Samsung store', 2, 2, '<p>dcaCFDESDXWS</p>', 234.00, 'uploads/86cf152a4c.jpg', 1),
(5, 'My Canon', 1, 3, '<p>ASDDADX</p>', 33333.00, 'uploads/f6f4965635.jpg', 1),
(6, 'new instrument', 1, 3, '<p>dVDCV</p>', 111.00, 'uploads/7452fdaaa9.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brandId`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartId`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`catId`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brandId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `catId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
