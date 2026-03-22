-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14 مارس 2026 الساعة 15:15
-- إصدار الخادم: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shooping`
--

-- --------------------------------------------------------

--
-- بنية الجدول `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `abouts`
--

INSERT INTO `abouts` (`id`, `text`, `image`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Smart Skincare', 'GylzBk1asNgB_1771769463.png', 'Where Science Meets Nature: Our unique blend of advanced skincare technology and potent natural ingredients helps to amplify your skin\'s natural radiance.', 'Active', '2026-02-22 12:11:03', '2026-02-22 12:11:03'),
(2, 'Smart Skincare', 'GylzBk1asNgB_1771769463.png', 'Where Science Meets Nature: Our unique blend of advanced skincare technology and potent natural ingredients helps to amplify your skin\'s natural radiance.', 'Active', '2026-02-22 12:11:03', '2026-02-22 12:11:03'),
(3, 'Smart Skincare', 'GylzBk1asNgB_1771769463.png', 'Where Science Meets Nature: Our unique blend of advanced skincare technology and potent natural ingredients helps to amplify your skin\'s natural radiance.', 'Active', '2026-02-22 12:11:03', '2026-02-22 12:11:03'),
(4, 'Smart Skincare', 'GylzBk1asNgB_1771769463.png', 'Where Science Meets Nature: Our unique blend of advanced skincare technology and potent natural ingredients helps to amplify your skin\'s natural radiance.', 'Active', '2026-02-22 12:11:03', '2026-02-22 12:11:03'),
(5, 'Consectetur corrupt', 'MScYWvURuMHZ_1773154469.jpg', 'Atque quo doloremque', 'Active', '2026-03-10 12:54:29', '2026-03-10 12:54:29');

-- --------------------------------------------------------

--
-- بنية الجدول `angeles`
--

CREATE TABLE `angeles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `angeles`
--

INSERT INTO `angeles` (`id`, `text`, `desc`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Harum asperiores ut', 'Rerum maiores aut eu', 'Active', '2026-02-22 12:13:31', '2026-02-22 12:13:31'),
(2, 'Incidunt neque labo', 'Porro dicta cillum o', 'Active', '2026-02-22 12:13:39', '2026-02-22 12:13:39'),
(3, 'Natus esse nulla sed', 'Sequi qui rerum quis', 'Active', '2026-02-22 12:13:47', '2026-02-22 12:13:47'),
(4, 'Ut sit et expedita a', 'Corrupti animi mag', 'Active', '2026-02-22 12:13:53', '2026-02-22 12:13:53');

-- --------------------------------------------------------

--
-- بنية الجدول `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `description` text NOT NULL,
  `headers` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`headers`)),
  `date` date NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `articles`
--

INSERT INTO `articles` (`id`, `image`, `name`, `content`, `description`, `headers`, `date`, `status`, `created_at`, `updated_at`) VALUES
(14, 'I2K727HTSJmC1773153620.jpg', 'Yolanda Delacruz', '[\"Nam dolores duis pla\"]', 'Minus et vero aspern', '[\"Quia ut irure ex har\"]', '2021-06-19', 'Active', '2026-03-10 12:40:20', '2026-03-10 12:40:20');

-- --------------------------------------------------------

--
-- بنية الجدول `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Nature\'s Way to Healthy, Radiant Skin.', '1LdmLyqFcL4m1771769307.png', 'Rooted in nature, our Basalt skincare harnesses the power of natural ingredients to work in harmony with your skin, revealing a radiant glow that\'s uniquely yours.', 'Active', '2026-02-22 11:35:08', '2026-02-22 12:08:27'),
(2, 'Nature\'s Way to Healthy, Radiant Skin.', '1LdmLyqFcL4m1771769307.png', 'Rooted in nature, our Basalt skincare harnesses the power of natural ingredients to work in harmony with your skin, revealing a radiant glow that\'s uniquely yours.', 'Active', '2026-02-22 11:35:08', '2026-02-22 12:08:27'),
(3, 'Eugenia Sanders', 'fk7aq6zfO0VU1773154221.jpg', 'Pariatur Quibusdam', 'Active', '2026-03-10 12:50:21', '2026-03-10 12:50:21');

-- --------------------------------------------------------

--
-- بنية الجدول `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `questions` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `order_link` varchar(255) DEFAULT NULL,
  `info_link` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `youTube` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `contacts`
