-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table giveaways.abouts
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `top_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.abouts: ~0 rows (approximately)
INSERT INTO `abouts` (`id`, `top_title`, `title`, `description_1`, `description_2`, `number_1`, `title_1`, `number_2`, `title_2`, `number_3`, `title_3`, `created_at`, `updated_at`) VALUES
	(1, 'A few words about us', 'We dream big so you can win big', 'We\'re bold in our ambition: to be the world\'s biggest and best online lottery platform. We\'re for every player that\'s ever dreamed of hitting the jackpot, which is why we bring you the biggest prizes from around the world and offer you tons of ways to play. Our aim is to offer unprecedented variety as well as quality.', 'Our team of creative programmers, marketing experts, and members of the global lottery community have worked together to build the ultimate lottery site, and every win and happy customer reminds us how lucky we are to be doing what we love.', '23', 'Winners For Last Month', '2837K', 'Tickets Sold', '28387K', 'Payouts to Winners', '2024-03-22 02:07:19', '2024-03-22 02:15:21');

-- Dumping structure for table giveaways.about_features
CREATE TABLE IF NOT EXISTS `about_features` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `inner_icon_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_title_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inner_icon_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_title_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inner_icon_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_title_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inner_icon_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_title_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inner_icon_5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_title_5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inner_icon_6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_title_6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.about_features: ~0 rows (approximately)
INSERT INTO `about_features` (`id`, `image`, `subtitle`, `title`, `description`, `inner_icon_1`, `icon_title_1`, `inner_icon_2`, `icon_title_2`, `inner_icon_3`, `icon_title_3`, `inner_icon_4`, `icon_title_4`, `inner_icon_5`, `icon_title_5`, `inner_icon_6`, `icon_title_6`, `created_at`, `updated_at`) VALUES
	(1, 'aboutFeactureIcons/07CwSqBrwRRPvqRSuLVLiqFVvcZTGS5lnG5GIO9s.png', 'An Exhaustive list of amazing features', 'What makes Rifa different?', 'These are the key drivers that make us different: Safe, Social, Reliable and Fun. Rifa Lotto is dedicated to trust and safety.', 'aboutFeactureIcons/2416rfIqjjkpnjIAjPUzcVHEnmTZlv3Yt9AITg6Y.png', 'No Commission on Winnings', 'aboutFeactureIcons/0tUQvYcSWNzmweGV4iz7gphyy413eHivWdZMQSfw.png', 'Safe and Secure Playing', 'aboutFeactureIcons/LAXI7WMOJejxEdaxDs2qpPSTbOHOM4K8muU21ewY.png', 'Biggest lottery jackpots', 'aboutFeactureIcons/CmhTBnaAADZqfoglWerfDzGQhqoLeSAhvOfIKLDG.png', 'Instant payout system', 'aboutFeactureIcons/LbGr5hNEgYk5PDcouSrODUAgiCYlDgWz2ua548QH.png', 'Dedicated Support', 'aboutFeactureIcons/qB8m1ZCG0sNLr88UBcr9ELpSiPgsOPxigiVEZeqi.png', 'Unlimited Affiliates', '2024-03-22 03:21:41', '2024-05-04 04:34:27');

