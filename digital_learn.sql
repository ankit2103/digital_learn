-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2020 at 09:30 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digital learn`
--

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(5) NOT NULL,
  `status` varchar(7) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `estatus` varchar(10) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `level` varchar(10) NOT NULL,
  `university` varchar(50) NOT NULL,
  `specialization` varchar(20) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`id`, `fname`, `lname`, `email`, `dob`, `gender`, `status`, `mobile`, `address`, `estatus`, `occupation`, `level`, `university`, `specialization`, `branch`, `password`, `image`) VALUES
(1, 'Ankit', 'chawda', 'achawda866@gmail.com', '2020-07-02', 'Male', 'Teacher', '7089887460', '190 tilak nagar extension', 'aa', 'as', '5', 'sdf', 'specialization', 'M.Pharm', 'aa', '3.jpg'),
(3, 'Akash chaw', '', 'akashchawda1998@gmail.com', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'akash', 'chawda', 'admin@gmail.com', '0000-00-00', 'Male', 'Teacher', '7089887460', '190 tilak nagar extension', 'aa', 'as', '5', 'sdf', 'specialization', 'M.Pharm', 'aa', 'Add a heading.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
