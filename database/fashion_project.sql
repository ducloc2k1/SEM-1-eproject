-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2020 at 12:08 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoping`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `image`, `key`, `description`, `created_at`, `updated_at`) VALUES
(1, 'advertisement/adver1.png', 'top', 'Women\'s Mid-Season', '2020-08-12 09:48:41', '2020-08-12 09:56:49'),
(2, 'advertisement/adver2.png', 'top', 'Summer Romance', '2020-08-12 09:58:07', '2020-08-12 09:58:07'),
(3, 'advertisement/adver3.png', 'top', '20% Off All Accessories', '2020-08-12 09:58:29', '2020-08-12 09:58:29'),
(4, 'advertisement/h1-bn41.jpg', 'bottom', 'Men’s Sportswear', '2020-08-12 19:03:50', '2020-08-12 19:03:50'),
(5, 'advertisement/h1-bn51-1.jpg', 'bottom', 'Find Your Fit', '2020-08-12 19:04:16', '2020-08-12 19:04:16');

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Size', '2020-07-22 02:54:54', '2020-07-22 02:54:54'),
(2, 'Color', '2020-07-22 02:55:30', '2020-07-22 02:55:30');

-- --------------------------------------------------------

--
-- Table structure for table `attribute_values`
--

CREATE TABLE `attribute_values` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attribute_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attribute_values`
--

INSERT INTO `attribute_values` (`id`, `name`, `ma_color`, `attribute_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Black', '#000000', 2, 0, '2020-07-22 02:56:20', '2020-07-22 02:56:20'),
(2, 'Brown', '#a52a2a', 2, 0, '2020-07-22 02:57:59', '2020-07-22 02:57:59'),
(3, 'Gold', '#ffd700', 2, 0, '2020-07-22 02:59:02', '2020-07-22 02:59:02'),
(4, 'Green', '#00ff00', 2, 0, '2020-07-22 03:00:14', '2020-07-22 03:00:14'),
(5, 'Light Grey', '#d3d3d3', 2, 0, '2020-07-22 03:00:45', '2020-07-22 03:00:45'),
(6, 'Pink', '#faafbe', 2, 0, '2020-07-22 03:02:26', '2020-07-22 03:02:26'),
(7, 'Red', '#ff0000', 2, 0, '2020-07-22 03:02:49', '2020-07-22 03:02:49'),
(8, 'Sky Blue', '#82caff', 2, 0, '2020-07-22 03:05:05', '2020-07-22 03:05:05'),
(9, 'Purple', '#8e35ef', 2, 0, '2020-07-22 03:05:41', '2020-07-22 03:05:41'),
(10, 'White', '#ffffff', 2, 0, '2020-07-22 03:06:07', '2020-07-22 03:06:07'),
(11, '36', NULL, 1, 0, '2020-07-22 03:07:38', '2020-07-22 03:08:13'),
(12, '37', NULL, 1, 0, '2020-07-22 03:08:04', '2020-07-22 03:08:04'),
(13, '38', NULL, 1, 0, '2020-07-22 03:08:24', '2020-07-22 03:08:24'),
(14, '39', NULL, 1, 0, '2020-07-22 03:08:38', '2020-07-22 03:08:38'),
(15, 'X Small', NULL, 1, 0, '2020-07-22 03:08:57', '2020-07-22 03:08:57'),
(16, 'Small', NULL, 1, 0, '2020-07-22 03:09:13', '2020-07-22 03:09:13'),
(17, 'M', NULL, 1, 0, '2020-07-22 03:09:27', '2020-07-22 03:09:27'),
(18, 'L', NULL, 1, 0, '2020-07-22 03:09:40', '2020-07-22 03:09:40'),
(19, 'XXL', NULL, 1, 0, '2020-07-22 03:09:50', '2020-07-22 03:09:50'),
(20, 'XXX', NULL, 1, 0, '2020-07-22 03:10:02', '2020-07-22 03:10:02'),
(21, 'S', NULL, 1, 0, '2020-07-22 03:10:09', '2020-07-22 03:10:09'),
(22, 'Medium', NULL, 1, 0, '2020-07-22 03:10:32', '2020-07-22 03:10:32');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` tinyint(4) DEFAULT NULL,
  `slogan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `sort`, `slogan`, `caption`, `description`, `created_at`, `updated_at`) VALUES
(1, 'banner/layer-home-1-1.png', 1, 'Fall-Winter', 'Clearance Sales', 'All Sale Item are Final Sale / FreeShipping on All Orders', '2020-08-12 07:45:16', '2020-08-12 07:45:16'),
(2, 'banner/layer-home-1-2.png', 2, 'They\'re buying', 'into this season', 'Because it means summer\'s officially over (boooo!).', '2020-08-12 08:08:07', '2020-08-12 08:10:09'),
(3, 'banner/layer-home-1-3.png', 3, 'New in spring wear', NULL, 'Discover new ways to dress this spring with a selection of the best designer jacket.', '2020-08-12 08:12:35', '2020-08-12 09:22:48');

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(10) UNSIGNED NOT NULL,
  `total_price` double(8,2) NOT NULL,
  `cus_id` int(10) UNSIGNED NOT NULL,
  `bill_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_quantity` int(11) NOT NULL,
  `payment_id` int(10) UNSIGNED NOT NULL,
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `total_price`, `cus_id`, `bill_note`, `total_quantity`, `payment_id`, `shipping_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1239.00, 2, 'giao ngay trong tuần', 3, 1, 1, 1, '2020-08-11 18:52:54', '2020-08-11 18:52:54'),
(2, 290.00, 2, 'chỉ nhận vào cuối tuần', 2, 2, 2, 2, '2020-08-11 18:54:52', '2020-08-11 20:14:18'),
(3, 371.00, 2, NULL, 1, 1, 1, 1, '2020-08-11 19:11:48', '2020-08-11 19:11:48'),
(4, 165.00, 3, 'Nhận hàng vào cuối tuần', 3, 2, 4, 1, '2020-08-11 20:34:29', '2020-08-11 20:34:29'),
(5, 507.00, 3, NULL, 3, 1, 4, 1, '2020-08-11 21:25:21', '2020-08-11 21:25:21'),
(6, 174.00, 2, NULL, 3, 1, 4, 1, '2020-08-14 00:55:30', '2020-08-14 00:55:30'),
(7, 174.00, 2, NULL, 3, 1, 4, 1, '2020-08-14 00:57:54', '2020-08-14 00:57:54'),
(8, 174.00, 2, NULL, 3, 1, 4, 1, '2020-08-14 00:58:18', '2020-08-14 00:58:18'),
(9, 174.00, 2, NULL, 3, 1, 4, 1, '2020-08-14 01:00:27', '2020-08-14 01:00:27'),
(10, 174.00, 2, NULL, 3, 1, 4, 1, '2020-08-14 01:01:20', '2020-08-14 01:01:20'),
(11, 174.00, 2, NULL, 3, 1, 4, 1, '2020-08-14 01:01:49', '2020-08-14 01:01:49'),
(12, 174.00, 2, NULL, 3, 1, 4, 1, '2020-08-14 01:02:17', '2020-08-14 01:02:17'),
(13, 174.00, 2, NULL, 3, 1, 4, 1, '2020-08-14 01:02:57', '2020-08-14 01:02:57'),
(14, 174.00, 2, NULL, 3, 1, 4, 1, '2020-08-14 01:04:26', '2020-08-14 01:04:26'),
(15, 174.00, 2, NULL, 3, 1, 4, 1, '2020-08-14 01:04:58', '2020-08-14 01:04:58'),
(16, 1111.00, 2, NULL, 1, 1, 1, 1, '2020-08-14 01:16:14', '2020-08-14 01:16:14'),
(17, 143.00, 2, NULL, 2, 1, 1, 2, '2020-08-14 01:19:23', '2020-08-14 01:20:50'),
(18, 516.00, 2, NULL, 3, 1, 1, 1, '2020-08-17 18:27:47', '2020-08-17 18:27:47'),
(19, 110.00, 2, NULL, 2, 1, 1, 1, '2020-08-17 18:37:01', '2020-08-17 18:37:01'),
(20, 49.00, 8, NULL, 1, 2, 2, 1, '2020-08-17 19:13:51', '2020-08-17 19:13:51'),
(21, 180.00, 8, NULL, 1, 1, 4, 1, '2020-08-17 19:52:01', '2020-08-17 19:52:01'),
(22, 111.00, 8, NULL, 1, 1, 1, 1, '2020-08-17 19:59:01', '2020-08-17 19:59:01'),
(23, 1159.00, 2, NULL, 1, 1, 4, 1, '2020-08-17 23:38:08', '2020-08-17 23:38:08');

-- --------------------------------------------------------

--
-- Table structure for table `bill_details`
--

CREATE TABLE `bill_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `pro_id` int(10) UNSIGNED NOT NULL,
  `bill_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bill_details`
--

INSERT INTO `bill_details` (`id`, `price`, `quantity`, `pro_id`, `bill_id`, `created_at`, `updated_at`) VALUES
(1, 41.00, 1, 6, 1, '2020-08-11 18:52:54', '2020-08-11 18:52:54'),
(2, 99.00, 1, 4, 1, '2020-08-11 18:52:54', '2020-08-11 18:52:54'),
(3, 1099.00, 1, 8, 1, '2020-08-11 18:52:54', '2020-08-11 18:52:54'),
(4, 41.00, 1, 6, 2, '2020-08-11 18:54:52', '2020-08-11 18:54:52'),
(5, 249.00, 1, 7, 2, '2020-08-11 18:54:52', '2020-08-11 18:54:52'),
(6, 359.00, 1, 10, 3, '2020-08-11 19:11:48', '2020-08-11 19:11:48'),
(7, 41.00, 1, 6, 4, '2020-08-11 20:34:29', '2020-08-11 20:34:29'),
(8, 32.00, 2, 3, 4, '2020-08-11 20:34:29', '2020-08-11 20:34:29'),
(9, 249.00, 1, 7, 5, '2020-08-11 21:25:21', '2020-08-11 21:25:21'),
(10, 99.00, 2, 4, 5, '2020-08-11 21:25:21', '2020-08-11 21:25:21'),
(11, 41.00, 2, 6, 6, '2020-08-14 00:55:31', '2020-08-14 00:55:31'),
(12, 32.00, 1, 3, 6, '2020-08-14 00:55:31', '2020-08-14 00:55:31'),
(13, 41.00, 2, 6, 7, '2020-08-14 00:57:55', '2020-08-14 00:57:55'),
(14, 32.00, 1, 3, 7, '2020-08-14 00:57:55', '2020-08-14 00:57:55'),
(15, 41.00, 2, 6, 8, '2020-08-14 00:58:18', '2020-08-14 00:58:18'),
(16, 32.00, 1, 3, 8, '2020-08-14 00:58:18', '2020-08-14 00:58:18'),
(17, 41.00, 2, 6, 9, '2020-08-14 01:00:28', '2020-08-14 01:00:28'),
(18, 32.00, 1, 3, 9, '2020-08-14 01:00:28', '2020-08-14 01:00:28'),
(19, 41.00, 2, 6, 10, '2020-08-14 01:01:20', '2020-08-14 01:01:20'),
(20, 32.00, 1, 3, 10, '2020-08-14 01:01:20', '2020-08-14 01:01:20'),
(21, 41.00, 2, 6, 11, '2020-08-14 01:01:49', '2020-08-14 01:01:49'),
(22, 32.00, 1, 3, 11, '2020-08-14 01:01:50', '2020-08-14 01:01:50'),
(23, 41.00, 2, 6, 12, '2020-08-14 01:02:17', '2020-08-14 01:02:17'),
(24, 32.00, 1, 3, 12, '2020-08-14 01:02:17', '2020-08-14 01:02:17'),
(25, 41.00, 2, 6, 13, '2020-08-14 01:02:57', '2020-08-14 01:02:57'),
(26, 32.00, 1, 3, 13, '2020-08-14 01:02:57', '2020-08-14 01:02:57'),
(27, 41.00, 2, 6, 14, '2020-08-14 01:04:26', '2020-08-14 01:04:26'),
(28, 32.00, 1, 3, 14, '2020-08-14 01:04:26', '2020-08-14 01:04:26'),
(29, 41.00, 2, 6, 15, '2020-08-14 01:04:58', '2020-08-14 01:04:58'),
(30, 32.00, 1, 3, 15, '2020-08-14 01:04:58', '2020-08-14 01:04:58'),
(31, 1099.00, 1, 8, 16, '2020-08-14 01:16:14', '2020-08-14 01:16:14'),
(32, 99.00, 1, 4, 17, '2020-08-14 01:19:23', '2020-08-14 01:19:23'),
(33, 32.00, 1, 3, 17, '2020-08-14 01:19:23', '2020-08-14 01:19:23'),
(34, 168.00, 3, 5, 18, '2020-08-17 18:27:47', '2020-08-17 18:27:47'),
(35, 49.00, 2, 2, 19, '2020-08-17 18:37:01', '2020-08-17 18:37:01'),
(36, 49.00, 1, 2, 20, '2020-08-17 19:13:51', '2020-08-17 19:13:51'),
(37, 120.00, 1, 1, 21, '2020-08-17 19:52:01', '2020-08-17 19:52:01'),
(38, 99.00, 1, 4, 22, '2020-08-17 19:59:01', '2020-08-17 19:59:01'),
(39, 1099.00, 1, 8, 23, '2020-08-17 23:38:08', '2020-08-17 23:38:08');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `cat_blog_id` int(10) UNSIGNED NOT NULL,
  `view` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `author_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `summary`, `content`, `slug`, `image`, `thumbnail_image`, `status`, `cat_blog_id`, `view`, `created_at`, `updated_at`, `author_id`) VALUES
