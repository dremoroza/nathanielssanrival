-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 24, 2023 at 11:55 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nathaniels`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_status` tinyint(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_status`) VALUES
(78, 'Cake', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(25) NOT NULL,
  `contact_email` varchar(32) NOT NULL,
  `contact_subject` varchar(32) NOT NULL,
  `contact_message` text NOT NULL,
  `contact_status` tinyint(2) NOT NULL,
  `contact_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `contact_name`, `contact_email`, `contact_subject`, `contact_message`, `contact_status`, `contact_date`) VALUES
(4, 'abir khan', 'abirkhan@gmail.com', 'Test two', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, '2017-12-28'),
(5, 'abir khan', 'abirkhan@gmail.com', 'Test two', 'Hello, i am abir i need some help.', 0, '2017-12-28'),
(14, 'abcd', 'sumonsarker018@gmail.com', 'Test Message', 'E-Shopper Inc.\r\n\r\n935 W. Webster Ave New Streets Chicago, IL 60614, NY\r\n\r\nNewyork USA\r\n\r\nMobile: +2346 17 38 93\r\n\r\nFax: 1-714-252-0026\r\n\r\nEmail: info@e-shopper.com', 0, '2017-12-28'),
(15, 'mumin', 'mumin@gmail.com', 'Test', 'ddddddddddddd', 0, '2017-12-28'),
(16, 'mumin', 'mumin@gmail.com', 'Test Message', 'Test Message', 0, '2017-12-28'),
(17, 'mumin', 'mumin@gmail.com', 'Test Message', 'Test Message', 0, '2017-12-27'),
(19, 'sumon', 'sumon@gmail.com', 'This is sumon', 'This is sumon', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(55) NOT NULL,
  `cus_lname` varchar(255) NOT NULL,
  `cus_email` varchar(55) NOT NULL,
  `cus_password` varchar(32) NOT NULL,
  `cus_mobile` varchar(14) NOT NULL,
  `cus_address` text NOT NULL,
  `cus_city` varchar(55) NOT NULL,
  `cus_country` varchar(55) NOT NULL,
  `cus_zip` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`cus_id`, `cus_name`, `cus_lname`, `cus_email`, `cus_password`, `cus_mobile`, `cus_address`, `cus_city`, `cus_country`, `cus_zip`) VALUES
