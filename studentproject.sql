-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 18, 2022 at 08:08 PM
-- Server version: 8.0.31
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `adverts`
--

CREATE TABLE `adverts` (
  `id` bigint UNSIGNED NOT NULL,
  `seller_id` bigint UNSIGNED DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adverts`
--

INSERT INTO `adverts` (`id`, `seller_id`, `product_name`, `price`, `image`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(3, 21, 'Advert one', '100', 'image-1-1667661751.jpeg', 'O5HFeo7VIY34wu6S3666TAQUm6B7Dea7', '<p>this is the descirptionedned ejndkedne</p>', '2022-11-05 12:22:31', '2022-11-05 12:22:31'),
(4, 21, 'Hack Night', '50', 'images-22-1667758417.jpeg', '8LYFHBuEIpWKm4Ol2M17Z1k71716es7X', '<p>welcome all to the hacking c hallenge</p>', '2022-11-06 15:13:37', '2022-11-06 15:13:37');

-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

CREATE TABLE `businesses` (
  `id` bigint UNSIGNED NOT NULL,
  `owner_id` bigint UNSIGNED DEFAULT NULL,
  `business_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `businesses`
--

INSERT INTO `businesses` (`id`, `owner_id`, `business_name`, `location_address`, `longitude`, `latitude`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(4, 22, 'JJ Stores', 'Boston, MA, USA', '-71.0588801', '42.3600825', 'tQW2m7qOHwNZS17X5I77CkP0Ls6Y45B8', 'verified', '2022-11-05 10:14:08', '2022-11-15 15:02:53'),
(5, 26, 'm d ejed ejd ed', 'c jc je cec', '30', '90', '87P6Ue1K6A87OVBsR3qC4WXGJ6rmS21Z', 'verified', '2022-11-16 01:07:43', '2022-11-16 01:07:43'),
(6, 29, 'Business Stores', 'Boston, MA, USA', '-71.0588801', '42.3600825', '60rV2GSJmn418o1ZCAEB385XRsOF1N5H', 'verified', '2022-11-16 15:48:36', '2022-11-16 15:48:36');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint UNSIGNED NOT NULL,
  `student_id` bigint UNSIGNED DEFAULT NULL,
  `seller_id` bigint UNSIGNED DEFAULT NULL,
  `product_id` bigint UNSIGNED DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `student_id`, `seller_id`, `product_id`, `quantity`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(8, 21, 22, 4, '1', 'WuKMHsCt23B1U6aGOqXepnF5976895S7', 'pending', '2022-11-05 06:04:39', '2022-11-06 06:04:39'),
(10, 30, 29, 7, '1', 'eEFS3YU737D51putkZ56Wo8NmaHs288q', 'pending', '2022-11-16 16:06:28', '2022-11-16 16:06:28');

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `id` bigint UNSIGNED NOT NULL,
  `school_id` bigint UNSIGNED DEFAULT NULL,
  `admin_id` bigint UNSIGNED DEFAULT NULL,
  `club_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`id`, `school_id`, `admin_id`, `club_name`, `image`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 3, 20, 'Club 1', 'image-1-1667714010.jpeg', '709S7R34e6oYHtan3sp7FJB1UAWOV0Z1', '<p>club for medical students</p>', '2022-11-06 02:53:30', '2022-11-06 02:53:30'),
(2, 5, 28, 'Footbal', 'apples-g2f966650a_1280-1668625402.jpg', '35QUVs21t4DP6eBw37F6SYkJM51e2ONR', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><p><br>&nbsp;</p>', '2022-11-16 16:03:23', '2022-11-16 16:03:23');

-- --------------------------------------------------------

--
-- Table structure for table `club_members`
--

CREATE TABLE `club_members` (
  `id` bigint UNSIGNED NOT NULL,
  `school_id` bigint UNSIGNED DEFAULT NULL,
  `club_id` bigint UNSIGNED DEFAULT NULL,
  `student_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `club_members`
--

INSERT INTO `club_members` (`id`, `school_id`, `club_id`, `student_id`, `created_at`, `updated_at`) VALUES
(5, 3, 1, 21, '2022-11-07 05:42:25', '2022-11-07 05:42:25');

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `id` bigint UNSIGNED NOT NULL,
  `sender_id` bigint UNSIGNED DEFAULT NULL,
  `receiver_id` bigint UNSIGNED DEFAULT NULL,
  `last_time_message` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint UNSIGNED NOT NULL,
  `sender_id` bigint UNSIGNED DEFAULT NULL,
  `receiver_id` bigint UNSIGNED DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT '0',
  `conversation_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `message_reads`
--

CREATE TABLE `message_reads` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_04_041721_laratrust_setup_tables', 1),
(6, '2022_11_04_174641_create_businesses_table', 2),
(9, '2022_11_04_191859_create_schools_table', 3),
(10, '2022_11_04_194136_create_students_table', 3),
(11, '2022_11_05_010732_create_products_table', 4),
(12, '2022_11_05_023332_create_carts_table', 5),
(14, '2022_11_05_072741_create_messages_table', 6),
(15, '2022_11_05_072810_create_conversations_table', 7),
(16, '2022_11_05_072834_create_message_reads_table', 7),
(17, '2022_11_05_141836_create_adverts_table', 7),
(18, '2022_11_06_054542_create_clubs_table', 8),
(19, '2022_11_06_060705_create_club_members_table', 9),
(21, '2022_11_06_065328_create_posts_table', 10),
(22, '2022_11_10_072321_create_user_queries_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2022-11-04 01:46:42', '2022-11-04 01:46:42'),
(2, 'users-read', 'Read Users', 'Read Users', '2022-11-04 01:46:42', '2022-11-04 01:46:42'),
(3, 'users-update', 'Update Users', 'Update Users', '2022-11-04 01:46:42', '2022-11-04 01:46:42'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2022-11-04 01:46:42', '2022-11-04 01:46:42'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2022-11-04 01:46:42', '2022-11-04 01:46:42'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2022-11-04 01:46:42', '2022-11-04 01:46:42'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2022-11-04 01:46:42', '2022-11-04 01:46:42'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2022-11-04 01:46:42', '2022-11-04 01:46:42'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2022-11-04 01:46:42', '2022-11-04 01:46:42'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2022-11-04 01:46:42', '2022-11-04 01:46:42'),
(11, 'module_1_name-create', 'Create Module_1_name', 'Create Module_1_name', '2022-11-04 01:46:43', '2022-11-04 01:46:43'),
(12, 'module_1_name-read', 'Read Module_1_name', 'Read Module_1_name', '2022-11-04 01:46:43', '2022-11-04 01:46:43'),
(13, 'module_1_name-update', 'Update Module_1_name', 'Update Module_1_name', '2022-11-04 01:46:43', '2022-11-04 01:46:43'),
(14, 'module_1_name-delete', 'Delete Module_1_name', 'Delete Module_1_name', '2022-11-04 01:46:43', '2022-11-04 01:46:43'),
(15, 'manage-business', 'Manage Business', 'Admin Account to manage business', '2022-11-04 02:05:22', '2022-11-04 02:05:22'),
(16, 'manage-schools', 'Manage Schools', 'Managing schools Data', '2022-11-04 15:45:16', '2022-11-04 15:45:16'),
(17, 'manage-students', 'Manage Students', 'creating and managing students data', '2022-11-04 16:59:29', '2022-11-04 16:59:29'),
(18, 'manage-products', 'Manage Products', 'manage my products', '2022-11-04 21:49:38', '2022-11-04 21:49:38'),
(19, 'manage-clubs', 'Manage Clubs', 'school clubs for students', '2022-11-06 02:33:23', '2022-11-06 02:33:23'),
(20, 'manage-posts', 'Manage Posts', 'creating posts for students', '2022-11-06 03:56:27', '2022-11-06 03:56:27');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(9, 2),
(10, 2),
(9, 3),
(10, 3),
(11, 4),
(12, 4),
(13, 4),
(14, 4);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_user`
--

INSERT INTO `permission_user` (`permission_id`, `user_id`, `user_type`) VALUES
(15, 1, 'App\\Models\\User'),
(16, 1, 'App\\Models\\User'),
(17, 1, 'App\\Models\\User'),
(17, 20, 'App\\Models\\User'),
(17, 27, 'App\\Models\\User'),
(17, 28, 'App\\Models\\User'),
(18, 3, 'App\\Models\\User'),
(18, 19, 'App\\Models\\User'),
(18, 22, 'App\\Models\\User'),
(18, 26, 'App\\Models\\User'),
(18, 29, 'App\\Models\\User'),
(19, 20, 'App\\Models\\User'),
(19, 27, 'App\\Models\\User'),
(19, 28, 'App\\Models\\User'),
(20, 20, 'App\\Models\\User'),
(20, 27, 'App\\Models\\User'),
(20, 28, 'App\\Models\\User');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `school_id` bigint UNSIGNED DEFAULT NULL,
  `admin_id` bigint UNSIGNED DEFAULT NULL,
  `post_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `school_id`, `admin_id`, `post_title`, `image`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(2, 3, 20, 'posted today', 'Evans signature@8x-1667724808.png', '1I4J8X28SU6k31EQRYr7FHaeNe2BW6t6', '<p>testing it dit womememed</p>', '2022-11-06 05:53:28', '2022-11-06 05:53:28'),
(3, 3, 20, 'Post for Test', 'images-22-1667810814.jpeg', '8FRsE3sSa7X4WeCUq6880JN1p16LnYQ4', '<p>&nbsp;post two &nbsp;updated</p>', '2022-11-07 05:46:54', '2022-11-07 05:48:13'),
(4, 5, 28, 'Deadline for Joining footbal CLub', 'boat-g1ec44ab8c_1920-1668625495.jpg', '5H66F24J45IZeVWB6OaAutw861YK8GmD', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><p><br>&nbsp;</p>', '2022-11-16 16:04:55', '2022-11-16 16:04:55');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `seller_id` bigint UNSIGNED DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `seller_id`, `product_name`, `price`, `quantity`, `image`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(4, 22, 'Trousers', '1000', '5', 'image-two-3.jpeg', 'e03m6q3JV6OKtAPr3BQTNwWMn5315R62', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p><p><br>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p><p><br>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p><p><br>&nbsp;</p>', '2022-11-04 22:59:20', '2022-11-04 22:59:44'),
(7, 29, 'Laptops', '500', '5', 'laptop-g910905dbb_1920-29.jpg', 'tRWD1JYZ3UEqF62mp516VKw47kMn6N05', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><p><br>&nbsp;</p>', '2022-11-16 15:57:13', '2022-11-16 15:57:13');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'Admin', '2022-11-04 01:46:42', '2022-11-04 01:46:42'),
(2, 'schooladmin', 'Schooladmin', 'Schooladmin', '2022-11-04 01:46:42', '2022-11-04 01:46:42'),
(3, 'businessowner', 'Businessowner', 'Businessowner', '2022-11-04 01:46:43', '2022-11-04 01:46:43'),
(4, 'student', 'Student', 'Student', '2022-11-04 01:46:43', '2022-11-04 01:46:43');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\Models\\User'),
(2, 2, 'App\\Models\\User'),
(2, 9, 'App\\Models\\User'),
(2, 10, 'App\\Models\\User'),
(2, 11, 'App\\Models\\User'),
(2, 15, 'App\\Models\\User'),
(2, 20, 'App\\Models\\User'),
(2, 27, 'App\\Models\\User'),
(2, 28, 'App\\Models\\User'),
(3, 3, 'App\\Models\\User'),
(3, 5, 'App\\Models\\User'),
(3, 6, 'App\\Models\\User'),
(3, 19, 'App\\Models\\User'),
(3, 22, 'App\\Models\\User'),
(3, 26, 'App\\Models\\User'),
(3, 29, 'App\\Models\\User'),
(4, 4, 'App\\Models\\User'),
(4, 14, 'App\\Models\\User'),
(4, 16, 'App\\Models\\User'),
(4, 17, 'App\\Models\\User'),
(4, 18, 'App\\Models\\User'),
(4, 21, 'App\\Models\\User'),
(4, 23, 'App\\Models\\User'),
(4, 24, 'App\\Models\\User'),
(4, 25, 'App\\Models\\User'),
(4, 30, 'App\\Models\\User');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` bigint UNSIGNED NOT NULL,
  `manager_id` bigint UNSIGNED DEFAULT NULL,
  `school_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `manager_id`, `school_name`, `location_address`, `longitude`, `latitude`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(3, 20, 'Makueni Boys', 'Makueni boys high school, Wote - Makindu Road, Wote, Kenya', '37.6218376', '-1.7945643', 'HpqekBEW6Z7JCu0e566s3Ptn077a33YL', 'verified', '2022-11-05 10:07:30', '2022-11-05 10:07:30'),
(4, 27, 'kmkmdjendjend', 'cjncjencnejc', '30', '40', 's6pol53517S3YrD6mB7PkXsF61JRnE0H', 'verified', '2022-11-16 01:08:21', '2022-11-16 01:08:21'),
(5, 28, 'Onbord School', 'Boston, MA, USA', '-71.0588801', '42.3600825', 'n8qU48N5Ek2pJ4YAta3M6u0B93VXrFI1', 'verified', '2022-11-16 15:46:45', '2022-11-16 15:46:45');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint UNSIGNED NOT NULL,
  `student_id` bigint UNSIGNED DEFAULT NULL,
  `school_id` bigint UNSIGNED DEFAULT NULL,
  `location_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_id`, `school_id`, `location_address`, `longitude`, `latitude`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(5, 21, 3, 'Makueni boys high school, Wote - Makindu Road, Wote, Kenya', '0', '0', 'verified', '5C63Y3Uw1InWB75RHp7J6776qLrTGtoF', '2022-11-05 10:10:49', '2022-11-05 10:10:49'),
(6, 23, 3, 'my hme address', '33', '99', 'verified', '3ZuVM8tXws5U6F5a30OeKBNs7Tpq4619', '2022-11-15 13:37:21', '2022-11-15 13:37:21'),
(7, 24, 3, 'Zimmerman Estate, Opp Mirema Drive, Off Kamiti Road', '33', '99', 'verified', '8CtELq9NV38600Qa5KTm6ZWX41u0sOIe', '2022-11-15 13:38:29', '2022-11-15 13:38:29'),
(8, 25, 3, 'dndkndej djendje', '33', '99', 'verified', 'eFE7B92VAq6n7WtHMp938R57TK0NUYe6', '2022-11-15 13:39:29', '2022-11-15 13:39:29'),
(9, 30, 5, 'kddkedenbde', '33', '99', 'verified', '1KE27Y39ws8C13RouUOre67PSMpZIJ45', '2022-11-16 15:51:53', '2022-11-16 15:51:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone_number`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '', '2022-11-05 02:00:39', '$2y$10$t9W2ObkPExADaUOsWIGZC.Pcx9cWmVWUk94aO5mquuiTAuNSefS4u', NULL, '2022-11-04 01:46:42', '2022-11-05 02:00:39'),
(2, 'Schooladmin', 'schooladmin@gmail.com', '', '2022-11-05 02:26:26', '$2y$10$Ngt9Q77OhDSqgkyb55W5rOeEAI7cCAx7S8VnRYvJVH8/j13rqIhL6', NULL, '2022-11-04 01:46:43', '2022-11-05 02:26:26'),
(3, 'Businessowner', 'businessadmin@gmail.com', '', '2022-11-05 02:19:00', '$2y$10$sZtb7X9mLoQVVCVIJK/Hoeci1PDCbCD2s2y7dLmgwlpYssBuVfR4q', NULL, '2022-11-04 01:46:43', '2022-11-05 02:19:00'),
(4, 'Student', 'student@app.com', '', NULL, '$2y$10$HIHzd0lJEh8WM93u0TNNludbMoYksdN47BqMnQwgwFN70IJJYrGXe', NULL, '2022-11-04 01:46:43', '2022-11-04 01:46:43'),
(20, 'Jeff Kings', 'student@gmail.com', '0788223300', '2022-11-05 10:15:11', '$2y$10$MO1iX3yIYJxPHp4ioH/EoujGjrTrdCbPAzBaVkko.ClUqP0wk82cG', NULL, '2022-11-05 10:07:30', '2022-11-05 10:15:11'),
(21, 'James Techs', 'usertest@gmail.com', '0788990099', '2022-11-05 13:17:17', '$2y$10$t9W2ObkPExADaUOsWIGZC.Pcx9cWmVWUk94aO5mquuiTAuNSefS4u', NULL, '2022-11-05 10:10:49', '2022-11-10 05:37:00'),
(22, 'Joesphat Name', 'userthree@gmail.com', '0788332210', '2022-11-04 21:00:00', '$2y$10$t9W2ObkPExADaUOsWIGZC.Pcx9cWmVWUk94aO5mquuiTAuNSefS4u', NULL, '2022-11-05 10:14:08', '2022-11-05 10:14:08'),
(23, 'kimdeveloper', 'onsongo@gmail.com', '0984545456', NULL, '$2y$10$RHswnQODZZcMfHulXRraL.LFOBY4V6bf2jbPNBqnFYZAD7D2JwaJm', NULL, '2022-11-15 13:37:21', '2022-11-15 13:37:21'),
(24, 'intruderdeveloper', 'onsongoe@gmail.com', '9876543000', '2022-11-14 21:00:00', '$2y$10$hb3aYWd9sZa3s//Ju6677ONmQ2c2KXb.XRQh/23XNJxD0fbvreLuS', NULL, '2022-11-15 13:38:29', '2022-11-15 13:38:29'),
(25, 'intruderdeveloper', 'onsongorr@gmail.com', '8744332234', '2022-11-15 18:00:18', '$2y$10$rezVqWUZ4NDZUEF2q.N7mecfxQpl.Wqc7HSJ5jm0xm3YetMvHd8CS', NULL, '2022-11-15 13:39:29', '2022-11-15 13:39:29'),
(26, 'nexet guess', 'intruderdeveloper@gmail.com', '9833221122', '2022-11-16 18:52:37', '$2y$10$ufon9ExxDz76OgJbWLi2pOKBPYQ9xswSrzYUC0IAMn9imt0rMunB.', NULL, '2022-11-16 01:07:43', '2022-11-16 01:07:43'),
(27, 'amm mkms', 'nxnxjss@gmail.com', '8888333388', '2022-11-16 18:52:37', '$2y$10$v6FGRB4u9.nLL6D3IG/xuObJX55lOMcBNQzU8ndW4xqiMi0sKhrUG', NULL, '2022-11-16 01:08:21', '2022-11-16 01:08:21'),
(28, 'Jeff Kings', 'onboardschool@gmail.com', '5544333320', '2022-11-16 18:52:37', '$2y$10$/lf4rZmt72RCaif3KnfIXOojNOcYTfXTbk3hD4cwtmYYe97eVXrOS', NULL, '2022-11-16 15:46:45', '2022-11-16 15:46:45'),
(29, 'Business Owner', 'bowner@gmail.com', '8833033300', '2022-11-16 18:52:37', '$2y$10$/lf4rZmt72RCaif3KnfIXOojNOcYTfXTbk3hD4cwtmYYe97eVXrOS', NULL, '2022-11-16 15:48:36', '2022-11-16 15:48:36'),
(30, 'JosephJoseph', 'joseph@gmail.com', '8833221133', '2022-11-15 21:00:00', '$2y$10$/lf4rZmt72RCaif3KnfIXOojNOcYTfXTbk3hD4cwtmYYe97eVXrOS', NULL, '2022-11-16 15:51:53', '2022-11-16 15:51:53');

-- --------------------------------------------------------

--
-- Table structure for table `user_queries`
--

CREATE TABLE `user_queries` (
  `id` bigint UNSIGNED NOT NULL,
  `firstname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_queries`
--

INSERT INTO `user_queries` (`id`, `firstname`, `lastname`, `email`, `phone_number`, `message`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'firstname', 'lastname', 'emails@gmail.com', '0788332233', 'this si the message', '7s851Vw6U35nOtks9RJBFKYLW8e11M6o', 'solved', '2022-11-10 04:31:55', '2022-11-10 04:45:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adverts`
--
ALTER TABLE `adverts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adverts_seller_id_foreign` (`seller_id`);

--
-- Indexes for table `businesses`
--
ALTER TABLE `businesses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `businesses_owner_id_foreign` (`owner_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_seller_id_foreign` (`seller_id`),
  ADD KEY `carts_student_id_foreign` (`student_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clubs_admin_id_foreign` (`admin_id`),
  ADD KEY `clubs_school_id_foreign` (`school_id`);

--
-- Indexes for table `club_members`
--
ALTER TABLE `club_members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `club_members_student_id_foreign` (`student_id`),
  ADD KEY `club_members_club_id_foreign` (`club_id`),
  ADD KEY `club_members_school_id_foreign` (`school_id`);

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conversations_sender_id_foreign` (`sender_id`),
  ADD KEY `conversations_receiver_id_foreign` (`receiver_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_sender_id_foreign` (`sender_id`),
  ADD KEY `messages_receiver_id_foreign` (`receiver_id`),
  ADD KEY `messages_conversation_id_foreign` (`conversation_id`);

--
-- Indexes for table `message_reads`
--
ALTER TABLE `message_reads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_admin_id_foreign` (`admin_id`),
  ADD KEY `posts_school_id_foreign` (`school_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_seller_id_foreign` (`seller_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schools_manager_id_foreign` (`manager_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_student_id_foreign` (`student_id`),
  ADD KEY `students_school_id_foreign` (`school_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_queries`
--
ALTER TABLE `user_queries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adverts`
--
ALTER TABLE `adverts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `businesses`
--
ALTER TABLE `businesses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `club_members`
--
ALTER TABLE `club_members`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message_reads`
--
ALTER TABLE `message_reads`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_queries`
--
ALTER TABLE `user_queries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adverts`
--
ALTER TABLE `adverts`
  ADD CONSTRAINT `adverts_seller_id_foreign` FOREIGN KEY (`seller_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `businesses`
--
ALTER TABLE `businesses`
  ADD CONSTRAINT `businesses_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_seller_id_foreign` FOREIGN KEY (`seller_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `clubs`
--
ALTER TABLE `clubs`
  ADD CONSTRAINT `clubs_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `clubs_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `club_members`
--
ALTER TABLE `club_members`
  ADD CONSTRAINT `club_members_club_id_foreign` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `club_members_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `club_members_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `conversations`
--
ALTER TABLE `conversations`
  ADD CONSTRAINT `conversations_receiver_id_foreign` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `conversations_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_conversation_id_foreign` FOREIGN KEY (`conversation_id`) REFERENCES `conversations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_receiver_id_foreign` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_seller_id_foreign` FOREIGN KEY (`seller_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `schools`
--
ALTER TABLE `schools`
  ADD CONSTRAINT `schools_manager_id_foreign` FOREIGN KEY (`manager_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `students_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
