-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2022 at 07:07 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_newsofstates`
--

-- --------------------------------------------------------

--
-- Table structure for table `tmp_clint_login`
--

CREATE TABLE `tmp_clint_login` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `added_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tmp_clint_login`
--

INSERT INTO `tmp_clint_login` (`id`, `name`, `email`, `city`, `country`, `password`, `added_on`) VALUES
(1, 'Pankaj Mani Tiwari', 'pmt.poankaj29@gmail.com', 'Ranchi', 'rgeag', '12345', '2021-12-23'),
(3, 'abcd', 'a@gmail.com', 'abcd', 'india', '12345', '2021-12-27');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_market`
--

CREATE TABLE `tmp_market` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `value` varchar(100) DEFAULT NULL,
  `percentage` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tmp_market`
--

INSERT INTO `tmp_market` (`id`, `type`, `value`, `percentage`, `date`) VALUES
(1, 'SENSEX', '15,565.58', '0.77%', '2021-11-23 18:06:06'),
(2, 'NIFTY', '7,170.75', '0.56%', '2021-11-23 18:06:50'),
(3, 'S&P 500', '4,709.85', '-0.37%', '2021-11-23 18:07:23'),
(4, 'FTSE 100', '35,927.43', '0.39%', '2021-11-23 18:07:54'),
(5, 'USD/INR', '470.76', '-48%', '2021-11-23 18:08:28'),
(6, 'IND 10YR YIELD', '5,699.85', '0.86%', '2021-11-23 18:07:54'),
(7, 'BRENT CRUDE OIL', '23,472.22	', '0.39%', '2021-11-23 18:07:54'),
(8, 'GOLD', '6,927.63	', '0.29%', '2021-11-23 18:07:54'),
(9, 'USD/INR', '3,675.02', '0.71%', '2021-11-23 18:07:54'),
(10, 'EUR/INR', '1,783.40', '0.51%', '2021-11-23 18:07:54');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_menu`
--

CREATE TABLE `tmp_menu` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `menu_controller` varchar(200) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tmp_menu`
--

INSERT INTO `tmp_menu` (`id`, `menu_name`, `menu_controller`, `date`) VALUES
(2, 'National', 'national', '2021-11-22 09:52:47'),
(3, 'Sports', 'sports', '2021-11-22 09:53:23'),
(4, 'Crime', 'crime', '2021-11-22 09:53:42'),
(5, 'Politics', 'politics', '2021-11-22 09:54:02'),
(6, 'Business', 'business', '2021-11-22 09:54:14'),
(7, 'world', 'world', '2021-11-22 09:54:47'),
(8, 'Entertainment', 'entertainment', '2021-11-22 09:55:00'),
(9, 'Gadgets', 'gadgets', '2021-11-22 09:55:13'),
(10, 'Posts', 'posts', '2021-11-22 09:55:50');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_news`
--

