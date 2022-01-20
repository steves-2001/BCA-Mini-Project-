-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2021 at 04:31 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autozone`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `carID` int(4) NOT NULL,
  `company` varchar(10) NOT NULL,
  `carType` varchar(10) NOT NULL,
  `carModel` varchar(30) NOT NULL,
  `year` int(4) NOT NULL,
  `fuel` varchar(10) NOT NULL,
  `gear` varchar(10) NOT NULL,
  `km` varchar(10) NOT NULL,
  `price` varchar(10) NOT NULL,
  `location` varchar(30) NOT NULL,
  `ownership` varchar(15) NOT NULL,
  `description` varchar(100) NOT NULL,
  `imageLocation` varchar(100) NOT NULL,
  `userID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`carID`, `company`, `carType`, `carModel`, `year`, `fuel`, `gear`, `km`, `price`, `location`, `ownership`, `description`, `imageLocation`, `userID`) VALUES
(17, 'Toyota', 'Coupe', 'Supra', 2000, 'Petrol', 'Manual', '5000', '69999999', 'Kochi', 'Second Hand', 'good Car Buy it.', 'upload/supra.jpg', 27),
(21, 'Hundai', 'Suv', 'Creta', 2015, 'Diesel', 'Automatic', '6000', '3000000', 'Kottayam', 'Second Hand', 'abc', 'upload/creta.jpg', 31),
(26, 'MG Motors', 'Sedan', 'Swift Dezire', 2000, 'Deisel', 'Automatic', '2323323', '500000', 'Kottayam', 'Others', 'single owner\r\nneat condition', 'upload/jeep.jpg', 30),
(27, 'ford', 'Sports Car', 'mustang', 2015, 'Petrol', 'Manual', '5000', '8000000', 'Kottayam', 'Second Hand', 'genuine buyers only\r\nshowroom condition car\r\nnew tyres\r\n5000 kms driven', 'upload/mustang.jpg', 30),
(29, 'Maruti Suz', 'Coupe', 'alto 800', 2000, 'Petrol', 'Manual', '80000', '355000', 'ernakulam', 'Others', 'new tyres\r\nneat car \r\nshowroom condition \r\nwell maintained \r\nkaranakata registered vehicle', 'upload/alto.jfif', 32);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(4) NOT NULL,
  `carID` int(4) NOT NULL,
  `userID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `carID`, `userID`) VALUES
(41, 21, 32),
(45, 26, 32),
(53, 17, 30),
(54, 27, 27),
(55, 17, 28),
(56, 17, 34),
(57, 17, 33),
(58, 17, 30);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `name`, `email`, `password`, `phone`, `address`) VALUES
(27, 'Steve', 'steve@gmail.com', 'st', '2323232323', 'Steve house(H)'),
(28, 'admin', 'admin@gmail', 'admin', '4443', 'sdsdf'),
(30, 'Devasurya S', 'devasuryasuresh@gmail.com', 'dev', '9072581323', 'Paryathukunnel(H)'),
(31, 'Abhilash', 'abhilash@gmail.com', '123', '', 'abc'),
(32, 'Midhun', 'midhun@gmail.com', '123', '', 'abc'),
(33, 'aryan', 'aryan@gmail', '123', '', 'dsffdsffss'),
(34, 'Melvin', 'melvin@gmail.com', '123', '', 'yttdwyeff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`carID`) USING BTREE,
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `orders_ibfk_1` (`carID`),
  ADD KEY `orders_ibfk_2` (`userID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `carID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`carID`) REFERENCES `cars` (`carID`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
