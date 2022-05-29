-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 08:38 PM
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
-- Database: `mobileshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `type`, `name`, `model`, `price`, `img`, `info`) VALUES
(14, 'Phone', 'Samsung', 'Galaxy A52', 219900, '2c53a91bdf2b70f6d4535.jpg', 'Օպերատիվ հիշողություն8 GBՀիշողություն128 GB256 GBՀայտարարության տարին2021\r\nԵրաշխիք\r\n12 months\r\nՀայտարարության տարին\r\n2022\r\nՕՀ տեսակ\r\nAndroid 11\r\nՕպերացիոն համակարգ\r\nAndroid'),
(15, 'Phone', 'Apple', 'iPhone 8 Plus', 349900, '101693.jpg', 'Օպերատիվ հիշողություն3 GBՀիշողություն256 GB\r\nԷկրանի տեսակը\r\nRetina HD display with 3D Touch, widescreen LCD Multi-Touch display with IPS technology\r\nԷկրանի Կետայնություն\r\n1920x1080\r\nԷկրանի չափսը\r\n5.5 դյույմ'),
(16, 'Phone', 'Prestigio', 'Grace B7 7572', 59900, '9c68dd91a0ab29dfd7871.png', 'Օպերատիվ հիշողություն2 GBՀիշողություն16 GB\r\nԴիմային տեսախցիկ\r\n5 MP\r\nՀիմնական տեսախցիկ\r\n13 MP'),
(17, 'Phone', 'Samsung', 'Galaxy Z Flip 3 ', 594900, '3f0d4dfc037ad4b9d326Новый_проект__11_.png', 'Էկրանի տեսակը\r\nSuper AMOLED\r\nԷկրանի Կետայնություն\r\n1080x2640\r\nԷկրանի չափսը\r\n6.7 inch'),
(18, 'Phone', 'Xiaomi', 'Redmi 10', 109900, 'f4b0078efc327235c852New_Project_-_2021-09-11T160853.249.png', 'Էկրանի տեսակը\r\nLCD\r\nԷկրանի Կետայնություն\r\n1080 x 2400\r\nԷկրանի չափսը\r\n6.5 inch'),
(19, 'Phone', 'NOKIA', '8000', 45900, '82c7d25e3b6fa9edaf9f1.png', 'Կշիռ\r\n110.2 g\r\nՀաստություն\r\n12.3 mm\r\nԵրկարություն\r\n132.2 mm\r\nԼայնությունը\r\n56.5 mm\r\nSIM քարտի քանակ\r\nNano-SIM or Dual SIM'),
(20, 'Phone', 'Motorola', 'Moto G5S', 39900, 'c00e0dc4404d269699d02.png', 'Պրոցեսոր\r\nAndroid 7.1\r\nՕպերատիվ հիշողություն\r\n3 GB\r\nՀիշողության քարտի բնիկը\r\nԱյո\r\nՀիշողություն\r\n32 GB'),
(21, 'Tablet', 'iPad', 'Pro 11', 844900, '30fce4f3eff4e56d06553.jpg', ''),
(22, 'Tablet', 'Samsung', 'Galaxy Tab A7', 96900, '5289c1f3798668a6fff52.jpg', 'Էկրանի տեսակը\r\nTFT\r\nԷկրանի Կետայնություն\r\n800 x 1340\r\nԷկրանի չափսը\r\n8.7 inch'),
(23, 'Tablet', 'Xiaomi', 'Pad 5', 234900, '9343b499ed9160152e95Новый_проект__33_.png', 'Էկրանի տեսակը\r\nIPS LCD\r\nԷկրանի Կետայնություն\r\n2560x1600\r\nԷկրանի չափսը\r\n11 inch'),
(24, 'Tablet', 'Samsung', 'Galaxy Tab A 10.1', 134900, '113059.jpg', 'Երաշխիք\r\n12 months\r\nՀայտարարության տարին\r\n2019\r\nՕպերացիոն համակարգ\r\nAndroid'),
(25, 'Tablet', 'Prestigio', 'PMT3197', 39, '0e5d79255f7632f60734Новый_проект__41_.png', 'Prestigio PMT3197 (Blue)'),
(26, 'Tablet', 'iPad', '10.2 Wi-Fi 128GB', 229900, 'da23da352f58ebf755722.jpg', 'Էկրանի տեսակը\r\nRetina IPS LCD\r\nԷկրանի Կետայնություն\r\n1620 x 2160\r\nԷկրանի չափսը\r\n10.2 inch'),
(27, 'Tablet', 'Samsung', 'Galaxy Tab A8', 132900, '61d80851de7c518c4704Новый_проект__79_.png', 'Էկրանի տեսակը\r\nTFT\r\nԷկրանի Կետայնություն\r\n1920x1200\r\nԷկրանի չափսը\r\n10.5 դյույմ'),
(28, 'Smart Watch', 'MyKronoz', 'Watch ZeRound 2', 54900, '9219eed692bda8880bda1.jpg', 'MyKronoz Smart Watch ZeRound 2 HR Premium Silver/Carbon Band'),
(29, 'Smart Watch', 'Samsung', 'Galaxy Watch 4', 149900, '969ab4b98bc1aae2f95cNew_Project__52_.png', 'Samsung Galaxy Watch 4 40 mm R860 (Black)'),
(30, 'Smart Watch', 'Microwear', 'Smart Watch S30', 18900, '58029144d9e725261c9cНовый_проект__2_.png', 'Microwear Smart Watch S30 Silicon (Silver)'),
(31, 'Smart Watch', 'Acme', 'Smartwatch SW301', 39, '8210d9b1dd21d99b74de1.png', 'Acme Smartwatch SW301 (507174) (Black)'),
(32, 'Smart Watch', 'Apple Watch', 'Series 3 GPS', 169, 'd28525fbea6fcafd29031.jpg', 'Apple Watch 42mm Series 3 GPS Space Gray Aluminum Case with Black Sport Band (MTF32)'),
(33, 'TV', 'Samsung', 'UE32T5300AUX', 177900, 'f7425cdb9e10c7b95ed9Новый_проект__1_.png', 'Samsung UE32T5300AUX'),
(34, 'TV', 'Samsung', 'QE55Q80TAUX', 949900, 'b87b0c248ce943721c381.png', 'Samsung QE55Q80TAUX'),
(35, 'TV', 'Samsung', 'UE50RU7470UX', 434, 'c4bc7885fe911e2e09c41.png', 'Samsung UE50RU7470UX'),
(36, 'PC', 'Apple Macbook', 'Pro 13.0/M1', 979900, 'a1419c89d9d9451831151.jpg', 'Apple Macbook Pro 13.0/M1 chip with 8-core CPU and 7-core GPU/512GB SSD/ (MYD92) Space Grey'),
(37, 'PC', 'LENOVO/Legion', 'Y540-17IRH/I5-9300H/2x', 815900, 'f32a530181449f4cd3d91.jpg', 'LENOVO/Legion Y540-17IRH/I5-9300H/2x 8GB SO-DIMM DDR4-2666/17.3 FHD/512GB SSD/GTX 1660 Ti 6GB GDDR6/FreeDOS/81Q400FHRE/Raven Black'),
(38, 'PC', 'Notebook Asus', 'E410M', 245900, '12e209d712fa03d64be8Новый_проект__61_.png', 'PC Notebook Asus E410M (Blue)\r\nԷկրան\r\n14 inch (35.5 cm)\r\nՕպերատիվ հիշողություն\r\n4GB\r\nՕՀ տեսակ\r\nWindows 10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
