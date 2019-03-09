-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 22, 2018 at 11:09 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `virtuekartss`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartdetails`
--

CREATE TABLE `cartdetails` (
  `ser_no` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `image1` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `S.no` int(11) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `address` varchar(5000) NOT NULL,
  `phone_no` varchar(200) NOT NULL,
  `mobile_no` varchar(200) NOT NULL,
  `email_id` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`S.no`, `company_name`, `address`, `phone_no`, `mobile_no`, `email_id`) VALUES
(1, 'VirtueKart', '', '45455455', '9793037873', 'virtuekart@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `iorders`
--

CREATE TABLE `iorders` (
  `orderno` bigint(20) NOT NULL,
  `itemname` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `buyerdetails` text NOT NULL,
  `completed` varchar(5) NOT NULL DEFAULT 'NO',
  `total` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `iorders`
--

INSERT INTO `iorders` (`orderno`, `itemname`, `quantity`, `price`, `buyerdetails`, `completed`, `total`) VALUES
(46, 'SONYMUSIC1', 1, 35000, '<b>Name : </b>Vinushka<br><b>Address : </b>A-410 ,Jalandhar-Delhi, G.T. Road (NH-1),Lovely,Phagwara ,Punjab <br><b>Pincode : </b>144411<br><b>Contact Number : </b>9646692102', 'no', ''),
(47, 'SONYSNTVE2', 1, 10500, '<b>Name : </b>Vinushka<br><b>Address : </b>A-410 ,Jalandhar-Delhi, G.T. Road (NH-1),Lovely,Phagwara ,Punjab <br><b>Pincode : </b>144411<br><b>Contact Number : </b>9646692102', 'YES', ''),
(48, 'SAMSUNG SNCAMERA3', 1, 7500, '<b>Name : </b>Vinushka<br><b>Address : </b>A-410 ,Jalandhar-Delhi, G.T. Road (NH-1),Lovely,Phagwara ,Punjab <br><b>Pincode : </b>144411<br><b>Contact Number : </b>9646692102', 'no', ''),
(49, 'SONYMUSIC1', 1, 35000, '<b>Name : </b>Vinushka<br><b>Address : </b>A-410 ,Jalandhar-Delhi, G.T. Road (NH-1),Lovely,Phagwara ,Punjab <br><b>Pincode : </b>144411<br><b>Contact Number : </b>9646692102', 'YES', ''),
(50, 'LGMUSIC2', 1, 28000, '<b>Name : </b>Vinushka<br><b>Address : </b>A-410 ,Jalandhar-Delhi, G.T. Road (NH-1),Lovely,Phagwara ,Punjab <br><b>Pincode : </b>144411<br><b>Contact Number : </b>9646692102', 'no', ''),
(51, 'SONY SNCAMERA1', 1, 12000, '<b>Name : </b>Vinushka<br><b>Address : </b>A-410 ,Jalandhar-Delhi, G.T. Road (NH-1),Lovely,Phagwara ,Punjab <br><b>Pincode : </b>144411<br><b>Contact Number : </b>9646692102', 'no', ''),
(52, 'VideoconSNTVE3', 1, 18000, '<b>Name : </b>Vinushka<br><b>Address : </b>A-410 ,Jalandhar-Delhi, G.T. Road (NH-1),Lovely,Phagwara ,Punjab <br><b>Pincode : </b>144411<br><b>Contact Number : </b>9646692102', 'no', ''),
(53, 'LGMUSIC2', 1, 28000, '<b>Name : </b>Vinushka<br><b>Address : </b>A-410 ,Jalandhar-Delhi, G.T. Road (NH-1),Lovely,Phagwara ,Punjab <br><b>Pincode : </b>144411<br><b>Contact Number : </b>9646692102', 'no', ''),
(54, 'SONYSNTVE2', 1, 10500, '<b>Name : </b>Vinushka<br><b>Address : </b>A-410 ,Jalandhar-Delhi, G.T. Road (NH-1),Lovely,Phagwara ,Punjab <br><b>Pincode : </b>144411<br><b>Contact Number : </b>9646692102', 'YES', ''),
(55, 'VideoconSNTVE3', 1, 18000, '<b>Name : </b>Vinushka<br><b>Address : </b>A-410 ,Jalandhar-Delhi, G.T. Road (NH-1),Lovely,Phagwara ,Punjab <br><b>Pincode : </b>144411<br><b>Contact Number : </b>9646692102', 'YES', ''),
(56, 'VideoconSNTVE3', 1, 18000, '<b>Name : </b>Vinushka<br><b>Address : </b>A-410 ,Jalandhar-Delhi, G.T. Road (NH-1),Lovely,Phagwara ,Punjab <br><b>Pincode : </b>144411<br><b>Contact Number : </b>9646692102', 'YES', ''),
(57, 'Apple iPhone X', 1, 72999, '<b>Name : </b>Vinushka<br><b>Address : </b>A-410 ,Jalandhar-Delhi, G.T. Road (NH-1),Lovely,Phagwara ,Punjab <br><b>Pincode : </b>144411<br><b>Contact Number : </b>9646692102', 'YES', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ser_no` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ser_no`, `user_name`, `password`) VALUES
(1, 'anil', 'anil246');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ser_no` int(11) NOT NULL,
  `product_code` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `pro_cat` varchar(200) NOT NULL,
  `product_price` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `brand` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `features` varchar(200) NOT NULL,
  `plateform` varchar(200) NOT NULL,
  `model` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `display` varchar(200) NOT NULL,
  `waranty` varchar(200) NOT NULL,
  `shipping_time` varchar(300) NOT NULL,
  `price` varchar(100) NOT NULL,
  `offer_price` varchar(100) NOT NULL,
  `save` varchar(200) NOT NULL,
  `image1` varchar(200) NOT NULL,
  `product_keyword` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ser_no`, `product_code`, `product_name`, `pro_cat`, `product_price`, `description`, `brand`, `category`, `features`, `plateform`, `model`, `type`, `display`, `waranty`, `shipping_time`, `price`, `offer_price`, `save`, `image1`, `product_keyword`) VALUES
(26, 'SNTVE1', 'Samsung SNTVE1', 'tv', '6000', 'Samsung LCD', 'Samsung', 'T.V', '21 \"', 'Samsung', 'Samsung', 'LED TV', 'Samsung', '1 year warranty ', 'within 5-7 working days', '6000', '5500', '500', 'tv1.png', 'samsung,tv,lcd,led'),
(36, 'tre', 'sa', 'camera', 'rrere', 'tretetet', 'retetretr', 'etetreter', 'treetre', 'ertetrtet', 'etetre', 'tretretre', 'etetret', 'retre', 'trr', 'rrere', 'err', 'ere', 'm1.png', 'ewew'),
(7, 'SNCAMERA1', 'CANON SNCAMERA1', 'camera', '10000', 'CANON ', 'CANON ', 'CANON ', 'CANON ', 'CANON ', 'CANON ', 'CANON ', 'CANON ', '1 year warranty ', 'within 5-7 working days', '10000', '9000', '1000', 'camera1.png', 'canon,camera'),
(8, 'SNCAMERA2', 'SONY SNCAMERA1', 'camera', '15000', 'SONY', 'SONY', 'SONY', 'SONY', 'SONY', 'SONY', 'LED ', 'Display Type LED', '1 years', '20-25 dayd', '15000', '12000', '3000', 'camera2.png', 'sony,camera'),
(11, 'SNCAMERA3', 'SAMSUNG SNCAMERA3', 'camera', '8000', 'SAMSUNG', 'samsung', 'SAMSUNG', 'SAMSUNG', 'SAMSUNG', 'SAMSUNG', 'LED ', 'Display Type LED', '1 year', 'within 10-15 days', '8000', '7500', '500', 'camera3.png', 'samsung,camera'),
(12, 'SNCAMERA4', 'NIKON SNCAMERA4', 'camera', '11000', 'NIKON', 'NIKON', 'NIKON', 'NIKON', 'NIKON', 'NIKON', 'LED ', 'Display Type LED', '2 year', 'within 20 days', '11000', '10000', '1000', 'camera4.png', ''),
(15, 'SNM1', 'SONYMUSIC1', 'music', '39000', 'SONYMUSIC', 'SONYMUSIC', 'SONYMUSIC', 'SONYMUSIC', 'SONYMUSIC', 'SONYMUSIC', 'Home Theater', 'Display Type LED', '1 year warranty ', 'within 15-20 working days', '39000', '35000', '4000', 'music1.png', 'sony,speakers,woofers'),
(16, 'SNM2', 'LGMUSIC2', 'music', '30000', 'LGMUSIC', 'LGMUSIC', 'LGMUSIC', 'LGMUSIC', 'LGMUSIC', 'LGMUSIC', 'LGMUSIC', 'LGMUSIC', '2 years', 'within 21 days', '30000', '28000', '2000', 'music2.png', 'lg,speakers,music,woofers'),
(17, 'SNM3', 'PANASONIC SNM3', 'music', '28000', 'PANASONIC ', 'PANASONIC ', 'PANASONIC ', 'PANASONIC ', 'PANASONIC ', 'PANASONIC ', 'Home Theater', 'PANASONIC ', '2 years', '20 days', '28000', '27000', '1000', 'music3.png', 'panasonic,speakers,woofers,music'),
(18, 'SNM4', 'SAMSUNGMUSIC4', 'music', '25000', 'SAMSUNG', 'SAMSUNG', 'SAMSUNG', 'SAMSUNG', 'SAMSUNG', 'SAMSUNG', 'SAMSUNG', 'SAMSUNG', '5 year', '15-20 days', '25000', '24000', '1000', 'music4.png', ''),
(20, 'SNTVE2', 'SONYSNTVE2', 'tv', '11000', 'Sales Package Handset, USB Cable, Charger, Battery', 'SONY', 'SONY', 'Processor A6X Dual Core', 'SONY', 'SONY', 'LED ', 'Display Type LED', '5 years', '20 days', '11000', '10500', '500', 'tv2.png', 'sony,tv,lcd,led'),
(21, 'SNTVE3', 'VideoconSNTVE3', 'tv', '20000', 'Videocon', 'Videocon', 'Videocon', 'Videocon', 'Videocon', 'Videocon', 'LED TV', 'Display Type LED', '1 year warranty ', 'within 15-20 working days', '20000', '18000', '2000', 'tv3.png', 'videocon,tv,lcd,led'),
(22, 'SNTVE4', 'ONIDASNTVE4', 'tv', '25000', 'ONIDA', 'ONIDA', 'ONIDA', 'ONIDA', 'ONIDA', 'ONIDA', 'LED ', 'Display Type LED', '1 year warranty', 'within 30 days', '25000', '24000', '1000', 'tv4.png', 'onida,tv,lcd,led'),
(23, 'SNTVE5', 'LGSNTVE5', 'tv', '28000', 'LG', 'LG', 'LG', 'LG', 'LG', 'LG', 'LED TV', 'Display Type LED', '2 years', '15 days', '28000', '26000', '2000', 'tv6.png', 'lg,led,tv,lcd'),
(24, 'SNTVE6', 'PhilipsSNTVE6', 'tv', '20000', 'Philips', 'Philips', 'Philips', 'Philips', 'Philips', 'Philips', 'LED TV', 'Display Type LED', '2 years ', '20 days', '20000', '19000', '1000', 'tv5.png', 'philips,tv,lcd,led'),
(27, 'SNL1', 'SONY LAPTOP', 'laptop', '40000', ' USB Cable, Charger, Battery', 'SONY', 'SONY LAPTOP', 'SONY LAPTOP', 'SONY LAPTOP', 'SONY LAPTOP', 'SONY LAPTOP', 'Display Type LED', '1 year warranty ', 'within 15-20 working days', '40000', '38000', '2000', 'laptop3.png', 'sony,laptop,computers,laptops'),
(28, 'SNL2', 'LENOVO Laptop', 'laptop', '36000', 'LENOVO Laptop', 'LENOVO', 'LENOVO Laptop', 'LENOVO Laptop', 'LENOVO Laptop', 'LENOVO Laptop', 'LED TV', 'Display Type LED', '1 year warranty ', 'within 15-20 working days', '36000', '35000', '1000', 'laptop2.png', 'lenevo,laptop,computers'),
(29, ' PSP-1004E BL', 'SONY PLAY STATION PSP-1004E BL', 'game', '10000', 'dsfrsetfgrdgtrdhtyh', 'sony', 'iPads ', 'gftgh', 'ghfth', 'ghftrhytuh', 'LED ', 'Display Type LED', '1 year warranty ', 'within 15-20 working days', '10000', '9000', '1000', 'game1.jpeg', 'sony,playstation,games'),
(30, ' PSP-1004E WH', 'SONY PLAY STATION PSP-1004E WH', 'game', '6000', 'dsfrsetfgrdgtrdhtyh', 'sony', 'GFRDTG', 'gftgh', 'ghfth', 'Internal Memory Capacity 16 GB', 'LED TV', 'hjkuhk', '1 year warranty ', 'within 5-7 working days', '6000', '5200', '800', 'game2.jpg', 'sony,playstation,games'),
(31, ' PS2 DUAL PAC', 'SONY PLAY STATION PS2 DUAL PAC', 'game', '12000', 'dsfrsetfgrdgtrdhtyh', 'sony', 'rtgrg', 'tygty', 'ygtyt', 'ytygr', 'htyhutf', 'tyhtfyh', '1 year warranty ', 'within 15-20 working days', '12000', '10000', '2000', 'game3.jpg', 'sony,playstation,games'),
(32, 'SNTVE9', 'samsung SNTVE9', 'tv', '20000', 'dsfrsetfgrdgtrdhtyh', 'samsung', 'iPads & Tablets', 'gftgh', 'ghfth', 'Internal Memory Capacity 16 GB', 'LED TV', 'Display Type LED', '1 year warranty ', 'within 15-20 working days', '20000', '18000', '2000', 'tv8.png', 'samsung,tv,lcd,led'),
(37, 'q', 'Apple iPhone X', 'mobile', '72999', 'iphone', 'apple', 'mobile', 'none', 'ios', 'x', 'handheld', '5.8', '1', '3', '72999', '72999', '0', 'x.jpeg', 'iphone'),
(34, 'MICRO A075', 'CANON SNCAMERA1', 'tv', '8000', '2G Android Dual Core Phablet', 'Micromax', 'Micromax', '8 MP With Video Recording,Front 0.3 MP Digital Camera5.2 Inch (13.20 c) Screen Size,Android 4.0.3 ICS Operating System', 'Android', 'A075', 'LED ', 'Display Type LED', '1 year', 'within 5-7 working days', '8000', '5990', '2010', 'may-16-announcement-of-2014-election-results.png', ''),
(35, 'SNCAMERA4', 'NIKON SNCAMERA4', 'camera', '11000', 'NIKON', 'NIKON', 'NIKON', 'NIKON', 'NIKON', 'NIKON', 'LED ', 'Display Type LED', '2 year', 'within 20 days', '11000', '10000', '1000', 'camera4.png', 'nikon,camera');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `ser_no` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `product_code` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `image1` varchar(500) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `txn_status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopping_cart`
--

INSERT INTO `shopping_cart` (`ser_no`, `email`, `product_code`, `product_name`, `image1`, `quantity`, `price`, `txn_status`) VALUES
(122, 'anildeepak246@gmail.com', 'SNM1', 'SONYMUSIC1', 'music1.png', '1', '35000', ''),
(124, 'anildeepak246@gmail.com', 'SNTVE2', 'SONYSNTVE2', 'tv2.png', '1', '10500', ''),
(125, 'anildeepak246@gmail.com', 'SNCAMERA3', 'SAMSUNG SNCAMERA3', 'camera3.png', '1', '7500', ''),
(126, 'anildeepak246@gmail.com', 'SNM1', 'SONYMUSIC1', 'music1.png', '1', '35000', ''),
(127, 'anildeepak246@gmail.com', 'SNM2', 'LGMUSIC2', 'music2.png', '1', '28000', ''),
(128, 'anildeepak246@gmail.com', 'SNCAMERA2', 'SONY SNCAMERA1', 'camera2.png', '1', '12000', ''),
(129, 'anildeepak246@gmail.com', 'SNTVE3', 'VideoconSNTVE3', 'tv3.png', '1', '18000', '');

-- --------------------------------------------------------

--
-- Table structure for table `static`
--

CREATE TABLE `static` (
  `static_id` int(11) NOT NULL,
  `page` varchar(200) NOT NULL,
  `details` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `static`
--

INSERT INTO `static` (`static_id`, `page`, `details`) VALUES
(1, 'aboutus', '\r\n<font style=\"font-family:Verdana, Geneva, sans-serif; color:#930;\">\r\n\r\n <font style=\"font-family:Verdana, Geneva, sans-serif; color:#930;\">\r\n <font style=\"font-family: Verdana, Geneva, sans-serif;\">\r\n <div style=\"text-align: justify;\"><font face=\"times new roman\" color=\"#000033\"><b>PHPGURKUL Shopping - </b>in full bloom</font></div><div style=\"text-align: justify;\"><font face=\"times new roman\" color=\"#000033\"><br></font></div><div><font face=\"times new roman\"><div style=\"text-align: justify;\"><b style=\"color: rgb(0, 0, 51);\">PHPGURKUL Shopping</b><font color=\"#000033\">, holds the distinction of being the one-stop-destination for quality electronic Products in Central India. It offers an array of world-renowned brands like Apple, Sony, Samsung, LG, Philips, Nokia, Dell, Lenovo, Blackberry, Compaq, Nikon, Canon, Whirlpool, Hitachi etc. all under one roof.</font></div><div style=\"text-align: justify;\"><font color=\"#000033\"><br></font></div><div><div style=\"text-align: justify;\"><font color=\"#000033\">Online shopping - Great Brands, Great Value</font></div></div><div style=\"text-align: justify;\"><font color=\"#000033\"><br></font></div><div><div style=\"text-align: justify;\"><font color=\"#000033\">Apart from 9 mega showrooms in Delhi,&nbsp;</font><b style=\"color: rgb(0, 0, 51);\">PHPGURKUL Shopping</b><font color=\"#000033\">&nbsp;now boasts of a strong presence in the virtual world too. Its website&nbsp;www.phpgurukul.com facilitates safe &amp; convenient online shopping for the customers.&nbsp;</font></div></div><div><div style=\"text-align: justify;\"><font color=\"#000033\">There are many wonderful things that you can do on this website - Get acquainted with the vast number of brands available for each product. Get in-depth information about them, compare the options &amp; select the product of your choice. You can also chat online with our advisors - clear queries &amp; get expert guidance. Plus there are special schemes and offers for the customers. The buying process too is very easy &amp; convenient. Every purchase comes with an assurance of timely delivery, anywhere in India. The happiness does not fade away even after the purchase. The prompt after-sales service keeps the product and your smile intact - year after year.</font></div></div><div style=\"text-align: justify;\"><font color=\"#000033\"><br></font></div><div><div style=\"text-align: justify;\"><font color=\"#000033\">RishtaBehtarZindagi se: A way of life.</font></div></div><div style=\"text-align: justify;\"><font color=\"#000033\"><br></font></div><div><div style=\"text-align: justify;\"><font color=\"#000033\">A bond with a better life, this is the philosophy that we live by and it is reflected in each and every endeavor of the company.</font></div></div><div style=\"text-align: justify;\">&nbsp;</div></font></div></font>\r\n\r\n</font>\r\n\r\n</font>\r\n\r\n\r\n\r\n'),
(2, 'contact', '\r\n<font style=\"font-family:Verdana, Geneva, sans-serif; color:#930;\">\r\n\r\n <font style=\"font-family:Verdana, Geneva, sans-serif; color:#930;\">\r\n <font style=\"font-family:Verdana, Geneva, sans-serif; color:#930;\">\r\n <font style=\"font-family:Verdana, Geneva, sans-serif; color:#930;\">\r\n <font style=\"font-family:Verdana, Geneva, sans-serif; color:#930;\">\r\n <font style=\"font-family: Verdana, Geneva, sans-serif;\">\r\n <font style=\"font-family: Verdana, Geneva, sans-serif;\">\r\n <font style=\"font-family: Verdana, Geneva, sans-serif;\">\r\n <div><b>PHP GURUKUL Shopping</b></div><div><font face=\"Verdana, Geneva, sans-serif\" color=\"#000033\"><br></font></div><div><font face=\"Verdana, Geneva, sans-serif\" color=\"#000033\">&nbsp;Address : &nbsp; &nbsp; &nbsp;New Delhi</font></div><div><font face=\"Verdana, Geneva, sans-serif\" color=\"#000033\"><br></font></div><div><font face=\"Verdana, Geneva, sans-serif\" color=\"#000033\">&nbsp;Email-Id : &nbsp; &nbsp; anuj.lpu1@gmail.com</font></div><div><font face=\"Verdana, Geneva, sans-serif\" color=\"#000033\"><br></font></div><div><font face=\"Verdana, Geneva, sans-serif\" color=\"#000033\">&nbsp;Contact No : &nbsp;+91-9999857868</font></div><div style=\"color: rgb(153, 51, 0);\"><font face=\"Verdana, Geneva, sans-serif\">&nbsp;</font></div></font>\r\n\r\n</font>\r\n\r\n</font>\r\n\r\n</font>\r\n\r\n</font>\r\n\r\n</font>\r\n\r\n</font>\r\n\r\n</font>\r\n\r\n\r\n\r\n'),
(3, 'Privacy&Policy', ''),
(4, 'Terms&Condition', '');

-- --------------------------------------------------------

--
-- Table structure for table `txn_status`
--

CREATE TABLE `txn_status` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `txn_status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `ser_no` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`ser_no`, `name`, `email`, `contact`, `password`) VALUES
(14, 'Anil kushwaha', 'anildeepak246@gmail.com', '9793037873', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `fullname` varchar(30) NOT NULL,
  `contactno` varchar(30) NOT NULL,
  `pincode` varchar(30) NOT NULL,
  `flatno` varchar(30) NOT NULL,
  `area` varchar(30) NOT NULL,
  `landmark` varchar(30) NOT NULL,
  `town` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `quantity` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `itemname` varchar(30) NOT NULL,
  `totalamount` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`fullname`, `contactno`, `pincode`, `flatno`, `area`, `landmark`, `town`, `state`, `quantity`, `price`, `itemname`, `totalamount`) VALUES
