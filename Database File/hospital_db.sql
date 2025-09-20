-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2025 at 01:35 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doctor_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appointment_histories`
--

CREATE TABLE `appointment_histories` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `doctor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_id` bigint UNSIGNED NOT NULL,
  `fee` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `appointment_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `category` int UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint DEFAULT '1' COMMENT '1=Published, 0=Published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category`, `title`, `slug`, `image`, `description`, `blog_type`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'COVID-19 Risk Management Plan', 'COVID-19-Risk-Management-Plan', 'admin-assets/assets/image/blog/1635437994.jpg', 'The aim of a COVID-19 Risk Management Plan for organisations is to identify points of contact (risks) between your employees and the people of the designated area during delivery of the \'essential activity\' and to put in place appropriate controls to minimise this exposure.', 'latest', '2025-07-15', NULL, '2023-08-16 16:58:55', '2025-09-06 02:10:42'),
(2, 2, 'Walking daily new', 'Walking-daily-new', 'admin-assets/assets/image/blog/1291407941.png', 'Walking (also known as ambulation) is one of the main gaits of terrestrial locomotion among legged animals. Walking is typically slower than running and other gaits. Walking is defined', 'trending', '2025-08-01', NULL, '2023-08-16 17:44:41', '2025-08-01 04:29:34'),
(3, 2, 'Sleep & Mental Wellness', 'Sleep-&-Mental-Wellness', 'admin-assets/assets/image/blog/202300614.png', 'Sleep and mental wellness are deeply connected—quality rest helps restore the mind, regulate emotions, and support overall well-being. In this blog, we explore how healthy sleep habits can reduce stress, improve mood, and enhance mental clarity. Whether you\'re struggling with insomnia or simply seeking a more balanced lifestyle, these insights and tips can help you build a healthier, more restful routine', 'trending', '2025-02-04', NULL, '2023-08-17 11:28:55', '2025-08-01 04:30:51'),
(4, 2, 'Youga Dialy', 'Youga-Dialy', 'admin-assets/assets/image/blog/1234313417.jpg', ' \"Youga Diary\" is dedicated to nurturing your inner peace, physical well-being, and personal mindfulness. In the midst of your busy daily life, this space offers gentle reflections, practical tips, and inspiring thoughts to help you reconnect with yourself. Whether you\'re seeking calm, clarity, or simply a quiet moment to breathe, let this diary be a guide on your journey toward balance and wellness.', 'latest', '2023-08-22', 1, '2023-08-21 10:27:12', '2023-08-21 10:27:12'),
(5, 2, 'Meditation', 'Meditation', 'admin-assets/assets/image/blog/79039071.jpg', ' Meditation is a gentle invitation to pause, breathe, and reconnect with the present moment. In this blog, you’ll discover simple practices, thoughtful insights, and peaceful reflections to help quiet the mind and soothe the spirit. Whether you\'re just beginning or deepening your journey, may these words guide you toward greater clarity, balance, and inner peace.', 'popular', '2023-08-22', 1, '2023-08-21 10:28:18', '2023-08-21 10:28:18'),
(6, 2, 'Daily Gym', 'Daily-Gym', 'admin-assets/assets/image/blog/1953578285.png', 'Committing to a daily gym routine is a powerful step toward building strength, improving endurance, and enhancing overall well-being. This blog provides practical tips, workout ideas, and motivational insights to help you stay consistent and inspired on your fitness journey. Whether you\'re a beginner or a seasoned athlete, discover how daily movement can transform your body and mind.', 'latest', '2025-04-09', NULL, '2023-08-21 10:28:44', '2025-08-01 04:41:31'),
(7, 2, 'Fitness is Necessary', 'Fitness-is-Necessary', 'admin-assets/assets/image/blog/1823735945.jpg', 'Fitness is not just a goal but a vital part of a healthy lifestyle. Staying active strengthens the body, sharpens the mind, and boosts overall energy. This blog explores why fitness is essential for everyone, offering practical advice and motivation to help you embrace movement daily and enjoy a happier, healthier life.', 'trending', '2023-08-22', 1, '2023-08-21 10:29:37', '2023-08-21 10:29:37'),
(8, 2, 'Happy Breakfast', 'Happy-Breakfast', 'admin-assets/assets/image/blog/1612373650.png', 'A happy breakfast is the perfect way to start your day with energy and positivity. Enjoying a nutritious and delicious morning meal not only fuels your body but also lifts your mood and sets the tone for a productive day ahead. Discover simple ideas and tasty recipes to make every breakfast a joyful and healthy experience.', 'latest', '2025-05-13', NULL, '2023-08-21 11:28:11', '2025-08-01 04:43:15');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'COVID-19', 1, '2023-08-16 15:31:51', '2023-08-16 15:31:51'),
(2, 'Fitness', 1, '2023-08-16 15:50:27', '2023-08-16 15:50:27'),
(3, 'Nutrition', 0, '2025-09-04 11:24:26', '2025-09-04 11:24:26');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `speciality` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `phone`, `speciality`, `email`, `time`, `day`, `fee`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Min Win', '09772355438', 'Psychiatrist (စိတ်ကျန်းမာရေးအထူးကု)', 'minwin@gmail.com', '10:00 AM to 03:00PM', 'Monday', '30000', 'Doctor', 'admin-assets/assets/doctor-image/1070597122.png', '2023-08-21 06:45:00', '2025-07-31 02:21:47'),
(2, 'Dr. May Chan', '09772355435', 'Dentist (သွားဆရာဝန်)', 'maychan@gmail.com', '11:00 AM to 03:00PM', 'Tuesday', '30000', 'Doctor', 'admin-assets/assets/doctor-image/470494661.png', '2023-08-21 06:47:47', '2025-07-31 02:21:08'),
(3, 'Dr. Su Paing', '09772355434', 'Dermatologist (အရေပြားအထူးကု)', 'papa@gmail.com', '09:00 AM to 02:00PM', 'Wednesday', '35000', 'Doctor', 'admin-assets/assets/doctor-image/765689318.png', '2025-07-30 02:14:16', '2025-09-05 19:51:11'),
(4, 'Dr. Pyei Phyo', '09772355436', 'Neurologist (ဦးနှောက်နှင့်အာရုံကြောအထူးကု)', 'pyeiphyu@gmail.com', '10:00 AM to 03:00PM', 'Thursday', '35000', 'Doctor', 'admin-assets/assets/doctor-image/2053357323.png', '2025-07-30 02:15:42', '2025-08-04 03:48:22'),
(5, 'Dr. Aung Khaing Oo', '09772355437', 'Cardiologist (နှလုံးအထူးကု)', 'aungkhaingoo@gmail.com', '10:00 AM to 03:00PM', 'Friday', '25000', 'Doctor', 'admin-assets/assets/doctor-image/390954965.png', '2025-07-30 02:52:42', '2025-08-04 03:06:14'),
(6, 'Dr. Pa Pa', '09772355439', 'Dermatologist (အရေပြားအထူးကု)', 'papa2@gmail.com', '10:00 AM to 03:00PM', 'Sunday', '35000', 'Doctor', 'admin-assets/assets/doctor-image/520357279.png', '2025-08-04 03:30:27', '2025-09-05 19:54:54');