(48, 'Sm shuvo', '', 'sumonsarker080@gmail.com', '25d55ad283aa400af464c76d713c07ad', '1611606484', 'Sylhet City', 'Mymensingh', 'Bangladesh', '2220'),
(47, 'Trailer', '', 'Traileralltimesu@gmail.com', '25d55ad283aa400af464c76d713c07ad', '1611606484', 'Sylhet City', 'Mymensingh', 'UK', '2220'),
(49, 'darrel', '', 'test@email.com', '25d55ad283aa400af464c76d713c07ad', '09178974200', 'Sta Ana', 'Taytay', 'Philippines', '1920'),
(50, 'fsdfsdf', '', 'sdfs@fsfsdf.sdfsdf', '25d55ad283aa400af464c76d713c07ad', '09178974200', 'Sta Ana', 'Taytay', 'United_States', '1920'),
(51, 'darrel', '', 'asda@dasd.asdad', '25d55ad283aa400af464c76d713c07ad', '09178974200', 'Sta Ana', 'Taytay', 'Philippines', '1920'),
(52, 'dfdsf', '', 'dfsd@dsadsa.asdasd', '25d55ad283aa400af464c76d713c07ad', '', '', '', '', ''),
(53, 'darrel', '', 'asda@asdasd.sda', '25d55ad283aa400af464c76d713c07ad', '', '', '', '', ''),
(54, 'darrel', '', 'fdsfs@sdasd.asdasd', '25f9e794323b453885f5181f1b624d0b', '', '', '', '', ''),
(55, 'DFSDF', '', 'DSFDS@SDASD.ASD', '25d55ad283aa400af464c76d713c07ad', '', '', '', '', ''),
(56, 'qqqq fdfsd sdfsdf', '', 'qqq@dsdasd.dfds', '25d55ad283aa400af464c76d713c07ad', '', '', '', '', ''),
(57, 'bbbbbbbbb', '', 'bbbbb@email.com', '25d55ad283aa400af464c76d713c07ad', '', '', '', '', ''),
(58, 'sadas asd asdasd', '', '', '25d55ad283aa400af464c76d713c07ad', '09178974200', 'Sta Ana', 'Taytay', 'Philippines', '1920'),
(59, 'fdsfsdf', '', 'asdasd@asdasd.asdasdasd', '25d55ad283aa400af464c76d713c07ad', '09178974200', 'Sta Ana', 'Taytay', 'Philippines', '1920'),
(60, 'vvvvvvv', '', 'vvvvvv@sdasd.sadasd', '25d55ad283aa400af464c76d713c07ad', '09178974200', 'Sta Ana', 'Taytay', 'Philippines', '1920'),
(61, 'darrel', '', 'testing@email.com', '25d55ad283aa400af464c76d713c07ad', '09178974200', 'Sta Ana', 'Taytay', 'Philippines', '1920'),
(62, 'dasdasdasd asdasd', '', 'sadasd@asdas.ad', '25d55ad283aa400af464c76d713c07ad', '09178974200', 'Sta Ana', 'Taytay', 'Philippines', '1920'),
(63, 'dddd weeeee', '', 'dddd@sdsad.sada', '25d55ad283aa400af464c76d713c07ad', '23123123', 'asdasdad', 'dadasdasd', 'Philippines', '12323'),
(64, 'darrel123', '', 'darrel@email.com', '25d55ad283aa400af464c76d713c07ad', '09178974200', 'Sta Ana', 'Taytay', 'Philippines', '1920'),
(65, 'darrel', '', 'test@email.comasdasd', '25d55ad283aa400af464c76d713c07ad', 'asdasd', 'Sta Ana', 'Taytay', 'Philippines', '1920'),
(66, 'darrel', '', 'darrel2@email.com', '25d55ad283aa400af464c76d713c07ad', '1234567', 'fdsfsdf', 'dsadsd', 'Philippines', '1233'),
(67, 'x', 'xxx', 'xxxx@gmail.com', '25d55ad283aa400af464c76d713c07ad', '543534664', 'Sta Ana', 'Taytay', 'Philippines', '1920'),
(68, 'darrel', 'asdasd', 'asdas@adasd.asd', '25d55ad283aa400af464c76d713c07ad', '12312312', 'adasd', 'asdasdasd', 'Philippines', '23123'),
(69, 'asdadas', 'dadasd', 'asdas@ssad.ssdf', 'de1b273dbd349fb5a5cb767d464fd82a', '3123123', 'sfasfsdf', 'sdfsdf', 'Philippines', '23423'),
(70, 'dasdasd', 'wewqe', 'asdas@dsad.asdasd', 'fdf2560caf20831a325a633fab4dd1c4', '09178889999', 'dasdasd', 'Taytay', 'Philippines', '1920');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` float NOT NULL,
  `order_status` varchar(20) NOT NULL DEFAULT 'pending',
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `cus_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `order_date`) VALUES
(105, 64, 89, 108, 340, 'shipped', '2023-04-21 18:07:19'),
(97, 48, 76, 99, 107, 'pending', '2017-12-31 17:01:39'),
(106, 65, 90, 109, 700, 'pending', '2023-04-21 18:13:43'),
(104, 64, 89, 107, 340, 'shipped', '2023-04-21 18:05:57'),
(107, 65, 90, 110, 340, 'pending', '2023-04-21 18:21:44'),
(108, 61, 86, 111, 700, 'pending', '2023-04-22 01:02:52'),
(109, 70, 95, 112, 400, 'pending', '2023-04-24 02:04:06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` int(12) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(5) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` float NOT NULL,
  `sales_quantity` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `sales_quantity`) VALUES