('Vinushka', '9646692102', '144411', 'A-410', 'Jalandhar-Delhi, G.T. Road (NH', 'Lovely', 'Phagwara', 'Punjab', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_order_info`
--

CREATE TABLE `user_order_info` (
  `full_name` varchar(40) NOT NULL,
  `contact_number` int(10) NOT NULL,
  `pincode` int(6) NOT NULL,
  `flatno` varchar(60) NOT NULL,
  `area_colony` varchar(60) NOT NULL,
  `landmark` varchar(30) NOT NULL,
  `town/city` varchar(30) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartdetails`
--
ALTER TABLE `cartdetails`
  ADD PRIMARY KEY (`ser_no`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`S.no`);

--
-- Indexes for table `iorders`
--
ALTER TABLE `iorders`
  ADD PRIMARY KEY (`orderno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ser_no`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ser_no`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`ser_no`);

--
-- Indexes for table `static`
--
ALTER TABLE `static`
  ADD PRIMARY KEY (`static_id`);

--
-- Indexes for table `txn_status`
--
ALTER TABLE `txn_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`ser_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cartdetails`
--
ALTER TABLE `cartdetails`
  MODIFY `ser_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `S.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `iorders`
--
ALTER TABLE `iorders`
  MODIFY `orderno` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ser_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ser_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  MODIFY `ser_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
--
-- AUTO_INCREMENT for table `static`
--
ALTER TABLE `static`
  MODIFY `static_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `txn_status`
--
ALTER TABLE `txn_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `ser_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
