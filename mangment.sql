-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2024 at 08:41 PM
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
-- Database: `mangment`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `code_item` int(8) NOT NULL,
  `item_price` int(8) NOT NULL,
  `Purchase_price` int(8) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `disc` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`item_id`, `item_name`, `code_item`, `item_price`, `Purchase_price`, `Quantity`, `disc`, `img`) VALUES
(10, 'sayra', 123442, 22222, 21331, 9, 'okk', '17869424450283463.png'),
(11, 'sayra', 123442, 22222, 21331, 0, 'okk', '55002229641412700.png'),
(12, 'sayra', 123442, 22222, 21331, 1, 'okk', '46116511274507440.png'),
(13, 'iphone', 2312443, 2424424, 24244224, 1, '22424', '40000716842694170.png'),
(14, 'iphone', 2312443, 2424424, 24244224, 1, '22424', '7187475042302060.png'),
(15, 'iphone', 2312443, 2424424, 24244224, 1, '22424', '69252027927664743.png'),
(16, 'iphone', 2312443, 2424424, 24244224, 1, '22424', '40297008467640844.png'),
(17, 'iphone', 2312443, 2424424, 24244224, 1, '22424', '13720060441612258.png'),
(18, 'okkkk', 34235435, 34351345, 34623656, 1, '566456', '48978857359490689.png'),
(19, 'ewevwerf', 413541435, 542654, 2562, 1, '56456', '82180533700970933.png'),
(21, '2333233', 232323, 32323, 2323232, 3998, '3322323', '28703299710503304.png'),
(22, 'ewevwerf', 3242343, 23423423, 234234234, 1, '34`23434234berfhefg', '81160159737304954.png');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id_regis` int(11) NOT NULL,
  `name_u` varchar(50) NOT NULL,
  `email_u` varchar(50) NOT NULL,
  `pass_u` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id_sales` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `item_Name` varchar(100) NOT NULL,
  `item_price` int(11) NOT NULL,
  `item_pur` int(11) NOT NULL,
  `sales_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id_sales`, `id_item`, `item_Name`, `item_price`, `item_pur`, `sales_date`) VALUES
(10, 10, 'sayra', 22222, 21331, '2024-11-04'),
(11, 22, 'ewevwerf', 23423423, 234234234, '2024-11-04'),
(12, 17, 'iphone', 2424424, 24244224, '2024-11-04'),
(13, 12, 'sayra', 22222, 21331, '2024-11-04'),
(15, 11, 'sayra', 22222, 21331, '2024-11-04'),
(16, 12, 'sayra', 22222, 21331, '2024-11-05'),
(17, 14, 'iphone', 2424424, 24244224, '2024-11-05'),
(18, 19, 'ewevwerf', 542654, 2562, '2024-11-05'),
(19, 19, 'ewevwerf', 542654, 2562, '2024-11-05'),
(20, 17, 'iphone', 2424424, 24244224, '2024-11-05'),
(21, 10, 'sayra', 22222, 21331, '2024-11-05'),
(22, 14, 'iphone', 2424424, 24244224, '2024-11-05'),
(23, 12, 'sayra', 22222, 21331, '2024-11-05'),
(24, 10, 'sayra', 22222, 21331, '2024-11-05'),
(25, 11, 'sayra', 22222, 21331, '2024-11-05'),
(26, 13, 'iphone', 2424424, 24244224, '2024-11-06'),
(27, 10, 'sayra', 22222, 21331, '2024-11-06'),
(28, 10, 'sayra', 22222, 21331, '2024-11-06'),
(29, 10, 'sayra', 22222, 21331, '2024-11-06'),
(30, 10, 'sayra', 22222, 21331, '2024-11-06'),
(31, 10, 'sayra', 22222, 21331, '2024-11-06'),
(32, 21, '2333233', 32323, 2323232, '2024-11-06'),
(33, 11, 'sayra', 22222, 21331, '2024-11-08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `user_name`, `user_pass`, `email`) VALUES
(2, 'mounir', '1234', 'zakaria@email.com'),
(3, 'ali', '4321', 'rachid@gmail.com'),
(5, 'bakkar', '1243', 'mounir@gmail.conm'),
(8, 'abd l kader ', 'bakkar2345', 'zakaria@email.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id_regis`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id_sales`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id_regis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id_sales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
