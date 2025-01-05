/*
Navicat MySQL Data Transfer

Source Server         : php74
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : product_category_management

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2025-01-05 18:42:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `categories`
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', 'Female Fashion', '2025-01-05 09:17:24', '2025-01-05 09:47:08');
INSERT INTO `categories` VALUES ('2', 'Male Fashion', '2025-01-05 09:46:32', '2025-01-05 09:46:32');
INSERT INTO `categories` VALUES ('3', 'Electronics', '2025-01-05 09:46:41', '2025-01-05 09:46:41');
INSERT INTO `categories` VALUES ('4', 'Grossary', '2025-01-05 09:46:51', '2025-01-05 09:46:51');
INSERT INTO `categories` VALUES ('6', 'Rice', '2025-01-05 10:45:52', '2025-01-05 10:54:22');
INSERT INTO `categories` VALUES ('10', 'Biscuit', '2025-01-05 10:54:31', '2025-01-05 10:54:31');
INSERT INTO `categories` VALUES ('11', 'Salt', '2025-01-05 12:17:49', '2025-01-05 12:17:49');

-- ----------------------------
-- Table structure for `category_product`
-- ----------------------------
DROP TABLE IF EXISTS `category_product`;
CREATE TABLE `category_product` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_product_category_id_foreign` (`category_id`),
  KEY `category_product_product_id_foreign` (`product_id`),
  CONSTRAINT `category_product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `category_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of category_product
-- ----------------------------
INSERT INTO `category_product` VALUES ('2', '1', '2', null, null);
INSERT INTO `category_product` VALUES ('4', '2', '1', null, null);
INSERT INTO `category_product` VALUES ('5', '3', '3', null, null);
INSERT INTO `category_product` VALUES ('6', '3', '4', null, null);
INSERT INTO `category_product` VALUES ('7', '4', '5', null, null);
INSERT INTO `category_product` VALUES ('8', '1', '6', null, null);
INSERT INTO `category_product` VALUES ('9', '2', '6', null, null);
INSERT INTO `category_product` VALUES ('10', '1', '7', null, null);
INSERT INTO `category_product` VALUES ('11', '2', '7', null, null);
INSERT INTO `category_product` VALUES ('12', '3', '7', null, null);

-- ----------------------------
-- Table structure for `failed_jobs`
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_reset_tokens_table', '1');
INSERT INTO `migrations` VALUES ('3', '2019_08_19_000000_create_failed_jobs_table', '1');
INSERT INTO `migrations` VALUES ('4', '2019_12_14_000001_create_personal_access_tokens_table', '1');
INSERT INTO `migrations` VALUES ('5', '2025_01_05_085940_create_categories_table', '1');
INSERT INTO `migrations` VALUES ('6', '2025_01_05_085947_create_products_table', '1');
INSERT INTO `migrations` VALUES ('7', '2025_01_05_090037_create_category_product_table', '1');

-- ----------------------------
-- Table structure for `password_reset_tokens`
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for `personal_access_tokens`
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for `products`
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', 'T-Shirt', '500.00', 'products/xp5Y29M9Zz7jdAZcS1KdPa7KKTgdtYSbsfjWWXJT.jpg', '2025-01-05 09:23:23', '2025-01-05 09:49:05');
INSERT INTO `products` VALUES ('2', 'Shari', '5000.00', 'products/DeiFWorDUE3kUYWd7OphroKe62cUACHIt0lvitv7.jpg', '2025-01-05 09:30:42', '2025-01-05 09:48:52');
INSERT INTO `products` VALUES ('3', 'Smartphone', '20000.00', 'products/VomJ8rfQHYLbzNBL325nAbBGBIx46vrp6D842PRv.jpg', '2025-01-05 09:34:40', '2025-01-05 09:49:01');
INSERT INTO `products` VALUES ('4', 'Laptop', '80000.00', 'products/Xd0A2ewVqhqY4CMLs1tEkIy5jMuT2yMsK24Uabrd.jpg', '2025-01-05 09:49:38', '2025-01-05 09:49:38');
INSERT INTO `products` VALUES ('5', 'Sugar', '150.00', 'products/PB1yO7QuNx4Ck8H4OHwkzdEH7xBxRq7eyqLDEm2w.jpg', '2025-01-05 09:49:59', '2025-01-05 09:49:59');
INSERT INTO `products` VALUES ('6', 'T-Shirt', '450.00', 'products/qcCRp2WDvXNLiOfIivX7Dw6fyc2PA3By09dDJjAS.jpg', '2025-01-05 09:50:29', '2025-01-05 09:50:29');
INSERT INTO `products` VALUES ('7', 'Headphone', '350.00', 'products/MKSAzCWgliJv0Ff677amvTOvUD7o9YzTpvHbXx3J.jpg', '2025-01-05 09:51:37', '2025-01-05 09:51:37');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
