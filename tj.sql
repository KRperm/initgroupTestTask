-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 11, 2018 at 09:53 PM
-- Server version: 10.0.34-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tj`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `clientId` int(11) NOT NULL,
  `clientName` varchar(100) NOT NULL,
  `clientEmail` varchar(100) NOT NULL,
  `clientAssignedManager` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`clientId`, `clientName`, `clientEmail`, `clientAssignedManager`) VALUES
(1, 'Кирилл Андреевич', 'tarpeda-kirill@yandex.ru', 1),
(2, 'Петр алексеевич', 'Hoorkz@gmail.com', 2),
(5, 'Алена Петровна Жукова', 'qqwweeBlackDragon@yandex.com', 1),
(6, 'Максим', 'hoorkgames@yandex.ru', 2);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `managerId` int(11) NOT NULL,
  `managerName` varchar(100) NOT NULL,
  `managerJob` varchar(100) NOT NULL,
  `managerPhone` varchar(100) NOT NULL,
  `managerEmail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`managerId`, `managerName`, `managerJob`, `managerPhone`, `managerEmail`) VALUES
(1, 'Татьяна александровна', 'Менеджер по заявкам', '+ 7 (912) 64 3545', 'pop@ya.ru'),
(2, 'Алексей Алексеев', 'Менеджер по чаю', '+8 (934) 56 5443', 'qw@qw.qw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`clientId`),
  ADD KEY `clientAssignedManager_2` (`clientAssignedManager`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`managerId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `clientId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `managerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`clientAssignedManager`) REFERENCES `manager` (`managerId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