CREATE TABLE `tmp_news` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `tittle` text NOT NULL,
  `byline` text DEFAULT NULL,
  `straplines` text DEFAULT NULL,
  `news` longtext NOT NULL,
  `image` text NOT NULL,
  `other_image` text DEFAULT NULL,
  `other_image_one` text DEFAULT NULL,
  `other_img_caption_one` text DEFAULT NULL,
  `img_caption` text DEFAULT NULL,
  `other_img_caption` text DEFAULT NULL,
  `slug` text NOT NULL,
  `published` varchar(10) NOT NULL DEFAULT '0',
  `top_news_status` varchar(10) NOT NULL DEFAULT '0',
  `news_date` date DEFAULT NULL,
  `added_on` datetime DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tmp_news`
--

INSERT INTO `tmp_news` (`id`, `menu_id`, `tittle`, `byline`, `straplines`, `news`, `image`, `other_image`, `other_image_one`, `other_img_caption_one`, `img_caption`, `other_img_caption`, `slug`, `published`, `top_news_status`, `news_date`, `added_on`, `status`) VALUES
(1, 9, '50 MLAs With Us, Will Pass Any Floor Test Rebel Sena Leader Eknath Shinde', 'Akhil Kumar', 'Kanhaiya Lal, a father of two sons, had been avoiding going to this shop because of the threats, his wife said. He had gone to his shop yesterday\r\nafter a week.', '<p>Kanhaiya Lal, a father of two sons, had been avoiding going to this shop because of the threats, his wife said. He had gone to his shop yesterday after a week.Kanhaiya Lal, a father of two sons, had been avoiding going to this shop because of the threats, his wife said. He had gone to his shop yesterday after a week.&nbsp;Kanhaiya Lal, a father of two sons, had been avoiding going to this shop because of the threats, his wife said. He had gone to his shop yesterday after a week.&nbsp;Kanhaiya Lal, a father of two sons, had been avoiding going to this shop because of the threats, his wife said. He had gone to his shop yesterday after a week.&nbsp;Kanhaiya Lal, a father of two sons, had been avoiding going to this shop because of the threats, his wife said. He had gone to his shop yesterday after a week.&nbsp;Kanhaiya Lal, a father of two sons, had been avoiding going to this shop because of the threats, his wife said. He had gone to his shop yesterday after a week.&nbsp;Kanhaiya Lal, a father of two sons, had been avoiding going to this shop because of the threats, his wife said. He had gone to his shop yesterday after a week.</p>\r\n', '/assets/newsimage/1656764767.png', '', '', '', 'Kanhaiya Lal, Left Side Stand', '', '50-mlas-with-us-will-pass-any-floor-test-rebel-sena-leader-eknath-shinde', '1', '1', '2022-07-02', '2022-07-02 17:56:07', 1),
(2, 9, 'Uddhav Thackeray Resigns. Sena Rebels May Meet Governor Today', 'Akhil Kumar', 'Uddhav Thackeray, a father of two sons, had been avoiding going to this shop because of the threats, his wife said. He had gone to his shop yesterday after a week.', '<p>Uddhav Thackeray, a father of two sons, had been avoiding going to this shop because of the threats, his wife said. He had gone to his shop yesterday after a week.Uddhav Thackeray, a father of two sons, had been avoiding going to this shop because of the threats, his wife said. He had gone to his shop yesterday after a week.Uddhav Thackeray, a father of two sons, had been avoiding going to this shop because of the threats, his wife said. He had gone to his shop yesterday after a week.</p>\r\n', '/assets/newsimage/1656764924.jpg', '', '', '', 'Uddhav Thackeray, giving a speech', '', 'uddhav-thackeray-resigns-sena-rebels-may-meet-governor-today', '1', '1', '2022-07-02', '2022-07-02 17:58:44', 1),
(8, 9, 'Supreme Court Turns Down Pleas Challenging Validity Of Legal Scheme For Presidential Poll', 'Press Trust of India', 'Press Trust of India | Wednesday June 29, 2022, New Delhi A vacation bench comprising justices Surya Kant and JB Pardiwala was hearing separate pleas filed by Delhi resident Bam Bam Maharaj Nowhattia and Dr Mandati Thirupathi Reddy, a native of Prakasam district in Andhra Pradesh, on the issue.', '<p>Press Trust of India | Wednesday June 29, 2022, New Delhi A vacation bench comprising justices Surya Kant and JB Pardiwala was hearing separate pleas filed by Delhi resident Bam Bam Maharaj Nowhattia and Dr Mandati Thirupathi Reddy, a native of Prakasam district in Andhra Pradesh, on the issue.Press Trust of India | Wednesday June 29, 2022, New Delhi A vacation bench comprising justices Surya Kant and JB Pardiwala was hearing separate pleas filed by Delhi resident Bam Bam Maharaj Nowhattia and Dr Mandati Thirupathi Reddy, a native of Prakasam district in Andhra Pradesh, on the issue.Press Trust of India | Wednesday June 29, 2022, New Delhi A vacation bench comprising justices Surya Kant and JB Pardiwala was hearing separate pleas filed by Delhi resident Bam Bam Maharaj Nowhattia and Dr Mandati Thirupathi Reddy, a native of Prakasam district in Andhra Pradesh, on the issue.Press Trust of India | Wednesday June 29, 2022, New Delhi A vacation bench comprising justices Surya Kant and JB Pardiwala was hearing separate pleas filed by Delhi resident Bam Bam Maharaj Nowhattia and Dr Mandati Thirupathi Reddy, a native of Prakasam district in Andhra Pradesh, on the issue.</p>\r\n', '/assets/newsimage/1656765987.png', '', '', '', 'Rastra Pati Bhawan', '', 'supreme-court-turns-down-pleas-challenging-validity-of-legal-scheme-for-presidential-poll', '1', '0', '2022-07-08', '2022-07-02 18:16:27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tmp_newspay`
--

