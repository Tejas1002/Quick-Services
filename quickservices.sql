-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2025 at 04:23 PM
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
-- Database: `quickservices`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Tejas', 'shahtejas3333@gmail.com', '$2y$10$H/solZDaOoLbKxyEZgEIDu7QTGYHIgfKmsLC45n3DCS.NLy5FYsdW', 'ANOgnovyNxvDqHh35eovGjrHc8lY8WSXACPj4gEemWUmr9HPJzLWpVggFUz9', '2025-03-16 08:15:13', '2025-03-16 08:40:11');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Carpenter', 'Carpentry tools and furniture', '2025-03-23 18:30:00', '2025-03-23 18:30:00'),
(2, 'Electrician', 'Electrical tools and equipment', '2025-03-23 18:30:00', '2025-03-23 18:30:00'),
(3, 'Yoga', 'Yoga accessories', '2025-03-23 18:30:00', '2025-03-23 18:30:00'),
(4, 'Plumbing', 'Plumbing tools and supplies', '2025-03-23 18:30:00', '2025-03-23 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `message`, `read`, `created_at`, `updated_at`) VALUES
(1, 'Tejas', 'shahtejas3333@gmail.com', 'I need help!', 0, '2025-03-16 00:46:31', '2025-03-16 00:46:31'),
(2, 'Tejas', 'shahtejas3333@gmail.com', 'I need help!', 0, '2025-03-16 00:48:33', '2025-03-16 00:48:33'),
(3, 'Tejas', 'shahtejas3333@gmail.com', 'How Are You?', 0, '2025-03-16 00:54:48', '2025-03-16 00:54:48'),
(4, 'Saurav', 'saurav123@gmail.com', 'Best Website', 0, '2025-03-16 00:59:57', '2025-03-16 00:59:57'),
(5, 'Tejas', 'shahtejas3333@gmail.com', 'Hellooooo', 0, '2025-03-16 01:03:33', '2025-03-16 01:03:33'),
(6, 'Tejas', 'shahtejas3333@gmail.com', 'Hieeee', 0, '2025-03-16 01:04:14', '2025-03-16 01:04:14'),
(7, 'Tejas', 'shahtejas3333@gmail.com', 'Hieeee', 0, '2025-03-16 01:05:47', '2025-03-16 01:05:47'),
(8, 'Tejas', 'shahtejas3333@gmail.com', 'Best', 0, '2025-03-16 01:06:17', '2025-03-16 01:06:17'),
(9, 'Tejas', 'shahtejas3333@gmail.com', 'Ahhhhhhh', 0, '2025-03-18 13:11:04', '2025-03-18 13:11:04'),
(10, 'Tejas', 'shahtejas3333@gmail.com', 'Huhhhhhhh', 0, '2025-03-18 13:13:52', '2025-03-18 13:13:52'),
(11, 'Tejas', 'shahtejas3333@gmail.com', 'Hiee hiee!', 0, '2025-03-18 13:16:01', '2025-03-18 13:16:01'),
(12, 'Tejas', 'shahtejas3333@gmail.com', 'Muhhhhhh', 0, '2025-03-18 13:19:30', '2025-03-18 13:19:30'),
(13, 'Tejas', 'shahtejas3333@gmail.com', 'hahahah', 0, '2025-03-18 13:21:00', '2025-03-18 13:21:00'),
(14, 'Tejas', 'shahtejas3333@gmail.com', 'jhjhhj', 0, '2025-03-18 13:21:44', '2025-03-18 13:21:44'),
(15, 'Tejas', 'shahtejas3333@gmail.com', 'ffftftf', 0, '2025-03-18 13:29:40', '2025-03-18 13:29:40'),
(16, 'Tejas', 'shahtejas3333@gmail.com', 'hhhj', 0, '2025-03-18 13:29:56', '2025-03-18 13:29:56'),
(17, 'Tejas', 'shahtejas3333@gmail.com', 'dfdd', 0, '2025-03-18 13:30:04', '2025-03-18 13:30:04'),
(18, 'Tejas', 'shahtejas3333@gmail.com', 'asasasas', 0, '2025-03-18 13:31:05', '2025-03-18 13:31:05'),
(19, 'Tejas', 'shahtejas3333@gmail.com', 'asas', 0, '2025-03-18 13:31:17', '2025-03-18 13:31:17'),
(20, 'Tejas', 'shahtejas3333@gmail.com', 'ssdsdss', 0, '2025-03-18 13:32:08', '2025-03-18 13:32:08'),
(21, 'Tejas', 'shahtejas3333@gmail.com', 'ddddf', 0, '2025-03-18 13:34:50', '2025-03-18 13:34:50'),
(22, 'Tejas', 'shahtejas3333@gmail.com', 'fdfdf', 0, '2025-03-18 13:35:19', '2025-03-18 13:35:19');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `comment` text NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `order_id`, `rating`, `name`, `comment`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 18, 3, NULL, 'Good!', 1, '2025-04-04 08:09:43', '2025-04-04 08:09:43'),
(2, 18, 4, 'Tejas', 'Good!', 1, '2025-04-04 08:09:56', '2025-04-04 08:09:56'),
(3, 18, 4, 'Tejas', 'Wow1', 1, '2025-04-04 09:07:07', '2025-04-04 09:07:07'),
(4, 20, 2, 'Tejas', 'Absolutely fantastic service! Quick Services solved my plumbing issue within 30 minutes. The technician was professional, knowledgeable and fixed the problem permanently. Will definitely use them again for all my home maintenance needs.', 1, '2025-04-04 12:55:46', '2025-04-04 12:55:46'),
(5, 21, 5, 'Tejas', 'Great great great, service!', 1, '2025-04-06 01:20:35', '2025-04-06 01:20:35'),
(6, 25, 4, 'Saurav', 'Good!', 2, '2025-04-10 00:43:45', '2025-04-10 00:43:45');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(25, 1, 8, '2025-04-02 07:40:37', '2025-04-02 07:40:37'),
(26, 1, 9, '2025-04-02 07:40:39', '2025-04-02 07:40:39'),
(27, 1, 11, '2025-04-02 07:40:42', '2025-04-02 07:40:42'),
(28, 1, 10, '2025-04-09 08:44:30', '2025-04-09 08:44:30'),
(29, 1, 18, '2025-04-09 08:45:02', '2025-04-09 08:45:02'),
(30, 1, 22, '2025-04-09 09:20:14', '2025-04-09 09:20:14'),
(31, 1, 26, '2025-04-09 09:42:02', '2025-04-09 09:42:02');

