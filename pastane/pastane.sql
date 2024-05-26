-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 25 May 2024, 14:34:28
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `pastane`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `price`, `created_at`) VALUES
(4, 'Çikolatalı Pasta', 'Pasta', 50.00, '2024-05-25 10:06:29'),
(5, 'Meyveli Pasta', 'Pasta', 45.00, '2024-05-25 10:06:29'),
(6, 'Tiramisu', 'Pasta', 60.00, '2024-05-25 10:06:29'),
(7, 'Sade Kurabiye', 'Kurabiye', 20.00, '2024-05-25 10:06:29'),
(8, 'Çikolatalı Kurabiye', 'Kurabiye', 25.00, '2024-05-25 10:06:29'),
(9, 'Fındıklı Kurabiye', 'Kurabiye', 30.00, '2024-05-25 10:06:29'),
(10, 'Red Velvet Pasta', 'Pasta', 70.00, '2024-05-25 10:06:29'),
(11, 'Cheesecake', 'Pasta', 65.00, '2024-05-25 10:06:29'),
(12, 'Limonlu Kurabiye', 'Kurabiye', 22.00, '2024-05-25 10:06:29'),
(13, 'Brownie', 'Pasta', 55.00, '2024-05-25 10:06:29'),
(14, 'Zıpzıp Pastası', 'Pasta', 27.00, '2024-05-25 10:17:27'),
(15, 'Çıp-Çıp', 'Kurabiye', 27.27, '2024-05-25 10:59:28');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, '21360859024', '$2y$10$SewFfSN7lPz2uYeuSRoKfuNvjhi5p/P.68/53wPffx7/GZq/NJ6IK', '2024-05-24 19:38:32'),
(7, 'buraker', '$2y$10$GuNOwEqrQuRU2ex3Bxmz2eLgcm3DyA6luqgAtXAMlzXsi3tOJjVkG', '2024-05-25 07:26:40'),
(12, 'burakerim', '$2y$10$u92ZhOJMZEfCvn1VNZEz3unbBAlUrtNRR1F/mX4BtKD1mAsyVXn7.', '2024-05-25 11:00:12'),
(13, 'furkan', '$2y$10$T/wTcgJWoRwr.34eRCQcY.ZvIfRrqaHwV9J0Gt2aRpbxl7BmX7Ehm', '2024-05-25 11:00:44'),
(24, 'hikmet', '$2y$10$W6ecvgRMy2j2RQTH5KNZ/.QYuS9mVBhVfvnGGSJUewDCN8KUTMSYe', '2024-05-25 11:06:15'),
(25, 'cagri', '$2y$10$Mc4AXBNqsoZ1SDghTNAiXeiLTJKuz6QLfeF2Rz6KZCrDFCwqmJPOm', '2024-05-25 11:08:35'),
(26, 'sametucar0234@gmail.com', '$2y$10$vuw9gzk3MV1FyJg8Pb827./07JbIap.j7ONYMpou3n/D2B7PCZKBu', '2024-05-25 11:29:13');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