-- Dumping structure for table giveaways.activity_log
CREATE TABLE IF NOT EXISTS `activity_log` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `log_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint unsigned DEFAULT NULL,
  `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint unsigned DEFAULT NULL,
  `properties` json DEFAULT NULL,
  `batch_uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subject` (`subject_type`,`subject_id`),
  KEY `causer` (`causer_type`,`causer_id`),
  KEY `activity_log_log_name_index` (`log_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.activity_log: ~0 rows (approximately)

-- Dumping structure for table giveaways.affiliates
CREATE TABLE IF NOT EXISTS `affiliates` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.affiliates: ~0 rows (approximately)
INSERT INTO `affiliates` (`id`, `subtitle`, `title`, `description`, `button`, `created_at`, `updated_at`) VALUES
	(1, 'Boost Your Earnings', 'Become an affiliate', 'Follow these 3 easy steps!', 'join us', '2024-03-23 05:29:34', '2024-03-26 05:17:16');

-- Dumping structure for table giveaways.affiliate_partners
CREATE TABLE IF NOT EXISTS `affiliate_partners` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_icon_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_title_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_description_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_icon_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_title_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_description_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_icon_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_title_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_description_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_icon_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_title_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_description_4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.affiliate_partners: ~0 rows (approximately)
INSERT INTO `affiliate_partners` (`id`, `subtitle`, `title`, `description`, `card_icon_1`, `card_title_1`, `card_description_1`, `card_icon_2`, `card_title_2`, `card_description_2`, `card_icon_3`, `card_title_3`, `card_description_3`, `card_icon_4`, `card_title_4`, `card_description_4`, `created_at`, `updated_at`) VALUES
	(1, 'What you\'ll get as', 'Affiliate Partner', 'Earn Unlimited Commissions with rifa affiliate program. Our partner program can increase your income by receing percentage.', 'AffiliatePartnerIcons/pvXJDdUPEDmic5i096pXPIjAGz9vVXEfAhh3CAtp.png', 'No fees', 'Lorem ipsum dolor sit amet, consectetur eget varius diameget.', 'AffiliatePartnerIcons/1v5sAYy3xkdg0kqZ1fG8dk7uZlUQyoWs3c8L0ZaB.png', 'Easy Payouts', 'Lorem ipsum dolor sit amet, consectetur eget varius diameget.', 'AffiliatePartnerIcons/6ZDjBI3s57pi23Mxn2UhHpZP3WR9yIe5NxQCHerZ.png', 'Tools for success', 'Lorem ipsum dolor sit amet, consectetur eget varius diameget.', 'AffiliatePartnerIcons/ukySQy1i4jPwmjV6JYgYuqBI6zX99bZHiq2oeAcV.png', '24/7 Support', 'Lorem ipsum dolor sit amet, consectetur eget varius diameget.', '2024-03-25 02:36:35', '2024-03-25 02:41:54');

-- Dumping structure for table giveaways.binshops_categories
CREATE TABLE IF NOT EXISTS `binshops_categories` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `created_by` int unsigned DEFAULT NULL COMMENT 'user id',
  `parent_id` int DEFAULT NULL,
  `lft` int DEFAULT NULL,
  `rgt` int DEFAULT NULL,
  `depth` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `binshops_categories_created_by_index` (`created_by`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.binshops_categories: ~6 rows (approximately)
INSERT INTO `binshops_categories` (`id`, `created_by`, `parent_id`, `lft`, `rgt`, `depth`, `created_at`, `updated_at`) VALUES
	(1, NULL, NULL, 1, 2, 0, '2024-05-08 00:38:36', '2024-05-08 00:38:36'),
	(2, NULL, NULL, 3, 4, 0, '2024-05-08 00:39:28', '2024-05-08 00:39:28'),
	(3, NULL, NULL, 5, 6, 0, '2024-05-08 00:39:57', '2024-05-08 00:39:57'),
	(4, NULL, NULL, 7, 8, 0, '2024-05-08 00:40:28', '2024-05-08 00:40:28'),
	(5, NULL, NULL, 9, 10, 0, '2024-05-08 00:40:55', '2024-05-08 00:40:55'),
	(6, NULL, NULL, 11, 12, 0, '2024-05-08 00:41:20', '2024-05-08 00:41:20');

-- Dumping structure for table giveaways.binshops_category_translations
CREATE TABLE IF NOT EXISTS `binshops_category_translations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int unsigned DEFAULT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` mediumtext COLLATE utf8mb4_unicode_ci,
  `lang_id` int unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `binshops_category_translations_slug_unique` (`slug`),
  KEY `binshops_category_translations_lang_id_index` (`lang_id`),
  CONSTRAINT `binshops_category_translations_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `binshops_languages` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.binshops_category_translations: ~6 rows (approximately)
INSERT INTO `binshops_category_translations` (`id`, `category_id`, `category_name`, `slug`, `category_description`, `lang_id`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Jackpot', 'jackpot', 'Lottery mistakes – check out the most common mistakes of lotto players and winners', 1, '2024-05-08 00:38:36', '2024-05-08 00:38:36'),
	(2, 2, 'Winners', 'winners', 'Lottery mistakes – check out the most common mistakes of lotto players and winners', 1, '2024-05-08 00:39:28', '2024-05-08 00:39:28'),
	(3, 3, 'Powerball', 'powerball', 'Lottery mistakes – check out the most common mistakes of lotto players and winners', 1, '2024-05-08 00:39:57', '2024-05-08 00:39:57'),
	(4, 4, 'Mega Millions', 'mega-millions', 'Lottery mistakes – check out the most common mistakes of lotto players and winners', 1, '2024-05-08 00:40:28', '2024-05-08 00:40:28'),
	(5, 5, 'Inspiration', 'inspiration', 'Lottery mistakes – check out the most common mistakes of lotto players and winners', 1, '2024-05-08 00:40:55', '2024-05-08 00:40:55'),
	(6, 6, 'Bonus', 'bonus', 'Lottery mistakes – check out the most common mistakes of lotto players and winners', 1, '2024-05-08 00:41:20', '2024-05-08 00:41:20');

-- Dumping structure for table giveaways.binshops_comments
CREATE TABLE IF NOT EXISTS `binshops_comments` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int unsigned NOT NULL,
  `user_id` int unsigned DEFAULT NULL COMMENT 'if user was logged in',
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'if enabled in the config file',
  `author_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'if not logged in',
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'the comment body',
  `approved` tinyint(1) NOT NULL DEFAULT '1',
  `author_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `binshops_comments_post_id_index` (`post_id`),
  KEY `binshops_comments_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.binshops_comments: ~2 rows (approximately)
INSERT INTO `binshops_comments` (`id`, `post_id`, `user_id`, `ip`, `author_name`, `comment`, `approved`, `author_email`, `author_website`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, '127.0.0.1', NULL, 'Wow', 0, NULL, NULL, '2024-05-08 02:19:49', '2024-05-08 02:19:49'),
	(2, 1, 1, '127.0.0.1', NULL, 'Wow', 0, NULL, NULL, '2024-05-08 02:20:24', '2024-05-08 02:20:24');

-- Dumping structure for table giveaways.binshops_configurations
CREATE TABLE IF NOT EXISTS `binshops_configurations` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.binshops_configurations: ~2 rows (approximately)
INSERT INTO `binshops_configurations` (`key`, `value`, `created_at`, `updated_at`) VALUES
	('DEFAULT_LANGUAGE_LOCALE', 'en', '2024-05-08 00:36:14', '2024-05-08 00:36:14'),
	('INITIAL_SETUP', '1', '2024-05-08 00:36:14', '2024-05-08 00:36:14');

-- Dumping structure for table giveaways.binshops_languages
CREATE TABLE IF NOT EXISTS `binshops_languages` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iso_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_format` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `rtl` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `binshops_languages_name_unique` (`name`),
  UNIQUE KEY `binshops_languages_locale_unique` (`locale`),
  UNIQUE KEY `binshops_languages_iso_code_unique` (`iso_code`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.binshops_languages: ~0 rows (approximately)
INSERT INTO `binshops_languages` (`id`, `name`, `locale`, `iso_code`, `date_format`, `active`, `rtl`, `created_at`, `updated_at`) VALUES
	(1, 'English', 'en', 'en', 'YYYY/MM/DD', 1, 0, '2024-05-08 00:36:13', '2024-05-08 00:36:13');

-- Dumping structure for table giveaways.binshops_posts
CREATE TABLE IF NOT EXISTS `binshops_posts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned DEFAULT NULL,
  `posted_at` datetime DEFAULT NULL COMMENT 'Public posted at time, if this is in future then it wont appear yet',
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `binshops_posts_user_id_index` (`user_id`),
  KEY `binshops_posts_posted_at_index` (`posted_at`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.binshops_posts: ~8 rows (approximately)
INSERT INTO `binshops_posts` (`id`, `user_id`, `posted_at`, `is_published`, `created_at`, `updated_at`) VALUES
	(1, 1, '2024-05-08 05:45:02', 1, '2024-05-08 00:45:02', '2024-05-08 00:45:02'),
	(2, 1, '2024-05-08 07:17:01', 1, '2024-05-08 02:17:01', '2024-05-08 02:17:01'),
	(3, 1, '2024-05-08 07:22:51', 1, '2024-05-08 02:22:51', '2024-05-08 02:22:51'),
	(4, 1, '2024-05-08 07:26:07', 1, '2024-05-08 02:26:07', '2024-05-08 02:26:07'),
	(5, 1, '2024-05-08 07:27:23', 1, '2024-05-08 02:27:23', '2024-05-08 02:27:23'),
	(6, 1, '2024-05-08 07:29:33', 1, '2024-05-08 02:29:33', '2024-05-08 02:29:33'),
	(7, 1, '2024-05-10 09:25:45', 1, '2024-05-10 04:25:45', '2024-05-10 04:25:45'),
	(8, 1, '2024-05-10 09:25:49', 1, '2024-05-10 04:25:49', '2024-05-10 04:25:49');

-- Dumping structure for table giveaways.binshops_post_categories
CREATE TABLE IF NOT EXISTS `binshops_post_categories` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int unsigned NOT NULL,
  `category_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `binshops_post_categories_post_id_index` (`post_id`),
  KEY `binshops_post_categories_category_id_index` (`category_id`),
  CONSTRAINT `binshops_post_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `binshops_categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `binshops_post_categories_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `binshops_posts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.binshops_post_categories: ~25 rows (approximately)
INSERT INTO `binshops_post_categories` (`id`, `post_id`, `category_id`) VALUES
	(1, 1, 1),
	(2, 2, 1),
	(3, 2, 2),
	(4, 3, 1),
	(5, 3, 2),
	(6, 3, 4),
	(7, 1, 2),
	(8, 1, 4),
	(9, 1, 6),
	(10, 4, 1),
	(11, 4, 4),
	(12, 4, 5),
	(13, 4, 6),
	(14, 5, 3),
	(15, 5, 4),
	(16, 5, 5),
	(17, 6, 1),
	(18, 6, 2),
	(19, 6, 3),
	(20, 6, 6),
	(21, 7, 2),
	(22, 7, 3),
	(23, 7, 4),
	(26, 8, 2),
	(27, 8, 1);

-- Dumping structure for table giveaways.binshops_post_translations
CREATE TABLE IF NOT EXISTS `binshops_post_translations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int unsigned DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'New blog post',
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `meta_desc` text COLLATE utf8mb4_unicode_ci,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_body` mediumtext COLLATE utf8mb4_unicode_ci,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `use_view_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'should refer to a blade file in /views/',
  `image_large` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_medium` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang_id` int unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `binshops_post_translations_lang_id_index` (`lang_id`),
  CONSTRAINT `binshops_post_translations_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `binshops_languages` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.binshops_post_translations: ~8 rows (approximately)
INSERT INTO `binshops_post_translations` (`id`, `post_id`, `slug`, `title`, `subtitle`, `meta_desc`, `seo_title`, `post_body`, `short_description`, `use_view_file`, `image_large`, `image_medium`, `image_thumbnail`, `lang_id`, `created_at`, `updated_at`) VALUES
	(1, 1, '-image-how-to-stop-lottery-addiction', 'image How to stop lottery addiction?', 'Lottery mistakes – check out the most common mistakes of lotto players and winners', NULL, NULL, '<h4>Lottery winners mistakes</h4>\r\n\r\n<p>Lottery winners are lucky people, but they can also make a lot of lottery mistakes. Probably they can make more mistakes than the players because when they won, euphoria and joy can hinder logical thinking. Which lottery winners mistakes are the most common? Which situations you have to avoid? Let&rsquo;s talk about the biggest lottery mistakes made by the winners of games of chance.</p>\r\n\r\n<h4>Biggest lottery mistakes in history</h4>\r\n\r\n<p>Do you want to know more about the biggest lottery mistakes? One of them is trying to double the winning by gambling. We heard about many lottery winners, who wanted to multiply the money. Their method was very dangerous because it was not an investment. They went to the casino or used the bookmaker and they&hellip; lost all the money.</p>', NULL, NULL, 'image-how-to-stop-lottery-addiction-1000x700.jpg', 'image-how-to-stop-lottery-addiction-600x400.jpg', 'image-how-to-stop-lottery-addiction-150x150.jpg', 1, '2024-05-08 00:45:02', '2024-05-08 02:24:03'),
	(2, 2, '5-tips-how-to-win-the-lottery', '5 Tips How To Win The Lottery', 'Lorem ipsum dolor sit amet, consectetur elit. Ut adipiscing elit. Ut tempor posuere lorem', NULL, NULL, '<p><img alt="image" src="http://starter_kits.test/front-end/assets/images/blog/2.jpg" /></p>\r\n\r\n<h3>5 Tips How To Win The Lottery</h3>\r\n\r\n<h3>Lorem ipsum dolor sit amet, consectetur elit. Ut adipiscing elit. Ut tempor posuere lorem</h3>', NULL, NULL, '5-tips-how-to-win-the-lottery-1000x700.jpg', '5-tips-how-to-win-the-lottery-600x400.jpg', '5-tips-how-to-win-the-lottery-150x150.jpg', 1, '2024-05-08 02:17:04', '2024-05-08 02:17:04'),
	(3, 3, 'the-positive-side-to-lotteries', 'The Positive Side To Lotteries', NULL, NULL, NULL, '<p><img alt="image" src="http://starter_kits.test/front-end/assets/images/blog/3.jpg" /></p>\r\n\r\n<h3>Lorem ipsum dolor sit amet, consectetur elit. Ut adipiscing elit. Ut tempor posuere lorem</h3>', NULL, NULL, 'the-positive-side-to-lotteries-1000x700.jpg', 'the-positive-side-to-lotteries-600x400.jpg', 'the-positive-side-to-lotteries-150x150.jpg', 1, '2024-05-08 02:22:52', '2024-05-08 02:22:52'),
	(4, 4, 'how-to-plan-a-lottery-win', 'How To Plan A Lottery Win', 'Lorem ipsum dolor sit amet, consectetur elit. Ut adipiscing elit. Ut tempor posuere lorem', NULL, NULL, '<h3>Lorem ipsum dolor sit amet, consectetur elit. Ut adipiscing elit. Ut tempor posuere lorem</h3>', NULL, NULL, 'how-to-plan-a-lottery-win-1000x700.jpg', 'how-to-plan-a-lottery-win-600x400.jpg', 'how-to-plan-a-lottery-win-150x150.jpg', 1, '2024-05-08 02:26:08', '2024-05-08 02:26:08'),
	(5, 5, 'the-evolution-of-the-lottery', 'The Evolution of The Lottery', 'Lorem ipsum dolor sit amet, consectetur elit. Ut adipiscing elit. Ut tempor posuere lorem', NULL, NULL, '<h3>Lorem ipsum dolor sit amet, consectetur elit. Ut adipiscing elit. Ut tempor posuere lorem</h3>', NULL, NULL, 'the-evolution-of-the-lottery-1000x700.jpg', 'the-evolution-of-the-lottery-600x400.jpg', 'the-evolution-of-the-lottery-150x150.jpg', 1, '2024-05-08 02:27:24', '2024-05-08 02:27:24'),
	(6, 6, 'tips-for-winning-the-lottery', 'Tips For Winning the Lottery', 'Lorem ipsum dolor sit amet, consectetur elit. Ut adipiscing elit. Ut tempor posuere lorem', NULL, NULL, '<h3>Lorem ipsum dolor sit amet, consectetur elit. Ut adipiscing elit. Ut tempor posuere lorem</h3>', NULL, NULL, 'tips-for-winning-the-lottery-6xk67-1000x700.jpg', 'tips-for-winning-the-lottery-itpaq-600x400.jpg', 'tips-for-winning-the-lottery-7uwb1-150x150.jpg', 1, '2024-05-08 02:29:33', '2024-05-08 02:30:18'),
	(7, 7, 'Dolore soluta sint', 'Ex proident sapient', 'Quam magnam nulla vo', 'Optio omnis dolor f', 'Minim tempora proide', NULL, 'Ut necessitatibus pa', NULL, NULL, NULL, NULL, 1, '2024-05-10 04:25:45', '2024-05-10 04:25:45'),
	(8, 8, 'fuga-ipsa-ipsa-ma', 'Fuga Ipsa ipsa ma', 'Ullam animi quod', 'Fugit consequuntur', 'Fugiat ut quia dolo', '<p>The slug (leave blank to auto generate) - i.e.http://starter_kits.test/en/blog/your-slugvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv</p>', 'Modi tempora ut cumq', NULL, 'fuga-ipsa-ipsa-ma-1000x700.jpg', 'fuga-ipsa-ipsa-ma-600x400.jpg', 'fuga-ipsa-ipsa-ma-150x150.jpg', 1, '2024-05-10 04:25:49', '2024-05-10 04:34:25');

-- Dumping structure for table giveaways.binshops_uploaded_photos
CREATE TABLE IF NOT EXISTS `binshops_uploaded_photos` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `uploaded_images` text COLLATE utf8mb4_unicode_ci,
  `image_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unknown',
  `uploader_id` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `binshops_uploaded_photos_uploader_id_index` (`uploader_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.binshops_uploaded_photos: ~6 rows (approximately)
INSERT INTO `binshops_uploaded_photos` (`id`, `uploaded_images`, `image_title`, `source`, `uploader_id`, `created_at`, `updated_at`) VALUES
	(1, '{"image_large":{"filename":"5-tips-how-to-win-the-lottery-1000x700.jpg","w":1000,"h":700},"image_medium":{"filename":"5-tips-how-to-win-the-lottery-600x400.jpg","w":600,"h":400},"image_thumbnail":{"filename":"5-tips-how-to-win-the-lottery-150x150.jpg","w":150,"h":150}}', NULL, 'BlogFeaturedImage', NULL, '2024-05-08 02:17:03', '2024-05-08 02:17:03'),
	(2, '{"image_large":{"filename":"the-positive-side-to-lotteries-1000x700.jpg","w":1000,"h":700},"image_medium":{"filename":"the-positive-side-to-lotteries-600x400.jpg","w":600,"h":400},"image_thumbnail":{"filename":"the-positive-side-to-lotteries-150x150.jpg","w":150,"h":150}}', NULL, 'BlogFeaturedImage', NULL, '2024-05-08 02:22:52', '2024-05-08 02:22:52'),
	(3, '{"image_large":{"filename":"image-how-to-stop-lottery-addiction-1000x700.jpg","w":1000,"h":700},"image_medium":{"filename":"image-how-to-stop-lottery-addiction-600x400.jpg","w":600,"h":400},"image_thumbnail":{"filename":"image-how-to-stop-lottery-addiction-150x150.jpg","w":150,"h":150}}', NULL, 'BlogFeaturedImage', NULL, '2024-05-08 02:24:03', '2024-05-08 02:24:03'),
	(4, '{"image_large":{"filename":"how-to-plan-a-lottery-win-1000x700.jpg","w":1000,"h":700},"image_medium":{"filename":"how-to-plan-a-lottery-win-600x400.jpg","w":600,"h":400},"image_thumbnail":{"filename":"how-to-plan-a-lottery-win-150x150.jpg","w":150,"h":150}}', NULL, 'BlogFeaturedImage', NULL, '2024-05-08 02:26:08', '2024-05-08 02:26:08'),
	(5, '{"image_large":{"filename":"the-evolution-of-the-lottery-1000x700.jpg","w":1000,"h":700},"image_medium":{"filename":"the-evolution-of-the-lottery-600x400.jpg","w":600,"h":400},"image_thumbnail":{"filename":"the-evolution-of-the-lottery-150x150.jpg","w":150,"h":150}}', NULL, 'BlogFeaturedImage', NULL, '2024-05-08 02:27:24', '2024-05-08 02:27:24'),
	(6, '{"image_large":{"filename":"tips-for-winning-the-lottery-1000x700.jpg","w":1000,"h":700},"image_medium":{"filename":"tips-for-winning-the-lottery-600x400.jpg","w":600,"h":400},"image_thumbnail":{"filename":"tips-for-winning-the-lottery-150x150.jpg","w":150,"h":150}}', NULL, 'BlogFeaturedImage', NULL, '2024-05-08 02:29:33', '2024-05-08 02:29:33'),
	(7, '{"image_large":{"filename":"tips-for-winning-the-lottery-6xk67-1000x700.jpg","w":1000,"h":700},"image_medium":{"filename":"tips-for-winning-the-lottery-itpaq-600x400.jpg","w":600,"h":400},"image_thumbnail":{"filename":"tips-for-winning-the-lottery-7uwb1-150x150.jpg","w":150,"h":150}}', NULL, 'BlogFeaturedImage', NULL, '2024-05-08 02:30:18', '2024-05-08 02:30:18'),
	(8, '{"image_large":{"filename":"fuga-ipsa-ipsa-ma-1000x700.jpg","w":1000,"h":700},"image_medium":{"filename":"fuga-ipsa-ipsa-ma-600x400.jpg","w":600,"h":400},"image_thumbnail":{"filename":"fuga-ipsa-ipsa-ma-150x150.jpg","w":150,"h":150}}', NULL, 'BlogFeaturedImage', NULL, '2024-05-10 04:34:24', '2024-05-10 04:34:24');

-- Dumping structure for table giveaways.blog_categories
CREATE TABLE IF NOT EXISTS `blog_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `blog_categories_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.blog_categories: ~0 rows (approximately)

-- Dumping structure for table giveaways.buy_tickets
CREATE TABLE IF NOT EXISTS `buy_tickets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart_top_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart_amount_1` decimal(10,2) NOT NULL,
  `cart_text_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart_amount_2` decimal(10,2) NOT NULL,
  `cart_text_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.buy_tickets: ~0 rows (approximately)
INSERT INTO `buy_tickets` (`id`, `subtitle`, `title`, `description`, `btn_title`, `btn_text`, `cart_top_text`, `cart_amount_1`, `cart_text_1`, `cart_amount_2`, `cart_text_2`, `created_at`, `updated_at`) VALUES
	(1, 'Dream Big Play Small', 'Will you be the next Winner?', 'Playing the lottery is something many of us do to bring a bit of excitement to our day-to-day routine.', 'Don\'t miss out! Next draw', 'buy ticket now!', 'Let the Number Speak for Us', 23.67, 'Last Month Winners', 2837.67, 'Tickets Sold', '2024-03-25 05:58:29', '2024-03-25 06:05:17');

-- Dumping structure for table giveaways.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` json NOT NULL,
  `description` json DEFAULT NULL,
  `_lft` int unsigned NOT NULL DEFAULT '0',
  `_rgt` int unsigned NOT NULL DEFAULT '0',
  `parent_id` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`),
  KEY `categories__lft__rgt_parent_id_index` (`_lft`,`_rgt`,`parent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.categories: ~17 rows (approximately)
INSERT INTO `categories` (`id`, `slug`, `icon`, `name`, `description`, `_lft`, `_rgt`, `parent_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'car', 'Categories/XGvd4Uc2ev358MCztAQdcqqE6Yd3kz8FhLDeWc1b.png', '{"en": "Car"}', '{"en": "Qui distinctio Volu"}', 1, 2, NULL, '2024-03-30 05:26:00', '2024-04-17 01:39:08', NULL),
	(2, 'bike', 'Categories/lTfmXtWzCGjzahKSyL32tyygbDTABnADFubARi0f.png', '{"en": "Bike"}', '{"en": "Anim consectetur nu"}', 3, 4, NULL, '2024-03-30 05:35:29', '2024-04-17 01:39:57', NULL),
	(3, 'bike-1', NULL, '{"en": "Bike"}', '{"en": "Anim consectetur nu"}', 5, 6, NULL, '2024-03-30 05:35:46', '2024-03-30 05:49:27', '2024-03-30 05:49:27'),
	(4, 'watches', 'Categories/ilqF6iEQqu32xVnIWuzbNJhYqgH6K83g1CeTOnmE.png', '{"en": "watches"}', '{"en": "Nisi eaque odio plac"}', 7, 8, NULL, '2024-03-30 05:45:20', '2024-04-17 01:40:43', NULL),
	(5, 'laptop', 'Categories/MsjzvKKjHFeZqz3zbW3TPKQvnsxbpxQVgtpPL67H.png', '{"en": "Laptop"}', '{"en": "Facere est ipsam ap"}', 9, 10, NULL, '2024-03-30 05:46:37', '2024-04-17 01:41:23', NULL),
	(6, 'bike-4', NULL, '{"en": "Bike 4"}', '{"en": "Qui sit duis quisqu"}', 11, 12, NULL, '2024-03-30 05:50:36', '2024-04-01 02:28:56', '2024-04-01 02:28:56'),
	(7, 'money', 'Categories/O0v4XKBVb1dMjLvxvC7denaeB3Qh9EJjAWKts9Pa.png', '{"en": "Money"}', '{"en": "Mollitia sint corpor"}', 13, 14, NULL, '2024-03-30 06:01:55', '2024-04-17 01:42:00', NULL),
	(8, 'rudyard-stanley', NULL, '{"en": "Rudyard Stanley"}', '{"en": "Temporibus est itaq"}', 15, 16, NULL, '2024-03-30 06:06:48', '2024-04-01 02:30:52', '2024-04-01 02:30:52'),
	(9, 'megan-tillman', 'Categories/XXOeeNnOpnp6mau1Aqju5aKZFRQwuJYpRWxNJE31.png', '{"en": "Megan Tillman"}', '{"en": "Laboris qui aut sequ"}', 17, 18, NULL, '2024-03-30 06:17:19', '2024-04-01 02:31:28', '2024-04-01 02:31:28'),
	(10, 'sydnee-sheppard', NULL, '{"en": "Sydnee Sheppard"}', '{"en": "Facere eveniet quia"}', 19, 20, NULL, '2024-03-30 06:21:12', '2024-03-31 02:24:10', '2024-03-31 02:24:10'),
	(11, 'cameron-vance', NULL, '{"en": "Cameron Vance"}', '{"en": "Aut a provident rat"}', 21, 22, NULL, '2024-03-30 06:27:04', '2024-04-01 02:31:21', '2024-04-01 02:31:21'),
	(12, 'emmanuel-forbes', NULL, '{"en": "Emmanuel Forbes"}', '{"en": "Ex est in doloremque"}', 23, 24, NULL, '2024-03-30 06:29:11', '2024-03-31 02:24:55', '2024-03-31 02:24:55'),
	(13, 'pascale-mccall', 'Categories/u5SOsnw58K98tKQqS0OHOGMXDVQgUUXUC9gF8EWu.png', '{"en": "Pascale Mccall"}', '{"en": "Totam consequatur N"}', 25, 26, NULL, '2024-03-30 06:40:04', '2024-04-01 02:31:04', '2024-04-01 02:31:04'),
	(14, 'stacey-durham', 'Categories/PjnUpvyNW4Wp6STattcPXtMztiF3nFBgoxcG8lbF.png', '{"en": "Stacey Durham"}', NULL, 27, 28, NULL, '2024-03-31 02:23:48', '2024-04-01 02:31:14', '2024-04-01 02:31:14'),
	(15, 'mobile', 'Categories/Upcbg44TDfmpJcwTztXpsEDd68fCtTr5sLqKmUxq.png', '{"en": "Mobile"}', '{"en": null}', 29, 30, NULL, '2024-04-01 03:11:22', '2024-04-17 01:43:49', NULL),
	(16, 'tab', 'Categories/XEX8Ra8QOtVdr7s4KHSqet378ISio07LOepnED2s.png', '{"en": "Tab"}', '{"en": null}', 31, 32, NULL, '2024-04-01 05:34:42', '2024-04-17 01:43:30', NULL),
	(17, 'griffith-hendricks', 'Categories/R63bqu2y20Qy7LhwFOWQSCxMvJrfaWX5KYkmfPlu.png', '{"en": "Griffith Hendricks"}', NULL, 33, 34, NULL, '2024-04-08 03:34:45', '2024-04-08 06:29:41', '2024-04-08 06:29:41');

-- Dumping structure for table giveaways.categorizables
CREATE TABLE IF NOT EXISTS `categorizables` (
  `category_id` int unsigned NOT NULL,
  `categorizable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorizable_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  UNIQUE KEY `categorizables_ids_type_unique` (`category_id`,`categorizable_id`,`categorizable_type`),
  KEY `categorizables_categorizable_type_categorizable_id_index` (`categorizable_type`,`categorizable_id`),
  CONSTRAINT `categorizables_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.categorizables: ~9 rows (approximately)
INSERT INTO `categorizables` (`category_id`, `categorizable_type`, `categorizable_id`, `created_at`, `updated_at`) VALUES
	(1, 'App\\Models\\Giveaway', 1, NULL, NULL),
	(1, 'App\\Models\\Giveaway', 2, NULL, NULL),
	(1, 'App\\Models\\Giveaway', 3, NULL, NULL),
	(1, 'App\\Models\\Giveaway', 10, NULL, NULL),
	(2, 'App\\Models\\Giveaway', 6, NULL, NULL),
	(2, 'App\\Models\\Giveaway', 14, NULL, NULL),
	(4, 'App\\Models\\Giveaway', 7, NULL, NULL),
	(15, 'App\\Models\\Giveaway', 9, NULL, NULL),
	(16, 'App\\Models\\Giveaway', 8, NULL, NULL);

-- Dumping structure for table giveaways.category_post
CREATE TABLE IF NOT EXISTS `category_post` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int unsigned NOT NULL,
  `post_id` int unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_post_category_id_index` (`category_id`),
  KEY `category_post_post_id_index` (`post_id`),
  CONSTRAINT `category_post_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `binshops_categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `category_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `binshops_posts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.category_post: ~0 rows (approximately)

-- Dumping structure for table giveaways.contest_cards
CREATE TABLE IF NOT EXISTS `contest_cards` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `card_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.contest_cards: ~5 rows (approximately)
INSERT INTO `contest_cards` (`id`, `card_icon`, `card_title`, `card_description`, `created_at`, `updated_at`) VALUES
	(1, 'ContestCardIcons/4r9k4XQkLLhEd0HHfIqci2R4gjX8IK6FH0ixdpIX.png', 'Secure Checkout', 'Pay with the world’s most popular and secure payment methods.', '2024-03-28 02:14:46', '2024-03-28 02:14:46'),
	(2, 'ContestCardIcons/FRG5di8S87sJFiQgZR58IUhMiJcTK1rhqGhT5Lme.png', 'Great Value', 'We offer competitive prices for every lottery tickets', '2024-03-28 02:15:27', '2024-03-28 02:15:27'),
	(3, 'ContestCardIcons/7PFzYr6fLDTNy4x3yd11lvg0NErTYZ206p0k8hvp.png', 'Free Worldwide Delivery', 'We are available for providing our services in major countries', '2024-03-28 02:16:08', '2024-03-28 02:16:08'),
	(4, 'ContestCardIcons/b5TxhhY9K2hPYxfcIjipWIwpQ0xSqP7a9hjaGT2p.png', 'Secure Checkout', 'Pay with the world’s most popular and secure payment methods.', '2024-04-05 02:28:59', '2024-04-05 02:30:18'),
	(5, 'ContestCardIcons/PoeSfz5w7yY2F5WZkiiNtbJ3qNjQMxP77cg7AJ2V.png', 'Great Value', 'We offer competitive prices for every lottery tickets', '2024-04-05 02:30:50', '2024-04-05 02:30:50');

-- Dumping structure for table giveaways.contest_tops
CREATE TABLE IF NOT EXISTS `contest_tops` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.contest_tops: ~0 rows (approximately)
INSERT INTO `contest_tops` (`id`, `subtitle`, `title`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Laboris repudiandae ', 'Optio porro magna c', 'Accusamus dolor vita', '2024-03-28 01:04:25', '2024-03-28 01:04:25');

-- Dumping structure for table giveaways.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table giveaways.faqs
CREATE TABLE IF NOT EXISTS `faqs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.faqs: ~13 rows (approximately)
INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
	(9, ' How do I deposit funds into my Rifa Lottos account?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra  maecenas accumsan lacus vel facilisis.', '2024-03-26 01:06:42', '2024-04-08 04:25:30'),
	(10, '  What will the payment reflect as on my credit card statement?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.', '2024-03-26 01:06:59', '2024-03-26 02:09:30'),
	(11, 'Why am I unable to deposit funds via credit card on your website?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.', '2024-03-26 01:07:14', '2024-03-26 02:10:04'),
	(12, 'How do I deposit funds into my Rifa Lottos account?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra  maecenas accumsan lacus vel facilisis.', '2024-03-26 01:13:15', '2024-03-26 02:10:29'),
	(13, ' What will the payment reflect as on my credit card statement?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.', '2024-03-26 01:21:22', '2024-03-26 02:10:54'),
	(14, ' Why am I unable to deposit funds via credit card on your website?', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum dignissimos consectetur aspernatur expedita aut reiciendis magni tempore ullam libero, voluptate nam accusamus est a debitis, obcaecati beatae possimus veniam distinctio?', '2024-03-26 01:21:36', '2024-03-26 02:11:59'),
	(15, ' How do I deposit funds into my Rifa Lottos account?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra  maecenas accumsan lacus vel facilisis.', '2024-03-26 01:27:40', '2024-03-26 02:12:31'),
	(16, ' What will the payment reflect as on my credit card statement?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.', '2024-03-26 01:27:56', '2024-03-26 02:12:59'),
	(17, ' Why am I unable to deposit funds via credit card on your website?', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum dignissimos consectetur aspernatur expedita aut reiciendis magni tempore ullam libero, voluptate nam accusamus est a debitis, obcaecati beatae possimus veniam distinctio?', '2024-03-26 02:14:22', '2024-03-26 02:14:22'),
	(18, 'Am I allowed to withdraw my deposit?', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum dignissimos consectetur aspernatur expedita aut reiciendis magni tempore ullam libero, voluptate nam accusamus est a debitis, obcaecati beatae possimus veniam distinctio?', '2024-03-26 02:14:43', '2024-03-26 02:14:43'),
	(19, 'Which payment methods are accepted by Rifa Lottos?', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum dignissimos consectetur aspernatur expedita aut reiciendis magni tempore ullam libero, voluptate nam accusamus est a debitis, obcaecati beatae possimus veniam distinctio?', '2024-03-26 02:15:15', '2024-03-26 02:15:15'),
	(20, 'How do I deposit funds into my Rifa Lottos account?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra  maecenas accumsan lacus vel facilisis.', '2024-03-26 02:15:59', '2024-03-26 02:15:59'),
	(21, '   Why am I unable to deposit funds via credit card on your website?', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum dignissimos consectetur aspernatur expedita aut reiciendis magni tempore ullam libero, voluptate nam accusamus est a debitis, obcaecati beatae possimus veniam distinctio?', '2024-03-26 02:16:43', '2024-03-26 02:16:43');

-- Dumping structure for table giveaways.faqs_categories
CREATE TABLE IF NOT EXISTS `faqs_categories` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_lft` int unsigned NOT NULL DEFAULT '0',
  `_rgt` int unsigned NOT NULL DEFAULT '0',
  `parent_id` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `faqs_categories_slug_unique` (`slug`),
  KEY `faqs_categories__lft__rgt_parent_id_index` (`_lft`,`_rgt`,`parent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.faqs_categories: ~5 rows (approximately)
INSERT INTO `faqs_categories` (`id`, `slug`, `name`, `description`, `_lft`, `_rgt`, `parent_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'banking', 'Bankings', 'Omnis aliqua Ipsam ', 1, 2, NULL, '2024-04-08 04:14:03', '2024-04-08 04:15:46', NULL),
	(2, 'rifa-tickets', 'Rifa Tickets', 'Omnis aliqua Ipsam ', 3, 4, NULL, '2024-04-08 04:14:52', '2024-04-08 04:14:52', NULL),
	(3, 'winning', 'Winning', 'Quisquam porro quis ', 5, 6, NULL, '2024-04-08 04:16:40', '2024-04-08 04:16:40', NULL),
	(4, 'results-alerts', 'Results & Alerts', 'Ipsa repudiandae su', 7, 8, NULL, '2024-04-08 04:17:01', '2024-04-08 04:17:01', NULL),
	(5, 'about-rifa', 'About Rifa', 'Saepe deserunt cillu', 9, 10, NULL, '2024-04-08 04:17:13', '2024-04-08 04:17:13', NULL);

-- Dumping structure for table giveaways.faqs_categorizables
CREATE TABLE IF NOT EXISTS `faqs_categorizables` (
  `category_id` int unsigned NOT NULL,
  `categorizable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorizable_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  UNIQUE KEY `categorizables_ids_type_unique` (`category_id`,`categorizable_id`,`categorizable_type`),
  KEY `faqs_categorizables_categorizable_type_categorizable_id_index` (`categorizable_type`,`categorizable_id`),
  CONSTRAINT `faqs_categorizables_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `faqs_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.faqs_categorizables: ~15 rows (approximately)
INSERT INTO `faqs_categorizables` (`category_id`, `categorizable_type`, `categorizable_id`, `created_at`, `updated_at`) VALUES
	(1, 'App\\Models\\Faq', 9, NULL, NULL),
	(1, 'App\\Models\\Faq', 10, NULL, NULL),
	(1, 'App\\Models\\Faq', 11, NULL, NULL),
	(2, 'App\\Models\\Faq', 12, NULL, NULL),
	(2, 'App\\Models\\Faq', 13, NULL, NULL),
	(2, 'App\\Models\\Faq', 15, NULL, NULL),
	(3, 'App\\Models\\Faq', 14, NULL, NULL),
	(3, 'App\\Models\\Faq', 17, NULL, NULL),
	(3, 'App\\Models\\Faq', 23, NULL, NULL),
	(4, 'App\\Models\\Faq', 16, NULL, NULL),
	(4, 'App\\Models\\Faq', 18, NULL, NULL),
	(4, 'App\\Models\\Faq', 19, NULL, NULL),
	(5, 'App\\Models\\Faq', 20, NULL, NULL),
	(5, 'App\\Models\\Faq', 21, NULL, NULL),
	(5, 'App\\Models\\Faq', 22, NULL, NULL);

-- Dumping structure for table giveaways.faq_tops
CREATE TABLE IF NOT EXISTS `faq_tops` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.faq_tops: ~0 rows (approximately)
INSERT INTO `faq_tops` (`id`, `subtitle`, `title`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'You Have Questions', 'WE HAVE ANSWERS', 'Do not hesitate to send us an email if you can\'t find what you\'re looking for.', '2024-03-26 02:55:59', '2024-03-26 03:04:32');

-- Dumping structure for table giveaways.favorites
CREATE TABLE IF NOT EXISTS `favorites` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `giveaway_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `favorites_user_id_foreign` (`user_id`),
  KEY `favorites_giveaway_id_foreign` (`giveaway_id`),
  CONSTRAINT `favorites_giveaway_id_foreign` FOREIGN KEY (`giveaway_id`) REFERENCES `giveaways` (`id`) ON DELETE CASCADE,
  CONSTRAINT `favorites_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.favorites: ~16 rows (approximately)
INSERT INTO `favorites` (`id`, `user_id`, `giveaway_id`, `created_at`, `updated_at`) VALUES
	(50, 20, 1, '2024-05-15 03:34:38', '2024-05-15 03:34:38'),
	(54, 20, 4, '2024-05-15 04:47:27', '2024-05-15 04:47:27'),
	(55, 20, 3, '2024-05-15 04:48:31', '2024-05-15 04:48:31'),
	(56, 2, 1, '2024-05-15 05:59:23', '2024-05-15 05:59:23'),
	(57, 2, 2, '2024-05-15 06:00:06', '2024-05-15 06:00:06'),
	(59, 2, 4, '2024-05-15 06:03:21', '2024-05-15 06:03:21'),
	(63, 1, 8, '2024-05-16 01:23:51', '2024-05-16 01:23:51'),
	(67, 1, 14, '2024-05-17 02:19:57', '2024-05-17 02:19:57'),
	(68, 12, 1, '2024-05-17 06:06:09', '2024-05-17 06:06:09'),
	(69, 1, 1, '2024-05-22 07:06:43', '2024-05-22 07:06:43'),
	(70, 1, 4, '2024-05-22 07:08:11', '2024-05-22 07:08:11'),
	(71, 1, 6, '2024-05-22 07:08:25', '2024-05-22 07:08:25'),
	(72, 1, 7, '2024-05-22 07:08:32', '2024-05-22 07:08:32'),
	(73, 1, 9, '2024-05-23 07:13:50', '2024-05-23 07:13:50'),
	(74, 1, 10, '2024-05-23 07:14:01', '2024-05-23 07:14:01'),
	(75, 1, 3, '2024-05-23 07:18:29', '2024-05-23 07:18:29');

-- Dumping structure for table giveaways.features
CREATE TABLE IF NOT EXISTS `features` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_icon_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_title_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_description_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_icon_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_title_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_description_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_icon_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_title_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_description_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_icon_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_title_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_description_4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.features: ~0 rows (approximately)
INSERT INTO `features` (`id`, `subtitle`, `title`, `description`, `card_icon_1`, `card_title_1`, `card_description_1`, `card_icon_2`, `card_title_2`, `card_description_2`, `card_icon_3`, `card_title_3`, `card_description_3`, `card_icon_4`, `card_title_4`, `card_description_4`, `created_at`, `updated_at`) VALUES
	(1, 'An Exhaustive list of', 'Our features.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pretium, elit quis vehicula interdum, sem metus iaculis sapien, sed bibendum lectus augue eu metus.', 'featureCardIcons/l6efSPzIoXfn34VzIvgrgX7TtBCrBQED3O2pOqQb.png', 'Safe Service', 'Nulla ultricies in nulla ac efficitur. In vel neque arcu. Donec quis', 'featureCardIcons/bZIoIHxQSTYNNsXaSHwcmAHTCXXyX7bltzk9G6Ni.png', 'Network', 'Nulla ultricies in nulla ac efficitur. In vel neque arcu. Donec quis', 'featureCardIcons/B6Dlq458CxkcZhyP97eqg0ut0Yp8yxGKgzS42UiA.png', 'Security', 'Nulla ultricies in nulla ac efficitur. In vel neque arcu. Donec quis', 'featureCardIcons/5WPqhgHayBFo8seH5znSvBsfJvxgDunt078WF5Ol.png', 'Support', 'Nulla ultricies in nulla ac efficitur. In vel neque arcu. Donec quis', '2024-03-21 03:30:41', '2024-03-21 04:11:44');

-- Dumping structure for table giveaways.footer_icons
CREATE TABLE IF NOT EXISTS `footer_icons` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.footer_icons: ~4 rows (approximately)
INSERT INTO `footer_icons` (`id`, `icon_class`, `url`, `created_at`, `updated_at`) VALUES
	(1, 'fab fa-facebook-f', 'https://www.facebook.com/', '2024-04-16 02:58:23', '2024-04-16 02:58:23'),
	(2, 'fab fa-tiktok', 'https://www.twitter.com/', '2024-04-16 03:00:26', '2024-04-23 06:27:49'),
	(3, 'fab fa-pinterest-p', 'https://www.facebook.com/', '2024-04-16 03:00:56', '2024-04-18 01:22:08'),
	(5, 'fa-solid fa-x', 'https://vendor.ibuying.pk/', '2024-04-16 04:42:03', '2024-04-17 03:05:22');

-- Dumping structure for table giveaways.footer_texts
CREATE TABLE IF NOT EXISTS `footer_texts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.footer_texts: ~0 rows (approximately)
INSERT INTO `footer_texts` (`id`, `text`, `link_text`, `link_url`, `created_at`, `updated_at`) VALUES
	(1, 'Copyright © 2023.All Rights Reserved By', 'Rifa', 'http://starter_kits.test/', '2024-04-16 04:55:47', '2024-04-16 04:55:47');

-- Dumping structure for table giveaways.giveaways
CREATE TABLE IF NOT EXISTS `giveaways` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` decimal(8,2) NOT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `due_date` timestamp NULL DEFAULT NULL,
  `actual_price` decimal(8,2) NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.giveaways: ~10 rows (approximately)
INSERT INTO `giveaways` (`id`, `name`, `short_description`, `long_description`, `fee`, `start_date`, `due_date`, `actual_price`, `status`, `file_path`, `file_type`, `created_at`, `updated_at`) VALUES
	(1, 'I Phone 15', 'Vehicle Overview', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed ex eget mi sollicitudin consequat. Sed rhoncus ligula vel justo dignissim aliquam. Maecenas non est vitae ipsum luctus feugiat. Fusce purus nunc, sodales at condimentum sed, ullamcorper a nulla. Nam justo est, venenatis quis tellus in, volutpat eleifend nunc. Vestibulum congue laoreet mi non interdum. Ut ut dapibus tellus.', 1000.00, '2024-03-15 19:00:00', '2024-04-29 19:00:00', 500000.00, 'active', 'giveaways/aOfA98NkgvWCjycTqkno1PdMxv1ivL6eK1XqVl2K.png', 'png', '2024-03-08 05:40:54', '2024-04-08 01:34:46'),
	(2, 'OPPO ', 'At Liqwiz Solutions, we understand that technology is constantly evolving, and staying ahead of the curve is essential for success. That\'s why we are committed to providing cutting-edge solutions that leverage the latest advancements in technology.  ', 'fdsfds  ', 1000.00, '2024-03-08 19:00:00', '2024-05-24 19:00:00', 50000.00, 'active', 'giveaways/uKp39dyk6AGMEi2DT2ifgqRxa3tDUAKmf8KYuN6U.png', 'png', '2024-03-08 05:43:34', '2024-04-01 01:33:04'),
	(3, 'Vivo', 'Sed qui inventore no ', 'fdsfdsrf43r  ', 1221.00, '2024-03-08 19:00:00', '2024-04-29 19:00:00', 21121.00, 'active', 'giveaways/W7PGe5y0kQsBUp0BQUMRyqmQ4GZyuWCAmqtrFDeu.png', 'png', '2024-03-08 05:44:18', '2024-04-01 02:20:47'),
	(4, 'Huawei', 'At Liqwiz Solutions, we understand that technology is constantly evolving, and staying ahead of the curve is essential for success. That\'s why we are committed to providing cutting-edge solutions that leverage the latest advancements in technology. c', 'fdsfds ', 3232.00, '2024-03-08 19:00:00', '2024-04-09 19:00:00', 23323.00, 'inactive', 'giveaways/hzCLRLSyRJldk8J7chP0c1T9e9SD5HE7CLTYqSfs.png', 'png', '2024-03-08 05:44:56', '2024-04-22 05:25:14'),
	(6, 'Yael Weaver', 'Dicta pariatur Aliq', 'Eveniet neque enim ', 1000.00, '2009-02-19 19:00:00', '2024-06-16 19:00:00', 737.00, 'active', 'giveaways/LcPlnmJZST60y4qo2EkB86j6tCXEKWyPcPqQCvGB.png', 'png', '2024-03-09 06:40:45', '2024-04-27 06:49:22'),
	(7, 'Morgan Stokes', 'Dolores iusto do et ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed ex eget mi sollicitudin consequat. Sed rhoncus ligula vel justo dignissim aliquam. Maecenas non est vitae ipsum luctus feugiat. Fusce purus nunc, sodales at condimentum sed, ullamcorper a nulla. Nam justo est, venenatis quis tellus in, volutpat eleifend nunc. Vestibulum congue laoreet mi non interdum. Ut ut dapibus tellus.', 500.00, '1983-03-19 19:00:00', '2024-04-01 19:00:00', 212.00, 'active', 'giveaways/cGnVpmz5kUwssekZihAps8U6rqYycIRvzKYNunYB.png', 'png', '2024-03-09 06:45:02', '2024-04-01 01:33:21'),
	(8, 'Breanna Reynolds', 'Omnis similique saep', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed ex eget mi sollicitudin consequat. Sed rhoncus ligula vel justo dignissim aliquam. Maecenas non est vitae ipsum luctus feugiat. Fusce purus nunc, sodales at condimentum sed, ullamcorper a nulla. Nam justo est, venenatis quis tellus in, volutpat eleifend nunc. Vestibulum congue laoreet mi non interdum. Ut ut dapibus tellus.', 3.00, '1982-06-08 19:00:00', '2024-05-20 19:00:00', 842.00, 'active', 'giveaways/3OH1URAB3goUnsRxjEVxRsL0VnEmkLbMuddEsJVq.png', 'png', '2024-03-10 03:08:09', '2024-04-02 03:08:12'),
	(9, 'Damon Buck', 'Ut sint dicta enim d', 'Nisi eligendi sint c', 88.00, '2024-03-13 19:00:00', '2024-04-16 19:00:00', 181.00, 'active', 'giveaways/M6ILmaJfmg4CaSFdmPSrEcRoFieHXPQDq380R1Hn.png', 'png', '2024-03-10 04:00:56', '2024-04-02 03:07:58'),
	(10, 'Desirae Briggs', 'Duis laudantium lab', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed ex eget mi sollicitudin consequat. Sed rhoncus ligula vel justo dignissim aliquam. Maecenas non est vitae ipsum luctus feugiat. Fusce purus nunc, sodales at condimentum sed, ullamcorper a nulla. Nam justo est, venenatis quis tellus in, volutpat eleifend nunc. Vestibulum congue laoreet mi non interdum. Ut ut dapibus tellus.', 1000.00, '2024-03-13 19:00:00', '2024-10-16 19:00:00', 754.00, 'active', 'giveaways/1t8Pv1NEYKtpzdVdo4B70uKQQwjXCHtDdeEXzwtI.png', 'png', '2024-03-11 00:57:12', '2024-05-16 03:43:13'),
	(14, 'Roanna Benton', 'Veniam nemo exceptu', 'Ipsam voluptas qui a', 71.00, '2024-05-15 19:00:00', '2024-07-30 19:00:00', 877.00, 'active', 'giveaways/6645c5f70e1d2.png', 'png', '2024-04-27 06:46:45', '2024-05-16 03:43:23');

-- Dumping structure for table giveaways.giveaway_entries
CREATE TABLE IF NOT EXISTS `giveaway_entries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `quantity` int NOT NULL DEFAULT '1',
  `giveaway_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `giveaway_entries_user_id_foreign` (`user_id`),
  KEY `giveaway_entries_giveaway_id_foreign` (`giveaway_id`),
  CONSTRAINT `giveaway_entries_giveaway_id_foreign` FOREIGN KEY (`giveaway_id`) REFERENCES `giveaways` (`id`) ON DELETE CASCADE,
  CONSTRAINT `giveaway_entries_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.giveaway_entries: ~49 rows (approximately)
INSERT INTO `giveaway_entries` (`id`, `user_id`, `quantity`, `giveaway_id`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 1, '2024-03-13 01:29:39', '2024-03-13 01:29:39'),
	(2, 1, 1, 1, '2024-03-13 01:31:50', '2024-03-13 01:31:50'),
	(3, 1, 1, 1, '2024-03-13 01:32:05', '2024-03-13 01:32:05'),
	(4, 1, 1, 1, '2024-03-13 01:32:49', '2024-03-13 01:32:49'),
	(5, 1, 1, 1, '2024-03-13 01:32:57', '2024-03-13 01:32:57'),
	(6, 1, 1, 1, '2024-03-13 01:34:44', '2024-03-13 01:34:44'),
	(7, 1, 1, 1, '2024-03-13 01:34:49', '2024-03-13 01:34:49'),
	(8, 1, 1, 1, '2024-03-13 01:35:30', '2024-03-13 01:35:30'),
	(9, 1, 1, 1, '2024-03-13 01:35:35', '2024-03-13 01:35:35'),
	(10, 1, 1, 1, '2024-03-13 01:35:38', '2024-03-13 01:35:38'),
	(11, 1, 1, 1, '2024-03-13 01:36:47', '2024-03-13 01:36:47'),
	(12, 1, 1, 1, '2024-03-13 01:36:51', '2024-03-13 01:36:51'),
	(13, 1, 1, 1, '2024-03-13 01:39:43', '2024-03-13 01:39:43'),
	(14, 1, 1, 1, '2024-03-13 01:42:01', '2024-03-13 01:42:01'),
	(15, 1, 1, 1, '2024-03-13 01:43:39', '2024-03-13 01:43:39'),
	(16, 1, 1, 1, '2024-03-13 01:45:06', '2024-03-13 01:45:06'),
	(17, 1, 1, 1, '2024-03-13 01:45:42', '2024-03-13 01:45:42'),
	(18, 1, 1, 1, '2024-03-13 01:47:54', '2024-03-13 01:47:54'),
	(19, 1, 1, 1, '2024-03-13 01:52:48', '2024-03-13 01:52:48'),
	(20, 1, 1, 1, '2024-03-13 01:54:35', '2024-03-13 01:54:35'),
	(21, 1, 1, 1, '2024-03-13 02:07:03', '2024-03-13 02:07:03'),
	(22, 1, 1, 1, '2024-03-13 02:08:51', '2024-03-13 02:08:51'),
	(23, 1, 1, 1, '2024-03-13 02:11:12', '2024-03-13 02:11:12'),
	(24, 1, 1, 1, '2024-03-13 02:14:13', '2024-03-13 02:14:13'),
	(25, 1, 1, 1, '2024-03-13 02:19:15', '2024-03-13 02:19:15'),
	(26, 1, 1, 1, '2024-03-13 02:20:24', '2024-03-13 02:20:24'),
	(27, 1, 1, 1, '2024-03-13 02:22:24', '2024-03-13 02:22:24'),
	(28, 1, 1, 10, '2024-03-13 02:23:25', '2024-03-13 02:23:25'),
	(29, 1, 1, 1, '2024-03-13 02:25:13', '2024-03-13 02:25:13'),
	(30, 1, 1, 1, '2024-03-13 02:29:30', '2024-03-13 02:29:30'),
	(31, 1, 1, 1, '2024-03-13 02:39:47', '2024-03-13 02:39:47'),
	(32, 1, 1, 1, '2024-03-13 02:43:33', '2024-03-13 02:43:33'),
	(33, 1, 1, 1, '2024-03-13 02:45:27', '2024-03-13 02:45:27'),
	(34, 1, 1, 1, '2024-03-13 02:53:51', '2024-03-13 02:53:51'),
	(35, 1, 1, 1, '2024-03-13 02:55:16', '2024-03-13 02:55:16'),
	(36, 1, 1, 1, '2024-03-13 03:17:06', '2024-03-13 03:17:06'),
	(38, 1, 1, 2, '2024-05-11 04:44:15', '2024-05-11 04:44:15'),
	(39, 1, 1, 2, '2024-05-11 04:44:27', '2024-05-11 04:44:27'),
	(40, 1, 1, 2, '2024-05-11 04:48:36', '2024-05-11 04:48:36'),
	(41, 2, 1, 7, '2024-05-15 06:03:59', '2024-05-15 06:03:59'),
	(42, 2, 1, 9, '2024-05-15 23:52:05', '2024-05-15 23:52:05'),
	(43, 2, 1, 9, '2024-05-16 00:01:50', '2024-05-16 00:01:50'),
	(44, 1, 1, 8, '2024-05-16 00:27:18', '2024-05-16 00:27:18'),
	(45, 1, 1, 8, '2024-05-16 00:28:13', '2024-05-16 00:28:13'),
	(46, 1, 1, 8, '2024-05-16 00:28:41', '2024-05-16 00:28:41'),
	(47, 1, 1, 8, '2024-05-16 00:29:40', '2024-05-16 00:29:40'),
	(48, 1, 1, 8, '2024-05-16 00:30:20', '2024-05-16 00:30:20'),
	(49, 1, 1, 8, '2024-05-16 00:41:02', '2024-05-16 00:41:02'),
	(50, 1, 1, 8, '2024-05-16 00:42:30', '2024-05-16 00:42:30'),
	(51, 1, 1, 8, '2024-05-16 00:47:49', '2024-05-16 00:47:49'),
	(52, 1, 1, 8, '2024-05-16 00:55:41', '2024-05-16 00:55:41'),
	(53, 1, 1, 8, '2024-05-16 01:07:25', '2024-05-16 01:07:25'),
	(54, 1, 1, 8, '2024-05-16 01:16:45', '2024-05-16 01:16:45'),
	(55, 1, 1, 8, '2024-05-16 01:26:16', '2024-05-16 01:26:16'),
	(56, 1, 1, 14, '2024-05-22 07:10:52', '2024-05-22 07:10:52'),
	(57, 1, 1, 14, '2024-05-22 07:14:27', '2024-05-22 07:14:27');

-- Dumping structure for table giveaways.giveaway_specifications
CREATE TABLE IF NOT EXISTS `giveaway_specifications` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `giveaway_id` bigint unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `giveaway_specifications_giveaway_id_foreign` (`giveaway_id`),
  CONSTRAINT `giveaway_specifications_giveaway_id_foreign` FOREIGN KEY (`giveaway_id`) REFERENCES `giveaways` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.giveaway_specifications: ~8 rows (approximately)
INSERT INTO `giveaway_specifications` (`id`, `giveaway_id`, `title`, `value`, `card_icon`, `created_at`, `updated_at`) VALUES
	(1, 2, '0-62mph', '4.0 secs', 'GiveawaySpecification/OaMOjAEO0O6JGw17wlu6QJaWrkSrBTffhmiTAwLb.png', '2024-04-05 01:37:55', '2024-04-05 02:04:44'),
	(2, 2, 'Top Speed', '181 mph', 'GiveawaySpecification/szupMrgWQPrNjP4mGX2iktNYBgQA1Ql3KjBLPteY.png', '2024-04-05 01:53:42', '2024-04-05 01:53:42'),
	(3, 2, 'Power', '542 bhp', 'GiveawaySpecification/7q2P3iARcN3mdoS5Hf7zVM04RFwnN9pGZvlK0EWc.png', '2024-04-05 02:05:57', '2024-04-05 02:05:57'),
	(4, 1, 'Displacement', '4.0ltr', 'GiveawaySpecification/2tlNDXrqpvQkBZxvKmFXAMPHkOz4hGW1KopLarrk.png', '2024-04-05 02:06:41', '2024-04-05 02:06:41'),
	(5, 1, 'bhp', '691', 'GiveawaySpecification/MQBFfz58foK2JYdkzlfGJ3InpW7EbZ264YZzpPoi.png', '2024-04-05 02:07:12', '2024-04-05 02:07:12'),
	(7, 1, 'Year', '2024', 'GiveawaySpecification/lWNO0lvlS9X0zMg2R4og7Tx5zNSZ7WViRDdbQsc6.png', '2024-04-05 02:09:00', '2024-04-06 01:26:02'),
	(8, 1, '0-62mph', '4.0 secs', 'GiveawaySpecification/gR8SHF0Z0gdXulXbjdXYthMUsyt8WrzeJfNEHOfF.png', '2024-04-06 01:35:27', '2024-04-06 01:35:27'),
	(9, 1, 'Atque', 'Sed sit ', 'GiveawaySpecification/OUi3U7CnJxCVQeRiblFNn9PpCQWZ2JMofSFuGH46.png', '2024-04-06 07:02:56', '2024-04-06 07:03:52');

-- Dumping structure for table giveaways.hero_banners
CREATE TABLE IF NOT EXISTS `hero_banners` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_link_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.hero_banners: ~0 rows (approximately)
INSERT INTO `hero_banners` (`id`, `subtitle`, `title`, `description`, `button_text_1`, `button_link_1`, `file`, `created_at`, `updated_at`) VALUES
	(1, 'Contest FOR YOUR CHANCE to', 'big win', 'Now\'s your chance to win a car! Check out the prestige cars you can win in our car prize draws. Will you be our next lucky winner?', 'Participate Now', 'https://www.youtube.com/embed/d6xn5uflUjg', 'heroBanners/65fa7b04695d8.png', '2024-03-19 08:33:00', '2024-03-20 00:58:28');

-- Dumping structure for table giveaways.how_it_works
CREATE TABLE IF NOT EXISTS `how_it_works` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_icon_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_title_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_description_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_icon_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_title_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_description_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_icon_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_title_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `card_description_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.how_it_works: ~0 rows (approximately)
INSERT INTO `how_it_works` (`id`, `subtitle`, `title`, `description`, `card_icon_1`, `card_title_1`, `card_description_1`, `card_icon_2`, `card_title_2`, `card_description_2`, `card_icon_3`, `card_title_3`, `created_at`, `updated_at`, `card_description_3`) VALUES
	(1, 'Getting  started? It’s simple', 'How it works', 'The affiliate program is our special feature for Customers.Invite users and earn 40% commission', 'howItWordCardIcons/xfq0tZfzLkRu9SVzdCit5vZdjJVRzWoWq8R2fWBD.png', 'Sign up', 'Register with us as an affiliate in just a few easy steps', 'howItWordCardIcons/8scT6jZ4Zqrgjru6Tlv0xjUEWuHjnrjPSKo7MD96.png', 'Promote', 'Get links or custom affiliate links we provide', 'howItWordCardIcons/i5IzAZViOMuERdAVB0yJ7WuagYXrCCYvKJ8f3s6g.png', 'Earn', '2024-03-23 06:43:43', '2024-03-23 06:46:52', 'You receive commission on every refferal');

-- Dumping structure for table giveaways.how_to_plays
CREATE TABLE IF NOT EXISTS `how_to_plays` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `play_card_icon_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `play_card_title_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `play_card_description_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `play_card_icon_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `play_card_title_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `play_card_description_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `play_card_icon_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `play_card_title_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `play_card_description_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.how_to_plays: ~0 rows (approximately)
INSERT INTO `how_to_plays` (`id`, `subtitle`, `title`, `description`, `play_card_icon_1`, `play_card_title_1`, `play_card_description_1`, `play_card_icon_2`, `play_card_title_2`, `play_card_description_2`, `play_card_icon_3`, `play_card_title_3`, `play_card_description_3`, `created_at`, `updated_at`) VALUES
	(1, 'Need to know about', 'How To Play', 'Follow these 3 easy steps!', 'playCardIcons/wK4zaviqOaVdP1owHFv2N1OfRJBGajOLipOZScdl.png', 'Choose', 'Register to RIFA & Choose your contest', 'playCardIcons/3ocCvboF6jDATgU8vZ7yedZE7OrMrxmEMjgMz6FV.png', 'buy', 'Pick Your Numbers & Complete your Purchase', 'playCardIcons/nnKoPcjanyafOWJXNgXXiLnphyV8QrK4ZC6gLGgj.png', 'Win', 'Start Dreaming, you\'re almost there', '2024-03-20 04:10:01', '2024-03-20 04:43:30');

-- Dumping structure for table giveaways.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.jobs: ~0 rows (approximately)

-- Dumping structure for table giveaways.laravel_fulltext
CREATE TABLE IF NOT EXISTS `laravel_fulltext` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `indexable_id` int NOT NULL,
  `indexable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indexed_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `indexed_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `laravel_fulltext_indexable_type_indexable_id_unique` (`indexable_type`,`indexable_id`),
  FULLTEXT KEY `fulltext_title` (`indexed_title`),
  FULLTEXT KEY `fulltext_title_content` (`indexed_title`,`indexed_content`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.laravel_fulltext: ~8 rows (approximately)
INSERT INTO `laravel_fulltext` (`id`, `indexable_id`, `indexable_type`, `indexed_title`, `indexed_content`, `created_at`, `updated_at`) VALUES
	(1, 1, 'BinshopsBlog\\Models\\BinshopsPostTranslation', 'image How to stop lottery addiction? Lottery mistakes – check out the most common mistakes of lotto players and winners', '<h4>Lottery winners mistakes</h4>\r\n\r\n<p>Lottery winners are lucky people, but they can also make a lot of lottery mistakes. Probably they can make more mistakes than the players because when they won, euphoria and joy can hinder logical thinking. Which lottery winners mistakes are the most common? Which situations you have to avoid? Let&rsquo;s talk about the biggest lottery mistakes made by the winners of games of chance.</p>\r\n\r\n<h4>Biggest lottery mistakes in history</h4>\r\n\r\n<p>Do you want to know more about the biggest lottery mistakes? One of them is trying to double the winning by gambling. We heard about many lottery winners, who wanted to multiply the money. Their method was very dangerous because it was not an investment. They went to the casino or used the bookmaker and they&hellip; lost all the money.</p>', '2024-05-08 00:45:02', '2024-05-08 00:45:02'),
	(2, 2, 'BinshopsBlog\\Models\\BinshopsPostTranslation', '5 Tips How To Win The Lottery Lorem ipsum dolor sit amet, consectetur elit. Ut adipiscing elit. Ut tempor posuere lorem', '<p><img alt="image" src="http://starter_kits.test/front-end/assets/images/blog/2.jpg" /></p>\r\n\r\n<h3>5 Tips How To Win The Lottery</h3>\r\n\r\n<h3>Lorem ipsum dolor sit amet, consectetur elit. Ut adipiscing elit. Ut tempor posuere lorem</h3>', '2024-05-08 02:17:05', '2024-05-08 02:17:05'),
	(3, 3, 'BinshopsBlog\\Models\\BinshopsPostTranslation', 'The Positive Side To Lotteries', '<p><img alt="image" src="http://starter_kits.test/front-end/assets/images/blog/3.jpg" /></p>\r\n\r\n<h3>Lorem ipsum dolor sit amet, consectetur elit. Ut adipiscing elit. Ut tempor posuere lorem</h3>', '2024-05-08 02:22:52', '2024-05-08 02:22:52'),
	(4, 4, 'BinshopsBlog\\Models\\BinshopsPostTranslation', 'How To Plan A Lottery Win Lorem ipsum dolor sit amet, consectetur elit. Ut adipiscing elit. Ut tempor posuere lorem', '<h3>Lorem ipsum dolor sit amet, consectetur elit. Ut adipiscing elit. Ut tempor posuere lorem</h3>', '2024-05-08 02:26:08', '2024-05-08 02:26:08'),
	(5, 5, 'BinshopsBlog\\Models\\BinshopsPostTranslation', 'The Evolution of The Lottery Lorem ipsum dolor sit amet, consectetur elit. Ut adipiscing elit. Ut tempor posuere lorem', '<h3>Lorem ipsum dolor sit amet, consectetur elit. Ut adipiscing elit. Ut tempor posuere lorem</h3>', '2024-05-08 02:27:24', '2024-05-08 02:27:24'),
	(6, 6, 'BinshopsBlog\\Models\\BinshopsPostTranslation', 'Tips For Winning the Lottery Lorem ipsum dolor sit amet, consectetur elit. Ut adipiscing elit. Ut tempor posuere lorem', '<h3>Lorem ipsum dolor sit amet, consectetur elit. Ut adipiscing elit. Ut tempor posuere lorem</h3>', '2024-05-08 02:29:33', '2024-05-08 02:29:33'),
	(7, 7, 'BinshopsBlog\\Models\\BinshopsPostTranslation', 'Ex proident sapient Quam magnam nulla vo Minim tempora proide', 'Ut necessitatibus pa Optio omnis dolor f', '2024-05-10 04:25:46', '2024-05-10 04:25:46'),
	(8, 8, 'BinshopsBlog\\Models\\BinshopsPostTranslation', 'Fuga Ipsa ipsa ma Ullam animi quod Fugiat ut quia dolo', '<p>The slug (leave blank to auto generate) - i.e.http://starter_kits.test/en/blog/your-slugvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv</p> Modi tempora ut cumq Fugit consequuntur', '2024-05-10 04:25:49', '2024-05-10 04:34:25');

-- Dumping structure for table giveaways.messages
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `thread_id` int unsigned NOT NULL,
  `user_id` int unsigned NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.messages: ~0 rows (approximately)

-- Dumping structure for table giveaways.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.migrations: ~73 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
	(4, '2014_10_28_175635_create_threads_table', 1),
	(5, '2014_10_28_175710_create_messages_table', 1),
	(6, '2014_10_28_180224_create_participants_table', 1),
	(7, '2014_11_03_154831_add_soft_deletes_to_participants_table', 1),
	(8, '2014_12_04_124531_add_softdeletes_to_threads_table', 1),
	(9, '2017_03_30_152742_add_soft_deletes_to_messages_table', 1),
	(10, '2019_08_19_000000_create_failed_jobs_table', 1),
	(11, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(12, '2020_01_01_000001_create_categories_table', 1),
	(13, '2020_01_01_000002_create_categorizables_table', 1),
	(14, '2024_02_15_150006_create_sessions_table', 1),
	(15, '2024_02_15_152151_create_permission_tables', 1),
	(16, '2024_02_16_055400_add_user_type_columns_to_users_table', 1),
	(17, '2024_02_16_055508_add_phone_columns_to_users_table', 1),
	(18, '2024_02_16_055636_create_jobs_table', 1),
	(19, '2024_02_16_055802_add_last_seen_columns_to_users_table', 1),
	(20, '2024_02_16_055859_add_lang_columns_to_users_table', 1),
	(21, '2024_02_16_101836_create_activity_log_table', 1),
	(22, '2024_02_16_101837_add_event_column_to_activity_log_table', 1),
	(23, '2024_02_16_101838_add_batch_uuid_column_to_activity_log_table', 1),
	(24, '2024_02_17_070344_add_is_columns_to_messages_table', 1),
	(25, '2024_03_05_151815_create_giveaways_table', 1),
	(26, '2024_03_06_104140_add_file_type_to_giveaways_table', 1),
	(27, '2024_03_13_060411_create_giveaway_entries_table', 1),
	(28, '2024_03_19_053617_create_hero_banners_table', 1),
	(29, '2024_03_20_061010_create_how_to_play_table', 1),
	(30, '2024_03_20_074819_create_how_to_plays_table', 1),
	(31, '2024_03_20_101331_add_subtitle_title_description_to_giveaways_table', 1),
	(32, '2024_03_20_102735_create_overviews_table', 1),
	(33, '2024_03_21_070253_create_features_table', 1),
	(34, '2024_03_21_093150_create_testimonials_table', 1),
	(35, '2024_03_21_112430_create_supports_table', 1),
	(36, '2024_03_22_062431_create_abouts_table', 1),
	(37, '2024_03_22_072153_create_about_features_table', 1),
	(38, '2024_03_22_100137_create_teams_table', 1),
	(39, '2024_03_23_095602_create_affiliates_table', 1),
	(40, '2024_03_23_110618_create_how_it_works_table', 1),
	(41, '2024_03_23_114111_add_card_description_3_to_how_it_works', 1),
	(42, '2024_03_25_071213_create_affiliate-partners_table', 1),
	(43, '2024_03_25_081635_create_top_affiliates_table', 1),
	(44, '2024_03_25_100013_create_buy_tickets_table', 1),
	(45, '2024_03_25_111805_create_faqs_table', 1),
	(46, '2024_03_26_072732_create_faq_tops_table', 1),
	(47, '2024_03_26_081335_create_partners_table', 1),
	(48, '2024_03_26_161407_add_rating_1_rating_2_to_testimonials_table', 1),
	(49, '2024_03_28_054149_create_contest_tops_table', 1),
	(50, '2024_03_28_062557_create_contest_cards_table', 1),
	(51, '2024_03_30_092520_add_icon_to_categories_table', 1),
	(52, '2024_04_04_104242_create_giveaway_specifications_table', 1),
	(53, '2024_04_08_074228_create_faqs_categories_table', 1),
	(54, '2024_04_08_074545_create_faqs_categorizables_table', 1),
	(55, '2024_04_09_083650_create_terms_conditions_table', 1),
	(56, '2024_04_16_065415_create_footer_icons_table', 1),
	(57, '2024_04_16_070731_create_footer_texts_table', 1),
	(58, '2024_04_24_064340_create_wallets_logs_table', 1),
	(59, '2024_04_24_064341_create_wallets_table', 1),
	(60, '2024_04_24_064342_add_notes_and_reference_columns_to_wallets_logs_table', 1),
	(61, '2024_05_07_102647_add_columns_to_users_table', 1),
	(62, '2016_11_04_152913_create_laravel_fulltext_table', 2),
	(63, '2020_10_16_004241_create_binshops_languages_table', 2),
	(64, '2020_10_16_005400_create_binshops_categories_table', 2),
	(65, '2020_10_16_005425_create_binshops_category_translations_table', 2),
	(66, '2020_10_16_010039_create_binshops_posts_table', 2),
	(67, '2020_10_16_010049_create_binshops_post_translations_table', 2),
	(68, '2020_10_16_121230_create_binshops_comments_table', 2),
	(69, '2020_10_16_121728_create_binshops_uploaded_photos_table', 2),
	(70, '2020_10_22_132005_create_binshops_configurations_table', 2),
	(105, '2024_05_09_060042_create_blog_categories_table', 3),
	(106, '2024_05_09_062730_create_posts_table', 3),
	(107, '2024_05_09_063229_create_category_post_table', 3),
	(108, '2024_05_09_074420_create_upvote_downvotes_table', 3),
	(109, '2024_05_13_113222_create_favorites_table', 4),
	(110, '2024_05_16_052400_add_quantity_to_giveaway_entries_table', 5);

-- Dumping structure for table giveaways.model_has_permissions
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.model_has_permissions: ~0 rows (approximately)

-- Dumping structure for table giveaways.model_has_roles
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.model_has_roles: ~2 rows (approximately)
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\Models\\User', 1),
	(2, 'App\\Models\\User', 2);

-- Dumping structure for table giveaways.overviews
CREATE TABLE IF NOT EXISTS `overviews` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_icon_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_number_1` int DEFAULT NULL,
  `card_description_1` text COLLATE utf8mb4_unicode_ci,
  `card_icon_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_number_2` int DEFAULT NULL,
  `card_description_2` text COLLATE utf8mb4_unicode_ci,
  `card_icon_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_number_3` int DEFAULT NULL,
  `card_description_3` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.overviews: ~0 rows (approximately)
INSERT INTO `overviews` (`id`, `subtitle`, `title`, `description`, `card_icon_1`, `card_number_1`, `card_description_1`, `card_icon_2`, `card_number_2`, `card_description_2`, `card_icon_3`, `card_number_3`, `card_description_3`, `created_at`, `updated_at`) VALUES
	(1, 'Our Users Around the World', 'Let the number speak for us', 'Over the years we have provided millions of players with tickets to lotteries across the globe and enjoyed having more than one million winners', 'overviewCardIcons/7tzRYH65Q76SFIBOHAhWvSa4IMny9Ok3Kjbv5WWa.png', 12000, 'Verified Users', 'overviewCardIcons/GL9N3G2XhUsDvD4yAuGWW4ae9wo335qPpEJuQGFJ.png', 13, 'Years on the market', 'overviewCardIcons/w7K3bIbaDt9DHHv0r1XYNkdNOUSUA2H9TE3G0w0z.png', 98, 'Customer Satisfaction', '2024-03-21 01:24:02', '2024-05-07 03:04:11');

-- Dumping structure for table giveaways.participants
CREATE TABLE IF NOT EXISTS `participants` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `thread_id` int unsigned NOT NULL,
  `user_id` int unsigned NOT NULL,
  `last_read` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.participants: ~0 rows (approximately)

-- Dumping structure for table giveaways.partners
CREATE TABLE IF NOT EXISTS `partners` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `partner_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.partners: ~5 rows (approximately)
INSERT INTO `partners` (`id`, `partner_image`, `created_at`, `updated_at`) VALUES
	(1, 'PartnerImages/2Yeq0qxZA8AR8GUCiO4urksaCLhffzmAhosm7OF9.png', '2024-03-26 04:15:31', '2024-03-26 04:48:00'),
	(2, 'PartnerImages/IONmmBzd8ydxpkOTUhGoOeUOJwyTeHUZHRWiPcR2.png', '2024-03-26 04:33:29', '2024-03-26 04:48:25'),
	(3, 'PartnerImages/RDOS2cxU4iGMui9HlJrJN68wsdriEffFvqXRJCvx.png', '2024-03-26 04:36:48', '2024-03-26 04:48:53'),
	(6, 'PartnerImages/YvwMYUeOw6S0oyVkVw3Paqc02oRVntwkOMUxQvDn.png', '2024-03-26 04:49:19', '2024-03-26 04:49:19'),
	(7, 'PartnerImages/1BS7BjFJ0RnFfSUGMra4Vbv4kMzznvWPh8qZPHuO.png', '2024-03-26 04:49:46', '2024-03-27 02:18:02');

-- Dumping structure for table giveaways.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table giveaways.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.permissions: ~22 rows (approximately)
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'admin dashboard', 'web', '2022-10-01 10:01:18', '2022-10-01 10:54:57'),
	(2, 'manage staff', 'web', '2022-10-01 10:01:44', '2022-10-01 10:01:44'),
	(3, 'manage roles', 'web', '2022-10-01 10:01:48', '2022-10-01 10:01:48'),
	(4, 'manage permissions', 'web', '2022-10-01 10:01:54', '2022-10-01 10:01:54'),
	(5, 'manage settings', 'web', '2022-10-01 10:02:00', '2022-10-01 10:02:00'),
	(6, 'manage vendor', 'web', '2022-10-01 12:43:30', '2022-10-01 12:43:30'),
	(7, 'manage customer', 'web', '2022-10-01 12:53:08', '2022-10-01 12:53:08'),
	(8, 'request view', 'web', '2022-10-06 09:53:29', '2022-10-06 09:53:29'),
	(9, 'manage reports', 'web', '2022-10-07 01:11:16', '2022-10-07 01:11:16'),
	(10, 'manage applications', 'web', '2022-10-07 01:54:02', '2022-10-07 01:54:02'),
	(11, 'online users', 'web', '2022-10-07 04:12:32', '2022-10-07 04:12:32'),
	(12, 'manage backups', 'web', '2022-10-07 04:12:32', '2022-10-07 04:12:32'),
	(13, 'super staff', 'web', '2022-10-07 04:12:32', '2022-10-07 04:12:32'),
	(14, 'super roles', 'web', '2022-10-07 04:12:32', '2022-10-07 04:12:32'),
	(15, 'super permissions', 'web', '2022-10-07 04:12:32', '2022-10-07 04:12:32'),
	(16, 'super staff create', 'web', '2024-03-12 04:56:31', '2024-03-12 04:56:31'),
	(17, 'super language edit', 'web', '2024-03-12 04:56:56', '2024-03-12 04:56:56'),
	(18, 'super language delete', 'web', '2024-03-12 04:57:13', '2024-03-12 04:57:13'),
	(19, 'super dashboard', 'web', '2024-03-12 04:58:54', '2024-03-12 04:58:54'),
	(20, 'super staff edit', 'web', '2024-03-12 05:01:55', '2024-03-12 05:01:55'),
	(21, 'super staff delete', 'web', '2024-03-12 05:02:08', '2024-03-12 05:02:08'),
	(22, 'super languages', 'web', '2024-03-12 05:03:44', '2024-03-12 05:03:44');

-- Dumping structure for table giveaways.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table giveaways.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `published_at` timestamp NULL DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`),
  KEY `posts_user_id_foreign` (`user_id`),
  CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.posts: ~0 rows (approximately)

-- Dumping structure for table giveaways.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.roles: ~2 rows (approximately)
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'Super Admin', 'web', '2022-10-01 10:03:00', '2022-10-01 10:03:00'),
	(2, 'Admin', 'web', '2022-10-07 03:08:01', '2022-10-07 03:08:01');

-- Dumping structure for table giveaways.role_has_permissions
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.role_has_permissions: ~33 rows (approximately)
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
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
	(11, 1),
	(12, 1),
	(13, 1),
	(14, 1),
	(15, 1),
	(16, 1),
	(17, 1),
	(18, 1),
	(19, 1),
	(20, 1),
	(21, 1),
	(22, 1),
	(1, 2),
	(2, 2),
	(3, 2),
	(4, 2),
	(5, 2),
	(6, 2),
	(7, 2),
	(8, 2),
	(9, 2),
	(10, 2),
	(11, 2);

-- Dumping structure for table giveaways.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.sessions: ~1 rows (approximately)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('kw5Vs0djheuVuuNYZsh5qTkGkIOFaR3g4uHICMKA', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZXZHcDZoeHNhTG5ubEg1R3R6V1lFMzZkMDFCaEtYWHFtRU10a0RJZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHA6Ly9zdGFydGVyX2tpdHMudGVzdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl8zZGM3YTkxM2VmNWZkNGI4OTBlY2FiZTM0ODcwODU1NzNlMTZjZjgyIjtpOjE7fQ==', 1716466725);

-- Dumping structure for table giveaways.supports
CREATE TABLE IF NOT EXISTS `supports` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_icon_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_title_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_description_1` text COLLATE utf8mb4_unicode_ci,
  `card_number_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_email_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_icon_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_title_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_description_2` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.supports: ~0 rows (approximately)
INSERT INTO `supports` (`id`, `subtitle`, `title`, `description`, `card_icon_1`, `card_title_1`, `card_description_1`, `card_number_1`, `card_email_1`, `card_icon_2`, `card_title_2`, `card_description_2`, `created_at`, `updated_at`) VALUES
	(1, 'Get in touch with our friendly support', 'Customer Support', 'Have a question or need help? Contact our friendly support team.', 'supportsIcon/wW8tiJr2qkLYMw9QtNm3mXZzkQnnr7yYploybhrL.png', 'Talk to our support team', 'Got a question about Lotteries? Get in touch with our friendly staff.', '6564545', 'sezu@mailinator.com', 'supportsIcon/67HFn2S1DRjKXfGBh19S1WQa2c7YA1Vau3QVIlmu.png', 'Our Guide to Rifa', 'Check out our FAQs to see if we can help you out.', '2024-03-22 00:53:39', '2024-03-22 00:57:38');

-- Dumping structure for table giveaways.teams
CREATE TABLE IF NOT EXISTS `teams` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `team_image_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_name_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_designation_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_image_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_name_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_designation_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_image_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_name_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_designation_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.teams: ~0 rows (approximately)
INSERT INTO `teams` (`id`, `subtitle`, `title`, `description`, `team_image_1`, `team_name_1`, `team_designation_1`, `team_image_2`, `team_name_2`, `team_designation_2`, `team_image_3`, `team_name_3`, `team_designation_3`, `created_at`, `updated_at`) VALUES
	(1, 'Meet Our most Valued', 'Expert Team Members', 'These are the key drivers that make us different: Safe, Social, Reliable and Fun. Rifa Lotto is dedicated to trust and safety.', 'teamsImage/MMjms9WDKUEG7jhno1sq3G0PP5U8h3sKp7nLQJvj.png', 'Nicolas Hopkins', 'CEO', 'teamsImage/yEkANJAZUMBwvopfN3bDHTDzVTPip5g1VAzOCk0X.png', 'Orlando Mills', 'CTO', 'teamsImage/6V0RRbxbu09K9Jv5nZS16kxJpA0h6gZfPH8rRC0S.png', 'Israel Boone', 'VP, Lottery Operations', '2024-03-23 00:44:52', '2024-05-04 04:38:52');

-- Dumping structure for table giveaways.terms_conditions
CREATE TABLE IF NOT EXISTS `terms_conditions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.terms_conditions: ~1 rows (approximately)
INSERT INTO `terms_conditions` (`id`, `content`, `created_at`, `updated_at`) VALUES
	(27, '<h2>Terms and Conditions&nbsp;</h2><ol><li>Eligibility: The giveaway contest is open to participants who meet the following criteria:<ul><li>Reside in [Country/Region]</li><li>Are [Age] years of age or older</li><li>Are not employees of [Organiser Name] or their affiliates, nor members of their immediate families or households.</li></ul></li><li>Entry: To enter, participants must follow the instructions outlined in the contest post on [Social Media Platform]. Entry requirements may include liking, sharing, following, or tagging friends. Entries complete, accurate, or submitted after the deadline will be disqualified.</li><li>Duration: The giveaway contest starts on [Start Date] and ends on [End Date] at [Time] [Time Zone]. Only entries submitted before the deadline will be considered.</li><li>Prize: The winner will receive [Prize Description]. The prize, as defined in the terms, is non-transferable, and there will be no cash alternatives to it. [Organiser Name] reserves the right to substitute the prize with a product or service of equal value.</li><li>Winner Selection: The winner will be selected randomly from all eligible entries by the deadline. The winner will be notified by [Social Media Platform] direct message within [Number of Days] days after the deadline. If the winner does not respond within [Number of Days], another winner will be selected.</li><li>Publicity: By participating in the giveaway contest, the winner agrees to allow [Organiser Name] to use their name, photograph, and likeness for promotional and advertising purposes without compensation.</li><li>Liability: [Organiser Name] is not responsible for any injury, loss, or damage to participants or their property related to their participation in the giveaway contest. Participants agree to release and hold harmless [Organiser Name] and their affiliates from any liability, injury, loss, or damage resulting from participation in the giveaway contest or acceptance, use, or misuse of the prize.</li><li>Governing Law: The giveaway contest and these terms and conditions are governed by and construed per the laws of [Country/Region].</li><li>Dispute Resolution: Any dispute arising from or related to the giveaway contest or these terms and conditions will be resolved through binding arbitration per the rules of [Arbitration Service]. The arbitration will occur in [City], [Country/Region], and the arbitrator’s decision will be final and binding.</li><li>Modification: [Organiser Name] reserves the right to modify, suspend, or terminate the giveaway contest without notice. [Organiser Name] also reserves the right to modify these terms and conditions without notice.</li><li>This giveaway terms template has been provided for free by <a href="https://giveawaylisting.com/">GiveawayListing.com</a> as a reference point but does not constitute a legal claim by anyone beyond the [Organiser Name]</li></ol><p>By participating in the giveaway contest, participants agree to be governed by these terms and conditions, as defined by the Ahmad Saeed</p>', '2024-05-16 06:46:39', '2024-05-16 06:46:39'),
	(28, '<h2>&nbsp;</h2><ol><li>Eligibility: The giveaway contest is open to participants who meet the following criteria:<ul><li>Reside in [Country/Region]</li><li>Are [Age] years of age or older</li><li>Are not employees of [Organiser Name] or their affiliates, nor members of their immediate families or households.</li></ul></li><li>Entry: To enter, participants must follow the instructions outlined in the contest post on [Social Media Platform]. Entry requirements may include liking, sharing, following, or tagging friends. Entries complete, accurate, or submitted after the deadline will be disqualified.</li><li>Duration: The giveaway contest starts on [Start Date] and ends on [End Date] at [Time] [Time Zone]. Only entries submitted before the deadline will be considered.</li><li>Prize: The winner will receive [Prize Description]. The prize, as defined in the terms, is non-transferable, and there will be no cash alternatives to it. [Organiser Name] reserves the right to substitute the prize with a product or service of equal value.</li><li>Winner Selection: The winner will be selected randomly from all eligible entries by the deadline. The winner will be notified by [Social Media Platform] direct message within [Number of Days] days after the deadline. If the winner does not respond within [Number of Days], another winner will be selected.</li><li>Publicity: By participating in the giveaway contest, the winner agrees to allow [Organiser Name] to use their name, photograph, and likeness for promotional and advertising purposes without compensation.</li><li>Liability: [Organiser Name] is not responsible for any injury, loss, or damage to participants or their property related to their participation in the giveaway contest. Participants agree to release and hold harmless [Organiser Name] and their affiliates from any liability, injury, loss, or damage resulting from participation in the giveaway contest or acceptance, use, or misuse of the prize.</li><li>Governing Law: The giveaway contest and these terms and conditions are governed by and construed per the laws of [Country/Region].</li><li>Dispute Resolution: Any dispute arising from or related to the giveaway contest or these terms and conditions will be resolved through binding arbitration per the rules of [Arbitration Service]. The arbitration will occur in [City], [Country/Region], and the arbitrator’s decision will be final and binding.</li><li>Modification: [Organiser Name] reserves the right to modify, suspend, or terminate the giveaway contest without notice. [Organiser Name] also reserves the right to modify these terms and conditions without notice.</li><li>This giveaway terms template has been provided for free by <a href="https://giveawaylisting.com/">GiveawayListing.com</a> as a reference point but does not constitute a legal claim by anyone beyond the [Organiser Name]</li></ol><p>By participating in the giveaway contest, participants agree to be governed by these terms and conditions, as defined by the Ahmad Saeed</p>', '2024-05-16 06:53:54', '2024-05-16 06:53:54');

-- Dumping structure for table giveaways.testimonials
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_image_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_name_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_description_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating_1` tinyint unsigned DEFAULT NULL,
  `slider_image_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_name_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_description_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating_2` tinyint unsigned DEFAULT NULL,
  `slider_image_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_name_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_description_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` tinyint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.testimonials: ~0 rows (approximately)
INSERT INTO `testimonials` (`id`, `subtitle`, `title`, `description`, `slider_image_1`, `client_name_1`, `slider_description_1`, `rating_1`, `slider_image_2`, `client_name_2`, `slider_description_2`, `rating_2`, `slider_image_3`, `client_name_3`, `slider_description_3`, `rating`, `created_at`, `updated_at`) VALUES
	(1, 'Testimonial', 'our Happy Customers All Around the World', 'With over 12 years of experience as the world’s leading online lottery service provider. Find out what our members have to say about us!', 'testimonials/9j55vjBYIXyLcMfnJQB0jSk7ySfIjX1Gf89Z92VW.png', 'Dave Ford', '“Unbelievable this is a dream come true,no way would I ever think I would own a car like this” ', 3, 'testimonials/oBdSQpZFsdBy5igxana7ZuYrSDvCEoNUEYPgbdhO.png', 'Dave Ford', '“Unbelievable this is a dream come true,no way would I ever think I would own a car like this” ', 5, 'testimonials/TraTOWR5qCFHLAQp9HohW4WQkNyJoOKlFp40eNUA.png', 'Dave Ford', '“Unbelievable this is a dream come true,no way would I ever think I would own a car like this” ', 4, '2024-03-21 05:57:59', '2024-03-28 03:01:33');

-- Dumping structure for table giveaways.threads
CREATE TABLE IF NOT EXISTS `threads` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.threads: ~0 rows (approximately)

-- Dumping structure for table giveaways.top_affiliates
CREATE TABLE IF NOT EXISTS `top_affiliates` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_image_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_name_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_amount_1` decimal(10,2) NOT NULL,
  `card_image_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_name_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_amount_2` decimal(10,2) NOT NULL,
  `card_image_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_name_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_amount_3` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.top_affiliates: ~0 rows (approximately)
INSERT INTO `top_affiliates` (`id`, `subtitle`, `title`, `description`, `card_image_1`, `card_name_1`, `card_amount_1`, `card_image_2`, `card_name_2`, `card_amount_2`, `card_image_3`, `card_name_3`, `card_amount_3`, `created_at`, `updated_at`) VALUES
	(1, 'Top-Earning Affiliate', 'Top-Earning Affiliate', 'Become a Rifa affiliate and start earning each month', 'TopAffiliateIcons/OQfr22HYBI5jfEC24lQPNHy6DCm5Ri878PuH4A4v.jpg', 'Ricky Moran', 5026.00, 'TopAffiliateIcons/aVNWdkGYesHLhfueNvi6aUwBSz86kKjoIYDe4ACj.jpg', 'Ken Harper', 5026.00, 'TopAffiliateIcons/Wm5QmZ6pXIXMtwtHWHqDxE3z4e5RHABcQWqPOeIy.jpg', 'Lewis Frank', 5026.00, '2024-03-25 04:38:33', '2024-03-27 02:42:13');

-- Dumping structure for table giveaways.upvote_downvotes
CREATE TABLE IF NOT EXISTS `upvote_downvotes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `is_upvote` tinyint(1) NOT NULL,
  `post_id` int unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `upvote_downvotes_post_id_index` (`post_id`),
  KEY `upvote_downvotes_user_id_index` (`user_id`),
  CONSTRAINT `upvote_downvotes_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `binshops_posts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `upvote_downvotes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.upvote_downvotes: ~0 rows (approximately)

-- Dumping structure for table giveaways.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `user_type` tinyint NOT NULL DEFAULT '0',
  `last_seen` timestamp NULL DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `useraddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.users: ~18 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `status`, `user_type`, `last_seen`, `lang`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `date_of_birth`, `useraddress`) VALUES
	(1, 'System', 'ahmadsaeed@gmail.com', 3046255015, '2024-01-01 15:00:31', '$2y$12$R1d0/WS7EpoxPtQHXGxMeuI1t7nV7XI55GPx23mv1jEZLEmOl3nyK', 1, -1, NULL, NULL, NULL, NULL, NULL, 'eSUl4cOqx8hq18i1lHytO9Zy28vCUUB8UTpzGnuiD1PhVJ3mM8rSVVxq1RcN', NULL, 'profile_pictures/663df64b70f00.jpg', '2024-01-01 15:00:31', '2024-05-10 05:27:36', '2001-11-08', 'Purani Sabzi Mandi Pakpattan'),
	(2, 'Admin', 'admin@admin.com', 3046255015, NULL, '$2y$12$R1d0/WS7EpoxPtQHXGxMeuI1t7nV7XI55GPx23mv1jEZLEmOl3nyK', 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-01 15:00:31', '2024-01-01 15:00:31', NULL, NULL),
	(3, 'Odessa Hawkins', 'fivosana@mailinator.com', NULL, NULL, '$2y$12$vshP9.USXg0HaMHn1WhRK.IzkjjsF71YC0heIjNDXGRfRSbayIBt2', 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-13 00:42:37', '2024-05-17 06:02:10', NULL, NULL),
	(4, 'Yoko Bowman', 'kypivesopu@mailinator.com', NULL, NULL, '$2y$12$.lHmQqVaYjMJYOuMgxhgoeA0x/XD8ZKWI7kz4qT3wprM1WjRFLjue', 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-13 00:44:22', '2024-03-13 00:44:22', NULL, NULL),
	(5, 'Leila Joseph', 'zosyga@mailinator.com', NULL, NULL, '$2y$12$h3FHfIYZTIFRWJrXaeIoCO7QVhqOO1MQdogE438XAMpNYXY4Ao5sS', 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-13 00:45:04', '2024-03-13 00:45:04', NULL, NULL),
	(6, 'Suki Trevino', 'luxyjinel@mailinator.com', NULL, NULL, '$2y$12$sAoEH6Vwj/i0nrNllCGB/exQOk99Mozvugu3gGG14apHyN6N1TCX2', 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-13 00:45:44', '2024-03-13 00:45:44', NULL, NULL),
	(7, 'Katelyn Burns', 'jotadedo@mailinator.com', NULL, NULL, '$2y$12$nra15zsynxROvrh7m/5/KeoeRr0JttyqSR1PY6QMCToZqrYZBsVX6', 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-13 00:46:24', '2024-03-13 00:46:24', NULL, NULL),
	(8, 'Whitney Mccormick', 'vucec@mailinator.com', NULL, NULL, '$2y$12$wDH5kcudIzH3F4UXxSUGZuFQ66nLSd7TQg5Hb2ASETxWTUIDn9tjy', 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-13 00:47:12', '2024-03-13 00:47:12', NULL, NULL),
	(9, 'Sloane Mayo', 'pufybewytu@mailinator.com', NULL, NULL, '$2y$12$rhsZ4sZAAhpnB8U76QH6OuKodRvoPeFKtYgl3tKt.bJZxXU1t8rAu', 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-13 00:47:55', '2024-03-13 00:47:55', NULL, NULL),
	(10, 'Chloe Wilcox', 'pilodu@mailinator.com', NULL, NULL, '$2y$12$KiXChXPpILKOuTsQ1wz1hOhaf99mbk2kNi..3UJD3DTUNjdad6eYC', 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-13 00:48:33', '2024-03-13 00:48:33', NULL, NULL),
	(11, 'Justin Pickett', 'qimupaso@mailinator.com', NULL, NULL, '$2y$12$DZQOH5gsNbYwTie0mGqTIuWS09dBrYyd2ay6mDeM0hF6.rTgPS8ZW', 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-13 00:49:09', '2024-03-13 00:49:09', NULL, NULL),
	(12, 'Neve Mullen', 'honel@mailinator.com', NULL, NULL, '$2y$12$ISo6aFqd.6y.OhToojQY3.Uun950cWdpMcIvEYCc2/0cV6PbhjkHa', 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-13 00:49:51', '2024-03-13 00:49:51', NULL, NULL),
	(13, 'Yuli Fisher', 'suxoruqodi@mailinator.com', NULL, NULL, '$2y$12$mL0hkU9kMrypZ9WqhmMVTODVWF9GCvPNVk5yDF5U66n623ICqOcrC', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-28 04:58:24', '2024-03-28 04:58:24', NULL, NULL),
	(14, 'Aphrodite Benton', 'salygyfyl@mailinator.com', NULL, NULL, '$2y$12$.pc2LWGlwpmpjbCeewaNBOvlU9F0h0GoHPxQKcervU95yAOCL7KiK', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-28 04:59:04', '2024-03-28 04:59:04', NULL, NULL),
	(15, 'Blue-Yellow', 'ahmad3@gmail.com', NULL, NULL, '$2y$12$S.ysjUHA0ncEgorxtP775OoIi9YEATGhRTNzc1myvLP4ocsBdCSai', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-28 05:01:29', '2024-03-28 05:01:29', NULL, NULL),
	(16, 'Penelope Oconnor', 'lexi@mailinator.com', NULL, NULL, '$2y$12$gOepmPfwvSuzY/g1nin/2e5IZYrzK3E6EeDHx4qMJQRor6NsZhJS6', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-28 06:06:57', '2024-03-28 06:06:57', NULL, NULL),
	(17, 'Quyn Flowers', 'mykakid@mailinator.com', NULL, NULL, '$2y$12$S7MnLV.e9biZXILuNSMUNOXq4WJlhAuTPm5tQHMG/cWU87bJwHsJO', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-28 06:08:39', '2024-03-28 06:08:39', NULL, NULL),
	(18, 'Ethan House', 'cily@mailinator.com', NULL, NULL, '$2y$12$oUco1A5uH6MXiOdoALDjO..BFO6bieFhD2LpDmHBMcDLzPoPuuveq', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-29 05:57:00', '2024-03-29 05:57:00', NULL, NULL),
	(19, 'Lev Hickman', 'silenidaq@mailinator.com', 2044535343, NULL, '$2y$12$ZNxKYUwqBJC4131COVZq2eAfUMXGu/0n1IlwM78Y5oYzg6VX.mE/G', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-11 00:13:28', '2024-05-11 06:04:19', '2024-06-10', 'htrhtrhtrshtrshsrh'),
	(20, 'Isaac Mclean', 'jywiluf@mailinator.com', NULL, NULL, '$2y$12$095qflfr63FuPaQXCZtucOS9WetDPWv/0u/jiB7V9v8UsgEfyszDO', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-15 03:30:51', '2024-05-15 03:30:51', NULL, NULL);

-- Dumping structure for table giveaways.wallets
CREATE TABLE IF NOT EXISTS `wallets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `owner_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_id` bigint unsigned NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `balance` decimal(16,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `wallets_owner_type_owner_id_index` (`owner_type`,`owner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.wallets: ~3 rows (approximately)
INSERT INTO `wallets` (`id`, `owner_type`, `owner_id`, `type`, `balance`, `created_at`, `updated_at`) VALUES
	(1, 'App\\Models\\User', 1, 'wallet_2', 202.00, '2024-05-04 06:25:15', '2024-05-22 07:10:51'),
	(2, 'App\\Models\\User', 1, 'wallet_1', 20.00, '2024-05-11 04:48:09', '2024-05-22 07:14:27'),
	(3, 'App\\Models\\User', 2, 'wallet_2', 148.00, '2024-05-11 04:58:42', '2024-05-16 00:01:50'),
	(4, 'App\\Models\\User', 19, 'wallet_2', 1000.00, '2024-05-11 04:59:19', '2024-05-11 04:59:19');

-- Dumping structure for table giveaways.wallets_logs
CREATE TABLE IF NOT EXISTS `wallets_logs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `loggable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loggable_id` bigint unsigned NOT NULL,
  `wallet_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` decimal(16,2) NOT NULL,
  `from` decimal(16,2) NOT NULL,
  `to` decimal(16,2) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `wallets_logs_loggable_type_loggable_id_index` (`loggable_type`,`loggable_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table giveaways.wallets_logs: ~5 rows (approximately)
INSERT INTO `wallets_logs` (`id`, `loggable_type`, `loggable_id`, `wallet_name`, `value`, `from`, `to`, `type`, `status`, `notes`, `ip`, `reference`, `created_at`, `updated_at`) VALUES
	(1, 'HPWebdeveloper\\LaravelPayPocket\\Models\\Wallet', 1, 'wallet_2', 1000.00, 0.00, 1000.00, 'inc', 'Done', NULL, '127.0.0.1', 'aYJzW9IjP83H', '2024-05-04 06:25:15', '2024-05-04 06:25:15'),
	(2, 'HPWebdeveloper\\LaravelPayPocket\\Models\\Wallet', 2, 'wallet_1', 1000.00, 0.00, 1000.00, 'inc', 'Done', 'Coin', '127.0.0.1', 'ECpkUFM45W4G', '2024-05-04 07:12:13', '2024-05-04 07:12:13'),
	(3, 'HPWebdeveloper\\LaravelPayPocket\\Models\\Wallet', 3, 'wallet_2', 50000.00, 0.00, 50000.00, 'inc', 'Done', 'Coin', '127.0.0.1', 'JVw0nsiMeIZS', '2024-05-06 03:07:39', '2024-05-06 03:07:39'),
	(4, 'HPWebdeveloper\\LaravelPayPocket\\Models\\Wallet', 2, 'wallet_1', 1000.00, 0.00, 1000.00, 'inc', 'Done', 'Coin', '127.0.0.1', '4uaQeXCg5iIy', '2024-05-11 04:48:10', '2024-05-11 04:48:10'),
	(5, 'HPWebdeveloper\\LaravelPayPocket\\Models\\Wallet', 3, 'wallet_2', 1000.00, 0.00, 1000.00, 'inc', 'Done', NULL, '127.0.0.1', 'xtUXkt9E7GKa', '2024-05-11 04:58:42', '2024-05-11 04:58:42'),
	(6, 'HPWebdeveloper\\LaravelPayPocket\\Models\\Wallet', 4, 'wallet_2', 1000.00, 0.00, 1000.00, 'inc', 'Done', '', '127.0.0.1', 'EuK2NsEeI6WJ', '2024-05-11 04:59:19', '2024-05-11 04:59:19'),
	(7, 'HPWebdeveloper\\LaravelPayPocket\\Models\\Wallet', 2, 'wallet_1', 100.00, 0.00, 100.00, 'inc', 'Done', NULL, '127.0.0.1', 'xnpZfGS2wJmn', '2024-05-15 05:32:04', '2024-05-15 05:32:04');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
