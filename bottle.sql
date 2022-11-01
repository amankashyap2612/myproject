-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2022 at 11:50 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bottle`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `status`) VALUES
(1, 'Red Wines', 1),
(2, 'White Wines', 1),
(3, 'Vodka', 1),
(4, 'Exclusive Wines', 1),
(5, 'Champagne', 1),
(6, 'Old', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `price` bigint(20) NOT NULL,
  `total` bigint(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `booking_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `price` bigint(20) NOT NULL,
  `total` bigint(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `booking_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`id`, `user_id`, `product_id`, `username`, `productname`, `price`, `total`, `quantity`, `status`, `booking_date`) VALUES
(1, 7, 9, 'Rudra Kashyap', 'THE BOSS ROSÉ - PROSECCO DOC MILLESIMATO BRUT', 3230, 16150, 5, 1, '2009-10-22 11:40:57'),
(2, 7, 9, 'Rudra Kashyap', 'THE BOSS ROSÉ - PROSECCO DOC MILLESIMATO BRUT', 3230, 3230, 1, 1, '2009-10-22 11:41:17'),
(3, 6, 6, 'Rahul', 'Villenoir Riesling', 16800, 50400, 3, 1, '2009-10-22 11:43:11'),
(4, 6, 6, 'Rahul', 'Villenoir Riesling', 16800, 84000, 5, 1, '2009-10-22 11:48:40');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `dimage` varchar(100) NOT NULL,
  `price` varchar(20) NOT NULL,
  `description` longtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  `cat_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `dimage`, `price`, `description`, `status`, `cat_id`) VALUES