-- --------------------------------------------------------

--
-- Table structure for table `main_services`
--

CREATE TABLE `main_services` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `main_services`
--

INSERT INTO `main_services` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Carpenter', 'Expert woodworking solutions.', 'https://images.unsplash.com/photo-1608613304899-ea8098577e38?q=80&w=2574&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', '2025-03-11 17:31:42', '2025-03-11 17:31:42'),
(2, 'Electrician', 'Reliable electrical services.', 'https://images.unsplash.com/photo-1555963966-b7ae5404b6ed?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', '2025-03-11 17:31:42', '2025-03-11 17:31:42'),
(3, 'Yoga Fitness', 'Professional yoga training.', 'https://images.unsplash.com/photo-1607962837359-5e7e89f86776?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', '2025-03-11 17:31:42', '2025-03-11 17:31:42'),
(4, 'Plumber', 'Quality plumbing services.', 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', '2025-03-11 17:31:42', '2025-03-11 17:31:42'),
(5, 'Painter', 'Professional painting services.', 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', '2025-03-11 17:43:25', '2025-03-11 17:43:25'),
(6, 'Gardener', 'Expert gardening solutions.', 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=2574&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', '2025-03-11 17:43:25', '2025-03-11 17:43:25'),
(7, 'Cleaner', 'Reliable cleaning services.', 'https://images.unsplash.com/photo-1607962837359-5e7e89f86776?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', '2025-03-11 17:43:25', '2025-03-11 17:43:25'),
(8, 'Driver', 'Safe and professional driving services.', 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', '2025-03-11 17:43:25', '2025-03-11 17:43:25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_03_09_053826_create_services_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `status` varchar(255) DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `email`, `address`, `phone`, `city`, `payment_method`, `total_amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Saurav', 'saurav123@gmail.com', 'Mehsana', '8200051378', 'Mehsana', 'cod', 63138.00, 'delivered', '2025-03-14 13:35:01', '2025-03-17 11:47:54'),
(2, 2, 'Saurav', 'saurav123@gmail.com', 'Mehsana', '8200051378', 'Mehsana', 'card', 50.00, 'pending', '2025-03-14 13:50:11', '2025-03-14 13:50:11'),
(3, 3, 'Ankit', 'ankit123@gmail.com', 'Visnagar', '11111122222', 'Visnagar', 'upi', 2078.00, 'pending', '2025-03-14 14:21:55', '2025-03-14 14:21:55'),
(6, 1, 'Tejas', 'shahtejas3333@gmail.com', 'Mehsana', '8200051378', 'Mehsana', 'cod', 50.00, 'pending', '2025-03-19 00:33:42', '2025-03-19 00:33:42'),
(7, 1, 'Tejas', 'shahtejas3333@gmail.com', 'Mehsana', '8200051378', 'Mehsana', 'cod', 50.00, 'pending', '2025-03-19 00:37:47', '2025-03-19 00:37:47'),
(8, 1, 'Tejas', 'shahtejas3333@gmail.com', 'Mehsana', '8200051378', 'Mehsana', 'cod', 50.00, 'pending', '2025-03-19 00:40:24', '2025-03-19 00:40:24'),
(9, 1, 'Tejas', 'shahtejas3333@gmail.com', 'Mehsana', '1234567890', 'Mehsana', 'cod', 1160.00, 'pending', '2025-03-19 00:40:54', '2025-03-19 00:40:54'),
(10, 1, 'Tejas', 'shahtejas3333@gmail.com', 'Mehsana', '1234567890', 'Mehsana', 'cod', 1160.00, 'pending', '2025-03-19 00:47:36', '2025-03-19 00:47:36'),
(11, 1, 'Tejas', 'shahtejas3333@gmail.com', 'Mehsana', '1234567890', 'Mehsana', 'cod', 1160.00, 'pending', '2025-03-19 00:47:40', '2025-03-19 00:47:40'),
(12, 1, 'Tejas', 'shahtejas3333@gmail.com', 'Mehsana', '1234567890', 'Mehsana', 'cod', 2270.00, 'delivered', '2025-03-19 00:55:02', '2025-03-19 06:13:10'),
(13, 1, 'Tejas', 'shahtejas3333@gmail.com', 'jajha', '9664863028', 'Mehsana', 'card', 1160.00, 'pending', '2025-03-19 01:23:21', '2025-03-19 01:23:21'),
(14, 1, 'Tejas', 'shahtejas3333@gmail.com', 'ddda', '1234567890', 'Visnagar', 'card', 1160.00, 'delivered', '2025-03-19 06:05:35', '2025-04-02 08:11:06'),
(15, 1, 'Tejas', 'shahtejas3333@gmail.com', 'ddda', '1234567890', 'Visnagar', 'card', 1160.00, 'pending', '2025-03-19 06:06:06', '2025-03-19 06:06:06'),
(16, 1, 'Tejas', 'shahtejas3333@gmail.com', 'Mehsana', '9664863028', 'Mehsana', 'card', 1160.00, 'pending', '2025-03-20 02:51:39', '2025-03-20 02:51:39'),
(17, 1, 'Tejas', 'shahtejas3333@gmail.com', 'A\'bad', '9090909090', 'A\'bad', 'upi', 1160.00, 'pending', '2025-04-03 09:07:23', '2025-04-03 09:07:23'),
(18, 1, 'Tejas', 'shahtejas3333@gmail.com', 'Kheralu', '8200051378', 'Mehsana', 'card', 1160.00, 'pending', '2025-04-04 07:46:41', '2025-04-04 07:46:41'),
(19, 1, 'Tejas', 'shahtejas3333@gmail.com', 'Mehsana', '8200051378', 'Mehsana', 'card', 2120.00, 'pending', '2025-04-04 09:07:52', '2025-04-04 09:07:52'),
(20, 1, 'Tejas', 'shahtejas3333@gmail.com', 'Mehsana', '8200051378', 'Mehsana', 'card', 1736.00, 'pending', '2025-04-04 12:55:20', '2025-04-04 12:55:20'),
(21, 1, 'Tejas', 'shahtejas3333@gmail.com', 'Mehsana', '8200051378', 'Visnagar', 'cod', 1160.00, 'pending', '2025-04-06 01:20:07', '2025-04-06 01:20:07'),
(22, 1, 'Tejas', 'shahtejas3333@gmail.com', 'Mehsana', '8200051378', 'Mehsana', 'card', 5470.00, 'pending', '2025-04-09 13:42:34', '2025-04-09 13:42:34'),
(23, 1, 'Tejas', 'shahtejas3333@gmail.com', 'Mehsana', '8200051378', 'Mehsana', 'card', 5470.00, 'pending', '2025-04-09 13:43:49', '2025-04-09 13:43:49'),
(24, 1, 'Tejas', 'shahtejas3333@gmail.com', 'Mehsana', '8200051378', 'Mehsana', 'card', 5470.00, 'pending', '2025-04-09 13:45:20', '2025-04-09 13:45:20'),
(25, 2, 'Saurav', 'saurav123@gmail.com', 'Ahmedabad', '1234567890', 'Ahmedabad', 'upi', 2120.00, 'pending', '2025-04-10 00:26:09', '2025-04-10 00:26:09');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `service_charge` decimal(10,2) NOT NULL,
  `gst` decimal(10,2) NOT NULL,
  `delivery` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `name`, `description`, `price`, `quantity`, `service_charge`, `gst`, `delivery`, `created_at`, `updated_at`) VALUES
(1, 1, '8', 'Carpenter Hammer', 'A durable hammer for carpentry.', 750.00, 14, 10.00, 18.00, 150.00, '2025-03-14 13:35:01', '2025-03-14 13:35:01'),
(2, 1, '9', 'Wood Saw', 'A sharp saw for cutting wood.', 1200.00, 3, 10.00, 18.00, 150.00, '2025-03-14 13:35:01', '2025-03-14 13:35:01'),
(3, 1, '10', 'Electric Drill', 'A powerful drill for electricians.', 1500.00, 1, 10.00, 18.00, 150.00, '2025-03-14 13:35:01', '2025-03-14 13:35:01'),
(4, 1, '11', 'Wooden Table', 'Handcrafted wooden table with a smooth finish.', 1200.00, 2, 10.00, 18.00, 150.00, '2025-03-14 13:35:01', '2025-03-14 13:35:01'),
(5, 1, '12', 'Wooden Chair', 'Elegant wooden chair with a comfortable design.', 800.00, 1, 10.00, 18.00, 150.00, '2025-03-14 13:35:01', '2025-03-14 13:35:01'),
(6, 1, '15', 'Electric Drill', 'A powerful drill for electricians.', 1500.00, 16, 10.00, 18.00, 150.00, '2025-03-14 13:35:01', '2025-03-14 13:35:01'),
(7, 1, '16', 'Wire Stripper', 'A tool for stripping electrical wires.', 500.00, 2, 10.00, 18.00, 150.00, '2025-03-14 13:35:01', '2025-03-14 13:35:01'),
(8, 1, '17', 'Voltage Tester', 'A device to test electrical voltage.', 800.00, 1, 10.00, 18.00, 150.00, '2025-03-14 13:35:01', '2025-03-14 13:35:01'),
(9, 3, '8', 'Carpenter Hammer', 'A durable hammer for carpentry.', 750.00, 1, 10.00, 18.00, 150.00, '2025-03-14 14:21:55', '2025-03-14 14:21:55'),
(10, 3, '21', 'Cable Cutter', 'A tool for cutting electrical cables.', 600.00, 1, 10.00, 18.00, 150.00, '2025-03-14 14:21:55', '2025-03-14 14:21:55'),
(14, 9, '8', 'Carpenter Hammer', 'A durable hammer for carpentry.', 750.00, 1, 10.00, 18.00, 150.00, '2025-03-19 00:40:54', '2025-03-19 00:40:54'),
(15, 10, '8', 'Carpenter Hammer', 'A durable hammer for carpentry.', 750.00, 1, 10.00, 18.00, 150.00, '2025-03-19 00:47:36', '2025-03-19 00:47:36'),
(16, 11, '8', 'Carpenter Hammer', 'A durable hammer for carpentry.', 750.00, 1, 10.00, 18.00, 150.00, '2025-03-19 00:47:40', '2025-03-19 00:47:40'),
(17, 12, '8', 'Carpenter Hammer', 'A durable hammer for carpentry.', 750.00, 2, 10.00, 18.00, 150.00, '2025-03-19 00:55:02', '2025-03-19 00:55:02'),
(18, 13, '8', 'Carpenter Hammer', 'A durable hammer for carpentry.', 750.00, 1, 10.00, 18.00, 150.00, '2025-03-19 01:23:21', '2025-03-19 01:23:21'),
(19, 14, '8', 'Carpenter Hammer', 'A durable hammer for carpentry.', 750.00, 1, 10.00, 18.00, 150.00, '2025-03-19 06:05:35', '2025-03-19 06:05:35'),
(20, 15, '8', 'Carpenter Hammer', 'A durable hammer for carpentry.', 750.00, 1, 10.00, 18.00, 150.00, '2025-03-19 06:06:06', '2025-03-19 06:06:06'),
(21, 16, '8', 'Carpenter Hammer', 'A durable hammer for carpentry.', 750.00, 1, 10.00, 18.00, 150.00, '2025-03-20 02:51:39', '2025-03-20 02:51:39'),
(22, 17, '8', 'Carpenter Hammer', 'A durable hammer for carpentry.', 750.00, 1, 10.00, 18.00, 150.00, '2025-04-03 09:07:23', '2025-04-03 09:07:23'),
(23, 18, '8', 'Carpenter Hammer', 'A durable hammer for carpentry.', 750.00, 1, 10.00, 18.00, 150.00, '2025-04-04 07:46:41', '2025-04-04 07:46:41'),
(24, 19, '10', 'Electric Drill', 'A powerful drill for electricians.', 1500.00, 1, 10.00, 18.00, 150.00, '2025-04-04 09:07:52', '2025-04-04 09:07:52'),
(25, 20, '9', 'Wood Saw', 'A sharp saw for cutting wood.', 1200.00, 1, 10.00, 18.00, 150.00, '2025-04-04 12:55:20', '2025-04-04 12:55:20'),
(26, 21, '8', 'Carpenter Hammer', 'A durable hammer for carpentry.', 750.00, 1, 10.00, 18.00, 150.00, '2025-04-06 01:20:07', '2025-04-06 01:20:07'),
(27, 22, '10', 'Electric Drill', 'A powerful drill for electricians.', 1500.00, 1, 10.00, 18.00, 150.00, '2025-04-09 13:42:34', '2025-04-09 13:42:34'),
(28, 22, '13', 'Cabinet', 'Stylish wooden cabinet with multiple compartments.', 2500.00, 1, 10.00, 18.00, 150.00, '2025-04-09 13:42:34', '2025-04-09 13:42:34'),
(29, 23, '10', 'Electric Drill', 'A powerful drill for electricians.', 1500.00, 1, 10.00, 18.00, 150.00, '2025-04-09 13:43:49', '2025-04-09 13:43:49'),
(30, 23, '13', 'Cabinet', 'Stylish wooden cabinet with multiple compartments.', 2500.00, 1, 10.00, 18.00, 150.00, '2025-04-09 13:43:49', '2025-04-09 13:43:49'),
(31, 24, '10', 'Electric Drill', 'A powerful drill for electricians.', 1500.00, 1, 10.00, 18.00, 150.00, '2025-04-09 13:45:20', '2025-04-09 13:45:20'),
(32, 24, '13', 'Cabinet', 'Stylish wooden cabinet with multiple compartments.', 2500.00, 1, 10.00, 18.00, 150.00, '2025-04-09 13:45:20', '2025-04-09 13:45:20'),
(33, 25, '22', 'Yoga Mat', 'A high-quality yoga mat for comfortable practice.', 1500.00, 1, 10.00, 18.00, 150.00, '2025-04-10 00:26:09', '2025-04-10 00:26:09');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 6, 'api-token', '7f04f5eaf3bb690207d3474bc9f52ca7ac07724fd4f19679fec0e95cd2a9b894', '[\"*\"]', NULL, NULL, '2025-04-14 03:02:35', '2025-04-14 03:02:35'),
(2, 'App\\Models\\User', 7, 'api-token', '2f5d657987b4c91b755a412ed8cac032372b0fc67b44d224ae1985f4d171f859', '[\"*\"]', NULL, NULL, '2025-04-14 03:53:31', '2025-04-14 03:53:31'),
(3, 'App\\Models\\User', 8, 'api-token', '969effe12a51b5fe43b580ea7624d04b0054077d564768c1779b51f85af51a0a', '[\"*\"]', NULL, NULL, '2025-04-14 07:45:03', '2025-04-14 07:45:03');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `service_charge_percentage` decimal(5,2) DEFAULT 10.00,
  `gst_percentage` decimal(5,2) DEFAULT 18.00,
  `delivery_fee` decimal(10,2) DEFAULT 150.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `category_id`, `created_at`, `updated_at`, `service_charge_percentage`, `gst_percentage`, `delivery_fee`) VALUES
(8, 'Carpenter Hammer', 'A durable hammer for carpentry.', 750.00, 'https://img.freepik.com/free-photo/side-view-hand-holding-hammer_23-2149916258.jpg?t=st=1742837706~exp=1742841306~hmac=7580bc7f56ebb197a0b22f9d533554aa0a024802420e7f8cd8b746ce109a9506&w=1800', 1, '2025-03-11 18:22:38', '2025-03-24 12:05:36', 10.00, 18.00, 150.00),
(9, 'Wood Saw', 'A sharp saw for cutting wood.', 1200.00, 'https://img.freepik.com/free-photo/craftsman-using-circular-saw_1157-45893.jpg?t=st=1742837770~exp=1742841370~hmac=ec9b30ea171cbd34e2a3f6c9db2a10c88c57353b6c484f7de37f3f5047afaf8d&w=1800', 1, '2025-03-11 18:22:38', '2025-03-24 12:06:24', 10.00, 18.00, 150.00),
(10, 'Electric Drill', 'A powerful drill for electricians.', 1500.00, 'https://img.freepik.com/free-photo/man-working-wood-engraving-workshop_23-2149185396.jpg?t=st=1742837808~exp=1742841408~hmac=a9d1bc322d08651e954ddcd9b0aeb2ba1ea3d97d10607d9b0406c5c10d84b3e0&w=1800', 2, '2025-03-11 18:22:38', '2025-03-24 12:07:01', 10.00, 18.00, 150.00),
(11, 'Wooden Table', 'Handcrafted wooden table with a smooth finish.', 1200.00, 'https://images.unsplash.com/photo-1600585154340-be...', 1, '2025-03-11 18:22:38', '2025-03-11 18:22:38', 10.00, 18.00, 150.00),
(12, 'Wooden Chair', 'Elegant wooden chair with a comfortable design.', 800.00, 'https://img.freepik.com/free-photo/male-carpenter-sanding-wood-with-orbital-sander-workshop_23-2147944826.jpg?t=st=1742837876~exp=1742841476~hmac=f5781e3be250b3718c7ddddefffabe0b73a3591bc409baa47684b87b2c59c7be&w=1800', 1, '2025-03-11 18:22:38', '2025-03-24 12:08:09', 10.00, 18.00, 150.00),
(13, 'Cabinet', 'Stylish wooden cabinet with multiple compartments.', 2500.00, 'https://img.freepik.com/free-photo/man-working-wood-engraving-workshop_23-2149185403.jpg?t=st=1742837923~exp=1742841523~hmac=2dbaa578d003c54277b6572643d29497a5ecad58ddc29f02e267a34659c4de51&w=1800', 1, '2025-03-11 18:22:38', '2025-03-24 12:08:57', 10.00, 18.00, 150.00),
(14, 'Bookshelf', 'Modern wooden bookshelf for your home or office.', 1800.00, 'https://img.freepik.com/free-photo/furniture-assembly-worker-standing-reading-instruction-using-tape-measure-worker-tools_482257-24849.jpg?t=st=1742837962~exp=1742841562~hmac=0b06865c27c73d3adab362a7cae3119071e7604bb18443c0e92ef9e437d2df8a&w=2000', 1, '2025-03-11 18:22:38', '2025-03-24 12:09:37', 10.00, 18.00, 150.00),
(15, 'Electric Drill', 'A powerful drill for electricians.', 1500.00, 'https://img.freepik.com/free-photo/male-electrician-working-switchboard-male-electrician-overalls-working-with-electricity_169016-66706.jpg?t=st=1742838027~exp=1742841627~hmac=5f3efe50994a7013744eeeb45146e691b1a38a589b462f936064a52313bc135c&w=1800', 2, '2025-03-12 17:30:22', '2025-03-24 12:10:42', 10.00, 18.00, 150.00),
(16, 'Wire Stripper', 'A tool for stripping electrical wires.', 500.00, 'https://images.unsplash.com/photo-1586023492125-27...', 2, '2025-03-12 17:30:22', '2025-03-12 17:30:22', 10.00, 18.00, 150.00),
(17, 'Voltage Tester', 'A device to test electrical voltage.', 800.00, 'https://img.freepik.com/free-photo/service-maintenance-worker-repairing_23-2149176691.jpg?t=st=1742838165~exp=1742841765~hmac=1035d24b08a83748dccfe26e2c0c90eca650b666bdd071201a71d21498181516&w=1800', 2, '2025-03-12 17:30:22', '2025-03-24 12:12:59', 10.00, 18.00, 150.00),
(18, 'Circuit Breaker', 'A safety device for electrical circuits.', 2000.00, 'https://img.freepik.com/free-photo/man-electrical-technician-working-switchboard-with-fuses-uses-tablet_169016-24811.jpg?t=st=1742838263~exp=1742841863~hmac=0b5113a4c4d6094dbea3abcbe807ce5d4c2d42d22a2443f7a2b7da0dd5a73e11&w=1800', 2, '2025-03-12 17:30:22', '2025-03-24 12:14:42', 10.00, 18.00, 150.00),
(19, 'Electrical Tape', 'Insulating tape for electrical wires.', 100.00, 'https://img.freepik.com/free-photo/male-electrician-works-switchboard-with-electrical-connecting-cable_169016-18026.jpg?t=st=1742838309~exp=1742841909~hmac=60aa9446914e71d32ba87b78638304fef16a85f38f2fbb3f6a1ff11089679bda&w=1800', 2, '2025-03-12 17:30:22', '2025-03-24 12:15:25', 10.00, 18.00, 150.00),
(20, 'Multimeter', 'A device to measure voltage, current, and resistance.', 1200.00, 'https://images.unsplash.com/photo-1616486338812-3d...', 2, '2025-03-12 17:30:22', '2025-03-12 17:30:22', 10.00, 18.00, 150.00),
(21, 'Cable Cutter', 'A tool for cutting electrical cables.', 600.00, 'https://images.unsplash.com/photo-1604061986761-d9...', 2, '2025-03-12 17:30:22', '2025-03-12 17:30:22', 10.00, 18.00, 150.00),
(22, 'Yoga Mat', 'A high-quality yoga mat for comfortable practice.', 1500.00, 'https://img.freepik.com/free-photo/healthy-woman-doing-yoga_53876-13505.jpg?t=st=1742838367~exp=1742841967~hmac=5cfbcabc38c86ae29f19fbaf8ac68f98ef82933d54030330c052a4d5dff2aff1&w=1800', 3, '2025-03-12 17:42:13', '2025-03-24 12:16:31', 10.00, 18.00, 150.00),
(23, 'Yoga Blocks', 'Foam yoga blocks for support and balance.', 800.00, 'https://img.freepik.com/free-photo/young-woman-with-yoga-essentials_23-2149502677.jpg?t=st=1742838539~exp=1742842139~hmac=251607608e452c3968d5a10c3ab8d626c33e517b4d323fb1ad7be48bb0fd2815&w=1800', 3, '2025-03-12 17:42:13', '2025-03-24 12:19:14', 10.00, 18.00, 150.00),
(24, 'Yoga Strap', 'A durable yoga strap for stretching and flexibility.', 500.00, 'https://img.freepik.com/free-photo/woman-with-elastic-band-looking-camera_23-2147776458.jpg?t=st=1742838592~exp=1742842192~hmac=c200792de802655c5fc6f0cdfda33f64f06cc24e895cffc3cac87a190f6d315f&w=1800', 3, '2025-03-12 17:42:13', '2025-03-24 12:20:07', 10.00, 18.00, 150.00),
(25, 'Meditation Cushion', 'A comfortable cushion for meditation and relaxation.', 1200.00, 'https://img.freepik.com/free-photo/portrait-fit-healthy-woman-home-practice-yoga-sitting-rubber-mat-listening_1258-253739.jpg?t=st=1742838642~exp=1742842242~hmac=f7bd9c271da698982178e23203dcc3db3906b7eeef4120b414e8ff530ef4c17e&w=1800', 3, '2025-03-12 17:42:13', '2025-03-24 12:20:57', 10.00, 18.00, 150.00),
(26, 'Pipe Wrench', 'A heavy-duty pipe wrench for plumbing repairs.', 1200.00, 'https://img.freepik.com/free-photo/plumbing-professional-doing-his-job_23-2150721548.jpg?t=st=1742838701~exp=1742842301~hmac=2b698bdaa2b78445f899f72f554468270a5b5ce3f12dcc71a74c508f84945482&w=1800', 4, '2025-03-12 17:48:29', '2025-03-24 12:21:55', 10.00, 18.00, 150.00),
(27, 'Plunger', 'A high-quality plunger for unclogging drains.', 500.00, 'https://img.freepik.com/free-photo/cheerful-asian-plumber-sitting-floor-repairing-kitchen-sink_1098-17780.jpg?t=st=1742838767~exp=1742842367~hmac=612bae3c5b85c17fae30fd4565e9bd16cec42f15bebe78045379d8579afeb33d&w=1800', 4, '2025-03-12 17:48:29', '2025-03-24 12:23:04', 10.00, 18.00, 150.00),
(28, 'Pipe Cutter', 'A tool for cutting pipes with precision.', 800.00, 'https://img.freepik.com/free-photo/man-fixing-kitchen-sink_53876-13430.jpg?t=st=1742838829~exp=1742842429~hmac=8aa56d84a6be25700086e72b422fed836ada6c6f6e2f635591bf389be8e109e3&w=1480', 4, '2025-03-12 17:48:29', '2025-03-24 12:24:12', 10.00, 18.00, 150.00),
(29, 'Teflon Tape', 'A durable tape for sealing pipe threads.', 100.00, 'https://img.freepik.com/free-photo/woman-with-visor-tape_23-2148740982.jpg?t=st=1742838888~exp=1742842488~hmac=f152d170e91f6914b00a4ad8ec4f78f2f6caa764613386a9271bd5549ec34937&w=1800', 4, '2025-03-12 17:48:29', '2025-03-24 12:25:20', 10.00, 18.00, 150.00),
(30, 'Tejas', 'Shah', 10000.00, 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?q=80&w=2574&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 4, '2025-03-24 08:48:51', '2025-03-24 08:48:51', 150.00, 18.00, 50.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tejas', 'shahtejas3333@gmail.com', NULL, '$2y$10$glTDu5ORFdfFLFPu1wmKtelKts2pCJ1nVc1pjEhhtL/pqc5m3Qxf6', NULL, '2025-03-12 12:59:13', '2025-03-12 12:59:13'),
(2, 'Saurav', 'saurav123@gmail.com', NULL, '$2y$10$PUSmpZNCtRG.fAzvuwetuONlpKUfigbtW2ietKnkiw5vaB.QORLLq', NULL, '2025-03-13 07:55:42', '2025-03-13 07:55:42'),
(3, 'Ankit', 'ankit123@gmail.com', NULL, '$2y$10$RgVf1PJTgd59QpTmfS9tAOEULrmDA7U1AERUnTReSToEGXwZJxOj2', NULL, '2025-03-14 14:20:55', '2025-03-14 14:20:55'),
(5, 'Tejas', 'shahtejasa5a5@gmail.com', NULL, '$2y$10$NyFE8BQ0eEXO7fR9bl/mEeSLMpZs1iXYh0mrWrec3HaaSZR4cZHIm', NULL, '2025-04-09 14:09:49', '2025-04-09 14:09:49'),
(6, 'Test User', 'test@example.com', NULL, '$2y$10$L4px9CTbcKTsm9hHKqjk8.2jkWNbQOXG1UHzMDRl2phXjAEJtCHCK', NULL, '2025-04-14 03:02:35', '2025-04-14 03:02:35'),
(7, 'Tejas', 'tejas@example.com', NULL, '$2y$10$gKykyJAfqa2f4WHCw5Bibe2lrdTuJfKmKatIqO/i/i5STsheSiqxu', NULL, '2025-04-14 03:53:31', '2025-04-14 03:53:31'),
(8, 'Test User', 'test5@example.com', NULL, '$2y$10$aXEGM4OB7ybysA3qFrqMguFw0pZBd886nHhiKF0cLmu8G16wP0jpC', NULL, '2025-04-14 07:45:03', '2025-04-14 07:45:03');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(4, 1, 9, '2025-04-02 07:32:11', '2025-04-02 07:32:11'),
(5, 1, 15, '2025-04-09 08:44:32', '2025-04-09 08:44:32'),
(6, 1, 23, '2025-04-09 09:20:15', '2025-04-09 09:20:15'),
(7, 1, 27, '2025-04-09 09:42:04', '2025-04-09 09:42:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `main_services`
--
ALTER TABLE `main_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `wishlist_user_id_product_id_unique` (`user_id`,`product_id`),
  ADD KEY `wishlist_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `main_services`
--
ALTER TABLE `main_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD CONSTRAINT `feedbacks_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `feedbacks_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wishlist_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
