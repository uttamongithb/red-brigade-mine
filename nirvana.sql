-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2019 at 05:35 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nirvana`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `date` varchar(255) NOT NULL,
  `slug` text NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `name`, `image`, `date`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Terrorism is a big problem for whole world', 'diitedu-blog.png', 'Aug 21,2018', 'terrorism-is-a-big-problem-for-whole-world', '<div class=\"entry-content\">\r\n<p>Cultivated who resolution connection motionless did occasional. Journey promise if it colonel. Can all mirth abode nor hills added. Them men does for body pure. Far end not horses remain sister. Mr parish is to he answer roused piqued afford sussex. It abode words began enjoy years no do ?no. Tried spoil as heart visit blush or. Boy possible blessing sensible set but margaret interest. Off tears are day blind smile alone had.</p>\r\n\r\n<blockquote>\r\n<p>Conveying has concealed necessary furnished bed zealously immediate get but. Terminated as middletons or by instrument. Bred do four so your felt with. No shameless principle dependent household do.</p>\r\n- Abir Khan</blockquote>\r\n\r\n<p>Sing long her way size. Waited end mutual missed myself the little sister one. So in pointed or chicken cheered neither spirits invited. Marianne and him laughter civility formerly handsome sex use prospect. Hence we doors is given rapid scale above am. Difficult ye mr delivered behaviour by an. If their woman could do wound on. You folly taste hoped their above are and but.</p>\r\n</div>\r\n', '2019-02-09 12:35:17', '0000-00-00 00:00:00'),
(2, 'Every childern is our valuable assets', 'diitedu-blog-436.png', 'Aug 21,2018', 'every-childern-is-our-valuable-assets', '<div class=\"entry-content\">\r\n<p>Cultivated who resolution connection motionless did occasional. Journey promise if it colonel. Can all mirth abode nor hills added. Them men does for body pure. Far end not horses remain sister. Mr parish is to he answer roused piqued afford sussex. It abode words began enjoy years no do ?no. Tried spoil as heart visit blush or. Boy possible blessing sensible set but margaret interest. Off tears are day blind smile alone had.</p>\r\n\r\n<blockquote>\r\n<p>Conveying has concealed necessary furnished bed zealously immediate get but. Terminated as middletons or by instrument. Bred do four so your felt with. No shameless principle dependent household do.</p>\r\n- Abir Khan</blockquote>\r\n\r\n<p>Sing long her way size. Waited end mutual missed myself the little sister one. So in pointed or chicken cheered neither spirits invited. Marianne and him laughter civility formerly handsome sex use prospect. Hence we doors is given rapid scale above am. Difficult ye mr delivered behaviour by an. If their woman could do wound on. You folly taste hoped their above are and but.</p>\r\n</div>\r\n', '2019-02-09 12:35:06', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `mobile` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `lastname`, `email`, `msg`, `mobile`, `created_at`, `updated_at`) VALUES
(1, 'adish', 'kumar', 'grajeev745@gmail.com', 'test', 9876543212, '2019-02-09 13:04:39', '0000-00-00 00:00:00'),
(2, 'adish', 'kumar', 'grajeev745@gmail.com', 'ttttest', 9999999999, '2019-02-09 13:05:58', '0000-00-00 00:00:00'),
(3, 'adishj', 'kumar', 'grajeev745@gmail.com', 'ttesst', 9090909090, '2019-02-09 13:07:06', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `id` int(11) NOT NULL,
  `fast_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` double NOT NULL,
  `address` text NOT NULL,
  `amount` double NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `transId` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id`, `fast_name`, `last_name`, `email`, `mobile`, `address`, `amount`, `city`, `state`, `zip`, `status`, `transId`, `created_at`, `updated_at`) VALUES