(1, 'Sunglasses To Wear This Summer', 'It can be tough to think of things to add, especially when you’re first starting...', '<p>It can be tough to think of things to add, especially when you&rsquo;re first starting out in the tech industry and all your previous experience seems unrelated. If you&rsquo;re not sure where to start, you&rsquo;re in luck.</p>\r\n\r\n<p>These things, when added together, can make your tech portfolio stand out. And as an added bonus, I even included real-life samples of these tips in action. Having a clear and concise online portfolio/resume design is important, no matter what. But if you&rsquo;re more into design than development.</p>\r\n\r\n<p><img alt=\"\" height=\"1600\" src=\"https://coi.famithemes.net/wp-content/uploads/2019/01/carter.jpg\" width=\"2400\" /></p>\r\n\r\n<p>If the answer is &ldquo;no,&rdquo; you need to rethink your design decisions. In the example below, SEO consultant Gary Le Masson makes his portfolio/resume look like Google search results. The site is clever. And it is perfect for the clients he going after: people who want to rank high in Google search results.</p>\r\n\r\n<p>Make clear what you do or what you specialize in, since design positions can vary so much. If you create WordPress websites for small businesses, say that. If you&rsquo;re passionate about Ruby on Rails, let your clients know.</p>', 'roselle-ebarle-hat', 'blog/bl1-big.jpg', 'blog/bl1-small.jpg', 0, 2, 83, '2020-08-16 04:07:30', '2020-08-18 00:34:16', 1),
(10, 'Roselle Ebarle Hat', 'It can be tough to think of things to add, especially when you’re first starting ...', '<p>It can be tough to think of things to add, especially when you&rsquo;re first starting out in the tech industry and all your previous experience seems unrelated. If you&rsquo;re not sure where to start, you&rsquo;re in luck.</p>\r\n\r\n<p>These things, when added together, can make your tech portfolio stand out. And as an added bonus, I even included real-life samples of these tips in action. Having a clear and concise online portfolio/resume design is important, no matter what. But if you&rsquo;re more into design than development.</p>\r\n\r\n<p><img alt=\"\" height=\"1600\" src=\"https://coi.famithemes.net/wp-content/uploads/2019/01/carter.jpg\" width=\"2400\" /></p>\r\n\r\n<p>If the answer is &ldquo;no,&rdquo; you need to rethink your design decisions. In the example below, SEO consultant Gary Le Masson makes his portfolio/resume look like Google search results. The site is clever. And it is perfect for the clients he going after: people who want to rank high in Google search results.</p>\r\n\r\n<p>Make clear what you do or what you specialize in, since design positions can vary so much. If you create WordPress websites for small businesses, say that. If you&rsquo;re passionate about Ruby on Rails, let your clients know.</p>\r\n\r\n<div class=\"eJOY__extension_root_class\" id=\"eJOY__extension_root\" style=\"all:unset\">&nbsp;</div>', 'roselle - ebarle - hat', 'blog/bl2-big.jpg', 'blog/bl2-small.jpg', 0, 1, 74, '2020-08-16 04:42:43', '2020-08-18 00:34:05', 1),
(11, 'Girl With Hat In The Beach', 'It can be tough to think of things to add, especially when you’re first starting', '<p>It can be tough to think of things to add, especially when you&rsquo;re first starting out in the tech industry and all your previous experience seems unrelated. If you&rsquo;re not sure where to start, you&rsquo;re in luck.</p>\r\n\r\n<p>These things, when added together, can make your tech portfolio stand out. And as an added bonus, I even included real-life samples of these tips in action. Having a clear and concise online portfolio/resume design is important, no matter what. But if you&rsquo;re more into design than development.</p>\r\n\r\n<p>It can be tough to think of things to add, especially when you&rsquo;re first starting out in the tech industry and all your previous experience seems unrelated. If you&rsquo;re not sure where to start, you&rsquo;re in luck.</p>\r\n\r\n<p>These things, when added together, can make your tech portfolio stand out. And as an added bonus, I even included real-life samples of these tips in action. Having a clear and concise online portfolio/resume design is important, no matter what. But if you&rsquo;re more into design than development.</p>\r\n\r\n<p>It can be tough to think of things to add, especially when you&rsquo;re first starting out in the tech industry and all your previous experience seems unrelated. If you&rsquo;re not sure where to start, you&rsquo;re in luck.</p>\r\n\r\n<p>These things, when added together, can make your tech portfolio stand out. And as an added bonus, I even included real-life samples of these tips in action. Having a clear and concise online portfolio/resume design is important, no matter what. But if you&rsquo;re more into design than development.</p>', 'girl - with - hat - in - the - beach', 'blog/bl3-big.jpg', 'blog/bl3-small.jpg', 0, 1, 20, '2020-08-16 04:47:58', '2020-08-18 00:34:08', 1),
(12, 'Timeless Sunglasses From Raen', 'It can be tough to think of things to add, especially when you’re first starting...', '<p>It can be tough to think of things to add, especially when you&rsquo;re first starting out in the tech industry and all your previous experience seems unrelated. If you&rsquo;re not sure where to start, you&rsquo;re in luck.</p>\r\n\r\n<p>These things, when added together, can make your tech portfolio stand out. And as an added bonus, I even included real-life samples of these tips in action. Having a clear and concise online portfolio/resume design is important, no matter what. But if you&rsquo;re more into design than development.</p>\r\n\r\n<p><img alt=\"\" height=\"1600\" src=\"https://coi.famithemes.net/wp-content/uploads/2019/01/carter.jpg\" width=\"2400\" /></p>\r\n\r\n<p>If the answer is &ldquo;no,&rdquo; you need to rethink your design decisions. In the example below, SEO consultant Gary Le Masson makes his portfolio/resume look like Google search results. The site is clever. And it is perfect for the clients he going after: people who want to rank high in Google search results.</p>\r\n\r\n<p>Make clear what you do or what you specialize in, since design positions can vary so much. If you create WordPress websites for small businesses, say that. If you&rsquo;re passionate about Ruby on Rails, let your clients know.</p>\r\n\r\n<div class=\"eJOY__extension_root_class\" id=\"eJOY__extension_root\" style=\"all:unset\">&nbsp;</div>', 'timeless - sunglasses - from - raen', 'blog/bl6-big.jpg', 'blog/bl3-small.jpg', 0, 6, 26, '2020-08-16 07:40:19', '2020-08-18 00:34:12', 1),
(13, 'How Wear The Summer Stlye', 'for me, the most important part of improving at photography has been sharing it', '<p>For me, the most important part of improving at photography has been sharing it. Sign up for an Exposure account, or post regularly to Tumblr, or both. Tell people you&rsquo;re trying to get better at photography. Talk about it. When you talk about it, other people get excited about it. They&rsquo;ll come on photo walks with you. They&rsquo;ll pose for portraits. They&rsquo;ll buy your prints, zines, whatever.</p>\r\n\r\n<p>When it dies, swap them all.</p>\r\n\r\n<p>I&rsquo;ve got a Fujifilm X100s. It runs about $1300. It&rsquo;s easily the best camera I&rsquo;ve ever owned. I take care of it as best as I can, but I don&rsquo;t let taking care of it impact the photography. Let me elaborate on that a bit better. You&rsquo;ll get better at each section of what we talked about slowly. And while you do, you&rsquo;ll be amazed at how much easier it all is and how the habit forms. The best way to get better at photography is start by taking your camera everywhere. If you leave your house, your camera leaves with you. The only exception is if you&rsquo;re planning for a weekend bender &mdash; then probably leave it at home. Other than that, always have it slung over your shoulder. It would probably help to get an extra battery to carry in your pocket. I&rsquo;ve got three batteries. One in my camera, one in my pocket, one in the charger.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<blockquote>\r\n<p>This is what has happened to us. We want the things we have been doing forcefully to fail. And then maybe people around us would let us try something else or our dreams. We are accustomed to live by everyone else&rsquo;s definition of success. We punish people for the things they are passionate about, just because we were unable to do the same at some point in our life.</p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h5>Long-sleeve knit midi dress</h5>\r\n\r\n<p>Being in the top will only grant you a good life&rsquo; has been the mantra of my life. But at times, I wish I was an average student. I wish decisions would have not been so straightforward. Matybe I would have played cricket- the only thing I feel passionate about. Or maybe I would have studied literature (literature drives me crazy). Isn&rsquo;t that disappointing- me wishing to be bad at academics. It&rsquo;s like at times I hate myself for the stuff I am good at.</p>\r\n\r\n<p><img alt=\"\" height=\"332\" src=\"https://zonex.famithemes.com/wp-content/uploads/2018/12/g17-330x332.jpg\" style=\"float:right\" width=\"330\" /></p>\r\n\r\n<h5>Classic denim jacket</h5>\r\n\r\n<p>I feel like these concrete buildings have sucked our desires and our dreams. We are so used to comfort that compromise seems like a taboo. We have lost faith in ourselves. If we can make through it right now, we can do the same in the days to come.</p>\r\n\r\n<p>Staying locked up in four walls have restricted our thinking. I feel like our limited thinking echoes through this wall. We are so used to schedules and predictable life that we have successfully suppressed our creative side.</p>\r\n\r\n<p>When you step out of these four walls on a peaceful morning, you realize how much nature has to offer to you. Its boundless. Your thoughts, worries, deadlines won&rsquo;t resonate here. Everything will flow away along with the wind. And you will realize every answer you had been looking for, was always known to you.</p>\r\n\r\n<p>It would mean a lot to me if you recommend this article and help me improve. I would love to know your thoughts!</p>', 'how - wear - the - summer - stlye', 'blog/bl5-big.jpg', 'blog/bl5-small.jpg', 0, 2, 15, '2020-08-16 07:53:50', '2020-08-17 23:39:00', 1),
(14, 'Monica Lynn Travel', 'It can be tough to think of things to add, especially when you’re first starting  ...', '<p>It can be tough to think of things to add, especially when you&rsquo;re first starting out in the tech industry and all your previous experience seems unrelated. If you&rsquo;re not sure where to start, you&rsquo;re in luck.</p>\r\n\r\n<p>These things, when added together, can make your tech portfolio stand out. And as an added bonus, I even included real-life samples of these tips in action. Having a clear and concise online portfolio/resume design is important, no matter what. But if you&rsquo;re more into design than development.</p>\r\n\r\n<p><img alt=\"\" height=\"1600\" src=\"https://coi.famithemes.net/wp-content/uploads/2019/01/carter.jpg\" width=\"2400\" /></p>\r\n\r\n<p>If the answer is &ldquo;no,&rdquo; you need to rethink your design decisions. In the example below, SEO consultant Gary Le Masson makes his portfolio/resume look like Google search results. The site is clever. And it is perfect for the clients he going after: people who want to rank high in Google search results.</p>\r\n\r\n<p>Make clear what you do or what you specialize in, since design positions can vary so much. If you create WordPress websites for small businesses, say that. If you&rsquo;re passionate about Ruby on Rails, let your clients know.</p>', 'monica - lynn - travel', 'blog/bl4-big.jpg', 'blog/bl4-small.jpg', 0, 3, 14, '2020-08-16 07:55:53', '2020-08-17 23:53:15', 1),
(16, 'Miranda Skoczek Homestay', 'It can be tough to think of things to add, especially when you’re first starting...', '<p>It can be tough to think of things to add, especially when you&rsquo;re first starting out in the tech industry and all your previous experience seems unrelated. If you&rsquo;re not sure where to start, you&rsquo;re in luck.</p>\r\n\r\n<p>These things, when added together, can make your tech portfolio stand out. And as an added bonus, I even included real-life samples of these tips in action. Having a clear and concise online portfolio/resume design is important, no matter what. But if you&rsquo;re more into design than development.</p>\r\n\r\n<p><img alt=\"\" height=\"545\" src=\"https://coi.famithemes.net/wp-content/uploads/2019/01/carter.jpg\" width=\"818\" /></p>\r\n\r\n<p>If the answer is &ldquo;no,&rdquo; you need to rethink your design decisions. In the example below, SEO consultant Gary Le Masson makes his portfolio/resume look like Google search results. The site is clever. And it is perfect for the clients he going after: people who want to rank high in Google search results.</p>\r\n\r\n<p>Make clear what you do or what you specialize in, since design positions can vary so much. If you create WordPress websites for small businesses, say that. If you&rsquo;re passionate about Ruby on Rails, let your clients know.</p>', 'miranda - skoczek - homestay', 'blog/bl1-1326x700.jpg', 'blog/bl1-423x280.jpg', 0, 4, 15, '2020-08-17 06:46:30', '2020-08-18 02:15:25', 1),
(20, 'Men Wearing Canvas Boots', 'It can be tough to think of things to add, especially when you’re first starting...', '<p>It can be tough to think of things to add, especially when you&rsquo;re first starting out in the tech industry and all your previous experience seems unrelated. If you&rsquo;re not sure where to start, you&rsquo;re in luck.</p>\r\n\r\n<p>These things, when added together, can make your tech portfolio stand out. And as an added bonus, I even included real-life samples of these tips in action. Having a clear and concise online portfolio/resume design is important, no matter what. But if you&rsquo;re more into design than development.</p>\r\n\r\n<p><img alt=\"\" height=\"551\" src=\"https://coi.famithemes.net/wp-content/uploads/2019/01/carter.jpg\" width=\"825\" /></p>\r\n\r\n<p>If the answer is &ldquo;no,&rdquo; you need to rethink your design decisions. In the example below, SEO consultant Gary Le Masson makes his portfolio/resume look like Google search results. The site is clever. And it is perfect for the clients he going after: people who want to rank high in Google search results.</p>\r\n\r\n<p>Make clear what you do or what you specialize in, since design positions can vary so much. If you create WordPress websites for small businesses, say that. If you&rsquo;re passionate about Ruby on Rails, let your clients know.</p>', 'men-wearing-canvas-boots', 'blog/bl12-1326x700.jpg', 'blog/bl12-423x280.jpg', 0, 3, 2, '2020-08-17 08:38:26', '2020-08-17 08:51:17', 1),
(21, '5 Effortlessly Cool Outfit Ideas to Wear to a Contert', 'It can be tough to think of things to add, especially when you’re first starting...', '<p>xontente</p>', '5-effortlessly-cool-outfit-ideas-to-wear-to-a-contert', 'blog/bl5-big.jpg', 'blog/bl5-small.jpg', 1, 4, 0, '2020-08-17 10:02:33', '2020-08-17 10:02:33', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_comments`
--

INSERT INTO `blog_comments` (`id`, `content`, `blog_id`, `customer_id`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, '12345678', 1, 2, NULL, '2020-08-16 14:24:59', '2020-08-16 14:24:59'),
(2, 'Comment 1', 12, 2, NULL, '2020-08-16 18:39:58', '2020-08-16 18:39:58'),
(3, 'Comment 2', 12, 2, 2, '2020-08-16 18:58:37', '2020-08-16 18:58:37'),
(9, '123434', 10, 2, NULL, '2020-08-16 21:41:58', '2020-08-16 21:41:58'),
(10, 'ok', 10, 2, NULL, '2020-08-16 23:43:00', '2020-08-16 23:43:00'),
(11, 'Ok', 10, 2, 9, '2020-08-16 23:43:10', '2020-08-16 23:43:10'),
(12, '12343434324324', 12, 2, NULL, '2020-08-16 23:54:24', '2020-08-16 23:54:24'),
(13, 'trả lời', 10, 2, 11, '2020-08-17 01:30:22', '2020-08-17 01:30:22'),
(14, 'comment 2', 10, 2, NULL, '2020-08-17 01:32:38', '2020-08-17 01:32:38'),
(15, 'bài viết hay', 10, 2, NULL, '2020-08-17 09:34:59', '2020-08-17 09:34:59'),
(16, 'hi', 13, 2, NULL, '2020-08-17 10:02:48', '2020-08-17 10:02:48'),
(17, 'hrllo', 13, 2, NULL, '2020-08-17 10:03:06', '2020-08-17 10:03:06'),
(18, 'hello', 13, 2, 16, '2020-08-17 10:05:50', '2020-08-17 10:05:50'),
(19, 'asfdsf', 11, 2, NULL, '2020-08-17 20:20:12', '2020-08-17 20:20:12'),
(20, 'sdfdsf', 11, 2, NULL, '2020-08-17 20:20:17', '2020-08-17 20:20:17'),
(21, 'baif vieest hay', 11, 2, 19, '2020-08-17 20:28:27', '2020-08-17 20:28:27'),
(22, 'bài viết hay', 13, 2, NULL, '2020-08-17 23:39:28', '2020-08-17 23:39:28');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tag`
--

CREATE TABLE `blog_tag` (
  `blog_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog_tag`
--

INSERT INTO `blog_tag` (`blog_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(19, 5, '2020-08-17 07:17:03', '2020-08-17 07:17:03'),
(19, 6, '2020-08-17 07:17:03', '2020-08-17 07:17:03'),
(19, 7, '2020-08-17 07:17:03', '2020-08-17 07:17:03'),
(19, 9, '2020-08-17 07:17:03', '2020-08-17 07:17:03'),
(19, 10, '2020-08-17 07:17:03', '2020-08-17 07:17:03'),
(20, 5, '2020-08-17 08:38:26', '2020-08-17 08:38:26'),
(20, 7, '2020-08-17 08:38:26', '2020-08-17 08:38:26'),
(20, 9, '2020-08-17 08:38:26', '2020-08-17 08:38:26'),
(1, 5, '2020-08-17 15:55:49', '2020-08-17 15:55:49'),
(1, 6, '2020-08-17 15:55:49', '2020-08-17 15:55:49'),
(10, 5, '2020-08-17 16:03:12', '2020-08-17 16:03:12'),
(21, 6, '2020-08-17 17:02:33', '2020-08-17 17:02:33'),
(13, 3, '2020-08-17 17:07:45', '2020-08-17 17:07:45'),
(13, 6, '2020-08-18 02:25:00', '2020-08-18 02:25:00');

-- --------------------------------------------------------

--
-- Table structure for table `category_products`
--

CREATE TABLE `category_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_products`
--

INSERT INTO `category_products` (`id`, `name`, `slug`, `meta_key`, `meta_title`, `meta_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'uncategorized', 'uncategorized', 'tttttttt', 'oooooo', 'kkkkkkk', 1, '2020-07-22 02:41:02', '2020-07-22 02:41:02'),
(2, 'Accessories', 'accessories', 'tttttttt', 'oooooo', 'kkkkkkk', 1, '2020-07-22 02:41:26', '2020-07-22 02:41:26'),
(3, 'Activewear', 'activewear', 'tttttttt', 'oooooo', 'kkkkkkk', 1, '2020-07-22 02:42:24', '2020-07-22 02:42:24'),
(4, 'All Categories', 'all - categories', 'tttttttt', 'oooooo', 'kkkkkkk', 1, '2020-07-22 02:42:47', '2020-07-22 02:42:47'),
(5, 'Classic Shirts', 'classic - shirts', 'tttttttt', 'oooooo', 'kkkkkkk', 1, '2020-07-22 02:43:11', '2020-07-22 02:43:11'),
(6, 'Clothes', 'clothes', 'tttttttt', 'oooooo', 'kkkkkkk', 1, '2020-07-22 02:43:48', '2020-07-22 02:44:22'),
(7, 'Coats', 'coats', 'tttttttt', 'oooooo', 'kkkkkkk', 1, '2020-07-22 02:44:16', '2020-07-22 02:44:16'),
(8, 'Denim', 'denim', 'tttttttt', 'oooooo', 'kkkkkkk', 1, '2020-07-22 02:44:44', '2020-07-22 02:44:44'),
(9, 'Dresses', 'dresses', 'tttttttt', 'oooooo', 'kkkkkkk', 1, '2020-07-22 02:45:02', '2020-07-22 02:45:02'),
(10, 'Jacket', 'jacket', 'tttttttt', 'oooooo', 'kkkkkkk', 1, '2020-07-22 02:45:19', '2020-07-22 02:45:19'),
(11, 'Short', 'short', 'tttttttt', 'oooooo', 'kkkkkkk', 1, '2020-08-16 01:15:54', '2020-08-16 01:15:54');

-- --------------------------------------------------------

--
-- Table structure for table `cat_blogs`
--

CREATE TABLE `cat_blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cat_blogs`
--

INSERT INTO `cat_blogs` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Design', 'design', 1, '2020-08-16 01:18:18', '2020-08-16 01:18:18'),
(2, 'Life Style', 'life - style', 1, '2020-08-16 01:19:05', '2020-08-16 01:32:43'),
(3, 'Fashion', 'fashion', 1, '2020-08-16 01:19:16', '2020-08-16 01:32:38'),
(4, 'Shoping', 'shoping', 1, '2020-08-16 01:19:25', '2020-08-16 01:32:33'),
(6, 'Travel', 'travel', 1, '2020-08-16 01:23:02', '2020-08-16 02:00:37');

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE `configs` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`id`, `image`, `key`, `data`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'logo/logo-dark.png', 'logo', NULL, 'home', 0, '2020-08-12 19:58:25', '2020-08-12 19:58:25'),
(2, '', 'service', 'Phone: +866.597.2742', 'home', 0, '2020-08-12 20:02:29', '2020-08-12 20:02:29'),
(3, '', 'service', 'Live chat', 'home', 0, '2020-08-12 20:03:06', '2020-08-12 20:03:06'),
(4, '', 'service', 'Product', 'shop', 0, '2020-08-12 20:04:44', '2020-08-12 20:04:44'),
(5, '', 'service', 'About us', 'about', 0, '2020-08-12 20:05:46', '2020-08-12 20:06:12'),
(6, '', 'service', 'Tems & Conditions', 'home', 0, '2020-08-12 20:06:55', '2020-08-12 20:06:55'),
(7, '', 'company', 'What We Do', 'home', 0, '2020-08-12 20:07:52', '2020-08-12 20:07:52'),
(8, '', 'company', 'Avaliable Services', 'home', 0, '2020-08-12 20:08:17', '2020-08-12 20:08:17'),
(9, '', 'company', 'Latest Posts', 'home', 0, '2020-08-12 20:08:37', '2020-08-12 20:08:37'),
(10, '', 'company', 'FAQs', 'faqs', 0, '2020-08-12 20:09:01', '2020-08-12 20:10:26'),
(11, '', 'social', 'kz-twitter', 'https://twitter.com/', 0, '2020-08-12 20:13:31', '2020-08-12 20:13:31'),
(12, '', 'social', 'kz-facebook', 'https://www.facebook.com/', 0, '2020-08-12 20:15:08', '2020-08-12 20:15:08'),
(13, '', 'social', 'kz-instagram', 'https://www.instagram.com/', 0, '2020-08-12 20:16:11', '2020-08-12 20:16:11'),
(15, '', 'social', 'kz-pinterest', 'https://www.pinterest.com/', 0, '2020-08-12 20:18:01', '2020-08-12 20:18:01'),
(16, '', 'map', NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.6576008139!2d105.78126221488364!3d21.046381985988834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab3b4220c2bd%3A0x1c9e359e2a4f618c!2sB%C3%A1ch%20Khoa%20Aptech!5e0!3m2!1svi!2s!4v1592842358673!5m2!1svi!2s', 0, '2020-08-13 19:50:02', '2020-08-13 19:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `town` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `display_name`, `phone`, `email`, `address`, `company`, `country`, `post_code`, `town`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, 'ahihi@gmail.com', NULL, NULL, NULL, NULL, NULL, '$2y$10$RoiacxpM1HgJRR3VdoetIOYS/unAtJRRLLTmcESuKMLotIGxnJjbm', 1, NULL, '2020-07-22 02:35:42', '2020-07-22 02:35:42'),
(2, 'Long', 'đen2', 'long den', '8765432', 'nhokimlien1411@gmail.com', 'Xuân trung,Xuân Trường,Nam Định', 'FPT', 'Vietnamese', '0707', 'Quảng Ninh', '$2y$10$T1JDUWIz/hINBiu4ncB03u4d217K2x4IwE0gjsGJh3p702G6yXT6G', 1, NULL, '2020-07-24 19:09:59', '2020-08-17 23:38:08'),
(3, 'hằng', 'béo', 'hằng béo', '0788940452', 'hangbeo@gmail.com', 'giao thủy,nam định', 'CG', 'Vietnamese', '', 'Nam Định', '$2y$10$PdCa3BA379jkQmp8QC5Csuy.qdkxQ1JjDWwlVcz8LjNrywg3CVsfC', 1, NULL, '2020-07-24 20:05:57', '2020-08-11 21:25:21'),
(4, NULL, NULL, NULL, NULL, 'longden@gmail.com', NULL, NULL, NULL, NULL, NULL, '$2y$10$mhgmOsmIvoM8pzNlbtQkheCB8UEZuYonnN03dvICVfM8Wp4a2lX5W', 1, NULL, '2020-08-13 00:33:45', '2020-08-13 00:33:45'),
(5, NULL, NULL, NULL, NULL, 'zlatanisone@gmail', NULL, NULL, NULL, NULL, NULL, '$2y$10$TGfA3D3ooPYA5kCwfjU1yerI6Ndv7QVHFq.lDQkdjPkMlIxwsAwV2', 1, NULL, '2020-08-16 14:22:43', '2020-08-16 14:22:43'),
(6, NULL, NULL, NULL, NULL, 'user1@gmail.com', NULL, NULL, NULL, NULL, NULL, '$2y$10$HlrUPSh6V2x5cAiP.ZxDlOT.Wfcybt0uP0UQKvSMh41wUa6VsKpOS', 1, NULL, '2020-08-17 18:41:15', '2020-08-17 18:41:15'),
(7, NULL, NULL, NULL, NULL, 'khanhsky@gmail.com', NULL, NULL, NULL, NULL, NULL, '$2y$10$cGWdrec3Vug5FofdnITC.uCgOaLkKvqcKaDGaJv0Vbx8wHw2SObZe', 1, NULL, '2020-08-17 18:58:54', '2020-08-17 18:58:54'),
(8, 'Loc', 'Do Loc', NULL, '0379327221', 'duclocdepzai123@gmail.com', 'Hà Nội', 'bahckhoaptech', 'Viet Nam', '10000', 'Hà Nội', '$2y$10$H7jSTOs/Mu.P/BJkuynqZuCK3xvrFn6n1txovFXbbcjxjNRVzvwYW', 1, NULL, '2020-08-17 19:11:22', '2020-08-17 19:59:01');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_07_02_101345_create_category_products_table', 1),
(4, '2020_07_02_102024_create_products_table', 1),
(5, '2020_07_06_065857_create_attributes_table', 1),
(6, '2020_07_06_070350_create_attribute_values_table', 1),
(7, '2020_07_06_070435_create_product_attributes_table', 1),
(8, '2020_07_08_145729_create_tags_table', 1),
(9, '2020_07_08_150158_create_tag_products_table', 1),
(10, '2020_07_09_043708_create_customers_table', 1),
(11, '2020_07_09_044048_create_product_comments_table', 1),
(12, '2020_07_15_113655_create_wishlists_table', 1),
(13, '2020_07_20_025203_create_roles_table', 1),
(14, '2020_07_20_025558_create_user_roles_table', 1),
(15, '2020_08_10_162909_create_shippings_table', 2),
(16, '2020_08_10_163109_create_payments_table', 2),
(17, '2020_08_11_174322_create_bills_table', 3),
(18, '2020_08_11_174858_create_bill_details_table', 3),
(19, '2020_08_12_091501_create_banners_table', 4),
(20, '2020_08_12_091819_create_advertisements_table', 4),
(21, '2020_08_12_091926_create_configs_table', 4),
(22, '2020_08_16_033316_create_cat_blogs_table', 5),
(23, '2020_08_16_034338_create_blogs_table', 5),
(24, '2020_08_16_034507_create_tag_blogs_table', 5),
(25, '2020_08_16_034736_create_blog_comments_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Direct bank transfer', '', '2020-08-10 20:34:17', '2020-08-10 20:53:09'),
(2, 'Check payments', '', '2020-08-10 20:42:59', '2020-08-10 20:42:59'),
(3, 'Cash on delivery', '', '2020-08-10 20:43:21', '2020-08-10 20:43:21'),
(5, 'PayPal', 'logo/paypal.jpg', '2020-08-10 20:44:21', '2020-08-12 07:49:50');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_list` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(12,4) DEFAULT NULL,
  `desciption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sale_price` double(12,4) NOT NULL DEFAULT 0.0000,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `category_pro_id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `image_list`, `price`, `desciption`, `sale_price`, `quantity`, `category_pro_id`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Nordic Half-zip Pullover', 'product/pro3.jpg', '[\"product/pro4.jpg\",\"product/pro3.jpg\",\"product/pro15.jpg\"]', 125.0000, 'Cliquam erat volutpat. Praesent ut ligula non mi varius sagittis. Curabitur blandit mollis lacus. Praesent metus tellus…', 120.0000, 4, 6, '<div class=\"vc_row wpb_row vc_row-fluid vc_custom_1580958648514 responsive_js_composer_custom_css_2141460393\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<h3 class=\"vc_custom_heading vc_custom_1580958627346 responsive_js_composer_custom_css_2140689406\">Paragraph text</h3>\r\n<div class=\"wpb_text_column wpb_content_element  responsive_js_composer_custom_css_1789196950\">\r\n<div class=\"wpb_wrapper\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-7\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<h3 class=\"vc_custom_heading vc_custom_1580958613307 responsive_js_composer_custom_css_102770592\">Unordered list</h3>\r\n<div class=\"wpb_text_column wpb_content_element  vc_custom_1580958669550 responsive_js_composer_custom_css_605751886\">\r\n<div class=\"wpb_wrapper\">\r\n<ul>\r\n<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n<li>Maecenas ullamcorper est et massa mattis condimentum.</li>\r\n<li>Vestibulum sed massa vel ipsum imperdiet malesuada id tempus nisl.</li>\r\n<li>Etiam nec massa et lectus faucibus ornare congue in nunc.</li>\r\n<li>Mauris eget diam magna, in blandit turpis.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<h3 class=\"vc_custom_heading vc_custom_1580958619300 responsive_js_composer_custom_css_1120567926\">Ordered list</h3>\r\n<div class=\"wpb_text_column wpb_content_element  responsive_js_composer_custom_css_1544072111\">\r\n<div class=\"wpb_wrapper\">\r\n<ol>\r\n<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n<li>Maecenas ullamcorper est et massa mattis condimentum.</li>\r\n<li>Vestibulum sed massa vel ipsum imperdiet malesuada id tempus nisl.</li>\r\n<li>Etiam nec massa et lectus faucibus ornare congue in nunc.</li>\r\n<li>Mauris eget diam magna, in blandit turpis.</li>\r\n</ol>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"wpb_column vc_column_container vc_col-sm-5\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"wpb_single_image wpb_content_element vc_align_left  responsive_js_composer_custom_css_1256414749\">\r\n<figure class=\"wpb_wrapper vc_figure\">\r\n<div class=\"vc_single_image-wrapper   vc_box_border_grey\"><img width=\"450\" height=\"563\" src=\"https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1.jpg\" class=\"vc_single_image-img attachment-full\" alt=\"\" srcset=\"https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1.jpg 450w, https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1-400x500.jpg 400w\" sizes=\"(max-width: 450px) 100vw, 450px\"></div>\r\n</figure>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"eJOY__extension_root\" class=\"eJOY__extension_root_class\" style=\"all: unset;\"></div>', 1, '2020-07-22 09:53:08', '2020-07-22 09:53:08'),
(2, 'Band-collar Popover Tunic', 'product/pro2.jpg', '[\"product/pro2.jpg\",\"product/pro14.jpg\",\"product/pro13.jpg\",\"product/pro1.jpg\"]', 49.5000, 'We love the dramatic ruffle details down the sleeve, delicate fabric buttons and polished cuffs.', 49.0000, 2, 5, '<div class=\"vc_row wpb_row vc_row-fluid vc_custom_1580958648514 responsive_js_composer_custom_css_638570366\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<h3 class=\"vc_custom_heading vc_custom_1580958627346 responsive_js_composer_custom_css_570485896\">Paragraph text</h3>\r\n<div class=\"wpb_text_column wpb_content_element  responsive_js_composer_custom_css_1926308664\">\r\n<div class=\"wpb_wrapper\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-7\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<h3 class=\"vc_custom_heading vc_custom_1580958613307 responsive_js_composer_custom_css_465450196\">Unordered list</h3>\r\n<div class=\"wpb_text_column wpb_content_element  vc_custom_1580958669550 responsive_js_composer_custom_css_568878365\">\r\n<div class=\"wpb_wrapper\">\r\n<ul>\r\n<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n<li>Maecenas ullamcorper est et massa mattis condimentum.</li>\r\n<li>Vestibulum sed massa vel ipsum imperdiet malesuada id tempus nisl.</li>\r\n<li>Etiam nec massa et lectus faucibus ornare congue in nunc.</li>\r\n<li>Mauris eget diam magna, in blandit turpis.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<h3 class=\"vc_custom_heading vc_custom_1580958619300 responsive_js_composer_custom_css_685975749\">Ordered list</h3>\r\n<div class=\"wpb_text_column wpb_content_element  responsive_js_composer_custom_css_1396621290\">\r\n<div class=\"wpb_wrapper\">\r\n<ol>\r\n<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n<li>Maecenas ullamcorper est et massa mattis condimentum.</li>\r\n<li>Vestibulum sed massa vel ipsum imperdiet malesuada id tempus nisl.</li>\r\n<li>Etiam nec massa et lectus faucibus ornare congue in nunc.</li>\r\n<li>Mauris eget diam magna, in blandit turpis.</li>\r\n</ol>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"wpb_column vc_column_container vc_col-sm-5\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"wpb_single_image wpb_content_element vc_align_left  responsive_js_composer_custom_css_1816157193\">\r\n<figure class=\"wpb_wrapper vc_figure\">\r\n<div class=\"vc_single_image-wrapper   vc_box_border_grey\"><img width=\"450\" height=\"563\" src=\"https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1.jpg\" class=\"vc_single_image-img attachment-full\" alt=\"\" srcset=\"https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1.jpg 450w, https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1-400x500.jpg 400w\" sizes=\"(max-width: 450px) 100vw, 450px\"></div>\r\n</figure>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"eJOY__extension_root\" class=\"eJOY__extension_root_class\" style=\"all: unset;\"></div>', 1, '2020-07-22 09:58:50', '2020-07-22 09:58:50'),
(3, 'Thelma Penny Loafers', 'product/pro5.jpg', '[\"product/pro6.jpg\",\"product/pro5.jpg\",\"product/pro18.jpg\",\"product/pro17.jpg\",\"product/pro16.jpg\"]', 43.0000, 'We love the dramatic ruffle details down the sleeve, delicate fabric buttons and polished cuffs.', 32.0000, 0, 9, '<div class=\"vc_row wpb_row vc_row-fluid vc_custom_1580958648514 responsive_js_composer_custom_css_1686635470\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<h3 class=\"vc_custom_heading vc_custom_1580958627346 responsive_js_composer_custom_css_970055803\">Paragraph text</h3>\r\n<div class=\"wpb_text_column wpb_content_element  responsive_js_composer_custom_css_1027421950\">\r\n<div class=\"wpb_wrapper\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-7\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<h3 class=\"vc_custom_heading vc_custom_1580958613307 responsive_js_composer_custom_css_216356588\">Unordered list</h3>\r\n<div class=\"wpb_text_column wpb_content_element  vc_custom_1580958669550 responsive_js_composer_custom_css_893520264\">\r\n<div class=\"wpb_wrapper\">\r\n<ul>\r\n<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n<li>Maecenas ullamcorper est et massa mattis condimentum.</li>\r\n<li>Vestibulum sed massa vel ipsum imperdiet malesuada id tempus nisl.</li>\r\n<li>Etiam nec massa et lectus faucibus ornare congue in nunc.</li>\r\n<li>Mauris eget diam magna, in blandit turpis.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<h3 class=\"vc_custom_heading vc_custom_1580958619300 responsive_js_composer_custom_css_1705463961\">Ordered list</h3>\r\n<div class=\"wpb_text_column wpb_content_element  responsive_js_composer_custom_css_1291583490\">\r\n<div class=\"wpb_wrapper\">\r\n<ol>\r\n<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n<li>Maecenas ullamcorper est et massa mattis condimentum.</li>\r\n<li>Vestibulum sed massa vel ipsum imperdiet malesuada id tempus nisl.</li>\r\n<li>Etiam nec massa et lectus faucibus ornare congue in nunc.</li>\r\n<li>Mauris eget diam magna, in blandit turpis.</li>\r\n</ol>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"wpb_column vc_column_container vc_col-sm-5\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"wpb_single_image wpb_content_element vc_align_left  responsive_js_composer_custom_css_1525682475\">\r\n<figure class=\"wpb_wrapper vc_figure\">\r\n<div class=\"vc_single_image-wrapper   vc_box_border_grey\"><img width=\"450\" height=\"563\" src=\"https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1.jpg\" class=\"vc_single_image-img attachment-full\" alt=\"\" srcset=\"https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1.jpg 450w, https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1-400x500.jpg 400w\" sizes=\"(max-width: 450px) 100vw, 450px\"></div>\r\n</figure>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"eJOY__extension_root\" class=\"eJOY__extension_root_class\" style=\"all: unset;\"></div>', 1, '2020-07-22 10:01:29', '2020-07-24 09:49:37'),
(4, 'Chambray Shirt in Vintage Indigo', 'product/pro7.jpg', '[\"product/pro8.jpg\",\"product/pro7.jpg\",\"product/pro21.jpg\",\"product/pro20.jpg\"]', 185.0000, 'We love the dramatic ruffle details down the sleeve, delicate fabric buttons and polished cuffs.', 99.0000, 2, 6, '<div class=\"vc_row wpb_row vc_row-fluid vc_custom_1580958648514 responsive_js_composer_custom_css_799691334\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<h3 class=\"vc_custom_heading vc_custom_1580958627346 responsive_js_composer_custom_css_797749275\">Paragraph text</h3>\r\n<div class=\"wpb_text_column wpb_content_element  responsive_js_composer_custom_css_1728474424\">\r\n<div class=\"wpb_wrapper\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-7\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<h3 class=\"vc_custom_heading vc_custom_1580958613307 responsive_js_composer_custom_css_1081992582\">Unordered list</h3>\r\n<div class=\"wpb_text_column wpb_content_element  vc_custom_1580958669550 responsive_js_composer_custom_css_292817352\">\r\n<div class=\"wpb_wrapper\">\r\n<ul>\r\n<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n<li>Maecenas ullamcorper est et massa mattis condimentum.</li>\r\n<li>Vestibulum sed massa vel ipsum imperdiet malesuada id tempus nisl.</li>\r\n<li>Etiam nec massa et lectus faucibus ornare congue in nunc.</li>\r\n<li>Mauris eget diam magna, in blandit turpis.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<h3 class=\"vc_custom_heading vc_custom_1580958619300 responsive_js_composer_custom_css_2020720191\">Ordered list</h3>\r\n<div class=\"wpb_text_column wpb_content_element  responsive_js_composer_custom_css_1508470248\">\r\n<div class=\"wpb_wrapper\">\r\n<ol>\r\n<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n<li>Maecenas ullamcorper est et massa mattis condimentum.</li>\r\n<li>Vestibulum sed massa vel ipsum imperdiet malesuada id tempus nisl.</li>\r\n<li>Etiam nec massa et lectus faucibus ornare congue in nunc.</li>\r\n<li>Mauris eget diam magna, in blandit turpis.</li>\r\n</ol>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"wpb_column vc_column_container vc_col-sm-5\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"wpb_single_image wpb_content_element vc_align_left  responsive_js_composer_custom_css_172785423\">\r\n<figure class=\"wpb_wrapper vc_figure\">\r\n<div class=\"vc_single_image-wrapper   vc_box_border_grey\"><img width=\"450\" height=\"563\" src=\"https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1.jpg\" class=\"vc_single_image-img attachment-full\" alt=\"\" srcset=\"https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1.jpg 450w, https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1-400x500.jpg 400w\" sizes=\"(max-width: 450px) 100vw, 450px\"></div>\r\n</figure>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"eJOY__extension_root\" class=\"eJOY__extension_root_class\" style=\"all: unset;\"></div>', 1, '2020-07-22 10:04:10', '2020-07-22 10:04:10'),
(5, 'Tailored Indigo Jumpsuit', 'product/pro9.jpg', '[\"product/pro9.jpg\",\"product/pro23.jpg\",\"product/pro22.jpg\",\"product/pro10.jpg\"]', 168.0000, 'We love the dramatic ruffle details down the sleeve, delicate fabric buttons and polished cuffs.', 0.0000, 3, 4, '<div class=\"vc_row wpb_row vc_row-fluid vc_custom_1580958648514 responsive_js_composer_custom_css_1532754633\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<h3 class=\"vc_custom_heading vc_custom_1580958627346 responsive_js_composer_custom_css_2030244760\">Paragraph text</h3>\r\n<div class=\"wpb_text_column wpb_content_element  responsive_js_composer_custom_css_303037467\">\r\n<div class=\"wpb_wrapper\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-7\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<h3 class=\"vc_custom_heading vc_custom_1580958613307 responsive_js_composer_custom_css_1893059150\">Unordered list</h3>\r\n<div class=\"wpb_text_column wpb_content_element  vc_custom_1580958669550 responsive_js_composer_custom_css_1177513582\">\r\n<div class=\"wpb_wrapper\">\r\n<ul>\r\n<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n<li>Maecenas ullamcorper est et massa mattis condimentum.</li>\r\n<li>Vestibulum sed massa vel ipsum imperdiet malesuada id tempus nisl.</li>\r\n<li>Etiam nec massa et lectus faucibus ornare congue in nunc.</li>\r\n<li>Mauris eget diam magna, in blandit turpis.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<h3 class=\"vc_custom_heading vc_custom_1580958619300 responsive_js_composer_custom_css_777306248\">Ordered list</h3>\r\n<div class=\"wpb_text_column wpb_content_element  responsive_js_composer_custom_css_1613426843\">\r\n<div class=\"wpb_wrapper\">\r\n<ol>\r\n<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n<li>Maecenas ullamcorper est et massa mattis condimentum.</li>\r\n<li>Vestibulum sed massa vel ipsum imperdiet malesuada id tempus nisl.</li>\r\n<li>Etiam nec massa et lectus faucibus ornare congue in nunc.</li>\r\n<li>Mauris eget diam magna, in blandit turpis.</li>\r\n</ol>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"wpb_column vc_column_container vc_col-sm-5\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"wpb_single_image wpb_content_element vc_align_left  responsive_js_composer_custom_css_1830947854\">\r\n<figure class=\"wpb_wrapper vc_figure\">\r\n<div class=\"vc_single_image-wrapper   vc_box_border_grey\"><img width=\"450\" height=\"563\" src=\"https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1.jpg\" class=\"vc_single_image-img attachment-full\" alt=\"\" srcset=\"https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1.jpg 450w, https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1-400x500.jpg 400w\" sizes=\"(max-width: 450px) 100vw, 450px\"></div>\r\n</figure>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"eJOY__extension_root\" class=\"eJOY__extension_root_class\" style=\"all: unset;\"></div>', 1, '2020-07-22 10:09:21', '2020-07-22 10:09:21'),
(6, 'Anna Tassel Earrings', 'product/pro11.jpg', '[\"product/pro25.jpg\",\"product/pro24.jpg\",\"product/pro12.jpg\",\"product/pro11.jpg\"]', 42.0000, 'Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Designed with custom colors, they’re washed for a vintage look and accented with hiking-boot laces for one-of-a-kind shoes that are only available at J.Crew.', 41.0000, 1, 2, '<div class=\"vc_row wpb_row vc_row-fluid vc_custom_1580958648514 responsive_js_composer_custom_css_1530398638\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<h3 class=\"vc_custom_heading vc_custom_1580958627346 responsive_js_composer_custom_css_796560162\">Paragraph text</h3>\r\n<div class=\"wpb_text_column wpb_content_element  responsive_js_composer_custom_css_992516798\">\r\n<div class=\"wpb_wrapper\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-7\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<h3 class=\"vc_custom_heading vc_custom_1580958613307 responsive_js_composer_custom_css_1890666122\">Unordered list</h3>\r\n<div class=\"wpb_text_column wpb_content_element  vc_custom_1580958669550 responsive_js_composer_custom_css_2116105385\">\r\n<div class=\"wpb_wrapper\">\r\n<ul>\r\n<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n<li>Maecenas ullamcorper est et massa mattis condimentum.</li>\r\n<li>Vestibulum sed massa vel ipsum imperdiet malesuada id tempus nisl.</li>\r\n<li>Etiam nec massa et lectus faucibus ornare congue in nunc.</li>\r\n<li>Mauris eget diam magna, in blandit turpis.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<h3 class=\"vc_custom_heading vc_custom_1580958619300 responsive_js_composer_custom_css_1309118106\">Ordered list</h3>\r\n<div class=\"wpb_text_column wpb_content_element  responsive_js_composer_custom_css_267963632\">\r\n<div class=\"wpb_wrapper\">\r\n<ol>\r\n<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n<li>Maecenas ullamcorper est et massa mattis condimentum.</li>\r\n<li>Vestibulum sed massa vel ipsum imperdiet malesuada id tempus nisl.</li>\r\n<li>Etiam nec massa et lectus faucibus ornare congue in nunc.</li>\r\n<li>Mauris eget diam magna, in blandit turpis.</li>\r\n</ol>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"wpb_column vc_column_container vc_col-sm-5\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"wpb_single_image wpb_content_element vc_align_left  responsive_js_composer_custom_css_1720575004\">\r\n<figure class=\"wpb_wrapper vc_figure\">\r\n<div class=\"vc_single_image-wrapper   vc_box_border_grey\"><img width=\"450\" height=\"563\" src=\"https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1.jpg\" class=\"vc_single_image-img attachment-full\" alt=\"\" srcset=\"https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1.jpg 450w, https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1-400x500.jpg 400w\" sizes=\"(max-width: 450px) 100vw, 450px\"></div>\r\n</figure>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"eJOY__extension_root\" class=\"eJOY__extension_root_class\" style=\"all: unset;\"></div>', 1, '2020-07-22 10:12:07', '2020-07-24 09:49:52'),
(7, 'Ludlow Suit Pant In Heathered', 'product/pro26.jpg', '[\"product/pro29.jpg\",\"product/pro28.jpg\",\"product/pro27.jpg\",\"product/pro26.jpg\"]', 249.0000, 'Colorful frames, stylish shapes and (the kicker) they won’t cost more than a fancy dinner out. Fun fact: The shades of the UV-protected lenses were chosen to specifically complement each individual frame.', 0.0000, 3, 6, '<div class=\"vc_row wpb_row vc_row-fluid vc_custom_1580958648514 responsive_js_composer_custom_css_218114474\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<h3 class=\"vc_custom_heading vc_custom_1580958627346 responsive_js_composer_custom_css_828865960\">Paragraph text</h3>\r\n<div class=\"wpb_text_column wpb_content_element  responsive_js_composer_custom_css_594543807\">\r\n<div class=\"wpb_wrapper\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-7\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<h3 class=\"vc_custom_heading vc_custom_1580958613307 responsive_js_composer_custom_css_1582086822\">Unordered list</h3>\r\n<div class=\"wpb_text_column wpb_content_element  vc_custom_1580958669550 responsive_js_composer_custom_css_2090236154\">\r\n<div class=\"wpb_wrapper\">\r\n<ul>\r\n<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n<li>Maecenas ullamcorper est et massa mattis condimentum.</li>\r\n<li>Vestibulum sed massa vel ipsum imperdiet malesuada id tempus nisl.</li>\r\n<li>Etiam nec massa et lectus faucibus ornare congue in nunc.</li>\r\n<li>Mauris eget diam magna, in blandit turpis.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<h3 class=\"vc_custom_heading vc_custom_1580958619300 responsive_js_composer_custom_css_209487920\">Ordered list</h3>\r\n<div class=\"wpb_text_column wpb_content_element  responsive_js_composer_custom_css_46805169\">\r\n<div class=\"wpb_wrapper\">\r\n<ol>\r\n<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n<li>Maecenas ullamcorper est et massa mattis condimentum.</li>\r\n<li>Vestibulum sed massa vel ipsum imperdiet malesuada id tempus nisl.</li>\r\n<li>Etiam nec massa et lectus faucibus ornare congue in nunc.</li>\r\n<li>Mauris eget diam magna, in blandit turpis.</li>\r\n</ol>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"wpb_column vc_column_container vc_col-sm-5\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"wpb_single_image wpb_content_element vc_align_left  responsive_js_composer_custom_css_804523133\">\r\n<figure class=\"wpb_wrapper vc_figure\">\r\n<div class=\"vc_single_image-wrapper   vc_box_border_grey\"><img width=\"450\" height=\"563\" src=\"https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1.jpg\" class=\"vc_single_image-img attachment-full\" alt=\"\" srcset=\"https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1.jpg 450w, https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1-400x500.jpg 400w\" sizes=\"(max-width: 450px) 100vw, 450px\"></div>\r\n</figure>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"eJOY__extension_root\" class=\"eJOY__extension_root_class\" style=\"all: unset;\"></div>', 1, '2020-07-22 10:14:33', '2020-07-22 10:14:33'),
(8, 'Fit Unstructured Suit Jacket', 'product/pro30.jpg', '[\"product/pro33.jpg\",\"product/pro32.jpg\",\"product/pro31.jpg\",\"product/pro30.jpg\"]', 1268.0000, 'Pair them with jeans, dresses, giant neon scrunchies, whatever. Cliquam erat volutpat. Praesent ut ligula non mi varius sagittis. Curabitur blandit mollis lacus. Praesent metus tellus…', 1099.0000, 4, 10, '<div class=\"vc_row wpb_row vc_row-fluid vc_custom_1580958648514 responsive_js_composer_custom_css_853984169\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<h3 class=\"vc_custom_heading vc_custom_1580958627346 responsive_js_composer_custom_css_988697586\">Paragraph text</h3>\r\n<div class=\"wpb_text_column wpb_content_element  responsive_js_composer_custom_css_497994376\">\r\n<div class=\"wpb_wrapper\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-7\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<h3 class=\"vc_custom_heading vc_custom_1580958613307 responsive_js_composer_custom_css_1832704078\">Unordered list</h3>\r\n<div class=\"wpb_text_column wpb_content_element  vc_custom_1580958669550 responsive_js_composer_custom_css_254963157\">\r\n<div class=\"wpb_wrapper\">\r\n<ul>\r\n<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n<li>Maecenas ullamcorper est et massa mattis condimentum.</li>\r\n<li>Vestibulum sed massa vel ipsum imperdiet malesuada id tempus nisl.</li>\r\n<li>Etiam nec massa et lectus faucibus ornare congue in nunc.</li>\r\n<li>Mauris eget diam magna, in blandit turpis.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<h3 class=\"vc_custom_heading vc_custom_1580958619300 responsive_js_composer_custom_css_486625854\">Ordered list</h3>\r\n<div class=\"wpb_text_column wpb_content_element  responsive_js_composer_custom_css_1606448270\">\r\n<div class=\"wpb_wrapper\">\r\n<ol>\r\n<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n<li>Maecenas ullamcorper est et massa mattis condimentum.</li>\r\n<li>Vestibulum sed massa vel ipsum imperdiet malesuada id tempus nisl.</li>\r\n<li>Etiam nec massa et lectus faucibus ornare congue in nunc.</li>\r\n<li>Mauris eget diam magna, in blandit turpis.</li>\r\n</ol>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"wpb_column vc_column_container vc_col-sm-5\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"wpb_single_image wpb_content_element vc_align_left  responsive_js_composer_custom_css_2098509228\">\r\n<figure class=\"wpb_wrapper vc_figure\">\r\n<div class=\"vc_single_image-wrapper   vc_box_border_grey\"><img width=\"450\" height=\"563\" src=\"https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1.jpg\" class=\"vc_single_image-img attachment-full\" alt=\"\" srcset=\"https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1.jpg 450w, https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1-400x500.jpg 400w\" sizes=\"(max-width: 450px) 100vw, 450px\"></div>\r\n</figure>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"eJOY__extension_root\" class=\"eJOY__extension_root_class\" style=\"all: unset;\"></div>', 1, '2020-07-22 10:18:11', '2020-07-22 10:18:11'),
(9, 'Liberty Royal Peony Tie', 'product/pro46.jpg', '[\"product/pro48.jpg\",\"product/pro47.jpg\",\"product/pro46.jpg\"]', 56.0000, 'It improved their comfort by offering a true left and right foot (old-school espadrilles have an identical left and right).', 0.0000, 2, 4, '<div class=\"vc_row wpb_row vc_row-fluid vc_custom_1580958648514 responsive_js_composer_custom_css_1939399926\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<h3 class=\"vc_custom_heading vc_custom_1580958627346 responsive_js_composer_custom_css_853376911\">Paragraph text</h3>\r\n<div class=\"wpb_text_column wpb_content_element  responsive_js_composer_custom_css_1442079873\">\r\n<div class=\"wpb_wrapper\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-7\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<h3 class=\"vc_custom_heading vc_custom_1580958613307 responsive_js_composer_custom_css_197896942\">Unordered list</h3>\r\n<div class=\"wpb_text_column wpb_content_element  vc_custom_1580958669550 responsive_js_composer_custom_css_207145723\">\r\n<div class=\"wpb_wrapper\">\r\n<ul>\r\n<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n<li>Maecenas ullamcorper est et massa mattis condimentum.</li>\r\n<li>Vestibulum sed massa vel ipsum imperdiet malesuada id tempus nisl.</li>\r\n<li>Etiam nec massa et lectus faucibus ornare congue in nunc.</li>\r\n<li>Mauris eget diam magna, in blandit turpis.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<h3 class=\"vc_custom_heading vc_custom_1580958619300 responsive_js_composer_custom_css_657449752\">Ordered list</h3>\r\n<div class=\"wpb_text_column wpb_content_element  responsive_js_composer_custom_css_858226096\">\r\n<div class=\"wpb_wrapper\">\r\n<ol>\r\n<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n<li>Maecenas ullamcorper est et massa mattis condimentum.</li>\r\n<li>Vestibulum sed massa vel ipsum imperdiet malesuada id tempus nisl.</li>\r\n<li>Etiam nec massa et lectus faucibus ornare congue in nunc.</li>\r\n<li>Mauris eget diam magna, in blandit turpis.</li>\r\n</ol>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"wpb_column vc_column_container vc_col-sm-5\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"wpb_single_image wpb_content_element vc_align_left  responsive_js_composer_custom_css_1210761707\">\r\n<figure class=\"wpb_wrapper vc_figure\">\r\n<div class=\"vc_single_image-wrapper   vc_box_border_grey\"><img width=\"450\" height=\"563\" src=\"https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1.jpg\" class=\"vc_single_image-img attachment-full\" alt=\"\" srcset=\"https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1.jpg 450w, https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1-400x500.jpg 400w\" sizes=\"(max-width: 450px) 100vw, 450px\"></div>\r\n</figure>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"eJOY__extension_root\" class=\"eJOY__extension_root_class\" style=\"all: unset;\"></div>', 1, '2020-08-09 20:53:45', '2020-08-17 19:31:22'),
(10, 'Olmetex Trench Coat', 'product/pro42.jpg', '[\"product/pro45.jpg\",\"product/pro44.jpg\",\"product/pro43.jpg\",\"product/pro42.jpg\"]', 359.0000, 'We love the dramatic ruffle details down the sleeve, delicate fabric buttons and polished cuffs.', 0.0000, 2, 6, '<div class=\"vc_row wpb_row vc_row-fluid vc_custom_1580958648514 responsive_js_composer_custom_css_1067539816\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<h3 class=\"vc_custom_heading vc_custom_1580958627346 responsive_js_composer_custom_css_1042105087\">Paragraph text</h3>\r\n<div class=\"wpb_text_column wpb_content_element  responsive_js_composer_custom_css_793939811\">\r\n<div class=\"wpb_wrapper\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-7\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<h3 class=\"vc_custom_heading vc_custom_1580958613307 responsive_js_composer_custom_css_983476645\">Unordered list</h3>\r\n<div class=\"wpb_text_column wpb_content_element  vc_custom_1580958669550 responsive_js_composer_custom_css_1510925372\">\r\n<div class=\"wpb_wrapper\">\r\n<ul>\r\n<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n<li>Maecenas ullamcorper est et massa mattis condimentum.</li>\r\n<li>Vestibulum sed massa vel ipsum imperdiet malesuada id tempus nisl.</li>\r\n<li>Etiam nec massa et lectus faucibus ornare congue in nunc.</li>\r\n<li>Mauris eget diam magna, in blandit turpis.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<h3 class=\"vc_custom_heading vc_custom_1580958619300 responsive_js_composer_custom_css_471359451\">Ordered list</h3>\r\n<div class=\"wpb_text_column wpb_content_element  responsive_js_composer_custom_css_369169832\">\r\n<div class=\"wpb_wrapper\">\r\n<ol>\r\n<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n<li>Maecenas ullamcorper est et massa mattis condimentum.</li>\r\n<li>Vestibulum sed massa vel ipsum imperdiet malesuada id tempus nisl.</li>\r\n<li>Etiam nec massa et lectus faucibus ornare congue in nunc.</li>\r\n<li>Mauris eget diam magna, in blandit turpis.</li>\r\n</ol>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"wpb_column vc_column_container vc_col-sm-5\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"wpb_single_image wpb_content_element vc_align_left  responsive_js_composer_custom_css_1921385099\">\r\n<figure class=\"wpb_wrapper vc_figure\">\r\n<div class=\"vc_single_image-wrapper   vc_box_border_grey\"><img width=\"450\" height=\"563\" src=\"https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1.jpg\" class=\"vc_single_image-img attachment-full\" alt=\"\" srcset=\"https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1.jpg 450w, https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1-400x500.jpg 400w\" sizes=\"(max-width: 450px) 100vw, 450px\"></div>\r\n</figure>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"eJOY__extension_root\" class=\"eJOY__extension_root_class\" style=\"all: unset;\"></div>', 1, '2020-08-09 21:14:26', '2020-08-09 21:14:26'),
(11, 'Fitted V-neck Sweater – Pink', 'product/pro39.jpg', '[\"product/pro41.jpg\",\"product/pro40.jpg\",\"product/pro39.jpg\"]', 69.0000, 'It improved their comfort by offering a true left and right foot (old-school espadrilles have an identical left and right).', 0.0000, 1, 10, '<div class=\"vc_row wpb_row vc_row-fluid vc_custom_1580958648514 responsive_js_composer_custom_css_2029919611\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<h3 class=\"vc_custom_heading vc_custom_1580958627346 responsive_js_composer_custom_css_1373625019\">Paragraph text</h3>\r\n<div class=\"wpb_text_column wpb_content_element  responsive_js_composer_custom_css_230579065\">\r\n<div class=\"wpb_wrapper\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-7\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<h3 class=\"vc_custom_heading vc_custom_1580958613307 responsive_js_composer_custom_css_1601452963\">Unordered list</h3>\r\n<div class=\"wpb_text_column wpb_content_element  vc_custom_1580958669550 responsive_js_composer_custom_css_1198360249\">\r\n<div class=\"wpb_wrapper\">\r\n<ul>\r\n<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n<li>Maecenas ullamcorper est et massa mattis condimentum.</li>\r\n<li>Vestibulum sed massa vel ipsum imperdiet malesuada id tempus nisl.</li>\r\n<li>Etiam nec massa et lectus faucibus ornare congue in nunc.</li>\r\n<li>Mauris eget diam magna, in blandit turpis.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<h3 class=\"vc_custom_heading vc_custom_1580958619300 responsive_js_composer_custom_css_622484103\">Ordered list</h3>\r\n<div class=\"wpb_text_column wpb_content_element  responsive_js_composer_custom_css_1326909454\">\r\n<div class=\"wpb_wrapper\">\r\n<ol>\r\n<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n<li>Maecenas ullamcorper est et massa mattis condimentum.</li>\r\n<li>Vestibulum sed massa vel ipsum imperdiet malesuada id tempus nisl.</li>\r\n<li>Etiam nec massa et lectus faucibus ornare congue in nunc.</li>\r\n<li>Mauris eget diam magna, in blandit turpis.</li>\r\n</ol>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"wpb_column vc_column_container vc_col-sm-5\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"wpb_single_image wpb_content_element vc_align_left  responsive_js_composer_custom_css_412558680\">\r\n<figure class=\"wpb_wrapper vc_figure\">\r\n<div class=\"vc_single_image-wrapper   vc_box_border_grey\"><img width=\"450\" height=\"563\" src=\"https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1.jpg\" class=\"vc_single_image-img attachment-full\" alt=\"\" srcset=\"https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1.jpg 450w, https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1-400x500.jpg 400w\" sizes=\"(max-width: 450px) 100vw, 450px\"></div>\r\n</figure>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"eJOY__extension_root\" class=\"eJOY__extension_root_class\" style=\"all: unset;\"></div>', 1, '2020-08-09 21:16:16', '2020-08-09 21:16:16');
INSERT INTO `products` (`id`, `name`, `image`, `image_list`, `price`, `desciption`, `sale_price`, `quantity`, `category_pro_id`, `content`, `status`, `created_at`, `updated_at`) VALUES
(12, 'Girls’ Patch-pocket Jean With Hearts', 'product/pro36.jpg', '[\"product/pro38.jpg\",\"product/pro37.jpg\",\"product/pro36.jpg\"]', 105.0000, 'We love the dramatic ruffle details down the sleeve, delicate fabric buttons and polished cuffs.', 0.0000, 3, 4, '<div class=\"vc_row wpb_row vc_row-fluid vc_custom_1580958648514 responsive_js_composer_custom_css_1343993586\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<h3 class=\"vc_custom_heading vc_custom_1580958627346 responsive_js_composer_custom_css_633835273\">Paragraph text</h3>\r\n<div class=\"wpb_text_column wpb_content_element  responsive_js_composer_custom_css_2104708320\">\r\n<div class=\"wpb_wrapper\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-7\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<h3 class=\"vc_custom_heading vc_custom_1580958613307 responsive_js_composer_custom_css_1939234741\">Unordered list</h3>\r\n<div class=\"wpb_text_column wpb_content_element  vc_custom_1580958669550 responsive_js_composer_custom_css_1351886711\">\r\n<div class=\"wpb_wrapper\">\r\n<ul>\r\n<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n<li>Maecenas ullamcorper est et massa mattis condimentum.</li>\r\n<li>Vestibulum sed massa vel ipsum imperdiet malesuada id tempus nisl.</li>\r\n<li>Etiam nec massa et lectus faucibus ornare congue in nunc.</li>\r\n<li>Mauris eget diam magna, in blandit turpis.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<h3 class=\"vc_custom_heading vc_custom_1580958619300 responsive_js_composer_custom_css_1182858328\">Ordered list</h3>\r\n<div class=\"wpb_text_column wpb_content_element  responsive_js_composer_custom_css_1199629528\">\r\n<div class=\"wpb_wrapper\">\r\n<ol>\r\n<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n<li>Maecenas ullamcorper est et massa mattis condimentum.</li>\r\n<li>Vestibulum sed massa vel ipsum imperdiet malesuada id tempus nisl.</li>\r\n<li>Etiam nec massa et lectus faucibus ornare congue in nunc.</li>\r\n<li>Mauris eget diam magna, in blandit turpis.</li>\r\n</ol>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"wpb_column vc_column_container vc_col-sm-5\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"wpb_single_image wpb_content_element vc_align_left  responsive_js_composer_custom_css_461345810\">\r\n<figure class=\"wpb_wrapper vc_figure\">\r\n<div class=\"vc_single_image-wrapper   vc_box_border_grey\"><img width=\"450\" height=\"563\" src=\"https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1.jpg\" class=\"vc_single_image-img attachment-full\" alt=\"\" srcset=\"https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1.jpg 450w, https://zonex.famithemes.com/wp-content/uploads/2019/10/img-des-1-400x500.jpg 400w\" sizes=\"(max-width: 450px) 100vw, 450px\"></div>\r\n</figure>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"eJOY__extension_root\" class=\"eJOY__extension_root_class\" style=\"all: unset;\"></div>', 0, '2020-08-09 21:18:09', '2020-08-09 21:18:09'),
(13, 'quần bò', 'product/pro36.jpg', '[\"product/pro38.jpg\",\"product/pro37.jpg\",\"product/pro36.jpg\"]', 500000.0000, 'dfsdfdsfsdaf', 250000.0000, 5, 2, 'sản phẩm', 1, '2020-08-17 19:02:35', '2020-08-17 19:02:35');

-- --------------------------------------------------------

--
-- Table structure for table `product_attributes`
--

CREATE TABLE `product_attributes` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `attribute_value_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_attributes`
--

INSERT INTO `product_attributes` (`product_id`, `attribute_value_id`, `created_at`, `updated_at`) VALUES
(1, 5, '2020-07-22 09:53:08', '2020-07-22 09:53:08'),
(1, 7, '2020-07-22 09:53:08', '2020-07-22 09:53:08'),
(1, 8, '2020-07-22 09:53:09', '2020-07-22 09:53:09'),
(1, 11, '2020-07-22 09:53:08', '2020-07-22 09:53:08'),
(1, 12, '2020-07-22 09:53:08', '2020-07-22 09:53:08'),
(1, 19, '2020-07-22 09:53:08', '2020-07-22 09:53:08'),
(2, 2, '2020-07-22 09:58:51', '2020-07-22 09:58:51'),
(2, 3, '2020-07-22 09:58:51', '2020-07-22 09:58:51'),
(2, 5, '2020-07-22 09:58:51', '2020-07-22 09:58:51'),
(2, 8, '2020-07-22 09:58:51', '2020-07-22 09:58:51'),
(2, 9, '2020-07-22 09:58:51', '2020-07-22 09:58:51'),
(2, 11, '2020-07-22 09:58:50', '2020-07-22 09:58:50'),
(2, 12, '2020-07-22 09:58:50', '2020-07-22 09:58:50'),
(2, 13, '2020-07-22 09:58:51', '2020-07-22 09:58:51'),
(2, 14, '2020-07-22 09:58:51', '2020-07-22 09:58:51'),
(3, 2, '2020-07-24 09:49:39', '2020-07-24 09:49:39'),
(3, 3, '2020-07-24 09:49:39', '2020-07-24 09:49:39'),
(3, 6, '2020-07-24 09:49:39', '2020-07-24 09:49:39'),
(3, 8, '2020-07-24 09:49:39', '2020-07-24 09:49:39'),
(3, 9, '2020-07-24 09:49:39', '2020-07-24 09:49:39'),
(3, 11, '2020-07-24 09:49:38', '2020-07-24 09:49:38'),
(3, 12, '2020-07-24 09:49:38', '2020-07-24 09:49:38'),
(3, 13, '2020-07-24 09:49:39', '2020-07-24 09:49:39'),
(3, 14, '2020-07-24 09:49:39', '2020-07-24 09:49:39'),
(4, 8, '2020-07-22 10:04:11', '2020-07-22 10:04:11'),
(4, 11, '2020-07-22 10:04:10', '2020-07-22 10:04:10'),
(4, 12, '2020-07-22 10:04:10', '2020-07-22 10:04:10'),
(4, 20, '2020-07-22 10:04:10', '2020-07-22 10:04:10'),
(4, 22, '2020-07-22 10:04:11', '2020-07-22 10:04:11'),
(5, 8, '2020-07-22 10:09:21', '2020-07-22 10:09:21'),
(5, 17, '2020-07-22 10:09:21', '2020-07-22 10:09:21'),
(5, 18, '2020-07-22 10:09:21', '2020-07-22 10:09:21'),
(5, 21, '2020-07-22 10:09:21', '2020-07-22 10:09:21'),
(6, 3, '2020-07-24 09:49:53', '2020-07-24 09:49:53'),
(6, 6, '2020-07-24 09:49:53', '2020-07-24 09:49:53'),
(6, 8, '2020-07-24 09:49:53', '2020-07-24 09:49:53'),
(6, 9, '2020-07-24 09:49:53', '2020-07-24 09:49:53'),
(6, 11, '2020-07-24 09:49:52', '2020-07-24 09:49:52'),
(6, 12, '2020-07-24 09:49:53', '2020-07-24 09:49:53'),
(6, 13, '2020-07-24 09:49:53', '2020-07-24 09:49:53'),
(6, 14, '2020-07-24 09:49:53', '2020-07-24 09:49:53'),
(7, 1, '2020-07-22 10:14:33', '2020-07-22 10:14:33'),
(7, 5, '2020-07-22 10:14:33', '2020-07-22 10:14:33'),
(7, 8, '2020-07-22 10:14:33', '2020-07-22 10:14:33'),
(7, 15, '2020-07-22 10:14:33', '2020-07-22 10:14:33'),
(7, 21, '2020-07-22 10:14:33', '2020-07-22 10:14:33'),
(7, 22, '2020-07-22 10:14:33', '2020-07-22 10:14:33'),
(8, 1, '2020-07-22 10:18:11', '2020-07-22 10:18:11'),
(8, 5, '2020-07-22 10:18:11', '2020-07-22 10:18:11'),
(8, 19, '2020-07-22 10:18:11', '2020-07-22 10:18:11'),
(8, 20, '2020-07-22 10:18:11', '2020-07-22 10:18:11'),
(8, 22, '2020-07-22 10:18:11', '2020-07-22 10:18:11'),
(9, 3, '2020-08-17 19:31:22', '2020-08-17 19:31:22'),
(9, 8, '2020-08-17 19:31:22', '2020-08-17 19:31:22'),
(9, 21, '2020-08-17 19:31:22', '2020-08-17 19:31:22'),
(9, 22, '2020-08-17 19:31:22', '2020-08-17 19:31:22'),
(10, 3, '2020-08-09 21:14:27', '2020-08-09 21:14:27'),
(10, 12, '2020-08-09 21:14:27', '2020-08-09 21:14:27'),
(10, 14, '2020-08-09 21:14:27', '2020-08-09 21:14:27'),
(11, 6, '2020-08-09 21:16:17', '2020-08-09 21:16:17'),
(11, 11, '2020-08-09 21:16:17', '2020-08-09 21:16:17'),
(11, 12, '2020-08-09 21:16:17', '2020-08-09 21:16:17'),
(11, 13, '2020-08-09 21:16:17', '2020-08-09 21:16:17'),
(12, 8, '2020-08-09 21:18:09', '2020-08-09 21:18:09'),
(12, 11, '2020-08-09 21:18:09', '2020-08-09 21:18:09'),
(12, 12, '2020-08-09 21:18:09', '2020-08-09 21:18:09'),
(13, 3, '2020-08-17 19:02:35', '2020-08-17 19:02:35'),
(13, 13, '2020-08-17 19:02:35', '2020-08-17 19:02:35');

-- --------------------------------------------------------

--
-- Table structure for table `product_comments`
--

CREATE TABLE `product_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `pro_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `star_number` double(8,2) NOT NULL DEFAULT 0.00,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_comments`
--

INSERT INTO `product_comments` (`id`, `pro_id`, `customer_id`, `content`, `star_number`, `parent_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'aaaaa', 4.00, 0, 1, '2020-07-26 08:10:49', '2020-07-26 08:10:49'),
(3, 3, 1, 'giao hàng rất nhanh', 3.00, 0, 1, '2020-07-26 08:15:38', '2020-07-26 08:15:38'),
(4, 1, 1, 'chất liệu rất ok !', 4.00, 0, 1, '2020-07-26 09:18:58', '2020-07-26 09:18:58'),
(5, 5, 2, 'chất liệu very good', 4.00, 0, 1, '2020-08-09 20:03:16', '2020-08-09 20:03:16'),
(6, 1, 2, 'giao hàng rất nhanh chóng', 4.00, 0, 1, '2020-08-14 02:25:21', '2020-08-14 02:25:21'),
(7, 7, 2, 'hhhh', 4.00, 0, 1, '2020-08-18 02:19:59', '2020-08-18 02:19:59');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'Admin Root', '[\"admin.index\",\"admin.comment_product.index\",\"admin.comment_product.destroy\",\"admin.file\",\"admin.logout\",\"admin.category_product.index\",\"admin.category_product.create\",\"admin.category_product.store\",\"admin.category_product.show\",\"admin.category_product.edit\",\"admin.category_product.update\",\"admin.category_product.destroy\",\"admin.product.index\",\"admin.product.create\",\"admin.product.store\",\"admin.product.show\",\"admin.product.edit\",\"admin.product.update\",\"admin.product.destroy\",\"admin.user.index\",\"admin.user.create\",\"admin.user.store\",\"admin.user.show\",\"admin.user.edit\",\"admin.user.update\",\"admin.user.destroy\",\"admin.attribute.index\",\"admin.attribute.create\",\"admin.attribute.store\",\"admin.attribute.show\",\"admin.attribute.edit\",\"admin.attribute.update\",\"admin.attribute.destroy\",\"admin.attribute_value.index\",\"admin.attribute_value.create\",\"admin.attribute_value.store\",\"admin.attribute_value.show\",\"admin.attribute_value.edit\",\"admin.attribute_value.update\",\"admin.attribute_value.destroy\",\"admin.tag.index\",\"admin.tag.create\",\"admin.tag.store\",\"admin.tag.show\",\"admin.tag.edit\",\"admin.tag.update\",\"admin.tag.destroy\",\"admin.role.index\",\"admin.role.create\",\"admin.role.store\",\"admin.role.show\",\"admin.role.edit\",\"admin.role.update\",\"admin.role.destroy\",\"admin.shipping.index\",\"admin.shipping.create\",\"admin.shipping.store\",\"admin.shipping.show\",\"admin.shipping.edit\",\"admin.shipping.update\",\"admin.shipping.destroy\",\"admin.payment.index\",\"admin.payment.create\",\"admin.payment.store\",\"admin.payment.show\",\"admin.payment.edit\",\"admin.payment.update\",\"admin.payment.destroy\",\"admin.bill.index\",\"admin.bill.create\",\"admin.bill.store\",\"admin.bill.show\",\"admin.bill.edit\",\"admin.bill.update\",\"admin.bill.destroy\",\"admin.banner.index\",\"admin.banner.create\",\"admin.banner.store\",\"admin.banner.show\",\"admin.banner.edit\",\"admin.banner.update\",\"admin.banner.destroy\",\"admin.config.index\",\"admin.config.create\",\"admin.config.store\",\"admin.config.show\",\"admin.config.edit\",\"admin.config.update\",\"admin.config.destroy\",\"admin.advertisement.index\",\"admin.advertisement.create\",\"admin.advertisement.store\",\"admin.advertisement.show\",\"admin.advertisement.edit\",\"admin.advertisement.update\",\"admin.advertisement.destroy\",\"admin.blog.index\",\"admin.blog.create\",\"admin.blog.store\",\"admin.blog.show\",\"admin.blog.edit\",\"admin.blog.update\",\"admin.blog.destroy\",\"admin.blog-comment.index\",\"admin.blog-comment.create\",\"admin.blog-comment.store\",\"admin.blog-comment.show\",\"admin.blog-comment.edit\",\"admin.blog-comment.update\",\"admin.blog-comment.destroy\",\"admin.category_blog.index\",\"admin.category_blog.create\",\"admin.category_blog.store\",\"admin.category_blog.show\",\"admin.category_blog.edit\",\"admin.category_blog.update\",\"admin.category_blog.destroy\",\"admin.customer\",\"admin.error\",\"admin.index\",\"admin.logout\"]', NULL, '2020-08-16 20:18:34'),
(2, 'Thành viên', '[\"admin.index\",\"admin.logout\",\"admin.product.index\",\"admin.product.create\",\"admin.product.store\",\"admin.product.show\",\"admin.product.edit\",\"admin.product.update\",\"admin.product.destroy\",\"admin.index\",\"admin.logout\"]', '2020-07-22 02:33:37', '2020-07-22 02:33:47');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Flat rate', 12.00, '2020-08-10 19:08:36', '2020-08-10 19:08:36'),
(2, 'Free shipping', 0.00, '2020-08-10 19:33:46', '2020-08-11 00:28:55'),
(4, 'Local pickup', 60.00, '2020-08-10 19:38:19', '2020-08-10 19:38:19');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'new arrivals', '2020-07-22 08:59:56', '2020-07-22 08:59:56'),
(2, 'new collection', '2020-07-22 09:00:31', '2020-07-22 09:00:31'),
(3, 'WOMEN', '2020-07-22 09:00:37', '2020-07-22 09:00:37'),
(4, 'MEN', '2020-07-22 09:01:00', '2020-07-22 09:01:00'),
(5, 'Design', '2020-08-16 02:27:53', '2020-08-16 02:27:53'),
(6, 'Fashion', '2020-08-16 07:42:43', '2020-08-16 07:42:43'),
(7, 'Life Style', '2020-08-16 07:42:54', '2020-08-16 07:42:54'),
(9, 'Shopping', '2020-08-16 07:43:54', '2020-08-16 07:43:54'),
(10, 'Travel', '2020-08-16 07:44:24', '2020-08-16 07:44:24');