--

INSERT INTO `contacts` (`id`, `questions`, `description`, `image`, `order_link`, `info_link`, `linkedin`, `twitter`, `youTube`, `instagram`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Excepturi accusamus', 'Assumenda iure minim', 'MTSTC0igeddm_1771769736.png', 'Ad provident illo i', 'Pariatur Aliquip as', 'Eiusmod sint except', 'In sint totam nisi', 'Et molestiae maiores', 'Eos aute dolorum atq', 'Active', '2026-02-22 12:15:36', '2026-02-22 12:15:36');

-- --------------------------------------------------------

--
-- بنية الجدول `failed_jobs`
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
-- بنية الجدول `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer_question` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer_question`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ut quo provident du ?', 'Where Science Meets Nature: Our unique blend of advanced skincare technology and potent natural ingredients helps to amplify your skin\'s natural radiance.', 'Active', '2026-02-22 12:14:19', '2026-02-22 12:14:19'),
(2, 'Ut quo provident du ?', 'Where Science Meets Nature: Our unique blend of advanced skincare technology and potent natural ingredients helps to amplify your skin\'s natural radiance.', 'Active', '2026-02-22 12:14:43', '2026-02-22 12:14:43');

-- --------------------------------------------------------

--
-- بنية الجدول `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(59, '0001_01_01_000000_create_users_table', 1),
(60, '0001_01_01_000001_create_cache_table', 1),
(61, '0001_01_01_000002_create_jobs_table', 1),
(62, '2026_02_03_075455_create_categories_table', 1),
(63, '2026_02_03_123657_create_products_table', 1),
(64, '2026_02_03_145658_create_articles_table', 1),
(65, '2026_02_03_181113_create_abouts_table', 1),
(66, '2026_02_03_185514_create_angeles_table', 1),
(67, '2026_02_03_193850_create_settings_table', 1),
(68, '2026_02_05_114628_create_faqs_table', 1),
(69, '2026_02_05_140729_create_profiles_table', 1),
(70, '2026_02_06_130504_create_notifications_table', 1),
(71, '2026_02_06_135809_create_orders_table', 1),
(72, '2026_02_06_135945_create_order_items_table', 1),
(73, '2026_02_17_121954_create_contacts_table', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('169b9d8e-839c-479c-b7eb-02650873fae0', 'App\\Notifications\\AdminActionNotification', 'App\\Models\\User', 1, '{\"message\":\"Add Contact :  Excepturi accusamus\"}', NULL, '2026-02-22 12:15:36', '2026-02-22 12:15:36'),
('223e1e3f-0374-498e-945e-1515d3117146', 'App\\Notifications\\AdminActionNotification', 'App\\Models\\User', 1, '{\"message\":\"Add Article :  Bryar Ferguson\"}', NULL, '2026-03-02 14:00:44', '2026-03-02 14:00:44'),
('2811e6c0-47c8-4334-8510-0f7f03ad9535', 'App\\Notifications\\AdminActionNotification', 'App\\Models\\User', 1, '{\"message\":\"Add Angele :  Ut sit et expedita a\"}', NULL, '2026-02-22 12:13:53', '2026-02-22 12:13:53'),
('32bb1d6c-b370-4ad2-a54b-5099fb40d0a8', 'App\\Notifications\\AdminActionNotification', 'App\\Models\\User', 1, '{\"message\":\"Add Angele :  Incidunt neque labo\"}', NULL, '2026-02-22 12:13:39', '2026-02-22 12:13:39'),
('341db805-38d3-42db-8dcc-ef071af18ebe', 'App\\Notifications\\AdminActionNotification', 'App\\Models\\User', 2, '{\"message\":\"Add Article :  Bryar Ferguson\"}', NULL, '2026-03-02 14:00:44', '2026-03-02 14:00:44'),
('372d5337-a059-4afc-a20e-a8614aa4d036', 'App\\Notifications\\AdminActionNotification', 'App\\Models\\User', 1, '{\"message\":\"Add Category :  Eugenia Sanders\"}', NULL, '2026-03-10 12:50:25', '2026-03-10 12:50:25'),
('4882ba78-8e60-4eaf-9938-4991ad66b455', 'App\\Notifications\\AdminActionNotification', 'App\\Models\\User', 1, '{\"message\":\"Add About :  Smart Skincare\"}', NULL, '2026-02-22 12:11:03', '2026-02-22 12:11:03'),
('5563d65e-af75-4d41-8c25-505618cd1574', 'App\\Notifications\\AdminActionNotification', 'App\\Models\\User', 1, '{\"message\":\"Add About :  Consectetur corrupt\"}', NULL, '2026-03-10 12:54:29', '2026-03-10 12:54:29'),
('5b389722-4501-4b69-947d-ff87e59721b6', 'App\\Notifications\\AdminActionNotification', 'App\\Models\\User', 1, '{\"message\":\"Add Faq :  Ut quo provident du ?\"}', NULL, '2026-02-22 12:14:43', '2026-02-22 12:14:43'),
('5f7342c6-fb44-4a94-ad1d-3c5ba54fb912', 'App\\Notifications\\AdminActionNotification', 'App\\Models\\User', 1, '{\"message\":\"Add Article :  Adam Alvarado\"}', NULL, '2026-03-02 13:37:24', '2026-03-02 13:37:24'),
('904e371f-ac71-49cf-9996-bab621d05798', 'App\\Notifications\\AdminActionNotification', 'App\\Models\\User', 1, '{\"message\":\"Add Category :  Nature\'s Way to Healthy, Radiant Skin.\"}', NULL, '2026-02-22 11:35:10', '2026-02-22 11:35:10'),
('9479213f-cc9e-4657-8941-d1c9989ce838', 'App\\Notifications\\AdminActionNotification', 'App\\Models\\User', 1, '{\"message\":\"Add Angele :  Harum asperiores ut\"}', NULL, '2026-02-22 12:13:32', '2026-02-22 12:13:32'),
('9d283d32-0a7b-4bca-8a8e-02e7044c1f38', 'App\\Notifications\\AdminActionNotification', 'App\\Models\\User', 1, '{\"message\":\"Add Article :  Holly Barber\"}', NULL, '2026-02-22 12:13:01', '2026-02-22 12:13:01'),
('b5b993f8-b598-4d78-8fea-49658e6aa54b', 'App\\Notifications\\AdminActionNotification', 'App\\Models\\User', 2, '{\"message\":\"Add Category :  Eugenia Sanders\"}', NULL, '2026-03-10 12:50:25', '2026-03-10 12:50:25'),
('b640ad65-e12b-4a6a-a37b-f9c73ab6a235', 'App\\Notifications\\AdminActionNotification', 'App\\Models\\User', 2, '{\"message\":\"Add Article :  Adam Alvarado\"}', NULL, '2026-03-02 13:37:24', '2026-03-02 13:37:24'),
('c9a97abd-2460-4eac-b29a-901f56cdc5c9', 'App\\Notifications\\AdminActionNotification', 'App\\Models\\User', 1, '{\"message\":\"Add Product :  Claro\"}', NULL, '2026-02-22 11:36:35', '2026-02-22 11:36:35'),
('e55e811c-5291-4fed-874c-f733fe08c4dc', 'App\\Notifications\\AdminActionNotification', 'App\\Models\\User', 2, '{\"message\":\"Add About :  Consectetur corrupt\"}', NULL, '2026-03-10 12:54:29', '2026-03-10 12:54:29'),
('ebb0d173-2e7b-4966-82b4-e059caee42ff', 'App\\Notifications\\AdminActionNotification', 'App\\Models\\User', 1, '{\"message\":\"Add Angele :  Natus esse nulla sed\"}', NULL, '2026-02-22 12:13:47', '2026-02-22 12:13:47');

-- --------------------------------------------------------

--
-- بنية الجدول `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total_price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `payment_intent_id` varchar(255) DEFAULT NULL,
  `payment_status` enum('pending','paid','failed','refunded') NOT NULL DEFAULT 'pending',
  `status` enum('pending','paid','processing','completed','canceled') NOT NULL DEFAULT 'pending',
  `source` enum('admin','user') NOT NULL DEFAULT 'admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total_price`, `payment_intent_id`, `payment_status`, `status`, `source`, `created_at`, `updated_at`) VALUES
(7, 1, 100.00, 'pi_3T3dfPB9M58c4poI1GfouJEg', 'paid', 'pending', 'user', '2026-02-22 12:29:49', '2026-02-22 12:31:50'),
(8, 1, 100.00, 'pi_3T3dq2B9M58c4poI0dS66qZo', 'paid', 'processing', 'user', '2026-02-22 12:40:50', '2026-02-27 10:20:06'),
(9, 2, 500.00, 'pi_3T5BnPB9M58c4poI09G37uUE', 'paid', 'pending', 'user', '2026-02-26 19:08:29', '2026-02-26 19:11:20'),
(10, 2, 100.00, 'pi_3T5Bs1B9M58c4poI0HizuGg9', 'paid', 'pending', 'user', '2026-02-26 19:13:18', '2026-02-26 19:13:37'),
(11, 2, 800.00, 'pi_3T5BtEB9M58c4poI12CFDkIg', 'paid', 'pending', 'user', '2026-02-26 19:14:33', '2026-02-26 19:14:49'),
(12, 2, 400.00, 'pi_3T5OkyB9M58c4poI0cOUWWEn', 'paid', 'pending', 'user', '2026-02-27 08:58:52', '2026-02-27 09:00:12'),
(13, 1, 100.00, NULL, 'paid', 'processing', 'admin', '2026-02-27 10:20:29', '2026-02-27 10:20:42'),
(14, 2, 100.00, 'pi_3T5Q2vB9M58c4poI1XQprUNg', 'paid', 'paid', 'user', '2026-02-27 10:21:26', '2026-02-27 10:22:10'),
(15, 2, 25700.00, NULL, 'paid', 'processing', 'admin', '2026-02-27 10:22:57', '2026-02-27 10:23:01'),
(16, 2, 100.00, 'pi_3T5Qv1B9M58c4poI09VCekCl', 'paid', 'pending', 'user', '2026-02-27 11:17:21', '2026-02-27 11:25:25'),
(17, 2, 400.00, 'pi_3T5RNtB9M58c4poI1IWAqqTV', 'paid', 'pending', 'user', '2026-02-27 11:47:12', '2026-02-27 11:47:40');

-- --------------------------------------------------------

--
-- بنية الجدول `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 7, 1, 1, 100.00, '2026-02-22 12:29:49', '2026-02-22 12:29:49'),
(2, 8, 1, 1, 100.00, '2026-02-22 12:40:50', '2026-02-22 12:40:50'),
(3, 9, 1, 5, 100.00, '2026-02-26 19:08:29', '2026-02-26 19:08:29'),
(4, 10, 1, 1, 100.00, '2026-02-26 19:13:18', '2026-02-26 19:13:18'),
(5, 11, 1, 8, 100.00, '2026-02-26 19:14:33', '2026-02-26 19:14:33'),
(6, 12, 2, 4, 100.00, '2026-02-27 08:58:52', '2026-02-27 08:58:52'),
(7, 13, 1, 1, 100.00, '2026-02-27 10:20:29', '2026-02-27 10:20:29'),
(8, 14, 2, 1, 100.00, '2026-02-27 10:21:26', '2026-02-27 10:21:26'),
(9, 15, 3, 257, 100.00, '2026-02-27 10:22:57', '2026-02-27 10:22:57'),
(10, 16, 1, 1, 100.00, '2026-02-27 11:17:21', '2026-02-27 11:17:21'),
(11, 17, 2, 4, 100.00, '2026-02-27 11:47:12', '2026-02-27 11:47:12');

-- --------------------------------------------------------

--
-- بنية الجدول `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `product_type` enum('face','body') NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `package_size` int(11) NOT NULL,
  `main_components` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `products`
--

INSERT INTO `products` (`id`, `name`, `product_type`, `category_id`, `image`, `content`, `price`, `quantity`, `package_size`, `main_components`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Claro', 'face', 1, 'NdArTLSrOqkp1771767395.png', 'dfdslksfkldskf sdfn sdn dsn sdnf sdn dskjfnds;kjnf8nerwn gergn;erg;dskomf \'ewigj eriog n\'dlkg er;ogh eripng erk;lng ;erjg ;rewng ;werng; ewn; kwelngoewon ioerner gn ;erngner/', 100, 5, 400, 'dfdslksfkldskf sdfn sdn dsn sdnf sdn dskjfnds;kjnf8nerwn gergn;erg;dskomf \'ewigj eriog n\'dlkg er;ogh eripng erk;lng ;erjg ;rewng ;werng; ewn; kwelngoewon ioerner gn ;erngner/', 'dfdslksfkldskf sdfn sdn dsn sdnf sdn dskjfnds;kjnf8nerwn gergn;erg;dskomf \'ewigj eriog n\'dlkg er;ogh eripng erk;lng ;erjg ;rewng ;werng; ewn; kwelngoewon ioerner gn ;erngner/', 'Active', '2026-02-22 11:36:35', '2026-02-22 11:36:35'),
(2, 'Claro', 'body', 1, 'NdArTLSrOqkp1771767395.png', 'dfdslksfkldskf sdfn sdn dsn sdnf sdn dskjfnds;kjnf8nerwn gergn;erg;dskomf \'ewigj eriog n\'dlkg er;ogh eripng erk;lng ;erjg ;rewng ;werng; ewn; kwelngoewon ioerner gn ;erngner/', 100, 5, 400, 'dfdslksfkldskf sdfn sdn dsn sdnf sdn dskjfnds;kjnf8nerwn gergn;erg;dskomf \'ewigj eriog n\'dlkg er;ogh eripng erk;lng ;erjg ;rewng ;werng; ewn; kwelngoewon ioerner gn ;erngner/', 'dfdslksfkldskf sdfn sdn dsn sdnf sdn dskjfnds;kjnf8nerwn gergn;erg;dskomf \'ewigj eriog n\'dlkg er;ogh eripng erk;lng ;erjg ;rewng ;werng; ewn; kwelngoewon ioerner gn ;erngner/', 'Active', '2026-02-22 11:36:35', '2026-02-22 11:36:35'),
(3, 'Claro', 'face', 1, 'NdArTLSrOqkp1771767395.png', 'dfdslksfkldskf sdfn sdn dsn sdnf sdn dskjfnds;kjnf8nerwn gergn;erg;dskomf \'ewigj eriog n\'dlkg er;ogh eripng erk;lng ;erjg ;rewng ;werng; ewn; kwelngoewon ioerner gn ;erngner/', 100, 5, 400, 'dfdslksfkldskf sdfn sdn dsn sdnf sdn dskjfnds;kjnf8nerwn gergn;erg;dskomf \'ewigj eriog n\'dlkg er;ogh eripng erk;lng ;erjg ;rewng ;werng; ewn; kwelngoewon ioerner gn ;erngner/', 'dfdslksfkldskf sdfn sdn dsn sdnf sdn dskjfnds;kjnf8nerwn gergn;erg;dskomf \'ewigj eriog n\'dlkg er;ogh eripng erk;lng ;erjg ;rewng ;werng; ewn; kwelngoewon ioerner gn ;erngner/', 'Active', '2026-02-22 11:36:35', '2026-02-22 11:36:35');

-- --------------------------------------------------------

--
-- بنية الجدول `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('WwrdOjQP4fEwzumaXlElvbkoLQUJjT5tatYauyWK', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiNmRwbnpjT016NjdWblpKYTdGeXkxaGVMVlV3SGYxMmNlWXhpRmR2VCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9hYm91dHMvaW5kZXgiO3M6NToicm91dGUiO3M6MTg6ImFkbWluLmFib3V0cy5pbmRleCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6NDM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQvaW5kZXgiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6NDoiYXV0aCI7YToxOntzOjIxOiJwYXNzd29yZF9jb25maXJtZWRfYXQiO2k6MTc3MzE1Mjc1Njt9fQ==', 1773155602);

-- --------------------------------------------------------

--
-- بنية الجدول `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo_header` varchar(255) NOT NULL,
  `logo_footer` varchar(255) NOT NULL,
  `Terms_and_Conditions` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hamza zuhair', 'hamza@hamza', NULL, '$2y$12$rW9np6Qx9o6N4YLMbpsG0.JcNljkbIyKn0r.KP8ekHwAcm0q9sEda', NULL, 'admin', 'Active', NULL, '2026-02-22 11:27:55', '2026-02-22 11:27:55'),
(2, 'hamza', 'abd@abd', NULL, '$2y$12$OnVXa8IDvK27Y3DTaM0.qur.6Wfn0oqKs.n3ut2xJq.n20b01Cc8i', NULL, 'admin', 'Active', NULL, '2026-02-26 18:41:42', '2026-02-26 18:41:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `angeles`
--
ALTER TABLE `angeles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `angeles`
--
ALTER TABLE `angeles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- قيود الجداول المُلقاة.
--

--
-- قيود الجداول `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- قيود الجداول `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- قيود الجداول `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