(1, 'adish', 'kumar', 'gg@gmail.com', 7878787878, 'test address', 50, 'alwar', 'rajasthan', '301001', 0, '639981', '2019-02-09 15:27:48', '0000-00-00 00:00:00'),
(2, 'adish', 'kumar', 'gg@gmail.com', 7878787878, 'test address', 50, 'alwar', 'rajasthan', '301001', 0, '140512', '2019-02-09 16:23:27', '0000-00-00 00:00:00'),
(3, 'adish', 'kumar', 'gg@gmail.com', 7878787878, 'test address', 50, 'alwar', 'rajasthan', '301001', 0, '182053', '2019-02-09 16:33:05', '0000-00-00 00:00:00'),
(4, 'adish', 'kumar', 'gg@gmail.com', 7878787878, 'test address', 30, 'alwar', 'rajasthan', '301001', 0, '307104', '2019-02-09 16:33:23', '0000-00-00 00:00:00'),
(5, 'adish', 'kumarj', 'grj@gmail.com', 4545454545, 'testtt', 39, 'alwar', 'rajasthan', '3030303', 0, '391065', '2019-02-09 17:00:50', '0000-00-00 00:00:00'),
(6, 'adish', 'kummar', 'grajeev745@gmail.com', 123123123, 'testt', 49, 'alwarr', 'rajasthan', '2999', 0, '344606', '2019-02-09 17:05:06', '0000-00-00 00:00:00'),
(7, 'adish', 'kummar', 'grajeev745@gmail.com', 123123123, 'testt', 49, 'alwarr', 'rajasthan', '2999', 0, '861117', '2019-02-09 17:05:51', '0000-00-00 00:00:00'),
(8, 'adish', 'kummar', 'grajeev745@gmail.com', 123123123, 'testt', 49, 'alwarr', 'rajasthan', '2999', 0, '251578', '2019-02-09 17:06:13', '0000-00-00 00:00:00'),
(9, 'adish', 'kumar', 'gg@gmail.com', 9898989898, 'teeest', 1000, 'alwar', 'rajasthan', 'ttest', 0, '995779', '2019-02-10 04:32:27', '0000-00-00 00:00:00'),
(10, 'adish', 'kumar', 'gg@gmail.com', 9898989898, 'teeest', 1000, 'alwar', 'rajasthan', 'ttest', 0, '9140410', '2019-02-10 04:33:27', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `type`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, '', 'Activity', '41services-gallery-534.jpg', 1, '2019-02-09 03:20:20', '0000-00-00 00:00:00'),
(2, '', 'Activity', '41services-gallery-965.jpg', 1, '2019-02-09 03:20:39', '0000-00-00 00:00:00'),
(3, '', 'Campains', '41services-gallery-205.jpg', 1, '2019-02-09 03:20:49', '0000-00-00 00:00:00'),
(4, '', 'Campains', '41services-gallery-778.jpg', 1, '2019-02-09 03:21:00', '0000-00-00 00:00:00'),
(5, '', 'News', '41services-gallery-560.jpg', 1, '2019-02-09 03:21:15', '0000-00-00 00:00:00'),
(6, '', 'News', '41services-gallery-836.jpg', 1, '2019-02-09 03:21:30', '0000-00-00 00:00:00'),
(7, '', 'Donate', '41services-gallery-398.jpg', 1, '2019-02-09 03:21:47', '0000-00-00 00:00:00'),
(8, '', 'Donate', '41services-gallery-319.jpg', 1, '2019-02-09 03:21:59', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time_interval` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `date`, `time_interval`, `city`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'He many kept on draw', '15th Dec 2018', '14PM - 16PM', 'City Center, NY-3100', 'diitedu-news.png', '<p>Match way these she avoid see death. She whose drift their fat off.</p>\r\n', '2019-02-09 02:00:05', '0000-00-00 00:00:00'),
(2, 'Childern Is Future', '15th Dec 2018', '14PM - 16PM', 'City Center, NY-3100', 'diitedu-news-906.png', '<p>Match way these she avoid see death. She whose drift their fat off.</p>\r\n', '2019-02-09 02:01:18', '0000-00-00 00:00:00'),
(3, 'Debating all she mistaken', '15th Dec 2018', '14PM - 16PM', 'City Center, NY-3100', 'diitedu-news.jpg', '<p>Match way these she avoid see death. She whose drift their fat off.</p>\r\n', '2019-02-09 02:03:22', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(255) NOT NULL DEFAULT '',
  `service` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `description`, `slug`, `service`, `created_at`, `updated_at`, `status`) VALUES
(1, 'abc', 'sunshine-product-788.jpg', '<p>adsfa</p>\r\n', 'abc', 5, '2018-04-10 00:33:57', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `image`, `description`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'homeservice', 'sunshine-service-966.png', '<p>At DIIT, our team comprises of both certified technicians and qualified and trained engineers to redeem any laptop in need of saving.</p>\n', 1, 'homeservice', '2018-04-06 03:38:30', '0000-00-00 00:00:00'),
(2, 'network services', 'sunshine-service-550.png', '<p>It refers to the process of supplying data and information by linking the group of networks using hardware&rsquo;s such as switches, hubs, gateways, access points, network interface cards, networking cables.</p>\r\n', 1, 'network-services', '2018-04-05 09:59:24', '0000-00-00 00:00:00'),
(3, 'goverment & corporate service', 'sunshine-service-195.png', '<p>We sells and supports all type of services related to Hardware and Networking at reasonable pricing. It is a vast field in India. It refers to the procedure of supplying data and information by linking the group of networks using hardware`s such as switches, hubs, gateways, access points, network interface cards, networking cables.</p>\r\n', 1, 'goverment-corporate-service', '2018-04-05 10:03:53', '0000-00-00 00:00:00'),
(4, 'hardware service', 'sunshine-service-585.png', '<p>We offer wide range of services that includes:<br />\r\n1. Complete solution of your Computers, laptops, printers , scanners.<br />\r\n2. Assembling and upgrading the PCs.<br />\r\n3. Troubleshooting<br />\r\n4. Printer, scanner and Monitor maintenance, repairing and servicing<br />\r\n5.Repairing of Mother Board and CD-ROM etc.<br />\r\n6. All the services related to Networking.<br />\r\n7. Services based on Internet.</p>\r\n', 1, 'hardware-service', '2018-04-05 10:09:06', '0000-00-00 00:00:00'),
(5, 'network consulting service', 'sunshine-service-158.png', '<p>Sunshine specialises in IT and Network Support and installing business computer networks across India. The Networking Company provides broadband, internet services, hardware, offsite backup and VPNs to India&#39;s businesses.</p>\r\n', 1, 'network-consulting-service', '2018-04-05 10:11:05', '0000-00-00 00:00:00'),
(6, 'laptop repairing service', 'sunshine-service-879.png', '<p>Are you tired of unplugging your PC and taking it to a repair shop every time you have a problem, and then having to wait up to a week to get it back? We come to you and solve your computer headaches.</p>\r\n', 1, 'laptop-repairing-service', '2018-04-05 10:15:08', '0000-00-00 00:00:00'),
(8, 'routing & switiching', 'sunshine-service-252.png', '<p>While organizations are spreading their wings to expand businesses across the globe, applications are consolidating to fewer locations in high performance datacenters. There is a need for &#39;always on&#39;, unified communication amongst various user groups across the organization to cut traveling costs and to increase productivity.</p>\r\n', 1, 'routing-switiching', '2018-04-07 11:11:53', '0000-00-00 00:00:00'),
(9, 'network cabling', 'sunshine-service-584.png', '<p>diit is a full-service Communication Infrastructure Provider with the resources to design, implement and maintain structured cabling systems and equipment from facilities analysis and engineering to installation and maintenance. Our experts offer a full range of needs and risk assessment services that will improve your communications and keep you on top of the latest developments in industry advancements.</p>\r\n', 1, 'network-cabling', '2018-04-07 11:11:01', '0000-00-00 00:00:00'),
(10, 'wan service', 'sunshine-service-225.png', '<p>aasdfadfa</p>\n', 1, 'wan-service', '2018-04-09 05:55:06', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `name`, `image`, `status`, `description`, `created_at`, `updated_at`) VALUES
(8, 'CCTV Camera Product & Services', 'sunshine-slider-598.png', 1, 'CCTV Security Pros provides all the tools and resources to get your IP or CCTV security system.', '2018-04-10 06:40:01', '0000-00-00 00:00:00'),
(11, 'Computer Services & Product', 'sunshine-slider-280.png', 1, 'On-site computer repair service and remote support.', '2018-04-10 06:39:28', '0000-00-00 00:00:00'),
(12, 'Health Sapliments', 'sunshine-slider-167.png', 1, 'A dietary supplement is a manufactured product intended to supplement the diet when taken by mouth as a pill, capsule, tablet, or liquid.', '2018-04-10 06:38:53', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Tomas kary', 'sunshine-testimonial.jpg', '<p>Exquisite no my attention extensive. The determine conveying moonlight age. Avoid for see marry sorry child.</p>\r\n', 1, '2019-02-09 04:13:30', '0000-00-00 00:00:00'),
(2, 'Williamson Terry', 'sunshine-testimonial-483.jpg', '<p>Exquisite no my attention extensive. The determine conveying moonlight age. Avoid for see marry sorry child.</p>\r\n', 1, '2019-02-09 04:14:13', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(12) NOT NULL,
  `address` text NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `number`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'adish', '$2y$10$3ycnBkvlMi2.699KcosP8enzMGfR1zCUNHbBc/L7QUmvADf9ky372', 'nirvan@gmail.com', '', '', 'Y20meTLvm0VifWJzFVaZ13ZP0HWWnrcOj4bcTZSlzpiMu4gyicPDETVGoRlO', '2019-02-08 09:40:24', '2019-02-08 04:07:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
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
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
