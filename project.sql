-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 09:54 AM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(200) DEFAULT NULL,
  `replies` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, NULL, 'Hello there, how can I help you?'),
(7, 'best gifts for birthday', 'Sure!\nCakes, \nGourmet,\nChocolates,\nbouquet, Flowers \n\n\n'),
(8, 'thank you ', 'You\'re welcome! If there\'s anything else you need assistance with or if you just want to chat, feel free to let me know! '),
(9, 'hiii', 'Hey there,\r\nHow may I help you?'),
(10, 'anniversary gifts', 'Sure!\nRing,Bracelets,Chain,\nCustomized photo frames,\nClassic gifts like flowers'),
(11, 'wedding gifts', 'personalized photo frames,\r\ngifting beautiful vases, \r\npicture frames, \r\ncandles, artwork'),
(12, 'graduation gifts', 'laptop, tablet,\r\nsmartphone,\r\nsuit or blazer, dress shirts, or professional accessories like a briefcase or leather portfolio,\r\nBooks'),
(13, 'valentine\'s day gifts', 'photo album filled with cherished memories,\r\nbouquet of roses,\r\nfavorite flowers,\r\nsmartphone, tablet, smartwatch, wireless headphones,\r\nRing,Chocolates'),
(14, 'mother\'s day gifts', 'Gourmet treats,\r\nOutdoor and gardening gifts,\r\nBooks and journals,\r\nSweet,\r\nSentimental gifts'),
(15, 'father\'s day gifts', 'Gourmet treats,\r\nCake,\r\nSweet,\r\nChocolate'),
(16, 'gifts for him', 'Grooming and skincare products,\r\nFashion accessories,\r\nBooks or audiobooks,\r\nSweet'),
(17, 'gifts for her', 'Beauty and skincare products,\r\nHandbags and accessories,\r\nJewelry,Personalized gifts,\r\nclothes'),
(18, 'gifts for kids', 'Soft toys,\r\nGames,\r\nChocolates,\r\nvideogame'),
(19, 'gifts for teenagers\r\n', 'Gaming accessories,\r\nFashion and accessories,\r\nMusic-related gifts'),
(20, 'gifts for grandparents', 'custom photo frames, \r\nengraved jewelry, \r\npersonalized blankets or pillows, \r\nGardening and outdoor gifts'),
(21, 'gifts for friends\r\n', 'personalized photo album or frame,\r\nwireless headphones, a portable Bluetooth speaker, a stylish phone case,\r\nSweet,\r\nChocolates,\r\nHamper'),
(22, 'gifts for coworkers', 'Gift cards,\r\nStationery sets,\r\nBooks or audiobooks,\r\nnovel'),
(23, 'Fashion accessories or apparel', 'Handbags and purses,\r\nJewelry,\r\nBelts,\r\nHats and caps,\r\nSunglasses\r\nWallets and cardholders,\r\nClothes\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(20) NOT NULL,
  `admin_email` varchar(40) NOT NULL,
  `admin_password` varchar(10) NOT NULL,
  `admin_mobile` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_mobile`) VALUES
(1, 'Amisha Chauhan', 'amishachauhan2@gmail.com', 'ami123', 8485607190),
(2, 'Sanskruti Darji', 'sanskrutidarji2@gmail.com', 'san123', 9924333214),
(3, 'Khushbu Parmar', 'khushbuparmar12@gmail.com', 'khu123', 7043562314),
(4, 'Keta Patel', 'ketapatel123@gmail.com', 'ket123', 9898628890),
(5, 'Nikita Parihar', 'nikitaparihar1234@gmail.com', 'nik123', 9998996425),
(6, 'Prince Chauhan', 'princechauhan123@gmail.com', 'pri123', 7878234512),
(7, 'Shubham Sharma', 'shubhamsharma78@gmail.com', 'shu123', 6767991014);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(5) NOT NULL,
  `product_id` int(5) NOT NULL,
  `quantity` int(20) NOT NULL,
  `price` varchar(50) NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `product_id`, `quantity`, `price`, `user_id`) VALUES
(11, 2, 1, '1499', 15),
(12, 105, 1, '1035', 15),
(15, 26, 1, '1256', 6),
(16, 20, 1, '745', 6),
(17, 7, 1, '780', 6),
(22, 100, 1, '1450', 10),
(25, 83, 1, '1795', 7),
(26, 8, 1, '745', 7),
(28, 16, 1, '2450', 3),
(31, 90, 2, '2850', 4),
(32, 9, 1, '800', 4),
(35, 103, 1, '1595', 13);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(1, 'Cakes'),
(2, 'Flowers'),
(3, 'Chocolates'),
(4, 'Hampers'),
(5, 'Plants'),
(6, 'Watch'),
(7, 'Purse'),
(8, 'Fashion and Life style'),
(9, 'Jewellery'),
(10, 'Gourment'),
(16, 'Perfume');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_date` date NOT NULL,
  `user_id` int(30) NOT NULL,
  `feedback_details` text NOT NULL,
  `product_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `feedback_date`, `user_id`, `feedback_details`, `product_id`) VALUES
(1, '2024-04-28', 15, 'Nice Product!!!!', 1),
(2, '2024-04-28', 15, 'Testy Cake!!!', 1),
(3, '2024-04-28', 15, 'Lovely Bouquet Flower', 12),
(4, '2024-04-28', 15, 'Good Product!!!', 23),
(5, '2024-04-28', 6, 'Beautiful Plant Thank You!!! ', 48),
(6, '2024-04-28', 6, 'Good Product Thanks Glorious Gifts!!!', 17),
(7, '2024-04-28', 10, 'Beautiful PurseThank You!!! ', 60),
(8, '2024-04-28', 7, 'Beautiful Product Thank You!!! ', 90),
(10, '2024-04-28', 7, 'Delicious Cake!!!', 11),
(11, '2024-04-28', 3, 'Good Product!!! Thanks', 29),
(12, '2024-04-28', 4, 'Testy Product!!!', 98),
(13, '2024-04-28', 13, 'Beautiful Hamper Thank You!!! ', 33);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orderdetail`
--

CREATE TABLE `tbl_orderdetail` (
  `orderdetail_id` int(11) NOT NULL,
  `order_id` int(40) NOT NULL,
  `product_id` int(40) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `orderdetail_quantity` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_orderdetail`
--

INSERT INTO `tbl_orderdetail` (`orderdetail_id`, `order_id`, `product_id`, `product_price`, `orderdetail_quantity`) VALUES
(1, 1, 1, '3000', 3),
(2, 1, 12, '1055', 1),
(3, 1, 23, '2200', 4),
(4, 2, 17, '1190', 2),
(5, 2, 48, '1295', 1),
(6, 3, 60, '1050', 1),
(7, 4, 88, '4070', 2),
(8, 4, 41, '1222', 1),
(9, 4, 95, '5685', 3),
(10, 5, 90, '1425', 1),
(11, 5, 11, '1350', 3),
(12, 6, 29, '2800', 2),
(13, 7, 98, '1590', 2),
(14, 7, 18, '2490', 2),
(15, 8, 21, '2690', 2),
(16, 8, 33, '1400', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ordermaster`
--

CREATE TABLE `tbl_ordermaster` (
  `order_id` int(5) NOT NULL,
  `ordermaster_date` varchar(200) NOT NULL,
  `ordermaster_status` varchar(20) NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_ordermaster`
--

INSERT INTO `tbl_ordermaster` (`order_id`, `ordermaster_date`, `ordermaster_status`, `user_id`) VALUES
(1, '28-04-2024', 'Confirm', 15),
(2, '28-04-2024', 'Confirm', 6),
(3, '28-04-2024', 'Confirm', 10),
(4, '28-04-2024', 'Confirm', 10),
(5, '28-04-2024', 'Confirm', 7),
(6, '28-04-2024', 'Confirm', 3),
(7, '28-04-2024', 'Confirm', 4),
(8, '28-04-2024', 'Confirm', 13);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(11) NOT NULL,
  `user_id` int(30) NOT NULL,
  `payment_method` varchar(70) NOT NULL,
  `payment_amount` double NOT NULL,
  `order_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `user_id`, `payment_method`, `payment_amount`, `order_id`) VALUES
(1, 15, 'Cash', 6255, 1),
(2, 6, 'Cash', 2485, 2),
(3, 10, 'UPI', 1050, 3),
(4, 10, 'Cash', 10977, 4),
(5, 7, 'Cash', 2775, 5),
(6, 3, 'UPI', 2800, 6),
(7, 4, 'Cash', 4080, 7),
(8, 13, 'Cash', 4090, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(5) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_details` text NOT NULL,
  `product_photo` varchar(80) NOT NULL,
  `product_price` float NOT NULL,
  `category_id` int(5) NOT NULL,
  `product_quantity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `product_details`, `product_photo`, `product_price`, `category_id`, `product_quantity`) VALUES
(1, 'Delectable and Creamy cake', 'A cake that not only tastes excellent but also looks like a piece of art. This delicious cake is filled with yummy cream and a sweet taste and is ideal for someone who has a sweet tooth. Make any occasion special with this exceptionally tasty cake.', 'cake1.webp', 1000, 1, 4),
(2, 'Choco Indulgence Birthday Cake', 'Make your loved your birthday special with this indulgent cake. Boasting a soft and moist texture, this 600-gm cake is a mouth-watering delight, perfect to surprise your loved ones. Beautifully adorned with lovely chocolate decorations, it will truly delight your taste buds. ', 'cake2.webp', 1499, 1, 5),
(3, 'Pink Ombre Mini Birthday Cake ', 'Devour this sweet delight and make your day bright. Made with the finest ingredients, this 300-gm mini cake is baked to perfection and has a soft and moist texture that will delight your taste buds.', 'cake3.webp', 1899, 1, 5),
(4, 'Chocolate Delight Cake', 'The ultimate chocolate cake that will fill any occasion with deliciousness. Send this delectable gooey chocolate cake to a loved one on their birthday or any other special occasion and see them light up with happiness.', 'cake4.webp', 645, 1, 5),
(5, 'Red Velvet Birthday Special Cake', 'Indulge in a journey of deliciousness with this amazingly creamy red velvet cake. Soft and moist, this 600-gm red velvet cake will delight your taste buds. The cake is layered with luscious buttercream frosting that is rich and creamy. Beautifully adorned with delicate red velvet crumbs, each slice is a visual delight and a delightful explosion of flavour that will transport you to paradise.', 'cake5.webp', 1090, 1, 8),
(6, 'Salted Caramel Drizzle Fantasy Cake ', 'Indulge in unforgettable sweetness that will leave you craving for more. Made with the finest ingredients, this half-kg cake is baked to perfection and will delight your taste buds. The cake is topped with buttercream frosting and salted caramel coated on the sides, giving a creamy texture. ', 'cake6.webp', 745, 1, 10),
(7, 'Pristine Cake with Sprinkles', 'Special people deserve special surprises. And what better surprise than a cake that looks great and tastes even better. This yummy creamy cake is made with white and light blue frosting and features colourful sprinkles on top.', 'cake7.webp', 780, 1, 8),
(8, 'Exotic Pineapple Birthday Cake', 'Enjoy fresh pineapples in every slice with this creamy fruit cake. Thanks to the finest ingredients used in its creation, this 600-gm cake boasts a soft and moist texture. The cake is topped with white chocolate decoration and golden pearl coated on all sides. Each bite of this dessert will transport you to a world of pure delight. ', 'cake8.webp', 745, 1, 6),
(9, 'Purple Passion Cake', 'Elevate the vibe of any occasion with this splendid and chic cake. This gorgeous creamy cake is the perfect blend of style and deliciousness. It is filled with yummy frosting and features three edible purple roses on top.', 'cake9.webp', 800, 1, 9),
(10, 'Delectable Chocolate Truffle Birthday Cake', 'Elevate your loved one\'s birthday celebrations with this chocolate cake, a symbol of timeless indulgence. Each slice is a tribute to the enchanting allure of chocolate, with layers of moist sponge cake infused with its deep, dark essence. This half-kg cake is adorned with a luscious chocolate ganache, creating a perfect harmony of flavours and textures. Share this scrumptious creation with your loved one to forge indelible memories on your anniversary celebration. The accompanying acrylic Happy Birthday tag makes this cake even more special.', 'cake10.webp', 745, 1, 6),
(11, 'Choco Chip Loaded Birthday Cake ', 'Unwrap a world of chocolate bliss with this yummy cake. Made with the finest ingredients, this mini cake is baked to perfection and will delight your taste buds. The cake is topped with yummy chocolate ganache that is rich and decadent, along with choco chips coated on its sides. Each bite of this cake is a delightful explosion of flavour that will transport you to paradise. The accompanying acrylic Happy Birthday tag makes this cake even more special.', 'cake11.webp', 450, 1, 0),
(12, 'Floral Enchantment Bouquet', 'Speak the floral tongue of adoration and admiration with Blush Pink Roses, Peach Roses, White Spray Chrysanthemum, Light Pink Alstroemeria, Mauve Limonium and Kamini. Surprise your loved one with this floral extravaganza.', 'flower1.webp', 1055, 2, 11),
(13, 'A Royal Affair', 'Show the intensity of your love with these lovely red roses to your partner. This bunch of beautiful red roses is exquisite enough to liven up your partners mood. These 10 red blooming beauties look even more stunning with the elegant wrapping around them along with a glossy ribbon.', 'flower2.webp', 545, 2, 7),
(14, 'Lilac Morning', 'Sweet avalanche roses, purple alstroemeria, and mauve sprayed chrysanthemums come together in perfect harmony with lavender-sprayed eucalyptus. Lovingly wrapped in a lavender wrap and adorned with a purple tissue ribbon, this bouquet captures the essence of elegance.', 'flower3.webp', 1550, 2, 11),
(15, 'Radiant Blooms', 'Send your loved one a bouquet that will surely add some vibrance to their day. This beautiful floral arrangement contains orange Asiatic lilies that are a symbol of new beginnings. These flowers are the perfect choice for any celebration.', 'flower4.webp', 995, 2, 15),
(16, 'A Walk in the Garden Basket', 'Glorious, luxurious yet humble - Lilac Roses, Green Spray Chrysanthemum, Mauve Limonium and Leather Fern have the old Eden Garden charm. Take a leap of faith in the hues of this royal hamper in English Garden Basket complemented with white stones.', 'flower5.webp', 2450, 2, 15),
(17, 'Serene White Roses Bouquet', 'White roses are very popular, not only because of their immaculate beauty, but also because they symbolize new beginnings and eternal love. These sweet-smelling bunch of flowers are the perfect choice for an occasion that is all about love.', 'flower6.webp', 595, 2, 13),
(18, 'Indigo Charm', 'A floral lavender dream of dried bouquet with corn leaf roses, purple-shaded table palm, corkwood flower, purple statice and white gypso. It blends elegance with a dash of surrealism to create a fitting assemblage for any celebration.', 'flower7.webp', 1245, 2, 13),
(19, 'Floral Fiona', 'A soft and subtle display of affection - aqua pink roses, pink carnations, pink gypso, and kamini bring out the old familiar charm of love and adoration. Perfectly wrapped to make someones day splendid.', 'flower8.webp', 2445, 2, 16),
(20, 'Loving You Forever Roses', 'Make it special with a bouquet that is freshly picked and hand-tied to make your beloved blush. Send her the Loving You Forever Roses and do all things with great love.', 'flower9.jpg', 745, 2, 16),
(21, 'Blushing Love Surprise', 'Surprise your loved one and make their day truly special with this duo. The stunning arrangement features a gorgeous assortment of roses in a cute pink paper bag. These blooms are carefully selected by our floral experts and arranged to create a truly magnificent display. A perfect way to show your love and affection. Crafted to perfection, this 200 gms luscious cake is a delectable expression of affection and features the words I Love You. ', 'flower10.webp', 1345, 2, 15),
(22, 'Premium Couverture Chocolate Hamper', 'Loaded with cocoa butter and a delectable sheen, Classic Smooth Milk, Pink Kiss Himalayan Pink Salt and Nutty delight Roasted Almond couverture chocolates are crafted for an irresistible indulgence. Paired with Peri Peri Almond and Thai Chilli Cashew, the hamper is truly a heavenly intervention.', 'choc1.jpg', 1345, 3, 16),
(23, 'The Masqa Dark Chocolate Bundle', 'An ethereal assortment of dark couverture chocolates - Fiery Smooth, Nutty Delight and Dark Divine, its a chocoholics paradise. Pure, rich chocolate blended with fine ingredients and moulded into luscious bars that tickle your taste buds with bold flavours and textures.', 'choc2.webp', 550, 3, 13),
(24, 'The Masqa Milk Chocolate Bundle', 'A tasteful selection of divine milk couverture chocolates - Classic Smooth, Chewy Crunch and Pink Kiss. It combines rich, delicious milk chocolate with diverse ingredients to create a lip-smacking mouthfeel. One decadent bite leads to another until it satiates you utterly.', 'choc3.webp', 854, 3, 19),
(25, 'Fruit & Nut Hamper with Gift Box', 'A little indulgence hurt nobody. Not even the health-conscious. The array of Chewy Crunch, Spiced Toffee Caramel Barks, Nutty Nibbles and Strawberry Burst is mindfully crafted for them. Fresh and sweet fruits, enrobed in smooth couverture chocolate. Its so good, theyd yearn for more.', 'choc4.webp', 1295, 3, 10),
(26, 'Chocolate Euphoria Arrangement', 'This delectable selection of velvety dark chocolate, and fruity Cranberry all in a lovely pink mug is for just for the loved one you wish to pamper on a special occasion.', 'choc5.jpg', 1256, 3, 19),
(27, 'Exquisite Nibbles Gourmet Hamper', 'Discover pure delight that tantalizes your taste buds and pleases your senses. Packed beautifully in a red eco-friendly box, this hamper includes roasted and salted almonds, peri-peri almonds, thai chilli cashews, black pepper cashews, a pack of assorted chocolates, and two lotus design floral potli. Immerse yourself in a symphony of flavours with the crunchy nuts and add a touch of sweetness with the assorted chocolates. ', 'choc6.jpg', 1245, 3, 17),
(28, 'Sensory Symphony Hamper ', 'Get your loved one a combo of sweetness and fragrance. Arranged beautifully in a blue tray, this hamper includes Velvety Bar milk and dark chocolates, Bespoke Eau De Parfum perfume from Wow Perfumes. It has a masculine woody-citrusy fragrance that lasts up to 8 hours. Since it is apparel friendly, your loved one can spray it directly onto his clothes without damaging them.', 'ha1.jpg', 290, 4, 11),
(29, 'Gourmet Treats in Gift Basket Hamper', 'A joyful union of almond brittle chocolates in a jute bag, caramel-coated crispy treats, fresh gold limonium, disbud, and kamini stems come together in a woody basket, adding an old-world charm to this marvellous hamper, & makes it more alluring & grand.', 'ha2.webp', 1400, 4, 31),
(30, 'A Chocolicious Treat', 'A delicious, lip-smacking hamper - Introducing masqa couverture chocolate bars with almond praline chocolates, chocolate jar cake, with dry table palm, white gypso, and wheatgrass in a vintage-styled macrame basket. Surely a gift your loved ones will swoon over.', 'ha3.jpg', 1200, 4, 12),
(31, 'You Inspire - Gift Set for Her', 'Celebrate the women who inspire you with this thoughtful gift set, perfect for any occasion. The set includes an envelope pendant, pink carnation, and indulgent mixed berry chocolates, presented in a pink tray. Crafted from superior-quality metal, the pendant features a magnetic closure and an engraved steel plate with the words You Inspire.', 'ha4.webp', 1200, 4, 12),
(32, 'Blossoming Beauty - Personalized Birthday Gift Set', 'Elevate her fashion game with this incredible birthday gift. Arranged with love and care, this hamper includes a mustard yellow womens wallet, four gorgeous animal print earrings, and a floral design greeting card with a birthday wish. ', 'ha5.webp', 1550, 4, 6),
(33, 'Personalized Birthday Absolute Choco-nuts Hamper', 'Unwrap a birthday special like never before. This special hamper contains caramelized almonds, two velvety chocolate bars, a jute potli bag, and a personalized mug, arranged beautifully in a box to surprise your special one. Reuse the beige box to store your favourite pieces of jewellery or small artefacts. Personalize the cute mug with a jolly picture of your special person and let them remember you while they sip on their favourite beverage. This hamper is ideal for those with a sweet tooth who always crave something light and delicious.', 'ha6.webp', 1400, 4, 13),
(34, 'Pastel Delight Hamper', 'This lovely hamper is a gift that will WOW your loved ones like never before. This hamper comes in a gorgeous pink tray which you can reuse to store your tiny trinkets. Gift this box of happiness to your friends and family on special occasions like birthdays, anniversaries, and housewarming parties. Tip: You can also give this delicious hamper as a return gift for weddings, birthday parties, etc.', 'ha7.webp', 1340, 4, 23),
(35, 'Picture-Perfect Wishes', 'Plush blooms meet a striking assemblage that serves as a reminder of all the abundance thats yet to come. A mini cake, luxury midnight rose candle, alstroemeria, white button chrysanthemums, daisies, dried peony flowers, eucalyptus and a personalized Polaroid photo for their big birthday bash.', 'ha8.webp', 1290, 4, 9),
(36, 'Succulent in a Hand Holding Ceramic Planter', 'The symbol of endless love, succulents are a great addition to any space. Planted in a gorgeous ceramic pot that is shaped like two hands holding the plant together, this indoor and outdoor plant will elevate the style and energy of any space.', 'pl1.webp', 1000, 5, 12),
(37, 'Purifying Syngonium Plant in a Ceramic Buddha Planter', 'Beautify and purify any space with the gorgeous and easy-to-grow Syngonium plant. Place it anywhere in your house as this plant will grow easily with little care. It comes in a beautiful ceramic Buddha planter that adds some more positive vibes.', 'pl2.webp', 1100, 5, 11),
(38, 'Grow Together Jade Mini Plant', 'Jade is considered a lucky plant and has always been in much demand. Its tiny round leaves grow close together and provide a lush foliage. This plant is easy to maintain. Place it at your workstation or near your window, it is sure to add value to its surroundings.', 'pl3.webp', 595, 5, 22),
(39, 'Tulsi Plant in Jute Wrapping with Plastic Planter', 'Auspicious Tulsi plant loves the tropical temperature. Keep the soil moist but definitely not soggy. Some love to plant them outdoors in a dedicated mandir or stand but you can also keep this in the balcony; the leaves have an invigorating smell. Wrapped in Jute, this comes with a plastic planter.', 'pl4.jpg', 445, 5, 11),
(41, 'Good Fortune Trio - Money, Snake And Jade Plant With Pot', 'Enhance your surroundings with a blend of beauty, resilience, and positive energy. The money plant, known for its prosperity, thrives with minimal care. The snake plant purifies the air, promoting a healthier environment, and the jade plant symbolizes good fortune, adding a touch of elegance. This ensemble is perfect for novice and seasoned plant enthusiasts, effortlessly bringing natures charm indoors. Bring life to your loved ones cherished celebrations by gifting them this plant trio.', 'pl5.webp', 1222, 5, 21),
(42, ' Flourish Bamboo Palm Plant ', 'Providing a lush green foliage, this plant almost reminds one of a tropical resort. This low maintenance, easy to grow plant is also an excellent air purifier which makes it a must have in your home. Add it to your green collection and watch this beauty grow gracefully in its time.', 'pl6.webp', 459, 5, 10),
(43, 'Plants to Adore', 'Placed in set of two ceramic planters with contemporary patterns - pink dracaena and jade plant are ready to soak in some rays as they breathe good vibes and positivity into the air.', 'pl7.webp', 1895, 5, 11),
(44, 'Serenity in Leaves', 'A thoughtful and eco-friendly gift of gratitude. Snake plant in a distinct jute tassel basket is here to make its way as a permanent member on the work desk. Dark green foliage to bring nature closer to sight.', 'pl8.webp', 900, 5, 12),
(46, 'Aglaonema Lipstick in Pink Round Pot', 'Keep the air around you fresh and clean with this 8-inch Aglaonema Lipstick. It offers a very good ornamental value to any home, whether indoors or outdoors, thanks to its humidifying, air purifying, and low-maintenance properties. Comes planted in a chic-pink metal rotund vase for a voguish decor.', 'pl9.webp', 780, 5, 13),
(47, 'Pink Calla Lily Potted Plant Gift', 'A beautiful symbol of rebirth and fresh beginnings, this potted Calla Lily plant is a perfect gift. The pot is wrapped in jute, tied with a pretty ribbon. A flowered friend that can add daily cheer to your loved one, can sit pretty just about anywhere. A fertilizer pouch and care guide is included.', 'pl10.webp', 1190, 5, 13),
(48, 'Aglaonema Wishes', 'Add jazz with a side of comfort to your space with the pleasing Aglaonema Pink Plant. Potted in a blue ceramic planter, the colours embellish the interiors and the plants overall essence improves health and well-being. The perfect gift for those who love to stay motivated.', 'pl11.webp', 1295, 5, 10),
(49, ' 30-Min Delivery Money Plant In Square Glass Vase', 'Surprise your loved ones with a token of good-luck that will will stay with them forever. Get this Money Plant in Square vase for them; low in maintenance, it will add positive vibes and a lush of fresh greenery to the home and their garden. Comes with ribbon adornment for a beautiful surprise.', 'pl12.webp', 1232, 5, 8),
(50, 'Kalanchoe Plant With Ceramic Green Planter', 'A plant to brighten your world with beautiful blooms. With its thick, succulent leaves and clusters of colourful flowers, this plant comes in a ceramic green planter and thrives in various climates. Ideal for both indoor and outdoor settings, the Kalanchoe requires minimal care, making it perfect for busy plant enthusiasts. Tip: To encourage continuous blooming, place the Kalanchoe in a sunny spot and allow the soil to dry slightly between waterings, ensuring a burst of cheerful blossoms year-round.', 'pl13.webp', 1100, 5, 10),
(51, 'Golden Essence Personalized Women Watch', 'Adorn your wrist with timeless elegance in our Round Dial Golden Watch for Women. The 34mm brass dial, cradled in a durable alloy case, exudes sophistication. The adjustable alloy chain strap, resembling a bracelet, ensures a personalized fit. The gold color plating, resistant to tarnish, adds a touch of opulence. Powered by the esteemed PC-21 Japanese Quartz movement, this watch combines style and precision seamlessly, making it a symbol of enduring allure. Boost this watch charm by personalizing it with a name.', 'wa1.webp', 999, 6, 20),
(52, 'Personalized Round Watch Organizer - Wine', 'Keep your precious watches safe, secure and organized with stylish organizer in a wine colour. Made in vegan leather, it features a beautiful velvet finishing inside, can hold up to 5 or 6 watches. Personalize it with an initial for a truly special touch', 'wa2.webp', 1295, 6, 14),
(53, ' Rope Band Jewellery Watch', 'Elevate your style with this timeless accessory. Crafted from durable brass and featuring long-lasting gold-coloured plating, this watch is a symbol of enduring beauty. With its 7-inch adjustable length, it offers a comfortable fit for anyone. The oval dial, encrusted with dazzling CZ stones, exudes timeless charm and luxury. The inner dial is also adorned with sparkling stones, adding to its opulent appeal. You can also gift this masterpiece to your loved ones for their birthdays or special events, making their day truly unforgettable.', 'wa3.webp', 1345, 6, 15),
(54, 'Dainty Chain Jewellery Watch', 'Enhance your wardrobe with this watch, a true epitome of elegance and style. Crafted from high-quality brass, this timepiece is a statement piece featuring intricate Kundan work. This enchanting watch boasts a round dial adorned with dazzling CZ stones, creating a radiant and glamorous aesthetic. With a flexible 7-inch length thats adjustable to suit your preference, it ensures a perfect fit for all wrists. Arriving in a stunning jewellery box, its an ideal gift for loved ones celebrating birthdays or special events.', 'wa4.jpg', 9545, 6, 16),
(55, 'Personalized Round Watch Organizer - Black', 'Keep your precious watches safe, secure and organized with stylish organizer in an elegant black colour. Crafted in vegan leather, it features a beautiful velvet finishing inside, can hold up to 5 or 6 watches. Personalize it with an initial for a truly special touch', 'wa5.webp', 1256, 6, 13),
(57, 'Vibrant Semiprecious Stones And Pearls Jewellery Watch', 'A timeless fusion of tradition and elegance, now in a jewellery watch. Made from high-quality brass, this watch doubles as a stunning Jadau bracelet. It is handcrafted with the finest kundan, vibrant meenakari work, and lustrous pearls, ensuring an unparalleled level of sophistication. The 7-inch length, adjustable for a perfect fit, offers versatility and comfort. Delivered in a breathtaking jewellery box, this watch is an ideal gift or a treasured addition to your collection. You can also gift this watch to the beautiful women in your life and make their day special.', 'wa7.jpg', 1235, 6, 10),
(59, 'Elegant Womens Watch With Personalized Cuff Bracelet Set', 'Let your beloved woman embrace every second in style with this gift set. This stunning gift set features a watch and a cuff bracelet to alleviate all her outfits. The sleek, matte rose gold cuff bracelet, meticulously crafted in stainless steel, bears a personalized name, embodying timeless grace. A meticulously crafted brass watch with a 32mm alloy case, adjustable chain strap, rose gold plating, and anti-tarnish coating, powered by reliable PC-21 Japanese Quartz movement for a perfect blend of style and precision. Gift your love this combo and watch her light up in joy.', 'wa9.webp', 1267, 6, 15),
(60, 'Gold Shimmer Clutch6', 'Add a little vibrance and a whole lot of glamour to your outfits with this gold shimmer clutch cum sling bag that is crafted with faux leather. Its statement look elevates your ensemble and gives it an ethereal touch. Carry it to special occasions and let its unabashed style shine bright.', 'pu1.jpg', 1050, 7, 14),
(61, 'Personalized Handy Wallet WIth Buckle For Women - Grey', 'An easy-to-carry handy wallet for the modern busybee woman. The wallet lets them keep their cash, Ids, cards, and phone in this multi-compartment wallet. The grey PU leather wallet comes with a magnetic closure and a decorative buckle in the front. Personalize with a name.', 'pu2.webp', 1233, 7, 22),
(62, ' Quilted Two-Fold Women Wallet - Personalized - Biege', 'Elevate your style with this sophisticated wallet. Crafted from luxurious vegan leather, it features an elegant quilted design. This chic accessory offers multiple compartments, perfect for organizing cards, currency, coins, and essentials like lipstick or car keys. The detachable wristlet adds versatility, allowing you to carry it as a trendy mini bag. Impeccable design meets functionality, making this wallet a must-have for those who appreciate fashion and practicality. Make it special by personalizing the leather tag with your name, which will be printed in gold vinyl.', 'pu3.webp', 845, 7, 12),
(63, ' Hues Of The Sea Personalized Wallet', 'Here is a wardrobe staple that you cannot miss out on. This versatile women  faux leather wallet with a detachable wristlet can fit in your hand or hang around your wrist. Make use of all its compartments to store your cards and currency, personalize it with an initial and you are ready for the day!', 'pu4.webp', 879, 7, 21),
(64, 'Modern Clutch With Detachable Chain Sling - Pastel Green', 'Stand out from the crowd with this super stylish clutch. Crafted from faux leather, this versatile clutch is every womans dream come true. It is well-built and has a spacious compartment with a small pocket for cash or cards. The invisible push button closure has a chunky and shiny crystal that ensures all your things stay intact and gives it a classy look. The clutch comes with a protective dustproof bag which can be used to store it when not in use. Lightweight and easy to carry, the bag has a detachable long chain strap, which makes it perfect for formal and casual events.', 'pu5.webp', 549, 6, 33),
(65, 'Personalized Aromatic Treats Hamper For Her', 'Let the extraordinary women in your life unwrap joy with this exquisite hamper. Arranged in a pink gift box, it includes assorted cookies, Rage coffee, a tan wallet, and a peach rose candle. The Rage coffee perfectly complements the cookies with its rich aroma and sweet taste, giving her a delightful evening. The wallet is made of vegan leather and has multiple compartments to store cards and currency. Add your beloved wifes name to the wallet and make sure she cherishes it for a long time. An accompanying acrylic tag that says, You Mean Everything To Me, makes this hamper even more special.', 'pu6.webp', 1560, 6, 22),
(66, 'Personalized Aromatic Treats Hamper For Her', 'Let the extraordinary women in your life unwrap joy with this exquisite hamper. Arranged in a pink gift box, it includes assorted cookies, Rage coffee, a tan wallet, and a peach rose candle. The Rage coffee perfectly complements the cookies with its rich aroma and sweet taste, giving her a delightful evening. The wallet is made of vegan leather and has multiple compartments to store cards and currency. Add your beloved wifes name to the wallet and make sure she cherishes it for a long time. An accompanying acrylic tag that says, You Mean Everything To Me, makes this hamper even more special.', 'pu6.webp', 1500, 7, 12),
(67, ' Modern Clutch With Detachable Chain Sling - Pastel Green', 'Stand out from the crowd with this super stylish clutch. Crafted from faux leather, this versatile clutch is every woman dream come true. It is well-built and has a spacious compartment with a small pocket for cash or cards. The invisible push button closure has a chunky and shiny crystal that ensures all your things stay intact and gives it a classy look. The clutch comes with a protective dustproof bag which can be used to store it when not in use. Lightweight and easy to carry, the bag has a detachable long chain strap, which makes it perfect for formal and casual events.', 'pu5.webp', 1233, 7, 12),
(68, 'Personalized Wallet with Wristlet - Turqouise', 'Versatile and truly stylish, this pop-coloured Diamante textured PU pouch is convenience max. Place your phone, cards, make-up and carry it as a wristlet or use it as a kit bag in your handbag. What is better, you can personalize the charm with an engraved name and gift it to your girlies.', 'pu7.webp', 1000, 7, 10),
(69, 'Smart Personalized Wallet For Women - Grey', 'This handy wallet will store all important stuff together while you can travel or shop with ease. With multiple slots and compartments for IDs, cash, cards and more; this grey PU leather wallet has a textured flap that closes with a twist button closure. Personalize with a name.', 'pu8.jpg', 999, 7, 12),
(70, 'Sunshine Rayon Kurta Pant Set', 'Its soft colours instantly capture your attention, the floral print adds simplicity and soft rayon fabric completes the modish look of this light yellow kurta pant set. Crafted to elevate your look for the next big gathering, it is sophistication at its best.', 'clo1.webp', 1225, 8, 15),
(71, 'Clear Skies Chanderi Anarkali', 'Weaved to enhance your grace, this block-printed chanderi anarkali dress is a dreamy addition to your wardrobe. Its delicate gota patti work lends elegance. The sort that complements every occasion. Don it on your next big day to up the style quotient of the celebration. ', 'clo2.webp', 1345, 8, 17),
(72, 'Quirky Brown Short Kurta Pant Set ', 'Here is a boss woman look! Woven in cotton, this short kurta pant set exudes style. The small bootis embroidered on the kurta add refinement to its overall look. Don it for work or for an evening gala, it is a wardrobe essential that you just wont get over.', 'clo3.webp', 1795, 8, 19),
(73, 'Fine Fawn Poly Cotton Kurta Set for Men', 'The choicest festive wear set for men, don yourself in it and let the celebrations begin. It includes a fawn poly-cotton kurta adorned with thread and sequins embroidery all over, along with an off-white cotton churidar to enhance the look.', 'clo4.webp', 975, 8, 19),
(74, 'Deep Red Muslin Kaftan Set ', 'Truly a stunner, this shibori kaftan set makes an impression. Crafted with soft muslin fabric, it comprises a printed V-neck kaftan top with a tie-up and a printed bottom. Deep colours, a stunning print and a balanced design come together to turn this outfit into a creative ensemble.', 'clo5.webp', 1545, 8, 20),
(75, 'Stylish Chikankari Women Kurta - White', 'Step into elegance and grace with this white cotton kurta adorned with exquisite Chikankari work. Crafted from premium-quality cotton, the kurta offers unmatched comfort and is perfect for any season. The intricate Chikankari embroidery, meticulously handcrafted by skilled artisans, adds a touch of sophistication. The kurta is fashioned with a round neck pattern and has full sleeves. Whether you are attending a puja, celebrating an event or going for a casual outing, this kurta will make you stand out with its effortless style.', 'clo6.webp', 695, 8, 23),
(76, 'Bandhani Print Art Silk Kurta Set for Men ', 'Crafted to perfection, this kurta and churidar set for men, welcomes the festive season in all its glory. With a touch of tradition, it elevates your style and complements the celebrations. A green khadi bandhani print art silk Kurta with stitch lines all over, paired with an off-white churidar.', 'clo7.webp', 1475, 8, 24),
(77, 'Floral Printed Rayon Straight Kurta', 'A perfect combination of traditional and modern prints, this rayon printed kurta has floral and geometrical motifs. The small keyhole neck has tying tassels. The sleeveless kurta comes with optional sewable cap sleeves. An absolutely light and comfortable daily wear.', 'clo8.webp', 575, 8, 10),
(78, 'Pastel Georgette Kurta Set for Men', 'Just as your chirpy festive spirit, this kurta and churidar set for men marks the celebrations in the air. It includes a georgette kurta with allover self and sequins embroidery and threadwork on the collar and placket and is paired with a white cotton churidar for a comfy feel.', 'clo9.webp', 2560, 8, 18),
(79, 'Aquamarine Rayon Chanderi Kurta Pant Set', 'The pleasing aquamarine meets the glamourous silver in this rayon chanderi lining kurta with 3/4th sleeves and matching solid pant. The white and silver lotus khari print, the silver embroidery on the yoke and on buttons in the back, and the silver gota lace on the joints; all add to its beauty.', 'clo10.webp', 1290, 8, 16),
(80, 'Black Love Poly Cotton Kurta Set for Men', 'Looking to up your style quotient for the festive season? A kurta and churidar set for men is surely a suave fix. Inclusive of a poly-cotton printed kurta with stitch lines and sequins embroidery all over, it is paired with a white comfy cotton churidar.', 'clo11.webp', 1267, 8, 17),
(81, 'Coral Charms Cotton Kaftan Set ', 'Inspired by the mesmerizing colours of the sea, this printed kaftan set is all-glamourous. Inclusive of cotton top and bottom, the kaftan is adorned with pretty gota patti work, making it festive yet trendy. Plus the outfit is one-of-a-kind, so you are sure to stand out at any event.', 'clo12.webp', 1245, 8, 18),
(82, ' Grey Art Silk Kurta and Nehru Jacket Set for Men', 'A 3-piece festive set for men that adds versatility and sophistication to the celebrations. A grey art silk kurta and churidar, paired with a grey printed art silk bandi jacket for a one-of-a-kind look. Additionally, you can style the jacket in many other ways to amp up your festive ensemles.', 'clo13.webp', 2250, 8, 18),
(83, 'Mellow Yellow Jacquard Kurta Set for Men', 'With a soothing colour and a comfortable feel, this kurta and churidar set for men is inspired by the festivities themselves. It includes a yellow jacquard kurta embellished with silver studded buttons and is paired with a white cotton churidar to complete the look.', 'clo4.webp', 1795, 8, 19),
(84, 'Personalized Cuff Bracelet for Girls', 'A thoughtful and stylish gift for your kiddo, it will make her special day memorable. A cuff bracelet that is personalizable with a name. The unique design and trendy heart motif only make it that much more swoon-worthy.', 'j1.webp', 1295, 9, 19),
(85, ' Personalized Open Heart Pendant Chain', 'Nothing says love like a fine piece of jewellery. Get this gift for family or friends and let it fill their hearts with joy. A Gold Pendant Chain with movable studded halves. When closed, they form a heart shape. When opened they reveal an adorable motif that can be personalized with an initial.', 'j2.webp', 1245, 9, 10),
(86, ' Shining Symphony Envelope Pendant Chain And Cuff Bracelet - Personalized', 'A chic silver combo curated to match her distinctive persona. This stunning combo consists of a 2cmX1.25cm envelope pendant with a 16-inch chain, plus a two-inch extension and a sleek matte silver cuff bracelet crafted in stainless steel. Perfect for daily wear, the pendant is made of superior-quality steel and has a magnetic closure. Inside the envelope is a cute steel plate with a personalized message engraved. The bracelet and the pendant chain have anti-tarnish plating. Personalize the bracelet with a name and the pendant with a message to make the combo a unique gift for any occasion.', 'j3.webp', 1145, 9, 19),
(87, ' Personalized Envelope Rose Gold Pendant', 'Wrap your love as a gift around your special girl neck. Here is an incredibly thoughtful gift for your mom, partner or friend. An envelope Rose Gold Pendant Chain with a message card that can be pulled out. On one side there is a message My Love and the other side can be personalized with a name.', 'j4.webp', 1130, 9, 19),
(88, 'Pink Mini Jewellery Organizer With Envelope Pendant - Personalized', 'The perfect gift for your fashion-forward family member. This combo includes a 2cmX1.25cm pendant with a 16-inch chain, plus a two-inch extension and a pink vegan leather mini organizer with hooks, an elastic pocket, along with a bottom compartment featuring adjustable dividers, ring holders, and a zip closure. The envelope pendant is made of superior-quality steel and has a magnetic closure. Inside the envelope is a cute steel plate with a personalized name engraved. Personalize the organizer with your name and initial, and add their name to the pendant to make it a special gift.', 'j5.webp', 2035, 9, 18),
(89, 'Personalized Ring to Bracelet Gift', 'Pamper her with trendy jewellery that is crafted to complement her fab style. A finger ring that can convert to a bracelet and can be personalized with initials. Perfect for everyday wear or for a special occasion, their statement styles are truly unique. Just like her.', 'j6.webp', 1275, 9, 10),
(90, 'The Ring Pendant', 'Express your fondness with The Ring Pendant. It is another edition of grace, elegance & luxury added to her wardrobe. It compliments any outfit and the shine of the CZ studded diamonds on the golden ring stands out. The perfect gift for special moments.', 'j7.webp', 1425, 9, 15),
(91, 'Personalized Men Cuff Bracelet - Gold Plated', 'If you know a man who owns his glamorous side with pride, then this glinting cuff bracelet is for them. The stainless steel bracelet has a high glossy finish gold plating and can be personalized with a name. Go on! gift this bracelet and let them show the world how men can make glam look cool.', 'j8.webp', 1235, 9, 17),
(92, 'Shinning Grace - Personalized Two Tone Pendant Chain And Cuff Bracelet Set', 'Celebrate love with this exquisite gift set. Nestled in a charming jewellery box, this set features a stunning cylindrical pendant chain and a chic cuff bracelet, both crafted from premium stainless steel. The unisex design boasts a captivating matte finish with a sophisticated two-tone blend of silver and gold. Elevate your special occasions with this timeless expression of affection - a symbol of enduring love that transcends style boundaries. Make this gift set special by adding a name to the pendant and bracelet.', 'j9.webp', 1190, 9, 10),
(93, 'Stellar Zodiac - Personalized Pendant Link Chain - Aries', 'Elevate your handsome man style with this striking link chain. This silver-grey link chain is a timeless accessory that exudes strength and style. This chain is made from brass for durability and features a stainless steel rectangular pendant with a zodiac sign. The versatile design of the chain complements any attire and is ideal for daily wear. Add his name to the rectangular pendant and make it truly special. You can also gift this to friends, family, or colleagues who love to accessorize.', 'j10.webp', 1050, 9, 15),
(94, 'For My Stylish Man - Cufflinks And Pocket Square Set - Personalized', 'Give your loved one a gift to look his best. This cufflinks and pocket square set comes in a small wooden box and features the words For My Stylish Man printed creatively. The blue pocket square is made of satin silk and has a mesmerizing chevron pattern. The pocket square pairs well with suits, blazers, and Nehru jackets. The black round cuff links are made of high-quality materials and have a matte finish. Personalize the cufflinks with their initials and make this set truly special. You can also gift it to your friends, family or colleagues on special occasions.', 'j11.webp', 1045, 9, 14),
(95, 'Assorted Dry Fruit Sweets (25 Pcs)', 'The joyous celebrations get a contemporary makeover with this Assorted Dry Fruit Sweets Pack. It is a delightful collection of laddu made from badam, pista, rose petal, Coconut, choco-chip, and berry. Make it a part of your celebration for grand feast of tummy-filling sweetness.', 'g1.webp', 1895, 10, 12),
(96, 'Indulgent Couverture Chocolate Hamper', 'Freshly handpicked strawberries enrobed in fine chocolate as Strawberry Bust Pebbles, Chewy Crunch Fruit and Nut and Pink Kiss Himalayan Pink Salt premium couverture chocolates of finer textures and delicious Almond Praline, coalesce to create this divine assortment that will hit the sweet spot.', 'g2.webp', 1395, 10, 30),
(97, 'Assorted Caramel Ganache', 'It is indulgent, it is flavorsome and it is truly yummy! Citrus Ganache, Strawberry, Mango, Hazelnut and Pistachio Rabri come together to create this indulgent experience, perfect to mark a special day for your loved ones. Plus it provides a delicious mouthfeel that adds to the celebration.', 'g3.jpg', 1560, 10, 18),
(98, 'Gourmet Snacks Gift Hamper', 'Elevate your moments of joy with this hamper loaded with delectable treats. Discover the perfect balance of sweetness and crunch with centre-filled choco-cookies, complemented by the rich flavours of Velvety Bar roast almonds and mixed berries chocolates. Savour the premium-quality pistachios and succulent raisins that add a touch of sophistication to this exquisite collection. Each element is thoughtfully arranged, promising a sensorial journey that captures the essence of indulgence.', 'g4.webp', 795, 10, 28),
(99, 'Crunchy Munchy Treat Tray ', 'Whether it is your morning or your evening time make it special with the Crunchy Munchy Treat Tray. It is a splendid serving of all things sweet and nice. It comes in a paper tray and has the original blend of rage coffee along with waffle cookies and caramel almonds.', 'g5.webp', 1340, 10, 20),
(100, ' Chocolates All The Way Gift Tray', 'A beautiful gift for celebratory occasions. Arranged in a pink tray, discover the premium taste of almonds and the fruity burst of strawberry dragees. As a delightful finish, relish the heavenly combination of Masqa Pink Kiss and Nutty Delight chocolates. Each bite promises a fusion of sweetness and savoury elegance, making it an impeccable gift for any occasion.', 'g6.webp', 1450, 10, 15),
(101, ' Same Day Delivery Personalized Mug N Nuts Hamper', 'A mix of healthy treats and utility, the birthday hamper is crafted for the senior folks out there. Inclusive of a ceramic white mug with a Happy Birthday wish and personalizable with a picture along with Caramel Almonds and Black Pepper Cashews, it is a fitting surprise to make feel young at heart.', 'g7.webp', 1290, 10, 17),
(102, 'Symphony Of Gourmet Delights Hamper', 'Give your loved ones a reason to pamper themselves with this fantastic hamper. Packaged in an eco-friendly box, this hamper includes a candle, Masqa Dark Divine and Pink Kiss Chocolates, Masqa Strawberry Burst, roasted and salted almonds, and cashews packed in a leaf-embroidered golden potli. This luxurious assortment features a candle to set the mood. Finally, savour the roasted and salted almonds and cashews to delight your taste buds. Gift this hamper to your loved ones on special occasions, making it memorable.', 'g8.jpg', 1495, 10, 15),
(103, 'Sweet Gourmet Delights', 'Filled with sweet and delicious treats like chocolate-coated almonds, center-filled chocolate cookies and kaju katli, this gift hamper is a food lovers dream come true. Also included in this hamper is a luxury southern magnolia candle with fragrance that is truly mesmerizing.', 'g9.webp', 1595, 10, 15),
(104, ' Irresistible Fusion Laddoo - 24 Pcs', 'Convey your love and blessings with this sweet and savoury gift as you celebrate the festival of lights. This exquisite assortment includes pista lounge, kesar coconut, dry fruit honey, Sonali delight, rose cashew, kesar badam lounge, rose petal, and butterscotch laddoos. This thoughtfully curated assortment is a unique blend of flavours that promises to add a touch of uniqueness to your Diwali celebrations. Gift this scrumptious assortment of laddoo to your friends and family, wishing them a prosperous Diwali.', 'g10.jpg', 1990, 10, 20),
(105, 'Gourmet Sweet And Savoury Nuts Hamper', 'Elevate your cherished moments, create memories, and immerse yourself in gourmet wonders. Arranged in a yellow tray, this hamper includes roasted and salted almonds, black pepper cashews, choco-coated almonds, and floral potli. Roasted to perfection, these premium almonds unveil a rich, nutty essence, while the black pepper cashews add a touch of spice. The choco-coated almonds are a decadent treat for people with a sweet tooth. You can also reuse the floral potli to store tiny jewellery. Whether treating yourself or sharing it with a loved one, this hamper is perfect for any occasion.', 'g11.jpg', 1035, 10, 18),
(106, 'Unisex Perfume With Personalised Bottle', 'The scents of fruit, amber, and a hint of spice will have everyone asking about the essence of this Unisex Perfume. Add a name to the bottle to make it an extra special gift and let it add cheer and excitement to their special day.', 'per1.webp', 525, 16, 16),
(107, 'Passionate Love Personalized Couple Perfume Set', 'Indulge in the sweet symphony of love with this couples perfume combo. This combo features two perfumes curated to envelop you in a captivating aura of fragrance. For her, an enchanting fragrance harmonizes fresh citrus with floral hints, blending leather combined with suede and vetiver to create a musky scent. For him, embark on a sunny journey with pineapple and black currant top notes, followed by musk and amber hints for intriguing adventures. Personalize the spherical bottles with your names and make them truly yours. This perfume combo is the ideal gift for your loved ones. ', 'per2.webp', 1675, 16, 15),
(108, ' Charms Necklace And Black Jack Perfume Personalized Gift Set For Men', 'The perfect gift for your handsome man who loves fashion and fragrance! This chic combo features a men necklace and Black Jack perfume. The chain boasts multiple charms, with one displaying a personalized name, giving it a trendy and cool vibe. The perfume has a woody, citrusy fragrance that lasts up to 8 hours. Being apparel-friendly, he can spray it directly onto his clothes without causing damage. It is the ideal gift for men who appreciate smelling good and have a keen eye for fashion in all its forms.', 'per3.webp', 795, 16, 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(11) NOT NULL,
  `user_mobile` bigint(50) NOT NULL,
  `shipping_address` text NOT NULL,
  `shipping_name` varchar(50) NOT NULL,
  `order_id` int(20) NOT NULL,
  `shipping_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `user_mobile`, `shipping_address`, `shipping_name`, `order_id`, `shipping_date`) VALUES
(1, 9898126055, '26, Shayona Apartment, New Ranip, Ahmedabad', 'Zoya Qureshi', 1, '28-04-2024'),
(2, 9876543210, '50, Bright Society, Maninagar, Ahmedabad', 'Juhi Chauhan', 2, '28-04-2024'),
(3, 8901234567, '60 , Vishwakarma society, Shahibag, Ahmedabad', 'Ananya Kishor', 3, '28-04-2024'),
(4, 8901234567, '60 , Vishwakarma society, Shahibag, Ahmedabad', 'Ananya Kishor', 4, '28-04-2024'),
(5, 7856342513, '10, Sunshine colony, Meghaninagar,Ahmedabad', 'Kabir Mehta', 5, '28-04-2024'),
(6, 2345123456, '15, Punit Apartment, Nirnaynagar, Ahmedabad', 'Dhriti Mistry', 6, '28-04-2024'),
(7, 5678231410, ' 40, Maruti Society, Ranip, Ahmedabad', 'Nehal Patel', 7, '28-04-2024'),
(8, 4536278967, '50, Shivalik square, Maninagar, Ahmedabad', 'Anika Oberoi', 8, '28-04-2024');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(5) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_gender` varchar(10) NOT NULL,
  `user_dob` date NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(30) NOT NULL,
  `user_mobile` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_gender`, `user_dob`, `user_email`, `user_password`, `user_mobile`, `address`) VALUES
(1, 'Shreyansh Patel', 'Male', '2004-03-15', 'shreyanshpatel123@gmail.com', 'shre1234', '7089', '123, Swaminarayan Avenue, Navrangpura, Ahmedabad, Gujarat, India'),
(2, 'Urvashi Padhiyar', 'Female', '2004-03-25', 'urvashipadhiyar1947@gmail.com', 'asd123', '7043562314', 'B-402, Sunshine Residency, Ghatlodia, Ahmedabad, Gujarat, India'),
(3, 'Dhriti Mistry', 'Female', '1995-01-12', 'dhritimistry123@gmail.com', 'dhri1234', '2345123456', '56, Naranpura Society, Naranpura, Ahmedabad, Gujarat, India'),
(4, 'Nehal Patel', 'Male', '2000-04-05', 'nehalpatel4545@gmail.com', 'neha1234', '5678231410', 'C-23, Satellite Park, Satellite, Ahmedabad, Gujarat, India'),
(5, 'Kyara Patel', 'Female', '1999-06-24', 'kyarapatel123@gmail.com', 'kyar1234', '6767452314', '789, Rajpath Tower, Bodakdev, Ahmedabad, Gujarat, India'),
(6, 'Juhi Chauhan', 'Female', '1999-11-20', 'juhichauhan5656@gmail.com', 'juhi1234', '9876543210', 'D-67, Rosewood Apartments, Maninagar, Ahmedabad, Gujarat, India'),
(7, 'Kabir Mehta', 'Male', '2004-05-15', 'kabirmehta9090@gmail.com', 'kabi1234', '7856342513', '22/A, Silver Oak Society, Thaltej, Ahmedabad, Gujarat, India'),
(8, 'Siddharth Shah', 'Male', '1998-03-22', 'siddharthshah344@gmail.com', 'sidd1234', '6745345678', 'F-45, Shilp Residency, Chandkheda, Ahmedabad, Gujarat, India'),
(9, 'Ishita Choudhary', 'Female', '2003-04-25', 'IshitaChoudhary46@gmail.com', 'ishi1234', '4321098765', '101, Gardenia Greens, Vastrapur, Ahmedabad, Gujarat, India'),
(10, 'Ananya Kishor', 'Female', '2003-06-24', 'ananyakishor23@gmail.com', 'anan1234', '8901234567', 'E-78, Emerald Park, Nikol, Ahmedabad, Gujarat, India'),
(11, 'Zara Siddiqui', 'Female', '2005-06-12', 'zarasiddiqui67@gmail.com', 'zara1234', '8765432109', '456, Harmony Heights, Prahlad Nagar, Ahmedabad, Gujarat, India'),
(12, 'Yusuf Ali', 'Male', '1997-03-25', 'yusufali123@gmail.com', 'yusu1234', '7654321098', 'G-34, Tulip Greens, Science City, Ahmedabad, Gujarat, India'),
(13, 'Anika Oberoi', 'Female', '1999-04-25', 'anikaoberoi45@gmail.com', 'anik1234', '4536278967', '89, Orchid Residency, Jodhpur, Ahmedabad, Gujarat, India'),
(14, 'Mahir Pandya', 'Male', '1999-02-13', 'mahirpandya67@gmail.com', 'mahi1234', '6734764398', '221, Sunflower Enclave, Gota, Ahmedabad, Gujarat, India'),
(15, 'Zoya Qureshi', 'Female', '2000-01-10', 'zoyaqureshi1560@gmail.com', 'zoya1234', '9898126055', ' A-12, Shivalik Villa, Vaishnodevi Circle, Ahmedabad, Gujarat, India');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wishlist`
--

CREATE TABLE `tbl_wishlist` (
  `wishlist_id` int(11) NOT NULL,
  `user_id` int(5) NOT NULL,
  `product_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_wishlist`
--

INSERT INTO `tbl_wishlist` (`wishlist_id`, `user_id`, `product_id`) VALUES
(1, 15, 18),
(2, 15, 3),
(3, 6, 72),
(4, 6, 101),
(5, 6, 35),
(6, 10, 59),
(7, 10, 6),
(8, 7, 37),
(9, 7, 99),
(10, 7, 24),
(11, 3, 26),
(12, 4, 49),
(13, 13, 57);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_orderdetail`
--
ALTER TABLE `tbl_orderdetail`
  ADD PRIMARY KEY (`orderdetail_id`);

--
-- Indexes for table `tbl_ordermaster`
--
ALTER TABLE `tbl_ordermaster`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`,`user_mobile`);

--
-- Indexes for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  ADD PRIMARY KEY (`wishlist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_orderdetail`
--
ALTER TABLE `tbl_orderdetail`
  MODIFY `orderdetail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_ordermaster`
--
ALTER TABLE `tbl_ordermaster`
  MODIFY `order_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  MODIFY `wishlist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