CREATE TABLE `tmp_newspay` (
  `id` int(11) NOT NULL,
  `client_id` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `slug` varchar(200) DEFAULT NULL,
  `amount` decimal(10,0) DEFAULT NULL,
  `payment_id` varchar(200) DEFAULT NULL,
  `payment_status` varchar(200) DEFAULT NULL,
  `request_no` varchar(200) DEFAULT NULL,
  `added_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tmp_newspay`
--

INSERT INTO `tmp_newspay` (`id`, `client_id`, `name`, `slug`, `amount`, `payment_id`, `payment_status`, `request_no`, `added_on`) VALUES
(3, '1', 'Pankaj Mani Tiwari', 'i-have-submitted-a-form-for-this-side', NULL, NULL, NULL, '9JxplH1QAG5OVe0', '2021-12-23'),
(4, '1', 'Pankaj Mani Tiwari', '500', NULL, NULL, NULL, 'zbJlqo58FOV0w3L', '2021-12-23'),
(5, '1', 'Pankaj Mani Tiwari', '500', NULL, NULL, NULL, 'ACP0RXVdc4s8DwW', '2021-12-23'),
(6, '1', 'Pankaj Mani Tiwari', 'i-have-submitted-a-form-for-this-side', '500', NULL, NULL, 'RNJgLyBpzfYE3PD', '2021-12-23'),
(7, '1', 'Pankaj Mani Tiwari', 'i-have-submitted-a-form-for-this-side', '500', NULL, NULL, 'vo4Vgq9rmDQphsG', '2021-12-23'),
(8, '1', 'Pankaj Mani Tiwari', 'i-have-submitted-a-form-for-this-side', '500', NULL, NULL, '4pnzxrbiE8g2RBD', '2021-12-23'),
(9, '1', 'Pankaj Mani Tiwari', 'i-have-submitted-a-form-for-this-side', '500', NULL, NULL, 'Rm7WSPTVFUGj8qh', '2021-12-23'),
(10, '1', 'Pankaj Mani Tiwari', 'i-have-submitted-a-form-for-this-side', '500', NULL, NULL, 'Pizy0cY67lhMSAD', '2021-12-23'),
(11, '1', 'Pankaj Mani Tiwari', 'i-have-submitted-a-form-for-this-side', '500', NULL, NULL, 'fyvWbcXM91gioRO', '2021-12-23'),
(12, '1', 'Pankaj Mani Tiwari', 'i-have-submitted-a-form-for-this-side', '500', NULL, NULL, 'EUPFqHfTki73hVd', '2021-12-23'),
(13, '1', 'Pankaj Mani Tiwari', 'i-have-submitted-a-form-for-this-side', '500', NULL, NULL, 'qoVyZHNLMe91nPO', '2021-12-23'),
(14, '1', 'Pankaj Mani Tiwari', 'i-have-submitted-a-form-for-this-side', '500', NULL, NULL, 'oXlGHd2BhuLVE8P', '2021-12-23'),
(15, '1', 'Pankaj Mani Tiwari', 'i-have-submitted-a-form-for-this-side', '500', NULL, NULL, 'uCQct3JNfrEKyax', '2021-12-23'),
(16, '1', 'Pankaj Mani Tiwari', 'i-have-submitted-a-form-for-this-side', '500', NULL, NULL, 'OflWKdyFx4LNphR', '2021-12-23'),
(17, '1', 'Pankaj Mani Tiwari', 'i-have-submitted-a-form-for-this-side', '500', NULL, NULL, 'sZzflmKT8yIat4N', '2021-12-23'),
(18, '1', 'Pankaj Mani Tiwari', 'i-have-submitted-a-form-for-this-side', '500', NULL, NULL, 'by9T5P0Ze1dMWR4', '2021-12-23'),
(19, '1', 'Pankaj Mani Tiwari', 'i-have-submitted-a-form-for-this-side', '500', NULL, NULL, 'PKlCj2mVeJk1QTF', '2021-12-23'),
(20, NULL, NULL, '', '0', NULL, NULL, 'eraYPEkX8M2wOcj', '2021-12-27'),
(21, '3', 'abcd', '', '0', NULL, NULL, 'aU2Mh4JHmw3zT5A', '2021-12-27'),
(22, NULL, NULL, '', '0', NULL, NULL, 'mlsgfNLKeUMd6kG', '2021-12-27'),
(23, NULL, NULL, '', '0', NULL, NULL, 'ik7h1HXuzGjnoMy', '2021-12-27'),
(24, NULL, NULL, NULL, NULL, NULL, NULL, '3ApmuLWgFPcbJn8', '2022-01-07'),
(25, NULL, NULL, NULL, NULL, NULL, NULL, 'cUoPaj3ZqQiHBNv', '2022-01-07'),
(26, NULL, NULL, 'indian-hospitals-have-plenty-covid-hospital-beds-for-children', '0', NULL, NULL, '0Onk7yYKGvESDAd', '2022-01-13'),
(27, '3', 'abcd', 'indian-hospitals-have-plenty-covid-hospital-beds-for-children', '0', NULL, NULL, 'KMNnSQiw7UhoXc8', '2022-01-13'),
(28, NULL, NULL, NULL, NULL, NULL, NULL, 'EdNoszQPhumVi1j', '2022-01-13'),
(29, '3', 'abcd', 'indian-hospitals-have-plenty-covid-hospital-beds-for-children', '0', NULL, NULL, '2FZkXvhYHLeSuxW', '2022-01-13'),
(30, NULL, NULL, NULL, NULL, NULL, NULL, 'cDNZrpXPdyg6hWs', '2022-01-13'),
(31, '3', 'abcd', 'indian-hospitals-have-plenty-covid-hospital-beds-for-children', '0', NULL, NULL, 'QJkvS6zMDwXKZFc', '2022-01-13'),
(32, '3', 'abcd', 'indian-hospitals-have-plenty-covid-hospital-beds-for-children', '0', NULL, NULL, 'ogiMkQd93c2sFBD', '2022-01-13'),
(33, '3', 'abcd', 'indian-hospitals-have-plenty-covid-hospital-beds-for-children', '0', NULL, NULL, '6GBkMt7CEPKzjri', '2022-01-13'),
(34, '3', 'abcd', 'indian-hospitals-have-plenty-covid-hospital-beds-for-children', '0', NULL, NULL, '1YD8nwMvRSeUWGK', '2022-01-13'),
(35, '3', 'abcd', 'indian-hospitals-have-plenty-covid-hospital-beds-for-children', '0', NULL, NULL, 'tlCxk81TjqQF09P', '2022-01-13'),
(36, '3', 'abcd', 'indian-hospitals-have-plenty-covid-hospital-beds-for-children', '0', NULL, NULL, 'HaNrqKgup3M7CBt', '2022-01-13'),
(37, '3', 'abcd', 'indian-hospitals-have-plenty-covid-hospital-beds-for-children', '0', NULL, NULL, 'hT4xK8v7FrdiWcn', '2022-01-13'),
(38, '3', 'abcd', 'indian-hospitals-have-plenty-covid-hospital-beds-for-children', '0', NULL, NULL, 'W1cdpDOzaev0C2y', '2022-01-13'),
(39, '3', 'abcd', 'indian-hospitals-have-plenty-covid-hospital-beds-for-children', '100', NULL, NULL, 'ETJlO8gSZc9YaGC', '2022-01-13'),
(40, '3', 'abcd', 'indian-hospitals-have-plenty-covid-hospital-beds-for-children', '100', NULL, NULL, 's3bhoRaH9IxwdBN', '2022-01-13'),
(41, '3', 'abcd', 'indian-hospitals-have-plenty-covid-hospital-beds-for-children', '100', NULL, NULL, '0NZKekvd13aMyT9', '2022-01-13'),
(42, NULL, NULL, NULL, '100', NULL, NULL, 'iUd8R02QzNjg5Dc', '2022-01-13'),
(43, '3', 'abcd', 'indian-hospitals-have-plenty-covid-hospital-beds-for-children', '100', NULL, NULL, 'zsfJxK2E9iSVnjF', '2022-01-13'),
(44, '3', 'abcd', 'indian-hospitals-have-plenty-covid-hospital-beds-for-children', '100', NULL, NULL, 'dIY5AlbrQaJmyWV', '2022-01-13'),
(45, '3', 'abcd', 'indian-hospitals-have-plenty-covid-hospital-beds-for-children', '100', NULL, NULL, 'h58X3E1Oyx6I9ab', '2022-01-13'),
(46, NULL, NULL, NULL, '100', NULL, NULL, '3yzPANFrs8axHC0', '2022-01-13'),
(47, '3', 'abcd', 'indian-hospitals-have-plenty-covid-hospital-beds-for-children', '100', NULL, NULL, 'lzisq25AyUhW9Jf', '2022-01-13'),
(48, '3', 'abcd', 'indian-hospitals-have-plenty-covid-hospital-beds-for-children', '100', NULL, NULL, 'rXxL8tJ3HAIZOY5', '2022-01-13');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_sidebar`
--

CREATE TABLE `tmp_sidebar` (
  `id` int(11) NOT NULL,
  `activate_menu` varchar(255) NOT NULL,
  `activate_not` varchar(255) NOT NULL,
  `base_url` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `role_id` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp_sidebar`
--

INSERT INTO `tmp_sidebar` (`id`, `activate_menu`, `activate_not`, `base_url`, `icon`, `name`, `parent`, `position`, `role_id`, `status`) VALUES
(11, 'Create Menu', '{\"0\":\"\"}', 'home/addmenu', '', 'Create Menu', 0, 7, '\"admin\"', 0),
(12, 'Dashboard', '{\"0\":\"\"}', 'home/dashboard', '<i class=\"nav-icon fa fa-tachometer\" aria-hidden=\"true\"></i>', 'Dashboard', 0, 2, '\"\"admin\"\"', 1),
(13, 'Create Menu', '{\"0\":\"\"}', 'home/createmenu', '<i class=\"nav-icon fa fa-list-alt\" aria-hidden=\"true\"></i>', 'Create Menu', 0, 3, '\"\"admin\"\"', 1),
(14, 'Create Submenu', '{\"0\":\"\"}', 'home/createsubmenu', '<i class=\"nav-icon fas fa-caret-square-down\"></i>', 'Create Submenu', 0, 8, '\"\"admin\"\"', 0),
(15, 'Add News', '{\"0\":\"\"}', 'home/addnews', '<i class=\"nav-icon fa fa-bullseye\"></i>', 'Add News', 18, 6, '\"\"admin\"\"', 1),
(16, 'Market', '{\"0\":\"\"}', 'home/market', '<i class=\"nav-icon fas fa-poll\"></i>', 'Market', 0, 9, '\"admin\"', 1),
(17, 'Reporters List', '{\"0\":\"\"}', 'home/reporterslist', '<i class=\"nav-icon fa fa-newspaper-o\" aria-hidden=\"true\"></i>', 'Reporters List', 0, 10, '\"\"admin\"\"', 1),
(18, 'News', '{\"0\":\"\"}', '#', '<i class=\"nav-icon fa fa-newspaper-o\" aria-hidden=\"true\"></i>', 'News', 0, 4, '\"\"admin\"\"', 1),
(19, 'News List', '{\"0\":\"\"}', 'website/newslist', '', '<i class=\"fa fa-bullseye\"></i>', 18, 1, '\"admin\"', 0),
(20, 'News List', '{\"0\":\"\"}', 'home/newslist', '<i class=\"nav-icon fa fa-bullseye\"></i>', 'News List', 18, 5, '\"\"admin\"\"', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tmp_submenu`
--

CREATE TABLE `tmp_submenu` (
  `id` int(11) NOT NULL,
  `menu_id` varchar(200) DEFAULT NULL,
  `menu` varchar(255) NOT NULL,
  `submenu` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tmp_submenu`
--

INSERT INTO `tmp_submenu` (`id`, `menu_id`, `menu`, `submenu`, `date`) VALUES
(1, '2', 'INDIA', 'NORTHERN', '2021-11-22 10:13:37'),
(2, '2', 'INDIA', 'CENTRAL', '2021-11-22 10:14:35'),
(3, '2', 'INDIA', 'EASTERN', '2021-11-22 10:15:31'),
(4, '2', 'INDIA', 'NORTH EASTERN', '2021-11-22 10:16:16'),
(6, '2', 'INDIA', 'WESTERN', '2021-11-22 10:17:11'),
(7, '4', 'WORLD', 'AFRICA', '2021-11-22 10:18:19'),
(8, '4', 'WORLD', 'AMERICAS', '2021-11-22 10:20:45'),
(9, '4', 'WORLD', 'ASIA', '2021-11-22 10:20:55'),
(10, '4', 'WORLD', 'AUSTRALIA', '2021-11-22 10:21:29'),
(11, '4', 'WORLD', 'CHINA', '2021-11-22 10:21:43'),
(12, '4', 'WORLD', 'EUROPE', '2021-11-22 10:23:31'),
(13, '4', 'WORLD', 'MIDDLE EAST', '2021-11-22 10:23:48'),
(14, '4', 'WORLD', 'OCEANIA & MORE', '2021-11-22 10:24:09'),
(15, '4', 'WORLD', 'UNITED KINGDOM', '2021-11-22 10:24:31'),
(16, '4', 'WORLD', 'UNITED STATES', '2021-11-22 10:24:47'),
(17, '5', 'BUSINESS', 'ECONOMY', '2021-11-22 10:27:24'),
(18, '5', 'BUSINESS', 'MARKETS', '2021-11-22 10:27:41'),
(19, '5', 'BUSINESS', 'COMPANY', '2021-11-22 10:28:15'),
(30, '13', 'MORE', 'PROFESSION', '2021-11-26 10:38:16'),
(31, '13', 'MORE', 'CULTURE', '2021-11-26 10:38:31'),
(32, '13', 'MORE', 'STORIES', '2021-11-26 10:38:48'),
(33, '13', 'MORE', 'WEATHER', '2021-11-26 10:38:59'),
(34, '13', 'MORE', 'GRAPHICS', '2021-11-26 10:39:19'),
(35, '13', 'MORE', 'PICTURE', '2021-11-26 10:39:36'),
(36, '13', 'MORE', 'VIDEO', '2021-11-26 10:39:48'),
(37, '5', 'BUSINESS', 'STARTUPS', '2021-11-26 10:49:09'),
(38, '5', 'BUSINESS', 'WEALTH', '2021-11-26 10:49:24'),
(41, '5', 'BUSINESS', 'INTL BUSINESS', '2022-02-08 13:09:17'),
(42, '2', 'INDIA', 'SOUTHERN', '2022-02-10 13:42:27');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_users`
--

CREATE TABLE `tmp_users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `vp` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `salt` varchar(20) NOT NULL,
  `otp` varchar(50) NOT NULL,
  `token` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp_users`
--

INSERT INTO `tmp_users` (`id`, `username`, `mobile`, `name`, `email`, `password`, `vp`, `role`, `salt`, `otp`, `token`, `status`, `created_on`, `updated_on`) VALUES
(1, 'admin', '7894561230', 'Admin', 'admin@gmail.com', '2021ac8d19debae18e7a13679f8091fa', '12345', 'admin', 'MOPWgKdeZyU2kAL9', '5e74a5b009e1b7c3f7c49c40bbba95fc', '', 1, '2020-01-07 17:05:51', '2020-01-07 17:36:42'),
(2, 'Rajesh', '7894561235', 'Rajesh Singh', 'rajesh@gmail.com', 'f1f01cd104ac731b7c0683ee68d6ea49', '12345', 'user', '3EkwfSYjhN7biz8u', '', '', 1, '2022-02-10 10:07:49', '2022-02-10 10:07:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tmp_clint_login`
--
ALTER TABLE `tmp_clint_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tmp_market`
--
ALTER TABLE `tmp_market`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tmp_menu`
--
ALTER TABLE `tmp_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tmp_news`
--
ALTER TABLE `tmp_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tmp_newspay`
--
ALTER TABLE `tmp_newspay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tmp_sidebar`
--
ALTER TABLE `tmp_sidebar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tmp_submenu`
--
ALTER TABLE `tmp_submenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tmp_users`
--
ALTER TABLE `tmp_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tmp_clint_login`
--
ALTER TABLE `tmp_clint_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tmp_market`
--
ALTER TABLE `tmp_market`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tmp_menu`
--
ALTER TABLE `tmp_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tmp_news`
--
ALTER TABLE `tmp_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tmp_newspay`
--
ALTER TABLE `tmp_newspay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tmp_sidebar`
--
ALTER TABLE `tmp_sidebar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tmp_submenu`
--
ALTER TABLE `tmp_submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tmp_users`
--
ALTER TABLE `tmp_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
