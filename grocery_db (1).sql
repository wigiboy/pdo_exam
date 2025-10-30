-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2025 at 02:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `grocery_items`
--

CREATE TABLE `grocery_items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT 0,
  `price` decimal(10,2) DEFAULT NULL,
  `supplier` varchar(100) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grocery_items`
--

INSERT INTO `grocery_items` (`item_id`, `item_name`, `category`, `quantity`, `price`, `supplier`, `date_added`) VALUES
(1, 'Milk', 'Dairy', 50, 2.00, 'Cowbell', '2025-10-30 12:17:52'),
(2, 'Eggs', 'Poultry', 100, 7.00, 'Farm Fresh', '2025-10-30 12:17:52'),
(3, 'Rice', 'Grains', 200, 50.00, 'Golden Harvest', '2025-10-30 12:17:52'),
(5, 'Bread', 'Bakery', 40, 35.00, 'Panadero Co.', '2025-10-30 12:17:52'),
(6, 'Bananas', 'Fruits', 80, 20.00, 'Tropical Farms', '2025-10-30 12:17:52'),
(7, 'Cheese', 'Dairy', 25, 90.00, 'Creamline', '2025-10-30 12:17:52'),
(8, 'Chicken Breast', 'Poultry', 45, 150.00, 'AgriPure', '2025-10-30 12:17:52'),
(9, 'Flour', 'Bakery', 55, 65.00, 'Golden Wheat', '2025-10-30 12:17:52'),
(10, 'Cabbage', 'Vegetable', 70, 30.00, 'GreenLeaf Supplies', '2025-10-30 12:17:52'),
(11, 'Apples', 'Fruit', 30, 1.25, 'Fresh Farms', '2025-10-30 12:19:10'),
(12, 'Apples', 'Fruit', 30, 1.25, 'Fresh Farms', '2025-10-30 12:33:00'),
(13, 'Apples', 'Fruit', 30, 1.25, 'Fresh Farms', '2025-10-30 12:41:10'),
(14, 'Apples', 'Fruit', 30, 1.25, 'Fresh Farms', '2025-10-30 12:43:40'),
(15, 'Apples', 'Fruit', 30, 1.25, 'Fresh Farms', '2025-10-30 12:48:25'),
(16, 'Apples', 'Fruit', 30, 1.25, 'Fresh Farms', '2025-10-30 12:49:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grocery_items`
--
ALTER TABLE `grocery_items`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grocery_items`
--
ALTER TABLE `grocery_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- Complex Queries
SELECT * FROM grocery_items WHERE category = 'Fruits';
SELECT * FROM grocery_items ORDER BY price DESC;
SELECT * FROM grocery_items WHERE item_name LIKE '%a%';
SELECT SUM(quantity) AS total_quantity FROM grocery_items;
SELECT AVG(price) AS average_price FROM grocery_items;
SELECT * FROM grocery_items WHERE price > 50;
SELECT category, COUNT(*) AS total_items FROM grocery_items GROUP BY category;
