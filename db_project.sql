-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2022 at 03:45 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `jenis` varchar(128) NOT NULL,
  `bahan` varchar(128) NOT NULL,
  `ukuran` varchar(128) NOT NULL,
  `banyak` int(255) NOT NULL,
  `jumlah_harga` int(11) NOT NULL,
  `warna` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `email`, `jenis`, `bahan`, `ukuran`, `banyak`, `jumlah_harga`, `warna`) VALUES
(40, 'Lutfy', 'luthfi@gmail.com', 'T-shirt', 'Slik', 'L', 1, 30000, 'Hitam'),
(42, 'firly', 'firly@gmail.com', 'Baju Couple', 'Slik', 'M', 1, 40000, 'Hijau'),
(43, 'ilham', 'ilham@gmail.com', 'Batik', 'Toyobo', 'XL', 42, 8400000, 'Hitam'),
(45, 'raffi', 'rafi@gmail.com', 'Baju Couple', 'Katunah', 'XL', 24, 960000, 'Hijau'),
(52, 'firly', 'firly@gmail.com', 'Kebaya', 'Katun', 'XL', 1, 120000, 'Kuning');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `nama_product` varchar(125) NOT NULL,
  `harga` int(125) NOT NULL,
  `img` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `nama_product`, `harga`, `img`) VALUES
(1, 'Kemeja', 150000, 'ss1.png'),
(2, 'Batik', 200000, 'ss2.png'),
(4, 'Jas', 500000, 'ss3.png'),
(5, 'Jaket', 150000, 'ss4.png'),
(6, 'Hoodie', 80000, 'ss5.png'),
(7, 'Sweater', 70000, 'ss6.png'),
(8, 'Seragam', 50000, 'ss7.png'),
(9, 'Baju Couple', 40000, 'ss8.png'),
(10, 'Kebaya', 120000, 'ss9.png'),
(11, 'T-shirt', 30000, 'ss10.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Kelompok 7\r\n', 'admin@gmail.com', 'default.jpg', '$2y$10$O8YCMXUEteg1du3AcmOj/um0.OsnWhcVgmWa08psskFjBMSfSbmZO', 1, 1, 1669167693),
(2, 'Lutfy\r\n', 'luthfi@gmail.com', 'default.jpg', '$2y$10$QOUs2iZnQV6L9i6xw8YLeu/QRYs1MxacxMPPAp6zXEJ3EJp43LuP2', 2, 1, 1669199441),
(3, 'firly', 'firly@gmail.com', 'default.jpg', '$2y$10$/negRuBsm9EF2H/dYz1/6OBLx.XmHDeDjuNevbCMCGgAX9XtuzkYu', 2, 1, 1669734440),
(4, 'ilham', 'ilham@gmail.com', 'default.jpg', '$2y$10$JAIgw6WXkccN52yqC8BKF.TdG7R8C7AvrweLEix6lJhI4Y/6iwSMu', 2, 1, 1669734558),
(5, 'dina', 'dina@gmail.com', 'default.jpg', '$2y$10$nkubcvHaiZoXr0oy4bMveeabC2sRd4Kuru6T132GfeNHMBowVvIgO', 2, 1, 1669734623),
(6, 'rio', 'rio@gmail.com', 'default.jpg', '$2y$10$J13z/xjy9X77WP0Tzi..p.6yEogh3jcJ1nCYMjwnqvKPmk2O7TZ6S', 2, 1, 1669735883),
(11, 'raffi', 'rafi@gmail.com', 'default.jpg', '$2y$10$Se9Ho1n7BSXu6g6UFBvTs.Wk8YbZ0HGRpnzMpIQju2E5CwOdV7L1u', 2, 1, 1671430092),
(12, 'RIO ADRIAN PUTRAv', 'luthfitt@gmail.com', 'default.jpg', '$2y$10$kBqk9Xzcex.KJ3cttWKHw.vgDap5p9Cwc1POIu1Mg7SwLHpWMYPMi', 2, 1, 1671719991);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