(130, 105, 76, 'Classic Sansrival', 340, 1),
(119, 97, 53, 'Samsung j7', 100, 1),
(129, 104, 76, 'Classic Sansrival', 340, 1),
(131, 106, 78, 'Pistachio Sansrival', 700, 1),
(132, 107, 76, 'Classic Sansrival', 340, 1),
(133, 108, 78, 'Pistachio Sansrival', 700, 1),
(134, 109, 77, 'Mocha Almond Sansrival', 400, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(11) NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending',
  `payment_type` varchar(20) NOT NULL,
  `payment_date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `payment_message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_status`, `payment_type`, `payment_date_time`, `payment_message`) VALUES
(106, 'pending', 'cash_on_delivery', '2023-04-21 18:04:39', ''),
(98, 'pending', 'cash_on_delivery', '2017-12-30 23:45:17', ''),
(97, 'pending', 'cash_on_delivery', '2017-12-30 23:36:17', ''),
(96, 'pending', 'cash_on_delivery', '2017-12-30 23:17:07', ''),
(108, 'pending', 'cash_on_delivery', '2023-04-21 18:07:19', ''),
(107, 'pending', 'cash_on_delivery', '2023-04-21 18:05:57', ''),
(109, 'pending', 'cash_on_delivery', '2023-04-21 18:13:43', ''),
(110, 'pending', 'cash_on_delivery', '2023-04-21 18:21:44', ''),
(111, 'pending', 'cash_on_delivery', '2023-04-22 01:02:52', ''),
(112, 'pending', 'cash_on_delivery', '2023-04-24 02:04:06', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `pro_id` int(11) NOT NULL,
  `pro_title` varchar(255) NOT NULL,
  `pro_desc` text NOT NULL,
  `pro_desc_slider` text DEFAULT NULL,
  `pro_cat` tinyint(4) NOT NULL,
  `pro_sub_cat` tinyint(4) NOT NULL,
  `pro_brand` tinyint(4) DEFAULT NULL,
  `pro_price` float NOT NULL,
  `pro_quantity` tinyint(4) NOT NULL,
  `pro_availability` tinyint(4) NOT NULL COMMENT 'status 1=instock, 2=outof stock, 3= up coming',
  `pro_status` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'status=1 enable status=2 disable',
  `pro_image` text DEFAULT NULL,
  `top_product` tinyint(1) DEFAULT 0 COMMENT 'show top value=1 other wise value=0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`pro_id`, `pro_title`, `pro_desc`, `pro_desc_slider`, `pro_cat`, `pro_sub_cat`, `pro_brand`, `pro_price`, `pro_quantity`, `pro_availability`, `pro_status`, `pro_image`, `top_product`) VALUES
(76, 'Classic Sansrival', '<p>test</p>\r\n', '', 78, 35, 9, 340, 97, 2, 1, 'uploads/340985914_1016402079330439_8646252208575978278_n2.jpg', 1),
(77, 'Mocha Almond Sansrival', '<p>test</p>\r\n', NULL, 78, 35, 9, 400, 99, 1, 1, 'uploads/340985914_1016402079330439_8646252208575978278_n3.jpg', 1),
(78, 'Pistachio Sansrival', '<p>test</p>\r\n', NULL, 78, 35, 9, 700, 95, 1, 1, 'uploads/NSPistachio1.png', 1),
(79, 'test', '<p>sdada</p>\r\n', '<p>test</p>\r\n', 78, 35, NULL, 123, 1, 1, 1, 'uploads/NSPistachio12.png', 1),
(80, 'vfdf', '<p>dsf</p>\r\n', '<p>dsf</p>\r\n', 78, 35, NULL, 23, 11, 1, 1, 'uploads/300430038_438511051631587_2973676848890079411_n.jpg', NULL),
(81, '23123', '<p>dszcsd</p>\r\n', '<p>dszcsd</p>\r\n', 78, 35, NULL, 1, 11, 2, 1, 'uploads/340985914_1016402079330439_8646252208575978278_n4.jpg', NULL),
(82, 'zzdsd', '', '', 78, 35, NULL, 323, 127, 0, 0, 'uploads/340985914_1016402079330439_8646252208575978278_n5.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(55) NOT NULL,
  `cus_lname` varchar(255) NOT NULL,
  `cus_email` varchar(55) DEFAULT NULL,
  `cus_password` varchar(32) DEFAULT NULL,
  `cus_mobile` varchar(14) DEFAULT NULL,
  `cus_address` text DEFAULT NULL,
  `cus_city` varchar(55) DEFAULT NULL,
  `cus_country` varchar(55) DEFAULT NULL,
  `cus_zip` varchar(5) DEFAULT NULL,
  `cus_fax` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `cus_id`, `cus_name`, `cus_lname`, `cus_email`, `cus_password`, `cus_mobile`, `cus_address`, `cus_city`, `cus_country`, `cus_zip`, `cus_fax`) VALUES
(82, 51, 'darrel', '', 'asda@dasd.asdad', '', '09178974200', 'Sta Ana', 'Taytay', 'Philippines', '1920', ''),
(83, 58, 'Sta Ana', '', 'bbdbbb@email.com', NULL, '09178974200', 'Sta Ana', 'Taytay', 'Philippines', '1920', NULL),
(84, 59, 'sdfsdfsdf', '', 'asdasd@asdasd.asdasdasd', NULL, 'dsfdsfdsf', 'Sta Ana', 'Taytay', 'Philippines', '1920', NULL),
(85, 60, '555555', '', 'vvvvvv@sdasd.sadasd', NULL, '09178974200', 'Sta Ana3', 'Taytay3', 'Philippines', '1920e', NULL),
(86, 61, 'darrel shipping', '', 'testing@email.com', NULL, '09178974200', 'Sta Ana', 'Taytay', 'Philippines', '1920', NULL),
(88, 63, 'dddd weeeee', '', 'dddd@sdsad.sada', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(89, 64, 'darrel123', '', 'darrel@email.com', NULL, '09178974200', 'Sta Ana', 'Taytay', 'Philippines', '1920', NULL),
(90, 65, 'darrel', '', 'test@email.comasdasd', NULL, '09178974200', 'Sta Ana', 'Taytay', 'Philippines', '1920', NULL),
(91, 66, 'darrel', '', 'darrel2@email.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(92, 67, 'x', '', 'xxxx@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(93, 68, 'darrel', 'asdasd', 'asdas@adasd.asd', NULL, 'sdfsdfsdf', 'sdfsdfsdf', 'sdfsdf', 'Philippines', '23423', NULL),
(94, 69, 'asdadas', 'dadasd', 'asdas@ssad.ssdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(95, 70, 'dasdasd', 'wewqe', 'asdas@dsad.asdasd', NULL, '09178974200', 'Sta Ana', 'Taytay', 'Philippines', '1920', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_category`
--

CREATE TABLE `tbl_sub_category` (
  `sub_cat_id` int(11) NOT NULL,
  `sub_category_name` varchar(255) NOT NULL,
  `category_sub_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sub_category`
--

INSERT INTO `tbl_sub_category` (`sub_cat_id`, `sub_category_name`, `category_sub_id`) VALUES
(35, 'Sans Rival', 78);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_role` tinyint(3) NOT NULL,
  `user_status` tinyint(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `username`, `user_email`, `user_password`, `user_role`, `user_status`) VALUES
(16, 'nathaniels', 'nathaniels@email.com', '$2y$10$xIl8MZx/GzdWxjs86qycB.NkEJucWZX5mXN9aDGyi3dMJ/iQQ76Ry', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `tbl_sub_category`
--
ALTER TABLE `tbl_sub_category`
  ADD PRIMARY KEY (`sub_cat_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `tbl_sub_category`
--
ALTER TABLE `tbl_sub_category`
  MODIFY `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
