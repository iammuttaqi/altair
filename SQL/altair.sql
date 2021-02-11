-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.5.2-MariaDB-log - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5952
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table classroom.category
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `modules_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `show_in_home` tinyint(4) DEFAULT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `category_modules_id_foreign` (`modules_id`),
  KEY `category_created_by_foreign` (`created_by`),
  KEY `category_updated_by_foreign` (`updated_by`),
  CONSTRAINT `category_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `category_modules_id_foreign` FOREIGN KEY (`modules_id`) REFERENCES `modules` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `category_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=160 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table classroom.category: ~17 rows (approximately)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Dumping structure for table classroom.category_input_values
CREATE TABLE IF NOT EXISTS `category_input_values` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `modules_id` int(20) unsigned DEFAULT NULL,
  `input_fields_id` int(20) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(20) unsigned DEFAULT NULL,
  `updated_by` int(20) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `modules_id` (`modules_id`),
  KEY `input_fields_id` (`input_fields_id`),
  CONSTRAINT `category_input_values_ibfk_1` FOREIGN KEY (`modules_id`) REFERENCES `modules` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `category_input_values_ibfk_2` FOREIGN KEY (`input_fields_id`) REFERENCES `input_fields` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=474 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table classroom.category_input_values: ~11 rows (approximately)
/*!40000 ALTER TABLE `category_input_values` DISABLE KEYS */;
/*!40000 ALTER TABLE `category_input_values` ENABLE KEYS */;

-- Dumping structure for table classroom.category_values
CREATE TABLE IF NOT EXISTS `category_values` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(20) unsigned DEFAULT NULL,
  `input_fields_id` int(20) unsigned DEFAULT NULL,
  `category_value` blob DEFAULT NULL,
  `created_by` int(20) DEFAULT NULL,
  `updated_by` int(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  KEY `input_fields_id` (`input_fields_id`),
  CONSTRAINT `category_values_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `category_values_ibfk_2` FOREIGN KEY (`input_fields_id`) REFERENCES `input_fields` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table classroom.category_values: ~37 rows (approximately)
/*!40000 ALTER TABLE `category_values` DISABLE KEYS */;
/*!40000 ALTER TABLE `category_values` ENABLE KEYS */;

-- Dumping structure for table classroom.company_profiles
CREATE TABLE IF NOT EXISTS `company_profiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_email` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_phone` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_phone_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `google_map` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_slogan` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `publication_status` tinyint(4) DEFAULT NULL,
  `company_logo` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fav_icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `header_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `footer_logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `facebook` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkedin` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `domain` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `navber_text` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `about_keyword` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `about_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `team_keyword` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `team_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `gallery_keyword` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `gallery_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `service_keyword` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `service_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_keyword` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_keyword` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `visa_keyword` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `visa_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_keyword` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `blog_keyword` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `blog_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `blog_details_keyword` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `blog_details_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `package_keyword` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `package_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `company_profiles_created_by_foreign` (`created_by`),
  KEY `company_profiles_updated_by_foreign` (`updated_by`),
  CONSTRAINT `company_profiles_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `company_profiles_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table classroom.company_profiles: ~0 rows (approximately)
/*!40000 ALTER TABLE `company_profiles` DISABLE KEYS */;
/*!40000 ALTER TABLE `company_profiles` ENABLE KEYS */;

-- Dumping structure for table classroom.further_sub_category
CREATE TABLE IF NOT EXISTS `further_sub_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sub_category_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `further_sub_cat_slug` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `further_sub_category_sub_category_id_foreign` (`sub_category_id`),
  KEY `further_sub_category_created_by_foreign` (`created_by`),
  KEY `further_sub_category_updated_by_foreign` (`updated_by`),
  CONSTRAINT `further_sub_category_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `further_sub_category_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `further_sub_category_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table classroom.further_sub_category: ~18 rows (approximately)
/*!40000 ALTER TABLE `further_sub_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `further_sub_category` ENABLE KEYS */;

