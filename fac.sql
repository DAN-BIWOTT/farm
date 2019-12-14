-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2019 at 06:35 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fac`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `Topic` varchar(55) NOT NULL,
  `brief_summary` varchar(1000) NOT NULL,
  `blog` varchar(1000) NOT NULL,
  `img_dir` varchar(1000) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `Topic`, `brief_summary`, `blog`, `img_dir`, `user_id`) VALUES
(1, 'Burger', 'Very nice Burger', 'This is a burger made from local ingredients of the local area farmers . The burger has local flavors with rich in test.\r\nThe recipe of the burger is as bellow : \r\n1. Grill your meat with salt and pepper .\r\n2. Toast your buns till brown..\r\n3. Chop your onions \r\n4.\r\n5', 'img/blog-img/Nwp8SIV.jpg', 5),
(3, 'Pilau', 'Swahili pilau with mutton ', 'Ingredients	\r\n1. 5 servings\r\n2. 250 g beef\r\n3. 400 g pishori rice, washed and soaked for 15 minutes\r\n4. 2 onions chopped\r\n5. 1/2 tsp turmeric powder\r\n6. 1/2 coriander powder\r\n7. 1/2 cumin powder\r\n8. Vegetable cooking oil\r\n9. 1/2 tsp garlic paste\r\n10. Chopped coriander\r\n11. 3 tomatoes\r\n\r\nSteps	\r\n\r\n60 mins\r\nCut the meat into pieces and wash, then boil with some water, 1 tsp each of ginger and garlic paste, 1 tsp of salt, tsp of black pepper, 1 grated tomato and 1 grated onion.\r\n\r\n  \r\nWhen the meat is tender, drain it and set aside. Keep the soup for cooking rice.\r\n\r\n  \r\nHeat the sufuria on a medium heat and add the oil. Then add the whole spices that is cumin, cardamom, Pepper, cinnamon and cloves. Once they splutter in the oil, add chopped onions.\r\n\r\n  \r\nFry them until translucent while stirring them with a spoon. If you want darker pilau, fry the onions until they are dark and caramelised. Then add tumeric and coriander powder. Let them fry to a few minutes then add the garlic paste an', 'img/blog-img/maxresdefault.jpg', 6),
(4, 'Shawarma', 'Recipe of a testy chicken shawarma ', 'INGREDIENTS\r\nFOR THE CHICKEN \r\n1/2 c. extra-virgin olive oil ,,,,,\r\nJuice of 1 lemon ,,,,,,\r\n3 cloves garlic, minced ,,,\r\n2 tsp. kosher salt ,,,,,,\r\n1 tsp. ground cumin ,,,,,\r\n,Make chicken: In a large bowl, whisk together oil, lemon juice, garlic, and seasonings. Add chicken and toss to coat. Cover and refrigerate for at least 2 hours and up to overnight. ', 'img/blog-img/chicken-shawarma-wrap-with-cucumber-radish-relish.jpg', 6),
(6, 'Ugali Samaki', 'Recipe of Ugali Smaki', 'Ugali recipe .......... 1. Boil water with flour ........... 2. fry the fish .......... 3.Stir the sufuria with flour mixture ........... 4. Boil the sukuma wiki', 'img/blog-img/ugali-fish-880x585.jpg', 6),
(7, 'Pepperoni Cheese Pizza', 'Recipe of the Pepperoni Cheese Pizza ', 'This is a pepperoni BBQ pizza made in lenz pizzas , The pizza is almost 60 cm in diameter and very juicy and cheesy . The recipe is as bellow 1. Work on the dough and leave it overnight 2. Make the topics by baking the pepperoni pizza 3. Preheat the oven 4. 5. 6', 'img/blog-img/20-3-large.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `amount` int(11) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `sold_available` varchar(50) NOT NULL,
  `img_dir` varchar(1000) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `category`, `description`, `amount`, `quantity`, `sold_available`, `img_dir`, `user_id`) VALUES
(6, 'coffee beans', 'dried', 'Coffee beans from the farm ready to sell . Aromatic and very strong in nutrients', 3000, '10kg', 'Sold out', 'img/produce-img/coffee-beans-750-to-850-kg-500x500.jpg', 4),
(7, 'Carrots', 'vegetables', 'Fresh Carrots from the farm . Hand picked from the farm to the market , very fresh .', 200, '3 kg', 'Sold out', 'img/produce-img/vegetables.jpg', 5),
(9, 'Tomatoes', 'fruits', 'Fresh Tomatoes from the farm . Produced and packed my Paul limited . Juicy fresh tomatoes available.', 1000, '10 kg', 'Available', 'img/produce-img/download (1).jpg', 5),
(10, 'Bananas', 'fruits', 'Fresh bananas from Naivasha , Packed and supplied by Paul limited . Very testy bananas.', 5000, '20 kg', 'Available', 'img/produce-img/61fZ+YAYGaL._SL1500_.jpg', 5),
(11, 'Pea nuts', 'dried', 'Fresh peanuts picked and washed carefully , treated carefully during packaging . Very fresh .', 2000, '3 kg', 'Available', 'img/produce-img/ground-nuts-500x500.jpg', 6),
(12, 'Spinach', 'vegetables', 'Very fresh spinach from the farm to the market . Very green and aromatic . Top of the produce this year.', 200, '1 kg', 'Available', 'img/produce-img/fresh-spinach-28palak-29-281kg-29-500x500.png', 8),
(13, 'Mangoes', 'fruits', 'Ripen mangoes available for the market , just farmed yesterday very ripen mangoes available contact for more info .', 5000, '40 kg', 'Available', 'img/produce-img/Mango.jpg', 8),
(14, 'Pinapples', 'fruits', 'Fresh pineapples from the farm ready to be sold', 200, '2 ', 'Available', 'img/produce-img/71+qAJehpkL._SL1500_.jpg', 4),
(16, 'Maize', 'others', 'Fresh maize from Dan farmer ready to be sold to any one . Very fresh produce.', 2000, '7 kg', 'Available', 'img/produce-img/download.jpg', 4),
(17, 'Macadamia', 'dried', 'Macadamia nuts ready to be sold , processed and packed paul limited . Very fresh macadamia', 1750, '4 kg ', 'Available', 'img/produce-img/fine-498__59020.1560439011.jpg', 4),
(18, 'Cotton', 'others', 'Cotton produce from Kericho . Best harvest of the year so far . Very rich i quality.', 3000, '20 kg', 'Available', 'img/produce-img/Cottonplantboll.jpg', 8),
(19, 'Pili pili hoho', 'vegetables', 'Ripe from the farm . Very fresh , aromatic and testy.', 300, '2 kg', 'Available', 'img/produce-img/product-1.jpg', 7),
(20, 'Broccoli ', 'vegetables', 'Very fresh broccoli . Fresh from the garden of Dan limited.', 400, '4 kg', 'Available', 'img/produce-img/product-6.jpg', 4),
(21, 'Garlic', 'others', 'Garlic that are aromatic and very fresh from the garden . Best produce so far .', 20000, '100 kg', 'Available', 'img/produce-img/product-11.jpg', 7),
(23, 'Apples', 'fruits', 'Fresh apples , juicy from the garden and very testy .', 10000, '20 kg', 'Available', 'img/produce-img/product-10.jpg', 7),
(24, 'Onions ', 'vegetables', 'Fresh onions from the farm and best produce of the year . ', 20000, '100 kg', 'Available', 'img/produce-img/product-9.jpg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `names` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `location` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `names`, `email`, `password`, `phonenumber`, `last_login`, `location`, `type`) VALUES
(4, 'Dan Kibiwot Shawn', 'dan@gmail.com', '123', '0795659576', '2019-12-01 12:52:19', 'NAKURU', 'Farmer'),
(5, 'Paul Teya Nyandarwa', 'paul@gmail.com', '123', '0722783710', '2019-12-01 12:54:01', 'NAIROBI', 'Chef'),
(6, 'Hussein Mohamed Ali', 'hussein@gmail.com', '123', '0795659576', '2019-11-28 19:06:00', 'KISII', 'Chef'),
(7, 'Mark Odhiambo Akinyi', 'odhiambo@gmail.com', '123', '0712345678', '2019-11-29 14:08:09', 'NAIROBI', 'Farmer'),
(8, 'Adam Rashid Mohamed', 'adam@gmail.com', '123', '0712345678', '2019-11-29 13:56:09', 'NAKURU', 'Farmer'),
(9, 'vivian', 'viv@gmail.com', '123', '0712966167', '2019-11-28 14:12:31', 'MOMBASA', 'Chef'),
(10, 'ALI', 'ali@gmail.com', 'qwerty', '071111111', '2019-11-28 14:10:45', 'NAKURU', 'Chef'),
(11, 'ALI', 'ali@gmail.com', '123', '0796156315', '2019-11-28 17:30:56', 'MOMBASA', 'Chef');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
