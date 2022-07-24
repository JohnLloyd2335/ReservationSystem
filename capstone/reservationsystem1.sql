-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2022 at 05:35 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservationsystem1`
--

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `archive_id` int(50) NOT NULL,
  `type_id` int(50) NOT NULL,
  `checkin` varchar(255) NOT NULL,
  `checkout` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `adult` varchar(255) NOT NULL,
  `children` int(50) NOT NULL,
  `approvalstatus` varchar(255) NOT NULL,
  `balance` int(50) NOT NULL,
  `expenses` int(50) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(50) NOT NULL,
  `post_id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `approval_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cottage`
--

CREATE TABLE `cottage` (
  `id` int(11) NOT NULL,
  `cottage_name` varchar(255) NOT NULL,
  `price` int(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cottage`
--

INSERT INTO `cottage` (`id`, `cottage_name`, `price`, `description`, `image`) VALUES
(4, 'Cottage1', 350, '5pax.', 'IMG-62d4dad20ec828.33507148.jpg'),
(5, 'Cottage2', 500, '10pax.\r\n', 'IMG-62d4daf32c4233.75540221.jpg'),
(6, 'Cottage3', 950, '15pax.', 'IMG-62d4db0e767394.35443598.jpg'),
(7, 'Cottage4', 1200, '20 pax.', 'IMG-62d781a339b997.43264676.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cottagereservation`
--

CREATE TABLE `cottagereservation` (
  `id` int(50) NOT NULL,
  `cottagetype` varchar(255) NOT NULL,
  `checkin` varchar(255) NOT NULL,
  `checkout` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `adult` varchar(255) NOT NULL,
  `children` varchar(50) NOT NULL,
  `approvalstatus` varchar(255) NOT NULL,
  `balance` int(50) NOT NULL,
  `expenses` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cottagereservation`
--

INSERT INTO `cottagereservation` (`id`, `cottagetype`, `checkin`, `checkout`, `name`, `adult`, `children`, `approvalstatus`, `balance`, `expenses`) VALUES
(46, 'Cottage2', '2022-07-24', '2022-07-25', 'Ralphs Maquilings', '3', '1', 'Pending', 1250, 1250);

-- --------------------------------------------------------

--
-- Table structure for table `cottage_type`
--

CREATE TABLE `cottage_type` (
  `cottage_id` int(11) NOT NULL,
  `cottages_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cottage_type`
--

INSERT INTO `cottage_type` (`cottage_id`, `cottages_name`) VALUES
(1, 'cottage1'),
(2, 'cottage2'),
(3, 'cottage3'),
(4, 'cottage4');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(50) NOT NULL,
  `user_post` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `approvalstatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_post`, `date`, `description`, `image`, `approvalstatus`) VALUES
(7, 'Ralph Archers', '2022-07-18', 'Yummy Haji', 'IMG-62d4db610eb667.64222044.jpg', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `room_id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rating` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`room_id`, `name`, `rating`) VALUES
(3, 'John Wendrick Brofar', 3),
(3, 'John Wendrick Brofar', 5),
(3, 'John Wendrick Brofar', 3),
(3, 'John Wendrick Brofar', 4),
(3, 'John Wendrick Brofar', 3),
(3, 'John Wendrick Brofar', 3),
(6, 'John Wendrick Brofar', 0);

-- --------------------------------------------------------

--
-- Table structure for table `roomreservation`
--

CREATE TABLE `roomreservation` (
  `id` int(50) NOT NULL,
  `roomtype` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `checkin` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `checkout` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `adult` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `children` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `approvalstatus` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `balance` int(50) DEFAULT NULL,
  `expenses` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roomreservation`
--

INSERT INTO `roomreservation` (`id`, `roomtype`, `checkin`, `checkout`, `name`, `adult`, `children`, `approvalstatus`, `balance`, `expenses`) VALUES
(14, 'Singleroom', '2022-07-23', '2022-07-24', 'Ralphs Maquilings', '2', '0', 'Pending', 2400, 2400),
(15, 'Twinroom', '2022-07-23', '2022-07-24', 'Ralphs Maquilings', '2', '3', 'Pending', 4850, 4850);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(50) NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `price` int(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `reviews` int(50) NOT NULL,
  `average_rating` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_name`, `price`, `description`, `image`, `reviews`, `average_rating`) VALUES
(10, 'Singleroom', 2000, '1-2persons', 'IMG-62d4da650aea04.53120187.png', 0, 0),
(11, 'Twinroom', 4000, '2-4persons', 'IMG-62d4da8335e048.11170040.jpg', 0, 0),
(12, 'Tripleroom', 6000, '3-6persons', 'IMG-62d4dab14d0cf1.65997411.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `room_types`
--

CREATE TABLE `room_types` (
  `room_id` int(11) NOT NULL,
  `room_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_types`
--

INSERT INTO `room_types` (`room_id`, `room_name`) VALUES
(1, 'Singleroom'),
(2, 'Twinroom'),
(3, 'Tripleroom');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(50) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `price` int(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `price`, `description`, `image`) VALUES
(6, 'Spa', 500, '', 'IMG-62d50d8a6bf0a1.29229580.jpg'),
(7, 'Pedicure', 200, '', 'IMG-62d50dcaa41e25.63423791.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sys_settings`
--

CREATE TABLE `sys_settings` (
  `sys_settings_id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `background` varchar(255) NOT NULL,
  `welcome_text` varchar(255) NOT NULL,
  `quotes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sys_settings`
--

INSERT INTO `sys_settings` (`sys_settings_id`, `logo`, `background`, `welcome_text`, `quotes`) VALUES
(1, 'tablogo.png', 'bg1.jpg', 'Welcome to Ha-Boogies Archer Resort', 'The only palce on Earth that time forgot.');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `provider` varchar(255) NOT NULL,
  `provider_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mobilenum` int(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `mobilenum`, `email`, `password`, `profile_picture`) VALUES
(1, 'Admin', 'Admin', 123123123, 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'default-profile.jpg'),
(7, 'Ralphs', 'Maquilings', 2147483647, 'ralpharcher24@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'IMG-62d53b458a5327.64751106.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `user_id` int(11) NOT NULL,
  `user_type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`archive_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cottage`
--
ALTER TABLE `cottage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cottagereservation`
--
ALTER TABLE `cottagereservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cottage_type`
--
ALTER TABLE `cottage_type`
  ADD PRIMARY KEY (`cottage_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomreservation`
--
ALTER TABLE `roomreservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_types`
--
ALTER TABLE `room_types`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_settings`
--
ALTER TABLE `sys_settings`
  ADD PRIMARY KEY (`sys_settings_id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archive`
--
ALTER TABLE `archive`
  MODIFY `archive_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cottage`
--
ALTER TABLE `cottage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cottagereservation`
--
ALTER TABLE `cottagereservation`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `cottage_type`
--
ALTER TABLE `cottage_type`
  MODIFY `cottage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roomreservation`
--
ALTER TABLE `roomreservation`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `room_types`
--
ALTER TABLE `room_types`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sys_settings`
--
ALTER TABLE `sys_settings`
  MODIFY `sys_settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