(1, 'Villenoir Aged Merlot', '22-10-05-23-48-40photo.jpg', '71565dphoto.jpg', '15000', '<p>Served well-chilled our authentically made Cabernet Sauvignon is a refreshingly delicate dry wine with hints of strawberry, citrus, and peach laced fruit.</p>\r\n', 1, 1),
(2, 'Villenoir Cabernet Sauvignon', '22-10-05-23-54-33photo.jpg', '23699dphoto.jpg', '11000', '<p>Served well-chilled our authentically made Cabernet Sauvignon is a refreshingly delicate dry wine with hints of strawberry, citrus, and peach laced fruit.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 1),
(3, 'Villenoir Pinot Noir', '22-10-05-23-56-24photo.jpg', '49442dphoto.jpg', '18900', '<p>Served well-chilled our authentically made Cabernet Sauvignon is a refreshingly delicate dry wine with hints of strawberry, citrus, and peach laced fruit.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 1),
(5, 'Villenoir Sauvignon Blank', '22-10-05-23-58-52photo.jpg', '1095dphoto.jpg', '69300', '<p>Served well-chilled our authentically made Cabernet Sauvignon is a refreshingly delicate dry wine with hints of strawberry, citrus, and peach laced fruit.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 2),
(6, 'Villenoir Riesling', '22-10-06-00-01-27photo.jpg', '30439dphoto.jpg', '16800', '<p>Served well-chilled our authentically made Cabernet Sauvignon is a refreshingly delicate dry wine with hints of strawberry, citrus, and peach laced fruit.</p>\n', 1, 2),
(7, 'Villenoir RieslingVillenoir Chardonnay', '22-10-06-00-06-45photo.jpg', '45553dphoto.jpg', '23600', '<p>Served well-chilled our authentically made Cabernet Sauvignon is a refreshingly delicate dry wine with hints of strawberry, citrus, and peach laced fruit.</p>\r\n', 1, 2),
(8, 'OLD - VERMOUTH OF TURIN', '22-10-08-09-27-44photo.jpg', '62435dphoto.jpg', '3230', '<p>Taxes included</p>\r\n\r\n<p>I am a Vermouth di Torino in which the wine, the result of the union of #Hashtag and Gentleman, is the protagonist with its varietal notes, in perfect Ferro13 style.&nbsp;Small red fruits, citrus scent and a subtle spiciness make me an elegant Vermouth to drink both smooth and able to enrich great cocktails.&nbsp;Limited edition of 1713 bottles</p>\r\n', 1, 6),
(9, 'THE BOSS ROSÉ - PROSECCO DOC MILLESIMATO BRUT', '22-10-08-09-31-45photo.jpg', '37791dphoto.jpg', '3230', '<p>Taxes included</p>\r\n\r\n<p>I am a strong type, with a strong and balanced character at the same time.&nbsp;I have a bright pink color.&nbsp;My perfume is intense, with delicate hints of white flowers, apple, pear, typical of Prosecco that blend with notes of red fruits.&nbsp;My flavor is fresh, velvety with good acidity.&nbsp;I am savory, with a dry and persistent finish.&nbsp;Velvety, fresh, well balanced, lively with an elegant aftertaste.&nbsp;I have a fine and persistent perlage.&nbsp;I am sociable, my personality and my style fascinate and attract people.&nbsp;I like to be transversal, I like fish crudit&eacute;s appetizers, as well as delicate first and second courses.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 6),
(10, 'HACKER - SANGIOVESE TOSCANA IGT', '22-10-08-09-35-07photo.jpg', '96347dphoto.jpg', '1242', '<p>Taxes included</p>\r\n\r\n<p>Cosmopolitan and sporty, they appreciate me for the structure combined with freshness and for the scent that recalls notes of violet and small red fruits.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 6),
(11, 'GENTLEMAN - PINOT NERO OLTREPÒ PAVESE DOC', '22-10-08-09-37-26photo.jpg', '31818dphoto.jpg', '1325', '<p>Taxes included</p>\r\n\r\n<p>I prefer a classic and elegant style, suit and tie always, even in the vineyard.&nbsp;I&#39;m not exuberant, I prefer to be discovered little by little, they appreciate me for my unique personality and for the scent that recalls notes of red fruits and currants</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 6),
(12, '   HIPSTER - NEGROAMARO PUGLIA IGT', '22-10-08-09-39-47photo.jpg', '99697dphoto.jpg', '990', '<p>Taxes included</p>\r\n\r\n<p>I am a mix of traditions and cultures, my style effortlessly combines t-shirt, sneakers and hat with my always neat mustache.&nbsp;I can be open and mysterious at the same time, my perfume is complex, reminiscent of hints of red berries and currants, and notes of pepper and spices</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 6),
(13, '   HASHTAG - SAUVIGNON', '22-10-08-09-42-14photo.jpg', '44548dphoto.jpg', '1350', '<p>Taxes included</p>\r\n\r\n<p>I am a modern type, sociable, attentive to trends and changes.&nbsp;I live immersed in reality and are an expression of people&#39;s feelings.&nbsp;They appreciate me for my marked acidity and minerality, my scent recalls white flowers and notes of pepper.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 6),
(14, 'THE BOSS MAGNUM - PROSECCO DOC MILLESIMATO EXTRA DRY', '22-10-08-09-44-47photo.jpg', '78973dphoto.jpg', '3064', '<p>Taxes included</p>\r\n\r\n<p>I am a strong type, with a strong and balanced character at the same time.&nbsp;I have a fresh perlage while my perfume recalls fruity and floral notes.&nbsp;I am sociable, my personality and my style fascinate and attract people.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 6),
(16, '  LINK - BRUT ROSÈ', '22-10-08-09-56-24photo.jpg', '37880dphoto.jpg', '900', '<p>Taxes included</p>\r\n\r\n<p>I introduce myself delicately but I am bold and complex.&nbsp;I like to be refined, fresh with a fine and persistent pearly.&nbsp;I have a range of clear and aromatic scents that make me seductive and refined&nbsp;</p>\r\n', 1, 6),
(18, 'Bosscal Mezcal - Joven', '22-10-08-15-16-42photo.jpg', '52398dphoto.jpg', '3700', '<p>Bosscal Joven is unlike any other mezcal. Light smoke, very crisp and smooth with citrus, orange and blood orange with some sweet and tartness, carries a very well-balanced palate.</p>\r\n', 1, 3),
(19, 'Bosscal Mezcal - Damiana', '22-10-08-15-20-00photo.jpg', '1041dphoto.jpg', '4000', '<p>Light smoke, very crisp and smooth with amazing herbal notes from the Damiana flower added into the second distillation with citrus, orange, and blood orange. With some sweet, tartness and floral notes that carries a very well-balanced palate, Damiana is a traditional herb that thrives in the same regions as agave, has been used to this day by the Mexican people and culture and was a favorite of the Aztecs.</p>\r\n', 1, 3),
(20, 'Bosscal Mezcal - Conejo', '22-10-08-15-23-00photo.jpg', '39627dphoto.jpg', '4000', '<p>Bosscal Pechuga De Conejo has a light smoke very crisp and smooth with citrus, orange and blood orange. Also deep within the flavor you may get hints of an amazing apples, mandarin, apricot, plums and quince fruit which all carry with great balance.</p>\r\n', 1, 3),
(21, 'Blood x Sweat x Tears Vodka', '22-10-08-15-25-34photo.jpg', '43008dphoto.jpg', '2200', '<p>Made from hand-selected Pacific Northwest winter wheat and Cascade water, this vodka was awarded a Gold Medal at the prestigious 2020 San Francisco World Spirits Competition.</p>\r\n', 1, 3),
(22, 'Tennessee Straight Bourbon Whiskey', '22-10-08-15-28-11photo.jpg', '10731dphoto.jpg', '10600', '<p>Made from hand-selected Pacific Northwest winter wheat and Cascade water, this vodka was awarded a Gold Medal at the prestigious 2020 San Francisco World Spirits Competition.</p>\r\n', 1, 3),
(23, 'Tom of Finland Organic Vodka', '22-10-08-15-47-51photo.jpg', '90797dphoto.jpg', '2800', '<p>Made from hand-selected Pacific Northwest winter wheat and Cascade water, this vodka was awarded a Gold Medal at the prestigious 2020 San Francisco World Spirits Competition.</p>\r\n', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mobile`, `password`, `email`) VALUES
(1, 'Aman Kashyap', 8130764614, 'aman@123', 'amankashyap2312@gmail.com'),
(2, '', 0, '', ''),
(3, 'arun', 8130764614, 'arun@123', 'arun@gmail.com'),
(4, '', 0, '', ''),
(5, 'Rahul', 8569785425, '', 'rahul@gmail.com'),
(6, 'Rahul', 8569874565, 'rahul123', 'rahul@gmail.com'),
(7, 'Rudra Kashyap', 8756458560, 'rudra', 'rudra@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
