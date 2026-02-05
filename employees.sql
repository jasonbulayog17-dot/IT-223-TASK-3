-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2026 at 03:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sql_functions_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `salary` decimal(10,2) NOT NULL,
  `hire_date` date NOT NULL,
  `department` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `salary`, `hire_date`, `department`, `age`, `email`) VALUES
(1, 'John Doe', 50000.00, '2020-01-15', 'IT', 30, 'john@example.com'),
(2, 'Jane Smith', 60000.50, '2019-05-20', 'HR', 28, 'jane@example.com'),
(3, 'Bob Johnson', 45000.75, '2021-03-10', 'Finance', 35, 'bob@example.com'),
(4, 'Alice Brown', 55000.00, '2018-11-05', 'IT', 32, 'alice@example.com'),
(5, 'Charlie Wilson', 70000.25, '2022-07-01', 'Marketing', 40, 'charlie@example.com'),
(6, 'Diana Prince', 48000.00, '2020-09-15', 'HR', 29, 'diana@example.com'),
(7, 'Eve Adams', 62000.00, '2017-12-20', 'Finance', 38, 'eve@example.com'),
(8, 'Frank Miller', 53000.50, '2021-04-25', 'IT', 31, 'frank@example.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