-- Dumping structure for table classroom.further_sub_category_input_values
CREATE TABLE IF NOT EXISTS `further_sub_category_input_values` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `sub_category_id` int(20) unsigned DEFAULT NULL,
  `input_fields_id` int(20) unsigned DEFAULT NULL,
  `further_sub_cat_input_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(20) DEFAULT NULL,
  `updated_by` int(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `further_sub_category_id` (`sub_category_id`),
  KEY `input_fields_id` (`input_fields_id`),
  CONSTRAINT `further_sub_category_input_values_ibfk_2` FOREIGN KEY (`input_fields_id`) REFERENCES `input_fields` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `further_sub_category_input_values_ibfk_3` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table classroom.further_sub_category_input_values: ~18 rows (approximately)
/*!40000 ALTER TABLE `further_sub_category_input_values` DISABLE KEYS */;
/*!40000 ALTER TABLE `further_sub_category_input_values` ENABLE KEYS */;

-- Dumping structure for table classroom.further_sub_category_values
CREATE TABLE IF NOT EXISTS `further_sub_category_values` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `further_sub_category_id` int(20) unsigned DEFAULT NULL,
  `input_fields_id` int(20) unsigned DEFAULT NULL,
  `further_sub_category_value` blob DEFAULT NULL,
  `created_by` int(20) DEFAULT NULL,
  `updated_by` int(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `further_sub_cat_values_ibfk_1` (`further_sub_category_id`),
  KEY `input_fields_id` (`input_fields_id`),
  CONSTRAINT `further_sub_category_values_ibfk_1` FOREIGN KEY (`further_sub_category_id`) REFERENCES `further_sub_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `further_sub_category_values_ibfk_2` FOREIGN KEY (`input_fields_id`) REFERENCES `input_fields` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table classroom.further_sub_category_values: ~60 rows (approximately)
/*!40000 ALTER TABLE `further_sub_category_values` DISABLE KEYS */;
/*!40000 ALTER TABLE `further_sub_category_values` ENABLE KEYS */;