-- --------------------------------------------------------

--
-- Table structure for table `tag_products`
--

CREATE TABLE `tag_products` (
  `pro_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tag_products`
--

INSERT INTO `tag_products` (`pro_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-07-22 09:53:09', '2020-07-22 09:53:09'),
(1, 2, '2020-07-22 09:53:09', '2020-07-22 09:53:09'),
(1, 3, '2020-07-22 09:53:09', '2020-07-22 09:53:09'),
(2, 1, '2020-07-22 09:58:51', '2020-07-22 09:58:51'),
(2, 2, '2020-07-22 09:58:51', '2020-07-22 09:58:51'),
(2, 3, '2020-07-22 09:58:51', '2020-07-22 09:58:51'),
(3, 1, '2020-07-24 09:49:39', '2020-07-24 09:49:39'),
(3, 2, '2020-07-24 09:49:39', '2020-07-24 09:49:39'),
(3, 3, '2020-07-24 09:49:40', '2020-07-24 09:49:40'),
(4, 1, '2020-07-22 10:04:11', '2020-07-22 10:04:11'),
(4, 2, '2020-07-22 10:04:11', '2020-07-22 10:04:11'),
(4, 3, '2020-07-22 10:04:11', '2020-07-22 10:04:11'),
(5, 1, '2020-07-22 10:09:21', '2020-07-22 10:09:21'),
(5, 2, '2020-07-22 10:09:21', '2020-07-22 10:09:21'),
(5, 3, '2020-07-22 10:09:21', '2020-07-22 10:09:21'),
(6, 2, '2020-07-24 09:49:53', '2020-07-24 09:49:53'),
(6, 3, '2020-07-24 09:49:53', '2020-07-24 09:49:53'),
(7, 1, '2020-07-22 10:14:33', '2020-07-22 10:14:33'),
(7, 2, '2020-07-22 10:14:33', '2020-07-22 10:14:33'),
(7, 4, '2020-07-22 10:14:33', '2020-07-22 10:14:33'),
(8, 1, '2020-07-22 10:18:11', '2020-07-22 10:18:11'),
(8, 2, '2020-07-22 10:18:11', '2020-07-22 10:18:11'),
(8, 4, '2020-07-22 10:18:11', '2020-07-22 10:18:11'),
(9, 1, '2020-08-17 19:31:22', '2020-08-17 19:31:22'),
(9, 2, '2020-08-17 19:31:22', '2020-08-17 19:31:22'),
(9, 4, '2020-08-17 19:31:22', '2020-08-17 19:31:22'),
(10, 1, '2020-08-09 21:14:27', '2020-08-09 21:14:27'),
(10, 2, '2020-08-09 21:14:27', '2020-08-09 21:14:27'),
(10, 3, '2020-08-09 21:14:27', '2020-08-09 21:14:27'),
(10, 5, '2020-08-16 04:42:43', '2020-08-16 04:42:43'),
(11, 1, '2020-08-09 21:16:17', '2020-08-09 21:16:17'),
(11, 3, '2020-08-09 21:16:17', '2020-08-09 21:16:17'),
(12, 2, '2020-08-09 21:18:09', '2020-08-09 21:18:09'),
(12, 3, '2020-08-09 21:18:09', '2020-08-09 21:18:09'),
(13, 2, '2020-08-17 19:02:35', '2020-08-17 19:02:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Quang Long', 'nhokimlien1411@gmail.com', '$2y$10$W80gkK9Zi5gcdB/vTiiN1uZIkNDuMws26eHCAkVdlGtE4o4XdPuti', NULL, '2020-07-22 09:27:16', '2020-07-22 02:34:19'),
(2, 'Long Đen', 'ahaha@gmail.com', '$2y$10$QgGgFw0B0TRG4/rN6RLyR.NuajHDiOB6EpyNs1shVd.RbiCF7n8He', 'fGnV7rC5D7MQlHAsPJLYioXF4xJTXqhI38Wmk1bwcfYvOhM6NyjMliWc0qma', '2020-07-22 02:32:56', '2020-07-22 02:32:56');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 2, '2020-07-22 02:34:20', '2020-07-22 02:34:20'),
(2, 1, '2020-07-22 02:32:57', '2020-07-22 02:32:57');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `product_id`, `customer_id`, `created_at`, `updated_at`) VALUES
(6, 2, 2, '2020-07-24 20:02:03', '2020-07-24 20:02:03'),
(9, 8, 3, '2020-07-24 20:06:50', '2020-07-24 20:06:50'),
(11, 3, 4, '2020-08-13 02:48:21', '2020-08-13 02:48:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attribute_values`
--
ALTER TABLE `attribute_values`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `attribute_values_name_unique` (`name`),
  ADD KEY `attribute_values_attribute_id_foreign` (`attribute_id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_cus_id_foreign` (`cus_id`),
  ADD KEY `bills_payment_id_foreign` (`payment_id`),
  ADD KEY `bills_shipping_id_foreign` (`shipping_id`);

--
-- Indexes for table `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_details_bill_id_foreign` (`bill_id`),
  ADD KEY `bill_details_pro_id_foreign` (`pro_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_cat_blog_id_foreign` (`cat_blog_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_comments_blog_id_foreign` (`blog_id`),
  ADD KEY `blog_comments_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `category_products`
--
ALTER TABLE `category_products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_products_name_unique` (`name`);

--
-- Indexes for table `cat_blogs`
--
ALTER TABLE `cat_blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cat_blogs_name_unique` (`name`);

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`),
  ADD UNIQUE KEY `customers_phone_unique` (`phone`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_pro_id_foreign` (`category_pro_id`);

--
-- Indexes for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD PRIMARY KEY (`product_id`,`attribute_value_id`),
  ADD KEY `product_attributes_attribute_value_id_foreign` (`attribute_value_id`);

--
-- Indexes for table `product_comments`
--
ALTER TABLE `product_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_comments_pro_id_foreign` (`pro_id`),
  ADD KEY `product_comments_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_name_unique` (`name`);

--
-- Indexes for table `tag_products`
--
ALTER TABLE `tag_products`
  ADD PRIMARY KEY (`pro_id`,`tag_id`),
  ADD KEY `tag_products_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_role_id_foreign` (`role_id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_customer_id_foreign` (`customer_id`),
  ADD KEY `wishlists_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `attribute_values`
--
ALTER TABLE `attribute_values`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `category_products`
--
ALTER TABLE `category_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cat_blogs`
--
ALTER TABLE `cat_blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product_comments`
--
ALTER TABLE `product_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attribute_values`
--
ALTER TABLE `attribute_values`
  ADD CONSTRAINT `attribute_values_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`);

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_cus_id_foreign` FOREIGN KEY (`cus_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `bills_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`),
  ADD CONSTRAINT `bills_shipping_id_foreign` FOREIGN KEY (`shipping_id`) REFERENCES `shippings` (`id`);

--
-- Constraints for table `bill_details`
--
ALTER TABLE `bill_details`
  ADD CONSTRAINT `bill_details_bill_id_foreign` FOREIGN KEY (`bill_id`) REFERENCES `bills` (`id`),
  ADD CONSTRAINT `bill_details_pro_id_foreign` FOREIGN KEY (`pro_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_cat_blog_id_foreign` FOREIGN KEY (`cat_blog_id`) REFERENCES `cat_blogs` (`id`),
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD CONSTRAINT `blog_comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`),
  ADD CONSTRAINT `blog_comments_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_pro_id_foreign` FOREIGN KEY (`category_pro_id`) REFERENCES `category_products` (`id`);

--
-- Constraints for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD CONSTRAINT `product_attributes_attribute_value_id_foreign` FOREIGN KEY (`attribute_value_id`) REFERENCES `attribute_values` (`id`),
  ADD CONSTRAINT `product_attributes_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `product_comments`
--
ALTER TABLE `product_comments`
  ADD CONSTRAINT `product_comments_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `product_comments_pro_id_foreign` FOREIGN KEY (`pro_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `tag_products`
--
ALTER TABLE `tag_products`
  ADD CONSTRAINT `tag_products_pro_id_foreign` FOREIGN KEY (`pro_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `tag_products_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `wishlists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
