-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 04:49 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(110) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(31, 'TIE-DYE-KAFTAN.', 7000, 'IMG_8704.JPEG', 1),
(32, 'TIE DYE KAFTAN', 7000, 'IMG_8708.JPEG', 1),
(36, 'TIE-DYE KAFTAN', 7000, 'IMG_8693.JPEG', 1),
(37, 'TIE DYE PANTS', 2500, 'IMG_8693.JPEG', 1),
(38, 'TIE DYE BANDANA', 500, 'IMG_8664.JPEG', 1),
(39, 'LUREX PANTS', 3000, 'IMG_8706.JPEG', 1),
(40, ' TIE-DYE KAFTAN', 7000, 'IMG_7998.JPEG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE `order1` (
  `name` text NOT NULL,
  `number` int(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` text NOT NULL,
  `flat` varchar(255) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` text NOT NULL,
  `country` text NOT NULL,
  `pincode` int(100) NOT NULL,
  `total_products` int(255) NOT NULL,
  `total_price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`) VALUES
(1, ' TIE-DYE KAFTAN', '7000', 'IMG_7998.JPEG'),
(2, 'TIE-DYE-KAFTAN', '7000', 'IMG_0264.JPG'),
(3, 'TIE-DYE-KAFTAN.', '7000', 'IMG_8704.jpeg'),
(4, 'TIE DYE KAFTAN', '7000', 'IMG_8708.JPEG'),
(5, 'TIE DYE PANTS', '2500', 'IMG_8693.JPEG'),
(6, 'LUREX PANTS', '3000', 'IMG_8706.JPEG'),
(7, 'TIE DYE BANDANA', '500', 'IMG_8664.JPEG');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `name`, `description`, `image`, `price`) VALUES
(1, 'TIE-DYE KAFTAN', '', 'IMG_8693.JPEG', 7000),
(2, 'TIE-DYE-KAFTAN', '', 'IMG_8700.JPEG', 7000),
(3, 'TIE-DYE-KAFTAN.', '', 'IMG_8704.JPEG', 7000),
(4, 'TIE DYE KAFTAN', '', 'IMG_8708.JPEG', 7000),
(5, 'TIE DYE PANTS', '', 'IMG_8693.JPEG', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `product_rating`
--

CREATE TABLE `product_rating` (
  `id` int(11) NOT NULL,
  `product` varchar(100) DEFAULT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_rating`
--

INSERT INTO `product_rating` (`id`, `product`, `rating`) VALUES
(1, 'Product 1', 3),
(2, 'Product 2', 4),
(3, 'Product 3', 4),
(4, 'Product 4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `id` int(11) NOT NULL,
  `userName` tinytext NOT NULL,
  `userReview` tinytext NOT NULL,
  `userMessage` longtext NOT NULL,
  `dateReviewed` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`id`, `userName`, `userReview`, `userMessage`, `dateReviewed`) VALUES
(18, 'Bright', '4', 'this is ok', 'Monday, July 6, 2020'),
(19, 'Linda', '5', 'this is amazing!', 'Monday, July 6, 2020'),
(20, 'John', '2', 'this is bad!', 'Monday, July 6, 2020'),
(21, 'demo', '4', 'good', 'Wednesday, May 17, 2023'),
(22, 'boby', '1', 'not nice', 'Friday, May 19, 2023'),
(23, 'n', '4', 'jhh', 'Friday, May 19, 2023'),
(24, 'o', '4', 'm', 'Friday, May 19, 2023'),
(25, 'isha', '3', 'good', 'Saturday, May 20, 2023');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `review_text` text DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `product_id`, `username`, `review_text`, `rating`, `timestamp`) VALUES
(1, 1, '1', 'nootttt', 4, '0000-00-00 00:00:00'),
(2, 1, 'this is product2', 'i like it', 3, '0000-00-00 00:00:00'),
(3, 1, '1', 'i like it', 4, '0000-00-00 00:00:00'),
(4, 1, '1', 'hi', 3, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `name`, `image`, `price`) VALUES
(1, 'TIE-DYE KAFTAN', 'IMG_7998.JPEG', 7000),
(2, 'TIE-DYE-KAFTAN', 'IMG_0264.JPEG', 7000),
(3, 'TIE DYE PANTS', 'IMG_8693.JPEG', 2500),
(4, 'LUREX PANTS', 'IMG_8706.JPEG', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `star_rating`
--

CREATE TABLE `star_rating` (
  `product_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `rating` int(6) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_r`
--

CREATE TABLE `user_r` (
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_r`
--

INSERT INTO `user_r` (`name`, `email`, `password`, `user_type`) VALUES
('Tina', 'tina66@gmail.com', '46d045ff5190f6ea93739da6c0aa19bc', 'user'),
('Tina', 'tina45@gmail.com', 'a009d1b6599be4dd7aff23fc3630b093', 'user'),
('bolly', 'bb@gmail.com', '52b90f2cfef628e2b5a4d947e68532a0', 'user'),
('bobby', 'bob45@gmail.com', '21169720ef3c621697d7662927fb35ec', 'user'),
('kiki', 'ki456@gmail.com', '8458137ceedff74d62468a2c7361976c', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`name`, `price`, `image`, `id`) VALUES
(' TIE-DYE KAFTAN', 7000, 'IMG_7998.JPEG', 7),
('TIE-DYE-KAFTAN', 7000, 'IMG_0264.JPG', 8),
('LUREX PANTS', 3000, 'IMG_8706.JPEG', 9),
('TIE DYE PANTS', 2500, 'IMG_8693.JPEG', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_rating`
--
ALTER TABLE `product_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `star_rating`
--
ALTER TABLE `star_rating`
  ADD PRIMARY KEY (`product_id`,`user_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_rating`
--
ALTER TABLE `product_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
