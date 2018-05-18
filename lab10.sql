-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2018 at 11:42 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab10`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `logo` text NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `platform` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `logo`, `publisher`, `sku`, `platform`) VALUES
(1, 'Microsoft Azure for Students Starter', 'http://localhost/lab10/filelogo/32f2a6c4-4d3e-4d0f-ad98-900acc46fb66.png', 'Microsoft Corporation', '0000', 'Windows'),
(2, 'Windows 10 Education', 'http://localhost/lab10/filelogo/bebfe197-a85a-498c-bdaa-7a03ae6366f9.png', 'Microsoft Corp.', '0001', 'Windows'),
(3, 'Visual Studio Enterprise 2017', 'http://localhost/lab10/filelogo/5898e517-34d6-4fa5-844f-9a4be81c2b78.png', 'Microsoft Corp.', '0002', 'Windows'),
(4, 'Windows Server 2016', 'http://localhost/lab10/filelogo/56e8b87b-e251-4a41-b626-296bcb260dd1.png', 'Microsoft Corp.', '0003', 'Windows'),
(5, 'Access 2016', 'http://localhost/lab10/filelogo/84a6efa1-faa3-e511-9413-b8ca3a5db7a1.png', 'Microsoft Corp.', '0004', 'Windows'),
(6, 'Project Professional 2016', 'http://localhost/lab10/filelogo/2e788ab7-3a0f-4119-a1f8-7dc943b217a7.png', 'Microsoft Corp.', '0005', 'Windows'),
(7, 'Visio Professional 2016', 'http://localhost/lab10/filelogo/8c2be168-a74d-46ac-b5da-16ab93986484.png', 'Microsoft Corp', '0006', 'Windows'),
(8, 'Visio Professional 2013', 'http://localhost/lab10/filelogo/630de8a7-faa3-e511-9413-b8ca3a5db7a1.png', 'Windows', '0007', 'Microsoft Corp'),
(9, 'Windows 8.1 Professional', 'http://localhost/lab10/filelogo/c1d5e2ad-faa3-e511-9413-b8ca3a5db7a1.png', 'Microsoft Corp', '0009', 'Windows');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