-- --------------------------------------------------------

--
-- Table structure for table `medi_carts`
--

CREATE TABLE `medi_carts` (
  `id` bigint UNSIGNED NOT NULL,
  `m_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `total_price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medi_orders`
--

CREATE TABLE `medi_orders` (
  `id` bigint UNSIGNED NOT NULL,
  `u_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_14_202635_create_sessions_table', 1),
(6, '2023_08_15_175922_create_notifications_table', 4),
(7, '2023_08_15_204354_create_contacts_table', 7),
(8, '2023_08_16_211158_create_categories_table', 8),
(9, '2023_08_16_204115_create_blogs_table', 9),
(10, '2023_08_17_050210_create_orders_table', 13),
(11, '2023_08_15_000441_create_doctors_table', 14),
(12, '2023_08_15_023958_create_appointments_table', 15),
(13, '2023_08_21_222218_create_appointment_histories_table', 16),
(14, '2014_10_12_000000_create_users_table', 17),
(15, '2023_08_24_185030_create_pres_table', 18),
(16, '2023_08_24_204349_create_pharmachies_table', 19),
(17, '2023_08_24_213233_create_labs_table', 20),
(18, '2023_08_25_002119_create_lab_carts_table', 21),
(19, '2023_08_25_010156_create_lab_orders_table', 22),
(20, '2023_08_25_045642_create_medi_carts_table', 23),
(21, '2023_08_25_055345_create_medi_orders_table', 24);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint UNSIGNED NOT NULL,
  `data` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pharmachies`
--

CREATE TABLE `pharmachies` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pcs` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pharmachies`
--

INSERT INTO `pharmachies` (`id`, `name`, `code`, `price`, `quantity`, `description`, `image`, `date`, `created_at`, `updated_at`, `pcs`) VALUES
(1, 'Fluza', 'M-04', '24000', '10', 'Fluza Tab သည် အအေးမိခြင်း၊ ဖျားနာခြင်းနှင့် တုပ်ကွေးဖျားနာခြင်းတို့အတွက် အထိရောက်ဆုံးနှင့် အန္တရာယ်အကင်းဆုံး သက်သာပျောက်ကင်းစေသော ဆေးဖြစ်ပါသည်။', 'admin-assets/assets/food/1325421677.png', '2026-12-31', '2023-08-24 15:04:49', '2025-09-04 09:29:34', 'Box of 10x10\'s Caplet'),
(2, 'Musol', 'M-03', '59000', '10', 'ချွဲသလိပ်များဖြင့် ပြည့်နေသော ချောင်းဆိုးခြင်းများ၊ ချွဲခပ်ထုတ်ရ ခက်ခဲသော အခြေအနေများတွင် အသုံးပြုနိုင်သော ချွဲသလိပ်ကြေပြီးချောင်းဆိုးကင်းစေသော အစွမ်းထက် မြူဆောလ် ချွဲပျော်ဆေးဖြစ်သည် ။', 'admin-assets/assets/food/1510894892.png', '2026-09-11', '2023-08-24 15:06:25', '2025-09-04 09:28:26', 'Box of 10 x 10\'s Capsule'),
(3, 'Oramin-G', 'M-02', '30900', '30', 'အဆင့်မြင့် နည်းပညာဖြင့် ထုတ်လုပ်ထားသော သဘာဝဂျင်ဆင်း၊ ဗီတာမင်နှင့် သတ္တုဓာတ်များ ပါဝင်သော အားဆေးဖြစ်ပါသည်။', 'admin-assets/assets/food/146659620.png', '2026-09-09', '2023-08-24 15:07:00', '2025-09-04 09:26:04', 'Box of 6 x 5 \'s Soft Capsule'),
(4, 'Paracetamol', 'M-01', '6000', '50', 'ပါရာစီတမောသည် စတီးရွိုက်မဟုတ်သော အကိုက်အခဲပျောက်ဆေးအုပ်စုတွင်ပါဝင်ပြီး အကိုက်အခဲကို သက်သာစေယုံသာမက အဖျားကျစေသည် ။', 'admin-assets/assets/food/687003160.png', '2026-09-10', '2023-08-31 23:49:37', '2025-09-04 09:27:17', 'Box of 10x10\'s Tablet'),
(5, 'MEDIBIO-S CAPSULE (3x10\'s)', 'M-05', '26355', '15', 'အစာအိမ်နှင့် အူလမ်းကြောင်းရှိ ခန္ဓာကိုယ်ကို အကျိုးပြုသော ဘက်တီးရီးယားများ ဆုံးရှုံးခြင်း၊ အစားအသောက်မှား၍ အော့အန်ခြင်း၊ လေပွခြင်း၊ လေထခြင်း၊ အစာမကြေ ရင်ပြည့်ရင်ကယ်ခြင်း၊ ဝမ်းချုပ်ခြင်း၊ ဝမ်းပျက်0မ်းလျ', 'admin-assets/assets/food/1538342269.png', '2026-09-08', '2025-09-04 09:09:26', '2025-09-09 10:36:52', 'MEDIBIO-S CAPSULE (3x10\'s)'),
(6, 'Daily Vitagin', 'M-12', '26400', '15', 'Daily Vitagin တွင် ပါဝင်သော ဗီတာမင်မျိုးစုံနှင့် သတ္တုဓာတ်များ၏ ပေါင်းစပ်စွမ်းအင်ကြောင့် ကုန်ခန်းသွားသည့် စွမ်းအင်များကိုချက်ချင်း ပြန်လည်ပြည့်ဝစေပါသည်။', 'admin-assets/assets/food/1710290497.png', '2026-09-08', '2025-09-04 09:09:26', '2025-09-09 13:05:14', 'Box of 10x10\'s Capsule'),
(7, 'Sayar Moe', 'M-11', '9000', '3', 'ဆရာ မိုး ရှောက် တစ် လုံး ဝမ်း မှန် ဆေး', 'admin-assets/assets/food/12907929.png', '2026-09-08', '2025-09-04 09:09:26', '2025-09-09 01:45:14', 'Box of 6 x 5 \'s Soft Capsule'),
(8, 'Kun Ywet  Pon', 'M-06', '6000', '15', 'ချောင်းဆိုးပျေက် ဆေး (ဆေးလုံး)', 'admin-assets/assets/food/788522798.png', '2026-09-08', '2025-09-04 09:09:26', '2025-09-09 01:27:00', '1 Box'),
(9, 'Shan Phyo Mae', 'M-07', '5400', '15', 'ရှမ်း ပျို မယ် ရွှေ ရုပ် လွှာ သွေး ဆေး (ဗူး သေး)', 'admin-assets/assets/food/1622119142.png', '2026-09-08', '2025-09-04 09:09:26', '2025-09-09 13:00:50', '1 Box'),
(10, 'Ah Ba Hta', 'M-08', '4500', '10', 'အ ဘ ထ ရှူ ဆေး', 'admin-assets/assets/food/1176649436.png', '2026-09-08', '2025-09-04 09:09:26', '2025-09-09 13:05:57', '1 Box'),
(11, 'Set Kyar Min', 'M-09', '12000', '10', 'စ ကြာ မင်း အရိုး ကျီး ပေါင်း လိမ်း ဆေး', 'admin-assets/assets/food/432405581.png', '2026-09-08', '2025-09-04 09:09:26', '2025-09-09 01:33:40', '1 Box'),
(12, 'Sayar Kho', 'M-10', '2100', '10', 'ဆရာ ခို အ နာ လိမ်း ဆေး ဘူးသေး', 'admin-assets/assets/food/1724875341.png', '2026-09-08', '2025-09-04 09:09:26', '2025-09-09 01:35:10', '1 Box'),
(13, 'Vitahome (120\'s)', 'M-13', '34680', '5', 'Vitahome မှာ ပါဝင်တဲ့ Vitamin A, C, E က Anti-oxidant လို့ ခေါ်တဲ့ ခန္ဓာကိုယ်က Cell တွေ ဓာတ်တိုးပျက်စီးမှုမှ ကာကွယ်ပေးနိုင်တဲ့အတွက် ရုပ်ကိုနုပျိုလန်းဆန်းစေပါတယ်။', 'admin-assets/assets/food/1363690743.png', '2027-01-01', '2025-09-09 10:31:03', '2025-09-09 10:31:03', 'Box of 12x10\'s Capsule');

-- --------------------------------------------------------

--
-- Table structure for table `pres`
--

CREATE TABLE `pres` (
  `id` bigint UNSIGNED NOT NULL,
  `p_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicines` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `tests` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `advice` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `appointment_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `appointmenthistory_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_datetime` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('06PBtkMLDHw5EJAjxBGODdzfcHXiENG2ya8Sfspl', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiUEM3TTFGczRoclFReU9zWEtWR2ZRMkRKajJiRmVHWVJ3bWJhTWs1cCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kb2N0b3ItZGV0YWlscy8yIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjIyOiJQSFBERUJVR0JBUl9TVEFDS19EQVRBIjthOjA6e319', 1757496318),
('gadRwW5LlZOMfwO83isLhnsrGZiBhPjmYu9wJhhy', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRzZPTkR0c1dsUVRadVFtTWZqTFoxeFl2Mml3NU9DZVR0QjdmUUNVZCI7czoyMjoiUEhQREVCVUdCQVJfU1RBQ0tfREFUQSI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1758278568);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usertype` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `usertype`, `email_verified_at`, `password`, `doctor_id`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '09777777777', 'Yangon', '1', '2025-09-19 10:41:23', '$2a$12$Kn5ezQzwSxun301A7eFD.uN5RkiU4xQJn3/kczpviMez.Low6405y', NULL, NULL, NULL, NULL, '2025-09-19 10:41:23', '2025-09-19 10:41:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_histories`
--
ALTER TABLE `appointment_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medi_carts`
--
ALTER TABLE `medi_carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medi_orders`
--
ALTER TABLE `medi_orders`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pharmachies`
--
ALTER TABLE `pharmachies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pres`
--
ALTER TABLE `pres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointment_histories`
--
ALTER TABLE `appointment_histories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