-- Dumping structure for table classroom.input_fields
CREATE TABLE IF NOT EXISTS `input_fields` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(20) unsigned DEFAULT NULL,
  `updated_by` int(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `created_by` (`created_by`),
  KEY `updated_by` (`updated_by`),
  CONSTRAINT `created_by` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `updated_by` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table classroom.input_fields: ~54 rows (approximately)
/*!40000 ALTER TABLE `input_fields` DISABLE KEYS */;
INSERT INTO `input_fields` (`id`, `name`, `code`, `slug_name`, `type`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
	(1, 'title', '<input class="md-input" type="text" id="title" name="title" value="">', 'title', NULL, 1, 1, NULL, NULL),
	(2, 'name', '<input class="md-input" type="text" id="name" name="name" value="" >', 'name', NULL, 1, 1, NULL, NULL),
	(3, 'input1', '<input class="md-input" type="text" id="input1" name="input1" value="">', 'input1', NULL, 1, 1, NULL, NULL),
	(4, 'input2', '<input class="md-input" type="text" id="input2" name="input2" value="">', 'input2', NULL, 1, 1, NULL, NULL),
	(5, 'input3', '<input class="md-input" type="text" id="input3" name="input3" value="">', 'input3', NULL, 1, 1, NULL, NULL),
	(6, 'input4', '<input class="md-input" type="text" id="input4" name="input4" value="">', 'input4', NULL, 1, 1, NULL, NULL),
	(7, 'input5', '<input class="md-input" type="text" id="input5" name="input5" value="">', 'input5', NULL, 1, 1, NULL, NULL),
	(8, 'input6', '<input class="md-input" type="text" id="input6" name="input6" value="">', 'input6', NULL, 1, 1, NULL, NULL),
	(9, 'input7', '<input class="md-input" type="text" id="input7" name="input7" value="">', 'input7', NULL, 1, 1, NULL, NULL),
	(10, 'input8', '<input class="md-input" type="text" id="input8" name="input8" value="">', 'input8', NULL, 1, 1, NULL, NULL),
	(11, 'input9', '<input class="md-input" type="text" id="input9" name="input9" value="">', 'input9', NULL, 1, 1, NULL, NULL),
	(12, 'input10', '<input class="md-input" type="text" id="input10" name="input10" value="">', 'input10', NULL, 1, 1, NULL, NULL),
	(13, 'input11', '<input class="md-input" type="text" id="input11" name="input11" value="">', 'input11', NULL, 1, 1, NULL, NULL),
	(14, 'input12', '<input class="md-input" type="text" id="input12" name="input12" value="">', 'input12', NULL, 1, 1, NULL, NULL),
	(15, 'input13', '<input class="md-input" type="text" id="input13" name="input13" value="">', 'input13', NULL, 1, 1, NULL, NULL),
	(16, 'input14', '<input class="md-input" type="text" id="input14" name="input14" value="">', 'input14', NULL, 1, 1, NULL, NULL),
	(17, 'input15', '<input class="md-input" type="text" id="input15" name="input15" value="">', 'input15', NULL, 1, 1, NULL, NULL),
	(18, 'input16', '<input class="md-input" type="text" id="input16" name="input16" value="">', 'input16', NULL, 1, 1, NULL, NULL),
	(19, 'input17', '<input class="md-input" type="text" id="input17" name="input17" value="">', 'input17', NULL, 1, 1, NULL, NULL),
	(20, 'input18', '<input class="md-input" type="text" id="input18" name="input18" value="">', 'input18', NULL, 1, 1, NULL, NULL),
	(21, 'input19', '<input class="md-input" type="text" id="input19" name="input19" value="">', 'input19', NULL, 1, 1, NULL, NULL),
	(22, 'input20', '<input class="md-input" type="text" id="input20" name="input20" value="">', 'input20', NULL, 1, 1, NULL, NULL),
	(23, 'image1', '<input class="md-input" type="file" id="image1" name="image1" value="" >', 'image1', '1', 1, 1, NULL, NULL),
	(24, 'image2', '<input class="md-input" type="file" id="image2" name="image2" value="">', 'image2', '1', 1, 1, NULL, NULL),
	(25, 'image3', '<input class="md-input" type="file" id="image3" name="image3" value="">', 'image3', '1', 1, 1, NULL, NULL),
	(26, 'image4', '<input class="md-input" type="file" id="image4" name="image4" value="">', 'image4', '1', 1, 1, NULL, NULL),
	(27, 'image5', '<input class="md-input" type="file" id="image5" name="image5" value="">', 'image5', '1', 1, 1, NULL, NULL),
	(28, 'image6', '<input class="md-input" type="file" id="image6" name="image6" value="">', 'image6', '1', 1, 1, NULL, NULL),
	(29, 'image7', '<input class="md-input" type="file" id="image7" name="image7" value="">', 'image7', '1', 1, 1, NULL, NULL),
	(30, 'image8', '<input class="md-input" type="file" id="image8" name="image8" value="">', 'image8', '1', 1, 1, NULL, NULL),
	(31, 'image9', '<input class="md-input" type="file" id="image9" name="image9" value="">', 'image9', '1', 1, 1, NULL, NULL),
	(32, 'image10', '<input class="md-input" type="file" id="image10" name="image10" value="">', 'image10', '1', 1, 1, NULL, NULL),
	(33, 'image11', '<input class="md-input" type="file" id="image11" name="image11" value="" >', 'image11', '1', 1, 1, NULL, NULL),
	(34, 'image12', '<input class="md-input" type="file" id="image12" name="image12" value="">', 'image12', '1', 1, 1, NULL, NULL),
	(35, 'image13', '<input class="md-input" type="file" id="image13" name="image13" value="">', 'image13', '1', 1, 1, NULL, NULL),
	(36, 'image14', '<input class="md-input" type="file" id="image14" name="image14" value="">', 'image14', '1', 1, 1, NULL, NULL),
	(37, 'image15', '<input class="md-input" type="file" id="image15" name="image15" value="">', 'image15', '1', 1, 1, NULL, NULL),
	(38, 'file1', '<input class="md-input" type="file" id="file1" name="file1" value="" >', 'file1', '1', 1, 1, NULL, NULL),
	(39, 'file2', '<input class="md-input" type="file" id="file2" name="file2" value="">', 'file2', '1', 1, 1, NULL, NULL),
	(40, 'file3', '<input class="md-input" type="file" id="file3" name="file3" value="" >', 'file3', '1', 1, 1, NULL, NULL),
	(41, 'file4', '<input class="md-input" type="file" id="file4" name="file4" value="">', 'file4', '1', 1, 1, NULL, NULL),
	(42, 'file5', '<input class="md-input" type="file" id="file5" name="file5" value="">', 'file5', '1', 1, 1, NULL, NULL),
	(43, 'file6', '<input class="md-input" type="file" id="file6" name="file6" value="">', 'file6', '1', 1, 1, NULL, NULL),
	(44, 'file7', '<input class="md-input" type="file" id="file7" name="file7" value="">', 'file7', '1', 1, 1, NULL, NULL),
	(45, 'file8', '<input class="md-input" type="file" id="file8" name="file8" value="">', 'file8', '1', 1, 1, NULL, NULL),
	(46, 'file9', '<input class="md-input" type="file" id="file9" name="file9" value="">', 'file9', '1', 1, 1, NULL, NULL),
	(47, 'file10', '<input class="md-input" type="file" id="file10" name="file10" value="">', 'file10', '1', 1, 1, NULL, NULL),
	(48, 'textarea1', '<textarea type="text" name="textarea1" id="textarea1" class="md-input"></textarea>', 'textarea1', '2', 1, 1, NULL, NULL),
	(49, 'textarea2', '<textarea type="text" name="textarea2" id="textarea2" class="md-input"></textarea>', 'textarea2', '2', 1, 1, NULL, NULL),
	(50, 'details', '<textarea type="text" name="details" id="details" class="md-input ckeditor"></textarea>', 'details', '2', 1, 1, NULL, NULL),
	(51, 'details1', '<textarea type="text" name="details1" id="details1" class="md-input ckeditor"></textarea>', 'details1', '2', 1, 1, NULL, NULL),
	(52, 'details2', '<textarea type="text" name="details2" id="details2" class="md-input ckeditor"></textarea>', 'details2', '2', 1, 1, NULL, NULL),
	(53, 'details3', '<textarea type="text" name="details3" id="details3" class="md-input ckeditor"></textarea>', 'details3', '2', 1, 1, NULL, NULL),
	(54, 'details4', '<textarea type="text" name="details4" id="details4" class="md-input ckeditor"></textarea>', 'details4', '2', 1, 1, NULL, NULL);
/*!40000 ALTER TABLE `input_fields` ENABLE KEYS */;

-- Dumping structure for table classroom.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table classroom.migrations: ~10 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(0, '2019_12_17_153455_create_payments_table', 4),
	(2, '2018_10_29_131652_create_users_table', 1),
	(10, '2018_10_29_131653_create_company_profile_table', 2),
	(11, '2018_10_29_131801_create_modules_table', 2),
	(12, '2018_10_29_131809_create_category_table', 2),
	(13, '2018_10_29_131843_create_sub_category_table', 2),
	(14, '2018_10_29_131917_create_modules_sub_category_fields_table', 2),
	(15, '2018_10_29_131957_create_further_sub_category_table', 2),
	(16, '2018_10_29_132017_create_further_sub_category_images_table', 2),
	(17, '2018_10_31_123221_create_subscriptions_table', 3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table classroom.modules
CREATE TABLE IF NOT EXISTS `modules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon_code` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category` tinyint(4) DEFAULT NULL,
  `sub_category` tinyint(4) DEFAULT NULL,
  `further_sub_category` tinyint(4) DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial` int(11) DEFAULT NULL,
  `show_in_home` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `modules_created_by_foreign` (`created_by`),
  KEY `modules_updated_by_foreign` (`updated_by`),
  CONSTRAINT `modules_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `modules_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table classroom.modules: ~4 rows (approximately)
/*!40000 ALTER TABLE `modules` DISABLE KEYS */;
/*!40000 ALTER TABLE `modules` ENABLE KEYS */;

-- Dumping structure for table classroom.modules_sub_category_fields
CREATE TABLE IF NOT EXISTS `modules_sub_category_fields` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `modules_id` int(10) unsigned DEFAULT NULL,
  `name` int(11) DEFAULT NULL,
  `location` int(11) DEFAULT NULL,
  `summary` int(11) DEFAULT NULL,
  `details` int(11) DEFAULT NULL,
  `thumbnail_image` int(11) DEFAULT NULL,
  `image_2` int(11) DEFAULT NULL,
  `image_3` int(11) DEFAULT NULL,
  `image_4` int(11) DEFAULT NULL,
  `caption_1` int(11) DEFAULT NULL,
  `caption_2` int(11) DEFAULT NULL,
  `caption_3` int(11) DEFAULT NULL,
  `caption_4` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `modules_sub_category_fields_modules_id_foreign` (`modules_id`),
  KEY `modules_sub_category_fields_created_by_foreign` (`created_by`),
  KEY `modules_sub_category_fields_updated_by_foreign` (`updated_by`),
  CONSTRAINT `modules_sub_category_fields_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `modules_sub_category_fields_modules_id_foreign` FOREIGN KEY (`modules_id`) REFERENCES `modules` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `modules_sub_category_fields_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table classroom.modules_sub_category_fields: ~0 rows (approximately)
/*!40000 ALTER TABLE `modules_sub_category_fields` DISABLE KEYS */;
/*!40000 ALTER TABLE `modules_sub_category_fields` ENABLE KEYS */;

-- Dumping structure for table classroom.modules_values
CREATE TABLE IF NOT EXISTS `modules_values` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `modules_id` int(20) unsigned DEFAULT NULL,
  `input_fields_id` int(20) unsigned DEFAULT NULL,
  `modules_value` blob DEFAULT NULL,
  `created_by` int(20) unsigned DEFAULT NULL,
  `updated_by` int(20) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `input_fields_id` (`input_fields_id`),
  KEY `modules_id` (`modules_id`),
  KEY `created_by` (`created_by`) USING BTREE,
  KEY `updated_by` (`updated_by`),
  CONSTRAINT `modules_values_ibfk_1` FOREIGN KEY (`input_fields_id`) REFERENCES `input_fields` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `modules_values_ibfk_2` FOREIGN KEY (`modules_id`) REFERENCES `modules` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table classroom.modules_values: ~0 rows (approximately)
/*!40000 ALTER TABLE `modules_values` DISABLE KEYS */;
/*!40000 ALTER TABLE `modules_values` ENABLE KEYS */;

-- Dumping structure for table classroom.newsletters
CREATE TABLE IF NOT EXISTS `newsletters` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` char(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table classroom.newsletters: ~0 rows (approximately)
/*!40000 ALTER TABLE `newsletters` DISABLE KEYS */;
/*!40000 ALTER TABLE `newsletters` ENABLE KEYS */;

-- Dumping structure for table classroom.sub_category
CREATE TABLE IF NOT EXISTS `sub_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sub_cat_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `sub_category_category_id_foreign` (`category_id`),
  KEY `sub_category_created_by_foreign` (`created_by`),
  KEY `sub_category_updated_by_foreign` (`updated_by`),
  CONSTRAINT `sub_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `sub_category_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `sub_category_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table classroom.sub_category: ~36 rows (approximately)
/*!40000 ALTER TABLE `sub_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `sub_category` ENABLE KEYS */;

-- Dumping structure for table classroom.sub_category_input_values
CREATE TABLE IF NOT EXISTS `sub_category_input_values` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(20) unsigned DEFAULT NULL,
  `input_fields_id` int(20) unsigned DEFAULT NULL,
  `sub_cat_input_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(20) DEFAULT NULL,
  `updated_by` int(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  KEY `input_fields_id` (`input_fields_id`),
  CONSTRAINT `sub_category_input_values_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `sub_category_input_values_ibfk_2` FOREIGN KEY (`input_fields_id`) REFERENCES `input_fields` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=393 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table classroom.sub_category_input_values: ~108 rows (approximately)
/*!40000 ALTER TABLE `sub_category_input_values` DISABLE KEYS */;
/*!40000 ALTER TABLE `sub_category_input_values` ENABLE KEYS */;

-- Dumping structure for table classroom.sub_category_values
CREATE TABLE IF NOT EXISTS `sub_category_values` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `sub_category_id` int(20) unsigned DEFAULT NULL,
  `input_fields_id` int(20) unsigned DEFAULT NULL,
  `sub_category_value` blob DEFAULT NULL,
  `created_by` int(20) DEFAULT NULL,
  `updated_by` int(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `sub_category_id` (`sub_category_id`),
  KEY `input_fields_id` (`input_fields_id`),
  CONSTRAINT `sub_category_values_ibfk_1` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `sub_category_values_ibfk_2` FOREIGN KEY (`input_fields_id`) REFERENCES `input_fields` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1248 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table classroom.sub_category_values: ~252 rows (approximately)
/*!40000 ALTER TABLE `sub_category_values` DISABLE KEYS */;
/*!40000 ALTER TABLE `sub_category_values` ENABLE KEYS */;

-- Dumping structure for table classroom.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middle_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `street_address_1` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `street_address_2` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zip_code` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `type` tinyint(1) DEFAULT 1,
  `activated` tinyint(1) NOT NULL DEFAULT 0,
  `created_by` int(10) unsigned DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table classroom.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `first_name`, `middle_name`, `last_name`, `image`, `contact`, `street_address_1`, `street_address_2`, `city`, `state`, `zip_code`, `country`, `note`, `email`, `password`, `type`, `activated`, `created_by`, `updated_by`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'Muntaser', NULL, 'Muttaqi', '', '01863250879', 'Ontik Technology', 'Dhanmondi', 'Dhaka', 'Jigatola', '1207', 'Bangladesh', '', 'admin@mail.com', '$2y$10$o7nJcWdzwPwqPVr5dmpSd.gpG.rW3QPQfbFIFsdpMXbxNccRLS7Yy', 1, 0, NULL, NULL, 'hFUZh9ci4MVDxeQQk8xKNG4vxcr1YnS7OYDr1ZzlPXRxT73AWFFXcBI9yMdp', NULL, '2019-10-18 07:52:41');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
