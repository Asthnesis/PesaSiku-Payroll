-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 01:39 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employees`
--

-- --------------------------------------------------------

--
-- Table structure for table `employeedetails`
--

CREATE TABLE `employeedetails` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `address` text NOT NULL,
  `age` int(11) NOT NULL,
  `pos` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `kra` text NOT NULL,
  `payroll` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employeedetails`
--

INSERT INTO `employeedetails` (`id`, `username`, `address`, `age`, `pos`, `phone`, `email`, `kra`, `payroll`) VALUES
(4, 'James Mwangi Kinuthia', 'Nairobi,Kenya', 33, 'Project Manager', '+254710000000', 'jameskinuthia@work.com', 'A419901280B', 104000),
(5, 'Victoria Wangari', 'Kiambu,Kenya', 38, 'Accountant', '+254701234567', 'vickywangari@pesasiku.com', 'A10464698B4', 42199),
(6, 'Ahmed Muhammad', 'Isiolo,Kenya', 43, 'Security systems manager', '+254702435500', 'ahmedmuhammad@pesasiku.com', 'A2007989098', 0),
(7, 'Alex Tielesman', 'London,England', 33, 'Brand Ambassador', '+441004004', 'alextieles@pesasiku.com', 'N/A', 0),
(8, 'Natalia', 'Narok,Kenya', 23, 'Secretary', '+254728765463', 'natsp@gmail.com', 'ART56788', 0),
(9, 'CYNTHIA BIKERI', 'Ruiru', 19, 'Consultant', '+254 783381791', 'cynthiabiks@gmail.com', 'AU74657HB', 354000),
(10, 'Admin', 'Ruiru,Kiambu', 0, 'Marketing', '+254720787274', 'admin@email.com', 'A1825888757', 0),
(11, 'Michael Onyango', '10 Riverside Drive, Nairobi', 40, 'Operations Manager', '+254712345321', 'michael.onyango@example.com', 'D891234567A', 90000),
(12, 'Sarah Chebet', '15 Kileleshwa Road, Nairobi', 27, 'Sales Representative', '+254712345012', 'sarah.chebet@example.com', 'E765432109B', 65000),
(13, 'Joseph Njoroge', '25 Ngong Road, Nairobi', 33, 'IT Specialist', '+254712345888', 'joseph.njoroge@example.com', 'F543210987C', 80000),
(14, 'Alice Muthoni', '30 Juja Road, Nairobi', 29, 'Customer Service Representative', '+254712345444', 'alice.muthoni@example.com', 'G432109876D', 70000),
(15, 'Mary Wangari', '123 Main Street, Nairobi', 35, 'Human Resources Manager', '+254712345678', 'mary.wangari@example.com', 'A123456789Z', 85000),
(16, 'John Kamau', '456 Park Avenue, Mombasa', 28, 'Marketing Specialist', '+254723456789', 'john.kamau@example.com', 'B987654321Y', 72000),
(17, 'Grace Achieng', '789 Lake View Road, Kisumu', 31, 'Finance Analyst', '+254712345987', 'grace.achieng@example.com', 'C345678912X', 78000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employeedetails`
--
ALTER TABLE `employeedetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employeedetails`
--
ALTER TABLE `employeedetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
